<?php
session_start();
require_once("../inc/config.sistema.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php
require_once(RUTA_SISTEMA . "inc/head.php");
// echo "<style>
//  .navbar-absolute-logo{
//    padding-left: 45px;
//  }
//  .navbar-absolute-logo img{
//    position: absolute;
//    left: 15px;
//    margin-top: -6px;
//  }
//  body{
//    background: white;
//  }
// </style>";
?>
<style>
.navbar-absolute-logo{
	padding-left: 45px;
}
.navbar-absolute-logo img{
	position: absolute;
	left: 15px;
	margin-top: -6px;
}
body{
	background: white;
}
</style>

<body class="bd-docs" data-spy="scroll" data-target=".bd-sidenav-active">

	<?php
	require_once("barra_menu.php");

	?>


	<?php
	require_once("menu_doc.php");

	?>
	<!-- Esto debe ir ajuro en todo los codigos -->
	<div class="d-none d-xl-block col-xl-2 bd-toc">
		<ul class="section-nav">
		</ul>
	</div>

	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">

		<h1 class="bd-title" id="content">Iconos nucleares</h1>
		<p class="bd-lead"></p>
		<p>A lo largo de la mayoría de los ejemplos de este kit, hemos utilizado 100 iconos Nucleo para el kit Ahora Ui. Ver todos los <a href="http://demos.creative-tim.com/now-ui-dashboard-pro/nucleo-icons.html">iconos de ejemplo</a>. Si desea más de 2100 iconos, consulte el paquete oficial de <a href="https://nucleoapp.com/?ref=1712">Iconos Nucleo  </a>.</p>

		<div class="bd-example" data-example-id="">
			<i class="now-ui-icons users_single-02"></i>
		</div>
		<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons users_single-02"</span><span class="nt">&gt;&lt;/i&gt;</span></code></pre></div>

	</main>


	<!-- Final del contenido de esta pagina con las 2 etiquetas div -->
</div>
</div>

<!-- Libreias js -->
<?php
require_once(RUTA_SISTEMA . "inc/script.php");
?>

</body>

</html>
