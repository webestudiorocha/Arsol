<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$imagenes = new Clases\Imagenes();
$portfolio = new Clases\Portfolio();
$contenidos = new Clases\Contenidos();
$novedades = new Clases\Novedades();
$template->set("title", TITULO . " | Inicio");
$template->set("description", "");
$template->set("keywords", "");
$template->set("imagen", LOGO);
$template->themeInit();
$id = isset($_GET["id"]) ? $_GET["id"] : '';
$portfolio->set("cod", $id);
$portfolio_data = $portfolio->list("", "", "3");
$contenidos->set("cod", "EMPRESA");
$contenido_data = $contenidos->view();
$novedades_data = $novedades->list('','','');
?>
    <div id="slider" class="slider1" align="right" style=" height: 400px; background: url(<?= URL . '/assets/archivos/gg.jpg'?>) no-repeat center center/cover;">
    </div>
    <!-- Content -->
    <div class="content">
        <div class="container">
            <!--
            <section class="what-we-do">
                <div class="row-fluid definition">
                    <div class="span12">
                        <h1>Sobre Nosotros</h1>
                        <?= ucfirst(substr(strip_tags($contenido_data['contenido']), 0, 150)) . "..." ?>
                    </div>
                </div>
                <a class="look-all" href="<?= URL ?>/empresa">Ver más</a>
            </section>-->
            <section class="portfolio">
                <div class="row-fluid definition">
                    <div class="span12">
                        <h1>Portfolio</h1>
                        <br>
                    </div>
                </div>
                <div class="row-fluid">
                    <?php
                    foreach ($portfolio_data as $port) {
                        $imagenes->set("cod", $port['cod']);
                        $img = $imagenes->view();
                        ?>
                        <div class="span4 project-post">
                            <div class="project-photo"
                                 style=" height: 200px; background: url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/cover;">
                                <div class="hover-project">
                                    <a class="view-image" href="<?= URL . '/' . $img['ruta'] ?>"
                                       title="<?= ucfirst($port['titulo']) ?>"
                                       data-fancybox-group="portfolio"></a>
                                    <a class="visit-link"
                                       href="<?= URL . '/portfolio/' . $funciones->normalizar_link($port['titulo']) . '/' . $funciones->normalizar_link($port['cod']) ?>"></a>
                                </div>
                            </div>
                            <a href="<?= URL . '/portfolio/' . $funciones->normalizar_link($port['titulo']) . '/' . $funciones->normalizar_link($port['cod']) ?>"><h3><?= ucfirst($port['titulo']); ?></h3></a>

                        </div>
                        <?php
                    }
                    ?>
                </div>
                <a class="look-all" href="<?= URL; ?>/portfolios">Ver Más</a>
            </section>
        </div>
        <div class="container">
            <section class="blog">
                <div class="row-fluid definition">
                    <div class="span12">
                        <h1>Blog</h1>
                        <br>
                    </div>
                </div>
                <div class="row-fluid">
                    <?php
                    foreach ($novedades_data as $nov) {
                        $imagenes->set("cod", $nov['cod']);
                        $img = $imagenes->view();
                        ?>
                        <div class="span4 project-post">
                            <a href="<?= URL .'/blog/'. $funciones->normalizar_link($nov['titulo']).'/'. $funciones->normalizar_link($nov['cod'])?>">
                                <div class="project-photo"
                                     style=" height: 300px; background: url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/cover;">
                                    <div class="hover-project">
                                    </div>
                                </div>
                            </a>
                            <a href="<?= URL .'/blog/'. $funciones->normalizar_link($nov['titulo']).'/'. $funciones->normalizar_link($nov['cod'])?>"><h3><?= ucfirst(substr(strip_tags($nov['titulo']), 0, 80)) . "..." ?></h3></a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <a class="look-all" href="<?= URL; ?>/blogs">Ver más</a>
            </section>
        </div>
    </div>
<?php $template->themeEnd(); ?>