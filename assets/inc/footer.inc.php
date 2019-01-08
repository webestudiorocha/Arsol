<?php
$enviar  = new Clases\Email();
$funciones = new Clases\PublicFunction();
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
                <h3>Consultas</h3>
                <?php if (isset($_POST["enviar"])):
                    $nombre = $funciones->antihack_mysqli(isset($_POST["nombre"]) ? $_POST["nombre"] : '');
                    $email = $funciones->antihack_mysqli(isset($_POST["email"]) ? $_POST["email"] : '');
                    $telefono = $funciones->antihack_mysqli(isset($_POST["telefono"]) ? $_POST["telefono"] : '');
                    $consulta = $funciones->antihack_mysqli(isset($_POST["consulta"]) ? $_POST["consulta"] : '');

                    $mensajeFinal = "<b>Nombre</b>: " . $nombre . " <br/>";
                    $mensajeFinal .= "<b>Email</b>: " . $email . "<br/>";
                    $mensajeFinal .= "<b>Teléfono</b>: " . $telefono . " <br/>";
                    $mensajeFinal .= "<b>Consulta</b>: " . $consulta . "<br/>";

                    //USUARIO
                    $enviar->set("asunto", "Realizaste tu consulta");
                    $enviar->set("receptor", $email);
                    $enviar->set("emisor", EMAIL);
                    $enviar->set("mensaje", $mensajeFinal);
                    if ($enviar->emailEnviar() == 1):
                        echo '<div class="alert alert-success" role="alert">¡Consulta enviada correctamente!</div>';
                    endif;

                    //ADMIN
                    $enviar->set("asunto", "Consulta Web");
                    $enviar->set("receptor", EMAIL);
                    if ($enviar->emailEnviar() == 0):
                        echo '<div class="alert alert-danger" role="alert">¡No se ha podido enviar la consulta!</div>';
                    endif;
                endif; ?>
                <form id="contact-form" method="post">
                    <input type="text" name="nombre" class="name" placeholder="Nombre" required id="name"
                           title="nombre" value="" type="text"/>
                    <input type="text" name="telefono" class="telefono" placeholder="Telefono" required id="telefono"
                           title="telefono" value="" type="text"/>
                    <input type="text" name="email" class="email" placeholder="Email"
                           required id="email" title="Email" value="" />
                    <textarea name="consulta" placeholder="Consulta" id="comment" title="Comment"></textarea>
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