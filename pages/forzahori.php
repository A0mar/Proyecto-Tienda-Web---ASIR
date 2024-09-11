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
    <title>Forza Horizon 5- Detalles</title>
</head>

<body>
    <header>
				<form action="" method="post">
            <button type="submit" name="comprar" value="forzahorizon5">Comprar</button> 
        </form>
        <a href="../index.php"><img src="../img/logo.png" alt="Logo"></a>
        <p id="usuario">USUARIO: <?php echo $_SESSION['nombre'];?></p>
    </header>
    <main>
        <section>
            <h1>Forza Horizon 5</h1>
            <hr>
            <article>
                <p>
                    En este juego, puedes explorar un mapa de mundo abierto verdaderamente grande, hasta un cincuenta por ciento más grande que el nada despreciable mapa de Forza Horizon 4. Corre con una variedad de vehículos a través de los volcanes, explora selvas y junglas tropicales en busca de sus ciudades escondidas en ruinas, tira arena mientras te acercas a las playas y pasa corriendo por cascadas, montañas nevadas y grandes ciudades basadas en las reales, como Guanajuato, que incluye una red de túneles secretos para explorar.
                    México es un país vasto y tiene climas increíblemente diversos dependiendo de en qué parte del país te encuentres y los desarrolladores del juego se han esforzado por brindarte la experiencia climática mexicana completa en este juego. Las cuatro estaciones se comportan de manera diferente en cada uno de los once biomas diversos y al igual que en la vida real, conduces a través de eventos climáticos: llueve en la montaña y luego conduces hacia el sol abrasador en el desierto.
                    Todos los vehículos y varios personajes del juego se pueden personalizar ampliamente para que puedas verte exactamente de la manera que desees y también conducir el automóvil de tus sueños. Juega para competir contra tus rivales o simplemente recorre libremente los escenarios y alucina con lo que te puedes encontrar: todos los elementos del juego aparecen para los exploradores, simplemente lo hacen de una manera más aleatoria y sorprendentemente naturalista.
                </p>
            </article>
            <div class="contenedor_fotos">
                <img class="fotos" src="../img/forza1.jpg" alt="Imagen de muestra 1">
                <img class="fotos" src="../img/forza2.jpg" alt="Imagen de muestra 2">
            </div>
            <div class="lista1">
                <ul>
                    <h3>Requisitos mínimos:</h3>
                    <li>S.O: Windows 10</li>
                    <li>Procesador: Intel i5-4460 or AMD Ryzen 3 1200</li>
                    <li>Memoria RAM: 8 GB RAM </li>
                    <li>Tarjeta Gráfica: NVidia GTX 970 OR AMD RX 470 </li>
                    <li>Disco Duro: 110  GB GB</li>
                </ul>
            </div>
            <div class="lista2">
                <ul>
                    <h3>Requisitos recomendados:</h3>
                    <li>S.O: Windows 10</li>
                    <li>Procesador: Intel i5-8400 or AMD Ryzen 5 1500X </li>
                    <li>Memoria RAM: 16 GB</li>
                    <li>Tarjeta Gráfica: NVidia GTX 1070 OR AMD RX 590 </li>
                    <li>Disco Duro: 110  GB</li>
                </ul>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 PlayPortal. Author: Omar Alonso, Ignacio Rodriguez, Pablo Ramirez</p>
    </footer>
</body>
</html>