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
		<h1 class="bd-title" id="content">Cómo configurar las claves API de Google</h1>
		<p class="bd-lead"></p>
		<ol>
			<li>Vaya a <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">https://developers.google.com/maps/documentation/javascript/get-api-key</a></li>
			<li>Desplácese hasta el título "Obtener una clave API" y presione el botón "Obtener una clave"</li>
			<li>Elija un nombre para su proyecto y luego presione Crear y Habilitar API</li>
			<li>Obtenga la clave y colóquela en su proyecto donde se encuentra este script:<code class="highlighter-rouge">&lt;script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"&gt;&lt;script&gt;</code></li>
		</ol>



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
