<?php
$funciones = new Clases\PublicFunction();
$cod = isset($_GET["cod"]) ? $_GET["cod"] : '';
$servicio = new Clases\Servicios();
$servicio->set("cod", $cod);
$servicio_data = $servicio->view();
$imagen = new Clases\Imagenes();
$imagen->set("cod",$servicio_data['cod']);
$img = $imagen->view();
$enviar  = new Clases\Email();
?>

<div class="span3 project-item-content">
    <h3>Consultas</h3>
    <?php if (isset($_POST["enviar"])):
        $nombre = $funciones->antihack_mysqli(isset($_POST["nombre"]) ? $_POST["nombre"] : '');
        $email = $funciones->antihack_mysqli(isset($_POST["email"]) ? $_POST["email"] : '');
        $telefono = $funciones->antihack_mysqli(isset($_POST["telefono"]) ? $_POST["telefono"] : '');
        $consulta = $funciones->antihack_mysqli(isset($_POST["consulta"]) ? $_POST["consulta"] : '');
        $asunto = $funciones->antihack_mysqli(isset($_POST["asunto"]) ? $_POST["asunto"] : '');

        $mensajeFinal = "<b>Nombre</b>: " . $nombre . " <br/>";
        $mensajeFinal .= "<b>URL</b>: " . $asunto . "<br/>";
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
        <input type="hidden" name="asunto" class="name" placeholder="Nombre" required id="name"
               title="asunto" value="<?= CANONICAL ?>" type="text"/>
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