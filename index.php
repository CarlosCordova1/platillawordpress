<?php

/*
 * @package Carlos cordova	
 * @subpackage Carlos cordova
 * @since 1.0
 * @version 1.0
 */
?>

<?php get_header();?>

	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

 

   <div class="row">
   <div class="col-7"></div>
    <div class="col-5"><br>
      <!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>
    </div>
  </div>

							

							<!-- Header -->
								<header id="header">

									<a href="index.html" class="logo"><strong>Carlos </strong>Cordova</a>
									<ul class="icons">
										
										<li><a href="https://github.com/CarlosCordova1" target="_blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="https://facebook.com/CarlosCordova9003" target="_blank" class="icon brands fa-github"><span class="label">Github</span></a></li>
										
										
										
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									
											 	<section id="primary" class="content-area content">
												<main id="main" class="site-main">

												<?php
												if ( have_posts() ) {

													// Load posts loop.
													while ( have_posts() ) {
														the_post();
														get_template_part( 'template-parts/content/content' );
														break;
													}

													// Previous/next page navigation.
													//twentynineteen_the_posts_navigation();

												} else {

													// If no content, include the "No posts found" template.
													get_template_part( 'template-parts/content/content', 'none' );

												}
												?>

												</main><!-- .site-main -->
											 
											</section><!-- .content-area -->
								


									
								</section>
 
								<section>
								 
									<div class="posts">
									 
												<?php
												if ( have_posts() ) {

													// Load posts loop.
													while ( have_posts()) {
														the_post();
														get_template_part( 'template-parts/content/content' );
														 
													}

													// Previous/next page navigation.
													//twentynineteen_the_posts_navigation();

												} else {

													// If no content, include the "No posts found" template.
													get_template_part( 'template-parts/content/content', 'none' );

												}
												?>

										 
									</div>
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							

							<!-- Menu -->
								<nav id="menu">

									<div class="rounded-circle" >
  <img src="<?php echo get_template_directory_uri()?>/images/pic01.jpg" width="80%" class="rounded-circle" alt="...">
  
</div>




							<!--<header class="major">
										<h2>Menu</h2>
									</header>-->
		 	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Widgetized Area") ) : ?>
<?php endif;?>   <?php /* ?>
									<ul>
 
										
										<li><a href="index.html">Homepage</a></li>
										<li><a href="generic.html">Generic</a></li>
										<li><a href="elements.html">Elements</a></li>
										<li>
											<span class="opener">Frontend</span>

											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Backend</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Base de datos</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Android</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Otros</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>
 
										<li><a href="#">...</a></li>
									</ul>
									<?php */ ?>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Publicidad</h2>
									</header>
									<div class="mini-posts">
										<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Widgetized Ads") ) : ?>
<?php endif;?>
										<article>
											<a href="#" class="image"><img src="<?php echo get_template_directory_uri()?>/images/pic07.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php echo get_template_directory_uri()?>/images/pic08.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php echo get_template_directory_uri()?>/images/pic09.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">More</a></li>
									</ul>
								</section>

						
							<?php
							get_footer();
							?>

						</div>
					</div>

			</div>

	

	</body>
</html>