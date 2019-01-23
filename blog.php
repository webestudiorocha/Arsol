<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
//Clases
$cod = isset($_GET["cod"]) ? $_GET["cod"] : '';
$novedades = new Clases\Novedades();
$novedades->set("cod", $cod);
$novedades_data = $novedades->view();
$imagenes = new Clases\Imagenes();
$filter = array("cod='" . $novedades_data['cod'] . "'");
$imagenes_data = $imagenes->list($filter);
$fecha = explode("-", $novedades_data['fecha']);
$template = new Clases\TemplateSite();
$template->set("title", TITULO .' | '.ucfirst(strip_tags($novedades_data['titulo'])));
$template->set("imagen", URL."/".$imagenes_data[0]['ruta']);
$template->set("favicon", LOGO);
$template->set("keywords", strip_tags($novedades_data['keywords']));
$template->set("description", ucfirst(substr(strip_tags($novedades_data['desarrollo']), 0, 160)));
$template->themeInit();
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
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php
                                $activo = 0;
                                foreach ($imagenes_data as $img) {
                                    ?>
                                    <div class="carousel-item <?php if ($activo==0){echo 'active';$activo++;} ?>" style=" height: 600px; background: url(<?= URL . '/'.$img['ruta'] ?>) no-repeat center center/contain;">
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