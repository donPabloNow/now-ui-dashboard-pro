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
			<li class="toc-entry toc-h2"><a href="#now-ui-dashboard-pro-structure">Ahora UI Dashboard PRO Structure</a></li>
			<li class="toc-entry toc-h2"><a href="#restyled-components">Componentes rediseñados</a></li>
			<li class="toc-entry toc-h2"><a href="#new-components">Nevos Componentes</a></li>
		</ul>
	</div>


	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">

		<h1 class="bd-title" id="content">Estructura de archivos</h1>
		<p class="bd-lead">Ahora, UI Dashboard PRO es una plantilla premium de administración de Bootstrap 4.</p>
		<h2 id="now-ui-dashboard-pro-structure">Ahora UI Dashboard PRO Structure</h2>
		<p>Una vez que haya descargado el archivo y lo haya abierto, encontrará la siguiente estructura:</p>

	<figure class="highlight"><pre><code class="language-html" data-lang="html">  │   ├── assets
  │   │   ├── assets-for-demo
  │   │   ├── css
  │   │   │   ├── bootstrap.min.css
  │   │   │   ├── now-ui-dashboard.css
  │   │   │   ├── now-ui-dashboard.min.css.map
  │   │   │   ├── now-ui-dashboard.min.css
  │   │   │   └── now-ui-dashboard.css.map
  │   │   ├── fonts
  │   │   ├── img
  │   │   ├── js
  │   │   │   ├── core
  │   │   │   ├── plugins
  │   │   │   ├── now-ui-dashboard.js
  │   │   │   └── now-ui-dashboard.min.js
  │   │   └── scss
  │   │   │   ├── now-ui-dashboard
  │   │   │   └── now-ui-dashboard.scss
  │   ├── docs
  │   ├── examples
  │   │   ├── components
  │   │   ├── forms
  │   │   ├── maps
  │   │   ├── pages
  │   │   ├── tables
  │   │   ├── calendar.html
  │   │   ├── charts.html
  │   │   ├── dashboard.html
  │   │   └── widgets.html
	│   ├── nucleo-icons.html
  └── CHANGELOG.md</code></pre></figure>

		<h2 id="restyled-components">Componentes rediseñados</h2>
		<p>Aquí está la lista de componentes de Bootstrap 4 que se actualizaron en el  <b> Tablero de la interfaz de usuario ahora</b>:</p>

		<ul>
			<li>Botones</li>
			<li>Tarjetas</li>
			<li>Entradas</li>
			<li>Seleccionar</li>
			<li>Textarea</li>
			<li>Menú</li>
			<li>Desplegable</li>
			<li>Barras de progreso</li>
			<li>Navigation Menu</li>
			<li>Paginación</li>
			<li>Etiquetas</li>
			<li>Notificaciones</li>
			<li>Tipografía</li>
			<li>Imágenes</li>
			<li>Mesas</li>
			<li>Información sobre herramienta</li>
			<li>Popovers</li>
			<li>Modal</li>
		</ul>

		<h2 id="new-components">Nuevos componentes</h2>
		<p>Además de darle un nuevo aspecto a los elementos existentes de Bootstrap, agregamos otros nuevos, de modo que la interfaz sea consistente y homogénea. Pasando por ellos, añadimos:</p>

		<ul>
			<li>Charts</li>
			<li>Checkboxes</li>
			<li>Footers</li>
			<li>Google Maps</li>
			<li>jVector Maps</li>
			<li>jQuery Maps</li>
			<li>Bootstrap Tables</li>
			<li>DataTables.net</li>
			<li>Maps</li>
			<li>Panels</li>
			<li>Radio Buttons</li>
			<li>Sliders</li>
			<li>Sweet Alert</li>
			<li>Sidebar</li>
			<li>Tags</li>
			<li>Wizard</li>
			<li>Toggle Buttons</li>
			<li>Datetimepicker</li>
			<li>Nucleo Icons</li>
			<li>File Uploader</li>
			<li>New Modals</li>
		</ul>


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
