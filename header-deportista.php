
<?php include("cabecera-deportista.php");?>
      <div class="container-fluid">
       
        <header class="header">
          
            <div class="logo mt-2">
                <img src="img/logo-header.png" alt="logo-perfil" width="80%">
            </div>
           
            <div class="row bg-gris pt-5 pb-5">
                <h3 class="col-11 text-right blanco anton mq">DEPORTISTA <?php echo $_SESSION['user'];?></h3>
                <a class="col-1 mq1" href="desconectar.php"><img src="img/salir.png" alt="Salir"></a>
            </div>

            <div class="row bg-rojo pt-2 pb-2 anton">
              <div class="nav col-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 cairo">
                      <li class="nav-item active">
                        <a class="nav-link pl-3 pr-3 m-2" href="index-deportista.php"><span class="blanco">PERFIL</span><span class="sr-only"></span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link disabled pl-3 pr-3 m-2" href="subirvideo.php"><span class="blanco">SUBIR VIDEO</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link disabled pl-3 pr-3 m-2" href="vervideo.php"><span class="blanco">MIS VIDEOS</span></a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>ss
           </div>

        </header>
        </div>