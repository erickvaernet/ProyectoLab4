<?php
    require "database.php";
    session_start();
    if(!$_SESSION['activa']) header('Location: mensaje.php?msj=2');
    else{
        $nombre= $_SESSION['nombre'];
        $nombre= $_SESSION['apellido'];                                     
        $email=$_SESSION['email'];
        $sexo_id=$_SESSION['id_sexo'];
        $mejor_tiempop=$_SESSION['mejor_tiempo'];
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Juego Memoria"</title>
    <link rel="shortcut icon" href="./img/iconos/loto.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="fondo fondo-contacto" style="height: 100vh;">
    <div >
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
        <main>
            <div class="contenedor-centrador" style="margin-top: 150px;">
                <div class="contenedor-contacto" style="width: 800px;">
                    <form action="#" method="POST" class="form-serv-indiv" style="width: 70%;">
                        <h3 style="font-size:2rem; text-decoration:underline; margin:15px">Mi Perfil</h3>
                        <div class="description">¡Bienvenido!</div>
                                               
                        <img src="./img/avatar_m.jpg" alt="Avatar Masculino">

                        <label for="email">contraseña nueva:</label>
                        <input type="email" name="email" id="email" placeholder="Ingrese su e-mail">

                        <div>
                            <h2>Nombre:</h2>
                            <?php      
                            print "<p>$nombre</p>";
                            ?> 
                        </div>
                        
                        <div>
                            <h2>Apelido:</h2>                            

                        </div>

                        <div class="contenedor-btn" style="margin-top: 30px;">
                            <input id="enviar" type="submit" value="Ingresar" name="enviar" style="width: 50%;">
                            <a href="./signup.php" style="width: 50%;"><input type="button" value="registrarse" style="width: 100%;"></a>
                        </div>

                    </form>

                    <div class="redes">
                        Seguinos en
                        <a href="https://www.facebook.com/Team-Desarrollo" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/Team-Desarrollo" target="_blank"><i
                                class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/Team-Desarrollo" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
</body>
</html>