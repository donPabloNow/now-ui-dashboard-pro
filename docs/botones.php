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
    <li class="toc-entry toc-h2"><a href="#examples">Ejemplos</a></li>
    <li class="toc-entry toc-h2"><a href="#style-buttons">Botones de estilo</a></li>
    <li class="toc-entry toc-h2"><a href="#sizes">Tamaños</a></li>
    <li class="toc-entry toc-h2"><a href="#social-buttons">Botones sociales</a></li>
    <li class="toc-entry toc-h2"><a href="#disabled-state">Estado discapacitado</a></li>
  </ul>
</div>

  <!-- Inicio del contenido de esta pagina -->

  <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
  <h1 class="bd-title" id="content">Botones</h1>
          <p class="bd-lead">Use los estilos de botones personalizados de UI Dashboard para acciones en formularios, cuadros de diálogo y más, con soporte para múltiples tamaños, estados y más.</p>
          <h2 id="examples">Ejemplos</h2>

<p>Ahora, UI Dashboard ha cambiado los estilos de botones predefinidos de Bootstrap, cada uno con su propio propósito semántico, con algunos extras incluidos para un mayor control.</p>

<div class="bd-example" data-example-id="">
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-default">Default</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/button&gt;</span></code></pre></div>

<h2 id="style-buttons">Botones de estilo
</h2>

<div class="bd-example" data-example-id="">
<button class="btn btn-primary">Default</button>
<button class="btn btn-primary btn-round">Round</button>
<button class="btn btn-primary btn-round">
  <i class="now-ui-icons ui-2_favourite-28"></i> With Icon
</button>
<button class="btn btn-primary btn-fab btn-icon btn-round">
  <i class="now-ui-icons ui-2_favourite-28"></i>
</button>
<button class="btn btn-primary btn-neutral">Neutral</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-round"</span><span class="nt">&gt;</span>Round<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-round"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-2_favourite-28"</span><span class="nt">&gt;&lt;/i&gt;</span> With Icon
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-fab btn-icon btn-round"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-2_favourite-28"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-neutral"</span><span class="nt">&gt;</span>Neutral<span class="nt">&lt;/button&gt;</span></code></pre></div>

<h2 id="sizes">Tamaños</h2>

<p>¿Te gustan los botones más grandes o más pequeños? Añadir <code class="highlighter-rouge">.btn-lg</code> o <code class="highlighter-rouge">.btn-sm</code> para tallas adicionales.</p>

<div class="bd-example" data-example-id="">
<button class="btn btn-primary btn-sm">Small</button>
<button class="btn btn-primary">Regular</button>
<button class="btn btn-primary btn-lg">Large</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-sm"</span><span class="nt">&gt;</span>Small<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Regular<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg"</span><span class="nt">&gt;</span>Large<span class="nt">&lt;/button&gt;</span></code></pre></div>

<h2 id="social-buttons">Botones Sociales</h2>

<div class="bd-example" data-example-id="">
<div class="row">
    <div class="col-md-4 col-sm-5">
        <p class="category">Default</p>
        <button class="btn btn-twitter mb-2">
            <i class="fab fa-twitter"></i> Connect with Twitter
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <p class="category">&nbsp;</p>
        <button class="btn btn-icon btn-twitter">
            <i class="fab fa-twitter"></i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <p class="category">&nbsp;</p>
        <button class="btn btn-icon btn-round btn-twitter">
            <i class="fab fa-twitter"></i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <p class="category">Neutral</p>
        <button class="btn btn-icon btn-neutral btn-twitter">
            <i class="fab fa-twitter"></i>
        </button>
    </div>
    <div class="col-md-3 col-sm-4">
        <p class="category">&nbsp;</p>
        <button class="btn btn-neutral btn-twitter">
            <i class="fab fa-twitter"></i> Connect with Twitter
        </button>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-5">
        <button class="btn btn-facebook mb-2">
            <i class="fab fa-facebook-square"></i> Share · 2.2k
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-facebook">
            <i class="fab fa-facebook-f"> </i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-round btn-facebook">
            <i class="fab fa-facebook-f"> </i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-neutral btn-facebook">
            <i class="fab fa-facebook-square"> </i>
        </button>
    </div>
    <div class="col-md-3 col-sm-4">
        <button class="btn btn-neutral btn-facebook">
            <i class="fab fa-facebook-square"></i> Share · 2.2k
        </button>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-5">
        <button class="btn btn-google mb-2">
            <i class="fab fa-google-plus-g"></i> Share on Google+
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon  btn-google">
            <i class="fab fa-google-plus-g"> </i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-round btn-google">
            <i class="fab fa-google-plus-g"> </i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-neutral btn-google">
            <i class="fab fa-google-plus-g"> </i>
        </button>
    </div>
    <div class="col-md-3 col-sm-4">
        <button class="btn btn-neutral btn-google">
            <i class="fab fa-google-plus-g"></i> Share on Google+
        </button>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-5">
        <button class="btn btn-linkedin mb-2">
            <i class="fab fa-linkedin"></i> Connect with Linkedin
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon  btn-linkedin">
            <i class="fab fa-linkedin"></i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-round btn-linkedin">
            <i class="fab fa-linkedin"></i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-neutral btn-linkedin">
            <i class="fab fa-linkedin"></i>
        </button>
    </div>
    <div class="col-md-3 col-sm-4">
        <button class="btn btn-neutral btn-linkedin">
            <i class="fab fa-linkedin"></i> Connect with Linkedin
        </button>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-5">
        <button class="btn btn-pinterest mb-2">
            <i class="fab fa-pinterest"></i> Pint it · 212
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-pinterest">
            <i class="fab fa-pinterest"></i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-round btn-pinterest">
            <i class="fab fa-pinterest"></i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-neutral btn-pinterest">
            <i class="fab fa-pinterest"></i>
        </button>
    </div>
    <div class="col-md-3 col-sm-4">
        <button class="btn btn-neutral btn-pinterest">
            <i class="fab fa-pinterest"></i> Pint it · 212
        </button>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-5">
        <button class="btn btn-youtube mb-2">
            <i class="fab fa-youtube"></i> View on Youtube
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-youtube">
            <i class="fab fa-youtube"> </i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-round btn-youtube">
            <i class="fab fa-youtube"> </i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-neutral btn-youtube">
            <i class="fab fa-youtube"> </i>
        </button>
    </div>
    <div class="col-md-3 col-sm-4">
        <button class="btn btn-neutral btn-youtube">
            <i class="fab fa-youtube"></i> View on Youtube
        </button>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-5">
        <button class="btn btn-tumblr mb-2">
            <i class="fab fa-tumblr-square"></i> Repost
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon  btn-tumblr">
            <i class="fab fa-tumblr"> </i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-round btn-tumblr">
            <i class="fab fa-tumblr"> </i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-neutral btn-tumblr">
            <i class="fab fa-tumblr-square"> </i>
        </button>
    </div>
    <div class="col-md-3 col-sm-4">
        <button class="btn btn-neutral btn-tumblr">
            <i class="fab fa-tumblr-square"></i> Repost
        </button>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-5">
        <button class="btn btn-github mb-2">
            <i class="fab fa-github"></i> Connect with Github
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon  btn-github">
            <i class="fab fa-github"></i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-round btn-github">
            <i class="fab fa-github"></i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-neutral btn-github">
            <i class="fab fa-github"></i>
        </button>
    </div>
    <div class="col-md-3 col-sm-4">
        <button class="btn btn-neutral btn-github">
            <i class="fab fa-github"></i> Connect with Github
        </button>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-5">
        <button class="btn btn-behance mb-2">
            <i class="fab fa-behance-square"></i> Follow us
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon  btn-behance">
            <i class="fab fa-behance"></i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-round btn-behance">
            <i class="fab fa-behance"></i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-neutral btn-behance">
            <i class="fab fa-behance"></i>
        </button>
    </div>
    <div class="col-md-3 col-sm-4">
        <button class="btn btn-neutral btn-behance">
            <i class="fab fa-behance-square"></i> Follow us
        </button>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-5">
        <button class="btn btn-dribbble mb-2">
            <i class="fab fa-dribbble"></i> Find us on Dribble
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon  btn-dribbble">
            <i class="fab fa-dribbble"></i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-round btn-dribbble">
            <i class="fab fa-dribbble"></i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-neutral btn-dribbble">
            <i class="fab fa-dribbble"></i>
        </button>
    </div>
    <div class="col-md-3 col-sm-4">
        <button class="btn btn-neutral btn-dribbble">
            <i class="fab fa-dribbble"></i> Find us on Dribble
        </button>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-5">
        <button class="btn btn-reddit mb-2">
            <i class="fab fa-reddit"></i> Repost · 232
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon  btn-reddit">
            <i class="fab fa-reddit"></i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-round btn-reddit">
            <i class="fab fa-reddit"></i>
        </button>
    </div>
    <div class="col-md-1 col-sm-1">
        <button class="btn btn-icon btn-neutral btn-reddit">
            <i class="fab fa-reddit"></i>
        </button>
    </div>
    <div class="col-md-3 col-sm-4">
        <button class="btn btn-neutral btn-reddit">
            <i class="fab fa-reddit"></i> Repost · 232
        </button>
    </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4 col-sm-5"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"category"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-twitter mb-2"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-twitter"</span><span class="nt">&gt;&lt;/i&gt;</span> Connect with Twitter
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"category"</span><span class="nt">&gt;</span><span class="ni">&amp;nbsp;</span><span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-twitter"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-twitter"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"category"</span><span class="nt">&gt;</span><span class="ni">&amp;nbsp;</span><span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-round btn-twitter"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-twitter"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"category"</span><span class="nt">&gt;</span>Neutral<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-neutral btn-twitter"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-twitter"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-sm-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"category"</span><span class="nt">&gt;</span><span class="ni">&amp;nbsp;</span><span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-neutral btn-twitter"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-twitter"</span><span class="nt">&gt;&lt;/i&gt;</span> Connect with Twitter
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4 col-sm-5"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-facebook mb-2"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-facebook-square"</span><span class="nt">&gt;&lt;/i&gt;</span> Share · 2.2k
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-facebook"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-facebook-f"</span><span class="nt">&gt;</span> <span class="nt">&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-round btn-facebook"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-facebook-f"</span><span class="nt">&gt;</span> <span class="nt">&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-neutral btn-facebook"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-facebook-square"</span><span class="nt">&gt;</span> <span class="nt">&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-sm-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-neutral btn-facebook"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-facebook-square"</span><span class="nt">&gt;&lt;/i&gt;</span> Share · 2.2k
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4 col-sm-5"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-google mb-2"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-google-plus-g"</span><span class="nt">&gt;&lt;/i&gt;</span> Share on Google+
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon  btn-google"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-google-plus-g"</span><span class="nt">&gt;</span> <span class="nt">&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-round btn-google"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-google-plus-g"</span><span class="nt">&gt;</span> <span class="nt">&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-neutral btn-google"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-google-plus-g"</span><span class="nt">&gt;</span> <span class="nt">&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-sm-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-neutral btn-google"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-google-plus-g"</span><span class="nt">&gt;&lt;/i&gt;</span> Share on Google+
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4 col-sm-5"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-linkedin mb-2"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-linkedin"</span><span class="nt">&gt;&lt;/i&gt;</span> Connect with Linkedin
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon  btn-linkedin"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-linkedin"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-round btn-linkedin"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-linkedin"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-neutral btn-linkedin"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-linkedin"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-sm-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-neutral btn-linkedin"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-linkedin"</span><span class="nt">&gt;&lt;/i&gt;</span> Connect with Linkedin
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4 col-sm-5"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-pinterest mb-2"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-pinterest"</span><span class="nt">&gt;&lt;/i&gt;</span> Pint it · 212
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-pinterest"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-pinterest"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-round btn-pinterest"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-pinterest"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-neutral btn-pinterest"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-pinterest"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-sm-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-neutral btn-pinterest"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-pinterest"</span><span class="nt">&gt;&lt;/i&gt;</span> Pint it · 212
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4 col-sm-5"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-youtube mb-2"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-youtube"</span><span class="nt">&gt;&lt;/i&gt;</span> View on Youtube
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-youtube"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-youtube"</span><span class="nt">&gt;</span> <span class="nt">&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-round btn-youtube"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-youtube"</span><span class="nt">&gt;</span> <span class="nt">&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-neutral btn-youtube"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-youtube"</span><span class="nt">&gt;</span> <span class="nt">&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-sm-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-neutral btn-youtube"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-youtube"</span><span class="nt">&gt;&lt;/i&gt;</span> View on Youtube
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4 col-sm-5"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-tumblr mb-2"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-tumblr-square"</span><span class="nt">&gt;&lt;/i&gt;</span> Repost
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon  btn-tumblr"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-tumblr"</span><span class="nt">&gt;</span> <span class="nt">&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-round btn-tumblr"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-tumblr"</span><span class="nt">&gt;</span> <span class="nt">&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-neutral btn-tumblr"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-tumblr-square"</span><span class="nt">&gt;</span> <span class="nt">&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-sm-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-neutral btn-tumblr"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-tumblr-square"</span><span class="nt">&gt;&lt;/i&gt;</span> Repost
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4 col-sm-5"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-github mb-2"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-github"</span><span class="nt">&gt;&lt;/i&gt;</span> Connect with Github
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon  btn-github"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-github"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-round btn-github"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-github"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-neutral btn-github"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-github"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-sm-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-neutral btn-github"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-github"</span><span class="nt">&gt;&lt;/i&gt;</span> Connect with Github
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4 col-sm-5"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-behance mb-2"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-behance-square"</span><span class="nt">&gt;&lt;/i&gt;</span> Follow us
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon  btn-behance"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-behance"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-round btn-behance"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-behance"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-neutral btn-behance"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-behance"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-sm-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-neutral btn-behance"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-behance-square"</span><span class="nt">&gt;&lt;/i&gt;</span> Follow us
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4 col-sm-5"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-dribbble mb-2"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-dribbble"</span><span class="nt">&gt;&lt;/i&gt;</span> Find us on Dribble
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon  btn-dribbble"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-dribbble"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-round btn-dribbble"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-dribbble"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-neutral btn-dribbble"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-dribbble"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-sm-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-neutral btn-dribbble"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-dribbble"</span><span class="nt">&gt;&lt;/i&gt;</span> Find us on Dribble
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4 col-sm-5"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-reddit mb-2"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-reddit"</span><span class="nt">&gt;&lt;/i&gt;</span> Repost · 232
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon  btn-reddit"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-reddit"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-round btn-reddit"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-reddit"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1 col-sm-1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-neutral btn-reddit"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-reddit"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 col-sm-4"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-neutral btn-reddit"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-reddit"</span><span class="nt">&gt;&lt;/i&gt;</span> Repost · 232
        <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="disabled-state">Estado discapacitado</h2>

<p>Haga que los botones parezcan inactivos agregando el <code class="highlighter-rouge">disabled</code> atributo booleano a cualquier  <code class="highlighter-rouge">&lt;button&gt;</code> elemento.</p>

<div class="bd-example" data-example-id="">
<button type="button" class="btn btn-lg btn-primary" disabled="">Primary button</button>
<button type="button" class="btn btn-secondary btn-lg" disabled="">Button</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-primary"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Primary button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-lg"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span></code></pre></div>

<p>Los botones desactivados que usan el <code class="highlighter-rouge">&lt;a&gt;</code> elemento se comportan un poco diferente:</p>

<ul>
  <li><code class="highlighter-rouge">&lt;a&gt;</code>no admite el <code class="highlighter-rouge">disabled</code> atributo, por lo que debe agregar la <code class="highlighter-rouge">.disabled</code> clase para que aparezca visualmente deshabilitado.</li>
  <li>Se incluyen algunos estilos amigables con el futuro para deshabilitar todos los <code class="highlighter-rouge">pointer-events</code> botones de anclaje. En los navegadores que admiten esa propiedad, no verá el cursor desactivado.</li>
</ul>

<div class="bd-example" data-example-id="">
<a href="#" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Primary link</a>
<a href="#" class="btn btn-secondary btn-lg disabled" role="button" aria-disabled="true">Link</a>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg disabled"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">aria-disabled=</span><span class="s">"true"</span><span class="nt">&gt;</span>Primary link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-lg disabled"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">aria-disabled=</span><span class="s">"true"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span></code></pre></div>

<p>Si desea ver más ejemplos y propiedades, consulte la <strong><a href="http://getbootstrap.com/docs/4.0/components/buttons/" target="_blank">Documentación oficial de Bootstrap </a></strong>.</p>


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
