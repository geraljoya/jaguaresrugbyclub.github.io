 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Regístrate</title>
     
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/normalize.css">
     <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="estilos/registro.css">
</head>

<body>
        
    <section class="form-container col-xs-12 col-sm-12 col-md-6 col-lg-4">
        
        <div class="row item-menu">
            <div class="rec-amarillo col-2"></div>
            <li class="col-10"><a href="ingresodeusuario.php" class="">INGRESA </a> <a href="registrodeusuario.php" class=""> REGÍSTRATE</a></li>
        </div>
               
        <div class="row">
        
            <form method="post" action="">
                <div class="log-img">
                    <a href="index.php"><img src="img/logo.png" width="200px"></a>
                </div>
                <h1 class="tex-name">CLUB JAGUARES</h1>
                
                <fieldset>
                    <div class="mb-2">
                        <input  class="form-control" type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
                    </div>
                    <div class="mb-2">
                        <input class="form-control" type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
                    </div>
                    <div class="mb-2">
                        <input class="form-control" type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
                    </div>
                    <div class="mb-2">
                        <input class="form-control" type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
                    </div>
                    <input  class="btn btn-danger btn-block" type="submit" name="submit" value="Registrarme"/>
                    
                     <div class="blanco text-center mt-2">
                     <a href="ingresodeusuario.php" class="login-link">Iniciar sesion</a>
                     </div>

                </fieldset>
            </form>

            <?php
                if(isset($_POST['submit'])){
                require("registro.php");
                }
            ?>

        </div>
    </section>
        
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
</body>
</html>