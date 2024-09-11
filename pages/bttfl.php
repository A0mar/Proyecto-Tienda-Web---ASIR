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
    <title>Detalles Battleflied 2042</title>
    <link rel="stylesheet" href="../css/juegos.css">
</head>

<body>
    <header>
        <a href="../index.php"><img src="../img/logo.png" alt="logo" class="logo"></a>
    </header>
    <main>
        <section>
            <article>
                <h1 class="titulo">Battleflied 2042</h1>
                <hr>
                <div class="contenedor">
                    <img src="../img/portada.jpeg" alt="potada btf2042">
                    <div class="texto">
                        <h2>Sinopsis</h2>
                        <p>Battlefield 2042 marca el regreso a la emblemática guerra total de la franquicia. Adáptate y
                            sobrevive con la ayuda de tu patrulla y un arsenal de vanguardia en campos de batalla en
                            constante cambio.
                            Con partidas de 128 jugadores*, prepárate para una escala sin precedentes en entornos
                            inmensos.
                            Vive experiencias descomunales, desde modos multijugador actualizados como Conquista y
                            Avance hasta el nuevo Battlefield™ Hazard Zone.</p>
                        <div class="precio">$69.99</div>
                        <form action="" method="post">
                        	<p>Conectado Con: <?php echo $_SESSION['nombre'];?></p>
                        	<button type="submit" name="comprar" value="battlefield2042" class="boton-comprar">Comprar</button>
                        </form>
                    </div>
                </div>
                <hr>
                <h3 class="subtitulos">Modos de juego</h3>
                <hr>
                <ul class="modo">
                    <h5>CONQUISTA:</h5>
                    <li>Entra en la partida como atacante que lucha por destruir tantas EMC como sea posible o como
                        defensor que debe mantenter la posición y tratar de frenar el ataque..o verse obligado a
                        retirarse</li>
                    <h5>TCT: Equipo:</h5>
                    <li>No solo es la experiencia ideal para que el público se familiarice con la jugabilidad con la
                        jugabilidad de Battleflied 2042, también es el lugar perfecto para librar
                        batallas a corta distancia de infatería donde cada eliminación y cada muerte cuenta a favor o en
                        contra de tu equipo. Haz que merezca la pena, trabaja con tu patrulla
                        y aseguraos la victoria</li>
                    <h5>AVANCE:</h5>
                    <li>En Avance, dos equipos (atacante y defensor) se disputan sectores a gran escala mientras el
                        equipo atacante avanza hacia el último objetivo.
                        Cada sector está diseñado para albergar a un mayor número de jugadores, lo que da lugar a más
                        estrategias y más oportunidades de flanqueo</li>
                    <h5>ASALTO:</h5>
                    <li>Entra en la partida como atacante que lucha por destruir tantas EMC como sea posible o como
                        defensor que debe mantener la posición y tratar de frenar el ataque... o verse obligado a
                        retirarse</li>
                    <h5>PORTAL:</h5>
                    <li>Los mundos abiertos de Battlefield te esperan. No solo de Battlefield 2042, sino de los clásicos
                        Battlefield 1942, Battlefield: Bad Company 2 y Battlefield 3.
                        Atrévete con los destacados de la comunidad para participar en momentos personalizados o únete a
                        experiencias creadas por y para la comunidad</li>
                </ul>
                <hr>
                <h3 class="subtitulos" >Mapas</h3>
                <hr>
                <table>
                    <tr>
                        <td id="censurado">
                            <h4>CENSURADO</h4>
                            <p class="foto">Ubicación: Escocia</p>
                            <p class="foto">Descubre una instalación subterránea secreta de Escocia, repleta de tensión
                                y caos a corta distancia.</p>
                        </td>
                        <td id="resurgimiento">
                            <h4>RESURGIMIENTO</h4>
                            <p  class="foto">Ubicación: República Checa</p>
                            <p  class="foto">Prepárate para desplegarte en la República Checa, alrededor de una planta industrial
                                abandonada que está siendo reconquistada poco a poco por la naturaleza.</p>
                        </td>
                        <td id="detonante">
                            <h4>DETONANTE</h4>
                            <p class="foto"> Ubicación: Sudáfrica</p>
                            <p class="foto">Lleva la lucha a Sudáfrica en un mapa que promete intensos combates a corta
                                distancia.</p>
                        </td>
                    </tr>
                    <tr>
                        <td id="descarte">
                            <h4>DESCARTE</h4>
                            <p class="foto"> Ubicación: Alang (India)</p>
                            <p class="foto">Junto a una sección estratégica de la costa oeste de la India, los colosales
                                barcos abandonados en la playa se desmantelan para conseguir sus piezas. Lucha entre los
                                cascos de estos colosos y adáptate a tormentas letales.</p>
                        </td>
                        <td id="manifiesto">
                            <h4>MANIFIESTO</h4>
                            <p class="foto">Ubicación: Isla de Brani (Singapur)</p>
                            <p class="foto">Ten cuidado con los tornados tropicales y avanza por los laberínticos
                                contenedores de carga en esta ubicación comercial que es crucial para las líneas de
                                suministros estadounidenses.</p>
                        </td>
                        <td id="caleidoscopio">
                            <h4>CALEIDOSCOPIO</h4>
                            <p class="foto">Ubicación: Songdo (Corea del Sur)</p>
                            <p class="foto">Lánzate en tirolina entre rascacielos y lucha por las plazas que rodean el
                                emblemático centro de datos de esta metrópolis vanguardista en Corea del Sur.</p>
                        </td>
                    </tr>
                </table>
                <hr>
                <div class="lista1">
                    <h4>Requisitos mínimos:</h4>
                    <ul>
                        <li>Sistema operativo: Windows 10 de 64 bits</li>
                        <li>Procesador (AMD): AMD Ryzen 5 1600</li>
                        <li>Procesador (Intel): Core i5 6600K</li>
                        <li>Memoria: 8 GB</li>
                        <li>Memoria de vídeo: 4 GB</li>
                        <li>Tarjeta gráfica (NVIDIA): Nvidia GeForce GTX 1050 Ti</li>
                        <li>Tarjeta gráfica (AMD): AMD Radeon RX 560</li>
                        <li>DirectX: 12</li>
                        <li>Requisitos de conexión a Internet: conexión a Internet de 512 KBPS o superior</li>
                        <li>Espacio en el disco duro: 100 GB</li>
                    </ul>
                </div>
                <div class="lista2">
                    <h4>Requisitos recomendados:</h4>
                    <ul>
                        <li>Sistema operativo: Windows 10 de 64 bits</li>
                        <li>Procesador (AMD): AMD Ryzen 7 2700X</li>
                        <li>Procesador (Intel): Intel Core i7 4790</li>
                        <li>Memoria: 16 GB</li>
                        <li>Memoria de vídeo: 8 GB</li>
                        <li>Tarjeta gráfica (NVIDIA): Nvidia GeForce RTX 3060</li>
                        <li>Tarjeta gráfica (AMD): AMD Radeon RX 6600 XT</li>
                        <li>DirectX: 12</li>
                        <li>Requisitos de conexión a Internet: conexión a Internet de 512 KBPS o superior</li>
                        <li>Espacio en el disco duro: 100 GB</li>
                    </ul>

            </article>
        </section>
    </main>
    <footer>
        <div>
            <p class="nombre">Pablo Ramirez, Ignacio Rodriguez, Omar Alonso </p>
            <p class="extra">&copy; <?php echo date("Y"); ?> - VillaBlanca </p>
        <div>
    </footer>
</body>
</html>