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

        <!-- Content -->
		<div class="content">
			<div class="banner about-banner">
				<div class="container">
					<h1>Blog</h1>
					<p>Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. </p>
				</div>
			</div>

			<div class="container">
				<div class="row-fluid blog-page">

					<section class="span9 blog-box">

						<article class="blog-project photo">
							<div class="post-type">
								<span></span>
								<a class="comment-number" href="#">88</a>
							</div>

							<div class="post-content">
								<img alt="" src="upload/blog-image.jpg">
								<h1><a href="single-post.html">Vivamus porttitor eros quis nisi lacinia sed</a></h1>
								<p>Suspendisse nec facilisis velit. Fusce et justo tortor. In dictum congue placerat. Nulla ultricies, leo in bibendum dignissim, eros magna cursus eros, id dictum est elit nec velit. Nulla ullamcorper lobortis augue, sit amet accumsan odio sodales sed. Suspendisse sed metus tortor. In adipiscing sapien in nunc fringilla id congue elit adipiscing. </p>
								<p>Nulla facilisi. Pellentesque cursus mattis consectetur. In felis dui, tempus quis imperdiet id, rutrum vitae dui. Pellentesque convallis tincidunt ante vel molestie. In pharetra imperdiet adipiscing. Vivamus rhoncus porta ipsum, eget venenatis turpis semper ut. </p>
								<a class="read-more" href="single-post.html">Read More</a>
								<ul class="post-data">
									<li>By <a href="#">Admin</a></li>
									<li>July 31, 2012</li>
									<li><a href="#">Photography,</a></li>
									<li><a href="#">Videos,</a></li>
									<li><a href="#">Wordpress</a></li>
								</ul>
							</div>
						</article>

						<article class="blog-project video">
							<div class="post-type">
								<span></span>
								<a class="comment-number" href="#">88</a>
							</div>

							<div class="post-content">

								<!-- youtube -->
								<iframe class="videoembed" src="http://www.youtube.com/embed/YE7VzlLtp-4?hd=1&wmode=opaque&controls=1&showinfo=0;rel=0" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
								<!-- End youtube -->


								<h1><a href="single-post.html">Vivamus porttitor eros quis nisi lacinia sed</a></h1>
								<p>Suspendisse nec facilisis velit. Fusce et justo tortor. In dictum congue placerat. Nulla ultricies, leo in bibendum dignissim, eros magna cursus eros, id dictum est elit nec velit. Nulla ullamcorper lobortis augue, sit amet accumsan odio sodales sed. Suspendisse sed metus tortor. In adipiscing sapien in nunc fringilla id congue elit adipiscing. </p>
								<p>Nulla facilisi. Pellentesque cursus mattis consectetur. In felis dui, tempus quis imperdiet id, rutrum vitae dui. Pellentesque convallis tincidunt ante vel molestie. In pharetra imperdiet adipiscing. Vivamus rhoncus porta ipsum, eget venenatis turpis semper ut. </p>
								<a class="read-more" href="single-post.html">Read More</a>
								<ul class="post-data">
									<li>By <a href="#">Admin</a></li>
									<li>July 31, 2012</li>
									<li><a href="#">Photography,</a></li>
									<li><a href="#">Videos,</a></li>
									<li><a href="#">Wordpress</a></li>
								</ul>
							</div>
						</article>

						<article class="blog-project audio">
							<div class="post-type">
								<span></span>
								<a class="comment-number" href="#">88</a>
							</div>

							<div class="post-content">
								
								<audio controls>
									<source src="http://www.animal-sounds.org/farm/Horse,%20walking%20by%20animals005.wav" type="audio/wav">
									<source src="images/audio/horse.mp3" type="audio/mpeg">
									Your browser does not support the audio element.
								</audio>

								<h1><a href="single-post.html">Vivamus porttitor eros quis nisi lacinia sed</a></h1>
								<p>Suspendisse nec facilisis velit. Fusce et justo tortor. In dictum congue placerat. Nulla ultricies, leo in bibendum dignissim, eros magna cursus eros, id dictum est elit nec velit. Nulla ullamcorper lobortis augue, sit amet accumsan odio sodales sed. Suspendisse sed metus tortor. In adipiscing sapien in nunc fringilla id congue elit adipiscing. </p>
								<p>Nulla facilisi. Pellentesque cursus mattis consectetur. In felis dui, tempus quis imperdiet id, rutrum vitae dui. Pellentesque convallis tincidunt ante vel molestie. In pharetra imperdiet adipiscing. Vivamus rhoncus porta ipsum, eget venenatis turpis semper ut. </p>
								<a class="read-more" href="single-post.html">Read More</a>
								<ul class="post-data">
									<li>By <a href="#">Admin</a></li>
									<li>July 31, 2012</li>
									<li><a href="#">Photography,</a></li>
									<li><a href="#">Videos,</a></li>
									<li><a href="#">Wordpress</a></li>
								</ul>
							</div>
						</article>

						<article class="blog-project text-post">
							<div class="post-type">
								<span></span>
								<a class="comment-number" href="#">88</a>
							</div>

							<div class="post-content">

								<h1><a href="single-post.html">Vivamus porttitor eros quis nisi lacinia sed</a></h1>
								<p>Suspendisse nec facilisis velit. Fusce et justo tortor. In dictum congue placerat. Nulla ultricies, leo in bibendum dignissim, eros magna cursus eros, id dictum est elit nec velit. Nulla ullamcorper lobortis augue, sit amet accumsan odio sodales sed. Suspendisse sed metus tortor. In adipiscing sapien in nunc fringilla id congue elit adipiscing. </p>
								<p>Nulla facilisi. Pellentesque cursus mattis consectetur. In felis dui, tempus quis imperdiet id, rutrum vitae dui. Pellentesque convallis tincidunt ante vel molestie. In pharetra imperdiet adipiscing. Vivamus rhoncus porta ipsum, eget venenatis turpis semper ut. </p>
								<a class="read-more" href="single-post.html">Read More</a>
								<ul class="post-data">
									<li>By <a href="#">Admin</a></li>
									<li>July 31, 2012</li>
									<li><a href="#">Photography,</a></li>
									<li><a href="#">Videos,</a></li>
									<li><a href="#">Wordpress</a></li>
								</ul>
							</div>
						</article>

						<a class="load-more" href="#">Load More</a>

					</section>

					<section class="span3 sidebar">
						<ul class="widgets">
							<li class="category-widget widget">
								<h2>Categories</h2>
								<ul>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Case-studies</a></li>
									<li><a href="#">Company</a></li>
									<li><a href="#">Developer</a></li>
									<li><a href="#">Interview</a></li>
									<li><a href="#">Product</a></li>
									<li><a href="#">Uncategorized</a></li>
								</ul>
							</li>

							<li class="tag-widget widget">
								<h2>Tags</h2>
								<ul>
									<li><a href="#">WordPress</a></li>
									<li><a href="#">Webdesign</a></li>
									<li><a href="#">Post-production</a></li>
									<li><a href="#">Coder</a></li>
									<li><a href="#">Rendering</a></li>
									<li><a href="#">Photography</a></li>
								</ul>
							</li>

							<li class="newsleter-widget widget">
								<h2>Newsletter</h2>
								<p>Sign up for our newsletter to receive periodic articles.</p>
								<form id="receive-letter">
									<input type="text" name="email" id="email" placeholder="Email">
									<input type="submit" id="submit" value="Subscribe">
								</form>
							</li>

							<li class="popular-post-widget widget">
								<h2>Popular Posts (Month)</h2>
								<ul>
									<li><a href="#">Donec accumsan sapien et lacus interdum porttitor.</a></li>
									<li><a href="#">Fusce a est et purus gravida tincidunt.</a></li>
									<li><a href="#">Mauris a metus non mi laoreet semper vel sed diam.</a></li>
									<li><a href="#">Aenean a sapien vel sapien aliquet.</a></li>
									<li><a href="#">Aliquam auctor commodo orci, sit amet tincidunt purus blandit quis.</a></li>
								</ul>
							</li>

							<li class="last-comment-widget widget">
								<h2>Last Comments</h2>
								<ul>
									<li>
										<p>Donec accumsan sapien et lacus interdum porttitor.</p>
										<span class="date">02:16 pm - Nisan 03,2013</span>
										<a href="#">@johndoetweet</a>
									</li>
									<li>
										<p>Fusce a est et purus gravida tincidunt id eget lectus.</p>
										<span class="date">02:16 pm - Nisan 03,2013</span>
										<a href="#">@johndoetweet</a>
									</li>
									<li>
										<p>Mauris a metus non mi laoreet semper vel sed diam.</p>
										<span class="date">02:16 pm - Nisan 03,2013</span>
										<a href="#">@johndoetweet</a>
									</li>
									<li>
										<p>Aenean a sapien vel sapien aliquet venenatis id sed turpis.</p>
										<span class="date">02:16 pm - Nisan 03,2013</span>
										<a href="#">@johndoetweet</a>
									</li>
									<li>
										<p>Aliquam auctor commodo orci, sit amet tincidunt purus blandit quis.</p>
										<span class="date">02:16 pm - Nisan 03,2013</span>
										<a href="#">@johndoetweet</a>
									</li>
								</ul>
							</li>
						</ul>
					</section>

				</div>
			</div>
		</div>
		<!-- End content -->




	<!-- End Container -->

    <?php $template->themeEnd(); ?>
