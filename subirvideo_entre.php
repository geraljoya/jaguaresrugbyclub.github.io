<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:ingresodeusuario.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:index-entrenador.php");
	}
?>
     
<?php
    include ("connect_db.php");
    $sql="SELECT * FROM `tbimg` ";
    $res=mysqli_query($cn,$sql);
?>


<?php include("cabecera-deportista.php");?>

<body>
    <?php include("header-deportista.php");?>
       
        <main>
            
            <div class="row no-gutters pb-5">
                
                <div class="barra-amarilla bg-amarillo col-2 offset-1 d-none d-md-block text-center pt-5">
                    <img src="img/perfil1.jpg" alt="imagen perfil jugador" style="border-radius:50%" width="80%" class="mt-5">
                    <a href="vervideo.php" class="btn blanco bg-rojo anton mt-5">COMENTARIOS</a>
                </div>
                
                <div class="habilidades col-10 col-md-8 blanco text-center text-md-left">
                    <h4 class="anton mt-5 mb-5">SUBIR VIDEOS</h4>
                    
                    <form action="cargar.php" method="POST" enctype="multipart/form-data" class="cairo">
                        <div class="form-group">
                            <input type="file" name="video" class="d-block mb-5">
                        </div>
                        <div class="form-group">
                            <input type="text" name="id_usuario" placeholder="Nombra tu video" class="form-control d-block mb-5">
                        </div>
                        <input type="submit" value="Aceptar" class="d-block btn bg-amarillo blanco">
                    </form>
                </div>
            </div>
        </main>
   
    
      
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

