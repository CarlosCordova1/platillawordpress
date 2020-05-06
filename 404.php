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

							<!-- Banner -->
								<section id="banner">
									<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentynineteen' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentynineteen' ); ?></p>
					<form method="post" action="#">
										<!--<input type="text" name="query" id="query" placeholder="Se<zx<zarch" />-->
									 
										<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("search") ) : ?>
<?php endif;?> 
 
									</form>
				</div><!-- .page-content -->
			</div><!-- .error-404 -->

		</main><!-- #main -->
	</section><!-- #primary -->
								


									
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