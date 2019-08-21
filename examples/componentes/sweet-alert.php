<?php
session_start();
require_once("../../inc/config.sistema.php");
?>
<!DOCTYPE html>
<html lang="es">
<?php
require_once(RUTA_SISTEMA . "inc/head.php");
?>

<body class="sidebar-mini ">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="wrapper">

      <!-- Menu  del sistema-->
      <?php
      require_once(RUTA_SISTEMA . "inc/menu_nuevo.php");
      ?>

      <!-- Boton de configuracion -->
      <?php
      require_once(RUTA_SISTEMA . "inc/adm/configuracion.php");
      ?>

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

              <a class="navbar-brand" href="#pablo">Sweet Alert</a>
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

      <div class="panel-header">

        <div class="header text-center">
          <h2 class="title">Sweet Alert</h2>
          <p class="category">Un Hermoso Plugin, Que Reemplaza La Alerta Clásica, Hecho A Mano Por Nuestro Amigo  <a target="_blank" href="https://twitter.com/t4t5">Tristan Edwards</a>. Por Favor, Echa Un Vistazo A La  <a href="https://sweetalert2.github.io/" target="_blank">Documentación Completa.</a></p>
        </div>

      </div>

      <div class="content">
        <div class="places-sweet-alerts">
          <div class="row">
            <div class="col-md-3 ml-auto">

              <div class="card ">
                <div class="card-body text-center">

                  <p class="card-text">Basic example</p>

                  <button class="btn btn-primary btn-fill" onclick="demo.showSwal('basic')">Try me!</button>

                </div>

              </div>

            </div>
            <div class="col-md-3 mr-auto">

              <div class="card ">

                <div class="card-body text-center">

                  <p class="card-text">A success message</p>

                  <button class="btn btn-primary btn-fill" onclick="demo.showSwal('success-message')">Try me!</button>


                </div>

              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-md-3 ml-auto">

              <div class="card ">

                <div class="card-body text-center">

                  <p class="card-text">Custom HTML description</p>

                  <button class="btn btn-primary btn-fill" onclick="demo.showSwal('custom-html')">Try me!</button>

                </div>

              </div>

            </div>
            <div class="col-md-3 mr-auto">

              <div class="card ">

                <div class="card-body text-center">

                  <p class="card-text">A warning message, with a function attached to the "Confirm" Button...</p>

                  <button class="btn btn-primary btn-fill" onclick="demo.showSwal('warning-message-and-confirmation')">Try me!</button>

                </div>

              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-md-3 ml-auto">


              <div class="card ">

                <div class="card-body text-center">

                  <p class="card-text">Modal window with input field</p>

                  <button class="btn btn-primary btn-fill" onclick="demo.showSwal('input-field')">Try me!</button>
                </div>

              </div>

            </div>
            <div class="col-md-3 mr-auto">

              <div class="card ">

                <div class="card-body text-center">

                  <p class="card-text">A title with a text under</p>

                  <button class="btn btn-primary btn-fill" onclick="demo.showSwal('title-and-text')">Try me!</button>

                </div>

              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-md-3 ml-auto">

              <div class="card ">

                <div class="card-body text-center">

                  <p class="card-text">A message with auto close timer set to 2 seconds</p>

                  <button class="btn btn-primary btn-fill" onclick="demo.showSwal('auto-close')">Try me!</button>

                </div>

              </div>

            </div>

            <div class="col-md-3 mr-auto">

              <div class="card ">

                <div class="card-body text-center">

                  <p class="card-text">...and by passing a parameter, you can execute something else for "Cancel"</p>

                  <button class="btn btn-primary btn-fill" onclick="demo.showSwal('warning-message-and-cancel')">Try me!</button>

                </div>
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


  <!-- Libreias js -->
  <?php
  require_once(RUTA_SISTEMA . "inc/script.php");
  ?>
</body>
</html>
