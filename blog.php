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
$cod = isset($_GET["cod"]) ? $_GET["cod"] : '';
$novedades = new Clases\Novedades();
$novedades->set("cod", $cod);
$novedadesData = $novedades->view();
$imagenes = new Clases\Imagenes();
$imagenes->set("cod", $cod);
$imagenesArray = $imagenes->view();
$categoria = new Clases\Categorias();
$categoria->set("cod", $novedadesData['categoria']);
$categoriaData= $categoria->view();

?>
    <!-- Content -->
    <div class="content">
        <div class="banner about-banner">
            <div class="container">
                <h1>Blog</h1>
            </div>
        </div>
        <div class="container">
            <div class="row-fluid blog-page">
                <section class="span9 single-post photo">

                    <div class="post-content">

                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <div style=" height: 800px; background: url(<?= URL . '/' . $imagenesArray['ruta'] ?>) no-repeat center center/cover;"></div>
                                </li>

                            </ul>

                        </div>

                        <h1><?php ucfirst($novedadesData["titulo"]); ?></h1>
                        <p><?php ucfirst($novedadesData["desarrollo"]); ?></p>
                    </div>
                </section>

                <section class="span3 sidebar">
                    <ul class="widgets">
                        <li class="category-widget widget">
                            <h2>Categorias</h2>
                            <ul>
                                <li><a><?= ucfirst($categoriaData['titulo']);?></a></li>
                            </ul>
                        </li>

                    </ul>
                </section>

            </div>
        </div>
    </div>
    <!-- End content -->


    </div>
<?php $template->themeEnd(); ?>