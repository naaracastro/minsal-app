<?php

session_start();
if(isset($_SESSION['usuario'])){
    header("location:Vistas/home.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>SIGRE - Sistema de Reportes</title>
    <link rel="icon" href="assets/img/favicon.ico">
</head>

    <body>
        <header class="fondo-gris">
            <div class="container">
            <div class="row">
            <div class="col-12 col-md-6">

                <img src="assets/img/minSal.png" class="rounded float-start" alt="...">
            </div>
            <div class="col-12 col-md-6">
                
                <img src="assets/img/LogoSIGRE.png" class="rounded float-end" alt="...">
            </div>
            </div>
        </div>
        </header>
        <!--LOGIN-->
        <div class="container">
            <div class="row mt-5">
                        <div class="col-md-8 mx-auto">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/img/lupa2.jpg" class="d-block w-100 img-jpg" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/estadisticas.jpg" class="d-block w-101 img-jpg" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/computer-1149148_1920.jpg" class="d-block w-100 img-jpg" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-4 mx-auto ">
                        <div id="first " class="caja-usuario mb-3">
                        <div class="myform form ">
                        <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                            <h1>ACCESO</h1>
                        </div>
                        </div>
                            <form action="php/login_usuario_bd.php" method="POST" name="login">
                        <div class="form-group">
                            <label for="exampleInputEmail1">RUT</label>
                            <input type="text" name="rut"  class="form-control" placeholder="Ingrese su RUT">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contrase&ntilde;a</label>
                            <input type="password" name="contrasena" id="password"  class="form-control" placeholder="Contraseña">
                        </div>
                        <br>
                        <div class="col-md-12 text-center ">
                            <!--<button href="Vistas/home.html"type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Entrar</button>-->
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                        </div>
                            </form>
                        </div>
                        </div>
                        <div class="caja-usuario mb-3">
                            Sistema de Gestión de Reportes
                        </div>
                    </div>
            </div>
        </div>   
    <footer>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 blue-border">
                    <p>
                        Mac Iver 541, Santiago, Chile - Teléfono: (+562) 2574 0100
                    </p>
                </div>
                <div class="col-md-8 d-flex justify-content-end a-enlaces red-border ">
                    <a href="https://www.minsal.cl/seguridad_de_la_informacion/">Seguridad de la Información</a>
                    <a href="https://www.minsal.cl/">Minsal </a>
                    <a href="https://www.minsal.cl/">Minsal </a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>