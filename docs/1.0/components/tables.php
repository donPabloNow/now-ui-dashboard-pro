<?php
session_start();
require_once("../inc/config.sistema.php");
//require_once   ("../modelo/config.modelo.php"); # configuracion del modelo
// require_once("../modelo/funciones.php");
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
					<li class="toc-entry toc-h3"><a href="#simple-table-with-actions">Mesa simple con acciones</a></li>
					<li class="toc-entry toc-h3"><a href="#shopping-cart-table">Tabla de carro de compras</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">

	 <h1 class="bd-title" id="content">Mesas</h1>
          <p class="bd-lead">Todas las clases de Boostrap para tablas son compatibles y mejoradas.</p>
          <h2 id="examples">Ejemplos</h2>

<h3 id="simple-table-with-actions">Mesa simple con acciones</h3>

<div class="bd-example" data-example-id="">
<table class="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Nombre</th>
            <th>	Puesto de trabajo</th>
            <th>Ya que</th>
            <th class="text-right">Salario</th>
            <th class="text-right">Comportamiento</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-center">1</td>
            <td>Andrew Mike</td>
            <td>Develop</td>
            <td>2013</td>
            <td class="text-right">&euro; 99,225</td>
            <td class="td-actions text-right">
                <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
                    <i class="now-ui-icons users_single-02"></i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                    <i class="now-ui-icons ui-2_settings-90"></i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </button>
            </td>
        </tr>
        <tr>
            <td class="text-center">2</td>
            <td>John Doe</td>
            <td>Design</td>
            <td>2012</td>
            <td class="text-right">&euro; 89,241</td>
            <td class="td-actions text-right">
              <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-round btn-icon">
                  <i class="now-ui-icons users_single-02"></i>
              </button>
              <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-round btn-icon">
                  <i class="now-ui-icons ui-2_settings-90"></i>
              </button>
              <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon">
                  <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
            </td>
        </tr>
        <tr>
            <td class="text-center">3</td>
            <td>Alex Mike</td>
            <td>Design</td>
            <td>2010</td>
            <td class="text-right">&euro; 92,144</td>
            <td class="td-actions text-right">
                <button type="button" rel="tooltip" class="btn btn-info btn-simple btn-icon btn-sm">
                    <i class="now-ui-icons users_single-02"></i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-success btn-simple btn-icon btn-sm">
                    <i class="now-ui-icons ui-2_settings-90"></i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-danger btn-simple btn-icon btn-sm">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </button>
            </td>
        </tr>
    </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;thead&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">class=</span><span class="s">"text-center"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th&gt;</span>Name<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th&gt;</span>Job Position<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th&gt;</span>Since<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">class=</span><span class="s">"text-right"</span><span class="nt">&gt;</span>Salary<span class="nt">&lt;/th&gt;</span>
            <span class="nt">&lt;th</span> <span class="na">class=</span><span class="s">"text-right"</span><span class="nt">&gt;</span>Actions<span class="nt">&lt;/th&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;/thead&gt;</span>
    <span class="nt">&lt;tbody&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"text-center"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Andrew Mike<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Develop<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>2013<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"text-right"</span><span class="nt">&gt;</span><span class="ni">&amp;euro;</span> 99,225<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"td-actions text-right"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">rel=</span><span class="s">"tooltip"</span> <span class="na">class=</span><span class="s">"btn btn-info btn-sm btn-icon"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons users_single-02"</span><span class="nt">&gt;&lt;/i&gt;</span>
                <span class="nt">&lt;/button&gt;</span>
                <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">rel=</span><span class="s">"tooltip"</span> <span class="na">class=</span><span class="s">"btn btn-success btn-sm btn-icon"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-2_settings-90"</span><span class="nt">&gt;&lt;/i&gt;</span>
                <span class="nt">&lt;/button&gt;</span>
                <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">rel=</span><span class="s">"tooltip"</span> <span class="na">class=</span><span class="s">"btn btn-danger btn-sm btn-icon"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_simple-remove"</span><span class="nt">&gt;&lt;/i&gt;</span>
                <span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"text-center"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>John Doe<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Design<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>2012<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"text-right"</span><span class="nt">&gt;</span><span class="ni">&amp;euro;</span> 89,241<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"td-actions text-right"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">rel=</span><span class="s">"tooltip"</span> <span class="na">class=</span><span class="s">"btn btn-info btn-sm btn-round btn-icon"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons users_single-02"</span><span class="nt">&gt;&lt;/i&gt;</span>
              <span class="nt">&lt;/button&gt;</span>
              <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">rel=</span><span class="s">"tooltip"</span> <span class="na">class=</span><span class="s">"btn btn-success btn-sm btn-round btn-icon"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-2_settings-90"</span><span class="nt">&gt;&lt;/i&gt;</span>
              <span class="nt">&lt;/button&gt;</span>
              <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">rel=</span><span class="s">"tooltip"</span> <span class="na">class=</span><span class="s">"btn btn-danger btn-sm btn-round btn-icon"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_simple-remove"</span><span class="nt">&gt;&lt;/i&gt;</span>
              <span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
        <span class="nt">&lt;tr&gt;</span>
            <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"text-center"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Alex Mike<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>Design<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td&gt;</span>2010<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"text-right"</span><span class="nt">&gt;</span><span class="ni">&amp;euro;</span> 92,144<span class="nt">&lt;/td&gt;</span>
            <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"td-actions text-right"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">rel=</span><span class="s">"tooltip"</span> <span class="na">class=</span><span class="s">"btn btn-info btn-simple btn-icon btn-sm"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons users_single-02"</span><span class="nt">&gt;&lt;/i&gt;</span>
                <span class="nt">&lt;/button&gt;</span>
                <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">rel=</span><span class="s">"tooltip"</span> <span class="na">class=</span><span class="s">"btn btn-success btn-simple btn-icon btn-sm"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-2_settings-90"</span><span class="nt">&gt;&lt;/i&gt;</span>
                <span class="nt">&lt;/button&gt;</span>
                <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">rel=</span><span class="s">"tooltip"</span> <span class="na">class=</span><span class="s">"btn btn-danger btn-simple btn-icon btn-sm"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_simple-remove"</span><span class="nt">&gt;&lt;/i&gt;</span>
                <span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;/td&gt;</span>
        <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h3 id="shopping-cart-table">Tabla de carro de compras</h3>

<div class="bd-example" data-example-id="">
<div class="table-responsive">
  <table class="table table-shopping">
      <thead>
          <tr>
              <th class="text-center"></th>
              <th>PRODUCTO</th>
              <th class="th-description">Color</th>
              <th class="th-description">Tamaño</th>
              <th class="text-right">Pricio</th>
              <th class="text-right">Cantidad</th>
              <th class="text-right">Cantidad</th>
              <th></th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>
                  <div class="img-container">
                      <img src="inc/adm/assets/img/NF0A2VFL_619_hero.jpeg" alt="..." />
                  </div>
              </td>
              <td class="td-name">
                  <a href="#jacket">Spring Jacket</a>
                  <br /><small>by Dolce&amp;Gabbana</small>
              </td>
              <td>
                  Red
              </td>
              <td>
                  M
              </td>
              <td class="td-number">
                  <small>&#x20AC;</small>549
              </td>
              <td class="td-number">
                  1
                  <div class="btn-group">
                      <button class="btn btn-info btn-sm"> <i class="now-ui-icons ui-1_simple-delete"></i> </button>
                      <button class="btn btn-info btn-sm"> <i class="now-ui-icons ui-1_simple-add"></i> </button>
                  </div>
              </td>
              <td class="td-number">
                  <small>&#x20AC;</small>549
              </td>
              <td class="td-actions">
                  <button type="button" rel="tooltip" data-placement="left" title="Remove item" class="btn btn-round btn-icon btn-neutral">
                      <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
              </td>
          </tr>
      </tbody>
  </table>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"table-responsive"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-shopping"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;thead&gt;</span>
          <span class="nt">&lt;tr&gt;</span>
              <span class="nt">&lt;th</span> <span class="na">class=</span><span class="s">"text-center"</span><span class="nt">&gt;&lt;/th&gt;</span>
              <span class="nt">&lt;th&gt;</span>Product<span class="nt">&lt;/th&gt;</span>
              <span class="nt">&lt;th</span> <span class="na">class=</span><span class="s">"th-description"</span><span class="nt">&gt;</span>Color<span class="nt">&lt;/th&gt;</span>
              <span class="nt">&lt;th</span> <span class="na">class=</span><span class="s">"th-description"</span><span class="nt">&gt;</span>Size<span class="nt">&lt;/th&gt;</span>
              <span class="nt">&lt;th</span> <span class="na">class=</span><span class="s">"text-right"</span><span class="nt">&gt;</span>Price<span class="nt">&lt;/th&gt;</span>
              <span class="nt">&lt;th</span> <span class="na">class=</span><span class="s">"text-right"</span><span class="nt">&gt;</span>Qty<span class="nt">&lt;/th&gt;</span>
              <span class="nt">&lt;th</span> <span class="na">class=</span><span class="s">"text-right"</span><span class="nt">&gt;</span>Amount<span class="nt">&lt;/th&gt;</span>
              <span class="nt">&lt;th&gt;&lt;/th&gt;</span>
          <span class="nt">&lt;/tr&gt;</span>
      <span class="nt">&lt;/thead&gt;</span>
      <span class="nt">&lt;tbody&gt;</span>
          <span class="nt">&lt;tr&gt;</span>
              <span class="nt">&lt;td&gt;</span>
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"img-container"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"https://images.thenorthface.com/is/image/TheNorthFace/NF0A2VFL_619_hero"</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;/td&gt;</span>
              <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"td-name"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#jacket"</span><span class="nt">&gt;</span>Spring Jacket<span class="nt">&lt;/a&gt;</span>
                  <span class="nt">&lt;br&gt;&lt;small&gt;</span>by Dolce<span class="ni">&amp;amp;</span>Gabbana<span class="nt">&lt;/small&gt;</span>
              <span class="nt">&lt;/td&gt;</span>
              <span class="nt">&lt;td&gt;</span>
                  Red
              <span class="nt">&lt;/td&gt;</span>
              <span class="nt">&lt;td&gt;</span>
                  M
              <span class="nt">&lt;/td&gt;</span>
              <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"td-number"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;small&gt;</span><span class="ni">&amp;#x20AC;</span><span class="nt">&lt;/small&gt;</span>549
              <span class="nt">&lt;/td&gt;</span>
              <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"td-number"</span><span class="nt">&gt;</span>
                  1
                  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-info btn-sm"</span><span class="nt">&gt;</span> <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_simple-delete"</span><span class="nt">&gt;&lt;/i&gt;</span> <span class="nt">&lt;/button&gt;</span>
                      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-info btn-sm"</span><span class="nt">&gt;</span> <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_simple-add"</span><span class="nt">&gt;&lt;/i&gt;</span> <span class="nt">&lt;/button&gt;</span>
                  <span class="nt">&lt;/div&gt;</span>
              <span class="nt">&lt;/td&gt;</span>
              <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"td-number"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;small&gt;</span><span class="ni">&amp;#x20AC;</span><span class="nt">&lt;/small&gt;</span>549
              <span class="nt">&lt;/td&gt;</span>
              <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"td-actions"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">rel=</span><span class="s">"tooltip"</span> <span class="na">data-placement=</span><span class="s">"left"</span> <span class="na">title=</span><span class="s">"Remove item"</span> <span class="na">class=</span><span class="s">"btn btn-round btn-icon btn-neutral"</span><span class="nt">&gt;</span>
                      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"now-ui-icons ui-1_simple-remove"</span><span class="nt">&gt;&lt;/i&gt;</span>
                  <span class="nt">&lt;/button&gt;</span>
              <span class="nt">&lt;/td&gt;</span>
          <span class="nt">&lt;/tr&gt;</span>
      <span class="nt">&lt;/tbody&gt;</span>
  <span class="nt">&lt;/table&gt;</span>
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
