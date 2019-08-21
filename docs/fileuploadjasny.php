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

	<h1 class="bd-title" id="content">FileUpload Jasny v3.1.3</h1>
          <p class="bd-lead">Hemos diseñado el selector de selección para que se vea similar al menú desplegable y las otras entradas. <strong><a href="http://jasny.github.io/bootstrap" target="_blank">Documentación ofical de Github</a></strong>.</p>

<div class="bd-example" data-example-id="">
<div class="fileinput fileinput-new text-center" data-provides="fileinput">
   <div class="fileinput-new thumbnail img-raised">
	<img src="https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png" alt="..." />
   </div>
   <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
   <div>
	<span class="btn btn-raised btn-round btn-default btn-file">
	   <span class="fileinput-new">Select image</span>
	   <span class="fileinput-exists">Change</span>
	   <input type="file" name="..." />
	</span>
        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput">
        <i class="fa fa-times"></i> Remove</a>
   </div>
</div>

<div class="fileinput fileinput-new text-center" data-provides="fileinput">
    <div class="fileinput-new thumbnail img-circle img-raised">
	<img src="https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png" alt="..." />
    </div>
    <div class="fileinput-preview fileinput-exists thumbnail img-circle img-raised"></div>
    <div>
    <span class="btn btn-raised btn-round btn-default btn-file">
        <span class="fileinput-new">Add Photo</span>
	<span class="fileinput-exists">Change</span>
	<input type="file" name="..." /></span>
        <br />
        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
    </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"fileinput fileinput-new text-center"</span> <span class="na">data-provides=</span><span class="s">"fileinput"</span><span class="nt">&gt;</span>
   <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"fileinput-new thumbnail img-raised"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png"</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
   <span class="nt">&lt;/div&gt;</span>
   <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"fileinput-preview fileinput-exists thumbnail img-raised"</span><span class="nt">&gt;&lt;/div&gt;</span>
   <span class="nt">&lt;div&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"btn btn-raised btn-round btn-default btn-file"</span><span class="nt">&gt;</span>
	   <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"fileinput-new"</span><span class="nt">&gt;</span>Select image<span class="nt">&lt;/span&gt;</span>
	   <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"fileinput-exists"</span><span class="nt">&gt;</span>Change<span class="nt">&lt;/span&gt;</span>
	   <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"file"</span> <span class="na">name=</span><span class="s">"..."</span> <span class="nt">/&gt;</span>
	<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#pablo"</span> <span class="na">class=</span><span class="s">"btn btn-danger btn-round fileinput-exists"</span> <span class="na">data-dismiss=</span><span class="s">"fileinput"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-times"</span><span class="nt">&gt;&lt;/i&gt;</span> Remove<span class="nt">&lt;/a&gt;</span>
   <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"fileinput fileinput-new text-center"</span> <span class="na">data-provides=</span><span class="s">"fileinput"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"fileinput-new thumbnail img-circle img-raised"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png"</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"fileinput-preview fileinput-exists thumbnail img-circle img-raised"</span><span class="nt">&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"btn btn-raised btn-round btn-default btn-file"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"fileinput-new"</span><span class="nt">&gt;</span>Add Photo<span class="nt">&lt;/span&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"fileinput-exists"</span><span class="nt">&gt;</span>Change<span class="nt">&lt;/span&gt;</span>
	<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"file"</span> <span class="na">name=</span><span class="s">"..."</span> <span class="nt">/&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;br</span> <span class="nt">/&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#pablo"</span> <span class="na">class=</span><span class="s">"btn btn-danger btn-round fileinput-exists"</span> <span class="na">data-dismiss=</span><span class="s">"fileinput"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-times"</span><span class="nt">&gt;&lt;/i&gt;</span> Remove<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>


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
