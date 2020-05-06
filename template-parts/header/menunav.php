	<nav id="menu">

									<div class="rounded-circle" >
										<a href="<?php echo get_home_url(); ?>" class="logo">
  <img src="<?php echo get_template_directory_uri()?>/images/pic01.jpg" width="80%" class="rounded-circle" alt="..."></a>
  
</div>




							<!--<header class="major">
										<h2>Menu</h2>
									</header>-->
		 	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Widgetized Area") ) : ?>
<?php endif;?> 
								</nav>