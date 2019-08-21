<?php
session_start();
require_once("inc/config.sistema.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php
require_once(RUTA_SISTEMA."inc/head.php");
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
	require_once(RUTA_SISTEMA."barra_menu.php");

	?>


	<?php
	require_once(RUTA_SISTEMA."menu_doc.php");

	?>
<!-- Esto debe ir ajuro en todo los codigos -->

<div class="d-none d-xl-block col-xl-2 bd-toc">
	<ul class="section-nav">
		<li class="toc-entry toc-h2"><a href="#example">Ejemplo</a></li>
		<li class="toc-entry toc-h2"><a href="#accordion-example">Ejemplo de acordeon </a></li>
	</ul>
</div>

	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">

	 <h1 class="bd-title" id="content">Colapso</h1>
          <p class="bd-lead">Alterne la visibilidad del contenido en su proyecto con unas pocas clases y nuestros complementos de JavaScript.</p>
          <h2 id="example">Ejemplo</h2>

<p>Haga clic en los botones de abajo para mostrar y ocultar otro elemento a través de cambios de clase:</p>

<ul>
  <li><code class="highlighter-rouge">.collapse</code> oculta el contenido</li>
  <li><code class="highlighter-rouge">.collapsing</code> se aplica durante las transiciones</li>
  <li><code class="highlighter-rouge">.collapse.show</code> muestra contenido	</li>
</ul>

<p>Puede utilizar un enlace con el  <code class="highlighter-rouge">href</code> atributo o un botón con el <code class="highlighter-rouge">data-target</code> atributo. En ambos casos, <code class="highlighter-rouge">data-toggle="collapse"</code> se requiere el.</p>

<div class="bd-example" data-example-id="">
<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Button with data-target
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">href=</span><span class="s">"#collapseExample"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-controls=</span><span class="s">"collapseExample"</span><span class="nt">&gt;</span>
    Link with href
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#collapseExample"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-controls=</span><span class="s">"collapseExample"</span><span class="nt">&gt;</span>
    Button with data-target
  <span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse"</span> <span class="na">id=</span><span class="s">"collapseExample"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-body"</span><span class="nt">&gt;</span>
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="accordion-example">Ejemplo de acordeon</h2>

<p>Usando el componente de la <a href="/docs/1.0/components/card/">tarjeta</a>  , puede extender el comportamiento de colapso predeterminado para crear un acordeón.</p>

<div class="bd-example" data-example-id="">
<div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
  <div class="card card-plain">
    <div class="card-header" role="tab" id="headingOne">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1

            <i class="now-ui-icons arrows-1_minimal-down"></i>
        </a>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card card-plain">
    <div class="card-header" role="tab" id="headingTwo">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Collapsible Group Item #2

            <i class="now-ui-icons arrows-1_minimal-down"></i>
        </a>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card card-plain">
    <div class="card-header" role="tab" id="headingThree">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Collapsible Group Item #3

            <i class="now-ui-icons arrows-1_minimal-down"></i>
        </a>
    </div>
    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"accordion"</span> <span class="na">role=</span><span class="s">"tablist"</span> <span class="na">aria-multiselectable=</span><span class="s">"true"</span> <span class="na">class=</span><span class="s">"card-collapse"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-plain"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">id=</span><span class="s">"headingOne"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-parent=</span><span class="s">"#accordion"</span> <span class="na">href=</span><span class="s">"#collapseOne"</span> <span class="na">aria-expanded=</span><span class="s">"true"</span> <span class="na">aria-controls=</span><span class="s">"collapseOne"</span><span class="nt">&gt;</span>
          Collapsible Group Item #1

            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons arrows-1_minimal-down"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"collapseOne"</span> <span class="na">class=</span><span class="s">"collapse show"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"headingOne"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-plain"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">id=</span><span class="s">"headingTwo"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"collapsed"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-parent=</span><span class="s">"#accordion"</span> <span class="na">href=</span><span class="s">"#collapseTwo"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-controls=</span><span class="s">"collapseTwo"</span><span class="nt">&gt;</span>
            Collapsible Group Item #2

            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons arrows-1_minimal-down"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"collapseTwo"</span> <span class="na">class=</span><span class="s">"collapse"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"headingTwo"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-plain"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">id=</span><span class="s">"headingThree"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"collapsed"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-parent=</span><span class="s">"#accordion"</span> <span class="na">href=</span><span class="s">"#collapseThree"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-controls=</span><span class="s">"collapseThree"</span><span class="nt">&gt;</span>
            Collapsible Group Item #3

            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons arrows-1_minimal-down"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"collapseThree"</span> <span class="na">class=</span><span class="s">"collapse"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"headingThree"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Si desea ver más ejemplos y propiedades, consulte la <strong><a href="http://getbootstrap.com/docs/4.0/components/collapse/" target="_blank">Documentacion oficial de Bootstrap </a></strong>.</p>

	</main>


	<!-- Final del contenido de esta pagina con las 2 etiquetas div -->
</div>
</div>

<!-- Libreias js -->
<?php
require_once(RUTA_SISTEMA."inc/script.php");
?>

</body>

</html>
