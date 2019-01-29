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
            <img alt="" src="<?= URL; ?>/assets/images/logo.png" width="200" class="pt-10">
        </a>
        <button type="button" class="btn btn-navbar d-sm-none btn-mobile" data-toggle="collapse" data-target="#navC">
            MENU
        </button>

        <div id="navC" class="nav-collapse collapse d-sm-none nav-mobile">
            <ul class="nav" style="display: block; ">
                 <li class="mt-20">
                    <a href="<?= URL; ?>/index"><img src="<?= URL ?>/assets/images/iconos/home.png" class="img-nav" width="30" /> Inicio</a>
                </li>
                <li class="mt-10">
                    <a href="<?= URL; ?>/c/empresa"><img src="<?= URL ?>/assets/images/iconos/empresa.png" class="img-nav" width="30" /> Empresa</a>
                </li>
                <li class="mt-10">
                    <a href="<?= URL; ?>/portfolios"><img src="<?= URL ?>/assets/images/iconos/contrataciones.png" class="img-nav" width="30" /> Contrataciones</a>
                </li>
                <li class="mt-10">
                    <a href="<?= URL; ?>/servicios"><img src="<?= URL ?>/assets/images/iconos/servicios.png" class="img-nav" width="30" /> Servicios</a>
                </li>
                <li class="mt-10">
                    <a href="<?= URL; ?>/blogs"><img src="<?= URL ?>/assets/images/iconos/blog.png" class="img-nav" width="30" /> Blog</a>
                </li>
                <li class="mt-10">
                    <a href="<?= URL; ?>/social"><img src="<?= URL ?>/assets/images/iconos/contacto.png" class="img-nav" width="30" /> Redes Sociales</a>
                </li>
            </ul>
        </div>
        <div class="nav-collapse d-none d-md-block">
        <a href="https://wa.me/543564513448" class="pull-right titulos d-none d-sm-block d-sm-none d-md-block">¿QUERÉS SER PARTE DE NUESTRO STAFF DE ARTISTAS?</a>
        <div class="clearfix"></div>
            <ul class="nav nav-letras mt-20 mb-10">
                <li class="ml-20">
                    <a href="<?= URL; ?>/index"><img src="<?= URL ?>/assets/images/iconos/home.png" class="img-nav" width="25" /> Inicio</a>
                </li>
                <li class="ml-20">
                    <a href="<?= URL; ?>/c/empresa"><img src="<?= URL ?>/assets/images/iconos/empresa.png" class="img-nav" width="25" /> Empresa</a>
                </li>
                <li class="ml-20">
                    <a href="<?= URL; ?>/portfolios"><img src="<?= URL ?>/assets/images/iconos/contrataciones.png" class="img-nav" width="25" /> Contrataciones</a>
                </li>
                <li class="ml-20">
                    <a href="<?= URL; ?>/servicios"><img src="<?= URL ?>/assets/images/iconos/servicios.png" class="img-nav" width="25" /> Servicios</a>
                </li>
                <li class="ml-20">
                    <a href="<?= URL; ?>/blogs"><img src="<?= URL ?>/assets/images/iconos/blog.png" class="img-nav" width="25" /> Blog</a>
                </li>
                <li class="ml-20">
                    <a href="<?= URL; ?>/social"><img src="<?= URL ?>/assets/images/iconos/contacto.png" class="img-nav" width="25" /> Redes Sociales</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

