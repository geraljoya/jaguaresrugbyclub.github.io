<?php
    session_start();
    if (@!$_SESSION['user']) {
        header("Location:ingresodeusuario.php");
    }
?>
		
<?php include("cabecera-deportista.php");?>
   
<body>
    <?php include("header-entrenador.php");?>
       
        <main>
        
            <div class="row no-gutters pt-5 pb-5">
                    <?php
                        extract($_GET);
                        require("connect_db.php");

                        $sql="SELECT * FROM login WHERE id_usuario=$id";
                        $ressql=mysqli_query($mysqli,$sql);
                        while ($row=mysqli_fetch_row ($ressql)){
                                $id=$row[0];
                                $user=$row[1];
                                $comentario=$row[5];
                        }
                    ?>

                    <form action="ejecutaactualizar.php" method="post" class="cairo col-5">
                        <div class="form-group">
                            <input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="user" value="<?php echo $user?>" readonly="readonly" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="">COMENTARIO</label>
                            <textarea type="text" name="comentario" value="<?php echo $comentario?>" class="form-control gris" rows="5">
                            </textarea>
                        </div>
                        <input type="submit" value="Guardar" class="btn bg-amarillo">
                    </form>
                    
                </div>
    </main>
</body>
               
                
            </div>
    
    </div>


      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>