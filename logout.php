<?php
include("conn/header.php");

session_destroy();
$con->close();
header("Location: http://localhost/quizPrueba/loginQuiz.html");

?>    
    