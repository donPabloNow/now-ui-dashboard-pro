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
			<li class="toc-entry toc-h4"><a href="#register-form">Formulario de registro</a></li>
		</ul>
	</div>

	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">

  <h1 class="bd-title" id="content">jQuery Validation v1.19.0</h1>
          <p class="bd-lead"></p>
          <p>Si tiene campos obligatorios en los formularios, la mejor manera de agregar validación para ellos es a través de la herramienta de validación jQuery. Lo hemos importado a la biblioteca de Now UI Dashboard Pro y hemos cambiado sus colores.</p>

<p>Para obtener más información, consulte la <strong><a href="https://jqueryvalidation.org/" target="_blank">Documentación completa</a></strong>.</p>

<div class="bd-example" data-example-id="">
<form id="RegisterValidation">
<div class="card ">
    <div class="card-header ">
    <h4 class="card-title">Formulario de registro</h4>
    </div>

    <div class="card-body ">
      <div class="form-group has-label">
          <label>
              Email Address
              *
          </label>
          <input class="form-control" name="email" type="email" required="true" />
      </div>

      <div class="form-group has-label">
          <label>
              Formulario de registro Dirección de correo electrónico *
          </label>
          <input class="form-control" name="password" id="registerPassword" type="password" required="true" />
      </div>

      <div class="form-group has-label">
          <label>
             Contraseña *
          </label>
          <input class="form-control" name="password_confirmation" id="registerPasswordConfirmation" type="password" required="true" equalto="#registerPassword" />
      </div>

      <div class="category form-category">* Campos Requeridos</div>
    </div>
    <div class="card-footer text-right">
        <div class="form-check pull-left">
          <label class="form-check-label">
              <input class="form-check-input" type="checkbox" />
              <span class="form-check-sign"></span>
              Suscríbete al boletín
          </label>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
</div>
</form>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;form</span> <span class="na">id=</span><span class="s">"RegisterValidation"</span><span class="nt">&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header "</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Register Form<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body "</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-label"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;label&gt;</span>
              Email Address
              *
          <span class="nt">&lt;/label&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">name=</span><span class="s">"email"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">required=</span><span class="s">"true"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>

      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-label"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;label&gt;</span>
              Password
              *
          <span class="nt">&lt;/label&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">name=</span><span class="s">"password"</span> <span class="na">id=</span><span class="s">"registerPassword"</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">required=</span><span class="s">"true"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>

      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-label"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;label&gt;</span>
              Confirm Password
              *
          <span class="nt">&lt;/label&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">name=</span><span class="s">"password_confirmation"</span> <span class="na">id=</span><span class="s">"registerPasswordConfirmation"</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">required=</span><span class="s">"true"</span> <span class="na">equalto=</span><span class="s">"#registerPassword"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>

      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"category form-category"</span><span class="nt">&gt;</span>* Required fields<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-footer text-right"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check pull-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"form-check-sign"</span><span class="nt">&gt;&lt;/span&gt;</span>
              Subscribe to newsletter
          <span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Register<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/form&gt;</span></code></pre></div>

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
