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
		<li class="toc-entry toc-h2"><a href="#examples">Ejemplos</a>
			<ul>
				<li class="toc-entry toc-h3"><a href="#modal-components">Componentes modales</a>
					<ul>
						<ul>
							<li class="toc-entry toc-h5"><a href="#modal-title">Título modal</a></li>
						</ul>
					</ul>
				</li>
				<li class="toc-entry toc-h3"><a href="#live-demo">Demo en vivo</a>
					<ul>
						<ul>
							<li class="toc-entry toc-h5"><a href="#modal-title-1">Modal title</a></li>
						</ul>
					</ul>
				</li>
				<li class="toc-entry toc-h3"><a href="#scrolling-long-content">Desplazando contenido largo</a>
					<ul>
						<ul>
							<li class="toc-entry toc-h5"><a href="#modal-title-2">Modal title</a></li>
						</ul>
					</ul>
				</li>
				<li class="toc-entry toc-h3"><a href="#login-modal">Inicio de sesión modal</a></li>
				<li class="toc-entry toc-h3"><a href="#tooltips-and-popovers">Información sobre herramientas y emergentes</a>
					<ul>
						<ul>
							<li class="toc-entry toc-h5"><a href="#modal-title-3">Modal title</a></li>
							<li class="toc-entry toc-h5"><a href="#popover-in-a-modal">Popover en un modal</a></li>
							<li class="toc-entry toc-h5"><a href="#tooltips-in-a-modal">Información sobre herramientas en un modal</a></li>
						</ul>
					</ul>
				</li>
				<li class="toc-entry toc-h3"><a href="#embedding-youtube-videos">Incrustar videos de YouTube</a></li>
			</ul>
		</li>
		<li class="toc-entry toc-h2"><a href="#optional-sizes">Tamaños opcionales</a>
			<ul>
				<ul>
					<li class="toc-entry toc-h4"><a href="#large-modal">Gran modal </a></li>
					<li class="toc-entry toc-h4"><a href="#small-modal">Pequeño modal</a></li>
				</ul>
			</ul>
		</li>
		<li class="toc-entry toc-h2"><a href="#usage">Uso</a>
			<ul>
				<li class="toc-entry toc-h3"><a href="#via-data-attributes">A través de atributos de datos</a></li>
				<li class="toc-entry toc-h3"><a href="#via-javascript">A través de JavaScript</a></li>
				<li class="toc-entry toc-h3"><a href="#options">Opciones</a></li>
			</ul>
		</li>
	</ul>
</div>


	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
	<h1 class="bd-title" id="content">Modal</h1>
          <p class="bd-lead">Use el complemento modal de JavaScript de Bootstrap para agregar cuadros de diálogo a su sitio para las cajas de luz, las notificaciones de los usuarios o el contenido completamente personalizado.</p>
          <h2 id="examples">Ejemplos</h2>

<h3 id="modal-components">Componentes modales</h3>

<p>A continuación se muestra una  <em>estatica</em> ejemplo modal (es decir, su <code class="highlighter-rouge">position</code> y <code class="highlighter-rouge">display</code> se han anulado). Se incluyen el encabezado modal, el cuerpo modal (requerido para <code class="highlighter-rouge">padding</code>), y el pie de página modal (opcional). Le pedimos que incluya encabezados modales con acciones de descarte siempre que sea posible, o que proporcione otra acción de despido explícita.</p>

<div class="bd-example bd-example-modal">
  <div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Título modal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>El texto del cuerpo modal va aquí..</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Guardar cambios</button>
        </div>
      </div>
    </div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">role=</span><span class="s">"dialog"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog"</span> <span class="na">role=</span><span class="s">"document"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-header"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"modal-title"</span><span class="nt">&gt;</span>Modal title<span class="nt">&lt;/h5&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p&gt;</span>Modal body text goes here.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-footer"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Save changes<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span><span class="nt">&gt;</span>Close<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<h3 id="live-demo">Demo en vivo</h3>

<p>Para activar una demostración modal de trabajo, haga clic en el botón de abajo. Se deslizará hacia abajo y se desvanecerá desde la parte superior de la página.</p>

<div id="exampleModalLive" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLiveLabel">Título modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¡Woohoo, estás leyendo este texto en un modo!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>

<div class="bd-example">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLive">
    Ejecutar demo modal
  </button>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Button trigger modal --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">data-target=</span><span class="s">"#exampleModal"</span><span class="nt">&gt;</span>
  Launch demo modal
<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Modal --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal fade"</span> <span class="na">id=</span><span class="s">"exampleModal"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">role=</span><span class="s">"dialog"</span> <span class="na">aria-labelledby=</span><span class="s">"exampleModalLabel"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog"</span> <span class="na">role=</span><span class="s">"document"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-header"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"modal-title"</span> <span class="na">id=</span><span class="s">"exampleModalLabel"</span><span class="nt">&gt;</span>Modal title<span class="nt">&lt;/h5&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
        ...
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-footer"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span><span class="nt">&gt;</span>Close<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Save changes<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<h3 id="scrolling-long-content">Desplazando contenido largo</h3>

<p>Cuando los modales se vuelven demasiado largos para la ventana o el dispositivo del usuario, se desplazan independientemente de la página. Prueba la demostración de abajo para ver lo que queremos decir.</p>

<div id="exampleModalLong" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Título modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis en egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestíbulo en eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>

<div class="bd-example">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    Ejecutar demo modal
  </button>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Button trigger modal --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">data-target=</span><span class="s">"#exampleModalLong"</span><span class="nt">&gt;</span>
  Launch demo modal
<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Modal --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal fade"</span> <span class="na">id=</span><span class="s">"exampleModalLong"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">role=</span><span class="s">"dialog"</span> <span class="na">aria-labelledby=</span><span class="s">"exampleModalLongTitle"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog"</span> <span class="na">role=</span><span class="s">"document"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-header"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"modal-title"</span> <span class="na">id=</span><span class="s">"exampleModalLongTitle"</span><span class="nt">&gt;</span>Modal title<span class="nt">&lt;/h5&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
        ...
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-footer"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span><span class="nt">&gt;</span>Close<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Save changes<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<h3 id="login-modal">Inicio de sesión modal</h3>

<div class="bd-example" data-example-id="">
<button class="btn btn-round" data-toggle="modal" data-target="#loginModal">
    <i class="now-ui-icons users_single-02"></i> Iniciar sesión
</button>

<div class="modal fade modal-primary" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="card card-login card-plain">
        <div class="modal-header justify-content-center">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <i class="now-ui-icons ui-1_simple-remove"></i>
          </button>

          <div class="header header-primary text-center">
                          <div class="logo-container">
                              <img src="/assets/img/now-logo.png" alt="" />
                          </div>
                      </div>
        </div>
        <div class="modal-body">
          <form class="form" method="" action="">
            <div class="card-content">
                            <div class="input-group no-border form-control-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Nombre de pila..." />
                            </div>

                            <div class="input-group no-border form-control-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </span>
                                <input type="password" placeholder="Contraseña..." class="form-control" />
                            </div>
                        </div>
          </form>
        </div>
        <div class="modal-footer text-center pt-4">
          <a href="#pablo" class="btn btn-neutral btn-round btn-lg btn-block">Empezar</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-round"</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">data-target=</span><span class="s">"#loginModal"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons users_single-02"</span><span class="nt">&gt;&lt;/i&gt;</span> Login
<span class="nt">&lt;/button&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal fade modal-primary"</span> <span class="na">id=</span><span class="s">"loginModal"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">role=</span><span class="s">"dialog"</span> <span class="na">aria-labelledby=</span><span class="s">"myModalLabel"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog modal-login"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-login card-plain"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-header justify-content-center"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_simple-remove"</span><span class="nt">&gt;&lt;/i&gt;</span>
          <span class="nt">&lt;/button&gt;</span>

          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"header header-primary text-center"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"logo-container"</span><span class="nt">&gt;</span>
                              <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/assets/img/now-logo.png"</span> <span class="na">alt=</span><span class="s">""</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;/div&gt;</span>
                      <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form"</span> <span class="na">method=</span><span class="s">""</span> <span class="na">action=</span><span class="s">""</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-content"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group no-border form-control-lg"</span><span class="nt">&gt;</span>
                                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>
                                    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons users_circle-08"</span><span class="nt">&gt;&lt;/i&gt;</span>
                                <span class="nt">&lt;/span&gt;</span>
                                <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"First Name..."</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>

                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group no-border form-control-lg"</span><span class="nt">&gt;</span>
                                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>
                                    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_lock-circle-open"</span><span class="nt">&gt;&lt;/i&gt;</span>
                                <span class="nt">&lt;/span&gt;</span>
                                <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">placeholder=</span><span class="s">"Password..."</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;/form&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-footer text-center pt-4"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#pablo"</span> <span class="na">class=</span><span class="s">"btn btn-neutral btn-round btn-lg btn-block"</span><span class="nt">&gt;</span>Get Started<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<!-- ### Signup modal



<div class="bd-example" data-example-id="">
<button class="btn btn-round" data-toggle="modal" data-target="#signupModal">
    <i class="material-icons">assignment</i>
    SignUp
</button>

<div class="modal fade" id="signupModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-signup" role="document">
    <div class="modal-content">
      <div class="card card-signup card-plain">
        <div class="modal-header">
          <h5 class="modal-title card-title">Register</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-5 ml-auto">
              <div class="info info-horizontal">
                <div class="icon icon-rose">
                  <i class="material-icons">timeline</i>
                </div>
                <div class="description">
                  <h4 class="info-title">Marketing</h4>
                  <p class="description">
                  We've created the marketing campaign of the website. It was a very interesting collaboration.
                  </p>
                </div>
              </div>

              <div class="info info-horizontal">
                <div class="icon icon-primary">
                  <i class="material-icons">code</i>
                </div>
                <div class="description">
                  <h4 class="info-title">Fully Coded in HTML5</h4>
                  <p class="description">
                  We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                  </p>
                </div>
              </div>

              <div class="info info-horizontal">
                <div class="icon icon-info">
                  <i class="material-icons">group</i>
                </div>
                <div class="description">
                  <h4 class="info-title">Built Audience</h4>
                  <p class="description">
                  There is also a Fully Customizable CMS Admin Dashboard for this product.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-5 mr-auto">
              <div class="social text-center">
                <button class="btn btn-just-icon btn-round btn-twitter">
                  <i class="fab fa-twitter"></i>
                </button>
                <button class="btn btn-just-icon btn-round btn-dribbble">
                  <i class="fab fa-dribbble"></i>
                </button>
                <button class="btn btn-just-icon btn-round btn-facebook">
                  <i class="fab fa-facebook"> </i>
                </button>
                <h4> or be classical </h4>
              </div>

              <form class="form" method="" action="">
                <div class="card-body">
                  <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">face</i>
                        </span>
                        <input type="text" class="form-control" placeholder="First Name...">
                    </div>
                  </div>

                <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="material-icons">email</i>
                      </span>
                      <input type="text" class="form-control" placeholder="Email...">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="material-icons">lock_outline</i>
                      </span>
                      <input type="password" placeholder="Password..." class="form-control" />
                  </div>
                </div>

                <div class="form-check">
                  <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="" checked>
                      <span class="form-check-sign">
                          <span class="check"></span>
                      </span>
                      I agree to the <a href="#something">terms and conditions</a>.
                  </label>
                </div>
                </div>
              <div class="modal-footer justify-content-center">
              <a href="#pablo" class="btn btn-primary btn-round">Get Started</a>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-round"</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">data-target=</span><span class="s">"#signupModal"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-icons"</span><span class="nt">&gt;</span>assignment<span class="nt">&lt;/i&gt;</span>
    SignUp
<span class="nt">&lt;/button&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal fade"</span> <span class="na">id=</span><span class="s">"signupModal"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">role=</span><span class="s">"dialog"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog modal-signup"</span> <span class="na">role=</span><span class="s">"document"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-signup card-plain"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-header"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"modal-title card-title"</span><span class="nt">&gt;</span>Register<span class="nt">&lt;/h5&gt;</span>
          <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-icons"</span><span class="nt">&gt;</span>clear<span class="nt">&lt;/i&gt;</span>
          <span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-5 ml-auto"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"info info-horizontal"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon icon-rose"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-icons"</span><span class="nt">&gt;</span>timeline<span class="nt">&lt;/i&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"description"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"info-title"</span><span class="nt">&gt;</span>Marketing<span class="nt">&lt;/h4&gt;</span>
                  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"description"</span><span class="nt">&gt;</span>
                  We've created the marketing campaign of the website. It was a very interesting collaboration.
                  <span class="nt">&lt;/p&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;/div&gt;</span>

              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"info info-horizontal"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon icon-primary"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-icons"</span><span class="nt">&gt;</span>code<span class="nt">&lt;/i&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"description"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"info-title"</span><span class="nt">&gt;</span>Fully Coded in HTML5<span class="nt">&lt;/h4&gt;</span>
                  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"description"</span><span class="nt">&gt;</span>
                  We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                  <span class="nt">&lt;/p&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;/div&gt;</span>

              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"info info-horizontal"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon icon-info"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-icons"</span><span class="nt">&gt;</span>group<span class="nt">&lt;/i&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"description"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"info-title"</span><span class="nt">&gt;</span>Built Audience<span class="nt">&lt;/h4&gt;</span>
                  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"description"</span><span class="nt">&gt;</span>
                  There is also a Fully Customizable CMS Admin Dashboard for this product.
                  <span class="nt">&lt;/p&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>

            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-5 mr-auto"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"social text-center"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-just-icon btn-round btn-twitter"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-twitter"</span><span class="nt">&gt;&lt;/i&gt;</span>
                <span class="nt">&lt;/button&gt;</span>
                <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-just-icon btn-round btn-dribbble"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-dribbble"</span><span class="nt">&gt;&lt;/i&gt;</span>
                <span class="nt">&lt;/button&gt;</span>
                <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-just-icon btn-round btn-facebook"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fab fa-facebook"</span><span class="nt">&gt;</span> <span class="nt">&lt;/i&gt;</span>
                <span class="nt">&lt;/button&gt;</span>
                <span class="nt">&lt;h4&gt;</span> or be classical <span class="nt">&lt;/h4&gt;</span>
              <span class="nt">&lt;/div&gt;</span>

              <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form"</span> <span class="na">method=</span><span class="s">""</span> <span class="na">action=</span><span class="s">""</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-icons"</span><span class="nt">&gt;</span>face<span class="nt">&lt;/i&gt;</span>
                        <span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"First Name..."</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;/div&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>

                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-icons"</span><span class="nt">&gt;</span>email<span class="nt">&lt;/i&gt;</span>
                      <span class="nt">&lt;/span&gt;</span>
                      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Email..."</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>

                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"material-icons"</span><span class="nt">&gt;</span>lock_outline<span class="nt">&lt;/i&gt;</span>
                      <span class="nt">&lt;/span&gt;</span>
                      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">placeholder=</span><span class="s">"Password..."</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="nt">/&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>

                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">value=</span><span class="s">""</span> <span class="na">checked</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"form-check-sign"</span><span class="nt">&gt;</span>
                          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"check"</span><span class="nt">&gt;&lt;/span&gt;</span>
                      <span class="nt">&lt;/span&gt;</span>
                      I agree to the <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#something"</span><span class="nt">&gt;</span>terms and conditions<span class="nt">&lt;/a&gt;</span>.
                  <span class="nt">&lt;/label&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-footer justify-content-center"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#pablo"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-round"</span><span class="nt">&gt;</span>Get Started<span class="nt">&lt;/a&gt;</span>
              <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;/form&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
 -->

<h3 id="tooltips-and-popovers">Información sobre herramientas y emergentes</h3>

<p><a href="/docs/1.0/components/tooltips/">La información sobre herramientas</a> y los elementos <a href="/docs/1.0/components/popovers/">emergentes</a> se pueden colocar dentro de los modos según sea necesario. Cuando los modales están cerrados, cualquier información sobre herramientas y ventanas emergentes también se descartan automáticamente.</p>

<div id="exampleModalPopovers" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalPopoversLabel">Título modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>emergentes en una modal</h5>
        <p>Este <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute." data-container="#exampleModalPopovers">botón</a> tactiva una ventana emergente al hacer clic.</p>
        <hr />
        <h5>Información sobre herramientas en un modal</h5>
        <p><a href="#" class="tooltip-test" title="Tooltip" data-container="#exampleModalPopovers">Este enlace</a> y <a href="#" class="tooltip-test" title="Tooltip" data-container="#exampleModalPopovers">este enlace</a> tienen información sobre herramientas al desplazarse.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>

<div class="bd-example">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalPopovers">
    Ejecutar demo modal
  </button>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h5&gt;</span>Popover in a modal<span class="nt">&lt;/h5&gt;</span>
  <span class="nt">&lt;p&gt;</span>This <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary popover-test"</span> <span class="na">title=</span><span class="s">"Popover title"</span> <span class="na">data-content=</span><span class="s">"Popover body content is set in this attribute."</span><span class="nt">&gt;</span>button<span class="nt">&lt;/a&gt;</span> triggers a popover on click.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;hr&gt;</span>
  <span class="nt">&lt;h5&gt;</span>Tooltips in a modal<span class="nt">&lt;/h5&gt;</span>
  <span class="nt">&lt;p&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"tooltip-test"</span> <span class="na">title=</span><span class="s">"Tooltip"</span><span class="nt">&gt;</span>This link<span class="nt">&lt;/a&gt;</span> and <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"tooltip-test"</span> <span class="na">title=</span><span class="s">"Tooltip"</span><span class="nt">&gt;</span>that link<span class="nt">&lt;/a&gt;</span> have tooltips on hover.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<h3 id="embedding-youtube-videos">Incrustar videos de YouTube</h3>

<p>La incrustación de videos de YouTube en modales requiere JavaScript adicional, no en Bootstrap para detener automáticamente la reproducción y más. <a href="https://stackoverflow.com/questions/18622508/bootstrap-3-and-youtube-in-modal">Consulte esta útil publicación de desbordamiento de pila </a> para obtener más información.</p>

<h2 id="optional-sizes">Tamaños opcionales</h2>

<p>Los modales tienen dos tamaños opcionales, disponibles a través de clases modificadoras para ubicarse en a <code class="highlighter-rouge">.modal-dialog</code>.  Estos tamaños se activan en ciertos puntos de interrupción para evitar barras de desplazamiento horizontales en vistas más estrechas.</p>

<div class="bd-example">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Gran modal</button>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Pequeña modal</button>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Large modal --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">data-target=</span><span class="s">".bd-example-modal-lg"</span><span class="nt">&gt;</span>Large modal<span class="nt">&lt;/button&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal fade bd-example-modal-lg"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">role=</span><span class="s">"dialog"</span> <span class="na">aria-labelledby=</span><span class="s">"myLargeModalLabel"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog modal-lg"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
      ...
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Small modal --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">data-target=</span><span class="s">".bd-example-modal-sm"</span><span class="nt">&gt;</span>Small modal<span class="nt">&lt;/button&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal fade bd-example-modal-sm"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">role=</span><span class="s">"dialog"</span> <span class="na">aria-labelledby=</span><span class="s">"mySmallModalLabel"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog modal-sm"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
      ...
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title" id="myLargeModalLabel">Gran modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="mySmallModalLabel">Pequeña modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
    </div>
  </div>
</div>

<h2 id="usage">Uso</h2>

<p>El complemento modal alterna su contenido oculto a pedido, a través de atributos de datos o JavaScript. También se agrega <code class="highlighter-rouge">.modal-open</code> to the <code class="highlighter-rouge">&lt;body&gt;</code> anular el comportamiento de desplazamiento predeterminado y genera un <code class="highlighter-rouge">.modal-backdrop</code> área de clic para descartar los modales mostrados al hacer clic fuera del modal.</p>

<h3 id="via-data-attributes">A través de atributos de datos</h3>

<p>Activar un modal sin escribir JavaScript. Colóquelo <code class="highlighter-rouge">data-toggle="modal"</code> en un elemento del controlador, como un botón, junto con <code class="highlighter-rouge">data-target="#foo"</code> o <code class="highlighter-rouge">href="#foo"</code> para seleccionar un modo específico para alternar.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">data-target=</span><span class="s">"#myModal"</span><span class="nt">&gt;</span>Launch modal<span class="nt">&lt;/button&gt;</span></code></pre></figure>

<h3 id="via-javascript">A través de JavaScript</h3>

<p>Llame a un modal con id <code class="highlighter-rouge">myModal</code> con una sola línea de JavaScript:</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myModal'</span><span class="p">).</span><span class="nx">modal</span><span class="p">(</span><span class="nx">options</span><span class="p">)</span></code></pre></figure>

<h3 id="options">Opciones</h3>

<p>Las opciones se pueden pasar a través de atributos de datos o JavaScript. Para los atributos de datos, agregue el nombre de la opción a <code class="highlighter-rouge">data-</code>, como en <code class="highlighter-rouge">data-backdrop=""</code>.</p>

<table class="table table-bordered table-striped table-responsive">
  <thead>
    <tr>
      <th style="width: 100px;">Nombre</th>
      <th style="width: 50px;">Tipo</th>
      <th style="width: 50px;">Defecto</th>
      <th>Descripción</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>fondo</td>
      <td>booleanocierto o la cuerda <code>'static'</code></td>
      <td>cierto</td>
      <td>Incluye un elemento de telón de fondo modal. Alternativamente, especifique <code>static</code> un fondo que no cierre el modal al hacer clic.</td>
    </tr>
    <tr>
      <td>keyboard</td>
      <td>boolean</td>
      <td>cierto</td>
      <td>Cierra el modal cuando se presiona la tecla de escape.</td>
    </tr>
    <tr>
      <td>focus</td>
      <td>boolean</td>
      <td>cierto</td>
      <td>Pone el foco en el modal cuando se inicializa.</td>
    </tr>
    <tr>
      <td>show</td>
      <td>boolean</td>
      <td>cierto</td>
      <td>Muestra el modal cuando se inicializa.</td>
    </tr>
  </tbody>
</table>

<p>Si desea ver más ejemplos y propiedades, consulte la  <strong><a href="http://getbootstrap.com/docs/4.0/components/modal/" target="_blank"> Documentación  oficial de Bootstrap </a></strong>.</p>


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
