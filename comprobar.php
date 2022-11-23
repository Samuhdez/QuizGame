<?php
include("conn/header.php");
// Sino hay puntuacion o estamos en la primera ronda, iniciamos en 0
	if(!isset($_SESSION['puntuacion']) || $_SESSION['nPregunta'] === 1 ){
		$_SESSION['puntuacion']=0;
	}
		
    if(isset($_POST['submit'])){
        if(!empty($_POST['quizcheck'])) {
			$marcada = $_POST['quizcheck'];   
			$i = $_SESSION['nPregunta'];
            $pre1= " select res_id from preguntas where pre_id = $i";
            $resConsulta = mysqli_query($con,$pre1);
            while($arrRes = mysqli_fetch_array($resConsulta)) {
            	$aux = $arrRes['res_id'] == $marcada[$i];
            	if($aux){ //Si la respuesta es correcta
            		$_SESSION['puntuacion'] += 1;
            		}
            	$_SESSION['nPregunta']+=1;				
        	}
		}else{
	        //Si no has marcado casilla
			$_SESSION['nPregunta']+=1;
	    }
	}  
	if($_SESSION['nPregunta']>10){	//Si es la ultima pregunta guardamos resultado en base de datos;
    	$nick = $_SESSION['nick'];
		$resultado = $_SESSION['puntuacion'];
    	$resFinal = " insert into puntuaciones(nick, puntuacion) values ('$nick','$resultado') ";
    	$queryresultado= mysqli_query($con,$resFinal); 
		$_SESSION['nPregunta']=1;	//dejamos la sesion lista para la prox partida
		if($resultado<3){ //Si la respuesta es correcta
			$_SESSION['cat'] = 1;
		}else if(3<=$resultado && $resultado<5){
			$_SESSION['cat'] = 2;
		}else if(5<=$resultado && $resultado<8){
			$_SESSION['cat'] = 3;
		}else{
			$_SESSION['cat'] = 4;
		}

		header("Location: resultado.php");
	}else{
		header("Location: home.php");
	}
?>
   </body>
</html>
<?php   
   $con->close();
?>
