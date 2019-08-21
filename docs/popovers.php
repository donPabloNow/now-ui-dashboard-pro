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
			<li class="toc-entry toc-h2"><a href="#static-popover">Popover estático</a>
				<ul>
					<li class="toc-entry toc-h3"><a href="#popover-top">Popover derecha</a></li>
					<li class="toc-entry toc-h3"><a href="#popover-right">Popover right</a></li>
					<li class="toc-entry toc-h3"><a href="#popover-bottom">Parte inferior de popover</a></li>
					<li class="toc-entry toc-h3"><a href="#popover-left">Popover izquierda</a></li>
				</ul>
			</li>
			<li class="toc-entry toc-h2"><a href="#live-demo">Edemo en vivo</a>
				<ul>
					<li class="toc-entry toc-h3"><a href="#four-directions">Cuatro direcciones</a></li>
					<li class="toc-entry toc-h3"><a href="#dismiss-on-next-click">Descartar en el siguiente clic</a>
						<ul>
							<li class="toc-entry toc-h4"><a href="#specific-markup-required-for-dismiss-on-next-click">Specific markup required for dismiss-on-next-click</a></li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>

	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">

	<h1 class="bd-title" id="content">Popovers</h1>
          <p class="bd-lead">Documentación y ejemplos para agregar elementos emergentes de Bootstrap, como los que se encuentran en iOS, a cualquier elemento de su sitio.</p>
          <h2 id="static-popover">Popover estático</h2>

<p>Hay cuatro opciones disponibles: superior, derecha, inferior e izquierda alineadas.</p>

<div class="bd-example bd-example-popover-static">
  <div class="popover bs-popover-top bs-popover-top-docs">
    <div class="arrow"></div>
    <h3 class="popover-header">Popover top</h3>
    <div class="popover-body">
      <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
    </div>
  </div>

  <div class="popover bs-popover-right bs-popover-right-docs">
    <div class="arrow"></div>
    <h3 class="popover-header">Popover right</h3>
    <div class="popover-body">
      <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
    </div>
  </div>

  <div class="popover bs-popover-bottom bs-popover-bottom-docs">
    <div class="arrow"></div>
    <h3 class="popover-header">Popover bottom</h3>
    <div class="popover-body">
      <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
    </div>
  </div>

  <div class="popover bs-popover-left bs-popover-left-docs">
    <div class="arrow"></div>
    <h3 class="popover-header">Popover left</h3>
    <div class="popover-body">
      <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
    </div>
  </div>

  <div class="clearfix"></div>
</div>

<h2 id="live-demo">Demo en vivo</h2>

<div class="bd-example" data-example-id="">
<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" data-container="body" data-original-title="Popover Title" data-content="And here's some amazing content. It's very engaging. Right?" data-color="primary">Click to toggle popover</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-danger"</span> <span class="na">data-toggle=</span><span class="s">"popover"</span> <span class="na">data-container=</span><span class="s">"body"</span> <span class="na">data-original-title=</span><span class="s">"Popover Title"</span> <span class="na">data-content=</span><span class="s">"And here's some amazing content. It's very engaging. Right?"</span> <span class="na">data-color=</span><span class="s">"primary"</span><span class="nt">&gt;</span>Click to toggle popover<span class="nt">&lt;/button&gt;</span></code></pre></div>

<h3 id="four-directions">Cuatro direcciones</h3>

<div class="bd-example popover-demo">
  <div class="bd-example-popovers">
  <button type="button" class="btn btn-default" data-container="body" data-original-title="Popover On Left" data-toggle="popover" data-placement="left" data-content="Here will be some very useful information about his popover." data-color="primary">
    On left
  </button>
  <button type="button" class="btn btn-default" data-container="body" data-original-title="Popover on Top" data-toggle="popover" data-placement="top" data-content="Here will be some very useful information about his popover.">
    On top
  </button>
  <button type="button" class="btn btn-default" data-container="body" data-original-title="Popover on Right" data-toggle="popover" data-placement="right" data-content="Here will be some very useful information about his popover. Here will be some very useful information about his popover.">
    On right
  </button>
  <button type="button" class="btn btn-default" data-container="body" data-original-title="Popover on Bottom" data-toggle="popover" data-placement="bottom" data-content="Here will be some very useful information about his popover.">
    On bottom
  </button>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-container=</span><span class="s">"body"</span> <span class="na">data-toggle=</span><span class="s">"popover"</span> <span class="na">data-placement=</span><span class="s">"top"</span> <span class="na">data-content=</span><span class="s">"Vivamus sagittis lacus vel augue laoreet rutrum faucibus."</span><span class="nt">&gt;</span>
  Popover on top
<span class="nt">&lt;/button&gt;</span>

<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-container=</span><span class="s">"body"</span> <span class="na">data-toggle=</span><span class="s">"popover"</span> <span class="na">data-placement=</span><span class="s">"right"</span> <span class="na">data-content=</span><span class="s">"Vivamus sagittis lacus vel augue laoreet rutrum faucibus."</span><span class="nt">&gt;</span>
  Popover on right
<span class="nt">&lt;/button&gt;</span>

<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-container=</span><span class="s">"body"</span> <span class="na">data-toggle=</span><span class="s">"popover"</span> <span class="na">data-placement=</span><span class="s">"bottom"</span> <span class="na">data-content=</span><span class="s">"Vivamus
sagittis lacus vel augue laoreet rutrum faucibus."</span><span class="nt">&gt;</span>
  Popover on bottom
<span class="nt">&lt;/button&gt;</span>

<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-container=</span><span class="s">"body"</span> <span class="na">data-toggle=</span><span class="s">"popover"</span> <span class="na">data-placement=</span><span class="s">"left"</span> <span class="na">data-content=</span><span class="s">"Vivamus sagittis lacus vel augue laoreet rutrum faucibus."</span><span class="nt">&gt;</span>
  Popover on left
<span class="nt">&lt;/button&gt;</span></code></pre></figure>

<h3 id="dismiss-on-next-click">Descartar en el siguiente clic</h3>

<p>Utilice el  <code class="highlighter-rouge">focus</code> disparador para descartar las ventanas emergentes en el siguiente clic del usuario de un elemento diferente que el elemento de alternancia.</p>

<div class="bd-callout bd-callout-danger">
<h4 id="specific-markup-required-for-dismiss-on-next-click">Marcado específico requerido para descartar al siguiente clic</h4>

<p>Para un comportamiento adecuado entre navegadores y plataformas cruzadas, debe usar la <code class="highlighter-rouge">&lt;a&gt;</code> etiqueta, <em>no</em> la <code class="highlighter-rouge">&lt;button&gt;</code> etiqueta, y también debe incluir un <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/tabindex"><code class="highlighter-rouge">tabindex</code></a> atributo.</p>
</div>

<div class="bd-example" data-example-id="">
<a tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">tabindex=</span><span class="s">"0"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-danger"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"popover"</span> <span class="na">data-trigger=</span><span class="s">"focus"</span> <span class="na">title=</span><span class="s">"Dismissible popover"</span> <span class="na">data-content=</span><span class="s">"And here's some amazing content. It's very engaging. Right?"</span><span class="nt">&gt;</span>Dismissible popover<span class="nt">&lt;/a&gt;</span></code></pre></div>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'.popover-dismiss'</span><span class="p">).</span><span class="nx">popover</span><span class="p">({</span>
  <span class="na">trigger</span><span class="p">:</span> <span class="s1">'focus'</span>
<span class="p">})</span></code></pre></figure>

<p>Si desea ver más ejemplos y propiedades, consulte la <strong><a href="http://getbootstrap.com/docs/4.0/components/popovers/" target="_blank"> Documentation oficial de Bootstrap</a></strong>.</p>

	</main>


	<!-- Final del contenido de esta pagina con las 2 etiquetas div -->
</div>
</div>

<!-- Libreias js -->
<?php
require_once("inc/script.php");
?>

</body>

</html>
