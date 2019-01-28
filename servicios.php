<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$template = new Clases\TemplateSite();
$template->set("title", TITULO.' | Portfolio');
$template->set("imagen", LOGO);
$template->set("keywords", "Portfolio de ".TITULO);
$template->set("description", "Portfolio de ".TITULO);
$template->themeInit();
$funciones = new Clases\PublicFunction();
$cod = isset($_GET["cod"]) ? $_GET["cod"] : '';
$servicio = new Clases\Servicios();
$servicio->set("cod", $cod);
$servicio_data = $servicio->list("", "" , "");
$imagenes = new Clases\Imagenes();
$filter = array("area='servicio'");
$imagenes_data = $imagenes->list($filter);

?>
<!-- Content -->
<div class="content">
    <div class="banner about-banner">
        <div class="container">
            <h1>Servicios</h1>
        </div>
    </div>
    <div class="container mt-15">
        <div class="row single-project">
            <div class="col-md-9 single-item-image">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <?php foreach ($servicio_data as $ser): ?>
                    <div class="carousel-inner">

                      <?php  $imagenes->set("cod", $ser['cod']);
                        $img = $imagenes->view();
                        ?>
                        <a href="<?= URL . '/servicio/' . $funciones->normalizar_link($ser['titulo']) . '/' . $funciones->normalizar_link($ser['cod']) ?>">

                    </div>
                    <?php endforeach; ?>
                </div>
                <br>
            </div>

        </div>
    </div>
</div>
<!-- End content -->
<?php $template->themeEnd(); ?>
