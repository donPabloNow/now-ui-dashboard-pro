<?php
session_start();
require_once("../inc/config.sistema.php");

?>
<!DOCTYPE html>
<html lang="es">
<?php
require_once(RUTA_SISTEMA ."inc/head.php");
?>

<body class="sidebar-mini">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="wrapper ">

      <!-- Menu  del sistema-->
      <?php
      require_once(RUTA_SISTEMA ."inc/menu_nuevo.php");
      ?>

      <!-- Boton de configuracion -->
      <?php
      require_once(RUTA_SISTEMA ."inc/adm/configuracion.php");
      ?>

      <div class="main-panel" id="main-panel">
        <!-- inicio barra Navbar -->
        <?php
        require_once(RUTA_SISTEMA ."barranav2.php");
        ?>
        <!-- Fin de la barra de Navegación -->


        <!-- Inicio Barra de indicadores -->
        <div class="panel-header panel-header-lg">
          <canvas id="bigDashboardChart"></canvas>
        </div>
        <!-- Fin Barra de indicadores -->

        <div class="content">
          <!--Inicio de Cuerpo de mensaje -->

          <div class="row">
            <div class="col-md-12">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="statistics">
                        <div class="info">
                          <div class="icon icon-primary">
                            <i class="now-ui-icons ui-2_chat-round"></i>
                          </div>
                          <h3 class="info-title">859</h3>
                          <h6 class="stats-title">Menages</h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="statistics">
                        <div class="info">
                          <div class="icon icon-success">
                            <i class="now-ui-icons business_money-coins"></i>
                          </div>
                          <h3 class="info-title"><small>$</small>3,521</h3>
                          <h6 class="stats-title">Ingresos de hoy</h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="statistics">
                        <div class="info">
                          <div class="icon icon-info">
                            <i class="now-ui-icons users_single-02"></i>
                          </div>
                          <h3 class="info-title">562</h3>
                          <h6 class="stats-title">Clientes</h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="statistics">
                        <div class="info">
                          <div class="icon icon-danger">
                            <i class="now-ui-icons objects_support-17"></i>
                          </div>
                          <h3 class="info-title">353</h3>
                          <h6 class="stats-title">Solicitudes de soporte</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <!--Fin de Cuerpo de mensaje -->

          <!--Inicio de Actividad de usuarios -->

          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="card card-chart">
                <div class="card-header">
                  <h5 class="card-category">Usuarios activos</h5>
                  <h2 class="card-title">34,252</h2>
                  <div class="dropdown">
                    <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                      <i class="now-ui-icons loader_gear"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Acción</a>
                      <a class="dropdown-item" href="#">Otra accion</a>
                      <a class="dropdown-item" href="#">Algo mas aqui</a>
                      <a class="dropdown-item text-danger" href="#">Eliminar datos</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="activeUsers"></canvas>
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>
                            <div class="flag">
                              <img src="../../assets/img/AU.png">
                            </div></td>
                            <td>USA</td>
                            <td class="text-right">
                              2.920
                            </td>
                            <td class="text-right">
                              53.23%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="../../assets/img/DE.png">
                              </div></td>
                              <td>Germany</td>
                              <td class="text-right">
                                1.300
                              </td>
                              <td class="text-right">
                                20.43%
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="flag">
                                  <img src="../../assets/img/AU.png">
                                </div></td>
                                <td>Australia</td>
                                <td class="text-right">
                                  760
                                </td>
                                <td class="text-right">
                                  10.35%
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img src="../../assets/img/GB.png">
                                  </div></td>
                                  <td>United Kingdom</td>
                                  <td class="text-right">
                                    690
                                  </td>
                                  <td class="text-right">
                                    7.87%
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="flag">
                                      <img src="../../assets/img/RO.png">
                                    </div></td>
                                    <td>Romania</td>
                                    <td class="text-right">
                                      600
                                    </td>
                                    <td class="text-right">
                                      5.94%
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="flag">
                                        <img src="../../assets/img/BR.png">
                                      </div></td>
                                      <td>Brasil</td>
                                      <td class="text-right">
                                        550
                                      </td>
                                      <td class="text-right">
                                        4.34%
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <i class="now-ui-icons arrows-1_refresh-69"></i>Solo actualizado
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                          <div class="card card-chart">
                            <div class="card-header">
                              <h5 class="card-category">Campaña de correo electrónico de verano</h5>
                              <h2 class="card-title">55,300</h2>
                              <div class="dropdown">
                                <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                                  <i class="now-ui-icons loader_gear"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                 <a class="dropdown-item" href="#">Acción</a>
                                 <a class="dropdown-item" href="#">Otra accion</a>
                                 <a class="dropdown-item" href="#">Algo mas aqui</a>
                                 <a class="dropdown-item text-danger" href="#">Eliminar datos</a>
                               </div>
                             </div>
                           </div>
                           <div class="card-body">
                            <div class="chart-area">
                              <canvas id="emailsCampaignChart"></canvas>
                            </div>

                            <div class="card-progress">
                              <div class="progress-container">
                                <span class="progress-badge">Cargo de entrega</span>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                    <span class="progress-value">90%</span>
                                  </div>
                                </div>
                              </div>

                              <div class="progress-container progress-success">
                                <span class="progress-badge">Rango abierto</span>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    <span class="progress-value">60%</span>
                                  </div>
                                </div>
                              </div>

                              <div class="progress-container progress-info">
                                <span class="progress-badge">Tasa de clics</span>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
                                    <span class="progress-value">12%</span>
                                  </div>
                                </div>
                              </div>

                              <div class="progress-container progress-warning">
                                <span class="progress-badge">Rebote duro</span>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                                    <span class="progress-value">5%</span>
                                  </div>
                                </div>
                              </div>

                              <div class="progress-container progress-danger">
                                <span class="progress-badge">Informe de spam</span>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0.11%;">
                                    <span class="progress-value">0.11%</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer">
                            <div class="stats">
                              <i class="now-ui-icons arrows-1_refresh-69"></i>Solo actualizado
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6">
                        <div class="card card-chart">
                          <div class="card-header">
                            <h5 class="card-category">Active Countries</h5>
                            <h2 class="card-title">105</h2>
                          </div>
                          <div class="card-body">
                            <div class="chart-area">
                              <canvas id="activeCountries"></canvas>
                            </div>
                            <div id="worldMap" class="map"></div>
                          </div>
                          <div class="card-footer">
                            <div class="stats">
                              <i class="now-ui-icons ui-2_time-alarm"></i> Los últimos 7 días
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--Fin de Actividad de usuarios -->
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <h4 class="card-title"> Productos más vendidos</h4>

                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-shopping">
                                <thead class="">

                                  <th  class="text-center" >
                                  </th>

                                  <th>
                                    Producto
                                  </th>

                                  <th>
                                    Color
                                  </th>

                                  <th>                       Tamaño
                                  </th>

                                  <th  class="text-right" >
                                    Precio
                                  </th>

                                  <th  class="text-right" >
                                    Cantidad
                                  </th>

                                  <th  class="text-right" >
                                    Cantidad
                                  </th>

                                </thead>
                                <tbody>

                                  <tr>
                                    <td>
                                      <div class="img-container">
                                        <img src="../../assets/img/saint-laurent.jpg" alt="...">
                                      </div>
                                    </td>
                                    <td class="td-name">
                                      <a href="#jacket">Chaqueta de motorista de ante</a>
                                      <br /><small>por Saint Laurent</small>
                                    </td>
                                    <td>
                                      Negro
                                    </td>
                                    <td>
                                      M
                                    </td>
                                    <td class="td-number">
                                      <small>€</small>3,390
                                    </td>
                                    <td class="td-number">
                                      1
                                    </td>
                                    <td class="td-number">
                                      <small>€</small>549
                                    </td>

                                  </tr>

                                  <tr>
                                    <td>
                                      <div class="img-container">
                                        <img src="../../assets/img/balmain.jpg" alt="...">
                                      </div>
                                    </td>
                                    <td class="td-name">
                                      <a href="#pants">Camiseta de Jersey</a>
                                      <br /><small>por Balmain</small>
                                    </td>
                                    <td>
                                      Negro
                                    </td>
                                    <td>
                                      M
                                    </td>
                                    <td class="td-number">
                                      <small>€</small>499
                                    </td>
                                    <td class="td-number">
                                      2
                                    </td>
                                    <td class="td-number">
                                      <small>€</small>998
                                    </td>

                                  </tr>

                                  <tr>
                                    <td>
                                      <div class="img-container">
                                        <img src="../../assets/img/prada.jpg" alt="...">
                                      </div>
                                    </td>
                                    <td class="td-name">
                                      <a href="#nothing">Ajustado Nadar corto</a>
                                      <br /><small>por Prada</small>
                                    </td>
                                    <td>
                                      Rojo
                                    </td>
                                    <td>
                                      M
                                    </td>
                                    <td class="td-number">
                                      <small>€</small>200
                                    </td>
                                    <td class="td-number">
                                      1
                                    </td>
                                    <td class="td-number">
                                      <small>€</small>799
                                    </td>

                                  </tr>

                                  <tr>
                                    <td colspan="5">
                                    </td>
                                    <td class="td-total">
                                      Total
                                    </td>
                                    <td class="td-price">
                                      <small>€</small>2,346
                                    </td>
                                  </tr>

                                </tbody>
                              </table>
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


              <!-- Libreias js -->
              <?php
              
              require_once(RUTA_SISTEMA . "inc/script.php");
              ?>
            </body>
            </html>
