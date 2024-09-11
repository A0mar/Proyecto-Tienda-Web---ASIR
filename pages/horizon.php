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
    <title>Horizon Zero Dawn - Detalles</title>
</head>

<body>
    <header>
        <form action="" method="post">
            <button type="submit" name="comprar" value="horizonzerodown">Comprar</button> 
        </form>
        <a href="../index.php"><img src="../img/logo.png" alt="Logo"></a>
        <p id="usuario">USUARIO: <?php echo $_SESSION['nombre'];?></p>
       
    </header>
    <main>
        <section>
            <h1>Horizon Zero Dawn</h1>
            <hr>
            <article>
                <p>
                    Aloy se las arregla rebuscando entre los restos de las criaturas robóticas en busca de componentes eléctricos que le permiten su propia supervivencia. También puede usar otras partes de las criaturas para fabricar armas y equipo que la ayuden a sobrevivir y triunfar. Las criaturas robóticas se agrupan, como si fueran manadas de vida silvestre de la vida real, y generalmente no se atacan entre sí a menos que hayan sido alcanzadas con flechas de corrupción o hayan sido pirateadas con una herramienta de anulación.
                    Sin embargo, atacan cuando sienten una amenaza, pero tienden a usar la fuerza bruta en lugar de la delicadeza, y todos tienen diferentes modos de ataque y defensa. Tus diversas armas tienen opciones de modificación que te permiten aumentar las capacidades ofensivas de las armas para obtener efectos más dramáticos, y Aloy usa un pequeño escáner montado en su cabeza llamado Foco que la ayuda a concentrarse en su presa. Sin embargo, el Acechador, en particular, puede evitar esto con tecnología de camuflaje sigiloso.
                    Aloy también lucha contra enemigos humanos: hay bandidos y una secta espeluznante de la que mantenerse alejado, entre otros. Aloy fue rechazada por su tribu cuando era más joven, luego fue adoptada por Rost, quién le enseñó todo lo que sabe y ejerce de figura paterna. Pero ella quiere encontrar la verdad y vale la pena seguir la narrativa a medida que Aloy descubre no solo que tiene una identidad propia, sino que puede cambiar por completo la forma de la humanidad.
                </p>
            </article>
            <div class="contenedor_fotos">
                <img class="fotos" src="../img/horizon1.jpg" alt="Imagen de muestra 1">
                <img class="fotos" src="../img/horizon2.jpg" alt="Imagen de muestra 2">
            </div>
            <div class="lista1">
                <ul>
                    <h3>Requisitos mínimos:</h3>
                    <li>S.O: Windows 10</li>
                    <li>Procesador: Intel Core i5-2500K@3.3GHz or AMD FX </li>
                    <li>Memoria RAM: 8 GB RAM </li>
                    <li>Tarjeta Gráfica: Nvidia GeForce GTX 780 (3 GB) or AMD Radeon R9 290 (4GB)  </li>
                    <li>Disco Duro:  100   GB GB</li>
                </ul>
            </div>
            <div class="lista2">
                <ul>
                    <h3>Requisitos recomendados:</h3>
                    <li>S.O: Windows 10</li>
                    <li>Procesador: Intel Core i7-4770K@3.5GHz or Ryzen 5 1500X </li>
                    <li>Memoria RAM: 16 GB</li>
                    <li>Tarjeta Gráfica: Nvidia GeForce GTX 1060 (6 GB) or AMD Radeon RX 580 (8GB)  </li>
                    <li>Disco Duro:  100   GB</li>
                </ul>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 PlayPortal. Author: Omar Alonso, Ignacio Rodriguez, Pablo Ramirez</p>
    </footer>
</body>
</html>