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
    $sql="SELECT * FROM `video` ";
    $res=mysqli_query($cn,$sql);
?>


<?php include("cabecera-deportista.php");?>

<body>
   
    <?php include("header-deportista.php");?>
       
        <main>
            
            <div class="row no-gutters">
                
                <div class="barra-amarilla bg-amarillo col-2 offset-1 d-none d-md-block text-center pt-5">
                    <img src="img/perfil1.jpg" alt="imagen perfil jugador" style="border-radius:50%" width="80%" class="mt-5">
                   
                     <button type="button" class="btn blanco bg-rojo anton mt-5" data-toggle="modal" data-target="#exampleModal3">
                    COMENTARIOS
                        </button>
                        </div>
                
                
                
                
                <div class="habilidades col-12 col-md-8 blanco text-center text-md-left">
                    <h4 class="anton mt-5 mb-5">VIDEOS ENTRENOS</h4>
                    
                    <div class="video mt-5 mb-5">
                        <?php
                            while ($data=mysqli_fetch_array($res))
                            {
                                //echo '<img src="'.$data['ruta'].'" width="200px" height="200px">';//
                                 echo "<video width='40%' height='auto' controls class='m-2'>";
                                 echo "<source src='".$data["ruta"]."' type='video/mp4'>";
                                 echo "</video>";
                            }
                        ?>
                    </div>
                    </div>
                     <!--------------------------------------------->
                    
                    
                  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content  bg-gris">
                           <div class="modal-header amarillo col-12 text-center bg-gris">
                                  <h6 class="modal-tittle anton">GUERRRERO - CORAZÓN - FUERZA</h6>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                                <button type="button" class="btn bg-amarillo blanco anton" data-dismiss="modal">VOLVER</button>
                              </div>
                              </div>
                      
                      <div class="modal-body mt-5 cairo bg-gris">
                      
                       <?php
                        require("connect_db.php");
                        $sql=("SELECT * FROM login");

                        //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                        $query=mysqli_query($mysqli,$sql);
                        echo "<table border='1'; class='table table-hover';>";
                        echo "<tr class='warning'>";
                        echo "<td class='blanco text-center'>MIRA TUS COMENTARIOS</td>";
                        echo "</tr>";
                      ?>

                      <?php 
                         while($arreglo=mysqli_fetch_array($query)){
                             echo "<tr>";
                             echo "<td class='bg-blanco gris'>$arreglo[5]</td>";
                             echo "</tr>";
                         }
                      ?>
                      
                  
                      </div>
                       
                    </div>
                  </div>
                </div>
                

                    
                    
                    <!---------------------------------------------->
                    
                    
                    
                    
              
    </main>
     
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
        
        
            
     


