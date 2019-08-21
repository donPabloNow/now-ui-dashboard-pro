<?php
session_start();
require_once("../inc/config.sistema.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php
require_once(RUTA_SISTEMA ."inc/head.php");
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
			<li class="toc-entry toc-h2"><a href="#how-it-works">Cómo funciona</a>
				<ul>
					<li class="toc-entry toc-h3"><a href="#nav">Nav</a></li>
					<li class="toc-entry toc-h3"><a href="#forms">Formas</a></li>
					<li class="toc-entry toc-h3"><a href="#text">Texto</a></li>
				</ul>
			</li>
			<li class="toc-entry toc-h2"><a href="#fixed-navbar">Barra de navegación fija</a></li>
			<li class="toc-entry toc-h2"><a href="#color-schemes">Esquemas de color</a></li>
			<li class="toc-entry toc-h2"><a href="#containers">Contenedores</a></li>
			<li class="toc-entry toc-h2"><a href="#placement">Colocación</a></li>
			<li class="toc-entry toc-h2"><a href="#responsive-behaviors">Comportaminetos receptivos</a>
				<ul>
					<li class="toc-entry toc-h3"><a href="#toggler">Toggler</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
	<h1 class="bd-title" id="content">Navbar</h1>
          <p class="bd-lead">Documentación y ejemplos para el encabezado de navegación potente y sensible de Bootstrap, la barra de navegación. Incluye soporte para marca, navegación y más, incluido el soporte para nuestro complemento de colapso.</p>
          <h2 id="how-it-works">Cómo funciona</h2>

<p>Esto es lo que necesita saber antes de comenzar con la barra de navegación:</p>

<ul>
  <li>Navbars requieren un envoltorio <code class="highlighter-rouge">.navbar</code> con <code class="highlighter-rouge">.navbar-expand{-sm|-md|-lg|-xl}</code> para plegar y sensibles <a href="#color-schemes">color scheme</a> clases.</li>
  <li>Las barras de navegación y sus contenidos son fluidos por defecto. Use <a href="#containers">containedores optionales </a> para limitar su ancho horizontal.</li>
  <li>Utilice nuestras clases de utilidad de <a href="/docs/1.0/utilities/spacing/">spaciado</a> y <a href="/docs/1.0/utilities/flex/">flexión</a> para controlar el espaciado y la alineación dentro de las barras de navegación.</li>
  <li>Las barras de navegación responden de forma predeterminada, pero puede modificarlas fácilmente para cambiar eso. El comportamiento de respuesta depende de nuestro complemento Colapsar de JavaScript.</li>
  <li>Las barras de navegación están ocultas por defecto al imprimir. Forzarlos a ser impresos añadiéndolos <code class="highlighter-rouge">.d-print</code> a la <code class="highlighter-rouge">.navbar</code>.  Ver la clase de utilidad de <a href="/docs/1.0/utilities/display/">visualización</a>.</li>
  <li>Asegure la accesibilidad mediante el uso de un <code class="highlighter-rouge">&lt;nav&gt;</code> elemento o, si utiliza un elemento más genérico, como a <code class="highlighter-rouge">&lt;div&gt;</code>, agregue un <code class="highlighter-rouge">role="navigation"</code> a cada barra de navegación para identificarlo explícitamente como una región emblemática para los usuarios de tecnologías de asistencia.</li>
</ul>

<p>Siga leyendo para ver un ejemplo y una lista de subcomponentes compatibles.</p>

<h3 id="nav">Nav</h3>

<p>Los enlaces de navegación de la barra de navegación se basan en nuestras .navopciones con su propia clase de modificador y requieren el uso de <code class="highlighter-rouge">.nav</code> opciones con su propia clase de modificador y requieren el uso de<a href="#toggler">clases de toggler(alternador) </a>  para un estilo de respuesta adecuado.  <strong>La navegación en las barras de navegación también crecerá para ocupar tanto espacio horizontal como sea posible </strong> para mantener sus contenidos de la barra de navegación alineados de manera segura.</p>

<p>Los estados activos —con <code class="highlighter-rouge">.active</code>— para indicar la página actual se pueden aplicar directamente a <code class="highlighter-rouge">.nav-link</code>s o sus padres primarios inmediatos  <code class="highlighter-rouge">.nav-item</code>s.</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg bg-primary"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navbarNav"</span> <span class="na">aria-controls=</span><span class="s">"navbarNav"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse"</span> <span class="na">id=</span><span class="s">"navbarNav"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Features<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Pricing<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>También puede utilizar menús desplegables en su barra de navegación. Los menús desplegables requieren un elemento de ajuste para el posicionamiento, así que asegúrese de usar elementos separados y anidados para <code class="highlighter-rouge">.nav-item</code> y <code class="highlighter-rouge">.nav-link</code> como se muestra a continuación.</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown link
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg bg-primary"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navbarNavDropdown"</span> <span class="na">aria-controls=</span><span class="s">"navbarNavDropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse"</span> <span class="na">id=</span><span class="s">"navbarNavDropdown"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Features<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Pricing<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link dropdown-toggle"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">id=</span><span class="s">"navbarDropdownMenuLink"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
            Dropdown link
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">aria-labelledby=</span><span class="s">"navbarDropdownMenuLink"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h3 id="forms">Formas</h3>

<p>Coloque varios controles de formulario y componentes dentro de una barra de navegación con <code class="highlighter-rouge">.form-inline</code>.</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/presentation.html">Brand</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="#pablo" class="nav-link">link</a>
                </li>
                <li class="nav-item">
                    <a href="#pablo" class="nav-link">link</a>
                </li>
            </ul>

            <form class="form-inline ml-auto">
                <div class="form-group no-border">
                  <input type="text" class="form-control" placeholder="Search" />
                </div>
                <button type="submit" class="btn btn-neutral btn-icon btn-round">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                </button>
            </form>
        </div>
    </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg bg-primary"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"navbar-translate"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"/presentation.html"</span><span class="nt">&gt;</span>Brand<span class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-icon"</span><span class="nt">&gt;&lt;/span&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-icon"</span><span class="nt">&gt;&lt;/span&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-icon"</span><span class="nt">&gt;&lt;/span&gt;</span>
            <span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;/div&gt;</span>

        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#pablo"</span> <span class="na">class=</span><span class="s">"nav-link"</span><span class="nt">&gt;</span>link<span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/li&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#pablo"</span> <span class="na">class=</span><span class="s">"nav-link"</span><span class="nt">&gt;</span>link<span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/li&gt;</span>
            <span class="nt">&lt;/ul&gt;</span>

            <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline ml-auto"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group no-border"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-neutral btn-icon btn-round"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_zoom-bold"</span><span class="nt">&gt;&lt;/i&gt;</span>
                <span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;/form&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h3 id="text">Texto</h3>

<p>Las barras de navegación pueden contener bits de texto con la ayuda de <code class="highlighter-rouge">.navbar-text</code>. Esta clase ajusta la alineación vertical y el espaciado horizontal para cadenas de texto.</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-dark bg-primary">
  <div class="container">
    <span class="navbar-text">
      Navbar text with an inline element
    </span>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-dark bg-primary"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-text"</span><span class="nt">&gt;</span>
      Navbar text with an inline element
    <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>Mix and match with other components and utilities as needed.</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar w/ text</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
      <span class="navbar-text">
        Navbar text with an inline element
      </span>
    </div>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg bg-primary"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar w/ text<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navbarText"</span> <span class="na">aria-controls=</span><span class="s">"navbarText"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse"</span> <span class="na">id=</span><span class="s">"navbarText"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav mr-auto"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Features<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Pricing<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-text"</span><span class="nt">&gt;</span>
        Navbar text with an inline element
      <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h2 id="fixed-navbar">Barra de navegación fija</h2>
<p>Para que la barra de navegación de tu panel de control sea fija, deberás seguir unos pasos que son muy simples:</p>

<ul>
  <li>En el primer paso, debes mover toda tu etiqueta div <code class="highlighter-rouge">nav</code> fuera de la div con clase <code class="highlighter-rouge">.main-panel</code>:</li>
</ul>

<div class="language-html highlighter-rouge"><pre class="highlight"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"wrapper"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar fixed-top navbar-expand-lg bg-primary navbar-transparent"</span> <span class="na">color-on-scroll=</span><span class="s">"20"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/nav&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"sidebar"</span> <span class="na">data-color=</span><span class="s">"orange"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"main-panel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre>
</div>
<ul>
  <li>
    <p>Ahora, después del primer punto, hay que poner como se ve en el primer punto la clase <code class="highlighter-rouge">.fixed-top</code> y el atributo <code class="highlighter-rouge">color-on-scroll="value"</code> ( the <code class="highlighter-rouge">value</code> es su elección) a la etiqueta div <code class="highlighter-rouge">nav</code>.</p>
  </li>
  <li>
    <p>En el último paso, elimine la clase <code class="highlighter-rouge">.navbar-absolute</code> de la etiqueta div <code class="highlighter-rouge">nav</code>.</p>
  </li>
</ul>

<h2 id="color-schemes">Esquemas de color</h2>

<p>Theming the navbar nunca ha sido tan fácil gracias a la combinación de clases temáticas y <code class="highlighter-rouge">background-color</code> utilidades. Elija entre <code class="highlighter-rouge">.navbar-light</code> para usar con colores de fondo claros o <code class="highlighter-rouge">.navbar-dark</code> para colores de fondo oscuros. Luego, personaliza con <code class="highlighter-rouge">.bg-*</code> utilidades.</p>

<div class="bd-example">
    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
        <form class="form-inline ml-auto">
            <div class="form-group no-border">
              <input type="text" class="form-control" placeholder="Search" />
            </div>
            <button type="submit" class="btn btn-neutral btn-icon btn-round">
                <i class="now-ui-icons ui-1_zoom-bold"></i>
            </button>
        </form>
      </div>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg bg-success">
    <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <form class="form-inline ml-auto">
          <div class="form-group no-border">
            <input type="text" class="form-control" placeholder="Search" />
          </div>
          <button type="submit" class="btn btn-neutral btn-icon btn-round btn-success">
              <i class="now-ui-icons ui-1_zoom-bold"></i>
          </button>
      </form>
    </div>
  </div>
</nav>

<nav class="navbar navbar-expand-lg bg-danger">
  <div class="container">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-bar navbar-kebab"></span>
  <span class="navbar-toggler-bar navbar-kebab"></span>
  <span class="navbar-toggler-bar navbar-kebab"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline ml-auto">
        <div class="form-group no-border">
          <input type="text" class="form-control" placeholder="Search" />
        </div>
        <button type="submit" class="btn btn-neutral btn-icon btn-round btn-danger">
          <i class="now-ui-icons ui-1_zoom-bold"></i>
        </button>
    </form>
  </div>
</div>
</nav>

<nav class="navbar navbar-expand-lg bg-warning">
  <div class="container">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor04" aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-bar navbar-kebab"></span>
  <span class="navbar-toggler-bar navbar-kebab"></span>
  <span class="navbar-toggler-bar navbar-kebab"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor04">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline ml-auto">
        <div class="form-group no-border">
          <input type="text" class="form-control" placeholder="Search" />
        </div>
        <button type="submit" class="btn btn-neutral btn-icon btn-round btn-warning">
            <i class="now-ui-icons ui-1_zoom-bold"></i>
        </button>
    </form>
  </div>
</div>
</nav>

<nav class="navbar navbar-expand-lg bg-white">
  <div class="container">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor05" aria-controls="navbarColor05" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-bar navbar-kebab"></span>
  <span class="navbar-toggler-bar navbar-kebab"></span>
  <span class="navbar-toggler-bar navbar-kebab"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor05">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline ml-auto">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" />
        </div>
        <button type="submit" class="btn btn-neutral btn-icon btn-round">
            <i class="now-ui-icons ui-1_zoom-bold"></i>
        </button>
    </form>
  </div>
</div>
</nav>


  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor06" aria-controls="navbarColor06" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor06">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
        <form class="form-inline ml-auto">
            <div class="form-group no-border">
              <input type="text" class="form-control" placeholder="Search" />
            </div>
            <button type="submit" class="btn btn-neutral btn-icon btn-round">
                <i class="now-ui-icons ui-1_zoom-bold"></i>
            </button>
        </form>
      </div>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg bg-info">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor07" aria-controls="navbarColor07" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor07">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
        <form class="form-inline ml-auto">
            <div class="form-group no-border">
              <input type="text" class="form-control" placeholder="Search" />
            </div>
            <button type="submit" class="btn btn-neutral btn-icon btn-round btn-info">
                <i class="now-ui-icons ui-1_zoom-bold"></i>
            </button>
        </form>
      </div>
    </div>
  </nav>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg bg-dark"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg bg-success"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg bg-danger"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg bg-warning"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg bg-white"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg bg-primary"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg bg-info"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></figure>

<h2 id="containers">Contenedores</h2>

<p>Cuando el contenedor está dentro de su barra de navegación, su relleno horizontal se elimina en puntos de interrupción más bajos que su <code class="highlighter-rouge">.navbar-expand{-sm|-md|-lg|-xl}</code> clase especificada . Esto asegura que no estamos duplicando el relleno innecesariamente en las vistas inferiores cuando la barra de navegación está colapsada.</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg navbar-light bg-primary"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h2 id="placement">Colocación</h2>

<p>Utilice nuestras<a href="/docs/1.0/utilities/position/"> utilidades de posición</a>  para colocar barras de navegación en posiciones no estáticas. Elija fijo a la parte superior, fijo a la parte inferior o pegado a la parte superior (se desplaza con la página hasta que llega a la parte superior, luego permanece allí). Se corrigió el uso de las barras de navegación <code class="highlighter-rouge">position: fixed</code>, lo que significa que se extraen del flujo normal del DOM y pueden requerir CSS personalizado (por ejemplo, <code class="highlighter-rouge">padding-top</code> en el <code class="highlighter-rouge">&lt;body&gt;</code>) para evitar la superposición con otros elementos.</p>

<p>También tenga en cuenta que <strong><code class="highlighter-rouge">.sticky-top</code> utiliza <code class="highlighter-rouge">position: sticky</code>, que <a href="https://caniuse.com/#feat=css-sticky">no es totalmente compatible con todos los navegadores.</a></strong>.</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-light bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Default</a>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-primary"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<nav class="navbar fixed-top navbar-light bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Fixed top</a>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar fixed-top navbar-light bg-primary"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&ltlt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Fixed top<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<nav class="navbar fixed-bottom navbar-light bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Fixed bottom</a>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar fixed-bottom navbar-light bg-primary"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Fixed bottom<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<nav class="navbar sticky-top navbar-light bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Sticky top</a>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar sticky-top navbar-light bg-primary"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Sticky top<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h2 id="responsive-behaviors">Comportamientos receptivos</h2>

<p>Las barras de navegación pueden utilizar <code class="highlighter-rouge">.navbar-toggler</code>, <code class="highlighter-rouge">.navbar-collapse</code>, y las <code class="highlighter-rouge">.navbar-expand{-sm|-md|-lg|-xl}</code> clases para cambiar cuando su contenido colapsa detrás de un botón. En combinación con otras utilidades, puede elegir fácilmente cuándo mostrar u ocultar elementos particulares.</p>

<p>Para barras de navegación que nunca se colapsan, agregue la <code class="highlighter-rouge">.navbar-expand</code> clase en la barra de navegación. Para las barras de navegación que siempre se colapsan, no agregue ninguna <code class="highlighter-rouge">.navbar-expand</code> clase.</p>

<h3 id="toggler">Toggler</h3>

<p>Los alternadores de la barra de navegación están alineados a la izquierda de forma predeterminada, pero si siguen un elemento hermano como a  <code class="highlighter-rouge">.navbar-brand</code>, se alinearán automáticamente en el extremo derecho. Invertir su marca invertirá la colocación del conmutador. A continuación se muestran ejemplos de diferentes estilos de alternar.</p>

<p>Sin <code class="highlighter-rouge">.navbar-brand</code> mostrar en el punto de ruptura más bajo:</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Hidden brand</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <form class="form-inline ml-auto">
          <div class="form-group has-white">
            <input type="text" class="form-control" placeholder="Search" />
          </div>
          <button type="submit" class="btn btn-neutral btn-icon btn-round">
              <i class="now-ui-icons ui-1_zoom-bold"></i>
          </button>
      </form>
    </div>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg bg-primary"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navbarTogglerDemo01"</span> <span class="na">aria-controls=</span><span class="s">"navbarTogglerDemo01"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse"</span> <span class="na">id=</span><span class="s">"navbarTogglerDemo01"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Hidden brand<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav mr-auto mt-2 mt-lg-0"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline ml-auto"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-white"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-neutral btn-icon btn-round"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_zoom-bold"</span><span class="nt">&gt;&lt;/i&gt;</span>
          <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/form&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>Con el nombre de una marca a la izquierda y el alternador a la derecha:</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <form class="form-inline ml-auto">
          <div class="form-group no-border">
            <input type="text" class="form-control" placeholder="Search" />
          </div>
          <button type="submit" class="btn btn-neutral btn-icon btn-round">
              <i class="now-ui-icons ui-1_zoom-bold"></i>
          </button>
      </form>
    </div>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg bg-primary"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navbarTogglerDemo02"</span> <span class="na">aria-controls=</span><span class="s">"navbarTogglerDemo02"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse"</span> <span class="na">id=</span><span class="s">"navbarTogglerDemo02"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav mr-auto mt-2 mt-lg-0"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline ml-auto"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group no-border"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-neutral btn-icon btn-round"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_zoom-bold"</span><span class="nt">&gt;&lt;/i&gt;</span>
          <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/form&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>Con un alternador a la izquierda y una marca a la derecha:</p>

<div class="bd-example" data-example-id="">
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <form class="form-inline ml-auto">
          <div class="form-group no-border">
            <input type="text" class="form-control" placeholder="Search" />
          </div>
          <button type="submit" class="btn btn-neutral btn-icon btn-round">
              <i class="now-ui-icons ui-1_zoom-bold"></i>
          </button>
      </form>
    </div>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg bg-primary"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navbarTogglerDemo03"</span> <span class="na">aria-controls=</span><span class="s">"navbarTogglerDemo03"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse"</span> <span class="na">id=</span><span class="s">"navbarTogglerDemo03"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav mr-auto mt-2 mt-lg-0"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline ml-auto"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group no-border"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-neutral btn-icon btn-round"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_zoom-bold"</span><span class="nt">&gt;&lt;/i&gt;</span>
          <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/form&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>


	</main>


	<!-- Final del contenido de esta pagina con las 2 etiquetas div -->
</div>
</div>

<!-- Libreias js -->
<?php
require_once(RUTA_SISTEMA ."inc/script.php");
?>

</body>

</html>
