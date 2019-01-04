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
$producto = new Clases\Productos();
$producto->set("cod", $id);
$productoArray = $producto->list("", "" , "");
$productoData = $producto->view();
$imagenes = new Clases\Imagenes();
$filter = array("cod = '$id'");
$imagenesArray = $imagenes->list("", "", "");
$medidas = explode("x", $productoData['var2']);
$categoria =  new Clases\Categorias();
$categoriaArray = $categoria->list("", "" , "");
?>
<!-- Content -->
<div class="content">
    <div class="banner about-banner">
        <div class="container">
            <h1>Portfolio</h1>
            <p>Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. </p>
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
            <?php foreach ($productoArray as $producto): ?>
            <div class="project-post <?php echo $producto['categoria'];?>">
                <div class="project-photo">
                    <img alt="" src="<?=URL . '/' . $imagenesArray[0]['ruta'];?>">
                    <div class="hover-project">
                        <a class="view-image" href="<?=URL . '/' . $imagenArray[0]['ruta'];?>" title="Image #1"
                           data-fancybox-group="portfolio"></a>
                        <a class="visit-link" href="single-project.html"></a>
                    </div>
                </div>
                <h3><?php echo $producto['titulo']; ?></h3>
                <p><?php echo $producto['desarrollo']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
        <a class="load-more portfolio-load" href="#">Load More</a>

    </div>

<!-- End content -->
<?php $template->themeEnd(); ?>
