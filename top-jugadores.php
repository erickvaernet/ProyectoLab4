<?php
require "database.php";
session_start();
if (!$_SESSION['activa']) header('Location: login.php');
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
    <main>
        <table >            
            <tr>
                <td class="titular">puesto</td>
                <td class="titular">nombre</td>
                <td class="titular">apellido</td>
                <td class="titular">puntuacion</td>
            </tr>
        <?php
        
        $sql = "SELECT nombre, apellido, mejor_tiempo FROM usuarios ORDER BY mejor_tiempo ASC LIMIT 10";        
        //$mysqli = new mysqli($servidor,$usuario,$clave,$baseDeDatos);
        $resultado=$enlace->query($sql) ;
        if($resultado->num_rows>0){

            for($i=0; $i<$resultado->num_rows;$i++){
                $fila = $resultado->fetch_assoc();
                $puesto=$i+1;
                $name = $fila['nombre'];
                $lastname =  $fila['apellido'];
                $puntos =  $fila['mejor_tiempo'];
                print 
                "<tr>
                    <td>$puesto</td>
                    <td>$name</td>
                    <td>$lastname</td>
                    <td>$puntos</td>
                </tr>"  ;              
            }
        }
        else print "ERRROR"
            
        ?>        

        </table>
    </main>
</body>

</html>