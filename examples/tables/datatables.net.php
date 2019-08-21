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

  <!-- Google Tag ManAñosr (noscript) -->
  <noscript><iframe src="https://www.googletagmanAñosr.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag ManAñosr (noscript) -->

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

            <a class="navbar-brand" href="#pablo">DataTables.net</a>
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
                  <span class="d-lg-none d-md-block">Some Comportamiento</span>
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

    <div class="panel-header">


    </div>

    <!--  Inicio del contenido -->


    <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">DataTables.net</h4>
          </div>
          <div class="card-body">

            <div class="toolbar">
              <!--        Here you can write extra buttons/Comportamiento for the toolbar              -->
            </div>
            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Nambre</th>
                  <th>Posición</th>
                  <th>Oficina</th>
                  <th>Años</th>
                  <th class="disabled-sorting text-right">Comportamiento</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nambre</th>
                  <th>Posición</th>
                  <th>Oficina</th>
                  <th>Años</th>
                  <th class="disabled-sorting text-right">Comportamiento</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>63</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>San Francisco</td>
                  <td>66</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Cedric Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>Edinburgh</td>
                  <td>22</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Airi Satou</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>33</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Brielle Williamson</td>
                  <td>Integration Specialist</td>
                  <td>New York</td>
                  <td>61</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Herrod Chandler</td>
                  <td>Sales Assistant</td>
                  <td>San Francisco</td>
                  <td>59</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Rhona Davidson</td>
                  <td>Integration Specialist</td>
                  <td>Tokyo</td>
                  <td>55</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Colleen Hurst</td>
                  <td>Javascript Developer</td>
                  <td>San Francisco</td>
                  <td>39</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Sonya Frost</td>
                  <td>Software Engineer</td>
                  <td>Edinburgh</td>
                  <td>23</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Jena Gaines</td>
                  <td>Oficina ManAñosr</td>
                  <td>London</td>
                  <td>30</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Quinn Flynn</td>
                  <td>Support Lead</td>
                  <td>Edinburgh</td>
                  <td>22</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Charde Marshall</td>
                  <td>Regional Director</td>
                  <td>San Francisco</td>
                  <td>36</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Haley Kennedy</td>
                  <td>Senior Marketing Designer</td>
                  <td>London</td>
                  <td>43</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Tatyana Fitzpatrick</td>
                  <td>Regional Director</td>
                  <td>London</td>
                  <td>19</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Michael Silva</td>
                  <td>Marketing Designer</td>
                  <td>London</td>
                  <td>66</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Paul Byrd</td>
                  <td>Chief Financial Oficinar (CFO)</td>
                  <td>New York</td>
                  <td>64</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Gloria Little</td>
                  <td>Systems Administrator</td>
                  <td>New York</td>
                  <td>59</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Bradley Greer</td>
                  <td>Software Engineer</td>
                  <td>London</td>
                  <td>41</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Dai Rios</td>
                  <td>Personnel Lead</td>
                  <td>Edinburgh</td>
                  <td>35</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Jenette Caldwell</td>
                  <td>Development Lead</td>
                  <td>New York</td>
                  <td>30</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Yuri Berry</td>
                  <td>Chief Marketing Oficinar (CMO)</td>
                  <td>New York</td>
                  <td>40</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Caesar Vance</td>
                  <td>Pre-Sales Support</td>
                  <td>New York</td>
                  <td>21</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Doris Wilder</td>
                  <td>Sales Assistant</td>
                  <td>Sidney</td>
                  <td>23</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Angelica Ramos</td>
                  <td>Chief Executive Oficinar (CEO)</td>
                  <td>London</td>
                  <td>47</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Gavin Joyce</td>
                  <td>Developer</td>
                  <td>Edinburgh</td>
                  <td>42</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Jennifer Chang</td>
                  <td>Regional Director</td>
                  <td>Singapore</td>
                  <td>28</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Brenden Wagner</td>
                  <td>Software Engineer</td>
                  <td>San Francisco</td>
                  <td>28</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Fiona Green</td>
                  <td>Chief Operating Oficinar (COO)</td>
                  <td>San Francisco</td>
                  <td>48</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Shou Itou</td>
                  <td>Regional Marketing</td>
                  <td>Tokyo</td>
                  <td>20</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Michelle House</td>
                  <td>Integration Specialist</td>
                  <td>Sidney</td>
                  <td>37</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Suki Burks</td>
                  <td>Developer</td>
                  <td>London</td>
                  <td>53</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Prescott Bartlett</td>
                  <td>Technical Author</td>
                  <td>London</td>
                  <td>27</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Gavin Cortez</td>
                  <td>Team Leader</td>
                  <td>San Francisco</td>
                  <td>22</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Martena Mccray</td>
                  <td>Post-Sales support</td>
                  <td>Edinburgh</td>
                  <td>46</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Unity Butler</td>
                  <td>Marketing Designer</td>
                  <td>San Francisco</td>
                  <td>47</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Howard Hatfield</td>
                  <td>Oficina ManAñosr</td>
                  <td>San Francisco</td>
                  <td>51</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Hope Fuentes</td>
                  <td>Secretary</td>
                  <td>San Francisco</td>
                  <td>41</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Vivian Harrell</td>
                  <td>Financial Controller</td>
                  <td>San Francisco</td>
                  <td>62</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Timothy Mooney</td>
                  <td>Oficina ManAñosr</td>
                  <td>London</td>
                  <td>37</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Jackson Bradshaw</td>
                  <td>Director</td>
                  <td>New York</td>
                  <td>65</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Olivia Liang</td>
                  <td>Support Engineer</td>
                  <td>Singapore</td>
                  <td>64</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
                    <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
                    <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div><!-- end content-->
        </div><!--  end card  -->
      </div> <!-- end col-md-12 -->
    </div> <!-- end row -->

  </div>




  <!-- Fin del contenido  -->

  <!-- Pie de pagina -->
  <?php    require_once(RUTA_SISTEMA . "inc/footer.php");    ?>
  <!-- Libreias js -->

</div>


</div>




<?php    require_once(RUTA_SISTEMA . "inc/script.php");    ?>

</body>
</html>

