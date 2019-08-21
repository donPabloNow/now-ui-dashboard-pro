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
		<li class="toc-entry toc-h2"><a href="#overview">Visión general</a></li>
		<li class="toc-entry toc-h2"><a href="#form-controls">Controles de formulario</a></li>
		<li class="toc-entry toc-h2"><a href="#examples">Ejemplos</a></li>
		<li class="toc-entry toc-h2"><a href="#checkboxes-and-radios">Checkboxes y radios</a>
			<ul>
				<li class="toc-entry toc-h3"><a href="#default-stacked">Predeterminado (apilado)</a></li>
				<li class="toc-entry toc-h3"><a href="#inline">En línea</a></li>
			</ul>
		</li>
		<li class="toc-entry toc-h2"><a href="#layout">Diseño</a>
			<ul>
				<li class="toc-entry toc-h3"><a href="#form-grid">Cuadrícula de formulario</a>
					<ul>
						<li class="toc-entry toc-h4"><a href="#form-row">Form row</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li class="toc-entry toc-h2"><a href="#disabled-forms">Formas discapacitadas</a>
			<ul>
				<ul>
					<li class="toc-entry toc-h4"><a href="#caveat-with-anchors">Caveat with anchors</a></li>
					<li class="toc-entry toc-h4"><a href="#cross-browser-compatibility">Cross-browser compatibility</a></li>
				</ul>
			</ul>
		</li>
	</ul>
</div>

	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
	<h1 class="bd-title" id="content">Formas</h1>
          <p class="bd-lead">Ejemplos y pautas de uso para los estilos de control de formularios, opciones de diseño y componentes personalizados para crear una amplia variedad de formularios.</p>
          <h2 id="overview">Visión general</h2>

<p>Asegúrese de usar un <code class="highlighter-rouge">type</code>  atributo apropiado en todas las entradas (por ejemplo, <code class="highlighter-rouge">email</code> para la dirección de correo electrónico o <code class="highlighter-rouge">number</code> para información numérica) para aprovechar los controles de entrada más nuevos, como la verificación de correo electrónico, la selección de números y más.</p>

<p>Aquí hay un ejemplo rápido para demostrar los estilos de forma de Bootstrap. Sigue leyendo para obtener documentación sobre las clases requeridas, el diseño del formulario y más.</p>

<div class="bd-example" data-example-id="">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Dirección de correo electrónico</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="correo electrónico" />
    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" />
  </div>
  <div class="form-check mb-3">
      <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="" />
          La primera opción es esta
          <span class="form-check-sign">
              <span class="check"></span>
          </span>
      </label>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputEmail1"</span><span class="nt">&gt;</span>Email address<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail1"</span> <span class="na">aria-describedby=</span><span class="s">"emailHelp"</span> <span class="na">placeholder=</span><span class="s">"Enter email"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;small</span> <span class="na">id=</span><span class="s">"emailHelp"</span> <span class="na">class=</span><span class="s">"form-text text-muted"</span><span class="nt">&gt;</span>We'll never share your email with anyone else.<span class="nt">&lt;/small&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputPassword1"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputPassword1"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check mb-3"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span><span class="nt">&gt;</span>
          Option one is this
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"form-check-sign"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"check"</span><span class="nt">&gt;&lt;/span&gt;</span>
          <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<h2 id="form-controls">Controles de formulario</h2>

<p>Los controles de forma textual, como <code class="highlighter-rouge">&lt;input&gt;</code>s, <code class="highlighter-rouge">&lt;select&gt;</code>s, y <code class="highlighter-rouge">&lt;textarea&gt;</code>s, están diseñados con estilo con la<code class="highlighter-rouge">.form-control</code> clase. Se incluyen estilos para apariencia general, estado de enfoque, tamaño y más.</p>

<p>Asegúrese de explorar nuestras<a href="#custom-forms"> formas personalizadas </a> para más estilos <code class="highlighter-rouge">&lt;select&gt;</code>s.</p>

<div class="bd-example" data-example-id="">
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Dirección de correo electrónico</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" />
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Ejemplo de selección</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Ejemplo de selección múltiple</label>
    <select multiple="" class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Ejemplo de área de texto</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleFormControlInput1"</span><span class="nt">&gt;</span>Email address<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleFormControlInput1"</span> <span class="na">placeholder=</span><span class="s">"<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d9b7b8b4bc99bca1b8b4a9b5bcf7bab6b4">[email&#160;protected]</a>"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleFormControlSelect1"</span><span class="nt">&gt;</span>Example select<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleFormControlSelect1"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
    <span class="nt">&lt;/select&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleFormControlSelect2"</span><span class="nt">&gt;</span>Example multiple select<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;select</span> <span class="na">multiple</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleFormControlSelect2"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;option&gt;</span>1<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>2<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>3<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>4<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>5<span class="nt">&lt;/option&gt;</span>
    <span class="nt">&lt;/select&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleFormControlTextarea1"</span><span class="nt">&gt;</span>Example textarea<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleFormControlTextarea1"</span> <span class="na">rows=</span><span class="s">"3"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<h2 id="examples">Ejemplos</h2>

<div class="bd-example" data-example-id="">
<div class="form-group has-success">
    <label class="control-label">Entrada de éxito</label>
    <input type="text" value="Success" class="form-control form-control-success" />
  </div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span><span class="nt">&gt;</span>Success input<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">value=</span><span class="s">"Success"</span> <span class="na">class=</span><span class="s">"form-control form-control-success"</span> <span class="nt">/&gt;</span>
  <span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="form-group has-danger">
    <label class="control-label">Entrada de error</label>
      <input type="email" value="Error Input" class="form-control form-control-danger" />
  </div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-danger"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span><span class="nt">&gt;</span>Error input<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">value=</span><span class="s">"Error Input"</span> <span class="na">class=</span><span class="s">"form-control form-control-danger"</span> <span class="nt">/&gt;</span>
  <span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text">
        <i class="now-ui-icons users_single-02"></i>
      </div>
    </div>
    <input type="text" class="form-control" placeholder="With Nucleo Icons" />
  </div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-prepend"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-text"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons users_single-02"</span><span class="nt">&gt;&lt;/i&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"With Nucleo Icons"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text">
        <i class="fab fa-dribbble"></i>
      </div>
    </div>
    <input type="text" class="form-control" placeholder="With Font Awesome Icons" />
  </div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-prepend"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-text"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-dribbble"</span><span class="nt">&gt;&lt;/i&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"With Font Awesome Icons"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="checkboxes-and-radios">Checkboxes y radios</h2>

<p>Casillas de verificación por defecto y radios están mejorados con la ayuda de <code class="highlighter-rouge">.form-check</code>, <strong>una sola clase para los dos tipos de entrada que mejora la distribución y el comportamiento de sus elementos HTML </strong>. Las casillas de verificación son para seleccionar una o varias opciones en una lista, mientras que las radios son para seleccionar una opción entre muchas.</p>

<p>Se admiten las casillas de verificación y radios deshabilitados, pero para proporcionar un <code class="highlighter-rouge">not-allowed</code> cursor al desplazar el padre <code class="highlighter-rouge">&lt;label&gt;</code>, deberá agregar la  <code class="highlighter-rouge">.disabled</code> clase al padre <code class="highlighter-rouge">.form-check</code>. La clase desactivada también aclarará el color del texto para ayudar a indicar el estado de la entrada.</p>

<h3 id="default-stacked">Predeterminado (apilado)</h3>

<p>De forma predeterminada, cualquier número de casillas de verificación y radios que sean hermanos inmediatos se apilarán verticalmente y se espaciarán adecuadamente<code class="highlighter-rouge">.form-check</code>.</p>

<div class="bd-example" data-example-id="">
<div class="form-check">
    <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" />
       Opción uno es esto y eso &mdash;segúrate de incluir por qué es bueno
        <span class="form-check-sign">
            <span class="check"></span>
        </span>
    </label>
</div>

<div class="form-check disabled">
    <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" disabled="" />
        La Opción dos  esto  deshabilitada
        <span class="form-check-sign">
            <span class="check"></span>
        </span>
    </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span><span class="nt">&gt;</span>
        Option one is this and that<span class="ni">&amp;mdash;</span>be sure to include why it's great
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"form-check-sign"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"check"</span><span class="nt">&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check disabled"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span> <span class="na">disabled</span><span class="nt">&gt;</span>
        Option two is disabled
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"form-check-sign"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"check"</span><span class="nt">&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="form-check form-check-radio">
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" />
       La radio esta apagada
        <span class="form-check-sign"></span>
    </label>
</div>
<div class="form-check form-check-radio">
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked="" />
        La radio esta encendida
        <span class="form-check-sign"></span>
    </label>
</div>

<div class="form-check form-check-radio disabled">
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" disabled="" />
        La radio desactivada esta apagada
        <span class="form-check-sign"></span>
    </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check form-check-radio"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"exampleRadios"</span> <span class="na">id=</span><span class="s">"exampleRadios1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="nt">&gt;</span>
        Radio is off
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"form-check-sign"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check form-check-radio"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"exampleRadios"</span> <span class="na">id=</span><span class="s">"exampleRadios2"</span> <span class="na">value=</span><span class="s">"option2"</span> <span class="na">checked</span><span class="nt">&gt;</span>
        Radio is on
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"form-check-sign"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check form-check-radio disabled"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"exampleRadios1"</span> <span class="na">id=</span><span class="s">"exampleRadios1"</span> <span class="na">value=</span><span class="s">"option1"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
        Disabled radio is off
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"form-check-sign"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h3 id="inline">En línea</h3>

<p>Agrupe las casillas de verificación o las radios en la misma fila horizontal agregando <code class="highlighter-rouge">.form-check-inline</code> a cualquiera <code class="highlighter-rouge">.form-check</code>.</p>

<div class="bd-example" data-example-id="">
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" /> 1
    <span class="form-check-sign"></span>
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" /> 2
    <span class="form-check-sign"></span>
  </label>
</div>
<div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled="" /> 3
    <span class="form-check-sign"></span>
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check form-check-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox1"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span> 1
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"form-check-sign"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check form-check-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span> 2
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"form-check-sign"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check form-check-inline disabled"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">id=</span><span class="s">"inlineCheckbox3"</span> <span class="na">value=</span><span class="s">"option3"</span> <span class="na">disabled</span><span class="nt">&gt;</span> 3
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"form-check-sign"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="form-check form-check-radio form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" /> 1
    <span class="form-check-sign"></span>
  </label>
</div>
<div class="form-check form-check-radio form-check-inline">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" /> 2
    <span class="form-check-sign"></span>
  </label>
</div>
<div class="form-check form-check-radio form-check-inline disabled">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled="" /> 3
    <span class="form-check-sign"></span>
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check form-check-radio form-check-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio1"</span> <span class="na">value=</span><span class="s">"option1"</span><span class="nt">&gt;</span> 1
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"form-check-sign"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check form-check-radio form-check-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio2"</span> <span class="na">value=</span><span class="s">"option2"</span><span class="nt">&gt;</span> 2
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"form-check-sign"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check form-check-radio form-check-inline disabled"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"inlineRadioOptions"</span> <span class="na">id=</span><span class="s">"inlineRadio3"</span> <span class="na">value=</span><span class="s">"option3"</span> <span class="na">disabled</span><span class="nt">&gt;</span> 3
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"form-check-sign"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="layout">Diseño</h2>

<p>Como Bootstrap se aplica <code class="highlighter-rouge">display: block</code> y <code class="highlighter-rouge">width: 100%</code> para casi todos nuestros controles de formulario, los formularios se apilarán verticalmente de manera predeterminada. Se pueden usar clases adicionales para variar este diseño por forma.</p>

<h3 id="form-grid">Cuadrícula de formulario</h3>

<p>Se pueden construir formas más complejas usando nuestras clases de cuadrícula. Utilícelos para diseños de formularios que requieren múltiples columnas, anchos variados y opciones de alineación adicionales.</p>

<div class="bd-example" data-example-id="">
<form>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name" />
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name" />
    </div>
  </div>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"First name"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Last name"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<h4 id="form-row">Fila de formulario</h4>

<p>También puede cambiar <code class="highlighter-rouge">.row</code> por  <code class="highlighter-rouge">.form-row</code>, una variación de nuestra fila de cuadrícula estándar que anula los canales de columnas predeterminados para diseños más ajustados y compactos.</p>

<div class="bd-example" data-example-id="">
<form>
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name" />
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name" />
    </div>
  </div>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"First name"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Last name"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<p>También se pueden crear diseños más complejos con el sistema de cuadrícula.</p>

<div class="bd-example" data-example-id="">
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Correo</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" />
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" />
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Dirección</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" />
  </div>
  <div class="form-group">
    <label for="inputAddress2">Dirección 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" />
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input type="text" class="form-control" id="inputCity" />
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Estado</label>
      <select id="inputState" class="form-control">
        <option selected="">Escoger...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Cremallera</label>
      <input type="text" class="form-control" id="inputZip" />
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="" />
          Me echa un vistazo
          <span class="form-check-sign">
            <span class="check"></span>
          </span>
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">SRegistrarse</button>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group col-md-6"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputEmail4"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputEmail4"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group col-md-6"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword4"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword4"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputAddress"</span><span class="nt">&gt;</span>Address<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputAddress"</span> <span class="na">placeholder=</span><span class="s">"1234 Main St"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputAddress2"</span><span class="nt">&gt;</span>Address 2<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputAddress2"</span> <span class="na">placeholder=</span><span class="s">"Apartment, studio, or floor"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group col-md-6"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputCity"</span><span class="nt">&gt;</span>City<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputCity"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group col-md-4"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputState"</span><span class="nt">&gt;</span>State<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;select</span> <span class="na">id=</span><span class="s">"inputState"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;option</span> <span class="na">selected</span><span class="nt">&gt;</span>Choose...<span class="nt">&lt;/option&gt;</span>
        <span class="nt">&lt;option&gt;</span>...<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;/select&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group col-md-2"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputZip"</span><span class="nt">&gt;</span>Zip<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputZip"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span><span class="nt">&gt;</span>
          Check me out
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"form-check-sign"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"check"</span><span class="nt">&gt;&lt;/span&gt;</span>
          <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<h2 id="disabled-forms">Formas discapacitadas</h2>

<p>Agregue el <code class="highlighter-rouge">disabled</code> atributo booleano en una entrada para evitar las interacciones del usuario y hacer que se vea más claro.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"disabledInput"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Disabled input here..."</span> <span class="na">disabled</span><span class="nt">&gt;</span></code></pre></figure>

<p>Agregue el  <code class="highlighter-rouge">disabled</code> atributo a <code class="highlighter-rouge">&lt;fieldset&gt;</code> para deshabilitar todos los controles dentro de.</p>

<div class="bd-example" data-example-id="">
<form>
  <fieldset disabled="">
    <div class="form-group">
      <label for="disabledTextInput">Entrada desactivada</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" />
    </div>
    <div class="form-group">
      <label for="disabledSelect">Menú de selección deshabilitado</label>
      <select id="disabledSelect" class="form-control">
        <option>Menú de selección deshabilitado/option>
      </select>
    </div>
    <div class="form-check">
      <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="" />
          No me puede sacar
          <span class="form-check-sign">
            <span class="check"></span>
          </span>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </fieldset>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form&gt;</span>
  <span class="nt">&lt;fieldset</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"disabledTextInput"</span><span class="nt">&gt;</span>Disabled input<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">id=</span><span class="s">"disabledTextInput"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Disabled input"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"disabledSelect"</span><span class="nt">&gt;</span>Disabled select menu<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;select</span> <span class="na">id=</span><span class="s">"disabledSelect"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;option&gt;</span>Disabled select<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;/select&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span><span class="nt">&gt;</span>
          Can't check me out
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"form-check-sign"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"check"</span><span class="nt">&gt;&lt;/span&gt;</span>
          <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/fieldset&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

<div class="bd-callout bd-callout-warning">
<h4 id="caveat-with-anchors">Advertencia con anclajes</h4>

<p>Por defecto, los navegadores tratar a todos los controles de forma nativa (<code class="highlighter-rouge">&lt;input&gt;</code>, <code class="highlighter-rouge">&lt;select&gt;</code> y <code class="highlighter-rouge">&lt;button&gt;</code> elementos) dentro de una <code class="highlighter-rouge">&lt;fieldset disabled&gt;</code> como discapacitados, evitando tanto las interacciones de teclado y ratón sobre ellos. Sin embargo, si su formulario también incluye <code class="highlighter-rouge">&lt;a ... class="btn btn-*"&gt;</code> elementos, solo se les dará un estilo de <code class="highlighter-rouge">pointer-events: none</code>. Como se señaló en la sección sobre el <a href="/docs/1.0/components/buttons/#disabled-state">estado deshabilitado para botones </a> (y específicamente en la subsección para elementos de anclaje), esta propiedad CSS aún no está estandarizada y no es totalmente compatible con Opera 18 y versiones posteriores, o en Internet Explorer 10, y ganó No impida que los usuarios del teclado puedan enfocar o activar estos enlaces. Para estar seguro, use JavaScript personalizado para deshabilitar tales enlaces.</p>
</div>

<div class="bd-callout bd-callout-danger">
<h4 id="cross-browser-compatibility">Compatibilidad entre navegadores</h4>

<p>Mientras que Bootstrap aplicará estos estilos en todos los navegadores, Internet Explorer 11 y las versiones anteriores no admiten completamente el <code class="highlighter-rouge">disabled</code> atributo en a <code class="highlighter-rouge">&lt;fieldset&gt;</code>. Use JavaScript personalizado para deshabilitar el conjunto de campos en estos navegadores.</p>
</div>

<!-- ### File browser -->


<div class="bd-example" data-example-id="">
<div class="fileinput fileinput-new text-center" data-provides="fileinput">
    <div class="fileinput-new thumbnail img-raised">
        <img src="http://style.anu.edu.au/_anu/4/images/placeholders/person_8x10.png" alt="...">
    </div>
    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
    <div>
        <span class="btn btn-raised btn-round btn-default btn-file">
            <span class="fileinput-new">Seleccionar imagen</span>
            <span class="fileinput-exists">Change</span>
            <input type="file" name="..." />
        </span>
        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
    </div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"fileinput fileinput-new text-center"</span> <span class="na">data-provides=</span><span class="s">"fileinput"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"fileinput-new thumbnail img-raised"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"http://style.anu.edu.au/_anu/4/images/placeholders/person_8x10.png"</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"fileinput-preview fileinput-exists thumbnail img-raised"</span><span class="nt">&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"btn btn-raised btn-round btn-default btn-file"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"fileinput-new"</span><span class="nt">&gt;</span>Select image<span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"fileinput-exists"</span><span class="nt">&gt;</span>Change<span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"file"</span> <span class="na">name=</span><span class="s">"..."</span> <span class="nt">/&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#pablo"</span> <span class="na">class=</span><span class="s">"btn btn-danger btn-round fileinput-exists"</span> <span class="na">data-dismiss=</span><span class="s">"fileinput"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-times"</span><span class="nt">&gt;&lt;/i&gt;</span> Remove<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>


<p>Si desea ver más ejemplos y propiedades, consulte la <strong><a href="http://getbootstrap.com/docs/4.0/components/forms/" target="_blank">  Documentación oficial de Bootstrap</a></strong>.</p>


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
