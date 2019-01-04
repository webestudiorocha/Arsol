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

$id = isset($_GET["id"]) ? $_GET["id"] : '';
$servicio = new Clases\Servicios();
$servicio->set("cod", $id);
$servicioArray = $servicio->list("", "" , "");
$servicioData = $servicio->view();
$imagenes = new Clases\Imagenes();
$filter = array("cod = '$id'");
$imagenesArray = $imagenes->list("", "", "");
$medidas = explode("x", $servicioData['var2']);
?>
<!-- Content -->
<div class="content">
    <div class="banner about-banner">
        <div class="container">
            <h1>Servicios</h1>
            <p>Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. </p>
        </div>
    </div>
</div>
    <div class="container">

        <div class="row-fluid">
            <div class="span7 important-projects">
                <h2>Important Portfolio Item or Lastest</h2>
                <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>
            </div>
            <div class="span5 important-pagination">
                <a class="prev-project">Previous</a>
                <a class="next-project">Next</a>
            </div>
        </div>
        <div class="row-fluid project-item important">
            <div class="span9 project-item-image">
                <img alt="" src="upload/blog-image.jpg">
            </div>

            <div class="span3 project-item-content">
                <h3>Portfolio Item One</h3>
                <span class="published">Published: March 20, 2013</span>
                <h5>Services:</h5>
                <ul class="services-list">
                    <li><a href="#">Servicio1,</a></li>
                    <li><a href="#">UI/UX,</a></li>
                    <li><a href="#">Web Design</a></li>
                </ul>
                <h5>About Project:</h5>
                <p>Suspendisse nec facilisis velit. Fusce et justo tortor. In dictum congue ...</p>
                <ul class="important-list">
                    <li>
                        <a class="all-views" href="#">2354</a>
                    </li>
                    <li>
                        <a class="voted" href="#">1256</a>
                    </li>
                    <li>
                        <a class="all-comment" href="#">20</a>
                    </li>
                </ul>

                <a class="link-it" href="#">http://bit.ly/Y46Ozd</a>
                <ul class="social-project">
                    <li><a class="fb-port" href="#"></a></li>
                    <li><a class="tweet-port" href="#"></a></li>
                    <li><a class="soc-port" href="#"></a></li>
                    <li><a class="linkedin-port" href="#"></a></li>
                    <li><a class="google-port" href="#"></a></li>
                </ul>
                <a class="button-link" href="single-project.html">Visit Link</a>
            </div>
        </div>
        <div class="projects-container four-columns">
            <?php foreach ($servicioArray as $servicio):?>
            <div class="project-post ">
                <div class="project-photo">
                    <img alt="" src="upload/portfolio1.jpg">
                    <div class="hover-project">
                        <a class="view-image" href="upload/portfolio1.jpg" title="Image #1"
                           data-fancybox-group="portfolio"></a>
                        <a class="visit-link" href="single-project.html"></a>
                    </div>
                </div>
                <h3><?php echo $servicio['titulo']; ?></h3>
                <p><?php echo $servicio['desarrollo'];?></p>
            </div>
        </div>
        <?php endforeach;?>
        <a class="load-more portfolio-load" href="#">Load More</a>

    </div>

<!-- End content -->
<?php $template->themeEnd(); ?>
