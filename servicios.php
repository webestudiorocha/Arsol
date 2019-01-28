<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$template->set("title", TITULO.' | Servicio');
$template->set("imagen", LOGO);
$template->set("keywords", TITULO);
$template->set("description", TITULO);
$template->themeInit();
//Clases
$cod = isset($_GET["cod"]) ? $_GET["cod"] : '';
$servicios = new Clases\Servicios();
$servicios->set("cod", $cod);
$servicio_data = $servicios->list("", "", "");
$imagenes = new Clases\Imagenes();
$filter = array("area='servicio'");
$funciones = new Clases\PublicFunction();
?>
<!-- Content -->
<div class="content">
    <div class="banner about-banner">
        <div class="container">
            <h1>Servicios</h1>
        </div>
    </div>
    <div  class="text-center header-breadcumb">
        <div class="text-center imagenes" >
            <img style="width: 100%;" src="<?= URL ?>/assets/images/iconos/separador.png">
            <img class="img-rubro" style="background: white;" src="<?= URL ?>/assets/images/iconos/servicios.png" >
        </div>
    </div>
    <br>
    <div class="container mt-15 definition">
        <h5 class="h12">  <h1 class="h11"><span class="texto">Servicios</span> Para Eventos</h1></h5>
        <br>
        <div class="projects-container four-columns">
            <?php foreach ($servicio_data as $ser): ?>
                <?php
                $imagenes->set("cod", $ser['cod']);
                $img = $imagenes->view();
                ?>
                <div class="project-post">
                    <a href="<?= URL . '/servicio/' . $funciones->normalizar_link($ser['titulo']) . '/' . $funciones->normalizar_link($ser['cod']) ?>">
                        <div class="project-photo"

                             style=" height: 200px; background: url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/cover;">
                            <img class="img2" src="assets/images/iconos/separador.png" >
                            <h3 class="img"><?= ucfirst($ser['titulo']); ?></h3>

                        </div>
                    </a>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- End content -->
<?php $template->themeEnd(); ?>


