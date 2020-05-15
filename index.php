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
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v7.0"></script>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">


							

							<!-- Header -->
						<?php get_template_part( 'template-parts/header/header2plantilla' );?>

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
														//get_template_part( 'template-parts/content/content-excerpt' );
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
														get_template_part( 'template-parts/content/content-excerpt' );
														 
													}

													// Previous/next page navigation.
													//twentynineteen_the_posts_navigation();

												} else {

													// If no content, include the "No posts found" template.
													//get_template_part( 'template-parts/content/content', 'none' );

												}
												?>

										 
									</div>
								</section>
								<div class="pagination"> <?php echo paginate_links( $args );?> </div>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							

							<!-- Menu -->

<?php get_template_part( 'template-parts/header/menunav' );?>
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

	
<?php wp_footer(); ?>
	</body>
</html>