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
$servicioData = $servicio->view();
$imagen = new Clases\Imagenes();
$filter = array('cod='."'".$servicioData['cod']."'");
$imagenesArray = $imagen->list($filter);
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
            <?= $servicioData["titulo"];?>
        </div>
    </div>
    <div class="row-fluid project-item important">
        <div class="span9 project-item-image">
            <?php foreach ($imagenesArray as $actual):?>
             <img src="<?=URL?>/<?=$actual['ruta']?>" alt="">
            <?php endforeach;?>
         <?= $servicioData["desarrollo"];?>
        </div>
    </div>

</div>
<!-- End content -->
<?php $template->themeEnd(); ?>
