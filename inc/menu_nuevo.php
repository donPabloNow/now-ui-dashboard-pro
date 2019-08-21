 <div class="sidebar" data-color="blue">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->

      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <!-- CT -->
         </a>

        <a href="#" class="simple-text logo-normal">
          <!-- Creative Tim -->
          Panel Admin
        </a>

        <div class="navbar-minimize">
          <button id="minimizeSidebar" class="btn btn-outline-white btn-icon btn-round">
            <i class="now-ui-icons text_align-center visible-on-sidebar-regular"></i>
            <i class="now-ui-icons design_bullet-list-67 visible-on-sidebar-mini"></i>
          </button>
        </div>

      </div>

      <div class="sidebar-wrapper" id="sidebar-wrapper">

        <div class="user">
          <div class="photo">
            <!-- <img src="inc/adm/assets/img/james.jpg" /> -->
            <img src="../assets/img/james.jpg" />
          </div>
          <div class="info">
            <a data-toggle="collapse" href="#collapseExample" class="collapsed">
              <span>
                <!-- James Amos -->
               James
                <b class="caret"></b>
              </span>
            </a>
            <div class="clearfix"></div>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                <li>
                  <a href="#">
                    <span class="sidebar-mini-icon">MP</span>
                    <span class="sidebar-normal">Mi Perfil</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="sidebar-mini-icon">EP</span>
                    <span class="sidebar-normal">Editar Profiles</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="sidebar-mini-icon">A</span>
                    <span class="sidebar-normal">Ajustes</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <ul class="nav">
          <li  class="active">
            <a href="dashboard.php">

              <i class="now-ui-icons design_app"></i>

              <p>Tablero</p>
            </a>

          </li>

          <li>

            <a data-toggle="collapse" href="#pagesExamples" >

              <i class="now-ui-icons design_image"></i>

              <p>
                Páginas <b class="caret"></b>
              </p>
            </a>

            <div class="collapse " id="pagesExamples">
              <ul class="nav">

                <li >
                  <a href="paginas/pricing.php">
                    <span class="sidebar-mini-icon">P</span>
                    <span class="sidebar-normal"> Pricios </span>
                  </a>
                </li>

                <li >
                  <a href="#">
                  <?php // paginas/rtl.php  ?>
                    <span class="sidebar-mini-icon">RS</span>
                    <span class="sidebar-normal"> RTL Support </span>
                  </a>
                </li>

                <li >
                  <a href="paginas/factura.php">
                    <span class="sidebar-mini-icon">I</span>
                    <span class="sidebar-normal"> Factura </span>
                  </a>
                </li>

                <li >
                  <a href="paginas/timeline.php">
                    <span class="sidebar-mini-icon">T</span>
                    <span class="sidebar-normal"> Linea de Tiempo </span>
                  </a>
                </li>

                <li >
                  <a href="paginas/inisiarsesion.php">
                    <span class="sidebar-mini-icon">L</span>
                    <span class="sidebar-normal"> Iniciar sesión </span>
                  </a>
                </li>

                <li >
                  <a href="paginas/registro.php">
                    <span class="sidebar-mini-icon">R</span>
                    <span class="sidebar-normal"> Registro </span>
                  </a>
                </li>

                <li >
                  <a href="paginas/Bloquear.php">
                    <span class="sidebar-mini-icon">LS</span>
                    <span class="sidebar-normal"> Bloquear </span>
                  </a>
                </li>

                <li >
                  <a href="aginas/usuario.php">
                    <span class="sidebar-mini-icon">UP</span>
                    <span class="sidebar-normal"> Perfil de  Usuario</span>
                  </a>
                </li>

              </ul>
            </div>


          </li>

          <li >


            <a data-toggle="collapse" href="#componentsExamples" >

              <i class="now-ui-icons education_atom"></i>

              <p>
                Componentes <b class="caret"></b>
              </p>
            </a>

            <div class="collapse " id="componentsExamples">
              <ul class="nav">

                <li >
                  <a href="componentes/botones1.php">
                    <span class="sidebar-mini-icon">B</span>
                    <span class="sidebar-normal"> Botones </span>
                  </a>
                </li>

                <li >
                  <a href="../componentes/grid.php">
                    <span class="sidebar-mini-icon">G</span>
                    <span class="sidebar-normal"> Grid Sistema </span>
                  </a>
                </li>

                <li >
                  <a href="../componentes/paneles.php">
                    <span class="sidebar-mini-icon">P</span>
                    <span class="sidebar-normal"> Paneles </span>
                  </a>
                </li>

                <li >
                  <a href="../componentes/sweet-alert.php">
                    <span class="sidebar-mini-icon">SA</span>
                    <span class="sidebar-normal"> Sweet Alert </span>
                  </a>
                </li>

                <li >
                  <a href="../componentes/notifications.php">
                    <span class="sidebar-mini-icon">N</span>
                    <span class="sidebar-normal"> Notificationes </span>
                  </a>
                </li>

                <li >
                  <a href="../componentes/icons.php">
                    <span class="sidebar-mini-icon">I</span>
                    <span class="sidebar-normal"> Iconos </span>
                  </a>
                </li>

                <li >
                  <a href="../componentes/typography.php">
                    <span class="sidebar-mini-icon">T</span>
                    <span class="sidebar-normal"> Tografia </span>
                  </a>
                </li>

              </ul>
            </div>


          </li>

          <li >


            <a data-toggle="collapse" href="#formsExamples" >

              <i class="now-ui-icons files_single-copy-04"></i>

              <p>
                Formas <b class="caret"></b>
              </p>
            </a>

            <div class="collapse " id="formsExamples">
              <ul class="nav">

                <li >
                  <a href="../formas/regular.php">
                    <span class="sidebar-mini-icon">RF</span>
                    <span class="sidebar-normal"> Formularios Regulares </span>
                  </a>
                </li>

                <li >
                  <a href="../formas/extended.php">
                    <span class="sidebar-mini-icon">EF</span>
                    <span class="sidebar-normal"> Formularios extendidos </span>
                  </a>
                </li>

                <li >
                  <a href="../formas/validation.php">
                    <span class="sidebar-mini-icon">V</span>
                    <span class="sidebar-normal"> Validación Formas </span>
                  </a>
                </li>

                <li >
                  <a href="../formas/wizard.php">
                    <span class="sidebar-mini-icon">W</span>
                    <span class="sidebar-normal"> Mago </span>
                  </a>
                </li>

              </ul>
            </div>


          </li>

          <li >


            <a data-toggle="collapse" href="#tablesExamples" >

              <i class="now-ui-icons design_bullet-list-67"></i>

              <p>
                Tables <b class="caret"></b>
              </p>
            </a>

            <div class="collapse " id="tablesExamples">
              <ul class="nav">

                <li >
                  <a href="../tables/regular_tables.php">
                    <span class="sidebar-mini-icon">RT</span>
                    <span class="sidebar-normal">  Tablas Regulares  </span>
                  </a>
                </li>

                <li >
                  <a href="../tables/extended_tables.php">
                    <span class="sidebar-mini-icon">ET</span>
                    <span class="sidebar-normal"> Tablas Extendidas </span>
                  </a>
                </li>

                <li >
                  <a href="../tables/datatables.net.php">
                    <span class="sidebar-mini-icon">DT</span>
                    <span class="sidebar-normal"> DataTables.net </span>
                  </a>
                </li>

              </ul>
            </div>


          </li>

          <li >


            <a data-toggle="collapse" href="#mapsExamples" >

              <i class="now-ui-icons location_pin"></i>

              <p>
                Maps <b class="caret"></b>
              </p>
            </a>

            <div class="collapse " id="mapsExamples">
              <ul class="nav">

                <li >
                  <a href="../maps/google.php">
                    <span class="sidebar-mini-icon">GM</span>
                    <span class="sidebar-normal"> Google Mapas </span>
                  </a>
                </li>

                <li >
                  <a href="../maps/fullscreen.php">
                    <span class="sidebar-mini-icon">FM</span>
                    <span class="sidebar-normal"> Full Screen Map </span>
                  </a>
                </li>

                <li >
                  <a href="../maps/vector.php">
                    <span class="sidebar-mini-icon">VM</span>
                    <span class="sidebar-normal"> Vector Map </span>
                  </a>
                </li>

              </ul>
            </div>


          </li>

          <li >


            <a href="widgets.php">

              <i class="now-ui-icons objects_diamond"></i>

              <p>Widgets</p>
            </a>

          </li>

          <li >


            <a href="charts.php">

              <i class="now-ui-icons business_chart-pie-36"></i>

              <p>Charts</p>
            </a>

          </li>

          <li >


            <a href="calendar.php">

              <i class="now-ui-icons media-1_album"></i>

              <p>Calendar</p>
            </a>

          </li>



        </ul>
      </div>
    </div>
