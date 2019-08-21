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

	<h1 class="bd-title" id="content">Interruptor Bootstrap v3.3.4</h1>
          <p class="bd-lead"></p>
          <p>Agregamos un nuevo diseño para que los interruptores se vean como el resto del tablero.</p>

<p>Para más información por favor verifique la <strong><a href="https://github.com/Bttstrp/bootstrap-switch/" target="_blank">Documentation completa.</a></strong></p>

<div class="bd-example" data-example-id="">
<!-- markup -->
<input type="checkbox" checked="" name="checkbox" class="bootstrap-switch" data-on-label="ON" data-off-label="OFF" />
<input type="checkbox" name="checkbox" class="bootstrap-switch" data-on-label="ON" data-off-label="OFF" />
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- markup --&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">checked</span> <span class="na">name=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"bootstrap-switch"</span>
    <span class="na">data-on-label=</span><span class="s">"ON"</span>
    <span class="na">data-off-label=</span><span class="s">"OFF"</span>
<span class="nt">/&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">name=</span><span class="s">"checkbox"</span> <span class="na">class=</span><span class="s">"bootstrap-switch"</span>
    <span class="na">data-on-label=</span><span class="s">"ON"</span>
    <span class="na">data-off-label=</span><span class="s">"OFF"</span>
<span class="nt">/&gt;</span></code></pre></div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- javascript init --&gt;</span>
$('.bootstrap-switch').each(function(){
    $this = $(this);
    data_on_label = $this.data('on-label') || '';
    data_off_label = $this.data('off-label') || '';

    $this.bootstrapSwitch({
        onText: data_on_label,
        offText: data_off_label
    });
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
