<?php
//autores: Omar Alonso, Pablo Ramirez, Ignacio Rodríguez
session_start();

// Destruir todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir al inicio
header("Location: login.php");
exit();
?>