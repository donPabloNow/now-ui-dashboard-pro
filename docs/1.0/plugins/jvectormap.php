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
		</ul>
	</div>


	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
	<h1 class="bd-title" id="content">Mapa  jVector v2.0.4</h1>
          <p class="bd-lead"></p>
          <p>Se ve muy bien en cualquier resolución. Hecho por nuestros amigos de <a target="_blank" href="http://jvectormap.com/">jVector Map</a>.</p>

<div class="bd-example" data-example-id="">
<!-- Markup -->
<div class="card ">
  <div class="card-body ">
    <div id="worldMap" class="map map-big"></div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Markup --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card "</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"worldMap"</span> <span class="na">class=</span><span class="s">"map map-big"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<figure class="highlight"><pre><code class="language-html" data-lang="html">// javascript init
var mapData = {
       "AU": 760,
       "BR": 550,
       "CA": 120,
       "DE": 1300,
       "FR": 540,
       "GB": 690,
       "GE": 200,
       "IN": 200,
       "RO": 600,
       "RU": 300,
       "US": 2920,
   };

   $('#worldMap').vectorMap({
       map: 'world_mill_en',
       backgroundColor: "transparent",
       zoomOnScroll: false,
       regionStyle: {
           initial: {
               fill: '#e4e4e4',
               "fill-opacity": 0.9,
               stroke: 'none',
               "stroke-width": 0,
               "stroke-opacity": 0
           }
       },

       series: {
           regions: [{
               values: mapData,
               scale: ["#AAAAAA","#444444"],
               normalizeFunction: 'polynomial'
           }]
       },
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
