<?php
session_start();
require_once("inc/config.sistema.php");
?>
<!DOCTYPE html>
<html lang="es">
<?php
require_once(RUTA_SISTEMA."inc/head.php");
?>

<body class="sidebar-mini ">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="wrapper ">

      <!-- Menu  del sistema-->
      <?php      require_once(RUTA_SISTEMA."inc/menu_nuevo.php");      ?>

      <!-- Boton de configuracion -->
      <?php      require_once("inc/adm/configuracion.php");      ?>


      <div class="main-panel" id="main-panel">

       <!-- inicio barra Navbar -->



       <!-- Fin Navbar -->


       <!-- Panel -->


       <!--  Inicio del contenido -->






       <!-- Fin del contenido  -->

       <!-- Pie de pagina -->
       <?php    require_once(RUTA_SISTEMA."inc/footer.php");    ?>
       <!-- Libreias js -->

     </div>


   </div>




   <?php    require_once("inc/script.php");    ?>

 </body>
 </html>

