<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
//Clases
$cod = isset($_GET["cod"]) ? $_GET["cod"] : '';
$portfolio = new Clases\Portfolio();
$portfolio->set("cod", $cod);
$portfolioData = $portfolio->view();
$imagenes = new Clases\Imagenes();
$filter = array("cod='" . $portfolioData['cod'] . "'");
$imagenes_data = $imagenes->list($filter);
$categoria = new Clases\Categorias();
$categoria->set("cod", $portfolioData['categoria']);
$categoriaData = $categoria->view();
$template = new Clases\TemplateSite();
$template->set("title", TITULO." | " .ucfirst(strip_tags($portfolioData['titulo'])));
$template->set("imagen", LOGO);
$template->set("favicon", LOGO);
$template->set("keywords", strip_tags($portfolioData['keywords']));
$template->set("description", ucfirst(substr(strip_tags($portfolioData['desarrollo']), 0, 160)));
$template->themeInit();

?>    <!-- Content -->
<div class="content">
    <div class="banner about-banner">
        <div class="container">
            <h1> <?= ucfirst($portfolioData['titulo']); ?></h1>
        </div>
    </div>
    <div  class="text-center header-breadcumb">
        <div class="text-center imagenes" >
            <img style="width: 100%;" src="<?= URL ?>/assets/images/iconos/separador.png">
            <img class="img-rubro"  src="<?= URL ?>/assets/images/iconos/separador-rubro.png" >
        </div>
    </div>
    <div class="container mt-15">
        <div class="row single-project">
            <h5 class=" h12">  <h1 class="h11">Contrataciones/<span class="texto3" id="texto3"><?php echo $categoriaData['titulo']; ?></span>
                    /<span class="texto" id="texto"><?php echo $portfolioData['titulo']; ?></span></h1></h5>
            <div class="col-md-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $activo = 0;
                        foreach ($imagenes_data as $img) {
                            ?>
                            <div class="carousel-item <?php if ($activo == 0) {
                                echo 'active';
                                $activo++;
                            } ?>" style=" height: 550px; background: url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/cover;">
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

            </div>
            <div class="col-md-6">

            </div>
            <div class="col-md-12">
                <?= ucfirst($portfolioData['desarrollo']); ?>
            </div>
            <button type="button" class="look-all" data-toggle="modal" data-target="#myModal">
               Contratar
            </button>
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="h111">Formulario</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <?php include("assets/inc/formulario.inc.php"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $template->themeEnd(); ?>
