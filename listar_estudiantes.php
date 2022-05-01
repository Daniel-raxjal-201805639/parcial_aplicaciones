<?php
    include_once 'conexion.php';

        $busqueda = "select * from estudiantes";

        $resultado = mysqli_query($conexion, $busqueda);
            $json = array();

        $i = 0;
            while ($datos = mysqli_fetch_array($resultado)){
                $json['estudiantes'][]=$datos;
                    $i = $i+1;
            }
        if ($i == 0) {
            $datos["carnet_alumno"]=-1;
            $datos["nombre"]="Nombre no existe en la base de datos";
            $datos["apellido"]="Apellido no existe en la base de datos";
            $datos["grado"]="Grado no existe en la base de datos";
            $datos["seccion"]="Seccion no existe en la base de datos";
            $datos["nota_final"]="Esta nota no existe en la base de datos";
            $json['estudiantes'][]=$datos;
        }

        mysqli_close($conexion);

        echo json_encode($json);

?>