<?php
session_start();
require_once("../inc/config.sistema.php");
//require_once    ("../modelo/config.modelo.php"); # configuracion del modelo
// require_once("../modelo/funciones.php");
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
			<li class="toc-entry toc-h2"><a href="#example">Ejemplo</a>
				<ul>
					<ul>
						<li class="toc-entry toc-h4"><a href="#card-title">Título de la tarjeta</a></li>
					</ul>
				</ul>
			</li>
			<li class="toc-entry toc-h2"><a href="#content-types">Tipos de contenido</a>
				<ul>
					<li class="toc-entry toc-h3"><a href="#body">Cuerpo</a></li>
					<li class="toc-entry toc-h3"><a href="#titles-text-and-links">Títulos, texto y enlaces.</a>
						<ul>
							<li class="toc-entry toc-h4"><a href="#card-title-1">Card title</a>
								<ul>
									<ul>
										<li class="toc-entry toc-h6"><a href="#card-subtitle">Card subtitle</a></li>
									</ul>
								</ul>
							</li>
						</ul>
					</li>
					<li class="toc-entry toc-h3"><a href="#images">Imágenes</a></li>
					<li class="toc-entry toc-h3"><a href="#list-groups">Lista de grupos</a></li>
					<li class="toc-entry toc-h3"><a href="#header-and-footer">Encabezado y pié de página</a>
						<ul>
							<li class="toc-entry toc-h4"><a href="#special-title-treatment">Special title treatment</a></li>
							<li class="toc-entry toc-h4"><a href="#featured">Featured</a></li>
							<li class="toc-entry toc-h4"><a href="#special-title-treatment-1">Special title treatment</a></li>
							<li class="toc-entry toc-h4"><a href="#special-title-treatment-2">Special title treatment</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="toc-entry toc-h2"><a href="#text-alignment">Alineación del texto</a>
				<ul>
					<ul>
						<li class="toc-entry toc-h4"><a href="#special-title-treatment-3">Special title treatment</a></li>
						<li class="toc-entry toc-h4"><a href="#special-title-treatment-4">Special title treatment</a></li>
						<li class="toc-entry toc-h4"><a href="#special-title-treatment-5">Special title treatment</a></li>
					</ul>
				</ul>
			</li>
			<li class="toc-entry toc-h2"><a href="#navigation">Navegación</a>
				<ul>
					<ul>
						<li class="toc-entry toc-h4"><a href="#special-title-treatment-6">Special title treatment</a></li>
						<li class="toc-entry toc-h4"><a href="#special-title-treatment-7">Special title treatment</a></li>
					</ul>
				</ul>
			</li>
			<li class="toc-entry toc-h2"><a href="#images-1">Imágenes</a>
				<ul>
					<li class="toc-entry toc-h3"><a href="#image-caps">Gorras de imagen</a>
						<ul>
							<li class="toc-entry toc-h4"><a href="#card-title-2">Card title</a></li>
							<li class="toc-entry toc-h4"><a href="#card-title-3">Card title</a></li>
						</ul>
					</li>
					<li class="toc-entry toc-h3"><a href="#image-overlays">Superposiciones de imágenes</a>
						<ul>
							<li class="toc-entry toc-h4"><a href="#card-title-4">Card title</a></li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>

	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
	 <h1 class="bd-title" id="content">Tarjetas</h1>
          <p class="bd-lead">Las tarjetas de Bootstrap proporcionan un contenedor de contenido flexible y extensible con múltiples variantes y opciones.</p>
          <h2 id="example">Ejemplo</h2>

<p>A continuación se muestra un ejemplo de una tarjeta básica con contenido mixto y un ancho fijo. Las tarjetas no tienen un ancho fijo para comenzar, por lo que naturalmente llenarán todo el ancho de su elemento padre. Esto se puede personalizar fácilmente con nuestras diversas <a href="#sizing">opciones de tamaño</a>.</p>

<div class="bd-example" data-example-id="">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" data-src="holder.js/100px180/" alt="Card image cap" />
  <div class="card-body">
    <h4 class="card-title">Título de la tarjeta</h4>
    <p class="card-text">Algún texto de ejemplo rápido para construir en el título de la tarjeta y completar la mayor parte del contenido de la tarjeta.</p>
    <a href="#" class="btn btn-primary">Ir a alguna parte</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span> <span class="na">style=</span><span class="s">"width: 20rem;"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card's content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="content-types">Tipos de contenido</h2>

<p>Las tarjetas admiten una amplia variedad de contenido, incluidas imágenes, texto, grupos de listas, enlaces y más. A continuación se muestran ejemplos de lo que es compatible.</p>

<h3 id="body">Cuerpo</h3>

<p>El bloque de construcción de una tarjeta es el  <code class="highlighter-rouge">.card-body</code>. Úselo siempre que necesite una sección acolchada dentro de una tarjeta.</p>

<div class="bd-example" data-example-id="">
<div class="card">
  <div class="card-body">
    Este es un texto dentro del cuerpo de una carta.
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    This is some text within a card body.
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h3 id="titles-text-and-links">Títulos, texto y enlaces.</h3>

<p>Los títulos de las tarjetas se utilizan añadiendo <code class="highlighter-rouge">.card-title</code>  a una <code class="highlighter-rouge">&lt;h*&gt;</code> etiqueta. De la misma manera, los enlaces se agregan y se colocan uno junto al otro al agregarlos <code class="highlighter-rouge">.card-link</code> a una  <code class="highlighter-rouge">&lt;a&gt;</code> etiqueta.</p>

<p>Los subtítulos se utilizan agregando un <code class="highlighter-rouge">.card-subtitle</code> a una  <code class="highlighter-rouge">&lt;h*&gt;</code> etiqueta. Si el  <code class="highlighter-rouge">.card-title</code> y los  <code class="highlighter-rouge">.card-subtitle</code> elementos se colocan en un <code class="highlighter-rouge">.card-body</code> elemento, el título de la tarjeta y los subtítulos están bien alineados.</p>

<div class="bd-example" data-example-id="">
<div class="card" style="width: 20rem;">
  <div class="card-body">
    <h4 class="card-title">Título de la tarjeta</h4>
    <h6 class="card-subtitle mb-2 text-muted">SUBTITULO DE TARJETA</h6>
    <p class="card-text">Algún texto de ejemplo rápido para construir en el título de la tarjeta y completar la mayor parte del contenido de la tarjeta.</p>
    <a href="#" class="card-link">Enlace de tarjeta</a>
    <a href="#" class="card-link">Otro enlace</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span> <span class="na">style=</span><span class="s">"width: 20rem;"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"card-subtitle mb-2 text-muted"</span><span class="nt">&gt;</span>Card subtitle<span class="nt">&lt;/h6&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card's content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"card-link"</span><span class="nt">&gt;</span>Card link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"card-link"</span><span class="nt">&gt;</span>Another link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h3 id="images">Imágenes</h3>

<p><code class="highlighter-rouge">.card-img-top</code> coloca una imagen en la parte superior de la tarjeta. Con <code class="highlighter-rouge">.card-text</code>, se puede agregar texto a la tarjeta. El texto dentro <code class="highlighter-rouge">.card-text</code> también se puede diseñar con las etiquetas HTML estándar.</p>

<div class="bd-example" data-example-id="">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" data-src="holder.js/100px180/?text=Image cap" alt="Card image cap" />
  <div class="card-body">
    <p class="card-text">Algún texto de ejemplo rápido para construir en el título de la tarjeta y completar la mayor parte del contenido de la tarjeta.</p>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span> <span class="na">style=</span><span class="s">"width: 20rem;"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card's content.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h3 id="list-groups">Lista de grupos</h3>

<p>Cree listas de contenido en una tarjeta con un grupo de lista de color.</p>

<div class="bd-example" data-example-id="">
<div class="card" style="width: 20rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span> <span class="na">style=</span><span class="s">"width: 20rem;"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group list-group-flush"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="card card-nav-tabs" style="width: 20rem;">
  <div class="card-header card-header-danger">
    Featured
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-nav-tabs"</span> <span class="na">style=</span><span class="s">"width: 20rem;"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header card-header-danger"</span><span class="nt">&gt;</span>
    Featured
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group list-group-flush"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h3 id="header-and-footer">Encabezado y pié de página</h3>

<p>Agregue un encabezado y / o pie de página opcional dentro de una tarjeta.</p>

<div class="bd-example" data-example-id="">
<div class="card card-nav-tabs">
  <div class="card-header card-header-warning">
    Destacados
  </div>
  <div class="card-body">
    <h4 class="card-title">Tratamiento especial del título</h4>
    <p class="card-text">Con el texto de apoyo a continuación como una introducción natural al contenido adicional.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-nav-tabs"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header card-header-warning"</span><span class="nt">&gt;</span>
    Destacados
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Tratamiento especial del título<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>Con el texto de apoyo a continuación como una introducción natural al contenido adicional..<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Cabeceras de tarjetas pueden ser de estilo mediante la adición<code class="highlighter-rouge">.card-header</code> de <code class="highlighter-rouge">&lt;h*&gt;</code> elementos.</p>

<div class="bd-example" data-example-id="">
<div class="card card-nav-tabs">
  <h4 class="card-header card-header-info">Destacados</h4>
  <div class="card-body">
    <h4 class="card-title">Tratamiento especial del título</h4>
    <p class="card-text">Con el texto de apoyo a continuación como una introducción natural al contenido adicional.</p>
    <a href="#" class="btn btn-primary">Ir a alguna parte</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-nav-tabs"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-header card-header-info"</span><span class="nt">&gt;</span>Featured<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="card card-nav-tabs">
  <div class="card-header card-header-success">
    Citar
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">Alguien famoso en <cite title="Source Title">Título de Fuente</cite></footer>
    </blockquote>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-nav-tabs"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header card-header-success"</span><span class="nt">&gt;</span>
    Quote
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"blockquote mb-0"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer</span> <span class="na">class=</span><span class="s">"blockquote-footer"</span><span class="nt">&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="card card-nav-tabs text-center">
  <div class="card-header card-header-primary">
    Destacados
  </div>
  <div class="card-body">
    <h4 class="card-title">Tratamiento especial del título</h4>
    <p class="card-text">Con el texto de apoyo a continuación como una introducción natural al contenido adicional.</p>
    <a href="#" class="btn btn-primary">Ir a alguna parte</a>
  </div>
  <div class="card-footer text-muted">
   hace 2 días
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-nav-tabs text-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header card-header-primary"</span><span class="nt">&gt;</span>
    Featured
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-footer text-muted"</span><span class="nt">&gt;</span>
    2 days ago
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="text-alignment">Alineación del texto</h2>

<p>Puede cambiar rápidamente la alineación del texto de cualquier tarjeta, en su totalidad o en partes específicas, con nuestras<a href="/docs/1.0/utilities/text/#text-alignment">clases de alineación de texto</a>.</p>

<div class="bd-example" data-example-id="">
<div class="card" style="width: 20rem;">
  <div class="card-body">
    <h4 class="card-title">Tratamiento especial del título</h4>
    <p class="card-text">Con el texto de apoyo a continuación como una introducción natural al contenido adicional.</p>
    <a href="#" class="btn btn-primary">Ir a alguna parte</a>
  </div>
</div>

<div class="card text-center" style="width: 20rem;">
  <div class="card-body">
    <h4 class="card-title">Tratamiento especial del título</h4>
    <p class="card-text">Con el texto de apoyo a continuación como una introducción natural al contenido adicional.</p>
    <a href="#" class="btn btn-primary">Ir a alguna parte</a>
  </div>
</div>

<div class="card text-right" style="width: 20rem;">
  <div class="card-body">
    <h4 class="card-title">Tratamiento especial del título</h4>
    <p class="card-text">Con el texto de apoyo a continuación como una introducción natural al contenido adicional.</p>
    <a href="#" class="btn btn-primary">Ir a alguna parte</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span> <span class="na">style=</span><span class="s">"width: 20rem;"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card text-center"</span> <span class="na">style=</span><span class="s">"width: 20rem;"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card text-right"</span> <span class="na">style=</span><span class="s">"width: 20rem;"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="navigation">Navegación</h2>

<p>Agregue un poco de navegación al encabezado (o bloque) de una tarjeta con los <a href="/docs/1.0/components/navs/">componentes de navegación </a>de Bootstrap.</p>

<div class="bd-example" data-example-id="">
<div class="card text-center">
  <div class="card-header card-header-rose">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Activo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Enlace</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Desaptivado</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h4 class="card-title">Tratamiento especial del título</h4>
    <p class="card-text">Con el texto de apoyo a continuación como una introducción natural al contenido adicional.</p>
    <a href="#" class="btn btn-primary">Ir a alguna parte</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card text-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header card-header-rose"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link active" href="#">Activo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Enlace</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Desaptivado</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h4 class="card-title">Tratamiento especial del título</h4>
    <p class="card-text">Con el texto de apoyo a continuación como una introducción natural al contenido adicional.</p>
    <a href="#" class="btn btn-primary">Ir a alguna parte</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card text-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills card-header-pills"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="images-1">Imágenes</h2>

<p>Las tarjetas incluyen algunas opciones para trabajar con imágenes. Elija entre agregar "tapas de imagen" en cada extremo de una tarjeta, superponer imágenes con el contenido de la tarjeta o simplemente incrustar la imagen en una tarjeta.</p>

<h3 id="image-caps">Gorras de imagen</h3>

<p>Al igual que en los encabezados y pies de página, las tarjetas pueden incluir "tapas de imagen" superior e inferior: imágenes en la parte superior o inferior de una tarjeta.</p>

<div class="bd-example" data-example-id="">
<div class="card mb-3">
  <img class="card-img-top" data-src="holder.js/100px180/" alt="Card image cap" />
  <div class="card-body">
    <h4 class="card-title">Título de la tarjeta</h4>
    <p class="card-text">Esta es una tarjeta más amplia con texto de apoyo a continuación como una introducción natural al contenido adicional. Este contenido es un poco más largo.</p>
    <p class="card-text"><small class="text-muted">Última actualización hace 3 minutos/small></p>
  </div>
</div>
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Título de la tarjeta</h4>
    <p class="card-text">Esta es una tarjeta más amplia con texto de apoyo a continuación como una introducción natural al contenido adicional. Este contenido es un poco más largo.</p>
    <p class="card-text"><small class="text-muted">Última actualización hace 3 minutos</small></p>
  </div>
  <img class="card-img-bottom" data-src="holder.js/100px180/" alt="Card image cap" />
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card mb-3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-bottom"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h3 id="image-overlays">Superposiciones de imágenes</h3>

<p>Convierta una imagen en el fondo de una tarjeta y superponga el texto de su tarjeta. Dependiendo de la imagen, puede o no necesitar estilos o utilidades adicionales.</p>

<div class="bd-example" data-example-id="">
<div class="card bg-dark text-white">
  <img class="card-img" data-src="holder.js/100px270/#55595c:#373a3c/text:Card image" alt="Card image" />
  <div class="card-img-overlay">
    <h4 class="card-title">Título de la tarjeta</h4>
    <p class="card-text">Esta es una tarjeta más amplia con texto de apoyo a continuación como una introducción natural al contenido adicional. Este contenido es un poco más largo.</p>
    <p class="card-text">Última actualización hace 3 minutos</p>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card bg-dark text-white"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-img-overlay"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>


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
