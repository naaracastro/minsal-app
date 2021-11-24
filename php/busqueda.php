<?php
include ("../php/conexion_bd.php");
$usuarios = "SELECT * FROM usuarios";
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGPRES</title>
    <!--descripción del tema de la página-->
    <meta name="description" content="prestaciones sigges"> 
    <!--palabras claves de búsqueda-->
    <meta name="keywords" content="sigges, prestación">
    <!--icono para la pestaña-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/img/registro medicina.jpg" type="image/x-icon">
   
</head>

<body>
        <header class="fondo-gris">
            <div class="container">
            <div class="row">
            <div class="col-12 col-md-6">

                <img src="../assets/img/minSal.png" class="rounded float-start" alt="minsal">
            </div>
            <div class="col-12 col-md-6">
                
                <img src="../assets/img/LogoSIGRE.png" class="rounded float-end" alt="LogoSIGRE">
            </div>
            </div>
        </div>
        </header>
        
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../Vistas/home.php"><strong>Inicio</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../Vistas/busqueda.html"><strong>Búsqueda</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Vistas/cargamasiva.html"><strong>Carga Masiva</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Vistas/tutorial.html"><strong>Videos Tutoriales</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Vistas/administracion.php"><strong>Perfiles Usuarios</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Vistas/sigges.html"><strong>Conexión SIGGES</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="cerrar_sesion.php" ><strong>CERRAR SESIÓN</strong></a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Busqueda" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
              </div>
            </div>
          </nav>
    </header>
    
    <!-- zona de edicion -->
    <div class="containertable1 containertable11">
        <div class="table__tittle table__tittle--edit"> Datos de Ususarios</div>
        <div class="table__header"> Nombre</div>
        <div class="table__header"> Apellidos</div>
        <div class="table__header"> Rut</div>
        <div class="table__header"> Telefono</div>
        <div class="table__header"> Cod. Establecimiento</div>
        <div class="table__header"> Correo</div>
        <div class="table__header"> Gestión</div>
        <?php 
            $resultado = mysqli_query($conexion, $usuarios);
            while($row=mysqli_fetch_assoc($resultado)) {?>
        <div class"table__item"><?php echo $row["nombre"];?></div>    
        <div class"table__item"><?php echo $row["apellidos"];?></div>    
        <div class"table__item"><?php echo $row["rut"];?></div>    
        <div class"table__item"><?php echo $row["telefono"];?></div>    
        <div class"table__item"><?php echo $row["codestab"];?></div>    
        <div class"table__item"><?php echo $row["correo"];?></div>    
        <div class="table__item"> 
            <a href="actualiza.php?id=<?php echo $row["id"];?>" class="table__item_link"> Modificar</a> | 
            <a href="eliminar.php?id=<?php echo $row["id"];?>" class="table__item_link"> Eliminar</a>
        </div>
        <script src="../assets/js/confirmacion.js"></script>  
        <?php } mysqli_free_result($resultado); ?>
      
    </div>
    
        </div>
        
    </form>
    

    <!-- zona de footer -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
         
    </body>
    
</html>