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


      <div class="main-panel" id="main-panel">        <!-- inicio barra Navbar -->


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

              <a class="navbar-brand" href="#pablo">Tipografia</a>
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




      <div class="panel-header panel-header-sm">


      </div>


      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Ahora UI table Heading</h5>
                <p class="category">Creado Usando La Familia De Fuentes Montserrat</p>
              </div>
              <div class="card-body">
                <div class="typography-line">
                  <h1><span>Encabezado 1</span>La vida de ahora Ui Dashboard  </h1>
                </div>
                <div class="typography-line">
                  <h2><span>Encabezado 2</span>La vida de ahora Ui Dashboard </h2>
                </div>
                <div class="typography-line">
                  <h3><span>Encabezado 3</span>La vida de ahora Ui Dashboard </h3>
                </div>
                <div class="typography-line">
                  <h4><span>Encabezado 4</span>La vida de ahora Ui Dashboard </h4>
                </div>
                <div class="typography-line">
                  <h5><span>Encabezado 5</span>La vida de ahora Ui Dashboard </h5>
                </div>
                <div class="typography-line">
                  <h6><span>Encabezado 6</span>La vida de ahora Ui Dashboard </h6>
                </div>
                <div class="typography-line">
                  <p><span>Párrafo</span>
                    Seré el líder de una compañía que termina valiendo miles de millones de dólares, porque obtuve las respuestas. Entiendo la cultura. Yo soy el núcleo. Creo que es una responsabilidad que tengo, empujar posibilidades, mostrar a las personas, este es el nivel en el que podrían estar las cosas.
                  </p>
                </div>
                <div class="typography-line">
                  <span>Quote</span>
                  <blockquote>
                   <p class="blockquote blockquote-primary">
                     " Seré el líder de una compañía que termina valiendo miles de millones de dólares, porque obtuve las respuestas. Entiendo la cultura. Yo soy el núcleo. Creo que es una responsabilidad que tengo, empujar posibilidades, mostrar a las personas, este es el nivel en el que podrían estar las cosas."

                     <br>
                     <br>

                     <small>
                      - Noaa
                    </small>
                  </p>

                </blockquote>
              </div>

              <div class="typography-line">
                <span>Texto silenciado</span>
                <p class="text-muted">
                  Seré el líder de una empresa que termina valiendo miles de millones de dólares, porque obtuve las respuestas ...
                </p>
              </div>
              <div class="typography-line">
                <span>Texto primario</span>
                <p class="text-primary">
                Seré el líder de una empresa que termina valiendo miles de millones de dólares, porque obtuve las respuestas ...</p>
              </div>
              <div class="typography-line">
                <span>Texto informativo</span>
                <p class="text-info">
                Seré el líder de una empresa que termina valiendo miles de millones de dólares, porque obtuve las respuestas ...                        </p>
              </div>
              <div class="typography-line">
                <span>Texto de éxito</span>
                <p class="text-success">
                Seré el líder de una empresa que termina valiendo miles de millones de dólares, porque obtuve las respuestas ...                        </p>
              </div>
              <div class="typography-line">
                <span>Texto de advertencia</span>
                <p class="text-warning">
                  Seré el líder de una empresa que termina valiendo miles de millones de dólares, porque obtuve las respuestas ...
                </p>

              </div>
              <div class="typography-line">
                <span>Texto de peligro</span>
                <p class="text-danger">
                Seré el líder de una empresa que termina valiendo miles de millones de dólares, porque obtuve las respuestas ...                       </p>
              </div>
              <div class="typography-line">
                <h2><span>etiqueta</span>
                  Encabezado de pequeña con subtítulo pequeño<br>
                  <small>Use la etiqueta "pequeña" para los encabezados</small>
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Pie de pagina -->
    <?php    require_once(RUTA_SISTEMA . "inc/footer.php");    ?>
    <!-- Libreias js -->
  </div>
</div>


<?php    require_once(RUTA_SISTEMA . "inc/script.php");    ?>

</body>
</html>
