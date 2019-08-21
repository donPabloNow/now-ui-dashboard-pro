<?php
session_start();
require_once("../../inc/config.sistema.php");
?>
<!DOCTYPE html>
<html lang="es">
<?php
require_once(RUTA_SISTEMA . "inc/head.php");
?>

<body class="pricing-page sidebar-mini ">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
      <div class="container-fluid">
        <div class="navbar-wrapper">

          <a class="navbar-brand" href="#pablo">Página de inicio de Pricios</a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navigation">


          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="../dashboard.php" class="nav-link">
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
              <a href="inisiarsesion.php" class="nav-link">
                <i class="now-ui-icons users_circle-08"></i>
                Inicio de sesión
              </a>
            </li>

            <li class= "nav-item  active">
              <a href="pricing.php" class="nav-link">
                <i class="now-ui-icons now-ui-icons business_money-coins"></i>
                Pricios
              </a>
            </li>

            <li class= "nav-item ">
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

      <div class="full-page pricing-page section-image" data-image="../../assets/img/bg15.jpg">

        <div class="content">
          <div class="container">
            <div class="row">
              <div class="col-md-6 ml-auto mr-auto text-center">
                <h2 class="title">Pick the best plan for you</h2>
                <h5 class="description">You have Free Unlimited Updates and Premium Support on each package.</h5>
              </div>
            </div>

            <div class="row">

              <div class="col-lg-3 col-md-6">

                <div class="card card-pricing card-plain">

                  <h6 class="card-category"> Bravo Pack</h6>

                  <div class="card-body">

                    <div class="card-icon icon-warning ">
                      <i class="now-ui-icons media-1_button-power"></i>
                    </div>
                    <h3 class="card-title">10$</h3>

                    <ul>
                      <li>Complete documentation</li>
                      <li>Working materials in Sketch</li>
                    </ul>

                  </div>

                  <div class="card-footer">
                    <a href="#pablo" class="btn btn-round btn-neutral btn-warning">Add to Cart</a>
                  </div>

                </div>

              </div>

              <div class="col-lg-3 col-md-6">

                <div class="card card-pricing ">

                  <h6 class="card-category"> Alpha Pack</h6>

                  <div class="card-body">

                    <div class="card-icon icon-primary ">
                      <i class="now-ui-icons objects_diamond"></i>
                    </div>
                    <h3 class="card-title">69$</h3>
                    <ul>
                      <li>Working materials in EPS</li>
                      <li>6 months access to the library</li>
                    </ul>

                  </div>

                  <div class="card-footer">
                    <a href="#pablo" class="btn btn-round btn-primary">Add to Cart</a>
                  </div>

                </div>
              </div>

              <div class="col-lg-3 col-md-6">

                <div class="card card-pricing card-plain">

                  <h6 class="card-category"> Charlie Pack</h6>

                  <div class="card-body">

                    <div class="card-icon icon-success ">
                      <i class="now-ui-icons media-2_sound-wave"></i>
                    </div>
                    <h3 class="card-title">69$</h3>
                    <ul>
                      <li>Working materials in PSD</li>
                      <li>1 year access to the library</li>
                    </ul>

                  </div>


                  <div class="card-footer">
                    <a href="#pablo" class="btn btn-round btn-neutral btn-success">Add to Cart</a>
                  </div>

                </div>

              </div>

              <div class="col-lg-3 col-md-6">


                <div class="card card-pricing card-plain">

                  <h6 class="card-category"> Extra Pack</h6>


                  <div class="card-body">

                    <div class="card-icon icon-danger ">
                      <i class="now-ui-icons education_atom"></i>
                    </div>
                    <h3 class="card-title">159$</h3>

                    <ul>
                      <li>Complete documentation</li>
                      <li>2GB cloud storage</li>
                    </ul>

                  </div>


                  <div class="card-footer">
                    <a href="#pablo" class="btn btn-round btn-neutral btn-danger">Add to Cart</a>
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

<!-- Configurración -->
<?php
require_once(RUTA_SISTEMA . "inc/adm/configuracion.php");
?>

<!-- Libreias js -->
<?php
require_once(RUTA_SISTEMA . "inc/script.php");
?>

</body>

</html>
