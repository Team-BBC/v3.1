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
    <!--Importacion de CSS (stylesheet.css)-->
    <link rel= "stylesheet"  type="text/css"  href="stylesheet.css"/>
     <!-- Required meta tags -->
    <meta charset="utf-8">
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
            <div class="container-fluid border border-dark rounded" style="background: #eb984e;height: 82%;width: 90%;margin-top: 40px;"> 
            <div class=" container-fluid border border-dark rounded" style="background:  #85c1e9 ;height: 95%;width: 95%;margin-top: 20px">
                <div class="row ">
                    <div class="col-sm">
                        <div class=" container-fluid border border-dark rounded" style="background: white;height: 171%;width: 146%;margin-top: 20px">
                            <form>
                                <div class="form-group" style="margin-top: 20px">
                                    
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Busqueda de sustancias">

                                </div>
                                    
                            </form>
                            <ul class="list-group list-group ">

                                <li class="list-group-item ">Sustancia 1
                                    <div class="btn-group btn-group-toggle ml-5" data-toggle="buttons">
                                        <label class="btn btn-light btn-sm">
                                        <a href="pythonpygameandraspberrypigamedevelopment_2e.pdf"download><input type="radio"  name="options" id="option1" checked> Descargar PDF
                                        </label></a>
                                    </div>
                                </li>
                                <li class="list-group-item">Sustancia 2
                                    <div class="btn-group btn-group-toggle ml-5" data-toggle="buttons">
                                        <label class="btn btn-light btn-sm">
                                        <input type="radio" name="options" id="option1" checked> Descargar PDF
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">Sustancia 3
                                    <div class="btn-group btn-group-toggle ml-5" data-toggle="buttons">
                                        <label class="btn btn-light btn-sm">
                                        <input type="radio" name="options" id="option1" checked> Descargar PDF
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">Sustancia 4
                                    <div class="btn-group btn-group-toggle ml-5" data-toggle="buttons">
                                        <label class="btn btn-light btn-sm">
                                        <input type="radio" name="options" id="option1" checked> Descargar PDF
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">Sustancia 5
                                    <div class="btn-group btn-group-toggle ml-5" data-toggle="buttons">
                                        <label class="btn btn-light btn-sm">
                                        <input type="radio" name="options" id="option1" checked> Descargar PDF
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    
                    </div>
                    <div class="col-sm">
                        <div class=" container-fluid border border-dark rounded" style="background: white;height: 171%;width: 55%;margin-top: 20px; margin-right: 8px">
                            Two of three columns
                        </div>
                    
                    </div>                  
                </div>
            </div>
            </div>
            
        </div>   <!--Termina Contenido-->



        

        <!--Pie de Pagina-->
        <?php
            include 'footerNav.php';
        ?>
</body>
</html>