<?php

    session_start();
    include 'conexion_bd.php';
    $rut= $_POST['rut'];
    $contrasena = $_POST['contrasena'];
    //$contrasena=hash('sha512',$contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE rut='$rut' and contraseña = '$contrasena'");

    if(mysqli_num_rows($validar_login)>0){
        $_SESSION['usuario'] = $rut;
        header("location: ../Vistas/home.php");
        exit;
    } else{
        echo'
            <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location="../index.php"
            </script>
        
        ';
        exit;

    }

?>
