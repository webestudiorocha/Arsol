<?php
$correo  = new Clases\Email();
$funcion = new Clases\PublicFunction();
?>
<section class="quick-contact">
    <div class="container">
        <div class="row-fluid definition">
        </div>

        <div class="row-fluid footer-data">
            <div class="span4 contact-info">
                <h3>Contacto</h3>
                <BR>
                <div class="address">
                    <p><?= TITULO;?></p>
                </div>
                <div class="tel-number">
                    <span><?= TELEFONO;?></span>
                </div>
                <div class="mail-address">
                    <a href="#"><?= EMAIL;?></a>
                </div>

                <h3>Sociales</h3>
                <ul class="social-icon-list">
                    <li><a class="linkedin" href="#"></a></li>
                    <li><a class="fb" href="#"></a></li>
                    <li><a class="skype" href="#"></a></li>
                    <li><a class="tweet" href="#"></a></li>
                </ul>
            </div>
            <div class="span4">
                <h3>Formulario</h3>
                <form id="contact-form">
                    <?php if (isset($_POST["enviar"])): ?>
                        <?php
                        $nombre   = $funcion->antihack_mysqli(isset($_POST["nombre"]) ? $_POST["nombre"] : '');
                        $email    = $funcion->antihack_mysqli(isset($_POST["email"]) ? $_POST["email"] : '');
                        $consulta = $funcion->antihack_mysqli(isset($_POST["consulta"]) ? $_POST["consulta"] : '');

                        $mensajeFinal = "<b>Nombre</b>: " . $nombre . " <br/>";
                        $mensajeFinal .= "<b>Email</b>: " . $email . "<br/>";
                        $mensajeFinal .= "<b>Consulta</b>: " . $consulta . "<br/>";

                        $correo->set("asunto", "Consulta web");
                        $correo->set("receptor", "camilawebestudiorocha@gmail.com");
                        $correo->set("emisor", "camilawebestudiorocha@gmail.com");
                        $correo->set("mensaje", $mensajeFinal);
                        $correo->emailEnviar();
                        ?>
                    <?php endif?>
                    <input type="text" name="nombre" class="name" placeholder="Nombre">
                    <input type="text" name="email" class="email" placeholder="Email">
                    <textarea name="consulta" placeholder="Mensaje"></textarea>
                    <input type="submit" name="enviar" id="submit" value="Enviar Mensaje">
                </form>
            </div>

        </div>
    </div>
</section>

<script type="text/javascript" src="<?= URL; ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= URL; ?>/assets/js/jquery.migrate.js"></script>
<script type="text/javascript" src="<?= URL; ?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= URL; ?>/assets/js/jquery.imagesloaded.min.js"></script>
<script type="text/javascript" src="<?= URL; ?>/assets/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="<?= URL; ?>/assets/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?= URL; ?>/assets/http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="<?= URL; ?>/assets/js/gmap3.min.js"></script>
<script type="text/javascript" src="<?= URL; ?>/assets/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?= URL; ?>/assets/js/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="<?= URL; ?>/assets/js/script.js"></script>