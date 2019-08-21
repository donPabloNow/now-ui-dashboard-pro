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

            <a class="navbar-brand" href="#pablo">Mago</a>
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


    <!-- Panel -->
    <div class="panel-header panel-header-sm">


    </div>


    <!--  Inicio del contenido -->

    <div class="content">

      <div class="col-md-10 mr-auto ml-auto">
        <!--      Wizard container        -->
        <div class="wizard-container">
          <div class="card card-wizard" data-color="primary" id="wizardProfile">
            <form action="" method="">
              <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

              <div class="card-header text-center" data-background-color="orange">
                <h3 class="card-title">
                 Construye tu perfil
               </h3>

               <h3 class="description">Esta información nos permitirá saber más acerca de usted.</h5>
                <div class="wizard-navigation">
                  <ul class="nav nav-pills">
                    <li class="nav-item">
                      <a class="nav-link active" href="#about" data-toggle="tab" role="tab" aria-controls="about" aria-selected="true">
                        <i class="now-ui-icons users_circle-08"></i>
                        Acerca
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#account" data-toggle="tab" data-toggle="tab" role="tab" aria-controls="account" aria-selected="false">
                        <i class="now-ui-icons ui-1_settings-gear-63"></i>
                        cuenta
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#address" data-toggle="tab" data-toggle="tab" role="tab" aria-controls="address" aria-selected="false">
                        <i class="now-ui-icons ui-1_email-85"></i>
                        Dirrección
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane show active" id="about">
                    <h5 class="info-text"> Empecemos con la información básica (con validación).</h5>
                    <div class="row justify-content-center">
                      <div class="col-sm-4">
                        <div class="picture-container">
                          <div class="picture">
                            <img src="../assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                            <input type="file" id="wizard-picture">
                          </div>
                          <h6 class="description">Eligir la foto</h6>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="input-group form-control-lg">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="now-ui-icons users_circle-08"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control" placeholder="First Name (required)" name="firstname">
                        </div>

                        <div class="input-group form-control-lg">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="now-ui-icons text_caps-small"></i>
                            </div>
                          </div>
                          <input type="text" placeholder="Last Name (required)" class="form-control" name="lastname"/>
                        </div>
                      </div>
                      <div class="col-lg-10 mt-3">
                        <div class="input-group form-control-lg">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="now-ui-icons text_caps-small"></i>
                            </div>
                          </div>
                          <input type="email" placeholder="Email (required)" class="form-control" name="email"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="account">
                   <h5 class="info-text"> ¿Qué estás haciendo? (casillas de verificación) </h5>
                  <div class="row justify-content-center">
                    <div class="col-lg-10">
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="choice" data-toggle="wizard-checkbox">
                            <input type="checkbox" name="jobb" value="Design">
                            <div class="icon">
                              <i class="now-ui-icons design-2_ruler-pencil"></i>
                            </div>
                            <h6>Desieño</h6>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="choice" data-toggle="wizard-checkbox">
                            <input type="checkbox" name="jobb" value="Code">
                            <div class="icon">
                              <i class="now-ui-icons business_bulb-63"></i>
                            </div>
                            <h6>Código</h6>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="choice" data-toggle="wizard-checkbox">
                            <input type="checkbox" name="jobb" value="Develop">
                            <div class="icon">
                              <i class="now-ui-icons tech_tv"></i>
                            </div>
                            <h6>Desarrollar</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="address">
                  <div class="row justify-content-center">
                    <div class="col-sm-12">
                      <h5 class="info-text"> ¿Vives en una zona bonita?</h5>
                    </div>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <label>Nombre de la calle</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Calle no.</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label>Ciudad</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label>País</label>
                        <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" title="Selección única">
                          <option value="Afghanistan"> Afghanistan </option>
                          <option value="Albania"> Albania </option>
                          <option value="Algeria"> Algeria </option>
                          <option value="American Samoa"> American Samoa </option>
                          <option value="Andorra"> Andorra </option>
                          <option value="Angola"> Angola </option>
                          <option value="Anguilla"> Anguilla </option>
                          <option value="Antarctica"> Antarctica </option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-footer">
              <div class="pull-right">
                <input type='button' class='btn btn-next btn-fill btn-rose btn-wd' name='next' value='Next' />
                <input type='button' class='btn btn-finish btn-fill btn-rose btn-wd' name='finish' value='Terminar' />
              </div>

              <div class="pull-left">
                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Anterior' />
              </div>
              <div class="clearfix"></div>
            </div>

          </form>
        </div>
      </div> <!-- wizard container -->
    </div>

  </div>




  <!-- Fin del contenido  -->

  <!-- Pie de pagina -->
  <?php    require_once(RUTA_SISTEMA . "inc/footer.php");    ?>
  <!-- Libreias js -->

</div>


</div>




<?php    require_once(RUTA_SISTEMA . "inc/script.php");    ?>

</body>
</html>

