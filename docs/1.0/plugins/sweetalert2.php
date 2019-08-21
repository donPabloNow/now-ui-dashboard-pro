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
	 <h1 class="bd-title" id="content">Sweet Alert 2 v8.0.1</h1>
          <p class="bd-lead"></p>
          <p>Si desea reemplazar el cuadro de alerta clásico con algo que se ve increíble, puede usar el complemento Sweet Alert 2. Hemos cambiado la tipografía y los colores del complemento proporcionado por <a href="https://twitter.com/t4t5">Tristan Edwards</a>.</p>

<p>Para más información por favor verifique la <strong><a href="https://sweetalert2.github.io/" target="_blank">Documentación completa</a></strong></p>

<div class="bd-example" data-example-id="">
<!-- markup -->
<button class="btn btn-primary btn-fill" onclick="Swal.fire({ title:&quot;Good job!&quot;, text: &quot;You clicked the button!&quot;, type: &quot;success&quot;, buttonsStyling: false, confirmButtonClass: &quot;btn btn-success&quot;})">Try me!</button>
    <!-- for more actions that you can use onclick, please check out assets/assets-for-demo/js/demo.js -->
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- markup --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-fill"</span> <span class="na">onclick=</span><span class="s">'Swal.fire({ title:"Good job!", text: "You clicked the button!", type: "success", buttonsStyling: false, confirmButtonClass: "btn btn-success"})'</span><span class="nt">&gt;</span>Try me!<span class="nt">&lt;/button&gt;</span>
    <span class="c">&lt;!-- for more actions that you can use onclick, please check out assets/assets-for-demo/js/demo.js --&gt;</span></code></pre></div>



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
