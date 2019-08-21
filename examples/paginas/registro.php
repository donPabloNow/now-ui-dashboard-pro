<?php
session_start();
require_once("../../inc/config.sistema.php");
?>
<!DOCTYPE html>
<html lang="es">
<?php
require_once(RUTA_SISTEMA . "inc/head.php");
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

          <a class="navbar-brand" href="#pablo">Página de inicio de Registro</a>
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
            <li class= "nav-item  active">
              <a href="#" class="nav-link">
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

            <li class= "nav-item ">
              <a href="../paginas/pricing.php" class="nav-link">
                <i class="now-ui-icons now-ui-icons business_money-coins"></i>
                Pricios
              </a>
            </li>

            <li class= "nav-item ">
              <a href="../paginas/Bloquear.php" class="nav-link">
                <i class="now-ui-icons ui-1_lock-circle-open"></i>
                Bloquear
              </a>
            </li>
            <li class= "nav-item ">
              <a href="../paginas/factura.php" class="nav-link">
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


      <div class="full-page register-page section-image" filter-color="black" data-image="../../assets/img/bg16.jpg">
        <div class="content">
          <div class="container">
            <div class="row">
              <div class="col-md-5 ml-auto">
                <div class="info-area info-horizontal mt-5">
                  <div class="icon icon-primary">
                    <i class="now-ui-icons media-2_sound-wave"></i>
                  </div>
                  <div class="description">
                    <h5 class="info-title">Marketing</h5>
                    <p class="description">
                      We've created the marketing campaign of the website. It was a very interesting collaboration.
                    </p>
                  </div>
                </div>

                <div class="info-area info-horizontal">
                  <div class="icon icon-primary">
                    <i class="now-ui-icons media-1_button-pause"></i>
                  </div>
                  <div class="description">
                    <h5 class="info-title">Fully Coded in HTML5</h5>
                    <p class="description">
                      We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                    </p>
                  </div>
                </div>

                <div class="info-area info-horizontal">
                  <div class="icon icon-info">
                    <i class="now-ui-icons users_single-02"></i>
                  </div>
                  <div class="description">
                    <h5 class="info-title">Built Audience</h5>
                    <p class="description">
                      There is also a Fully Customizable CMS Admin Dashboard for this product.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mr-auto">

                <div class="card card-signup text-center">

                  <div class="card-header ">
                    <h4 class="card-title">Register</h4>
                    <div class="social">
                      <button class="btn btn-icon btn-round btn-twitter">
                        <i class="fab fa-twitter"></i>
                      </button>
                      <button class="btn btn-icon btn-round btn-dribbble">
                        <i class="fab fa-dribbble"></i>
                      </button>
                      <button class="btn btn-icon btn-round btn-facebook">
                        <i class="fab fa-facebook-f"></i>
                      </button>
                      <h5 class="card-description"> or be classical </h5>
                    </div>
                  </div>

                  <div class="card-body ">

                    <form class="form" method="" action="">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="now-ui-icons users_circle-08"></i>
                          </div>
                        </div>
                        <input type="text" class="form-control" placeholder="First Name...">
                      </div>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="now-ui-icons text_caps-small"></i>
                          </div>
                        </div>
                        <input type="text" placeholder="Last Name..." class="form-control">
                      </div>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="now-ui-icons ui-1_email-85"></i>
                          </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Email...">
                      </div>

                      <div class="form-check text-left">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-sign"></span>
                          I agree to the <a href="#something">terms and conditions</a>.
                        </label>
                      </div>
                    </form>



                  </div>



                  <div class="card-footer ">
                    <a href="#pablo" class="btn btn-primary btn-round btn-lg">Get Started</a>
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

    <?php
    require_once(RUTA_SISTEMA . "inc/adm/configuracion.php");
    ?>

    <!-- Libreias js -->
    <?php
    require_once(RUTA_SISTEMA . "inc/script.php");
    ?>

  </body>

  </html>
