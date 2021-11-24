<?php

    include 'conexion_bd.php';

    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $telefono=$_POST['telefono'];
    $rut=$_POST['rut'];
    $codestab=$_POST['codestab'];
    $contrasena=$_POST['contrasena'];
    $correo=$_POST['correo'];
    //encriptamiento de contraseña
    //$contrasena= hash('sha512',$contrasena);
    $query="INSERT INTO usuarios(nombre,apellidos,codestab,telefono,contraseña,rut,correo) 
            VALUES('$nombre','$apellidos','$codestab','$telefono','$contrasena','$rut','$correo')";

    //verificar que el correo no se repita en la base de datos

    $verificar_correo= mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
    $verificar_rut= mysqli_query($conexion, "SELECT * FROM usuarios WHERE rut='$rut'");

    if(mysqli_num_rows($verificar_correo)>0){
            echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location="../Vistas/administracion.php"
            </script>
                ';
        exit();
    
    }

    if(mysqli_num_rows($verificar_rut)>0){
        echo '
        <script>
            alert("Este rut ya esta registrado, intenta con otro diferente");
            window.location="../Vistas/administracion.php"
        </script>
            ';
    exit();

}



    $ejecutar= mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
            alert("usuario almacenado exitosamente");
            window.location="../Vistas/administracion.php"
        </script>
        ';
    }else{
        echo'
        <script>
        alert("intentalo de nuevo usuario no almacenado");
        window.location="../Vistas/administracion.php"
    </script> ';
    }

    mysqli_close($conexion)
?>
