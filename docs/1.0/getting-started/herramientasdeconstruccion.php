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
			<li class="toc-entry toc-h3"><a href="#change-brand-colors">Cambiar los colores de la marca Compilar SCSS</a></li>
			<li class="toc-entry toc-h3"><a href="#compile-scss">Construir herramientas</a></li>
		</ul>
	</div>

	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">

		<h1 class="bd-title" id="content">Construir herramientas</h1>
		<p class="bd-lead">Aprenda a usar Now UI Dashboard Pro para crear su tema de administrador, compilar SCSS y cambiar los colores de la marca.</p>
		<h3 id="change-brand-colors">Cambiar los colores de la marca</h3>

		<ul>
			<li>Encontrarás todos los colores de la marca en el interior <code class="highlighter-rouge">assets/scss/now-ui-dashboard/_variables.scss</code>.</li>
		</ul>

		<h3 id="compile-scss">Compilar SCSSSCSS</h3>

		<ol>
			<li>Descarga el zip del proyecto..</li>
			<li>Asegúrese de tener node.js  (https://nodejs.org/en/)  instalado.</li>
			<li>Escriba <code class="highlighter-rouge">npm install</code> terminal / consola en la carpeta de origen donde<code class="highlighter-rouge">package.json</code> se encuentra.</li>
			<li>Ejecutar en el terminal  <code class="highlighter-rouge">gulp open-app</code> para abrir la página de panel de control (predeterminado) del producto. Se puede establecer en gulpfile.js de su archivo descargado cualquier página que desea abrir en el navegador, en la línea 30:  <code class="highlighter-rouge">gulp.src('examples/dashboard.html')</code>.</li>
			<li>Ejecute en terminal <code class="highlighter-rouge">gulp compile-scss</code> para una sola compilación o <code class="highlighter-rouge">gulp watch</code> para una compilación continua de los cambios que realice en los	 <code class="highlighter-rouge">*.scss</code> archivos. Este comando se debe ejecutar en la misma carpeta en la que <code class="highlighter-rouge">gulpfile.js</code> and <code class="highlighter-rouge">package.json</code> se encuentra.</li>
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
