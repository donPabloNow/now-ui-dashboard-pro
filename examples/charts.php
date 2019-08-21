<?php
session_start();
require_once("../inc/config.sistema.php");
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

            <a class="navbar-brand" href="#pablo">Charts</a>
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


    <div class="panel-header panel-header">


      <div class="header text-center">
        <h2 class="title">Charts.js</h2>
        <p class="category">Gráficos De JavaScript Simples Pero Flexibles Para Diseñadores Y Desarrolladores. Hecho Por Nuestros Amigos De<a target="_blank" href="http://www.chartjs.org">Charts.js</a>. Por Favor, Consulte <a target="_blank" href="http://www.chartjs.org/docs/latest/"> La Documentación Completa</a>.</p>
      </div>

    </div>

<!--  Inicio del contenido -->
    <div class="content">
      <div class="row">
        <div class="col-md-5 ml-auto">
          <div class="card card-chart">
            <div class="card-header">
              <h5 class="card-category">Simple with gradient</h5>
              <h4 class="card-title">Line Chart</h4>
              <div class="dropdown">
                <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                  <i class="now-ui-icons loader_gear"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <a class="dropdown-item text-danger" href="#">Remove Data</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <canvas id="lineChartExample"></canvas>
              </div>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 mr-auto">
          <div class="card card-chart">
            <div class="card-header">
              <h5 class="card-category">With numbers and grid</h5>
              <h4 class="card-title">Line Chart 2</h4>
              <div class="dropdown">
                <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                  <i class="now-ui-icons loader_gear"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <a class="dropdown-item text-danger" href="#">Remove Data</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
              </div>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 ml-auto">
          <div class="card card-chart">
            <div class="card-header">
              <h5 class="card-category">Simple with grids and numbers</h5>
              <h4 class="card-title">Bar Chart</h4>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <canvas id="barChartSimpleGradientsNumbers"></canvas>
              </div>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 mr-auto">
          <div class="card card-chart">
            <div class="card-header">
              <h5 class="card-category">Multiple bars no gradient</h5>
              <h4 class="card-title">Bar Chart 2</h4>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <canvas id="barChartMultipleBarsNoGradient"></canvas>
              </div>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>







    <!-- Fin del contenido  -->

    <!-- Pie de pagina -->
    <?php    require_once(RUTA_SISTEMA . "inc/footer.php");    ?>
    <!-- Libreias js -->

  </div>


</div>




<?php    require_once("inc/script.php");    ?>

</body>
</html>

