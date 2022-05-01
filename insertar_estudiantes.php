<?php
    
    include_once 'conexion.php';

    $id=$_GET['id'];
    $nombre=$_GET['nombre'];
    $apellido=$_GET['apellido'];
    $grado=$_GET['grado'];
    $seccion=$_GET['seccion'];
    $nota=$_GET['nota_final'];

    $insertar = "insert into estudiantes (id, nombre, apellido, grado, seccion, nota_final) values ('{$id}', '{$nombre}', '{$apellido}', '{$grado}', '{$seccion}', '{$nota}')";

    $ejecutar = mysqli_query($conexion, $insertar);

    $jsno = array();

    $datos["id"]=$id;
    $datos["nombre"]=$nombre;
    $datos["apellido"]=$apellido;
    $datos["grado"]=$grado;
    $datos["seccion"]=$seccion;
    $datos["nota_final"]=$nota;

    $jsno['estudiantes'][] = $datos;
    echo json_encode($jsno);

?>