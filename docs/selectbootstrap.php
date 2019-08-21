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
<h1 class="bd-title" id="content">Seleccione Bootstrap v1.13.2</h1>
          <p class="bd-lead"></p>
          <p>Hemos diseñado el selector de selección para que se vea similar al menú desplegable y las otras entradas. Para ver la documentación original, consulte el <strong><a href="http://silviomoreto.github.io/bootstrap-select/" target="_blank">repositorio de Silvio Moreto en GitHub .</a></strong>.</p>

<div class="bd-example" data-example-id="">
<select class="selectpicker " data-style="select-with-transition" title="Single Select" data-size="7">
    <option disabled="">Choose city</option>
    <option value="2">Foobar</option>
    <option value="3">Is great</option>
</select>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"selectpicker "</span> <span class="na">data-style=</span><span class="s">"select-with-transition"</span> <span class="na">title=</span><span class="s">"Single Select"</span> <span class="na">data-size=</span><span class="s">"7"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;option</span> <span class="na">disabled</span><span class="nt">&gt;</span>Choose city<span class="nt">&lt;/option&gt;</span>
    <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"2"</span><span class="nt">&gt;</span>Foobar<span class="nt">&lt;/option&gt;</span>
    <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"3"</span><span class="nt">&gt;</span>Is great<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span></code></pre></div>


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
