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

              <a class="navbar-brand" href="#pablo">Notificaciones</a>
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


      <div class="panel-header">

        <div class="header text-center">
          <h2 class="title">Notificaciones</h2>
          <p class="category">Hecho A Mano Por Nuestro Amigo <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Por Favor Revisa La <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">Documentación Completa.</a></p>
        </div>

      </div>


      <div class="content">

        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Estilo de notificaciones</h4>
              </div>
              <div class="card-body">
                <div class="alert alert-info">
                  <span>Esta es una notificación simple</span>
                </div>
                <div class="alert alert-info">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                  <span>Esta es una notificación con el botón de cerrar.</span>
                </div>
                <div class="alert alert-info alert-with-icon" data-notify="container">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                  <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                  <span data-notify="message">Esta es una notificación con el botón y el icono de cerrar.</span>
                </div>
                <div class="alert alert-info alert-with-icon" data-notify="container">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                  <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                  <span data-notify="message">Esta es una notificación con botón e icono de cierre y tiene muchas líneas. Puede ver que el icono y el botón de cerrar siempre están alineados verticalmente. Esta es una hermosa notificación. Así que no tienes que preocuparte por el estilo.</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Estados de notificación</h4>
              </div>
              <div class="card-body">
                <div class="alert alert-primary">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                  <span><b> Primario: </b> esta es una notificación regular realizada con ".alert-primary"</span>
                </div>

                <div class="alert alert-info">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                  <span><b> Información: </b> esta es una notificación regular realizada con  ".alert-info"</span>
                </div>
                <div class="alert alert-success">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                  <span><b> Exito: </b> Esta es una notificación regular realizada con ".alert-success"</span>
                </div>
                <div class="alert alert-warning">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                  <span><b> Advertencia: </b> esta es una notificación regular realizada con ".alert-warning"</span>
                </div>
                <div class="alert alert-danger">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                  <span><b> Peligro: </b> esta es una notificación regular realizada con ".alert-danger"</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="places-buttons">
                  <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                      <h4 class="card-title">
                        Notificaciones lugares
                        <p class="category">Haga Clic Para Ver Las Notificaciones.</p>
                      </h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                      <div class="row">
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','left')">Arriba a la izquierda</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','center')">Centero superior</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','right')">Parte superior derecha</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                      <div class="row">
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','left')">BAbajo a la izquierda</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','center')">Parte inferior Central</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','right')">Abajo a la derecha</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 text-center">
                    <div class="card-header">
                      <h4 class="card-title">Modal</h4>
                    </div>

                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                      Classic modal
                    </button>
                    <button class="btn btn-info" data-toggle="modal" data-target="#noticeModal">
                      Notice modal
                    </button>
                    <button class="btn" data-toggle="modal" data-target="#myModal10">
                      Small alert modal
                    </button>

                    <!-- Classic Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header justify-content-center">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                              <i class="now-ui-icons ui-1_simple-remove"></i>
                            </button>
                            <h4 class="title title-up">Modal title</h4>
                          </div>
                          <div class="modal-body">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default">Nice Button</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--  End Modal -->

                    <!-- notice modal -->
                    <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-notice">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                              <i class="now-ui-icons ui-1_simple-remove"></i>
                            </button>
                            <h5 class="modal-title" id="myModalLabel">How Do You Become an Affiliate?</h5>
                          </div>
                          <div class="modal-body">
                            <div class="instruction">
                              <div class="row">
                                <div class="col-md-8">
                                 <strong>1. Register</strong>
                                 <p class="description">The first step is to create an account at <a href="http://www.creative-tim.com/">Creative Tim</a>. You can choose a social network or go for the classic version, whatever works best for you.</p>
                               </div>
                               <div class="col-md-4">
                                <div class="picture">
                                  <img src="inc/adm/assets/img/bg1.jpg" alt="Thumbnail Image"  class="rounded img-raised">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="instruction">
                            <div class="row">
                              <div class="col-md-8">
                                <strong>2. Apply</strong>
                                <p class="description">The first step is to create an account at <a href="http://www.creative-tim.com/">Creative Tim</a>. You can choose a social network or go for the classic version, whatever works best for you.</p>
                              </div>
                              <div class="col-md-4">
                                <div class="picture">
                                  <img src="inc/adm/assets/img/bg3.jpg" alt="Thumbnail Image"  class="rounded img-raised">
                                </div>
                              </div>
                            </div>
                          </div>
                          <p>If you have more questions, don't hesitate to contact us or send us a tweet @creativetim. We're here to help!</p>
                        </div>
                        <div class="modal-footer justify-content-center">
                          <button type="button" class="btn btn-info btn-round" data-dismiss="modal">Sounds good!</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end notice modal -->

                  <!-- small modal -->
                  <div class="modal fade modal-mini modal-primary" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header justify-content-center">
                          <div class="modal-profile">
                            <i class="now-ui-icons users_circle-08"></i>
                          </div>
                        </div>
                        <div class="modal-body">
                          <p>Always have an access to your profile</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-link btn-neutral">Back</button>
                          <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--    end small modal -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
 <!-- Pie de pagina -->
      <?php    require_once(RUTA_SISTEMA . "inc/footer.php");    ?>

  </div>



  <!-- Libreias js -->

  <?php    require_once(RUTA_SISTEMA . "inc/script.php");    ?>

</body>
</html>
