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

	<h1 class="bd-title" id="content">Perfect Scrollbar v1.4.0</h1>
          <p class="bd-lead"></p>
          <p>"Complemento de barra de desplazamiento personalizado minimalista pero perfecto".</p>

<p>!IMPORTANTE perfecto barra de desplazamiento se aplica sobre el <code class="highlighter-rouge">.main-panel</code> y <code class="highlighter-rouge">.sidebar .sidebar-wrapper</code> lo que vamos a tener una buena barra de desplazamiento que es visible sólo cuando realmente se desplaza. Dado que está cambiando los desbordamientos del CSS, también está afectando a los elementos secundarios que tienen un desplazamiento, así que asegúrese de agregar la clase <code class="highlighter-rouge">.ps-child</code> a cualquier elemento que deba tener desplazamiento.</p>

<p>Para obtener más información, consulte la <strong><a href="https://github.com/utatti/perfect-scrollbar" target="_blank">Documentación completa Github </a></strong>.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- javascript for activating the Perfect Scrollbar --&gt;</span>
const ps = new PerfectScrollbar('#sidebar-wrapper');
const ps2 = new PerfectScrollbar('#main-panel');

<span class="c">&lt;!-- javascript for detroying the Perfect Scrollbar --&gt;</span>
ps.('destroy');

<span class="c">&lt;!-- javascript for updating the Perfect Scrollbar when the content of the page is changing --&gt;</span>
ps.update();</code></pre></figure>

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
