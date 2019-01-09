<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$template->set("title", TITULO);
$template->set("imagen", LOGO);
$template->set("keywords", "");
$template->set("description", "");
$template->themeInit();
//Clases
$cod = isset($_GET["cod"]) ? $_GET["cod"] : '';
$novedades = new Clases\Novedades();
$novedades->set("cod", $cod);
$novedades_data = $novedades->view();
$imagenes = new Clases\Imagenes();
$imagenes->set("cod", $cod);
$img = $imagenes->view();
$fecha = explode("-", $novedades_data['fecha']);
?>
    <!-- Content -->
    <div class="content">
        <div class="banner about-banner">
            <div class="container">
                <h1><?= ucfirst($novedades_data["titulo"]); ?></h1>
            </div>
        </div>
        <div class="container">
            <div class="row blog-page">
                <section class="col-md-12 single-post photo">
                    <div class="post-content">
                        <div class="flexslider mb-10">
                            <div style=" height: 500px; background: url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/cover;"></div>
                        </div>
                        <p><?= ucfirst($novedades_data["desarrollo"]); ?></p>
                        <div class="nav-derecha">
                            <i class="fa fa-calendar-o "></i> <?= $fecha[2] . '/' . $fecha[1] . '/' . $fecha[0] ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End content -->
<?php $template->themeEnd(); ?>