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
<h1 class="bd-title" id="content">DateTimePicker v4.17.47</h1>
          <p class="bd-lead"></p>
          <p>Hemos creado el diseño del selector de fecha y hora hecho por <strong><a href="https://github.com/Eonasdan" target="_blank">Eonasdan</a></strong>. Hemos cambiado los colores, la tipografía y los botones, para que se vean como el resto del tablero.</p>

<p>Para obtener más información, consulte la <strong><a href="https://eonasdan.github.io/bootstrap-datetimepicker/" target="_blank">Documentación completa de Github </a></strong>.</p>

<p>Aquí hay un ejemplo codificado:</p>

<div class="bd-example" data-example-id="">
<!-- input with datetimepicker -->
<div class="form-group">
    <label class="label-control">Selector de fecha y hora</label>
    <input type="text" class="form-control datetimepicker" value="10/05/2016" />
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- input with datetimepicker --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label-control"</span><span class="nt">&gt;</span>Datetime Picker<span class="nt">&lt;/label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control datetimepicker"</span> <span class="na">value=</span><span class="s">"10/05/2016"</span><span class="nt">/&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- javascript for init --&gt;</span>
$('.datetimepicker').datetimepicker({
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
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
