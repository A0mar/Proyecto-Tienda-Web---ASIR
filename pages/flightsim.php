<?php
session_start();

if (!isset($_SESSION["nombre"])) {
    header("Location: login.php");
    exit();
}
if (isset($_COOKIE[$_SESSION["nombre"]])) {
	$_SESSION[$_SESSION["nombre"]] = unserialize($_COOKIE[$_SESSION["nombre"]]);
}
if (!isset($_SESSION[$_SESSION["nombre"]])) {
    $_SESSION[$_SESSION["nombre"]] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["comprar"])) {
        $producto = $_POST["comprar"];
        $_SESSION[$_SESSION["nombre"]][$producto] = isset($_SESSION[$_SESSION["nombre"]][$producto]) ? $_SESSION[$_SESSION["nombre"]][$producto] + 1 : 1;
				setcookie($_SESSION["nombre"], serialize($_SESSION[$_SESSION["nombre"]]), time() + 1*24*60*60, "/");
		} 
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Pablo Ramirez">
    <meta name="Author" content="Ignacio Rodriguez">
    <meta name="Author" content="Omar Alonso">
    <link rel="stylesheet" href="../css/generico.css">
    <title>Flight Simulator - Detalles</title>
</head>

<body>
    <header>
				<form action="" method="post">
            <button type="submit" name="comprar" value="flightsimulator">Comprar</button> 
        </form>
        <a href="../index.php"><img src="../img/logo.png" alt="Logo"></a>
        <p id="usuario">USUARIO: <?php echo $_SESSION['nombre'];?></p>
    </header>
    <main>
        <section>
            <h1>Flight Simulator</h1>
            <hr>
            <article>
                <p>
                    Microsoft Flight Simulator constituye la próxima generación de una de las series de simulación más queridas. 
                    Desde aviones ligeros hasta aviones a reacción de fuselaje ancho, podrás pilotar impresionantes aeronaves muy detalladas en un mundo increíblemente realista. 
                    Crea tu propio plan de vuelo y visita cualquier rincón del planeta. Disfruta volando de día o de noche y supera condiciones meteorológicas realistas y desafiantes.
                </p>
            </article>
            <div class="contenedor_fotos">
                <img class="fotos" src="../img/fligh1.jpg" alt="Imagen de muestra 1">
                <img class="fotos" src="../img/fligh2.jpg" alt="Imagen de muestra 2">
            </div>
            <div class="lista1">
                <ul>
                    <h3>Requisitos mínimos:</h3>
                    <li>S.O: Windows 10</li>
                    <li>Procesador: Ryzen 3 1200 or Intel i5-4460</li>
                    <li>Memoria RAM: 2 GB</li>
                    <li>Tarjeta Gráfica: Radeon RX 570 or Nvidia GTX 770</li>
                    <li>Disco Duro: 150 GB GB</li>
                </ul>
            </div>
            <div class="lista2">
                <ul>
                    <h3>Requisitos recomendados:</h3>
                    <li>S.O: Windows 10</li>
                    <li>Procesador: Ryzen 5 1500x or Intel i5-8400</li>
                    <li>Memoria RAM: 4 GB</li>
                    <li>Tarjeta Gráfica: Radeon Rx 590 or Nvidia GTX 970</li>
                    <li>Disco Duro: 150  GB</li>
                </ul>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 PlayPortal. Author: Omar Alonso, Ignacio Rodriguez, Pablo Ramirez</p>
    </footer>
</body>
</html>