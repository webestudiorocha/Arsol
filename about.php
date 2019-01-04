
<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$template->set("title", TITULO);
$template->set("description", "");
$template->set("keywords", "");
$template->set("imagen", LOGO);
$template->themeInit();
?>
        <!-- Content -->
		<div class="content">
			<div class="banner about-banner">
				<div class="container">
					<h1>About Us</h1>
					<p>Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. </p>
				</div>
			</div>

			<div class="container">
				<section class="about-us">
					<h2>Who We Are?</h2>
					<div class="row-fluid our-description">
						<div class="span6">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac libero non nisi suscipit ultricies. In tincidunt ipsum sit amet eros facilisis venenatis. Suspendisse potenti. Proin nec est lacus, a ornare ligula. Sed et massa nibh. Praesent lacinia vehicula metus id pharetra. Sed lobortis pretium dui at scelerisque.</p>
							<p>Ut sed justo condimentum enim lobortis venenatis. Aliquam sed erat vitae erat ultrices tempor. Curabitur et ante mauris, ut porttitor mi.</p>
						</div>

						<div class="span6">
							<div class="flexslider">
								<ul class="slides">
									<li>
										<img alt="" src="<?=URL;?>/upload/about2.jpg" />

									</li>
								</ul>
							</div>
						</div>
					</div>

					
				</section>

			</div>
		</div>
		<!-- End content -->
<?php $template->themeEnd(); ?>
	