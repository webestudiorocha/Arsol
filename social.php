<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$template->set("title",TITULO." | Redes sociales");
$template->set("imagen", LOGO);
$template->set("keywords", "Redes sociales,".TITULO);
$template->set("description","Nuestras redes sociales");
$template->themeInit();
?>

    <div class="banner about-banner">
        <div class="container">
            <h1>Redes sociales</h1>
        </div>
    </div>
    <div  class="text-center">
        <img style="width: 100%;" src="assets/images/iconos/separador.png">
        <div class="text-center">
            <img style=" left: 10px; margin-top: -55px; z-index: 900; background: white;" src="assets/images/iconos/contacto.png" >
        </div>
    </div>
<!-- Place <div> tag where you want the feed to appear -->
<div id="curator-feed"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>
<!-- The Javascript can be moved to the end of the html page before the </body> tag -->
<script type="text/javascript">
    /* curator-feed */
    (function(){
        var i, e, d = document, s = "script";i = d.createElement("script");i.async = 1;
        i.src = "https://cdn.curator.io/published/219af999-5386-419a-a955-fdedb2e59406.js";
        e = d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
    })();
</script>
<?php $template->themeEnd(); ?>