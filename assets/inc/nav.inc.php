<?php
$id = isset($_GET["id"]) ? $_GET["id"] : '';
$servicio = new Clases\Servicios();
$servicio->set("cod", $id);
$servicioArray = $servicio->list("", "", "");
?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="logo">
                <a class="brand" href="<?= URL; ?>/index">
                    <img alt="" src="<?= URL; ?>/assets/images/logo.png">
                </a>
            </div>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li>
                        <a id="home-nav" href="<?= URL; ?>/index">Inicio</a>
                    </li>
                    <li>
                        <a id="about-nav" href="<?= URL; ?>/about">Sobre Nosotros</a>
                    </li>
                    <li>
                        <a id="blog-nav" href="<?= URL; ?>/blog">Blog</a>
                    </li>

                    <li>
                        <a id="portfolio-nav" href="<?= URL; ?>/portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a id="contact-nav">Servicios</a>
                        <?php foreach ($servicioArray as $servicio): ?>
                        <ul class="dropdown">
                            <li><a href="<?= URL; ?>/servicio"><?php echo $servicio['titulo']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>

                    </li>

                </ul>

            </div>
        </div>
    </div>
</div>

