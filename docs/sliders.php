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


	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">

	<h1 class="bd-title" id="content">Sliders v12.1.0</h1>
          <p class="bd-lead"></p>
          <p>Hemos rediseñado noUIslider, manteniendo el diseño consistente. Se pueden usar otras clases de colores como <code class="highlighter-rouge">.slider-info</code>, <code class="highlighter-rouge">.slider-success</code>, <code class="highlighter-rouge">.slider-warning</code>, <code class="highlighter-rouge">.slider-danger</code>.</p>

<p>Para obtener más información, consulte la <strong><a href="https://refreshless.com/nouislider/" target="_blank">Documentación completa de Github </a></strong>.</p>

<div class="bd-example" data-example-id="">
<!-- Markup -->
<div id="sliderRegular" class="slider"></div>
<br>
<div id="sliderDouble" class="slider slider-primary"></div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Markup --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"sliderRegular"</span> <span class="na">class=</span><span class="s">"slider"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"sliderDouble"</span> <span class="na">class=</span><span class="s">"slider slider-primary"</span><span class="nt">&gt;&lt;/div&gt;</span></code></pre></div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Javascript --&gt;</span>
var slider = document.getElementById('sliderRegular');

noUiSlider.create(slider, {
	start: 40,
	connect: [true,false],
	range: {
		min: 0,
		max: 100
	}
});

var slider2 = document.getElementById('sliderDouble');

noUiSlider.create(slider2, {
	start: [ 20, 60 ],
	connect: true,
	range: {
		min:  0,
		max:  100
	}
});</code></pre></figure>

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
