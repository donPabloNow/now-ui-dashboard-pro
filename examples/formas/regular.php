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

    <div class="wrapper ">

      <!-- Menu  del sistema-->
      <?php      require_once(RUTA_SISTEMA . "inc/menu_nuevo.php");      ?>

      <!-- Boton de configuracion -->
      <?php      require_once(RUTA_SISTEMA . "inc/adm/configuracion.php");      ?>


      <div class="main-panel" id="main-panel">

        <!-- inicio barra Navbar -->
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

              <a class="navbar-brand" href="#pablo">Formularios Regulares</a>
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
      <!-- Fin Navbar -->

      <div class="panel-header panel-header-sm"></div>

      <div class="content">
        <div class="row">
          <div class="col-md-6">

            <div class="card ">

              <div class="card-header ">
                <h4 class="card-title">Forma apilada</h4>
              </div>

              <div class="card-body ">

                <form method="#" action="#">
                  <label>Dirección de correo electrónico</label>
                  <div class="form-group">
                    <input type="email" class="form-control">
                  </div>

                  <label>Contraseña</label>
                  <div class="form-group">
                    <input type="password" class="form-control">
                  </div>
                  <div class="form-check mt-3">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox">
                      <span class="form-check-sign"></span>
                      Suscríbete al boletín
                    </label>
                  </div>
                </form>

              </div>

              <div class="card-footer ">
                <button type="submit" class="btn btn-fill btn-primary">Enviar</button>
              </div>

            </div>

          </div>

          <div class="col-md-6">

            <div class="card ">

              <div class="card-header ">
                <h4 class="card-title">Forma horizontal</h4>
              </div>

              <div class="card-body ">

                <form class="form-horizontal">
                  <div class="row">
                    <label class="col-md-3 col-form-label">Nombre de usuario</label>

                    <div class="col-md-9">
                      <div class="form-group">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-md-3 col-form-label">Email</label>
                    <div class="col-md-9">
                      <div class="form-group">
                        <input type="email" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-md-3 col-form-label">Contraseña</label>

                    <div class="col-md-9">
                      <div class="form-group">
                        <input type="password" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-md-3"></label>

                    <div class="col-md-9">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-sign"></span>
                          Recuérdame
                        </label>
                      </div>
                    </div>
                  </div>
                </form>

              </div>

              <div class="card-footer ">
                <div class="row">
                  <label class="col-md-3"></label>

                  <div class="col-md-9">
                    <button type="submit" class="btn btn-fill btn-primary">Registrarse  </button>
                  </div>
                </div>
              </div>

            </div>

          </div>

          <div class="col-md-12">


            <div class="card ">

              <div class="card-header ">
                <h4 class="card-title">Elementos de formulario</h4>
              </div>

              <div class="card-body ">

               <form method="get" action="/" class="form-horizontal">
                <div class="row">
                  <label class="col-sm-2 col-form-label">Con ayuda</label>

                  <div class="col-sm-10">
                    <div class="form-group">
                      <input type="text" class="form-control">
                      <span class="form-text">Un bloque de texto de ayuda que se rompe en una nueva línea.</span>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Contraseña</label>

                  <div class="col-sm-10">
                    <div class="form-group">
                      <input type="password" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Marcador de posición</label>

                  <div class="col-sm-10">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="placeholder">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Discapacitado</label>

                  <div class="col-sm-10">
                    <div class="form-group">
                      <input type="text" class="form-control" value="Disabled input here.." disabled>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Control estático</label>

                  <div class="col-sm-10">
                    <div class="form-group">
                      <p class="form-control-static"><a href="adnologia@gmail.com" class="__cf_email__" data-cfemail="adnologia@gmail.com">adnologia@gmail.com</a></p>
                      <!-- [email&#160;protected]</a></p> -->
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Checkboxes y radios</label>
                  <div class="col-sm-10 checkbox-radios">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-sign"></span>
                        Primera casilla
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-sign"></span>
                        Segunda casilla de verificación
                      </label>
                    </div>

                    <div class="form-check form-check-radio">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <span class="form-check-sign"></span>
                        Primera radio
                      </label>
                    </div>

                    <div class="form-check form-check-radio">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <span class="form-check-sign"></span>
                        Segunda radio
                      </label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Casillas de verificación en línea</label>
                  <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-sign"></span>
                        uno
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-sign"></span>
                        dos
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-sign"></span>
                        tres
                      </label>
                    </div>
                  </div>
                </div>
              </form>

            </div>

          </div>

        </div>

        <div class="col-md-12">

          <div class="card ">

            <div class="card-header ">
              <h4 class="card-title">Variantes de entrada</h4>
            </div>

            <div class="card-body ">

              <form method="get" action="/" class="form-horizontal">
                <div class="row">
                  <label class="col-sm-2 col-form-label">Casillas de verificación y radios personalizadas</label>
                  <div class="col-sm-4 col-sm-offset-1 checkbox-radios">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-sign"></span>
                        Desenfrenado
                      </label>
                    </div>

                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" checked>
                        <span class="form-check-sign"></span>
                        Comprobado
                      </label>
                    </div>

                    <div class="form-check disabled">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" disabled>
                        <span class="form-check-sign"></span>
                        Desactivado sin marcar
                      </label>
                    </div>

                    <div class="form-check disabled">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" disabled>
                        <span class="form-check-sign"></span>
                        Desactivado
                      </label>
                    </div>
                  </div>

                  <div class="col-sm-5 checkbox-radios">
                    <div class="form-check form-check-radio">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios3" value="option1">
                        <span class="form-check-sign"></span>
                        La radio esta apagada
                      </label>
                    </div>

                    <div class="form-check form-check-radio">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios4" value="option2" checked>
                        <span class="form-check-sign"></span>
                        La radio esta encendida
                      </label>
                    </div>

                    <div class="form-check form-check-radio disabled">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadio1" id="exampleRadios5" value="option1" disabled>
                        <span class="form-check-sign"></span>
                        La radio esta apagada
                      </label>
                    </div>

                    <div class="form-check form-check-radio disabled">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadio1" id="exampleRadios6" value="option2" checked disabled>
                        <span class="form-check-sign"></span>
                        La radio esta encendida

                      </label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Entrada con éxito</label>

                  <div class="col-sm-10">
                    <div class="form-group has-success">
                      <input type="text" class="form-control" value="Success">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Entrada con error</label>

                  <div class="col-sm-10">
                    <div class="form-group has-danger">
                      <input type="text" class="form-control" value="Error">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Tamaño de columna</label>

                  <div class="col-sm-10">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder=".col-md-3">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder=".col-md-4">
                        </div>
                      </div>

                      <div class="col-md-5">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder=".col-md-5">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>

            </div>


          </div>

        </div>
      </div>

    </div>
    <!-- Pie de pagina -->
    <?php    require_once(RUTA_SISTEMA . "inc/footer.php");    ?>
  </div>

</div>



<!-- Libreias js -->

<?php    require_once(RUTA_SISTEMA . "inc/script.php");    ?>

</body>
</html>
