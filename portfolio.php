<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$template->set("title", "Lotes | " . TITULO);
$template->set("imagen", LOGO);
$template->set("keywords", "");
$template->set("description", "");
$template->themeInit();
//Clases
$cod = isset($_GET["cod"]) ? $_GET["cod"] : '';
$portfolio = new Clases\Portfolio();
$portfolio->set("cod", $cod);
$portfolioData = $portfolio->view();
$imagenes = new Clases\Imagenes();
$imagenes->set("cod", $cod);
$imagenesArray = $imagenes->view();
$categoria = new Clases\Categorias();
$categoria->set("cod", $portfolioData['categoria']);
$categoriaData= $categoria->view();

?>    <!-- Content -->
<div class="content">
    <div class="banner about-banner">
        <div class="container">
            <h1>Portfolio</h1>
        </div>
    </div>

    <div class="container">
        <div class="row-fluid single-project">
            <div class="span9 single-item-image">
                <div style=" height: 800px; background: url(<?= URL .'/'. $imagenesArray['ruta']?>) no-repeat center center/cover;"> </div>
            </div>

            <div class="span3 project-item-content">
                <h3> <?= ucfirst($portfolioData['titulo']) ;?></h3>
                <h5>Categoría:</h5>
                <ul class="services-list">
                    <li><a class="all-views" ><?= ucfirst($categoriaData['titulo']);?></a></li>
                </ul>
                <h5>Desarrollo:</h5>
                <?= ucfirst($portfolioData['desarrollo']);?>
                <p class="share-project">Share Project</p>
                <ul class="social-project">
                    <li><a class="fb-port" href="#"></a></li>
                    <li><a class="tweet-port" href="#"></a></li>
                    <li><a class="soc-port" href="#"></a></li>
                    <li><a class="linkedin-port" href="#"></a></li>
                    <li><a class="google-port" href="#"></a></li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!-- End content -->


</div>
<!-- End Container -->

<?php $template->themeEnd(); ?>
