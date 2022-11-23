<?php
session_start();
require 'conn/connection.php';

if (isset($_POST["log"]) === true) {
    $nombre = $_POST["username"];
    $pass = $_POST["password"];
    $pass = md5($pass);
    $query =                            //Si la consulta tiene resultado, logeamos y guardamos el correo en la sesiones, sino devolvemos a login
    " SELECT `email` " .
    " FROM `users` " .
    " WHERE `password` = '$pass'".
    " AND `nombre` = '$nombre'";

    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    if(!$row) {
        echo(mysqli_error($con));
        //header("Location: http://localhost/quizPrueba/loginQuiz.html");
    }else{
        //guardamos el email en las sesiones 
        $_SESSION['email']  = $row['email'];          
        header("Location: inicio.php");
    }
}

if (isset($_POST["Confirmar"]) === true) {
    $nombreReg = $_POST["userNombre"];
    $passReg = $_POST["password"];
    $pass2Reg = $_POST["password2"];
    $nickReg = $_POST["userNick"];
    $emailReg = $_POST["email"];
    $fotoReg = $_FILES["fotoPerfil"]["name"];
    $upl = move_uploaded_file($_FILES["fotoPerfil"]["tmp_name"],"img/perfil/" . $_FILES["fotoPerfil"]["name"]);
    if($upl){
		echo "<br>Fichero guardado";
    } else {
        echo "<br>Error";
    }
 
    
    $query1 =                                   //consulta para comprobar que el email no esta registrado
    " SELECT `email` " .
    " FROM `users` " .
    " WHERE `email` = '$emailReg'";
    $result1 = mysqli_query($con, $query1);
    // echo "<script>console.log('*');</script>"; 
    $row = mysqli_fetch_array($result1);
    // echo "<script>console.log('$row[0]');</script>";
        if($row===null){
            // echo "<script>console.log('2*');</script>";
            if($passReg === $pass2Reg){             //Si las contraseñas coinciden
                // echo "<script>console.log('3*');</script>";
                $passReg =md5($passReg);            
                $registro = "INSERT INTO users (nombre, email, password, nick, foto) VALUES ('$nombreReg','$emailReg','$passReg','$nickReg','$fotoReg')";
                if (mysqli_query($con, $registro)) {
                    //guardamos datos que necesitaremos mas tarde en la sesion.
                    $_SESSION['email']  = $emailReg;
                    $_SESSION['nPregunta']  = 1;
                    $_SESSION['puntuacion']  = 0;
                    // echo "<script>console.log('5*');</script>";
                    header("Location: inicio.php");                    
                }else{
                    // echo "<script>console.log('4*');</script>";
                    header("Location:  loginQuiz.html");
                }
            }
        }else{
            // echo "<script>console.log('6*');</script>";
            header("Location:  loginQuiz.html");
        }
}
$con->close();
?>