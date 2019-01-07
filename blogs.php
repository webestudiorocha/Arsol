<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$template->set("title", TITULO);
$template->set("description", "");
$template->set("keywords", "");
$template->set("imagen", LOGO);
$template->themeInit();
$novedades = new Clases\Novedades();
$novedadesArray = $novedades->list("", "", "");
$imagenes = new Clases\Imagenes();
$imagenesArray = $imagenes->list("");
$funciones= new Clases\PublicFunction();
?>
<!-- Content -->
<div class="content">
    <div class="banner about-banner">
        <div class="container">
            <h1>Blog</h1>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row-fluid blog-page">

            <section class="span9 blog-box">

                <article class="blog-project photo">
                    <div class="post-content">
                        <?php foreach ($novedadesArray as $novedades): ?>
                        <?php
                        $imagenes->set("cod", $novedades['cod']);
                        $img = $imagenes->view();
                        ?>
                        <div style=" height: 200px; background: url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/cover;"></div>
                        <h1><?= ucfirst($novedades['titulo']); ?></h1>
                        <p><?= ucfirst(substr(strip_tags($novedades['desarrollo']), 0, 150)); ?>... </p>
                        <li><a class="read-more"  href="<?= URL .'/novedades/'. $funciones->normalizar_link($novedades['titulo']).'/'. $funciones->normalizar_link($novedades['cod'])?>">Leer Más</a></li>
                    </div>
                    <?php endforeach; ?>
                </article>



            </section>

        </div>
    </div>

<!-- End content -->


<!-- End Container -->

<?php $template->themeEnd(); ?>
