<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$contenidos = new Clases\Contenidos();
$template->set("title", TITULO);
$template->set("description", "");
$template->set("keywords", "");
$template->set("imagen", LOGO);
$template->themeInit();
$contenidos->set("cod", "EMPRESA");
$contenidos_data = $contenidos->view();
?>
<!-- Content -->
<div class="content">
    <div class="banner about-banner">
        <div class="container">
            <h1>Sobre nosotros</h1>
        </div>
    </div>
    <div class="container">
        <section class="about-us">
            <div class="row-fluid our-description">
                <div class="span6">
                    <?= ucfirst($contenidos_data['contenido']); ?>
                </div>
                <div class="span6">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img alt="" src="<?= URL; ?>/upload/about2.jpg"/>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- End content -->
<?php $template->themeEnd(); ?>
	