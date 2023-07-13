<?php
    session_start();
    if (@!$_SESSION['user']) {
        header("Location:ingresodeusuario.php");
    }elseif ($_SESSION['rol']==2) {
        header("Location:index-deportista.php");
    }
?>

<?php include("cabecera-entrenador.php");?>
   
<body>
    <?php include("header-entrenador.php");?>
  
        <main>
            
            <div class="row no-gutters">
                
                <div class="barra-amarilla bg-amarillo col-2 offset-1 d-none d-md-block text-center pt-5">
                    <img src="img/perfil-2.jpg" alt="imagen perfil jugador" style="border-radius:50%" width="80%" class="mt-5">
                    <a href="vervideo.php" class="btn blanco bg-rojo anton mt-5">VER DEPORTISTA</a>
                </div>
                
                <div class="col-12 col-md-8 blanco text-center text-md-left">
                    <h4 class="anton mt-5 mb-5">EQUIPOS</h4>
                    
                    <div class="equipos mt-5 cairo">
                       <a href="calificar-entrenador.php"><img src="perfil/perfil_1.jpg" alt="" width="20%" class="m-2 rounded"></a>
                       <a href=""><img src="perfil/perfil_2.jpg" alt="" width="20%" class="m-2"></a>
                       <img src="perfil/perfil_3.jpg" alt="" width="20%" class="m-2">
                       <img src="perfil/perfil_4.jpg" alt="" width="20%" class="m-2">
                       <img src="perfil/perfil_5.jpg" alt="" width="20%" class="m-2">
                       <img src="perfil/perfil_6.jpg" alt="" width="20%" class="m-2">
                       <img src="perfil/perfil_7.jpg" alt="" width="20%" class="m-2">
                       <img src="perfil/perfil_8.jpg" alt="" width="20%" class="m-2">
                    </div>
                </div>
            </div>
            
        </main>



      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
