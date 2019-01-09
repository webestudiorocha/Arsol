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
$imagenes = new Clases\Imagenes();
$filter = array("cod='" . $servicio_data['cod'] . "'");
$imagenes_data = $imagenes->list($filter);
?>
<!-- Content -->
<div class="content">
    <div class="banner about-banner">
        <div class="container">
            <h1><?= ucfirst($servicio_data["titulo"]);?></h1>
        </div>
    </div>
    <div class="container mt-15">
        <div class="row single-project">
            <div class="col-md-9 single-item-image">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $activo = 0;
                        foreach ($imagenes_data as $img) {
                            ?>
                            <div class="carousel-item <?php if ($activo==0){echo 'active';$activo++;} ?>" style=" height: 600px; background: url(<?= URL . '/'.$img['ruta'] ?>) no-repeat center center/cover;">
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <br>
                <?= ucfirst($servicio_data["desarrollo"]);?>
            </div>
            <?php include'assets/inc/side/side.inc.php';?>
        </div>
    </div>
</div>
<!-- End content -->
<?php $template->themeEnd(); ?>
