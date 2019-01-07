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
$portfolioArray = $portfolio->list("", "" , "");
$imagenes = new Clases\Imagenes();
$imagenesArray = $imagenes->list("");
$categoria =  new Clases\Categorias();
$categoriaArray = $categoria->list("", "" , "");
$funciones= new Clases\PublicFunction();
?>

<!-- Content -->
<div class="content">
    <div class="banner about-banner">
        <div class="container">
            <h1>Portfolio</h1>
        </div>
    </div>
</div>
    <div class="container">
            <ul class="filter-items">
            <li><a href="#" class="active" data-filter="*">All</a></li>
                <?php foreach ($categoriaArray as $categoria):  ?>
            <li><a href="#" data-filter=.<?php echo $categoria['cod'];?>><?php echo $categoria['titulo'];?></a></li>
                <?php endforeach;?>
        </ul>
        <div class="projects-container four-columns">
            <?php foreach ($portfolioArray as $portfolio): ?>
                <?php
                $imagenes->set("cod", $portfolio['cod']);
                $img= $imagenes->view();
                ?>
            <div class="project-post <?=$portfolio['categoria'];?>">
                <div class="project-photo">
                    <div style=" height: 200px; background: url(<?= URL .'/'. $img['ruta']?>) no-repeat center center/cover;"> </div>
                    <div class="hover-project">
                        <a class="view-image" href="<?=URL?>/<?=$img['ruta']?>" title="Image #1"
                           data-fancybox-group="portfolio"></a>
                        <a class="visit-link" href="<?= URL.'/portfolio/'. $funciones->normalizar_link($portfolio['titulo']).'/'. $funciones->normalizar_link($portfolio['cod'])?>"></a>
                    </div>
                </div>
                <h3><?=$portfolio['titulo']; ?></h3>
                <p><?=ucfirst(substr(strip_tags($portfolio['desarrollo']), 0, 150)); ?>...</p>
            </div>
        <?php endforeach; ?>
    </div>
    </div>

<!-- End content -->
<?php $template->themeEnd(); ?>
