<?php

namespace Clases;

class TemplateSite
{

    public $title;
    public $keywords;
    public $description;
    public $favicon;
    public $canonical;
    public $autor;
    public $made;
    public $copy;
    public $pais;
    public $place;
    public $position;
    public $imagen;

    public function __construct()
    {
        $this->body = '';
    }

    public function themeInit()
    {
        echo '<!DOCTYPE html>';
        echo '<html lang="en" class="no-js">';
        echo '<head>';
        //echo '<title>'.$this->title.'</title>';
        echo '<meta charset="utf-8"/>';
        echo '<meta name="author" lang="es" content="' . $this->autor . '" />';
        echo '<link rel="author" href="' . $this->made . '" rel="nofollow" />';
        echo '<meta name="copyright" content="' . $this->copy . '" />';
        echo '<link rel="canonical" href="' . $this->canonical . '" />';
        echo '<meta name="distribution" content="global" />';
        echo '<meta name="robots" content="all" />';
        echo '<meta name="rating" content="general" />';
        echo '<meta name="content-language" content="es-ar" />';
        echo '<meta name="DC.identifier" content="' . $this->canonical . '" />';
        echo '<meta name="DC.format" content="text/html" />';
        echo '<meta name="DC.coverage" content="' . $this->pais . '" />';
        echo '<meta name="DC.language" content="es-ar" />';
        echo '<meta http-equiv="window-target" content="_top" />';
        echo '<meta name="robots" content="all" />';
        echo '<meta http-equiv="content-language" content="es-ES" />';
        echo '<meta name="google" content="notranslate" />';
        echo '<meta name="geo.region" content="AR-X" />';
        echo '<meta name="geo.placename" content="' . $this->place . '" />';
        echo '<meta name="geo.position" content="' . $this->position . '" />';
        echo '<meta name="ICBM" content="' . $this->position . '" />';
        echo '<meta content="public" name="Pragma" />';
        echo '<meta http-equiv="pragma" content="public" />';
        echo '<meta http-equiv="cache-control" content="public" />';
        echo '<meta property="og:url" content="' . $this->canonical . '" />';
        echo '<meta charset="utf-8">';
        echo '<meta content="IE=edge" http-equiv="X-UA-Compatible">';
        echo '<meta content="width=device-width, initial-scale=1" name="viewport">';
        echo '<meta name="language" content="Spanish">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />';
        echo '<title>' . $this->title . '</title>';
        echo '<meta http-equiv="title" content="' . $this->title . '" />';
        echo '<meta name="description" lang=es content="' . $this->description . '" />';
        echo '<meta name="keywords" lang=es content="' . $this->keywords . '" />';
        echo '<link href="' . URL . '/assets/images/iconos/empresa.png" rel="Shortcut Icon" />';
        echo '<meta name="DC.title" content="' . $this->title . '" />';
        echo '<meta name="DC.subject" content="' . $this->description . '" />';
        echo '<meta name="DC.description" content="' . $this->description . '" />';
        echo '<meta property="og:title" content="' . $this->title . '" />';
        echo '<meta property="og:description" content="' . $this->description . '" />';
        echo '<meta property="og:image" content="' . $this->imagen . '" />';
        include 'assets/inc/header.inc.php';
        echo '</head>';
        echo '<body>';

        echo ' <div id="container">';

        echo '<header>';
        include 'assets/inc/nav.inc.php';
        echo '</header> ';

    }

    public function themeEnd()
    {
        echo '<footer>';
        include 'assets/inc/footer.inc.php';
        echo '</footer>';


        echo '</div>';
        echo '</body>';
        echo '</html>';
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }
}
