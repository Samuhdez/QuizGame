<?php
   include("conn/header.php");
   //comprobar la categoria
   $aux = $_SESSION['puntuacion'];
   $cat = $_SESSION["cat"];
   switch($cat){
    case 1:
?>
   <!-- HTML comienza en header -->
        <div class="container">
            <br><br>
            <h1 class="text-center">  Resultado: <?php echo $aux ?></h1><br>
            <img id="huevo" class="imgcat" src="img/cat1.jpg" alt="pok" >
            <br>
            <h4>Pequeño entrenador, </h4>
            <h4>aun tienes muchas horas por delante para ser un verdadero otaku.</h4>
<?php
   break;
        
   case 2:
?>
        <div class="container">
            <br><br>
            <h1 class="text-center">  Resultado: <?php echo $aux ?></h1><br>
            <img id="char" class="imgcat" src="img/cat2.png" alt="pok" >
            <h4>Has emprendido el camino del otaku, </h4>
            <h4>pero aun quedan muchos terrenos nuevos por alcanzar.</h4>
<?php
   break;
        
   case 3:
?>
        <div class="container">
            <br><br>
            <h1 class="text-center">  Resultado: <?php echo $aux ?></h1><br>
            <img id="charm" class="imgcat" src="img/cat3.jpg" alt="pok" >
            <h4>Te consideras un otaku,</h4>
            <h4> pero aun no has alcanzado tu potencial .</h4>
<?php
   break;
        
   case 4:
?>
        <div class="container">
            <br><br>
            <h1 class="text-center">  Resultado: <?php echo $aux ?></h1><br>
            <img id="charr" class="imgcat" src="img/cat4.jpg" alt="pok" >
            <h4>Eres un verdadero otaku, </h4>
            <h4>quizás vaya siendo hora de salir de casa.</h4>
<?php
   break;
}
?>
            <footer>
                <div><a href="puntuaciones.php">Puntuaciones</a><a href="logout.php">Cerrar Sesion</a></div>
                <h5 class="text-center"> &copy2022  quiz</h5> 
            </footer>
        </div>      
    </body>
</html>
<?php   
   $con->close();
?>