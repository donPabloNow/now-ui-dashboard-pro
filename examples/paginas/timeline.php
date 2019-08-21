<?php
session_start();
require_once("../../inc/config.sistema.php");
?>
<!DOCTYPE html>
<html lang="es">
<?php
require_once(RUTA_SISTEMA . "inc/aead.php");
?>

<body class="sidebar-mini">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="wrapper">

      <!-- Menu  del sistema-->
      <?php      require_once(RUTA_SISTEMA . "inc/aenu_nuevo.php");      ?>


      <!-- Inicio de del panel -->
      <div class="main-panel" id="main-panel">

       <!-- inicio barra Navbar -->
       <!-- Navbar -->
       <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">

            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>

            <a class="navbar-brand" href="#pablo">Linea de Tiempo</a>
          </div>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end" id="navigation">


            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                 <div class="input-group-text">
                   <i class="now-ui-icons ui-1_zoom-bold"></i>
                 </div>
               </div>
             </div>
           </form>

           <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#pablo">
                <i class="now-ui-icons media-2_sound-wave"></i>
                <p>
                  <span class="d-lg-none d-md-block">Stats</span>
                </p>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="now-ui-icons location_world"></i>
                <p>
                  <span class="d-lg-none d-md-block">Some Actions</span>
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#pablo">
                <i class="now-ui-icons users_single-02"></i>
                <p>
                  <span class="d-lg-none d-md-block">Account</span>
                </p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Fin de la barra de Navegación -->



    <div class="panel-header panel-header-sm">  </div>


    <br><br>
    <div class="content">
      <div class="header text-center">
        <h3 class="title">Linea de Tiempo</h3>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card card-timeline card-plain">
            <div class="card-body">
              <ul class="timeline">
                <li class="timeline-inverted">
                  <div class="timeline-badge danger">
                    <i class="now-ui-icons objects_planet"></i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <span class="badge badge-danger">Some Title</span>
                    </div>
                    <div class="timeline-body">
                      <p>Wifey made the best Father's Day meal ever. So thankful so happy so blessed. Thank you for making my family We just had fun with the “future” theme !!!   It was a fun night all together ... The always rude Kanye Show at 2am Sold Out Famous viewing @ Figueroa and 12th in downtown.</p>
                    </div>
                    <h6>
                      <i class="ti-time"></i>
                      11 hours ago via Twitter
                    </h6>
                  </div>
                </li>
                <li>
                  <div class="timeline-badge success">
                    <i class="now-ui-icons shopping_tag-content"></i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <span class="badge badge-success">Another One</span>
                    </div>
                    <div class="timeline-body">
                      <p>Thank God for the support of my wife and real friends. I also wanted to point out that it’s the first album to go number 1 off of streaming!!! I love you Ellen and also my number one design rule of anything I do from shoes to music to homes is that Kim has to like it....</p>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-badge info">
                    <i class="now-ui-icons shopping_delivery-fast"></i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <span class="badge badge-info">Another Title</span>
                    </div>
                    <div class="timeline-body">
                      <p>Called I Miss the Old Kanye That’s all it was Kanye And I love you like Kanye loves Kanye Famous viewing @ Figueroa and 12th in downtown LA 11:10PM</p>
                      <p>What if Kanye made a song about Kanye Royère doesn't make a Polar bear bed but the Polar bear couch is my favorite piece of furniture we own It wasn’t any Kanyes Set on his goals Kanye</p>
                      <hr>
                    </div>
                    <div class="timeline-footer">
                      <div class="dropdown">
                        <button type="button" class="btn btn-round btn-info dropdown-toggle" data-toggle="dropdown">
                          <i class="now-ui-icons design_bullet-list-67"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="timeline-badge warning">
                    <i class="now-ui-icons ui-1_email-85"></i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <span class="badge badge-warning">Another One</span>
                    </div>
                    <div class="timeline-body">
                      <p>Tune into Big Boy's 92.3 I'm about to play the first single from Cruel Winter also to Kim’s hair and makeup Lorraine jewelry and the whole style squad at Balmain and the Yeezy team. Thank you Anna for the invite thank you to the whole Vogue team</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Pie de pagina -->
    <?php
    require_once(RUTA_SISTEMA . "inc/footer.php");
    ?>
  </div>
</div>
<!-- Finde del panel -->

<?php
require_once(RUTA_SISTEMA . "inc/adm/configuracion.php");
?>

<!-- Libreias js -->
<?php
require_once(RUTA_SISTEMA . "inc/script.php");
?>

</body>

</html>
