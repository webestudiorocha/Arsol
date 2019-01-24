<?php
$id = isset($_GET["id"]) ? $_GET["id"] : '';require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$imagenes = new Clases\Imagenes();
$portfolio = new Clases\Portfolio();
$novedades = new Clases\Novedades();
$sliders = new Clases\Sliders();
$servicio = new Clases\Servicios();
$cod = isset($_GET["cod"]) ? $_GET["cod"] : '';
$servicio->set("cod", $cod);
$servicio_data = $servicio->list("", "", "");
$template->set("title", TITULO . " | Inicio");
$template->set("description", "Inicio " . TITULO);
$template->set("keywords", "Inicio," . TITULO);
$template->set("imagen", LOGO);
$template->themeInit();
$portfolio->set("cod", $id);
$sliders_data = $sliders->list('', '', '');
$portfolio_data = $portfolio->list("", "", "3");
$novedades_data = $novedades->list('', '', '3');
$categoria = new Clases\Categorias();
$filter = array("area='portfolio'");
$categoria_data = $categoria->list($filter)
?>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            $activo = 0;
            foreach ($sliders_data as $sli) {
                $imagenes->set("cod", $sli['cod']);
                $img_data = $imagenes->view();
                ?>
                <div class="carousel-item <?php if ($activo == 0) {
                    echo 'active';
                    $activo++;
                } ?>" style=" height: 696px; background: url(<?= URL . '/' . $img_data['ruta'] ?>) no-repeat center center/cover;">
                    <!--<img class="d-block h-400" src="<?= URL . '/' . $img_data['ruta'] ?>">-->
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
    <!-- Content -->
<br>
<div  class="text-center">
    <img style="width: 100%; z-index: 1;" src="assets/images/iconos/separador.png">
    <div class="text-center">
        <img style=" left: 10px; margin-top: -55px; z-index: 900; " src="assets/images/iconos/separador-rubro.png" >
    </div>
</div>
    <div class="content mt-15">
        <div class="container">
            <section class="portfolio ">
                <div class="row definition">
                    <div class="col-md-12  ">
                    <h5 class="h12">  <h1 class="h11">Contrataciones/<span class="texto">Rubros</span></h1></h5>
                    </div>
                </div>

                <div class="row mt-15">
                    <?php
                    foreach ($categoria_data as $port) {
                        $imagenes->set("cod", $port['cod']);
                        $img = $imagenes->view();
                        ?>
                        <div class="col-md-4 project-post ">
                            <a href="<?= URL . '/portfolios?categoria='. $funciones->normalizar_link($port['cod']) ?>">
                                <div class="project-photo"
                                     style=" height: 200px; background: url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/cover;">
                                </div>
                            </a>
                            <a href="<?= URL . '/portfolios?categoria='. $funciones->normalizar_link($port['cod']) ?>">
                                <h3><?= ucfirst($port['titulo']); ?></h3></a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <a class="look-all" href="<?= URL; ?>/portfolios">Ver Más</a>
            </section>

        </div>
        <div  class="text-center">
            <img style="width: 100%;" src="assets/images/iconos/separador.png">
            <div class="text-center">
                <img style=" left: 10px; margin-top: -55px; z-index: 900; " src="assets/images/iconos/separador-blog.png" >
            </div>
        </div>
<div class="container">
            <section class="blog">
                <div class="row definition">
                    <div class="col-md-12">
                        <h5 class="h12">  <h1 class="h121">Blog</h1></h5>
                    </div>
                </div>

                <div class="row mt-15">
                    <?php
                    foreach ($novedades_data as $nov) {
                        $imagenes->set("cod", $nov['cod']);
                        $img = $imagenes->view();
                        ?>
                        <div class="col-md-4 project-post">
                            <a href="<?= URL . '/blog/' . $funciones->normalizar_link($nov['titulo']) . '/' . $funciones->normalizar_link($nov['cod']) ?>">
                                <div class="project-photo"
                                     style=" height: 300px; background: url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/cover;">
                                    <div class="hover-project">
                                    </div>
                                </div>
                            </a>
                            <a href="<?= URL . '/blog/' . $funciones->normalizar_link($nov['titulo']) . '/' . $funciones->normalizar_link($nov['cod']) ?>">
                                <h3><?= ucfirst(substr(strip_tags($nov['titulo']), 0, 80)) . "..." ?></h3></a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <a class="look-all" href="<?= URL; ?>/blogs">Ver más</a>
            </section>
        </div>
<div class="container">
            <section class="blog">
                <div class="row definition">
                    <div class="col-md-12">
                        <h5 class="h12">  <h1 class="h11"><span class="texto">Servicios</span> Para Eventos</h1></h5>
                    </div>
                </div>

                <div class="row mt-15">
                    <?php
                    foreach ($servicio_data as $servicio) {
                        $imagenes->set("cod", $nov['cod']);
                        $img = $imagenes->view();
                        ?>
                        <div class="col-md-4 project-post">
                            <a href="<?= URL . '/blog/' . $funciones->normalizar_link($servicio['titulo']) . '/' . $funciones->normalizar_link($servicio['cod']) ?>">
                                <div class="project-photo"
                                     style=" height: 300px; background: url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/cover;">
                                    <div class="hover-project">
                                    </div>
                                </div>
                            </a>
                            <a href="<?= URL . '/servicio/' . $funciones->normalizar_link($servicio['titulo']) . '/' . $funciones->normalizar_link($servicio['cod']) ?>">
                                <h3><?= ucfirst(substr(strip_tags($servicio['titulo']), 0, 80)) . "..." ?></h3></a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <a class="look-all" href="<?= URL; ?>/servicio.php">Ver más</a>
            </section>
        </div>
    </div>
<?php $template->themeEnd(); ?>