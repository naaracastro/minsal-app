<?php

$conexion = mysqli_connect("localhost","root","","sigre");


if($conexion){
    echo 'Conectado existosamente a la base de datos';
}else{
    echo 'no se ha podido conectar a la base de datos';
}

?>