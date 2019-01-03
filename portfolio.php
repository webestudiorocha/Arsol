<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$template->set("title", "Lotes | " . TITULO);
$template->set("imagen", LOGO);
$template->set("keywords", "");
$template->set("description", "");
$template->themeInit();
//Clases
$id = isset($_GET["id"]) ? $_GET["id"] : '';
$producto = new Clases\Productos();
$producto->set("cod", $id);
/*$productoArray = $producto->list($filter, "" , "");*/
$productoData = $producto->view();
$imagenes = new Clases\Imagenes();
$filter = array("cod = '$id'");
$imagenesArray = $imagenes->list($filter, "", "");
$medidas = explode("x", $productoData['var2']);
$categoria =  new Clases\Categorias();
$categoriaArray = $categoria->list($filter, "" , "");
?>
<!-- Content -->
<div class="content">
    <div class="banner about-banner">
        <div class="container">
            <h1>Portfolio</h1>
            <p>Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. </p>
        </div>
    </div>

    <div class="container">

        <div class="row-fluid">
            <div class="span7 important-projects">
                <h2>Important Portfolio Item or Lastest</h2>
                <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>
            </div>
            <div class="span5 important-pagination">
                <a class="prev-project">Previous</a>
                <a class="next-project">Next</a>
            </div>
        </div>
        <div class="row-fluid project-item important">
            <div class="span9 project-item-image">
                <img alt="" src="upload/blog-image.jpg">
            </div>

            <div class="span3 project-item-content">
                <h3>Portfolio Item One</h3>
                <span class="published">Published: March 20, 2013</span>
                <h5>Services:</h5>
                <ul class="services-list">
                    <li><a href="#">Graphic Design,</a></li>
                    <li><a href="#">UI/UX,</a></li>
                    <li><a href="#">Web Design</a></li>9

                </ul>
                <h5>About Project:</h5>
                <p>Suspendisse nec facilisis velit. Fusce et justo tortor. In dictum congue ...</p>
                <ul class="important-list">
                    <li>
                        <a class="all-views" href="#">2354</a>
                    </li>
                    <li>
                        <a class="voted" href="#">1256</a>
                    </li>
                    <li>
                        <a class="all-comment" href="#">20</a>
                    </li>
                </ul>

                <a class="link-it" href="#">http://bit.ly/Y46Ozd</a>
                <ul class="social-project">
                    <li><a class="fb-port" href="#"></a></li>
                    <li><a class="tweet-port" href="#"></a></li>
                    <li><a class="soc-port" href="#"></a></li>
                    <li><a class="linkedin-port" href="#"></a></li>
                    <li><a class="google-port" href="#"></a></li>
                </ul>
                <a class="button-link" href="single-project.html">Visit Link</a>
            </div>
        </div>

        <?php/* foreach ($categoriaArray as $key => $valor):*/ ?>
            <ul class="filter-items">
            <li><a href="#" class="active" data-filter="*">All</a></li>
            <li><a href="#" data-filter=".web">Web</a></li>
            <li><a href="#" data-filter=".print">Print</a></li>
            <li><a href="#" data-filter=".animation">Animation</a></li>

        </ul>
<?php /*endforeach;*/?>
        <?php /*foreach ($productoArray as $key=>$item): */?>

        <div class="projects-container four-columns">
            <div class="project-post web">
                <div class="project-photo">
                    <img alt="" src="upload/portfolio1.jpg">
                    <div class="hover-project">
                        <a class="view-image" href="upload/portfolio1.jpg" title="Image #1"
                           data-fancybox-group="portfolio"></a>
                        <a class="visit-link" href="single-project.html"></a>
                    </div>
                </div>
                <h3>Portfolio Item One web</h3>
                <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>
            </div>

            <div class="project-post print">
                <div class="project-photo">
                    <img alt="" src="upload/portfolio3.jpg">
                    <div class="hover-project">
                        <a class="view-image" href="upload/portfolio3.jpg" title="Image #2"
                           data-fancybox-group="portfolio"></a>
                        <a class="visit-link" href="single-project.html"></a>
                    </div>
                </div>
                <h3>Portfolio Item Two print</h3>
                <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>
            </div>

            <div class="project-post animation">
                <div class="project-photo">
                    <img alt="" src="upload/portfolio4.jpg">
                    <div class="hover-project">
                        <a class="view-image" href="upload/portfolio4.jpg" title="Image #3"
                           data-fancybox-group="portfolio"></a>
                        <a class="visit-link" href="single-project.html"></a>
                    </div>
                </div>
                <h3>Portfolio Item three dfsfds</h3>
                <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>
            </div>

            <div class="project-post web">
                <div class="project-photo">
                    <img alt="" src="upload/portfolio1.jpg">
                    <div class="hover-project">
                        <a class="view-image" href="upload/portfolio1.jpg" title="Image #4"
                           data-fancybox-group="portfolio"></a>
                        <a class="visit-link" href="single-project.html"></a>
                    </div>
                </div>
                <h3>Portfolio Item One</h3>
                <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>
            </div>

            <div class="project-post print">
                <div class="project-photo">
                    <img alt="" src="upload/portfolio3.jpg">
                    <div class="hover-project">
                        <a class="view-image" href="upload/portfolio3.jpg" title="Image #5"
                           data-fancybox-group="portfolio"></a>
                        <a class="visit-link" href="single-project.html"></a>
                    </div>
                </div>
                <h3>Portfolio Item Two</h3>
                <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>
            </div>

            <div class="project-post animation">
                <div class="project-photo">
                    <img alt="" src="upload/portfolio4.jpg">
                    <div class="hover-project">
                        <a class="view-image" href="upload/portfolio4.jpg" title="Image #6"
                           data-fancybox-group="portfolio"></a>
                        <a class="visit-link" href="single-project.html"></a>
                    </div>
                </div>
                <h3>Portfolio Item three</h3>
                <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>
            </div>

            <div class="project-post web">
                <div class="project-photo">
                    <img alt="" src="upload/portfolio1.jpg">
                    <div class="hover-project">
                        <a class="view-image" href="upload/portfolio1.jpg" title="Image #7"
                           data-fancybox-group="portfolio"></a>
                        <a class="visit-link" href="single-project.html"></a>
                    </div>
                </div>
                <h3>Portfolio Item One</h3>
                <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>
            </div>

            <div class="project-post print">
                <div class="project-photo">
                    <img alt="" src="upload/portfolio3.jpg">
                    <div class="hover-project">
                        <a class="view-image" href="upload/portfolio3.jpg" title="Image #8"
                           data-fancybox-group="portfolio"></a>
                        <a class="visit-link" href="single-project.html"></a>
                    </div>
                </div>
                <h3>Portfolio Item Two</h3>
                <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>
            </div>

            <div class="project-post animation">
                <div class="project-photo">
                    <img alt="" src="upload/portfolio4.jpg">
                    <div class="hover-project">
                        <a class="view-image" href="upload/portfolio4.jpg" title="Image #9"
                           data-fancybox-group="portfolio"></a>
                        <a class="visit-link" href="single-project.html"></a>
                    </div>
                </div>
                <h3>Portfolio Item three</h3>
                <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>
            </div>

            <div class="project-post web">
                <div class="project-photo">
                    <img alt="" src="upload/portfolio1.jpg">
                    <div class="hover-project">
                        <a class="view-image" href="upload/portfolio1.jpg" title="Image #10"
                           data-fancybox-group="portfolio"></a>
                        <a class="visit-link" href="single-project.html"></a>
                    </div>
                </div>
                <h3>Portfolio Item One</h3>
                <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>
            </div>

            <div class="project-post print">
                <div class="project-photo">
                    <img alt="" src="upload/portfolio3.jpg">
                    <div class="hover-project">
                        <a class="view-image" href="upload/portfolio3.jpg" title="Image #11"
                           data-fancybox-group="portfolio"></a>
                        <a class="visit-link" href="single-project.html"></a>
                    </div>
                </div>
                <h3>Portfolio Item Two</h3>
                <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>
            </div>

            <div class="project-post animation">
                <div class="project-photo">
                    <img alt="" src="upload/portfolio4.jpg">
                    <div class="hover-project">
                        <a class="view-image" href="upload/portfolio4.jpg" title="Image #12"
                           data-fancybox-group="portfolio"></a>
                        <a class="visit-link" href="single-project.html"></a>
                    </div>
                </div>
                <h3>Portfolio Item three</h3>
                <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>
            </div>

            <div class="project-post web">
                <div class="project-photo">
                    <img alt="" src="upload/portfolio1.jpg">
                    <div class="hover-project">
                        <a class="view-image" href="upload/portfolio1.jpg" title="Image #13"
                           data-fancybox-group="portfolio"></a>
                        <a class="visit-link" href="single-project.html"></a>
                    </div>
                </div>
                <h3>Portfolio Item One</h3>
                <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>
            </div>

            <div class="project-post print">
                <div class="project-photo">
                    <img alt="" src="upload/portfolio3.jpg">
                    <div class="hover-project">
                        <a class="view-image" href="upload/portfolio3.jpg" title="Image #14"
                           data-fancybox-group="portfolio"></a>
                        <a class="visit-link" href="single-project.html"></a>
                    </div>
                </div>
                <h3>Portfolio Item Two</h3>
                <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>
            </div>

            <div class="project-post animation">
                <div class="project-photo">
                    <img alt="" src="upload/portfolio4.jpg">
                    <div class="hover-project">
                        <a class="view-image" href="upload/portfolio4.jpg" title="Image #15"
                           data-fancybox-group="portfolio"></a>
                        <a class="visit-link" href="single-project.html"></a>
                    </div>
                </div>
                <h3>Portfolio Item three</h3>
                <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>
            </div>

            <div class="project-post animation">
                <div class="project-photo">
                    <img alt="" src="upload/portfolio4.jpg">
                    <div class="hover-project">
                        <a class="view-image" href="upload/portfolio4.jpg" title="Image #16"
                           data-fancybox-group="portfolio"></a>
                        <a class="visit-link" href="single-project.html"></a>
                    </div>
                </div>
                <h3>Portfolio Item three</h3>
                <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>
            </div>

        </div>
        <?php /*endforeach; */?>
        <a class="load-more portfolio-load" href="#">Load More</a>

    </div>
</div>
<!-- End content -->
<?php $template->themeEnd(); ?>
