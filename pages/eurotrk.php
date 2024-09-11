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
    <title>Euro Track Simulator - Detalles</title>
</head>

<body>
    <header>
				<form action="" method="post">
            <button type="submit" name="comprar" value="eurotruck">Comprar</button> 
        </form>
        <a href="../index.php"><img src="../img/logo.png" alt="Logo"></a>
        <p id="usuario">USUARIO: <?php echo $_SESSION['nombre'];?></p>
    </header>
    <main>
        <section>
            <h1>Euro Track Simulator 2</h1>
            <hr>
            <article>
                
                <p>
                    Cubriendo una amplia franja de Europa y el Reino Unido, el mapa se extiende desde Aberdeen hasta
                    Milán, desde Plymouth hasta Breslavia, y tu trabajo en este juego de tipo sandbox consiste en cubrir
                    la mayor parte del mapa que te sea posible con el objetivo de explorar a profundidad.
                    El mapa lleva un registro de todos tus recorridos y puede tomarte hasta un total de 160 horas para
                    explorar hasta la última pulgada del camino.
                    Si bien puedes explorar libremente, también se te dan misiones y retos para completar con el fin de
                    que permanezcas en la carretera y mantengas en buen estado tus condiciones de conducción.
                    El juego se basa vagamente en la economía de un conductor de entregas, e igual que sucede en la vida
                    real, el atractivo del dinero constante y sonante te sacará de la cama y te pondrá en la carretera.
                </p>
                <div class="contenedor_fotos">
                    <img class="fotos" src="../img/euro1.jpg" alt="Imagen de muestra 1">
                    <img class="fotos" src="../img/euro2.jpg" alt="Imagen de muestra 2">
                </div>
                <div class="lista1">
                    <ul>
                        <h3>Requisitos mínimos:</h3>
                        <li>S.O: Windows 7</li>
                        <li>Procesador: Intel Core i5-6400 or AMD Ryzen 3 1200 or similar</li>
                        <li>Memoria RAM: 8 GB RAM</li>
                        <li>Tarjeta Gráfica: NVIDIA GeForce GTX 660 or AMD Radeon RX 460 or Intel HD 630 (2GB VRAM)</li>
                        <li>Disco Duro: 25 GB</li>
                    </ul>
                </div>
                <div class="lista2">
                    <ul>
                        <h3>Requisitos recomendados:</h3>
                        <li>S.O: Windows 7/8.1/10 64-bit</li>
                        <li>Procesador: Intel Core i5-9600 or AMD Ryzen 5 3600 or similar</li>
                        <li>Memoria RAM: 12 GB RAM</li>
                        <li>Tarjeta Gráfica: NVIDIA GeForce GTX 1660 or AMD Radeon RX 590 (2GB VRAM)</li>
                        <li>Disco Duro: 25 GB</li>
                    </ul>
                </div>
            </article>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 PlayPortal. Author: Omar Alonso, Ignacio Rodriguez, Pablo Ramirez</p>
    </footer>
</body>

</html>