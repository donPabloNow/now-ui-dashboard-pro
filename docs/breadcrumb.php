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

	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">

	<h1 class="bd-title" id="content">Migaja de pan</h1>
          <p class="bd-lead">Indique la ubicación de la página actual dentro de una jerarquía de navegación que agrega automáticamente separadores a través de CSS.</p>
          <h2 id="overview">Visión general</h2>

<p>Los separadores se agregan automáticamente en CSS a través de <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/::before"><code class="highlighter-rouge">::before</code></a> y <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/content"><code class="highlighter-rouge">content</code></a>.</p>

<div class="bd-example" data-example-id="">
<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>

<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav>

<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">aria-label=</span><span class="s">"breadcrumb"</span> <span class="na">role=</span><span class="s">"navigation"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ol</span> <span class="na">class=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item active"</span> <span class="na">aria-current=</span><span class="s">"page"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ol&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">aria-label=</span><span class="s">"breadcrumb"</span> <span class="na">role=</span><span class="s">"navigation"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ol</span> <span class="na">class=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item active"</span> <span class="na">aria-current=</span><span class="s">"page"</span><span class="nt">&gt;</span>Library<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ol&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">aria-label=</span><span class="s">"breadcrumb"</span> <span class="na">role=</span><span class="s">"navigation"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ol</span> <span class="na">class=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Library<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"breadcrumb-item active"</span> <span class="na">aria-current=</span><span class="s">"page"</span><span class="nt">&gt;</span>Data<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ol&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

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
