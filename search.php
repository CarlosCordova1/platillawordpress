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


							

							<!-- Header -->
						<?php get_template_part( 'template-parts/header/header2plantilla' );?>

						
 
								<section>
								 
									
									 <div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php _e( 'Search results for: ', 'twentynineteen' ); ?>
					<span class="page-description"><?php echo get_search_query(); ?></span>
				</h1>
			</header><!-- .page-header -->
<div class="posts">
			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that
				 * will be used instead.
				 */
				get_template_part( 'template-parts/content/content', 'excerpt' );

				// End the loop.
			endwhile;

			// Previous/next page navigation.
			twentynineteen_the_posts_navigation();

			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

										 
									 
								</section>

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

	

	</body>
</html>