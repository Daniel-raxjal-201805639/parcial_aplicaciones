<?php
    
    include_once 'conexion.php';
    
    $id = $_GET['id'];
        $busqueda = "select * from estudiantes where id = '{$id}'";
            $resultado_busqueda = mysqli_query($conexion,$busqueda);
    
    $json = array();
        $contar = 0;
    while($datos = mysqli_fetch_array($resultado_busqueda)){
        $json['vehiculos'][]=$datos;
        $contar = $contar+1;
    }
    if($contar==0){
            $datos["carnet_alumno"]=-1;
            $datos["nombre"]="Nombre no existe en la base de datos";
            $datos["apellido"]="Apellido no existe en la base de datos";
            $datos["grado"]="Grado no existe en la base de datos";
            $datos["seccion"]="Seccion no existe en la base de datos";
            $datos["nota_final"]="Esta nota no existe en la base de datos";
            $json[][]=$datos;
        
    }

    mysqli_close($conexion);//cerrar la conexion
    
    //convertir los datos del array en JSON y mostrarlo
    echo json_encode($json);
    


?>