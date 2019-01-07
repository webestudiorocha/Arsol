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
$novedades = new Clases\Novedades();
$novedades->set("cod", $cod);
$novedadesData = $novedades->view();
$imagenes = new Clases\Imagenes();
$imagenes->set("cod", $cod);
$imagenesArray = $imagenes->view();
?>
    <!-- Content -->
    <div class="content">
        <div class="banner about-banner">
            <div class="container">
                <h1><?= ucfirst($novedadesData["titulo"]); ?></h1>
            </div>
        </div>
        <div class="container">
            <div class="row-fluid blog-page">
                <section class="col-md-12 single-post photo">
                    <div class="post-content">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <div style=" height: 400px; background: url(<?= URL . '/' . $imagenesArray['ruta'] ?>) no-repeat center center/cover;"></div>
                                </li>
                            </ul>
                        </div>
                        <p><?= ucfirst($novedadesData["desarrollo"]); ?></p>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End content -->
<?php $template->themeEnd(); ?>