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
			<li class="toc-entry toc-h2"><a href="#rtl-support">Soporte Rtl</a></li>
		</ul>
	</div>


	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">

	 <h1 class="bd-title" id="content">Soporte Rtl</h1>
          <p class="bd-lead">Documentación para el soporte de Rtl.</p>
          <h2 id="rtl-support">Soporte Rtl</h2>

<p>Puede tener soporte de rtl en su página simplemente siguiendo los pasos:</p>
<ol>
  <li>Debes añadir en la etiqueta del cuerpo la clase. <code class="highlighter-rouge">.rtl-active</code></li>
  <li>Ahora tiene que agregar en la cabecera la siguiente etiqueta y eliminar el enlace de la etiqueta con bootstrap por defecto, como en el siguiente ejemplo:</li>
</ol>

<div class="language-html highlighter-rouge"><pre class="highlight"><code><span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">href=</span><span class="s">"https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css"</span> <span class="na">integrity=</span><span class="s">"sha384-P4uhUIGk/q1gaD/NdgkBIl3a6QywJjlsFJFk7SPRdruoGddvRVSwv5qFnvZ73cpz"</span> <span class="na">crossorigin=</span><span class="s">"anonymous"</span><span class="nt">&gt;</span>
</code></pre>
</div>

<ol>
  <li>En el último paso, debe eliminar el enlace de la etiqueta de javascript al final de la página con bootstrap por defecto y reemplazar ese enlace con lo siguiente: </li>
</ol>

<div class="language-html highlighter-rouge"><pre class="highlight"><code><span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://cdn.rtlcss.com/bootstrap/v4.0.0/js/bootstrap.min.js"</span> <span class="na">integrity=</span><span class="s">"sha384-54+cucJ4QbVb99v8dcttx/0JRx4FHMmhOWi4W+xrXpKcsKQodCBwAvu3xxkZAwsH"</span> <span class="na">crossorigin=</span><span class="s">"anonymous"</span><span class="nt">&gt;&lt;/script&gt;</span>
</code></pre>
</div>

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
