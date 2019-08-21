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
			<li class="toc-entry toc-h2"><a href="#examples">Ejemplos</a>
				<ul>
					<li class="toc-entry toc-h3"><a href="#static-demo">Demo estática</a></li>
					<li class="toc-entry toc-h3"><a href="#interactive-demo">Demo interactiva</a></li>
				</ul>
			</li>
			<li class="toc-entry toc-h2"><a href="#usage">Uso</a>
				<ul>
					<li class="toc-entry toc-h3"><a href="#markup">Maregen</a>
						<ul>
							<li class="toc-entry toc-h4"><a href="#making-tooltips-work-for-keyboard-and-assistive-technology-users">Making tooltips work for keyboard and assistive technology users</a></li>
							<li class="toc-entry toc-h4"><a href="#data-attributes-for-individual-tooltips">Data attributes for individual tooltips</a></li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>

	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">

<h1 class="bd-title" id="content">Información sobre herramientas</h1>
          <p class="bd-lead">Documentación y ejemplos para agregar información sobre herramientas Bootstrap personalizada con CSS y JavaScript usando CSS3 para animaciones y atributos de datos para el almacenamiento de títulos local.</p>
          <h2 id="examples">Ejemplos</h2>

<p>Pase el cursor sobre los enlaces de abajo para ver información sobre herramientas:</p>

<div class="bd-example tooltip-demo">
  <p class="muted">Pantalones ajustados en el siguiente nivel <a href="#" data-toggle="tooltip" title="Default tooltip">you probably</a> haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href="#" data-toggle="tooltip" title="Another tooltip">have a</a> terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href="#" data-toggle="tooltip" title="Another one here too">whatever keytar</a>, scenester farm-to-table banksy Austin <a href="#" data-toggle="tooltip" title="The last tip!">twitter handle</a> freegan cred raw denim single-origin coffee viral.
  </p>
</div>

<h3 id="static-demo">Demo estática</h3>

<p>Hay cuatro opciones disponibles: superior, derecha, inferior e izquierda alineadas.</p>

<div class="bd-example bd-example-tooltip-static">
  <div class="tooltip bs-tooltip-top bs-tooltip-top-docs" role="tooltip">
    <div class="arrow"></div>
    <div class="tooltip-inner">
      Tooltip on the top
    </div>
  </div>
  <div class="tooltip bs-tooltip-right bs-tooltip-right-docs" role="tooltip">
    <div class="arrow"></div>
    <div class="tooltip-inner">
      Tooltip on the right
    </div>
  </div>
  <div class="tooltip bs-tooltip-bottom bs-tooltip-bottom-docs" role="tooltip">
    <div class="arrow"></div>
    <div class="tooltip-inner">
      Tooltip on the bottom
    </div>
  </div>
  <div class="tooltip bs-tooltip-left bs-tooltip-left-docs" role="tooltip">
    <div class="arrow"></div>
    <div class="tooltip-inner">
      Tooltip on the left
    </div>
  </div>
</div>

<h3 id="interactive-demo">Demo interactiva</h3>

<p>Pase el cursor sobre los botones de abajo para ver sus sugerencias.</p>

<div class="bd-example tooltip-demo">
  <div class="bd-example-tooltips">
    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-html="true" title="&lt;em&gt;Tooltip&lt;/em&gt; &lt;u&gt;with&lt;/u&gt; &lt;b&gt;HTML&lt;/b&gt;">Tooltip with HTML</button>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-toggle=</span><span class="s">"tooltip"</span> <span class="na">data-placement=</span><span class="s">"top"</span> <span class="na">title=</span><span class="s">"Tooltip on top"</span><span class="nt">&gt;</span>
  Tooltip on top
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-toggle=</span><span class="s">"tooltip"</span> <span class="na">data-placement=</span><span class="s">"right"</span> <span class="na">title=</span><span class="s">"Tooltip on right"</span><span class="nt">&gt;</span>
  Tooltip on right
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-toggle=</span><span class="s">"tooltip"</span> <span class="na">data-placement=</span><span class="s">"bottom"</span> <span class="na">title=</span><span class="s">"Tooltip on bottom"</span><span class="nt">&gt;</span>
  Tooltip on bottom
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-toggle=</span><span class="s">"tooltip"</span> <span class="na">data-placement=</span><span class="s">"left"</span> <span class="na">title=</span><span class="s">"Tooltip on left"</span><span class="nt">&gt;</span>
  Tooltip on left
<span class="nt">&lt;/button&gt;</span></code></pre></figure>

<p>Y con HTML personalizado añadido:</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-toggle=</span><span class="s">"tooltip"</span> <span class="na">data-html=</span><span class="s">"true"</span> <span class="na">title=</span><span class="s">"&lt;em&gt;Tooltip&lt;/em&gt; &lt;u&gt;with&lt;/u&gt; &lt;b&gt;HTML&lt;/b&gt;"</span><span class="nt">&gt;</span>
  Tooltip with HTML
<span class="nt">&lt;/button&gt;</span></code></pre></figure>

<h2 id="usage">Uso</h2>

<p>El complemento de información sobre herramientas genera contenido y marcado bajo demanda, y de manera predeterminada coloca información sobre herramientas después de su elemento desencadenante.</p>

<p>Activar la información sobre herramientas a través de JavaScript:</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#example'</span><span class="p">).</span><span class="nx">tooltip</span><span class="p">(</span><span class="nx">options</span><span class="p">)</span></code></pre></figure>

<h3 id="markup">Margen</h3>

<p>El marcado requerido para una información sobre herramientas es solo un <code class="highlighter-rouge">data</code> atributo y <code class="highlighter-rouge">title</code> en el elemento HTML que desea tener una información sobre herramientas. El marcado generado de una información sobre herramientas es bastante simple, aunque requiere una posición (de forma predeterminada, establecida en <code class="highlighter-rouge">top</code> el complemento).</p>

<div class="bd-callout bd-callout-warning">
<h4 id="making-tooltips-work-for-keyboard-and-assistive-technology-users">Hacer que la información sobre herramientas funcione para los usuarios de teclados y tecnologías de asistencia.</h4>

<p>You should only add tooltips to HTML elements that are traditionally keyboard-focusable and interactive (such as links or form controls). Although arbitrary HTML elements (such as <code class="highlighter-rouge">&lt;span&gt;</code>s) can be made focusable by adding the <code class="highlighter-rouge">tabindex="0"</code> attribute, this will add potentially annoying and confusing tab stops on non-interactive elements for keyboard users. In addition, most assistive technologies currently do not announce the tooltip in this situation.</p>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- HTML to write --&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">data-toggle=</span><span class="s">"tooltip"</span> <span class="na">title=</span><span class="s">"Some tooltip text!"</span><span class="nt">&gt;</span>Hover over me<span class="nt">&lt;/a&gt;</span>

<span class="c">&lt;!-- Generated markup by the plugin --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tooltip bs-tooltip-top"</span> <span class="na">role=</span><span class="s">"tooltip"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"arrow"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tooltip-inner"</span><span class="nt">&gt;</span>
    Some tooltip text!
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<div class="bd-callout bd-callout-info">
<h4 id="data-attributes-for-individual-tooltips">Atributos de datos para información sobre herramientas individuales</h4>

<p>Las opciones para información sobre herramientas individuales pueden especificarse alternativamente mediante el uso de atributos de datos, como se explicó anteriormente.</p>
</div>

<p>Si desea ver más ejemplos y propiedades, consulte la  <strong><a href="http://getbootstrap.com/docs/4.0/components/tooltips/" target="_blank"> Documentación oficial de Bootstrap </a></strong>.</p>

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
