<?php
    require "database.php";
    session_start();
    if(!$_SESSION['activa']) header('Location: login.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Memoria</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./css/style2.css">
</head>
<body class="fondo fondo-contacto">    
    <header>
        <nav>
            <ul>
                <li><a href="./index.php">Inicio</a></li>                    
                <li><a href="./top-jugadores.php">Top Jugadores</a></li>
                <li><a href="./perfil.php">Perfil</a></li>
                <li><a href="./logout.php">Cerrar Sesion</a></li>
                <!--<li><a href="./nosotros.html">Nosotros</a></li>-->
            </ul>
        </nav>
    </header>
    <main class="juego">
        <div id="tablero" class="juego">
        </div>

        <br>

        <div class="nuevo-juego" id="nuevo-juego">
            Nuevo Juego
        </div>

    </main>
</body>
<script src="./js/main.js"></script>
</html>