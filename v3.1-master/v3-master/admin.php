<?php

session_start();
    if(!isset($_SESSION['userlogin'])){
        header("Location: login.php");
    }
    
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8"/>
    <link rel= "stylesheet"  type="text/css"  href="stylesheet.css"/>
        <!-- Required meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title> admin page</title>
	<title></title>
</head>
<body style="background-image: url(bg.png);">
        <div id="content">
            <?php
            include 'navbar.php';
            ?>
            <div class="container-fluid " style="height: auto;width: 90%;margin-top: 40px;"> 
                <div class=" container-fluid " style="height: auto;width: 95%;margin-top: 20px">
                    <div class="row ">
                        <div class="col-sm">
                            <div class=" container-fluid border border-dark rounded" style="background: white;height:auto ;width: 146%;margin-top: 20px;margin-bottom: 5px">
                                <form>
                                    <div class="form-group" style="margin-top: 20px">
                                        
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Busqueda de sustancias">

                                    </div>
                                        
                                </form>
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
                                                                <div id="tablaDatos"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <div class="col-sm">
                            <div class=" container-fluid border border-dark rounded" style="background: white;height: auto;width: 55%;margin-top: 20px; margin-right: 8px">
                                <div class=" container-fluid border border-dark rounded" style="background: white;height: 171%;width: 55%;margin-top: 20px; margin-right: 8px">
                            <form action="subir.php"method="post" name="f_prof"id="f_prof" enctype="multipart/form-data" style="width: 75%">
              <div class="form-group" style="margin-top: 8px">
                <label>Nombre de la sustancia</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
              </div>
              
              <div class="form-group">
                <label for="formGroupExampleInput2">PDF</label>
                <div class="custom-file">
                    <input type="file"  class="custom-file-input" name="fichero" id="fichero"  required>
                    <label class="custom-file-label" for="archivopdf" data-browse="Seleccionar">Escojer archivo...</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
              </div>
                <input type="submit" class="btn btn-primary" value="Enviar"  name="ok" id="ok">
                
            </form>
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
            mostrar();
        </script>
        

        <!--Pie de Pagina-->
        <?php
            include 'footerNav.php';
        ?>
</body>
</html>
