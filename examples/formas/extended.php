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

            <a class="navbar-brand" href="#pablo">Formularios extendidos</a>
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

      <div class="row">
        <div class="col-md-4">

          <div class="card ">

            <div class="card-header ">
              <h4 class="card-title">Detector de datos</h4>
            </div>

            <div class="card-body ">


              <div class="form-group">
                <input type="text" class="form-control datetimepicker" value="10/05/2016">
              </div>

            </div>

          </div>

        </div>

        <div class="col-md-4">


          <div class="card ">

            <div class="card-header ">
              <h4 class="card-title">Selector de fechas</h4>
            </div>

            <div class="card-body ">

              <div class="form-group">
                <input type="text" class="form-control datepicker" value="10/05/2016">
              </div>

            </div>

          </div>


        </div>

        <div class="col-md-4">

          <div class="card ">

            <div class="card-header ">
              <h4 class="card-title">Selector de tiempo</h4>
            </div>

            <div class="card-body ">

              <div class="form-group">
                <input type="text" class="form-control timepicker" value="10/05/2016">
              </div>

            </div>

          </div>

        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <h4 class="card-title">TSelector de tiempo</h4>
                  <div class="row">
                    <div class="col-md-4">
                      <p class="category">Defecto</p>

                      <input type="checkbox" checked name="checkbox" class="bootstrap-switch"
                      data-on-label="ON"
                      data-off-label="OFF"
                      />
                      <input type="checkbox" name="checkbox" class="bootstrap-switch"
                      data-on-label="ON"
                      data-off-label="OFF"
                      />
                    </div>
                    <div class="col-md-4">
                      <p class="category">Llanura</p>
                      <input type="checkbox" checked name="checkbox" class="bootstrap-switch"
                      data-on-label=""
                      data-off-label=""
                      />
                      <input type="checkbox" name="checkbox" class="bootstrap-switch"
                      data-on-label=""
                      data-off-label=""
                      />
                    </div>
                    <div class="col-md-4">
                      <p class="category">Con Iconos</p>
                      <input type="checkbox" checked name="checkbox" class="bootstrap-switch"
                      data-on-label="<i class='now-ui-icons ui-1_check'></i>"
                      data-off-label="<i class='now-ui-icons ui-1_simple-remove'></i>"
                      />
                      <input type="checkbox" name="checkbox" class="bootstrap-switch"
                      data-on-label="<i class='now-ui-icons ui-1_check'></i>"
                      data-off-label="<i class='now-ui-icons ui-1_simple-remove'></i>"
                      />
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <h4 class="card-title">Selección personalizable</h4>
                  <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-5 mb-3">
                      <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" title="Single Select">
                        <option disabled selected>Opción individual</option>
                        <option value="2">Foobar</option>
                        <option value="3">Is great</option>
                      </select>
                    </div>
                    <div class="col-lg-5 col-md-8 col-sm-5">
                      <select class="selectpicker" data-style="btn btn-info btn-round" multiple title="Choose City" data-size="7">
                        <option disabled> Elegir ciudad</option>
                        <option value="2">Paris </option>
                        <option value="3">Bucharest</option>
                        <option value="4">Rome</option>
                        <option value="5">New York</option>
                        <option value="6">Miami </option>
                        <option value="7">Piatra Neamt</option>
                        <option value="8">Paris </option>
                        <option value="9">Bucharest</option>
                        <option value="10">Rome</option>
                        <option value="11">New York</option>
                        <option value="12">Miami </option>
                        <option value="13">Piatra Neamt</option>
                        <option value="14">Paris </option>
                        <option value="15">Bucharest</option>
                        <option value="16">Rome</option>
                        <option value="17">New York</option>
                        <option value="18">Miami </option>
                        <option value="19">Piatra Neamt</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h4 class="card-title">Etiquetas</h4>

                  <input type="text" value="Amsterdam,Washington,Sydney,Beijing" class="tagsinput" data-role="tagsinput" data-color="danger"/>
                </div>

                <div class="col-md-6">
                  <h4 class="card-title">Dropdown & Dropup</h4>

                  <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-3">
                      <div class="dropdown">
                        <button class="dropdown-toggle btn btn-primary btn-round btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Desplegable
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <h6 class="dropdown-header">Dropdown header</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-3">
                      <div class="dropup">
                        <button type="button" class="dropdown-toggle btn btn-primary btn-round btn-block" data-toggle="dropdown">
                          Dropup
                        </button>
                        <div class="dropdown-menu">
                          <h6 class="dropdown-header">Dropdown header</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h4 class="card-title">Barras de progreso</h4>

                  <div class="progress-container">
                    <span class="progress-badge">Defecto</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                        <span class="progress-value">25%</span>
                      </div>
                    </div>
                  </div>

                  <div class="progress-container progress-primary">
                    <span class="progress-badge">Primario</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        <span class="progress-value">60%</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <h4 class="card-title">Deslizadores</h4>

                  <div id="sliderRegular" class="slider"></div>
                  <br>
                  <div id="sliderDouble" class="slider slider-primary"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-6">
                      <h4 class="card-title">Imagen regular</h4>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                          <img src="../../assets/img/image_placeholder.jpg" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Seleccionar imagen</span>
                            <span class="fileinput-exists">Cambio</span>
                            <input type="file" name="..." />
                          </span>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Retirar</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h4 class="card-title">Avatar</h4>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-circle">
                          <img src="../../assets/img/placeholder.jpg" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                        <div>
                          <span class="btn btn-round btn-rose btn-file">
                            <span class="fileinput-new">Añadir foto </span>
                            <span class="fileinput-exists">Cambio</span>
                            <input type="file" name="..." /></span>
                            <br />
                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Retirar</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <h4 class="card-title">Archivo único</h4>

                    <div class="form-group form-file-upload form-file-simple">
                      <input type="text" class="form-control inputFileVisible" placeholder="Simple chooser...">
                      <input type="file" class="inputFileHidden">
                    </div>

                    <h4 class="card-title">Archivo múltiple</h4>

                    <div class="form-group form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <input type="text" class="form-control inputFileVisible" placeholder="Multiple chooser..." multiple="">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- end card -->
          </div>
        </div>
        <!-- Fin del contenido  -->
      </div>



      <!-- Pie de pagina -->
      <?php    require_once(RUTA_SISTEMA . "inc/footer.php");    ?>
      <!-- Libreias js -->


    </div>

  </div>



  <?php    require_once(RUTA_SISTEMA . "inc/script.php");    ?>

</body>
</html>
