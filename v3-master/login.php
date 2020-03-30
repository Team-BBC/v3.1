<?php
    session_start();
    if(isset($_SESSION['userlogin'])){
        header("location: admin.php");
    }
?>

<!DOCTYPE html>
<head>

    <meta charset = "utf-8"/>
    <!--Importacion de CSS (stylesheet.css)-->
    <link rel= "stylesheet"  type="text/css"  href="stylesheet.css"/>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title> Inicio de Sesion</title>

</head>
<body style="background-image: url(bg.png);" >

    <div id="content">

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #03204C;">
                <a class="navbar-brand" href="index.php">
                    <img src="logoCbackground.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
                    Inicio
                </a>
        </nav>

        <!--formulario Inicio de Sesion-->
         
         <!-- 
             <form style="margin-top: 8px; margin-left: 8px; margin-right: 8px;">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre de Usuario</label>
                <input name="username" id="username" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contrase&ntilde;a</label>
                <input name="password"  type="password" id="password"  class="form-control" id="exampleInputPassword1">
            </div>
            <button name="button" id="login" type="button" class="text-white btn" style="background-color: #04396B">Login</button>
        </form>
         -->
         
         <div class="container rounded" style="background: white; width: 98%;height: 70%;margin-top: 50px;margin-bottom: 30%" >

        <form class = "text-center " style="margin-top: 40px">
            <div class="form-group mx-auto h2" style="width: 75%;margin-top: 40px">
                <label for="text">Nombre de usuario</label>
                <input type="text" class="form-control text-center" style="margin-top: 22px" placeholder="Ingresa su usuario" id="username">
            </div>
            <div class="form-group mx-auto h2" style="width: 75%;margin-top: 20px">
                <label for="pwd">Contraseña</label>
                <input type="password" class="form-control text-center"style="margin-top: 22px" placeholder="Ingrese su contraseña" id="password">
            </div >
            <div class="form-group mx-auto " style="width: 75%;margin-top: 20px">
                <button id="login" type="submit" class="btn btn-primary" style="margin-top: 35px" >Entrar</button>
            </div>
            
        </form> 
    </div>        
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"
		    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script>

            $(function(){
                //this runs a function if login button is clicked
                $('#login').click(function(e){

                var valid = this.form.checkValidity();

                    if(valid){
                        var username = $('#username').val();
                        var password = $('#password').val();
                    }

                    e.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: 'jslogin.php',
                        //send the user and password to jslogin.php
                        data:  {username: username, password: password},
                        success: function(data){    //returns 1 if the login was correct.
                            alert(data);
                            if($.trim(data) === "1"){
                                setTimeout(' window.location.href =  "admin.php"', 1000);
                            }
                        },
                        error: function(data){
                            alert('Hubo errores iniciando sesion');
                        }
                    });

                });
            });
        </script>
        
    </div>

    
    

    <!--footer -->
    <nav class="navbar navbar-expand-sm navbar-light " style="background-color: #B2CDE0;">            
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link disabled " href="#" tabindex="-1" aria-disabled="true">Desarrollado por Maneto</a>
            </li>
        </ul>
    </nav>

    
</body>