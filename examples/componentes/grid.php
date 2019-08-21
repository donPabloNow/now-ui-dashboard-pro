<?php
session_start();
require_once("../../inc/config.sistema.php");
?>
<!DOCTYPE html>
<html lang="es">
<?php
require_once(RUTA_SISTEMA . "inc/head.php");
?>

<body class="sidebar-mini">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Menu -->
    <?php
    require_once(RUTA_SISTEMA . "inc/menu_nuevo.php");
    ?>


    <div class="main-panel" id="main-panel">
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

            <a class="navbar-brand" href="#pablo">Grid System</a>
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
      <div class="card">
        <div class="card-body">
          <h4 class="card-title pl-3">XS Grid <small>Always Horizontal</small></h4>
          <div class="row">
            <div class="col-4">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-4</code>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-4</code>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-4</code>
                </div>
              </div>
            </div>
          </div>
          <h4 class="card-title pl-3">SM Grid <small>Collapsed at 576px</small></h4>
          <div class="row">
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-sm-4</code>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-sm-4</code>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-sm-4</code>
                </div>
              </div>
            </div>
          </div>
          <h4 class="card-title pl-3">MD Grid <small>Collapsed at 768px</small></h4>
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-md-4</code>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-md-4</code>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-md-4</code>
                </div>
              </div>
            </div>
          </div>
          <h4 class="card-title pl-3">LG Grid <small>Collapsed at 992px</small></h4>
          <div class="row">
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-lg-4</code>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-lg-4</code>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-lg-4</code>
                </div>
              </div>
            </div>
          </div>
          <h4 class="card-title pl-3">XL Grid <small>Collapsed at 1200px</small></h4>
          <div class="row">
            <div class="col-xl-4">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-xl-4</code>
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-xl-4</code>
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-xl-4</code>
                </div>
              </div>
            </div>
          </div>
          <h4 class="card-title pl-3">Mixed Grid <small>Showing different sizes on different screens</small></h4>
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-sm-6 col-lg-3</code>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-sm-6 col-lg-3</code>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-sm-6 col-lg-3</code>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-sm-6 col-lg-3</code>
                </div>
              </div>
            </div>
          </div>
          <h4 class="card-title pl-3">Offset Grid <small>Adding some space when needed</small></h4>
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-md-3</code>
                </div>
              </div>
            </div>
            <div class="col-md-3 ml-auto">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-md-3 ml-auto</code>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 ml-auto mr-auto">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-md-4 ml-auto mr-auto</code>
                </div>
              </div>
            </div>
            <div class="col-md-4 ml-auto mr-auto">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-md-4 ml-auto mr-auto</code>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
              <div class="card">
                <div class="card-body text-center">
                  <code>col-md-6 ml-auto mr-auto</code>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h3 class="title mt-4 text-center">Paragraphs</h3>
      <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
              <h3>Some Title Here</h3>
              <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought.</p>
            </div>

            <div class="col-sm-6">
              <h3>Another Title Here</h3>
              <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought.</p>
            </div>
          </div>

          <br>
          <div class="row">
            <div class="col-sm-4">
              <h3>Some Title Here</h3>
              <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment.</p>
            </div>

            <div class="col-sm-4">
              <h3>Another Title Here</h3>
              <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment.</p>
            </div>

            <div class="col-sm-4">
              <h3>Another Title Here</h3>
              <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment.</p>
            </div>
          </div>

          <br>
          <div class="row">
            <div class="col-sm-4">
              <h3>Some Title Here</h3>
              <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment.</p>
            </div>

            <div class="col-sm-8">
              <h3>Another Title Here</h3>
              <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment.</p>
            </div>
          </div>
        </div>
      </div> <!--  end card -->

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
