<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$template->set("title", "Estudio Jurídico Rocha - Marcas y Patentes - Productos");
$template->set("description", "Nuestro estudio está ampliamente capacitado para registrar tu marca.");
$template->set("keywords", "marca y patente,estudio juridico de marcas y patentes, estudio juridico en buenos aires, marcas y patentes en buenos aires");
$template->set("imagen", URL . "/img/logo.png");
$funciones = new Clases\PublicFunction();
$template->themeInit();
$cod = isset($_GET["cod"]) ? $_GET["cod"] : '';
$servicio = new Clases\Servicios();
$servicio->set("cod", $cod);
$servicio_data = $servicio->view();
$imagen = new Clases\Imagenes();
$imagen->set("cod",$servicio_data['cod']);
$img = $imagen->view();
?>
<!-- Content -->
<div class="content">
    <div class="banner about-banner">
        <div class="container">
            <h1><?= $servicio_data["titulo"];?></h1>
        </div>
    </div>
    <div class="container">
        <div class="row single-project">
            <div class="col-md-9 single-item-image">
                <div style=" height: 400px; background: url(<?= URL .'/'. $img['ruta']?>) no-repeat center center/cover;"> </div>
                <?= ucfirst($servicio_data["desarrollo"]);?>
            </div>
            <?php include'assets/inc/side/side.inc.php';?>
        </div>
    </div>
</div>
<!-- End content -->
<?php $template->themeEnd(); ?>
