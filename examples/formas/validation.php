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

            <a class="navbar-brand" href="#pablo">Formularios de Validación </a>
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
        <div class="col-md-6">
          <form id="RegisterValidation" action="" method="">
            <div class="card ">

              <div class="card-header ">
                <h4 class="card-title">Formulario de registro</h4>
              </div>

              <div class="card-body ">

                <div class="form-group has-label">
                  <label>
                    Dirección de correo electrónico *
                  </label>
                  <input class="form-control"
                  name="email"
                  type="email"
                  required="true"
                  />
                </div>

                <div class="form-group has-label">
                  <label>
                    Contraseña *
                  </label>
                  <input class="form-control"
                  name="password"
                  id="registerPassword"
                  type="password"
                  required="true"
                  />
                </div>

                <div class="form-group has-label">
                  <label>
                  Confirmar contraseña *                  </label>
                  <input class="form-control"
                  name="password_confirmation"
                  id="registerPasswordConfirmation"
                  type="password"
                  required="true"
                  equalTo="#registerPassword"
                  />
                </div>

                <div class="category form-category">* Campos Requeridos</div>

              </div>

              <div class="card-footer text-right">
                <div class="form-check pull-left">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="optionCheckboxes" required>
                    <span class="form-check-sign"></span>
                    Suscríbete al boletín
                  </label>
                </div>

                <button type="submit" class="btn btn-primary">Registro</button>
              </div>

            </div>
          </form>
        </div>
        <div class="col-md-6">
          <form id="LoginValidation" action="" method="">

            <div class="card ">

              <div class="card-header ">
                <h4 class="card-title">Nombre completo *</h4>
              </div>

              <div class="card-body ">
                <div class="form-group has-label">
                  <label>Nombre completo *</label>
                  <input class="form-control"
                  name="fullname"
                  type="text"
                  email="true"
                  required="true"
                  />
                </div>
                <div class="form-group has-label">
                  <label>Dirección de correo electrónico *</label>
                  <input class="form-control"
                  name="email"
                  type="email"
                  email="true"
                  required="true"
                  />
                </div>
                <div class="form-group has-label">
                  <label>Contraseña *</label>
                  <input class="form-control"
                  name="password"
                  type="password"
                  required="true"
                  />
                </div>

                <div class="category form-category">* Campos Requeridos</div>

              </div>

              <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary">Register</button>
              </div>

            </div>

          </form>
        </div>
        <div class="col-md-12">
          <form id="TypeValidation" class="form-horizontal" action="" method="">

            <div class="card ">

              <div class="card-header ">
                <h4 class="card-title">Validación de tipo</h4>
              </div>

              <div class="card-body ">

               <div class="row">
                <label class="col-sm-2 col-form-label">Texto requerido</label>

                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control"
                    type="text"
                    name="required"
                    required="true"
                    />
                  </div>
                </div>

                <label class="col-sm-3 label-on-right"><code>required</code></label>
              </div>

              <div class="row">
                <label class="col-sm-2 col-form-label">Email</label>

                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control"
                    type="text"
                    name="email"
                    email="true"
                    />
                  </div>
                </div>

                <label class="col-sm-3 label-on-right"><code>email="true"</code></label>
              </div>

              <div class="row">
                <label class="col-sm-2 col-form-label">Número</label>

                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control"
                    type="text"
                    name="number"
                    number="true"
                    />
                  </div>
                </div>

                <label class="col-sm-3 label-on-right"><code>number="true"</code></label>
              </div>

              <div class="row">
                <label class="col-sm-2 col-form-label">Url</label>

                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control"
                    type="text"
                    name="url"
                    url="true"
                    />
                  </div>
                </div>

                <label class="col-sm-3 label-on-right"><code>url="true"</code></label>
              </div>

              <div class="row">
                <label class="col-sm-2 col-form-label">Igual a</label>

                <div class="col-sm-3">
                  <div class="form-group">
                    <input class="form-control"
                    id="idSource"
                    type="text"
                    placeholder="#idSource"
                    />
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="form-group">
                    <input class="form-control"
                    id="idDestination"
                    type="text"
                    placeholder="#idDestination"
                    equalTo="#idSource"
                    />
                  </div>
                </div>

                <label class="col-sm-4 label-on-right"><code>equalTo="#idSource"</code></label>
              </div>
            </div>

            <div class="card-footer text-center">
              <button type="submit" class="btn btn-primary">Validar entrada</button>
            </div>

          </div>

        </form>
      </div>

      <div class="col-md-12">
        <form id="RangeValidation" class="form-horizontal" action="" method="">

          <div class="card ">

            <div class="card-header ">
              <h4 class="card-title">Validación de rango</h4>
            </div>

            <div class="card-body ">

             <div class="row">
              <label class="col-sm-2 col-form-label">Longitud mínima</label>

              <div class="col-sm-7">
                <div class="form-group">
                  <input class="form-control"
                  type="text"
                  name="min_length"
                  minLength="5"
                  />
                </div>
              </div>

              <label class="col-sm-3 label-on-right"><code>minLength="5"</code></label>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Longitud máxima</label>

              <div class="col-sm-7">
                <div class="form-group">
                  <input class="form-control"
                  type="text"
                  name="max_length"
                  maxLength="5"
                  />
                </div>
              </div>

              <label class="col-sm-3 label-on-right"><code>maxLength="5"</code></label>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Distancia</label>

              <div class="col-sm-7">
                <div class="form-group">
                  <input class="form-control"
                  type="text"
                  name="range"
                  range="[6,10]"
                  />
                </div>
              </div>

              <label class="col-sm-3 label-on-right"><code>range="[6,10]"</code></label>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Valor mínimo</label>

              <div class="col-sm-7">
                <div class="form-group">
                  <input class="form-control"
                  type="text"
                  name="min"
                  min="6"
                  />
                </div>
              </div>

              <label class="col-sm-3 label-on-right"><code>min="6"</code></label>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">Valor máximo</label>

              <div class="col-sm-7">
                <div class="form-group">
                  <input class="form-control"
                  type="text"
                  name="max"
                  max="6"
                  />
                </div>
              </div>

              <label class="col-sm-3 label-on-right"><code>max="6"</code></label>
            </div>

          </div>

          <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary">Validar entrada</button>
          </div>

        </div>

      </form>
    </div>
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
