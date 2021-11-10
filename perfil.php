<?php
    require "database.php";
    session_start();
    if(!$_SESSION['activa']) header('Location: mensaje.php?msj=2');
    else{
        $nombre= $_SESSION['nombre'];
        $apellido= $_SESSION['apellido'];                                     
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
    <style>
        div.atrib_perfil{
            font-size: 2rem;
            color: white;
            line-height: 2.5rem;            
        }
    </style>
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
            <div class="contenedor-centrador" style="position:relative; bottom:50px">
                <div class="contenedor-contacto" style="width: 700px;">
                    <form action="#" method="POST" class="form-serv-indiv" style="width: 70%;">
                        <h3 style="font-size:2rem; text-decoration:underline; margin:15px">Mi Perfil</h3>
                        <div class="description">¡Bienvenido!</div>
                        <div style='text-align:center'>                        
                            <?php      
                                if($sexo_id==0){
                                    print "<img src='./img/avatar_m.jpg' alt='Avatar Masculino' style='max-width:300px'>";                                    
                                }
                                else{                                
                                    print "<img src='./img/avatar_f.jpg' alt='Avatar Femenino'>";                                   
                                }                            

                                print "<p style='text-decoration:underline;position:relative;left: 20px'>$nombre, $apellido</p>"
                            ?> 
                            
                        </div>

                        <div>
                            <div class='atrib_perfil'>Mejor Puntuacion:</div>     
                            <?php      
                            print "<div>$mejor_tiempop</div>";
                            ?>
                        </div>

                        <div>
                            <div class='atrib_perfil'>email:</div>     
                            <?php      
                            print "<div>$email</div>";
                            ?>
                        </div>

                        
                        <div>
                            <div class='atrib_perfil'>Sexo:</div>
                            <?php      
                            $sexo_id==0?
                                print "<div>Masculino</div>":
                                print "<div>Femenino</div>";
                            ?> 
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