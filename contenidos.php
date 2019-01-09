<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$id       = isset($_GET["id"]) ? $_GET["id"] : '';
$template->set("title",ucwords($id)." | ".TITULO);
$template->set("imagen", LOGO);
$template->set("keywords", "");
$template->set("description","");
$template->themeInit();
$contenido     = new Clases\Contenidos();
$contenido->set("cod", $id);
$contenidoData = $contenido->view();
?>

<!-- Content -->
<div class="content">
    <div class="banner bannerEmpresa about-banner">
        <div class="container">
            <h1><?= ucfirst($id); ?></h1>
        </div>
    </div>
    <div class="container">
        <section class="about-us">
            <div class="row-fluid our-description">
                    <?= $contenidoData['contenido']; ?>
            </div>
        </section>
    </div>
</div>
<!-- End content -->
<?php $template->themeEnd(); ?>
	