<?php
/*
session_start();
    if(isset($_SESSION['userlogin'])){
        header("Location: index.php");
    }
    */
?>
<!DOCTYPE html>
<html>
    <head> 
        <!--Importacion de CSS de la carpeta (stylesheet.css)-->
        <link rel= "stylesheet"  type="text/css"  href="stylesheet.css"/>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Inventario almacen quimico</title>

    </head>

    <body style="background-image: url(bg.png);">
        <div id="content">
            <?php
            include 'navbar.php';
            ?>
            <!--Busqueda-->
            <div class = "text-center mt-5" style="width: 100%;">   
                <form>
                    <div class="form-group">
                        <h2>
                            <label for="formGroupExampleInput">Division de Tecnologia Quimica</label>
                        </h2>
                        <div class="text-light">
                        <h3>
                            <label for="formGroupExampleInput">Hojas de seguridad</label>
                        </h3>
                        <input class="form-control m-auto mt-1" style="width: 60%;" type="text" placeholder="Sustancia a buscar">
                    </div>
                        
                    </div>
                    <button type="submit" class="btn btn-light">Buscar</button>
                </form>
            </div>


            <!--Ultimas Consultas-->
            
            <div class="container">
                <div class="row">
                    <h2>Crud con PDO y MySQL</h2>
                    <div class="col-sm-12">
                        <div class="card text-left">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Crud PDO</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <span class="btn btn-primary" data-toggle="modal" data-target="#insertarModal">
                                            <i class="fas fa-plus-circle"></i> Nuevo registro
                                        </span>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                            <div id="tablaDatos"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   <!--Termina Contenido-->



        
        <?php require_once "modalInsert.php" ?>
        <?php require_once "modalUpdate.php" ?>

        <script src="librerias/bootstrap4/jquery-3.4.1.min.js"></script>
        <script src="librerias/bootstrap4/popper.min.js"></script>
        <script src="librerias/bootstrap4/bootstrap.min.js"></script>
        <script src="librerias/sweetalert.min.js"></script>
        <script src="js/crud.js"></script>

        <script type="text/javascript">
            mostrarNormi();
        </script>
        <!--Pie de Pagina-->
        <?php
            include 'footerNav.php';
        ?>
        
    </body>
    
</html>