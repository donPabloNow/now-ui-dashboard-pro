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
			<li class="toc-entry toc-h2"><a href="#quick-start">Inicio rápido</a>
				<ul>
					<li class="toc-entry toc-h3"><a href="#css">CSS</a></li>
					<li class="toc-entry toc-h3"><a href="#js">JS</a></li>
					<li class="toc-entry toc-h3"><a href="#fonts-and-icons">Fuentes e iconos</a></li>
				</ul>
			</li>
			<li class="toc-entry toc-h2"><a href="#starter-template">Plantilla de inicio</a></li>
		</ul>
	</div>


	<!-- Inicio del contenido de esta pagina -->
	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">


		<h1 class="bd-title" id="content">Introducción</h1>
		<p class="bd-lead">Ahora, UI Dashboard PRO es una plantilla premium de administración de Bootstrap 4.</p>
		<h2 id="quick-start">Inicio rápido</h2>

		<p>Para comenzar a utilizar el panel de la interfaz de usuario, deberá importar algunos archivos en su proyecto actual o comenzar desde cero con nuestra plantilla (desplácese hacia abajo en esta página para verla).</p>

		<h3 id="css">CSS</h3>

		<p>Copie y pegue la hoja de estilo <code class="highlighter-rouge">&lt;link&gt;</code> en su <code class="highlighter-rouge">&lt;head&gt;</code> antes de todas las demás hojas de estilo para cargar nuestro CSS.</p><figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">href=</span><span class="s">"../assets/css/now-ui-dashboard.css"</span><span class="nt">&gt;</span></code></pre></figure>

		<h3 id="js">JS</h3>

		<p>Muchos de nuestros componentes requieren el uso de JavaScript para funcionar. Específicamente, requieren <a href="https://jquery.com">jQuery</a>, <a href="https://popper.js.org/">Popper.js</a>, y nuestros propios complementos de JavaScript. Coloque las siguientes <code class="highlighter-rouge">&lt;script&gt;</code> cerca del final de sus páginas, justo antes de la  <code class="highlighter-rouge">&lt;/body&gt;</code> etiqueta, para que puedan. jQuery debe aparecer primero, luego Popper.js, y luego nuestros complementos de JavaScript.</p>

		<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/core/jquery.min.js"</span> <span class="na">type=</span><span class="s">"text/javascript"</span><span class="nt">&gt;&lt;/script&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/core/popper.min.js"</span> <span class="na">type=</span><span class="s">"text/javascript"</span><span class="nt">&gt;&lt;/script&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/core/bootstrap.min.js"</span> <span class="na">type=</span><span class="s">"text/javascript"</span><span class="nt">&gt;&lt;/script&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/perfect-scrollbar.jquery.min.js"</span> <span class="na">type=</span><span class="s">"text/javascript"</span><span class="nt">&gt;&lt;/script&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/moment.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

<span class="c">&lt;!--  Plugin for Sweet Alert --&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/sweetalert2.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

<span class="c">&lt;!-- Forms Validations Plugin --&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/jquery.validate.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

<span class="c">&lt;!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard --&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/jquery.bootstrap-wizard.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

<span class="c">&lt;!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select --&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/bootstrap-selectpicker.js"</span> <span class="na">type=</span><span class="s">"text/javascript"</span><span class="nt">&gt;&lt;/script&gt;</span>

<span class="c">&lt;!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ --&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/bootstrap-switch.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

<span class="c">&lt;!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ --&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/bootstrap-datetimepicker.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

<span class="c">&lt;!--  DataTables.net Plugin, full documentation here: https://datatables.net/    --&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/jquery.dataTables.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

<span class="c">&lt;!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  --&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/bootstrap-tagsinput.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

<span class="c">&lt;!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput --&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/jasny-bootstrap.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

<span class="c">&lt;!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    --&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/fullcalendar.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

<span class="c">&lt;!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ --&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/jquery-jvectormap.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

<span class="c">&lt;!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ --&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/nouislider.min.js"</span> <span class="na">type=</span><span class="s">"text/javascript"</span><span class="nt">&gt;&lt;/script&gt;</span>

<span class="c">&lt;!--  Google Maps Plugin    --&gt;</span>
<span class="nt">&lt;script </span><span class="na">type=</span><span class="s">"text/javascript"</span> <span class="na">src=</span><span class="s">"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"</span><span class="nt">&gt;&lt;/script&gt;</span>

<span class="c">&lt;!-- Chart JS --&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/chartjs.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

<span class="c">&lt;!--  Notifications Plugin    --&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/bootstrap-notify.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

<span class="c">&lt;!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc --&gt;</span>

<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/now-ui-dashboard.js"</span> <span class="na">type=</span><span class="s">"text/javascript"</span><span class="nt">&gt;&lt;/script&gt;</span>

<span class="c">&lt;!-- Now Ui Dashboard DEMO methods, don't include it in your project! --&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/demo/js/demo.js"</span><span class="nt">&gt;&lt;/script&gt;</span></code></pre></figure>

<h3 id="fonts-and-icons">Fuentes e iconos</h3>

<p>Copie y pegue la hoja de estilo <code class="highlighter-rouge">&lt;link&gt;</code> en su  <code class="highlighter-rouge">&lt;head&gt;</code> antes de todas las demás hojas de estilo para cargar las fuentes y los iconos.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!--     Fonts and icons     --&gt;</span>
<span class="nt">&lt;link</span> <span class="na">href=</span><span class="s">"https://fonts.googleapis.com/css?family=Montserrat:400,700,200"</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="nt">/&gt;</span>
<span class="nt">&lt;link</span> <span class="na">href=</span><span class="s">"https://use.fontawesome.com/releases/v5.0.6/css/all.css"</span> <span class="na">rel=</span><span class="s">"stylesheet"</span><span class="nt">&gt;</span></code></pre></figure>

<h2 id="starter-template">Plantilla de inicio</h2>

<p>Asegúrese de configurar sus páginas con los últimos estándares de diseño y desarrollo. Eso significa usar un doctype HTML5 e incluir una metaetiqueta de viewport para comportamientos adecuados de respuesta. Póngalo todo junto y sus páginas deberían verse así:</p>

				<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="cp">&lt;!doctype html&gt;</span>
<span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">"en"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;head&gt;</span>
    <span class="nt">&lt;title&gt;</span>Hello, world!<span class="nt">&lt;/title&gt;</span>
    <span class="c">&lt;!-- Required meta tags --&gt;</span>
    <span class="nt">&lt;meta</span> <span class="na">charset=</span><span class="s">"utf-8"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;meta</span> <span class="na">content=</span><span class="s">"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"</span> <span class="na">name=</span><span class="s">"viewport"</span> <span class="nt">/&gt;</span>

    <span class="nt">&lt;meta</span> <span class="na">http-equiv=</span><span class="s">"X-UA-Compatible"</span> <span class="na">content=</span><span class="s">"IE=edge,chrome=1"</span> <span class="nt">/&gt;</span>

    <span class="c">&lt;!--     Fonts and icons     --&gt;</span>
    <span class="nt">&lt;link</span> <span class="na">href=</span><span class="s">"https://fonts.googleapis.com/css?family=Montserrat:400,700,200"</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;link</span> <span class="na">href=</span><span class="s">"https://use.fontawesome.com/releases/v5.0.6/css/all.css"</span> <span class="na">rel=</span><span class="s">"stylesheet"</span><span class="nt">&gt;</span>

    <span class="c">&lt;!-- Now UI Dashboard CSS --&gt;</span>
    <span class="nt">&lt;link</span> <span class="na">href=</span><span class="s">"../assets/css/bootstrap.min.css"</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;link</span> <span class="na">href=</span><span class="s">"../assets/css/now-ui-dashboard.css"</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="nt">/&gt;</span>

  <span class="nt">&lt;/head&gt;</span>
  <span class="nt">&lt;body&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"wrapper"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"sidebar"</span> <span class="na">data-color=</span><span class="s">"orange"</span><span class="nt">&gt;</span>
      <span class="c">&lt;!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

      Tip 2: you can also add an image using data-image tag
      --&gt;</span>

        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"logo"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"http://www.creative-tim.com"</span> <span class="na">class=</span><span class="s">"simple-text logo-mini"</span><span class="nt">&gt;</span>
              CT
          <span class="nt">&lt;/a&gt;</span>

          <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"http://www.creative-tim.com"</span> <span class="na">class=</span><span class="s">"simple-text logo-normal"</span><span class="nt">&gt;</span>
              Creative Tim
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"navbar-minimize"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">id=</span><span class="s">"minimizeSidebar"</span> <span class="na">class=</span><span class="s">"btn btn-simple btn-icon btn-neutral btn-round"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons text_align-center visible-on-sidebar-regular"</span><span class="nt">&gt;&lt;/i&gt;</span>
                <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons design_bullet-list-67 visible-on-sidebar-mini"</span><span class="nt">&gt;&lt;/i&gt;</span>
            <span class="nt">&lt;/button&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>

        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"sidebar-wrapper"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"user"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"photo"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"../assets/img/james.jpg"</span> <span class="nt">/&gt;</span>
              <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"info"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;a</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">href=</span><span class="s">"#collapseExample"</span> <span class="na">class=</span><span class="s">"collapsed"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;span&gt;</span>
                          James Amos
                          <span class="nt">&lt;b</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/b&gt;</span>
                      <span class="nt">&lt;/span&gt;</span>
                  <span class="nt">&lt;/a&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"clearfix"</span><span class="nt">&gt;&lt;/div&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse"</span> <span class="na">id=</span><span class="s">"collapseExample"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;li&gt;</span>
                              <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
                                  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sidebar-mini-icon"</span><span class="nt">&gt;</span>MP<span class="nt">&lt;/span&gt;</span>
                                  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sidebar-normal"</span><span class="nt">&gt;</span>My Profile<span class="nt">&lt;/span&gt;</span>
                              <span class="nt">&lt;/a&gt;</span>
                          <span class="nt">&lt;/li&gt;</span>
                          <span class="nt">&lt;li&gt;</span>
                              <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
                                  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sidebar-mini-icon"</span><span class="nt">&gt;</span>EP<span class="nt">&lt;/span&gt;</span>
                                  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sidebar-normal"</span><span class="nt">&gt;</span>Edit Profile<span class="nt">&lt;/span&gt;</span>
                              <span class="nt">&lt;/a&gt;</span>
                          <span class="nt">&lt;/li&gt;</span>
                          <span class="nt">&lt;li&gt;</span>
                              <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
                                  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sidebar-mini-icon"</span><span class="nt">&gt;</span>S<span class="nt">&lt;/span&gt;</span>
                                  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sidebar-normal"</span><span class="nt">&gt;</span>Settings<span class="nt">&lt;/span&gt;</span>
                              <span class="nt">&lt;/a&gt;</span>
                          <span class="nt">&lt;/li&gt;</span>
                      <span class="nt">&lt;/ul&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav"</span><span class="nt">&gt;</span>

              <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"../examples/dashboard.html"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons design_app"</span><span class="nt">&gt;&lt;/i&gt;</span>
                      <span class="nt">&lt;p&gt;</span>Example 1<span class="nt">&lt;/p&gt;</span>
                  <span class="nt">&lt;/a&gt;</span>
              <span class="nt">&lt;/li&gt;</span>

              <span class="nt">&lt;li&gt;</span>
                  <span class="nt">&lt;a</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">href=</span><span class="s">"#pagesExamples"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons design_image"</span><span class="nt">&gt;&lt;/i&gt;</span>
                      <span class="nt">&lt;p&gt;</span>Example 2
                         <span class="nt">&lt;b</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/b&gt;</span>
                      <span class="nt">&lt;/p&gt;</span>
                  <span class="nt">&lt;/a&gt;</span>

                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse"</span> <span class="na">id=</span><span class="s">"pagesExamples"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;li&gt;</span>
                              <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"../examples/pages/pricing.html"</span><span class="nt">&gt;</span>
                                  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sidebar-mini-icon"</span><span class="nt">&gt;</span>C1<span class="nt">&lt;/span&gt;</span>
                                  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sidebar-normal"</span><span class="nt">&gt;</span>Collapse 1<span class="nt">&lt;/span&gt;</span>
                              <span class="nt">&lt;/a&gt;</span>
                          <span class="nt">&lt;/li&gt;</span>
                          <span class="nt">&lt;li&gt;</span>
                              <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"../examples/pages/timeline.html"</span><span class="nt">&gt;</span>
                                  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sidebar-mini-icon"</span><span class="nt">&gt;</span>C2<span class="nt">&lt;/span&gt;</span>
                                  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sidebar-normal"</span><span class="nt">&gt;</span>Collapse 2<span class="nt">&lt;/span&gt;</span>
                              <span class="nt">&lt;/a&gt;</span>
                          <span class="nt">&lt;/li&gt;</span>
                      <span class="nt">&lt;/ul&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;/li&gt;</span>
          <span class="nt">&lt;/ul&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>

      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"main-panel"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg navbar-transparent navbar-absolute"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container-fluid"</span><span class="nt">&gt;</span>


            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"navbar-wrapper"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"navbar-toggle"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar bar1"</span><span class="nt">&gt;&lt;/span&gt;</span>
                  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar bar2"</span><span class="nt">&gt;&lt;/span&gt;</span>
                  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar bar3"</span><span class="nt">&gt;&lt;/span&gt;</span>
                <span class="nt">&lt;/button&gt;</span>
              <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#pablo"</span><span class="nt">&gt;</span>Dashboard<span class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;/div&gt;</span>



            <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navigation"</span> <span class="na">aria-controls=</span><span class="s">"navigation-index"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
              <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
              <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-bar navbar-kebab"</span><span class="nt">&gt;&lt;/span&gt;</span>
            <span class="nt">&lt;/button&gt;</span>

              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse justify-content-end"</span> <span class="na">id=</span><span class="s">"navigation"</span><span class="nt">&gt;</span>



              <span class="nt">&lt;form&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group no-border"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">value=</span><span class="s">""</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Search..."</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_zoom-bold"</span><span class="nt">&gt;&lt;/i&gt;</span>
                      <span class="nt">&lt;/span&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;/form&gt;</span>

              <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#pablo"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons media-2_sound-wave"</span><span class="nt">&gt;&lt;/i&gt;</span>
                    <span class="nt">&lt;p&gt;</span>
                      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"d-lg-none d-md-block"</span><span class="nt">&gt;</span>Stats<span class="nt">&lt;/span&gt;</span>
                    <span class="nt">&lt;/p&gt;</span>
                  <span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/li&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link dropdown-toggle"</span> <span class="na">href=</span><span class="s">"http://example.com"</span> <span class="na">id=</span><span class="s">"navbarDropdownMenuLink"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons location_world"</span><span class="nt">&gt;&lt;/i&gt;</span>
                    <span class="nt">&lt;p&gt;</span>
                      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"d-lg-none d-md-block"</span><span class="nt">&gt;</span>Some Actions<span class="nt">&lt;/span&gt;</span>
                    <span class="nt">&lt;/p&gt;</span>
                  <span class="nt">&lt;/a&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu dropdown-menu-right"</span> <span class="na">aria-labelledby=</span><span class="s">"navbarDropdownMenuLink"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
                    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
                    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/li&gt;</span>

                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#pablo"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons users_single-02"</span><span class="nt">&gt;&lt;/i&gt;</span>
                    <span class="nt">&lt;p&gt;</span>
                      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"d-lg-none d-md-block"</span><span class="nt">&gt;</span>Account<span class="nt">&lt;/span&gt;</span>
                    <span class="nt">&lt;/p&gt;</span>
                  <span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/li&gt;</span>
              <span class="nt">&lt;/ul&gt;</span>


              <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/nav&gt;</span>

        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-header panel-header-sm"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/div&gt;</span>

        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;h3&gt;</span>Hello, world!<span class="nt">&lt;/h3&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>

        <span class="nt">&lt;footer</span> <span class="na">class=</span><span class="s">"footer"</span> <span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container-fluid"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;nav&gt;</span>
              <span class="nt">&lt;ul&gt;</span>
                <span class="nt">&lt;li&gt;</span>
                    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"https://www.creative-tim.com"</span><span class="nt">&gt;</span>
                        Creative Tim
                    <span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;</span>
                    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"http://presentation.creative-tim.com"</span><span class="nt">&gt;</span>
                       About Us
                    <span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/li&gt;</span>
                <span class="nt">&lt;li&gt;</span>
                    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"http://blog.creative-tim.com"</span><span class="nt">&gt;</span>
                       Blog
                    <span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/li&gt;</span>
              <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/nav&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"copyright"</span><span class="nt">&gt;</span>
              <span class="ni">&amp;copy;</span> <span class="nt">&lt;script&gt;</span><span class="nb">document</span><span class="p">.</span><span class="nx">write</span><span class="p">(</span><span class="k">new</span> <span class="nb">Date</span><span class="p">().</span><span class="nx">getFullYear</span><span class="p">())</span><span class="nt">&lt;/script&gt;</span>, Designed by <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"http://www.invisionapp.com"</span> <span class="na">target=</span><span class="s">"_blank"</span><span class="nt">&gt;</span>Invision<span class="nt">&lt;/a&gt;</span>. Coded by <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"https://www.creative-tim.com"</span> <span class="na">target=</span><span class="s">"_blank"</span><span class="nt">&gt;</span>Creative Tim<span class="nt">&lt;/a&gt;</span>.
            <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/footer&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/body&gt;</span>
  <span class="c">&lt;!--   Core JS Files   --&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/core/jquery.min.js"</span> <span class="na">type=</span><span class="s">"text/javascript"</span><span class="nt">&gt;&lt;/script&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/core/popper.min.js"</span> <span class="na">type=</span><span class="s">"text/javascript"</span><span class="nt">&gt;&lt;/script&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/core/bootstrap.min.js"</span> <span class="na">type=</span><span class="s">"text/javascript"</span><span class="nt">&gt;&lt;/script&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/perfect-scrollbar.jquery.min.js"</span> <span class="na">type=</span><span class="s">"text/javascript"</span><span class="nt">&gt;&lt;/script&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/moment.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

  <span class="c">&lt;!--  Plugin for Sweet Alert --&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/sweetalert2.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

  <span class="c">&lt;!-- Forms Validations Plugin --&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/jquery.validate.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

  <span class="c">&lt;!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard --&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/jquery.bootstrap-wizard.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

  <span class="c">&lt;!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select --&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/bootstrap-selectpicker.js"</span> <span class="na">type=</span><span class="s">"text/javascript"</span><span class="nt">&gt;&lt;/script&gt;</span>

  <span class="c">&lt;!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ --&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/bootstrap-switch.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

  <span class="c">&lt;!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ --&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/bootstrap-datetimepicker.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

  <span class="c">&lt;!--  DataTables.net Plugin, full documentation here: https://datatables.net/    --&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/jquery.dataTables.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

  <span class="c">&lt;!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  --&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/bootstrap-tagsinput.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

  <span class="c">&lt;!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput --&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/jasny-bootstrap.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

  <span class="c">&lt;!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    --&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/fullcalendar.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

  <span class="c">&lt;!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ --&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/jquery-jvectormap.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

  <span class="c">&lt;!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ --&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/nouislider.min.js"</span> <span class="na">type=</span><span class="s">"text/javascript"</span><span class="nt">&gt;&lt;/script&gt;</span>

  <span class="c">&lt;!--  Google Maps Plugin    --&gt;</span>
  <span class="nt">&lt;script </span><span class="na">type=</span><span class="s">"text/javascript"</span> <span class="na">src=</span><span class="s">"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"</span><span class="nt">&gt;&lt;/script&gt;</span>

  <span class="c">&lt;!-- Chart JS --&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/chartjs.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

  <span class="c">&lt;!--  Notifications Plugin    --&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/plugins/bootstrap-notify.js"</span><span class="nt">&gt;&lt;/script&gt;</span>

  <span class="c">&lt;!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc --&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"../assets/js/now-ui-dashboard.js"</span> <span class="na">type=</span><span class="s">"text/javascript"</span><span class="nt">&gt;&lt;/script&gt;</span>
<span class="nt">&lt;/html&gt;</span></code></pre></figure>




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
