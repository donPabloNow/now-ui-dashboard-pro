<?php
session_start();
require_once("../../inc/config.sistema.php");
?>
<!DOCTYPE html>
<html lang="es">
<?php
require_once(RUTA_SISTEMA . "inc/head.php");
?>

<body class="sidebar-mini">

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

<!-- Menu -->
    <?php
    require_once(RUTA_SISTEMA . "inc/menu_nuevo.php");
    ?>

		<div class="main-panel" id="main-panel">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-wrapper">

						<div class="navbar-toggle">
							<button type="button" class="navbar-toggler">
								<span class="navbar-toggler-bar bar1"></span>
								<span class="navbar-toggler-bar bar2"></span>
								<span class="navbar-toggler-bar bar3"></span>
							</button>
						</div>

						<a class="navbar-brand" href="#pablo">Botones</a>
					</div>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-bar navbar-kebab"></span>
						<span class="navbar-toggler-bar navbar-kebab"></span>
						<span class="navbar-toggler-bar navbar-kebab"></span>
					</button>

					<div class="collapse navbar-collapse justify-content-end" id="navigation">


						<form>
							<div class="input-group no-border">
								<input type="text" value="" class="form-control" placeholder="Search...">
								<div class="input-group-append">
									<div class="input-group-text">
										<i class="now-ui-icons ui-1_zoom-bold"></i>
									</div>
								</div>
							</div>
						</form>

						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="#pablo">
									<i class="now-ui-icons media-2_sound-wave"></i>
									<p>
										<span class="d-lg-none d-md-block">Stats</span>
									</p>
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="now-ui-icons location_world"></i>
									<p>
										<span class="d-lg-none d-md-block">Some Actions</span>
									</p>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="#pablo">
									<i class="now-ui-icons users_single-02"></i>
									<p>
										<span class="d-lg-none d-md-block">Account</span>
									</p>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- End Navbar -->


			<div class="panel-header panel-header-sm">


			</div>


			<div class="content">
				<div class="card">
					<div class="row">
						<div class="col-md-6">
							<div class="card-header">
								<h4 class="card-title">Pick your Color</h4>
							</div>
							<div class="card-body">
								<button class="btn">Default</button>
								<button class="btn btn-primary">Primary</button>
								<button class="btn btn-info">Info</button>
								<button class="btn btn-success">Success</button>
								<button class="btn btn-warning">Warning</button>
								<button class="btn btn-danger">Danger</button>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card-header">
								<h4 class="card-title">Buttons with Label</h4>
							</div>
							<div class="card-body">
								<button class="btn">
									<span class="btn-label">
										<i class="now-ui-icons arrows-1_minimal-left"></i>
									</span>
									Left
								</button>
								<button class="btn">
									Right
									<span class="btn-label btn-label-right">
										<i class="now-ui-icons arrows-1_minimal-right"></i>
									</span>
								</button>
								<button class="btn btn-info">
									<span class="btn-label">
										<i class="now-ui-icons travel_info"></i>
									</span>
									Info
								</button>
								<button class="btn btn-success">
									<span class="btn-label">
										<i class="now-ui-icons ui-1_check"></i>
									</span>
									Success
								</button>
								<button class="btn btn-warning">
									<i class="now-ui-icons ui-2_time-alarm"></i>
									Warning
								</button>
								<button class="btn btn-danger">
									<i class="now-ui-icons ui-1_simple-remove"></i>
									Danger
								</button>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="card-header">
								<h4 class="card-title">Pick your Size</h4>
							</div>
							<div class="card-body">
								<button class="btn btn-primary btn-sm">Small</button>
								<button class="btn btn-primary">Regular</button>
								<button class="btn btn-primary btn-lg">Large</button>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card-header">
								<h4 class="card-title">Pick your Style</h4>
							</div>
							<div class="card-body">
								<button class="btn btn-primary">Default</button>
								<button class="btn btn-primary btn-round">round</button>
								<button class="btn btn-primary btn-round">
									<i class="now-ui-icons ui-2_favourite-28"></i>
									with icon
								</button>
								<button class="btn btn-primary btn-round btn-icon">
									<i class="now-ui-icons ui-2_favourite-28"></i>
								</button>
								<button class="btn btn-outline-primary">
									Outline
								</button>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="card-header">
								<h4 class="card-title">Pagination</h4>
							</div>
							<div class="card-body">
								<nav aria-label="Page navigation example">
									<ul class="pagination pagination-primary">
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#link">2</a></li>
										<li class="page-item"><a class="page-link" href="#link">3</a></li>
										<li class="page-item"><a class="page-link" href="#link">4</a></li>
										<li class="page-item"><a class="page-link" href="#link">5</a></li>
									</ul>

									<ul class="pagination">
										<li class="page-item">
											<a class="page-link" href="#link" aria-label="Previous">
												<span aria-hidden="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
											</a>
										</li>
										<li class="page-item"><a class="page-link" href="#link">1</a></li>
										<li class="page-item active"><a class="page-link" href="#link">2</a></li>
										<li class="page-item"><a class="page-link" href="#link">3</a></li>
										<li class="page-item">
											<a class="page-link" href="#link" aria-label="Next">
												<span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
											</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card-header">
								<h4 class="card-title">Button Group</h4>
							</div>
							<div class="card-body">
								<div class="btn-group">
									<button type="button" class="btn btn-info">Left</button>
									<button type="button" class="btn btn-info">Middle</button>
									<button type="button" class="btn btn-info">Right</button>
								</div>
								<br>
								<br>

								<div class="btn-group" data-toggle="buttons">
									<button type="button" class="btn btn-round btn-info">1</button>
									<button type="button" class="btn btn-round btn-info">2</button>
									<button type="button" class="btn btn-round btn-info">3</button>
									<button type="button" class="btn btn-round btn-info">4</button>
								</div>

								<div class="btn-group">
									<button type="button" class="btn btn-round btn-info">5</button>
									<button type="button" class="btn btn-round btn-info">6</button>
									<button type="button" class="btn btn-round btn-info">7</button>
								</div>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-sm-12">
							<div class="card-header">
								<h4 class="card-title">Social buttons</h4>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-4 col-sm-5">
										<p class="category">Default</p>
										<button class="btn btn-twitter">
											<i class="fab fa-twitter"></i> Connect with Twitter
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<p class="category">&nbsp;</p>
										<button class="btn btn-icon btn-twitter">
											<i class="fab fa-twitter"></i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<p class="category">&nbsp;</p>
										<button class="btn btn-icon btn-round btn-twitter">
											<i class="fab fa-twitter"></i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<p class="category">Neutral</p>
										<button class="btn btn-icon btn-neutral btn-twitter">
											<i class="fab fa-twitter"></i>
										</button>
									</div>
									<div class="col-md-3 col-sm-4">
										<p class="category">&nbsp;</p>
										<button class="btn btn-neutral btn-twitter">
											<i class="fab fa-twitter"></i> Connect with Twitter
										</button>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-5">
										<button class="btn btn-facebook">
											<i class="fab fa-facebook-square"></i> Share · 2.2k
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-facebook">
											<i class="fab fa-facebook-f"> </i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-round btn-facebook">
											<i class="fab fa-facebook-f"> </i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-neutral btn-facebook">
											<i class="fab fa-facebook-square"> </i>
										</button>
									</div>
									<div class="col-md-3 col-sm-4">
										<button class="btn btn-neutral btn-facebook">
											<i class="fab fa-facebook-square"></i> Share · 2.2k
										</button>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-5">
										<button class="btn btn-google">
											<i class="fab fa-google-plus-g"></i> Share on Google+
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon  btn-google">
											<i class="fab fa-google-plus-g"> </i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-round btn-google">
											<i class="fab fa-google-plus-g"> </i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-neutral btn-google">
											<i class="fab fa-google-plus-g"> </i>
										</button>
									</div>
									<div class="col-md-3 col-sm-4">
										<button class="btn btn-neutral btn-google">
											<i class="fab fa-google-plus-g"></i> Share on Google+
										</button>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-5">
										<button class="btn btn-linkedin">
											<i class="fab fa-linkedin"></i> Connect with Linkedin
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon  btn-linkedin">
											<i class="fab fa-linkedin"></i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-round btn-linkedin">
											<i class="fab fa-linkedin"></i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-neutral btn-linkedin">
											<i class="fab fa-linkedin"></i>
										</button>
									</div>
									<div class="col-md-3 col-sm-4">
										<button class="btn btn-neutral btn-linkedin">
											<i class="fab fa-linkedin"></i> Connect with Linkedin
										</button>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-5">
										<button class="btn btn-pinterest">
											<i class="fab fa-pinterest"></i> Pint it · 212
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-pinterest">
											<i class="fab fa-pinterest"></i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-round btn-pinterest">
											<i class="fab fa-pinterest"></i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-neutral btn-pinterest">
											<i class="fab fa-pinterest"></i>
										</button>
									</div>
									<div class="col-md-3 col-sm-4">
										<button class="btn btn-neutral btn-pinterest">
											<i class="fab fa-pinterest"></i> Pint it · 212
										</button>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-5">
										<button class="btn btn-youtube">
											<i class="fab fa-youtube"></i> View on Youtube
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-youtube">
											<i class="fab fa-youtube"> </i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-round btn-youtube">
											<i class="fab fa-youtube"> </i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-neutral btn-youtube">
											<i class="fab fa-youtube"> </i>
										</button>
									</div>
									<div class="col-md-3 col-sm-4">
										<button class="btn btn-neutral btn-youtube">
											<i class="fab fa-youtube"></i> View on Youtube
										</button>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-5">
										<button class="btn btn-tumblr">
											<i class="fab fa-tumblr-square"></i> Repost
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon  btn-tumblr">
											<i class="fab fa-tumblr"> </i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-round btn-tumblr">
											<i class="fab fa-tumblr"> </i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-neutral btn-tumblr">
											<i class="fab fa-tumblr-square"> </i>
										</button>
									</div>
									<div class="col-md-3 col-sm-4">
										<button class="btn btn-neutral btn-tumblr">
											<i class="fab fa-tumblr-square"></i> Repost
										</button>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-5">
										<button class="btn btn-github">
											<i class="fab fa-github"></i> Connect with Github
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon  btn-github">
											<i class="fab fa-github"></i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-round btn-github">
											<i class="fab fa-github"></i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-neutral btn-github">
											<i class="fab fa-github"></i>
										</button>
									</div>
									<div class="col-md-3 col-sm-4">
										<button class="btn btn-neutral btn-github">
											<i class="fab fa-github"></i> Connect with Github
										</button>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-5">
										<button class="btn btn-behance">
											<i class="fab fa-behance-square"></i> Follow us
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon  btn-behance">
											<i class="fab fa-behance"></i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-round btn-behance">
											<i class="fab fa-behance"></i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-neutral btn-behance">
											<i class="fab fa-behance"></i>
										</button>
									</div>
									<div class="col-md-3 col-sm-4">
										<button class="btn btn-neutral btn-behance">
											<i class="fab fa-behance-square"></i> Follow us
										</button>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-5">
										<button class="btn btn-dribbble">
											<i class="fab fa-dribbble"></i> Find us on Dribble
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon  btn-dribbble">
											<i class="fab fa-dribbble"></i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-round btn-dribbble">
											<i class="fab fa-dribbble"></i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-neutral btn-dribbble">
											<i class="fab fa-dribbble"></i>
										</button>
									</div>
									<div class="col-md-3 col-sm-4">
										<button class="btn btn-neutral btn-dribbble">
											<i class="fab fa-dribbble"></i> Find us on Dribble
										</button>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-5">
										<button class="btn btn-reddit">
											<i class="fab fa-reddit"></i> Repost · 232
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon  btn-reddit">
											<i class="fab fa-reddit"></i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-round btn-reddit">
											<i class="fab fa-reddit"></i>
										</button>
									</div>
									<div class="col-md-1 col-sm-1">
										<button class="btn btn-icon btn-neutral btn-reddit">
											<i class="fab fa-reddit"></i>
										</button>
									</div>
									<div class="col-md-3 col-sm-4">
										<button class="btn btn-neutral btn-reddit">
											<i class="fab fa-reddit"></i> Repost · 232
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>


			<!-- Pie de pagina -->
			<?php
			require_once(RUTA_SISTEMA . "inc/footer.php");
			?>



		</div>


	</div>

	<?php
	require_once(RUTA_SISTEMA . "inc/adm/configuracion.php");
	?>

	<!-- Libreias js -->
	<?php
	require_once(RUTA_SISTEMA . "inc/script.php");
	?>

</body>

</html>
