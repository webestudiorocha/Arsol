<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();

//Clases
$imagenes = new Clases\Imagenes();
$landing = new Clases\Landing();
$categorias = new Clases\Categorias();
//Productos
$cod = isset($_GET["cod"]) ? $_GET["cod"] : '';
$landing->set("cod", $cod);
$landing_ = $landing->view();
$imagenes->set("cod", $landing_['cod']);
$imagenData = $imagenes->list(array("cod = '" . $landing_['cod'] . "'"));
$landingData = $landing->list('');
$categorias->set("cod", $landing_["categoria"]);
$categoria = $categorias->view();
$i = 0;
$fecha = explode("-", $landing_['fecha']);
$template->set("title", ucfirst($landing_['titulo']));
$template->set("description", $landing_['description']);
$template->set("keywords", $landing_['keywords']);
$template->themeInit();

switch ($categoria["titulo"]) {
    case "Informacion":
        $titulo_form = "Solicitá más información";
        $boton_form = "¡Pedir más info!";
        break;
    case "Compra":
        $titulo_form = "Llená el formulario y comprá online";
        $boton_form = "¡Comprar!";
        break;
    case "Sorteo":
        $titulo_form = "Participá del sorteo";
        $boton_form = "¡Participar!";
        break;
    case "Evento":
        $titulo_form = "Inscribite al evento";
        $boton_form = "¡Inscribirme!";
        break;
    default:
        $titulo_form = "Completar el formulario";
        $boton_form = "¡Enviar mis datos!";
        break;
}
//
?>
<div class="content mb-100">
    <div class="banner about-banner">
        <div class="container">
            <h1> <?= ucfirst($landing_['titulo']); ?></h1>
        </div>
    </div>
    <div  class="text-center header-breadcumb">
        <div class="text-center imagenes" >
            <img style="width: 100%;" src="<?= URL ?>/assets/images/iconos/separador.png">
            <img width="100" class="img-separador"  src="<?= URL ?>/assets/images/iconos/separador-rubro.png" >
        </div>
    </div>
            <div id="sns_content" class="wrap">
            <div class="container">
                <div class="row">
                    <div class="blogs-page col-md-8">
                        <div class="postWrapper v1">
                            <div class="post-title">
                                <h3><?= ucfirst($landing_['titulo']); ?></h3>
                                <hr/>
                            </div>
                            <?php if (count($imagenData) >= 1) { ?>
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <?php foreach ($imagenData as $img) { ?>
                                            <div class="item <?php if ($i == 0) {
                                                echo "active";
                                            } ?>">
                                                <img src="<?= URL . '/' . $img['ruta']; ?>" alt="<?= $landing_['titulo']; ?>" width="100%">
                                            </div>
                                            <?php
                                            $i++;
                                        }
                                        ?>
                                    </div>
                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            <?php } ?>
                            <div class="post-content fs-16">
                                <p class="fs-20">
                                    <?= $landing_['desarrollo']; ?>
                                </p>
                                <div class="mt-15">
                                    <!-- AddToAny BEGIN -->
                                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                        <a class="a2a_button_facebook"></a>
                                        <a class="a2a_button_twitter"></a>
                                        <a class="a2a_button_google_plus"></a>
                                        <a class="a2a_button_pinterest"></a>
                                        <a class="a2a_button_whatsapp"></a>
                                        <a class="a2a_button_facebook_messenger"></a>
                                    </div>
                                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                                    <!-- AddToAny END -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blogs-page col-md-4 ">
                        <div>
                            <h3><?= $titulo_form ?></h3>
                            <hr/>
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
                            <form  method="post">
                                <input type="text" name="nombre" class="form-control mb-20" placeholder="Nombre" required id="name"
                                    title="nombre" />
                                <input type="hidden" name="asunto" class="form-control mb-20" placeholder="Nombre" required id="name"
                                    title="asunto" value="<?= CANONICAL ?>"/>
                                <input type="text" name="telefono" class="form-control mb-20" placeholder="Telefono" required
                                    id="telefono"
                                    title="telefono" value=""/>
                                <input type="text" name="email" class="form-control mb-20" placeholder="Email"
                                    required id="email" title="Email" value=""/>
                                <textarea name="consulta" class="form-control mb-20" placeholder="Consulta" id="comment"
                                        title="Comment" rows="7"></textarea>
                                    <input type="submit" name="enviar" class="btn btn-success mt-20 mb-20" id="submit" value="Enviar Mensaje">                            
                            </form>
                            <hr/>
                        </div>
                        <div class="mt-40 text-center">
                            <h5><b>Comunicate también por:</b></h5>
                            <div>
                                <a target="_blank" href="https://wa.me/543564513448" class="btn btn-block btn-success fs-18">
                                    <i class="ifoot fa fa-whatsapp" aria-hidden="true"></i> WhatsApp
                                </a>
                                <a target="_blank" href="tel:543564513448" class="btn btn-block btn-info fs-19">
                                    <i class="ifoot fa fa-mobile" aria-hidden="true"></i> 3564 335294
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
$template->themeEnd();
?>