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
			<li class="toc-entry toc-h2"><a href="#base-nav">Navegación base</a></li>
			<li class="toc-entry toc-h2"><a href="#available-styles">Estilos disponibles</a>
				<ul>
					<li class="toc-entry toc-h3"><a href="#horizontal-alignment">Alineación horizontal</a></li>
					<li class="toc-entry toc-h3"><a href="#vertical">Vertical</a></li>
					<li class="toc-entry toc-h3"><a href="#tabs">Pestañas</a>
						<ul>
							<li class="toc-entry toc-h4"><a href="#tabs-on-plain-card">Tabs on Plain Card</a></li>
							<li class="toc-entry toc-h4"><a href="#tabs-with-icons-on-card">Tabs with Icons on Card</a></li>
						</ul>
					</li>
					<li class="toc-entry toc-h3"><a href="#pills">Pastillas</a>
						<ul>
							<li class="toc-entry toc-h4"><a href="#horizontal-tabs">Horizontal Tabs</a></li>
							<li class="toc-entry toc-h4"><a href="#vertical-tabs">Vertical Tabs</a></li>
							<li class="toc-entry toc-h4"><a href="#with-icons">With Icons</a></li>
						</ul>
					</li>
					<li class="toc-entry toc-h3"><a href="#pills-with-dropdowns">Pastillas con desplegables</a></li>
					<li class="toc-entry toc-h3"><a href="#using-data-attributes">Usando atributos de datos</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">


	 <h1 class="bd-title" id="content">Naves</h1>
          <p class="bd-lead">Documentación y ejemplos de cómo utilizar los componentes de navegación incluidos en Bootstrap.</p>
          <h2 id="base-nav">Navegación base</h2>

<p>La navegación disponible en Bootstrap comparte el marcado general y los estilos, desde la  <code class="highlighter-rouge">.nav</code> clase base hasta los estados activos y deshabilitados. Cambia las clases de modificador para cambiar entre cada estilo.</p>

<p>El<code class="highlighter-rouge">.nav</code> componente base está construido con flexbox y proporciona una base sólida para construir todo tipo de componentes de navegación. Incluye algunos cambios de estilo (para trabajar con listas), algunos rellenos de enlaces para áreas de mayor impacto y estilos básicos deshabilitados.</p>

<div class="bd-callout bd-callout-info">
<p>El  <code class="highlighter-rouge">.nav</code> componente base no incluye ningún <code class="highlighter-rouge">.active</code> estado. Los siguientes ejemplos incluyen la clase, principalmente para demostrar que esta clase en particular no activa ningún estilo especial.</p>
</div>

<div class="bd-example" data-example-id="">
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="#">Activo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Deshabilitado</a>
  </li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<p>Las clases se utilizan en todas partes, por lo que su marca puede ser súper flexible. Use <code class="highlighter-rouge">&lt;ul&gt;</code>s como arriba, o enrolle los suyos con un <code class="highlighter-rouge">&lt;nav&gt;</code> elemento. Debido a los <code class="highlighter-rouge">.nav</code> usos <code class="highlighter-rouge">display: flex</code>, los enlaces de navegación se comportan de la misma manera que los elementos de navegación, pero sin el marcado adicional.</p>

<div class="bd-example" data-example-id="">
<nav class="nav">
  <a class="nav-link active" href="#">Activo</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" href="#">Deshabilitado</a>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"nav"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h2 id="available-styles">Estilos disponibles</h2>

<p>Cambia el estilo del <code class="highlighter-rouge">.nav</code> componente s con modificadores y utilidades. Mezcla y combina según sea necesario, o crea el tuyo.</p>

<h3 id="horizontal-alignment">Alineación horizontal</h3>

<p>Cambia la alineación horizontal de tu navegador con <a href="/docs/1.0/layout/grid/#horizontal-alignment">flexbox utilities</a>. De forma predeterminada, los botones de navegación están alineados a la izquierda, pero puede cambiarlos fácilmente para alinearlos en el centro o la derecha.</p>

<p>Centrado con <code class="highlighter-rouge">.justify-content-center</code>:</p>

<div class="bd-example" data-example-id="">
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="#">Activo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Deshabilitado</a>
  </li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav justify-content-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<p>Alineado a la derecha con  <code class="highlighter-rouge">.justify-content-end</code>:</p>

<div class="bd-example" data-example-id="">
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="#">Activo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Deshabilitado</a>
  </li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav justify-content-end"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h3 id="vertical">Vertical</h3>

<p>Apila tu navegación cambiando la dirección del elemento flexible con la <code class="highlighter-rouge">.flex-column</code> utilidad. ¿Necesitas apilarlos en algunas vistas pero no en otras? Utilice las versiones de respuesta (por ejemplo <code class="highlighter-rouge">.flex-sm-column</code>).</p>

<div class="bd-example" data-example-id="">
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" href="#">Activo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Deshabilitado</a>
  </li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav flex-column"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<p>Como siempre, la navegación vertical es posible sin <code class="highlighter-rouge">&lt;ul&gt;</code>s, también.</p>

<div class="bd-example" data-example-id="">
<nav class="nav flex-column">
  <a class="nav-link active" href="#">Activo</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" href="#">Deshabilitado</a>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"nav flex-column"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h3 id="tabs">Pestañas</h3>

<p>Toma la navegación básica desde arriba y agrega la <code class="highlighter-rouge">.nav-tabs</code> clase para generar una interfaz con pestañas. Úsalos para crear regiones tabulables con nuestra <a href="#javascript-behavior">pestaña JavaScript .</a>.</p>

<h4 id="tabs-on-plain-card">Pestañas en tarjeta simple</h4>

<div class="bd-example" data-example-id="">
<div class="card card-nav-tabs card-plain">
    <div class="card-header card-header-danger">
        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home" data-toggle="tab">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#updates" data-toggle="tab">Updates</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#history" data-toggle="tab">History</a>
                    </li>
                </ul>
            </div>
        </div>
    </div><div class="card-body ">
        <div class="tab-content text-center">
            <div class="tab-pane active" id="home">
                <p>I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it&#x2019;s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
            </div>
            <div class="tab-pane" id="updates">
                <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
            </div>
            <div class="tab-pane" id="history">
                <p> I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
            </div>
        </div>
    </div>
  </div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-nav-tabs card-plain"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header card-header-danger"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" --&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"nav-tabs-navigation"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"nav-tabs-wrapper"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs"</span> <span class="na">data-tabs=</span><span class="s">"tabs"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#home"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;</span>
                    <span class="nt">&lt;/li&gt;</span>
                    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#updates"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span><span class="nt">&gt;</span>Updates<span class="nt">&lt;/a&gt;</span>
                    <span class="nt">&lt;/li&gt;</span>
                    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#history"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span><span class="nt">&gt;</span>History<span class="nt">&lt;/a&gt;</span>
                    <span class="nt">&lt;/li&gt;</span>
                <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;&lt;div</span> <span class="na">class=</span><span class="s">"card-body "</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-content text-center"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane active"</span> <span class="na">id=</span><span class="s">"home"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;p&gt;</span>I think that<span class="ni">&amp;#x2019;</span>s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it<span class="ni">&amp;#x2019;</span>s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.<span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"updates"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;p&gt;</span> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that<span class="ni">&amp;#x2019;</span>s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that<span class="ni">&amp;#x2019;</span>s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. <span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"history"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;p&gt;</span> I think that<span class="ni">&amp;#x2019;</span>s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that<span class="ni">&amp;#x2019;</span>s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.<span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span></code></pre></div>

<h4 id="tabs-with-icons-on-card">Fichas con iconos en la tarjeta</h4>

<div class="card card-nav-tabs">
    <div class="card-header card-header-primary">
        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">face</i>
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons">chat</i>
                            Messages
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">build</i>
                            Settings
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </div><div class="card-body ">
        <div class="tab-content text-center">
            <div class="tab-pane active" id="profile">
                <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
            </div>
            <div class="tab-pane" id="messages">
                <p> I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
            </div>
            <div class="tab-pane" id="settings">
                <p>I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it&#x2019;s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
            </div>
        </div>
    </div>
</div>

<h3 id="pills">Pastillas</h3>

<p>Toma ese mismo HTML, pero usa <code class="highlighter-rouge">.nav-pills</code> en su lugar:</p>

<h4 id="horizontal-tabs">Pestañas horizontales</h4>

<div class="bd-example" data-example-id="">
<ul class="nav nav-pills nav-pills-primary" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist" aria-expanded="true">
            Profile
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#link2" role="tablist" aria-expanded="false">
            Settings
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#link3" role="tablist" aria-expanded="false">
            Options
        </a>
    </li>
</ul>
<div class="tab-content tab-space">
    <div class="tab-pane active" id="link1" aria-expanded="true">
      Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
      <br /><br />
      Dramatically visualize customer directed convergence without revolutionary ROI.
    </div>
    <div class="tab-pane" id="link2" aria-expanded="false">
      Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
      <br /><br />Dramatically maintain clicks-and-mortar solutions without functional solutions.
    </div>
    <div class="tab-pane" id="link3" aria-expanded="false">
        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
        <br /><br />Dynamically innovate resource-leveling customer service for state of the art customer service.
    </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills nav-pills-primary"</span> <span class="na">role=</span><span class="s">"tablist"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#link1"</span> <span class="na">role=</span><span class="s">"tablist"</span> <span class="na">aria-expanded=</span><span class="s">"true"</span><span class="nt">&gt;</span>
            Profile
        <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#link2"</span> <span class="na">role=</span><span class="s">"tablist"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
            Settings
        <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#link3"</span> <span class="na">role=</span><span class="s">"tablist"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
            Options
        <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-content tab-space"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane active"</span> <span class="na">id=</span><span class="s">"link1"</span> <span class="na">aria-expanded=</span><span class="s">"true"</span><span class="nt">&gt;</span>
      Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
      <span class="nt">&lt;br&gt;&lt;br&gt;</span>
      Dramatically visualize customer directed convergence without revolutionary ROI.
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"link2"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
      Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
      <span class="nt">&lt;br&gt;&lt;br&gt;</span>Dramatically maintain clicks-and-mortar solutions without functional solutions.
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"link3"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
        <span class="nt">&lt;br&gt;&lt;br&gt;</span>Dynamically innovate resource-leveling customer service for state of the art customer service.
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h4 id="vertical-tabs">Pestañas verticales</h4>

<div class="bd-example" data-example-id="">
<div class="row">
    <div class="col-md-4">
        <ul class="nav nav-pills nav-pills-primary flex-column">
          <li class="nav-item"><a class="nav-link active" href="#tab1" data-toggle="tab">Profile</a></li>
          <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab">Settings</a></li>
          <li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab">Options</a></li>
        </ul>
    </div>
    <div class="col-md-8">
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
              Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
              <br /><br />
              Dramatically visualize customer directed convergence without revolutionary ROI.
            </div>
            <div class="tab-pane" id="tab2">
              Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
              <br /><br />Dramatically maintain clicks-and-mortar solutions without functional solutions.
            </div>
            <div class="tab-pane" id="tab3">
                Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                <br /><br />Dynamically innovate resource-leveling customer service for state of the art customer service.
            </div>
        </div>
    </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills nav-pills-primary flex-column"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#tab1"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span><span class="nt">&gt;</span>Profile<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#tab2"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span><span class="nt">&gt;</span>Settings<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#tab3"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span><span class="nt">&gt;</span>Options<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-8"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-content"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane active"</span> <span class="na">id=</span><span class="s">"tab1"</span><span class="nt">&gt;</span>
              Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
              <span class="nt">&lt;br&gt;&lt;br&gt;</span>
              Dramatically visualize customer directed convergence without revolutionary ROI.
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"tab2"</span><span class="nt">&gt;</span>
              Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
              <span class="nt">&lt;br&gt;&lt;br&gt;</span>Dramatically maintain clicks-and-mortar solutions without functional solutions.
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"tab3"</span><span class="nt">&gt;</span>
                Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                <span class="nt">&lt;br&gt;&lt;br&gt;</span>Dynamically innovate resource-leveling customer service for state of the art customer service.
            <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h4 id="with-icons">Con iconos</h4>

<div class="bd-example" data-example-id="">
<ul class="nav nav-pills nav-pills-primary nav-pills-icons" role="tablist">
    <!--
        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
    -->
    <li class="nav-item">
        <a class="nav-link" href="#dashboard-1" role="tab" data-toggle="tab">
            <i class="now-ui-icons objects_umbrella-13"></i>
            Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="#schedule-1" role="tab" data-toggle="tab">
            <i class="now-ui-icons ui-2_settings-90"></i>
            Settings
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
            <i class="now-ui-icons ui-1_calendar-60"></i>
            Tasks
        </a>
    </li>
</ul>
<div class="tab-content tab-space">
    <div class="tab-pane active" id="dashboard-1">
      Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
      <br /><br />
      Dramatically visualize customer directed convergence without revolutionary ROI.
    </div>
    <div class="tab-pane" id="schedule-1">
      Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
      <br /><br />Dramatically maintain clicks-and-mortar solutions without functional solutions.
    </div>
    <div class="tab-pane" id="tasks-1">
        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
        <br /><br />Dynamically innovate resource-leveling customer service for state of the art customer service.
    </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills nav-pills-primary nav-pills-icons"</span> <span class="na">role=</span><span class="s">"tablist"</span><span class="nt">&gt;</span>
    <span class="c">&lt;!--
        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
    --&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#dashboard-1"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons objects_umbrella-13"</span><span class="nt">&gt;&lt;/i&gt;</span>
            Dashboard
        <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#schedule-1"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-2_settings-90"</span><span class="nt">&gt;&lt;/i&gt;</span>
            Settings
        <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#tasks-1"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_calendar-60"</span><span class="nt">&gt;&lt;/i&gt;</span>
            Tasks
        <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-content tab-space"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane active"</span> <span class="na">id=</span><span class="s">"dashboard-1"</span><span class="nt">&gt;</span>
      Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
      <span class="nt">&lt;br&gt;&lt;br&gt;</span>
      Dramatically visualize customer directed convergence without revolutionary ROI.
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"schedule-1"</span><span class="nt">&gt;</span>
      Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
      <span class="nt">&lt;br&gt;&lt;br&gt;</span>Dramatically maintain clicks-and-mortar solutions without functional solutions.
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"tasks-1"</span><span class="nt">&gt;</span>
        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
        <span class="nt">&lt;br&gt;&lt;br&gt;</span>Dynamically innovate resource-leveling customer service for state of the art customer service.
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h3 id="pills-with-dropdowns">Pastillas con desplegables</h3>

<div class="bd-example" data-example-id="">
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>Dropdown<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h3 id="using-data-attributes">Usando atributos de datos</h3>

<p>Puede activar una pestaña o navegación de navegación sin escribir ningún JavaScript simplemente especificando <code class="highlighter-rouge">data-toggle="tab"</code> o <code class="highlighter-rouge">data-toggle="pill"</code> en un elemento. Utilice estos atributos de datos en <code class="highlighter-rouge">.nav-tabs</code> o <code class="highlighter-rouge">.nav-pills</code>.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Nav tabs --&gt;</span>
<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs"</span> <span class="na">id=</span><span class="s">"myTab"</span> <span class="na">role=</span><span class="s">"tablist"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">id=</span><span class="s">"home-tab"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#home"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"home"</span> <span class="na">aria-selected=</span><span class="s">"true"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">id=</span><span class="s">"profile-tab"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#profile"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"profile"</span> <span class="na">aria-selected=</span><span class="s">"false"</span><span class="nt">&gt;</span>Profile<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">id=</span><span class="s">"messages-tab"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#messages"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"messages"</span> <span class="na">aria-selected=</span><span class="s">"false"</span><span class="nt">&gt;</span>Messages<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">id=</span><span class="s">"settings-tab"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#settings"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"settings"</span> <span class="na">aria-selected=</span><span class="s">"false"</span><span class="nt">&gt;</span>Settings<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>

<span class="c">&lt;!-- Tab panes --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-content"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane active"</span> <span class="na">id=</span><span class="s">"home"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"home-tab"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"profile"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"profile-tab"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"messages"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"messages-tab"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"settings"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"settings-tab"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<p>Si desea ver más ejemplos y propiedades, consulte la official <strong><a href="http://getbootstrap.com/docs/4.0/components/navs/" target="_blank"> Documentation oficial de Bootstrap </a></strong>.</p>


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
