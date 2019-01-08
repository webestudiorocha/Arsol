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
$id = isset($_GET["id"]) ? $_GET["id"] : '';
$portfolio = new Clases\Portfolio();
$portfolio->set("cod", $id);
$portfolio_data = $portfolio->list("", "", "");
$imagenes = new Clases\Imagenes();
$categoria = new Clases\Categorias();
$filter = array("area='portfolio'");
$categoria_data = $categoria->list($filter);
$funciones = new Clases\PublicFunction();
?>

<!-- Content -->
<div class="content">
    <div class="banner about-banner">
        <div class="container">
            <h1>Portfolio</h1>
        </div>
    </div>
    <div class="container">
        <ul class="filter-items">
            <li><a href="#" class="active" data-filter="*">Todos</a></li>
            <?php foreach ($categoria_data as $cat): ?>
                <li><a href="#" data-filter=.<?php echo $cat['cod']; ?>><?php echo $cat['titulo']; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="projects-container four-columns">
            <?php foreach ($portfolio_data as $port): ?>
                <?php
                $imagenes->set("cod", $port['cod']);
                $img = $imagenes->view();
                ?>
                <div class="project-post <?= $port['categoria']; ?>">
                    <div class="project-photo">
                        <div style=" height: 200px; background: url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/cover;"></div>
                        <div class="hover-project">
                            <a class="view-image" href="<?= URL ?>/<?= $img['ruta'] ?>" title="<?=ucfirst($port['titulo'])?>"
                               data-fancybox-group="portfolio"></a>
                            <a class="visit-link"
                               href="<?= URL . '/portfolio/' . $funciones->normalizar_link($port['titulo']) . '/' . $funciones->normalizar_link($port['cod']) ?>"></a>
                        </div>
                    </div>
                    <a href="<?= URL . '/portfolio/' . $funciones->normalizar_link($port['titulo']) . '/' . $funciones->normalizar_link($port['cod']) ?>"><h3><?= $port['titulo']; ?></h3></a>

                    <p><?= ucfirst(substr(strip_tags($port['desarrollo']), 0, 150)); ?>...</p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- End content -->
<?php $template->themeEnd(); ?>
