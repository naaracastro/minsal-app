<?php
include ("../php/conexion_bd.php");
$id =$_GET["id"];

$eliminar = "DELETE FROM usuarios WHERE id='$id'";

$ejecutar= mysqli_query($conexion, $eliminar);
if($ejecutar){
    echo '
    <script>
        alert("Usuario eliminado exitosamente");
        window.location="../Vistas/administracion.php"
    </script>
    ';
}else{
    echo'
    <script>
    alert("No se pudo eliminar al usurios");
    window.location="../Vistas/administracion.php"
</script> ';
}
?>