<<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
	<meta name="author" content="Omar Alonso">
	<meta name="author" content="Pablo Ramirez">
	<meta name="author" content="Ignacio Rodríguez">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <header>
			<img src="img/logo.png" alt="logo">
    </header>
    <main>
        <?php
        session_start();

        // Verificar si el usuario ya está autenticado
        if (isset($_SESSION["nombre"])) {
			header("Location: index.php");
			exit();
        }
          // Mostrar el formulario de inicio de sesión si no está autenticado
        ?>
        <form action="procesar_login.php" method="post">
		    <label for="nombre">Nombre de usuario:</label>
			<br>
		    <input type="text" name="nombre" id="nombre" placeholder=" usuario"  class="borde">
			<br>
			<br>
			<label for="clave">Contraseña: </label>
			<br>
			<input type="password" name="clave" id="clave" placeholder=" contraseña" class="borde">
			<br>
			<br>
			<input type="submit" value="Enviar" class="botonColor">
        </form>    
    </main>
    <footer>
		<div>
            <p class="nombre">Autores: Omar Alonso, Pablo Ramirez, Ignacio Rodriguez</p>
            <p class="extra">&copy; <?php echo date("Y"); ?> - Villablanca </p>
        <div>
    </footer>
</body>
</html>