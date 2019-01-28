<?php
$funciones = new Clases\PublicFunction();
$enviar = new Clases\Email();
$servicios = new Clases\Servicios();
$portfolios = new Clases\Portfolio();
$ruta = CANONICAL;
$codSide = isset($_GET["cod"]) ? $_GET["cod"] : '';
$mensaje = '';
if (strpos($ruta, 'servicio') !== false) {
    $servicios->set("cod", $codSide);
    $serv = $servicios->view();
    $mensaje = "este servicio de " . ucfirst($serv['titulo']) . "?";
} elseif (strpos($ruta, 'portfolio') !== false) {
    $portfolios->set("cod", $codSide);
    $port = $portfolios->view();
    $mensaje = "a " . ucfirst($port['titulo']) . "?";
}
?>
<div class="col-md-12 project-item-content">
    <h3 class="texto1">¿Te gustaría contratar <?= $mensaje ?></h3>
    <?php if (isset($_POST["enviar_side"])):
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
    <form method="post">
        <div class="form-group">
            <label for="comment" class="h112">Nombre:</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <input type="hidden" name="asunto" class="form-control" placeholder="Nombre" required id="name"
               title="asunto" value="<?= CANONICAL ?>"/>
        <div class="form-group">
            <label for="comment" class="h112">Teléfono:</label>
            <input type="text" class="form-control" name="telefono">
        </div>
        <div class="form-group">
            <label for="comment"class="h112" >Email:</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="comment"class="h112" >Mensaje:</label>
            <textarea class="form-control" rows="4" name="consulta"></textarea>
        </div>
        <button type="submit" name="enviar_side" class="boton">Enviar</button>
    </form>
</div>