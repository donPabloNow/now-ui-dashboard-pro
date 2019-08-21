<?php
session_start();
require_once("../../inc/config.sistema.php");
?>
<!DOCTYPE html>
<html lang="es">
<?php
require_once(RUTA_SISTEMA."inc/head.php");
?>

<body class="register-page sidebar-mini">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
      <div class="container-fluid">
        <div class="navbar-wrapper">

          <a class="navbar-brand" href="#pablo">Página de inicio de Bloqueo</a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navigation">

          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="dashboard.php" class="nav-link">
                <i class="now-ui-icons design_app"></i>
                Tablero
              </a>
            </li>
            <li class= "nav-item ">
              <a href="registro.php" class="nav-link">
                <i class="now-ui-icons tech_mobile"></i>
                Registro
              </a>
            </li>
            <li class= "nav-item ">
              <a href="iniciarsesion.php" class="nav-link">
                <i class="now-ui-icons users_circle-08"></i>
                Inicio de sesión
              </a>
            </li>

            <li class= "nav-item ">
              <a href="pricing.php" class="nav-link">
                <i class="now-ui-icons now-ui-icons business_money-coins"></i>
                Pricios
              </a>
            </li>

            <li class= "nav-item  active ">
              <a href="Bloquear.php" class="nav-link">
                <i class="now-ui-icons ui-1_lock-circle-open"></i>
                Bloquear
              </a>
            </li>
            <li class= "nav-item ">
              <a href="factura.php" class="nav-link">
                <i class="now-ui-icons files_paper"></i>
                Factura
              </a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
    <!-- End Navbar -->



    <div class="wrapper wrapper-full-page ">

      <div class="full-page lock-page section-image" filter-color="black" data-image="inc/adm/assets/img/bg13.jpg">
        <!--   you can change the color of the filter page using: data-color="blue | green | orange | red | purple" -->

        <div class="content">
          <div class="container">
            <div class="col-md-4 ml-auto mr-auto">

              <div class="card card-lock text-center">

                <div class="card-header ">
                  <img src="../../assets/img/emilyz.jpg" alt="...">
                </div>

                <div class="card-body ">

                  <h4 class="card-title">Joe Gardner</h4>

                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Enter Password..">
                  </div>

                </div>

                <div class="card-footer ">
                  <a href="#pablo" class="btn btn-primary btn-round btn-lg">Unlock</a>
                </div>

              </div>

            </div>
          </div>
        </div>

        <!-- Pie de pagina -->
        <?php
        require_once(RUTA_SISTEMA."inc/footer.php");
        ?>



      </div>


    </div>

    <?php
    require_once(RUTA_SISTEMA."inc/adm/configuracion.php");
    ?>

    <!-- Libreias js -->
    <?php
    require_once(RUTA_SISTEMA."inc/script.php");
    ?>

  </body>

  </html>
