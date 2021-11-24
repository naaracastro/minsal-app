<?php
include ("../php/conexion_bd.php");

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$rut=$_POST['rut'];
$codestab=$_POST['codestab'];
$contrasena=$_POST['contrasena'];
$correo=$_POST['correo'];

//actualizar los datos

$actualizar = "UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', codestab='$codestab', telefono='$telefono', 
contraseña='$contrasena', rut='$rut', correo='$correo' WHERE id='$id'";

$ejecutar= mysqli_query($conexion, $actualizar);

if($ejecutar){
    echo '
    <script>
        alert("usuario modificado exitosamente");
        window.location="../Vistas/administracion.php"
    </script>
    ';
}else{
    echo'
    <script>
    alert("intentalo de nuevo, usuario no pudo ser modificado");
    window.location="../Vistas/administracion.php"
</script> ';
}

?>