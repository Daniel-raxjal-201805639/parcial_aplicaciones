<?php

    include_once 'conexion.php';

    $id =$_GET['id'];

    $delete = "delete from estudiantes where id = '{$id}'";
        $ejecutar = mysqli_query($conexion, $delete);

        $json = array();

        $datos["id"]=-1;
            $datos["nombre"]="Nombre eliminado";
            $datos["apellido"]="Apellido eliminado";
            $datos["grado"]="Grado eliminado";
            $datos["seccion"]="Seccion eliminado";
            $datos["nota_final"]="Nota eliminado";

            $json['estudiantes'][]=$datos;
            echo json_encode($json);
?>