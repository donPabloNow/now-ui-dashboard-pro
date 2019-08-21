<?php
session_start();
require_once("../../inc/config.sistema.php");
?>
<!DOCTYPE html>
<html lang="es">
<?php
require_once(RUTA_SISTEMA ."inc/head.php");
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

          <a class="navbar-brand" href="#pablo">Página de inicio de Factura</a>
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

            <li class= "nav-item ">
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
            <li class= "nav-item  active ">
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

      <div class="full-page invoice-page section-image" filter-color="black" data-image="inc/adm/assets/img/bg13.jpg">
        <!--   you can change the color of the filter page using: data-color="blue | green | orange | red | purple" -->

        <div class="content">
          <div class="container">
            <div class="col-md-6 ml-auto mr-auto">
              <div class="card card-invoice mt-5">
                <div class="card-header text-center" data-color-icon="warning">
                  <div class="row">
                    <div class="col-12 text-right">
                      <button type="button" name="button" class="btn btn-primary btn-round btn-sm">Download</button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <h4 class="card-title">Invoice <span class="font-weight-light">#AFG4261KL</span></h4>
                      <h5 class="card-description mt-3 font-weight-bold">
                        <hr> Creative Tim
                      </h5>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table class="table mt-3">
                          <thead>
                            <tr>
                              <th class="pl-0">
                                <h6 class="font-weight-bold text-capitalize">Product</h6>
                              </th>
                              <th class="px-0 ">
                                <h6 class="font-weight-bold text-capitalize">Unit</h6>
                              </th>
                              <th class="pr-0 text-right">
                                <h6 class="font-weight-bold text-capitalize">Price</h6>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="pl-0">
                                Web Updates
                              </td>
                              <td class="px-0">
                                1
                              </td>
                              <td class="pr-0 text-right">
                                $380.00
                              </td>
                            </tr>
                            <tr>
                              <td class="pl-0">
                                SSL Renewals
                              </td>
                              <td class="px-0">
                                3
                              </td>
                              <td class="pr-0 text-right">
                                $175.00
                              </td>
                            </tr>
                            <tr>
                              <td class="pl-0">
                                VAT
                              </td>
                              <td class="px-0">
                                1
                              </td>
                              <td class="pr-0 text-right">
                                $37.00
                              </td>
                            </tr>
                            <tr>
                              <td class="px-0 font-weight-bold">
                               Total amount due
                             </td>
                             <td></td>
                             <td class="px-0 text-right">
                              <h3>
                                $592.00
                              </h3>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="row mt-5">
                  <div class="col-12 col-md-6">

                    <h6 class="text-uppercase card-description font-weight-bold mb-3">
                      Invoiced from
                    </h6>

                    <p class="mb-4">
                      <strong>Chris Michael</strong> <br>
                      133 Nice Street <br>
                      Appleville, NY 34212
                    </p>

                  </div>
                  <div class="col-12 col-md-6 text-md-right">

                    <h6 class="text-uppercase card-description font-weight-bold mb-3">
                      Invoiced to
                    </h6>

                    <p class="mb-4">
                      <strong>Jenny Lame</strong> <br>
                      12 Nord Street <br>
                      Dortmund, QR 63568
                    </p>
                  </div>
                </div>

              </div>
              <hr class="hr">
              <div class="card-footer text-center">
                <button type="button" class="btn btn-primary btn-round w-50 mt-3" name="button">Pay Now</button>
                <h6 class="mt-4 text-left">
                  <div class="h6 text-capitalize font-weight-bold card-description mb-3">
                    Notes
                  </div>
                  The notes added will not be reflected in the previously generated invoices. It will only be added to the upcoming invoices.
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Pie de pagina -->
      <?php
      require_once(RUTA_SISTEMA ."inc/footer.php");
      ?>



    </div>


  </div>

  <?php
  require_once(RUTA_SISTEMA ."inc/adm/configuracion.php");
  ?>

  <!-- Libreias js -->
  <?php
  require_once(RUTA_SISTEMA ."inc/script.php");
  ?>

</body>

</html>
