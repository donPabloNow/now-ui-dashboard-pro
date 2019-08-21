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
			<li class="toc-entry toc-h2"><a href="#example">Exemplo</a></li>
			<li class="toc-entry toc-h2"><a href="#contextual-variations">Variaciones contextuales</a></li>
			<li class="toc-entry toc-h2"><a href="#pill-badges">Insignias de la píldora</a></li>
			<li class="toc-entry toc-h2"><a href="#links">Campo de golf</a></li>
		</ul>
	</div>

	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">

		<h1 class="bd-title" id="content">Insignias</h1>
		<p class="bd-lead">Documentación y ejemplos de credenciales, nuestro pequeño componente de recuento y etiquetado..</p>
		<h2 id="example">Ejemplo</h2>

		<p>Las insignias se pueden usar como parte de los enlaces o botones para proporcionar un contador.</p>

		<div class="bd-example" data-example-id="">
			<button type="button" class="btn btn-primary">
				Notificaciones <span class="badge badge-default">4</span>
			</button>
		</div>
		<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>
  Notifications <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-default"</span><span class="nt">&gt;</span>4<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span></code></pre></div>

			<h2 id="contextual-variations">Variaciones contextuales</h2>

			<p>Agregue cualquiera de las clases modificadoras mencionadas a continuación para cambiar la apariencia de una insignia.</p>

			<div class="bd-example" data-example-id="">
				<span class="badge badge-primary">Primary</span>
				<span class="badge badge-info">Info</span>
				<span class="badge badge-success">Success</span>
				<span class="badge badge-danger">Danger</span>
				<span class="badge badge-warning">Warning</span>
				<span class="badge badge-default">Default</span>
			</div>
			<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/span&gt;</span></code></pre></div>

				<h2 id="pill-badges">Insignias de la píldora</h2>

				<p>Use la <code class="highlighter-rouge">.badge-pill</code> clase modificadora para hacer las insignias más redondeadas (con una  <code class="highlighter-rouge">border-radius</code> horizontal más grande y adicional  <code class="highlighter-rouge">padding</code>). Útil si te pierdes las insignias de v3.</p>

				<div class="bd-example" data-example-id="">
					<span class="badge badge-pill badge-primary">Primary</span>
					<span class="badge badge-pill badge-info">Info</span>
					<span class="badge badge-pill badge-success">Success</span>
					<span class="badge badge-pill badge-danger">Danger</span>
					<span class="badge badge-pill badge-warning">Warning</span>
					<span class="badge badge-pill badge-default">Default</span>
				</div>
				<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/span&gt;</span></code></pre></div>

					<h2 id="links">Campo de golf</h2>

					<p>El uso de las  <code class="highlighter-rouge">.badge-*</code> clases contextuales en un <code class="highlighter-rouge">&lt;a&gt;</code> elemento proporciona rápidamente credenciales <em>accionables</em> con estados de desplazamiento y enfoque..</p>

					<div class="bd-example" data-example-id="">
						<a href="#" class="badge badge-primary">Primary</a>
						<a href="#" class="badge badge-info">Info</a>
						<a href="#" class="badge badge-success">Success</a>
						<a href="#" class="badge badge-danger">Danger</a>
						<a href="#" class="badge badge-warning">Warning</a>
						<a href="#" class="badge badge-default">Default</a>
					</div>
				<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/a&gt;</span></code></pre></div>

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
