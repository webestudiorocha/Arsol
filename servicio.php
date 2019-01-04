<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$template->set("title", "");
$template->set("description", "");
$template->set("keywords", "");
$template->set("imagen", URL . "/img/logo.png");
$funciones = new Clases\PublicFunction();
$template->themeInit();
$servicio = new Clases\Servicios();
$servicioArray = $servicio->list("", "", "");
$imagen = new Clases\Imagenes();
$imagenArray = $imagen->list("", "", "");

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
            <?php foreach ($servicioArray

            as $servicio): ?>
            <h2><?php echo $servicio['titulo']; ?></h2>
        </div>
        <div class="span5 important-pagination">
            <a class="prev-project">Previous</a>
            <a class="next-project">Next</a>
        </div>
    </div>
    <div class="row-fluid project-item important">
        <div class="span9 project-item-image">
            <img alt="" src="<?= URL . '/' . $imagenArray[0]['ruta']; ?>">
            <p><?php echo $servicio['desarrollo']; ?></p>
        </div>
        <?php endforeach; ?>
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
</div>
<!-- End content -->
<?php $template->themeEnd(); ?>
