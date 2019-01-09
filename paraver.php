<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$template->set("title", "Lotes | " . TITULO);
$template->set("imagen", LOGO);
$template->set("keywords", "");
$template->set("description", "");
$template->themeInit();
?>
<div class="content">
    <div class="banner about-banner">
        <div class="container">
            <h1>Portfolio</h1>
            <p>Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. </p>
        </div>
    </div>

    <div class="container">
        <ul class="filter-items">
            <li><a href="#" class="active" data-filter="*">All</a></li>
            <li><a href="#" data-filter=".web">Web</a></li>
            <li><a href="#" data-filter=".print">Print</a></li>
            <li><a href="#" data-filter=".animation">Animation</a></li>
        </ul>

        <div class="projects-container">

            <!-- portfolio item 1 -->
            <div class="row-fluid project-item web">
                <div class="span9 project-item-image">
                    <img alt="" src="<?=URL?>/assets/upload/blog-image.jpg">
                </div>

                <div class="span3 project-item-content">
                    <h3>Portfolio Item Two</h3>
                    <span class="published">Published: March 20, 2013</span>
                    <h5>Services:</h5>
                    <ul class="services-list">
                        <li><a href="#">Graphic Design,</a></li>
                        <li><a href="#">UI/UX,</a></li>
                        <li><a href="#">Web Design</a></li>
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

            <!-- portfolio item 2 -->
            <div class="row-fluid project-item web print">
                <div class="span9 project-item-image">
                    <img alt="" src="<?=URL?>/assets/upload/blog-image2.jpg">
                </div>

                <div class="span3 project-item-content">
                    <h3>Portfolio Item Two</h3>
                    <span class="published">Published: March 20, 2013</span>
                    <h5>Services:</h5>
                    <ul class="services-list">
                        <li><a href="#">Graphic Design,</a></li>
                        <li><a href="#">UI/UX,</a></li>
                        <li><a href="#">Web Design</a></li>
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

            <!-- portfolio item 3 -->
            <div class="row-fluid project-item animation">
                <div class="span9 project-item-image">
                    <img alt="" src="<?=URL?>/assets/upload/blog-image3.jpg">
                </div>

                <div class="span3 project-item-content">
                    <h3>Portfolio Item Two</h3>
                    <span class="published">Published: March 20, 2013</span>
                    <h5>Services:</h5>
                    <ul class="services-list">
                        <li><a href="#">Graphic Design,</a></li>
                        <li><a href="#">UI/UX,</a></li>
                        <li><a href="#">Web Design</a></li>
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

            <!-- portfolio item 4 -->
            <div class="row-fluid project-item animation">
                <div class="span9 project-item-image">
                    <img alt="" src="<?=URL?>/assets/upload/blog-image.jpg">
                </div>

                <div class="span3 project-item-content">
                    <h3>Portfolio Item Two</h3>
                    <span class="published">Published: March 20, 2013</span>
                    <h5>Services:</h5>
                    <ul class="services-list">
                        <li><a href="#">Graphic Design,</a></li>
                        <li><a href="#">UI/UX,</a></li>
                        <li><a href="#">Web Design</a></li>
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
        </div>
        <a class="load-more portfolio-load" href="#">Load More</a>

    </div>
</div>
<?php $template->themeEnd(); ?>
