<?php
session_start();
require_once("inc/config.sistema.php");
?>
<!DOCTYPE html>
<html lang="es">
<?php
require_once(RUTA_SISTEMA."inc/head.php");
?>

<body class="login-page sidebar-mini">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- Navbar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
      <div class="container-fluid">
        <div class="navbar-wrapper">

          <a class="navbar-brand" href="#pablo">Página de inicio de sesión</a>
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
            <li class= "nav-item  active ">
              <a href="index.php" class="nav-link"> <i class="now-ui-icons users_circle-08"></i>
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
            <li class= "nav-item ">
              <a href="factura.php" class="nav-link">
                <i class="now-ui-icons files_paper"></i>
                Factura
              </a>
            </li>
          </ul>

        </div>
      </div>
    </nav>  -->
    <!-- End Navbar -->

    <!-- /var/www/html/plantilla/assets/img/bg15.jpg -->

    <div class="wrapper wrapper-full-page ">

      <div class="full-page login-page section-image" filter-color="black" data-image="assets/img/bg15.jpg">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="content">
          <div class="container">
            <div class="col-md-4 ml-auto mr-auto">
              <form class="form" method="" action="">

                <div class="card card-login card-plain">

                  <div class="card-header ">
                    <div class="logo-container">
                    <!-- /var/www/html/plantilla/assets/img/now-logo.png -->
                      <img src="assets/img/now-logo.png" alt="">
                    </div>
                  </div>

                  <div class="card-body ">

                    <div class="input-group no-border form-control-lg">
                      <span class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="now-ui-icons users_circle-08"></i>
                        </div>
                      </span>
                      <input type="text" class="form-control" placeholder="First Name...">
                    </div>

                    <div class="input-group no-border form-control-lg">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="now-ui-icons text_caps-small"></i>
                        </div>
                      </div>
                      <input type="text" placeholder="Last Name..." class="form-control">
                    </div>

                  </div>



                  <div class="card-footer ">
                    <a href="#pablo" class="btn btn-primary btn-round btn-lg btn-block mb-3">Get Started</a>
                    <div class="pull-left">
                      <h6><a href="#pablo" class="link footer-link">Create Account</a></h6>
                    </div>

                    <div class="pull-right">
                     <h6><a href="#pablo" class="link footer-link">Need Help?</a></h6>
                   </div>
                 </div>

               </div>

             </form >
           </div>





         </div>



       </div>
     </div>
     <!-- Pie de pagina -->
     <?php
     require_once(RUTA_SISTEMA."inc/footer.php");
     ?>

   </div>






   <?php
   require_once(RUTA_SISTEMA . "inc/adm/configuracion.php");

    // Libreias js 
   require_once(RUTA_SISTEMA."inc/script.php");
   ?>

   
    </body>

 </html>
