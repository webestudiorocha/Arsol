<?php
$id = isset($_GET["id"]) ? $_GET["id"] : '';
$servicio = new Clases\Servicios();
$servicio->set("cod", $id);
$servicio_data = $servicio->list("", "", "");
$funciones_nav = new Clases\PublicFunction();
?>
<nav class="navbar navbar-expand-lg static-top">
    <div class="container">
        <a class="navbar-brand" href="<?= URL; ?>/index">
            <img alt="" src="<?= URL; ?>/assets/images/logo.png" width="150">
        </a>
        <button type="button" class="btn btn-navbar d-sm-none btn-mobile" data-toggle="collapse" data-target="#navC">
            MENU
        </button>
        <div id="navC" class="nav-collapse collapse d-sm-none nav-mobile">
            <ul class="nav" style="display: block;">
                <li class="mt-5">
                    <a id="home-nav" href="<?= URL; ?>/index">Inicio</a>
                </li>
                <li class="mt-5">
                    <a id="about-nav" href="<?= URL; ?>/c/empresa">Sobre Nosotros</a>
                </li>
                <li class="mt-5">
                    <a id="blog-nav" href="<?= URL; ?>/blogs">Blog</a>
                </li>
                <li class="mt-5">
                    <a id="portfolio-nav" href="<?= URL; ?>/portfolios">Portfolio</a>
                </li>
                <li class="mt-5">
                    <a id="contact-nav">Servicios</a>
                    <ul class="dropdown">
                        <?php foreach ($servicio_data as $serv): ?>
                            <li class="mt-5">
                                <a href="<?= URL . '/servicio/' . $funciones_nav->normalizar_link($serv['titulo']) . '/' . $funciones_nav->normalizar_link($serv['cod']) ?>"><?= ucfirst($serv['titulo']); ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="mt-5">
                    <a id="social-nav" href="<?= URL; ?>/social">Redes sociales</a>
                </li>
            </ul>
        </div>
        <div class="nav-collapse d-none d-md-block">
            <ul class="nav nav-letras">
                <li class="active">
                    <a id="home-nav" href="<?= URL; ?>/index">Inicio</a>
                </li>
                <li>
                    <a id="about-nav" href="<?= URL; ?>/c/empresa">Sobre Nosotros</a>
                </li>
                <li>
                    <a id="blog-nav" href="<?= URL; ?>/blogs">Blog</a>
                </li>
                <li>
                    <a id="portfolio-nav" href="<?= URL; ?>/portfolios">Portfolio</a>
                </li>
                <li>
                    <a id="contact-nav">Servicios</a>
                    <ul class="dropdown mt-25">
                        <?php foreach ($servicio_data as $serv): ?>
                            <li>
                                <a href="<?= URL . '/servicio/' . $funciones_nav->normalizar_link($serv['titulo']) . '/' . $funciones_nav->normalizar_link($serv['cod']) ?>"><?= ucfirst($serv['titulo']); ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li>
                    <a id="social-nav" href="<?= URL; ?>/social">Redes sociales</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

