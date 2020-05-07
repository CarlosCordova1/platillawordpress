<?php

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php _e( 'Nothing Found', 'twentynineteen' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'twentynineteen' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentynineteen' ); ?></p>
			<?php
			//get_search_form();
			?>
				<form method="post" action="#">
										<!--<input type="text" name="query" id="query" placeholder="Se<zx<zarch" />-->
									 
										<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("search") ) : ?>
<?php endif;?> 
 
									</form>
<?php
		else :
			?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentynineteen' ); ?></p>
			<?php
			//get_search_form();
			?>
			<form method="post" action="#">
										<!--<input type="text" name="query" id="query" placeholder="Se<zx<zarch" />-->
									 
										<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("search") ) : ?>
<?php endif;?> 
 
									</form>
									<?php

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
