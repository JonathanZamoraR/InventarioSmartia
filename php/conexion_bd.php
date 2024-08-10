<?php 
    $conexion  = mysqli_connect(
        "localhost",
        "root",
        "",
        "inventario_smartia"
    );

    if($conexion){
        echo 'Conexión exitosa';
    }else{
        echo 'Conexión fallida :(';
    }
?>