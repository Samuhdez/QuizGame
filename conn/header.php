<?php
session_start();
require 'connection.php';

if(isset($_SESSION['email'])) {
    $userEmail = $_SESSION['email'];    
    $consulta = 
            " SELECT `nick`, `foto`" .
            " FROM `users`" .
            " WHERE `email` = '$userEmail'";
    $result = mysqli_query($con, $consulta);
    $row = mysqli_fetch_array($result);
            $userNick = $row['nick'];
            $_SESSION['nick'] = $row['nick'];
            $userFotoLink = $row['foto'];
            echo "<script>console.log('$userFotoLink');</script>";
}
else {
    header("Location: http://localhost/quizPrueba/login.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" media="screen" href="estilo/stilo.css">
    <title>Quiz</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand text-white" href="http://localhost/quizPrueba/inicio.php">Inicio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-white" href="http://localhost/quizPrueba/home.php">Quiz <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="http://localhost/quizPrueba/puntuaciones.php"> Top Puntuaciones</a>
            </li>      
        </ul>
        <img src="img/perfil/<?php echo $userFotoLink;?>" alt="fotoPerfil" class="rounded float-end" style="width: 5vw;">
        <span class="navbar-text" >
            <h6 class="text-white">Nick: <?php echo $userNick;?></h6>    
        </span>        
        <span class="navbar-text ">
            <a class="nav-link text-white" href="logout.php">Cerrar Sesion</a>
        </span>
    </div>
    </nav>
    