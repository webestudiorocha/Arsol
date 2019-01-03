<?php

namespace Clases;

class TemplateSite
{

    public $title;
    public $keywords;
    public $description;
    public $imagen;
    public $body;

    private $canonical = CANONICAL;
    private $autor = TITULO;
    private $made = EMAIL;
    private $pais = PAIS;
    private $place = PROVINCIA;
    private $position = CIUDAD;
    private $copy = TITULO;

    public function __construct()
    {
        $this->body = '';
    }

    public function themeInit()
    {
        echo '<!DOCTYPE html>';
        echo '<html lang="en" class="no-js">';
        include 'assets/inc/header.inc.php';
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
}
