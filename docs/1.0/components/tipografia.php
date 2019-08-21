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
			<ul>
				<li class="toc-entry toc-h2"><a href="#headings">Encabezados</a></li>
			</ul>
			<li class="toc-entry toc-h1"><a href="#h1-bootstrap-heading">h1 Rumbo de arranque</a>
				<ul>
					<li class="toc-entry toc-h2"><a href="#h2-bootstrap-heading">h2 Rumbo de arranque</a>
						<ul>
							<li class="toc-entry toc-h3"><a href="#h3-bootstrap-heading">h3. Bootstrap heading</a>
								<ul>
									<li class="toc-entry toc-h4"><a href="#h4-bootstrap-heading">h4. Bootstrap heading</a>
										<ul>
											<li class="toc-entry toc-h5"><a href="#h5-bootstrap-heading">h5. Bootstrap heading</a>
												<ul>
													<li class="toc-entry toc-h6"><a href="#h6-bootstrap-heading">h6. Bootstrap heading</a></li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="toc-entry toc-h3"><a href="#customizing-headings">Customizing headings</a></li>
						</ul>
					</li>
					<li class="toc-entry toc-h2"><a href="#blockquotes">Blockquotes</a>
						<ul>
							<li class="toc-entry toc-h3"><a href="#naming-a-source">Naming a source</a></li>
							<li class="toc-entry toc-h3"><a href="#alignment">Alignment</a></li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>

	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
	 <h1 class="bd-title" id="content">Tipografía</h1>
          <p class="bd-lead">Documentación y ejemplos de tipografía de Bootstrap, que incluyen configuraciones globales, encabezados, texto del cuerpo, listas y más.</p>
          <h2 id="headings">Encabezados</h2>

<p>Todos los encabezados HTML, a <code class="highlighter-rouge">&lt;h1&gt;</code> través <code class="highlighter-rouge">&lt;h6&gt;</code>, están disponibles.</p>

<table>
  <thead>
    <tr>
      <th>Heading</th>
      <th>Example</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <p><code class="highlighter-rouge">&lt;h1&gt;&lt;/h1&gt;</code></p>

      </td>
      <td><span class="h1">h1. Bootstrap heading</span></td>
    </tr>
    <tr>
      <td>
        <p><code class="highlighter-rouge">&lt;h2&gt;&lt;/h2&gt;</code></p>

      </td>
      <td><span class="h2">h2. Bootstrap heading</span></td>
    </tr>
    <tr>
      <td>
        <p><code class="highlighter-rouge">&lt;h3&gt;&lt;/h3&gt;</code></p>

      </td>
      <td><span class="h3">h3. Bootstrap heading</span></td>
    </tr>
    <tr>
      <td>
        <p><code class="highlighter-rouge">&lt;h4&gt;&lt;/h4&gt;</code></p>

      </td>
      <td><span class="h4">h4. Bootstrap heading</span></td>
    </tr>
    <tr>
      <td>
        <p><code class="highlighter-rouge">&lt;h5&gt;&lt;/h5&gt;</code></p>

      </td>
      <td><span class="h5">h5. Bootstrap heading</span></td>
    </tr>
    <tr>
      <td>
        <p><code class="highlighter-rouge">&lt;h6&gt;&lt;/h6&gt;</code></p>

      </td>
      <td><span class="h6">h6. Bootstrap heading</span></td>
    </tr>
  </tbody>
</table>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1&gt;</span>h1. Bootstrap heading<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h2&gt;</span>h2. Bootstrap heading<span class="nt">&lt;/h2&gt;</span>
<span class="nt">&lt;h3&gt;</span>h3. Bootstrap heading<span class="nt">&lt;/h3&gt;</span>
<span class="nt">&lt;h4&gt;</span>h4. Bootstrap heading<span class="nt">&lt;/h4&gt;</span>
<span class="nt">&lt;h5&gt;</span>h5. Bootstrap heading<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;h6&gt;</span>h6. Bootstrap heading<span class="nt">&lt;/h6&gt;</span></code></pre></figure>

<p><code class="highlighter-rouge">.h1</code> Las  <code class="highlighter-rouge">.h6</code> clases también están disponibles, por ejemplo, cuando desea combinar el estilo de fuente de un encabezado pero no puede utilizar el elemento HTML asociado.</p>

<div class="bd-example" data-example-id="">
<p class="h1">h1. Bootstrap heading</p>
<p class="h2">h2. Bootstrap heading</p>
<p class="h3">h3. Bootstrap heading</p>
<p class="h4">h4. Bootstrap heading</p>
<p class="h5">h5. Bootstrap heading</p>
<p class="h6">h6. Bootstrap heading</p>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h1"</span><span class="nt">&gt;</span>h1. Bootstrap heading<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h2"</span><span class="nt">&gt;</span>h2. Bootstrap heading<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h3"</span><span class="nt">&gt;</span>h3. Bootstrap heading<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h4"</span><span class="nt">&gt;</span>h4. Bootstrap heading<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h5"</span><span class="nt">&gt;</span>h5. Bootstrap heading<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h6"</span><span class="nt">&gt;</span>h6. Bootstrap heading<span class="nt">&lt;/p&gt;</span></code></pre></div>

<p><code class="highlighter-rouge">.title</code>, para cuando quieras algunos títulos más audaces con una familia de fuentes diferente.</p>

<div class="bd-example" data-example-id="">
<h1 class="title">h1. Bootstrap heading</h1>
<h2 class="title">h2. Bootstrap heading</h2>
<h3 class="title">h3. Bootstrap heading</h3>
<h4 class="title">h4. Bootstrap heading</h4>
<h5 class="title">h5. Bootstrap heading</h5>
<h6 class="title">h6. Bootstrap heading</h6>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>h1. Bootstrap heading<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h2</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>h2. Bootstrap heading<span class="nt">&lt;/h2&gt;</span>
<span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>h3. Bootstrap heading<span class="nt">&lt;/h3&gt;</span>
<span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>h4. Bootstrap heading<span class="nt">&lt;/h4&gt;</span>
<span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>h5. Bootstrap heading<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>h6. Bootstrap heading<span class="nt">&lt;/h6&gt;</span></code></pre></div>

<h3 id="customizing-headings">Personalizar encabezados</h3>

<p>Use las clases de utilidades incluidas para recrear el pequeño texto del encabezado secundario de Bootstrap 3.</p>

<div class="bd-example">
  <span class="h3">
    Fancy display heading
    <small class="text-muted">con texto secundario descolorido</small>
  </span>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h3&gt;</span>
  Fancy display heading
  <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>With faded secondary text<span class="nt">&lt;/small&gt;</span>
<span class="nt">&lt;/h3&gt;</span></code></pre></figure>

<h2 id="blockquotes">Blockquotes</h2>

<p>Para citar bloques de contenido de otra fuente dentro de su documento. Envuelva <code class="highlighter-rouge">&lt;blockquote class="blockquote"&gt;</code> alrededor de cualquier <abbr title="HyperText Markup Language">HTML</abbr> como la cita.</p>

<div class="bd-example" data-example-id="">
<blockquote class="blockquote">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
</blockquote>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"blockquote"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span></code></pre></div>

<h3 id="naming-a-source">Nombrando una fuente</h3>

<p>Agregue un <code class="highlighter-rouge">&lt;footer class="blockquote-footer"&gt;</code> fpara identificar la fuente. Envuelve el nombre del trabajo fuente en <code class="highlighter-rouge">&lt;cite&gt;</code>.</p>

<div class="bd-example" data-example-id="">
<blockquote class="blockquote">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"blockquote"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;footer</span> <span class="na">class=</span><span class="s">"blockquote-footer"</span><span class="nt">&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span></code></pre></div>

<h3 id="alignment">Alineación</h3>

<p>Use las utilidades de texto según sea necesario para cambiar la alineación de su blockquote</p>

<div class="bd-example" data-example-id="">
<blockquote class="blockquote text-center">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"blockquote text-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;footer</span> <span class="na">class=</span><span class="s">"blockquote-footer"</span><span class="nt">&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<blockquote class="blockquote text-right">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"blockquote text-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;footer</span> <span class="na">class=</span><span class="s">"blockquote-footer"</span><span class="nt">&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span></code></pre></div>


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
