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
    <title>Ganador del juego</title>
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
            
            <div class="contenedor-centrador">
                <div class="contenedor-contacto" style="width: 800px;">
                    <div class="form-serv-indiv" style="width: 70%;">
                       
                    <?php
                        $error=0;  
                        $id_usuario=$_SESSION['id_usuario'];
                        $tiempo_actual=$_REQUEST['tiempo'];  
                        $mejor_tiempo=$_SESSION['mejor_tiempo'];

                        $mejor_tiempo_sf=intval(str_replace(":","",$mejor_tiempo));                            
                        $tiempo_actual_sf=intval(str_replace(":","",$tiempo_actual));                                 
                        if($tiempo_actual_sf<$mejor_tiempo_sf){
                            $sql = "UPDATE usuarios SET mejor_tiempo='$tiempo_actual' WHERE id_usuario= $id_usuario";                                
                            if(mysqli_query($enlace,$sql)){
                                $mensaje="Felicidades es tu mejor tiempo, tu tiempo es de ". $tiempo_actual . " mientras que el anterior era de " . $mejor_tiempo;
                                $_SESSION['mejor_tiempo']=$tiempo_actual;
                            }                              
                            else{
                                $error=1;
                                $mensaje="Lo siento hubo algun problema en la consulta, contacte con el administrador";                                
                            }    
                        }
                        else if($tiempo_actual_sf==$mejor_tiempo_sf){
                            $mensaje="Obtuviste la misma puntuacion de tiempo que  la vez anterior: ". $tiempo_actual;
                        }
                        else{                            
                            $mejor_tiempo=="99:59:59"?
                                $mensaje="Felicidades por ser tu primera vez jugando, tu tiempo es de ". $tiempo_actual ."DEF:" . $mejor_tiempo ." mejor t sf:". $mejor_tiempo_sf . " tiempactsf: ". $tiempo_actual_sf :
                                $mensaje="lo siento, tu tiempo actual es de ". $tiempo_actual . " pero tu mejor tiempo fue de ". $mejor_tiempo;
                        }                           
                        

                        if($error==0) print "<div class='mensaje_exito_grande'> $mensaje </div>";
                        else print "<div class='mensaje_error_grande'> $mensaje </div>";
                        if($codigo_mensaje=='5' ){
                            if(isset($_REQUEST['servicio'])){
                                print '<a href="./facturar.php" target="_blank" ><input id="enviar" type="submit" value="Descargar Factura" name="descargar" style="width: 70%;"></a>';
                            }
                            else{
                                print "<br> <br><br> <br>";
                                print '<a href="./facturar2.php" target="_blank" ><input id="enviar" type="submit" value="Descargar Factura" name="descargar" style="width: 70%;"></a>';
                            }
                            
                            
                        }
                        
                    ?>                       

                    </div>

                    <div class="redes">
                        Seguinos en
                        <a href="https://www.twitter.com/Team-Desarrollo" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/Team-Desarrollo" target="_blank"><i
                                class="fab fa-twitter"></i></a>
                        <a href="https://www.twitter.com/Team-Desarrollo" target="_blank"><i
                                class="fab fa-instagram"></i></a>                                
                    </div>
                </div>
            </div>            
        </main>
        
    </div>
    
</body>
</html>
