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
$img = $imagenes->view();
$categoria = new Clases\Categorias();
$categoria->set("cod", $portfolioData['categoria']);
$categoriaData= $categoria->view();

?>    <!-- Content -->
<div class="content">
    <div class="banner about-banner">
        <div class="container">
            <h1> <?= ucfirst($portfolioData['titulo']) ;?></h1>
        </div>
    </div>
    <div class="container">
        <div class="row-fluid single-project">
            <div class="span9 single-item-image">
                <div style=" height: 800px; background: url(<?= URL .'/'. $img['ruta']?>) no-repeat center center/cover;"> </div>
                <?= ucfirst($portfolioData['desarrollo']);?>
            </div>
            <?php include'assets/inc/side/side.inc.php';?>
        </div>
    </div>
</div>
<?php $template->themeEnd(); ?>
