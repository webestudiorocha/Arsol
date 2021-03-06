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
        <div class="text-center header-breadcumb">
    <div class="text-center imagenes">
        <img style="width: 100%;" src="<?= URL ?>/assets/images/iconos/separador.png">
        <img  width="100" class="img-separador"  src="<?= URL ?>/assets/images/iconos/separador-blog.png">
    </div>
</div>
        <div class="container">
            <div class="row blog-page">
                <section class="col-md-9 single-post photo">
                    <div class="post-content">
                        <div id="carouselExampleControls" class="carousel slide mb-40" data-ride="carousel">
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

    <!--<div class="flexslider mb-10">
                        <div style=" height: 500px; background: url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/cover;"></div>
                        </div>-->
                        <p><?= ucfirst($novedades_data["desarrollo"]); ?></p>
                        <div class="nav-derecha">
                            <i class="fa fa-calendar-o "></i> <?= $fecha[2] . '/' . $fecha[1] . '/' . $fecha[0] ?>
                        </div>
                    </div>
                </section>
                <div class="col-md-3">
                <ul class="mb-50">
                <li class="sociales2 mt-20" >
                        <a target="_blank" >
                            <img src="<?= URL ?>/assets/images/iconos/whatsapp.png" width="50" class="img-nav" />
                            (3564)513448
                        </a>
                    </li> 
                    <li class="sociales2 mt-20" >
                        <a href="https://www.facebook.com/arsolproducciones/" target="_blank" >
                        <img src="<?= URL ?>/assets/images/iconos/facebook.png" width="50" class="img-nav" />
                        @arsol Producciones
                        </a>
                    </li>
                    <li class="sociales2 mt-20" >
                        <a href="https://www.instagram.com/arsolproducciones/" target="_blank" >
                        <img src="<?= URL ?>/assets/images/iconos/instagram.png" width="50" class="img-nav" />
                        @arsolproducciones
                        </a>
                    </li>
                    <li class="sociales2 mt-20" >
                        <a href="https://www.linkedin.com/arsolproducciones" target="_blank" >
                        <img src="<?= URL ?>/assets/images/iconos/linkedin.png" width="50" class="img-nav" />
                        /arsolproducciones
                        </a>
                    </li>
                </ul> 
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Farsolproducciones%2F&tabs&width=340&height=197&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                        width="100%" height="197" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowTransparency="true" allow="encrypted-media"></iframe>
                            </div>
            </div>
        </div>
    </div>
    <!-- End content -->
<?php $template->themeEnd(); ?>