<?php
// session_start();
require_once("inc/config.sistema.php");
?>
<!DOCTYPE html>
<html lang="es">

<?php
require_once(RUTA_SISTEMA."inc/head.php");

?>

<body class="bd-docs" data-spy="scroll" data-target=".bd-sidenav-active">

	<?php
	require_once(RUTA_SISTEMA."barra_menu.php");

	?>


	<?php
	require_once(RUTA_SISTEMA."menu_doc.php");

	?>
<!-- Esto debe ir ajuro en todo los codigos -->
	<div class="d-none d-xl-block col-xl-2 bd-toc">
		<ul class="section-nav">
			<li class="toc-entry toc-h2"><a href="#quick-start">Inicio rápido</a>
				<ul>
					<li class="toc-entry toc-h3"><a href="#css">CSS</a></li>
					<li class="toc-entry toc-h3"><a href="#js">JS</a></li>
					<li class="toc-entry toc-h3"><a href="#fonts-and-icons">Fuentes e iconos</a></li>
				</ul>
			</li>
			<li class="toc-entry toc-h2"><a href="#starter-template">Plantilla de inicio</a></li>
		</ul>
	</div>

	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">



	</main>


	<!-- Final del contenido de esta pagina con las 2 etiquetas div -->
</div>
</div>

<!-- Libreias js -->
<?php
require_once(RUTA_SISTEMA."inc/script.php");
?>

</body>

</html>
