<?php
//autores: Omar Alonso, Pablo Ramirez, Ignacio Rodríguez
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Array con usuarios y contraseñas
    $usuarios = array("user1" => "pass1", "user2" => "pass2", "user3" => "pass3");

    // Verificar si el nombre de usuario y la contraseña coinciden con el array
    if (isset($_POST["nombre"]) && isset($_POST["clave"])) {
        $usuario = $_POST["nombre"];
        $clave = $_POST["clave"];
				//Si $usuario esta en el array $usuarios y si ($usuarios[$usuario] => $clave) = $clave 
        if (array_key_exists($usuario, $usuarios) && $usuarios[$usuario] === $clave) {
            $_SESSION["nombre"] = $usuario;
            header("Location: index.php");
            exit();
        } else {
            echo "Error: Nombre de usuario o contraseña incorrectos";
            echo '<a href="login.php">Volver a inicio de sesión</a>';
        }
    } else {
        echo "Error: Nombre de usuario o contraseña no proporcionados";
        echo '<a href="login.php">Volver a inicio de sesión</a>';
    }
} else {
    header("Location: login.php");
    exit();
}
?>