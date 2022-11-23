<?php
   include("conn/header.php");
   //Sino se ha registrado un nPregunta previo, es decir no estamos en una ronda de quiz, lo situamos en la primera.
   if(!isset($_SESSION['nPregunta'])) {
    $_SESSION['nPregunta'] = 1;
}
   ?>
   <!-- HTML comienza en header -->
        <div class="container">
            <br><br>
            <h1 class="text-center">  Quiz Game </h1><br>
            <a href="home.php" alt="quiz"><img id="qz" src="img/quiz.jpg" alt="quiz" ></a>
            
            <a href="home.php">Quiz</a>
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
