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
                
                <div class="habilidades col-12 col-md-8 blanco text-center text-md-left">
                    <h4 class="anton mt-5 mb-5">HABILIDADES</h4>
                    
                    <img src="img/entrenador-perfil.png" alt="Medición entrenador" width="80%">
                </div>
                
            </div>
            
        </main>
    


      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
