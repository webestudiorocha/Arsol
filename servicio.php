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
$servicio = new Clases\Servicios();
$servicioArray = $servicio->list("", "", "");
$imagen = new Clases\Imagenes();
$imagenArray = $imagen->list("");
?>
<!-- Content -->
<div class="content">
    <div class="banner about-banner">
        <div class="container">
            <h1>Servicios</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row-fluid">
        <div class="span7 important-projects">
            <?php foreach ($servicioArray as $servicio): ?>
                <h2><?=$servicio['titulo']; ?></h2>
        </div>
    </div>
    <div class="row-fluid project-item important">
        <div class="span9 project-item-image">
            <img alt="" src="<?= URL . '/' . $imagenArray[0]['ruta']; ?>">
            <p><?=$servicio['desarrollo']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- End content -->
<?php $template->themeEnd(); ?>
