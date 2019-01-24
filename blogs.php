<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$template->set("title", TITULO.' | Blogs');
$template->set("description", "Blogs de ".TITULO);
$template->set("keywords", "Blogs de ".TITULO);
$template->set("imagen", LOGO);
$template->themeInit();
$novedades = new Clases\Novedades();
$imagenes = new Clases\Imagenes();
$funciones = new Clases\PublicFunction();
$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : '0';

$cantidad = 6;

if ($pagina > 0) {
    $pagina = $pagina - 1;
}

if (@count($_GET) > 1) {
    $anidador = "&";
} else {
    $anidador = "?";
}

if (isset($_GET['pagina'])):
    $url = $funciones->eliminar_get(CANONICAL, 'pagina');
else:
    $url = CANONICAL;
endif;

$novedades_data = $novedades->list("", "", $cantidad * $pagina . ',' . $cantidad);
$numeroPaginas = $novedades->paginador("", $cantidad);
?>
<!-- Content -->
<div class="content">
    <div class="banner about-banner">
        <div class="container">
            <h1>Blog</h1>
        </div>
    </div>
</div>

    <div  class="text-center">
        <img style="width: 100% !important; z-index: 1;" src="assets/images/iconos/separador.png">
        <div class="text-center">
            <img style=" left: 10px; margin-top: -55px; z-index: 900; " src="assets/images/iconos/separador-blog.png" >
        </div>
    </div>

<div class="content">
    <div class="container" style="text-align: center">
        <section class="blog">
            <div class="row">
                <?php
                foreach ($novedades_data as $nov) {
                    $imagenes->set("cod", $nov['cod']);
                    $img = $imagenes->view();
                    ?>
                    <div class="col-md-4 project-post">
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
                <?php if ($numeroPaginas > 1): ?>
                    <div class="col-xs-12">
                        <div class="important-pagination  text-center">
                            <ul class="pagination ">
                                <?php if (($pagina + 1) > 1): ?>
                                    <li><a href="<?= $url ?><?= $anidador ?>pagina=<?= $pagina ?>"><i
                                                    class="fa fa-angle-left" ></i></a></li>
                                <?php endif; ?>

                                <?php for ($i = 1; $i <= $numeroPaginas; $i++): ?>
                                    <li class="<?php if ($i == $pagina + 1) {
                                        echo "active";
                                    } ?>"><a href="<?= $url ?><?= $anidador ?>pagina=<?= $i ?>"><?= $i ?></a></li>
                                <?php endfor; ?>

                                <?php if (($pagina + 2) <= $numeroPaginas): ?>
                                    <li><a href="<?= $url ?><?= $anidador ?>pagina=<?= ($pagina + 2) ?>"><i
                                                    class="fa fa-angle-right" ></i></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
        </section>
    </div>
</div>
<?php $template->themeEnd(); ?>
