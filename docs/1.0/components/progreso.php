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
			<li class="toc-entry toc-h2"><a href="#backgrounds">Antecedentes</a></li>
		</ul>
	</div>

	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
<h1 class="bd-title" id="content">Progreso</h1>
          <p class="bd-lead"></p>
          <h2 id="backgrounds">Antecedentes</h2>

<p>Use clases de utilidad de fondo para cambiar la apariencia de las barras de progreso individuales.</p>

<div class="bd-example" data-example-id="">
<div class="progress-container">
    <span class="progress-badge">DEFECTO</span>
    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
            <span class="progress-value">25%</span>
        </div>
    </div>
</div>
<div class="progress-container progress-primary">
    <span class="progress-badge">Primario</span>
    <div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
            <span class="progress-value">60%</span>
        </div>
    </div>
</div>
<div class="progress-container progress-danger">
    <span class="progress-badge">PELIGRO</span>
    <div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
            <span class="progress-value">60%</span>
        </div>
    </div>
</div>
<div class="progress-container progress-warning">
    <span class="progress-badge">ADVERTENCIA</span>
    <div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
            <span class="progress-value">60%</span>
        </div>
    </div>
</div>
<div class="progress-container progress-success">
    <span class="progress-badge">ÉXITO</span>
    <div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
            <span class="progress-value">60%</span>
        </div>
    </div>
</div>
<div class="progress-container progress-info">
    <span class="progress-badge">INFORMACIÓN</span>
    <div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
            <span class="progress-value">60%</span>
        </div>
    </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-badge"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"60"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 25%;"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-value"</span><span class="nt">&gt;</span>25%<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-container progress-primary"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-badge"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-warning"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"60"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 60%;"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-value"</span><span class="nt">&gt;</span>60%<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-container progress-danger"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-badge"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-warning"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"60"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 60%;"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-value"</span><span class="nt">&gt;</span>60%<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-container progress-warning"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-badge"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-warning"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"60"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 60%;"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-value"</span><span class="nt">&gt;</span>60%<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-container progress-success"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-badge"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-warning"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"60"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 60%;"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-value"</span><span class="nt">&gt;</span>60%<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-container progress-info"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-badge"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-warning"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"60"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 60%;"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-value"</span><span class="nt">&gt;</span>60%<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<!-- ## Multiple bars

Include multiple progress bars in a progress component if you need.


<div class="bd-example" data-example-id="">
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 15%"</span> <span class="na">aria-valuenow=</span><span class="s">"15"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-success"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 30%"</span> <span class="na">aria-valuenow=</span><span class="s">"30"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-info"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 20%"</span> <span class="na">aria-valuenow=</span><span class="s">"20"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
 -->

<!-- ## Striped

Add `.progress-bar-striped` to any `.progress-bar` to apply a stripe via CSS gradient over the progress bar's background color.


<div class="bd-example" data-example-id="">
<div class="progress">
  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-striped"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 10%"</span> <span class="na">aria-valuenow=</span><span class="s">"10"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-striped bg-success"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 25%"</span> <span class="na">aria-valuenow=</span><span class="s">"25"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-striped bg-info"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 50%"</span> <span class="na">aria-valuenow=</span><span class="s">"50"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-striped bg-warning"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 75%"</span> <span class="na">aria-valuenow=</span><span class="s">"75"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-striped bg-danger"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">style=</span><span class="s">"width: 100%"</span> <span class="na">aria-valuenow=</span><span class="s">"100"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
 -->

<!-- If you want to see more examples and properties please check the official **[Bootstrap Documentation](http://getbootstrap.com/docs/4.0/components/progress/){:target="_blank"}**. -->


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
