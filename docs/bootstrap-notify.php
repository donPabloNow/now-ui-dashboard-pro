<?php
session_start();
require_once("../inc/config.sistema.php");
?>
<!DOCTYPE html>
<html lang="es">

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
			<li class="toc-entry toc-h2"><a href="#notifications-style">Estilo de notificaciones</a></li>
			<li class="toc-entry toc-h2"><a href="#notifications-states">Estados de notificaciones</a></li>
		</ul>
	</div>


	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
	<h1 class="bd-title" id="content">Bootstrap Notify v3.1.5</h1>
          <p class="bd-lead"></p>
          <p>Las nuevas notificaciones de Now UI Dashboard Pro se ven frescas y limpias. Van muy bien con la barra de navegación.</p>

<p>Si desea usar agregar animaciones especiales para ellos, integramos un complemento de terceros llamado Bootstrap Notify. Nuestro amigo Robert McIntosh hizo un trabajo maravilloso. Si desea ver un ejemplo codificado, puede verlo a continuación.</p>

<p>Para más información por favor verifique la <strong><a href="https://github.com/mouse0270/bootstrap-notify" target="_blank">Documentación Completa </a></strong></p>

<h2 id="notifications-style">Estilo de notificaciones</h2>

<div class="bd-example" data-example-id="">
<div class="alert alert-info">
    <span>Esta es una notificación simple</span>
</div>
<div class="alert alert-info">
    <button type="button" aria-hidden="true" class="close">
        <i class="now-ui-icons ui-1_simple-remove"></i>
    </button>
    <span>Esta es una notificación con el botón de cerrar.</span>
</div>
<div class="alert alert-info alert-with-icon" data-notify="container">
    <button type="button" aria-hidden="true" class="close">
        <i class="now-ui-icons ui-1_simple-remove"></i>
    </button>
    <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
    <span data-notify="message">Esta es una notificación con el botón y el icono de cerrar.</span>
</div>
<div class="alert alert-info alert-with-icon" data-notify="container">
    <button type="button" aria-hidden="true" class="close">
        <i class="now-ui-icons ui-1_simple-remove"></i>
    </button>
    <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
    <span data-notify="message">Esta es una notificación con botón e icono de cierre y tiene muchas líneas. Puede ver que el icono y el botón de cerrar siempre están alineados verticalmente. Esta es una hermosa notificación. Así que no tienes que preocuparte por el estilo.</span>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span&gt;</span>This is a plain notification<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span> <span class="na">class=</span><span class="s">"close"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_simple-remove"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;span&gt;</span>This is a notification with close button.<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info alert-with-icon"</span> <span class="na">data-notify=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span> <span class="na">class=</span><span class="s">"close"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_simple-remove"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">data-notify=</span><span class="s">"icon"</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_bell-53"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">data-notify=</span><span class="s">"message"</span><span class="nt">&gt;</span>This is a notification with close button and icon.<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info alert-with-icon"</span> <span class="na">data-notify=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span> <span class="na">class=</span><span class="s">"close"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_simple-remove"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">data-notify=</span><span class="s">"icon"</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_bell-53"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">data-notify=</span><span class="s">"message"</span><span class="nt">&gt;</span>This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="notifications-states">Estados de notificaciones</h2>

<div class="bd-example" data-example-id="">
<div class="alert alert-primary">
    <button type="button" aria-hidden="true" class="close">
        <i class="now-ui-icons ui-1_simple-remove"></i>
    </button>
    <span><b> Primario: </b> esta es una notificación regular realizada con".alert-primary"</span>
</div>

<div class="alert alert-info">
    <button type="button" aria-hidden="true" class="close">
        <i class="now-ui-icons ui-1_simple-remove"></i>
    </button>
    <span><b> Información: </b> esta es una notificación regular realizada con ".alert-info"</span>
</div>
<div class="alert alert-success">
    <button type="button" aria-hidden="true" class="close">
        <i class="now-ui-icons ui-1_simple-remove"></i>
    </button>
    <span><b> Success - </b> Esta es una notificación regular realizada con ".alert-success"</span>
</div>
<div class="alert alert-warning">
    <button type="button" aria-hidden="true" class="close">
        <i class="now-ui-icons ui-1_simple-remove"></i>
    </button>
    <span><b> Advertencia: </b> esta es una notificación regular realizada con ".alert-warning"</span>
</div>
<div class="alert alert-danger">
    <button type="button" aria-hidden="true" class="close">
        <i class="now-ui-icons ui-1_simple-remove"></i>
    </button>
    <span><b> Peligro: </b> esta es una notificación regular realizada con ".alert-danger"</span>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-primary"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span> <span class="na">class=</span><span class="s">"close"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_simple-remove"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;span&gt;&lt;b&gt;</span> Primary - <span class="nt">&lt;/b&gt;</span> This is a regular notification made with ".alert-primary"<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span> <span class="na">class=</span><span class="s">"close"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_simple-remove"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;span&gt;&lt;b&gt;</span> Info - <span class="nt">&lt;/b&gt;</span> This is a regular notification made with ".alert-info"<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span> <span class="na">class=</span><span class="s">"close"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_simple-remove"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;span&gt;&lt;b&gt;</span> Success - <span class="nt">&lt;/b&gt;</span> This is a regular notification made with ".alert-success"<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span> <span class="na">class=</span><span class="s">"close"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_simple-remove"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;span&gt;&lt;b&gt;</span> Warning - <span class="nt">&lt;/b&gt;</span> This is a regular notification made with ".alert-warning"<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span> <span class="na">class=</span><span class="s">"close"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_simple-remove"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;span&gt;&lt;b&gt;</span> Danger - <span class="nt">&lt;/b&gt;</span> This is a regular notification made with ".alert-danger"<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- javascript for init --&gt;</span>
function showNotification(from, align){
    color = 'primary';

    $.notify({
        icon: "now-ui-icons ui-1_bell-53",
        message: "Welcome to <span class="nt">&lt;b&gt;</span>Now Ui Dashboard Pro<span class="nt">&lt;/b&gt;</span> - a beautiful freebie for every web developer."

      },{
          type: color,
          timer: 8000,
          placement: {
              from: from,
              align: align
          }
      });
}</code></pre></figure>


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
