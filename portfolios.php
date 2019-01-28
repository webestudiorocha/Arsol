<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$template->set("title", TITULO.' | Portfolio');
$template->set("imagen", LOGO);
$template->set("keywords", "Portfolio de ".TITULO);
$template->set("description", "Portfolio de ".TITULO);
$template->themeInit();
//Clases
$id = isset($_GET["id"]) ? $_GET["id"] : '';
$categoriaGET = isset($_GET["categoria"]) ? $_GET["categoria"] : '';
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
    <div  class="text-center header-breadcumb">
        <div class="text-center imagenes" >
            <img style="width: 100%;" src="<?= URL ?>/assets/images/iconos/separador.png">
            <img class="img-rubro"  src="<?= URL ?>/assets/images/iconos/separador-rubro.png" >
        </div>
    </div>
    <div class="container mt-15 definition">
        <ul class="filter-items">
            <li><a href="#" id="click" class="active" data-filter="*" onclick="$('#texto').html('')">Todos</a></li>
            <?php foreach ($categoria_data as $cat): ?>
                <li><a href="#" id="<?php echo $cat['cod']; ?>" data-filter=".<?php echo $cat['cod']; ?>" onclick="$('#texto').html('<?=$cat['titulo'];?>')">
                        <?php echo $cat['titulo']; ?>
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>
        <h5 class=" h12">  <h1 class="h11">Contrataciones/<span class="texto" id="texto"><?php echo $cat['titulo']; ?></span></h1></h5>
        <div class="projects-container four-columns">
            <?php foreach ($portfolio_data as $port): ?>
                <?php
                $imagenes->set("cod", $port['cod']);
                $img = $imagenes->view();
                ?>
                <div class="project-post <?= $port['categoria']; ?>">
                    <a href="<?= URL . '/portfolio/' . $funciones->normalizar_link($port['titulo']) . '/' . $funciones->normalizar_link($port['cod']) ?>">
                        <div class="project-photo"

                           style=" height: 200px; background: url(<?= URL . '/' . $img['ruta'] ?>) no-repeat center center/cover;">
                            <img class="img2" src="assets/images/iconos/separador.png" >
                            <h3 class="img"><?= ucfirst($port['titulo']); ?></h3>

                        </div>
                    </a>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- End content -->
<?php $template->themeEnd(); ?>

<?php if($categoriaGET != '') { ?>
    <script>
        $(document).ready(function(){
console.log('<?php echo $categoriaGET; ?>');
            $('#<?php echo $categoriaGET; ?>').trigger('click');
        });
    </script>
<?php } ?>

