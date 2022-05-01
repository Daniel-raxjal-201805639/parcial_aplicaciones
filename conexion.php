<?php
    $host = "localhost";
    $usuario = "root";
    $contra = "";
    $bd = "bd_estudiantes";

        $conexion = mysqli_connect($host, $usuario, $contra, $bd);
            if(!$conexion){
                echo "Error de conexion";
            }

?>