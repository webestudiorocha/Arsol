<?php
$id = isset($_GET["id"]) ? $_GET["id"] : '';
$servicio = new Clases\Servicios();
$servicio->set("cod", $id);
$servicio_data = $servicio->list("", "", "");
$funciones_nav = new Clases\PublicFunction();
?>
<nav class="navbar navbar-expand-lg static-top">
    <div class="container">
        <div class="row d-sm-none">
            <a class="navbar-brand" href="<?= URL; ?>/index">
                <img alt="" src="<?= URL; ?>/assets/images/logo.png">
            </a>
            <button type="button" class="btn btn-navbar d-sm-none" data-toggle="collapse" data-target="#navC">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div id="navC" class="nav-collapse collapse d-sm-none">
                <ul class="nav" style="display: block;">
                    <li>
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
                        <ul class="dropdown">
                            <?php foreach ($servicio_data as $serv): ?>
                                <li>
                                    <a href="<?= URL . '/servicio/' . $funciones_nav->normalizar_link($serv['titulo']) . '/' . $funciones_nav->normalizar_link($serv['cod']) ?>"><?= ucfirst($serv['titulo']); ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="nav-collapse d-none d-md-block">
            <ul class="nav">
                <li>
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
                    <ul class="dropdown">
                        <?php foreach ($servicio_data as $serv): ?>
                            <li>
                                <a href="<?= URL . '/servicio/' . $funciones_nav->normalizar_link($serv['titulo']) . '/' . $funciones_nav->normalizar_link($serv['cod']) ?>"><?= ucfirst($serv['titulo']); ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

