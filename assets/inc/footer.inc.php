<?php
$enviar = new Clases\Email();
$funciones = new Clases\PublicFunction();
?>

<section class="quick-contact">

    <div class="container">
        <div class="row footer-data">
            <div class="col-md-4 contact-info ">
                <ul>
                    <li class="sociales"><a target="_blank" class="whatsaps "><i class="fa "></i></a>(3564)513448
                    </li>
                    <li class="sociales"><a target="_blank" class="emails "><i class="fa"></i></a>
                        ariel@arsolproducciones.com.ar
                    </li>
                    <li class="sociales"><a href="https://www.facebook.com/arsolproducciones/" target="_blank"
                                            class=" facebook "><i class="fa "></i></a>@arsol
                        Producciones
                    </li>
                    <li class="sociales"><a href="https://www.instagram.com/arsolproducciones/" target="_blank"
                                            class="instagrams"><i class="fa "></i></a>
                        @arsolproducciones
                    </li>
                    <li class="sociales"><a href="https://www.linkedin.com/arsolproducciones" target="_blank"
                                            class="linkiu "><i class="fa "></i></a>
                        /arsolproducciones
                    </li>


                </ul>
            </div>
            <div class="col-md-4">
                <h3>Danos me gusta</h3>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Farsolproducciones%2F&tabs&width=340&height=197&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                        width="100%" height="197" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
            <div class="col-md-4">
                <h3>Consultas</h3>
                <?php if (isset($_POST["enviar"])):
                    $nombre = $funciones->antihack_mysqli(isset($_POST["nombre"]) ? $_POST["nombre"] : '');
                    $email = $funciones->antihack_mysqli(isset($_POST["email"]) ? $_POST["email"] : '');
                    $telefono = $funciones->antihack_mysqli(isset($_POST["telefono"]) ? $_POST["telefono"] : '');
                    $consulta = $funciones->antihack_mysqli(isset($_POST["consulta"]) ? $_POST["consulta"] : '');
                    $asunto = $funciones->antihack_mysqli(isset($_POST["asunto"]) ? $_POST["asunto"] : '');

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

                    $mensajeFinalAdmin = "<b>Nombre</b>: " . $nombre . " <br/>";
                    $mensajeFinalAdmin .= "<b>URL</b>: " . $asunto . "<br/>";
                    $mensajeFinalAdmin .= "<b>Email</b>: " . $email . "<br/>";
                    $mensajeFinalAdmin .= "<b>Teléfono</b>: " . $telefono . " <br/>";
                    $mensajeFinalAdmin .= "<b>Consulta</b>: " . $consulta . "<br/>";
                    //ADMIN
                    $enviar->set("asunto", "Consulta Web");
                    $enviar->set("receptor", EMAIL);
                    $enviar->set("mensaje", $mensajeFinalAdmin);
                    if ($enviar->emailEnviar() == 0):
                        echo '<div class="alert alert-danger" role="alert">¡No se ha podido enviar la consulta!</div>';
                    endif;
                endif; ?>
                <form id="contact-form" method="post">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" required id="name"
                           title="nombre" />
                    <input type="hidden" name="asunto" class="form-control" placeholder="Nombre" required id="name"
                           title="asunto" value="<?= CANONICAL ?>"/>
                    <input type="text" name="telefono" class="form-control" placeholder="Telefono" required
                           id="telefono"
                           title="telefono" value=""/>
                    <input type="text" name="email" class="form-control" placeholder="Email"
                           required id="email" title="Email" value=""/>
                    <textarea name="consulta" class="form-control" placeholder="Consulta" id="comment"
                              title="Comment"></textarea>
                    <div class="col-md-12">
                        <input type="submit" name="enviar" id="submit" value="Enviar Mensaje">
                    </div>
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
<script async src="https://static.addtoany.com/menu/page.js"></script>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>