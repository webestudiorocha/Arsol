<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$id = isset($_GET["id"]) ? $_GET["id"] : '';
$contenido = new Clases\Contenidos();
$contenido->set("cod", $id);
$contenidoData = $contenido->view();
$template->set("title", TITULO . " | Empresa");
$template->set("imagen", LOGO);
$template->set("keywords", "");
$template->set("description", ucfirst(substr(strip_tags($contenidoData['contenido']), 0, 160)));
$template->themeInit();
?>

<!-- Content -->
<div class="content">
    <div class="banner about-banner">
        <div class="container">
            <h1><?= ucfirst($id); ?></h1>
        </div>

    </div>
</div>
<div  class="text-center header-breadcumb">
    <div class="text-center imagenes" >
        <img style="width: 100%;" src="<?= URL ?>/assets/images/iconos/separador.png">
        <img width="100" class="img-separador"src="<?= URL ?>/assets/images/iconos/separador-empresa.png" >
    </div>
</div>
<div class="content">

    <div class="container">
        <section class=" ">
            <div class="row-fluid  ">
                <?= $contenidoData['contenido']; ?>
            </div>
        </section>
    </div>
</div>

<!-- End content -->
<?php $template->themeEnd(); ?>
	