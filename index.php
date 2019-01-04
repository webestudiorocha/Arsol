<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$template->set("title", TITULO);
$template->set("description", "");
$template->set("keywords", "");
$template->set("imagen", LOGO);
$template->themeInit();
?>
    <div id="slider" class="slider1" align="right">
        <div class="container">
            <h1>We Create <br> Awesome Themes</h1>
            <p>Aliquam a orci quis nisi sagittis sagittis. <br> Etiam adipiscing, justo quis feugiat.</p>
            <a href="portfolio.php">LOOK ALL PROJECTS</a>
        </div>
    </div>
    <!-- Content -->
    <div class="content">
        <div class="container">

            <section class="what-we-do">
                <div class="row-fluid definition">
                    <div class="span12">
                        <h1>Sobre Nosotros</h1>
                        <p>Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem
                            vulputate.</p>
                    </div>
                </div>

                <a class="look-all" href="about.php">Look all features</a>
            </section>

            <section class="portfolio">
                <div class="row-fluid definition">
                    <div class="span12">
                        <h1>Portfolio</h1>
                        <p>Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem
                            vulputate.</p>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="span4 project-post">
                        <div class="project-photo">
                            <img alt="" src="upload/portfolio1.jpg">
                            <div class="hover-project">
                                <a class="view-image" href="upload/portfolio1.jpg" title="Image #1"
                                   data-fancybox-group="portfolio"></a>
                                <a class="visit-link" href="single-project.html"></a>
                            </div>
                        </div>
                        <h3>Portfolio Item One</h3>
                        <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>

                    </div>

                    <div class="span4 project-post">
                        <div class="project-photo">
                            <img alt="" src="upload/portfolio3.jpg">
                            <div class="hover-project">
                                <a class="view-image" href="upload/portfolio3.jpg" title="Image #2"
                                   data-fancybox-group="portfolio"></a>
                                <a class="visit-link" href="single-project.html"></a>
                            </div>
                        </div>
                        <h3>Portfolio Item Two</h3>
                        <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>

                    </div>

                    <div class="span4 project-post">
                        <div class="project-photo">
                            <img alt="" src="upload/portfolio4.jpg">
                            <div class="hover-project">
                                <a class="view-image" href="upload/portfolio4.jpg" title="Image #3"
                                   data-fancybox-group="portfolio"></a>
                                <a class="visit-link" href="single-project.html"></a>
                            </div>
                        </div>
                        <h3>Portfolio Item three</h3>
                        <p>AliquamSuspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed.</p>

                    </div>
                </div>
                <a class="look-all" href="portfolio.php">Look all projects</a>
            </section>

        </div>


        <div class="container">

            <section class="blog">
                <div class="row-fluid definition">
                    <div class="span12">
                        <h1>Blog</h1>
                        <p>Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem
                            vulputate.</p>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="span4 blog-post">
                        <div class="blog-photo">
                            <img alt="" src="upload/blog1.jpg">
                            <div class="hover-project">
                                <a class="zoom-image" href="upload/blog1.jpg" title="Image #1"
                                   data-fancybox-group="blog"></a>
                            </div>
                        </div>
                        <h3><a href="single-post.html">Blog</a></h3>
                        <p>Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing</p>
                        <div class="date">
                            <span>03/04/2013</span>
                            <ul class="view-com">
                                <li><a class="views" href="#"></a></li>
                                <li><a class="comments" href="#">18</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a class="look-all" href="blog.php">Look all Posts</a>
            </section>
        </div>
    </div>
<?php $template->themeEnd(); ?>