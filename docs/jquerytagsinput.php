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
	<h1 class="bd-title" id="content">jQuery Tagsinput v0.8.0</h1>
          <p class="bd-lead"></p>
          <p>Las etiquetas se parecen mucho a las etiquetas y siguen la misma línea de color. Para usarlos, debe usar la clase predeterminada <code class="highlighter-rouge">.tagsinput</code>, y agregar una variación de  <code class="highlighter-rouge">data-color="{ primary | info | success | warning | danger }"</code>.</p>

<p>Para obtener más información, consulte la <strong><a href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/" target="_blank">Documentación</a></strong>.</p>

<div class="bd-example" data-example-id="">
<input type="text" value="Amsterdam,Washington,Sydney,Beijing" class="tagsinput form-control" data-role="tagsinput" data-color="danger" />
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">value=</span><span class="s">"Amsterdam,Washington,Sydney,Beijing"</span> <span class="na">class=</span><span class="s">"tagsinput form-control"</span> <span class="na">data-role=</span><span class="s">"tagsinput"</span> <span class="na">data-color=</span><span class="s">"danger"</span><span class="nt">&gt;</span></code></pre></div>


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
