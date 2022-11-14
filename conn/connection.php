<?php

$con = mysqli_connect("localhost","root","", "quiz");

// Check connection
if (!$con) {
    die("Error de conexion: " . mysqli_connect_error());
}
?>