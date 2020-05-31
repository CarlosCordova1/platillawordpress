<section class="cta-section theme-bg-light py-5">
		    <div class="container text-center">
			    <h2 class="heading">Blog acerca de desarrollo de Software, herramientas y todo lo que involucra el desarrollo de aplicaciones y paginas web</h2>
			    <!--<div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
			    <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>-->
		    </div><!--//container-->
	    </section>
	    <section class="blog-list px-3 py-5 p-md-5">
	    	<h3 class="section-title font-weight-bold mb-5">Últimas publicaciones del blog</h3>
		    <div class="container">
			    <div class="row">
					 
							<?php
 $args =   array( 'post_type' => 'post', 'posts_per_page' => 6,  );

    												$query = new WP_Query(  $args );
												if ( $query->have_posts() ) {
													
													// Load posts loop.
													while ( $query->have_posts()) {
														echo '<div class="col-md-4 mb-3">';
													echo '<div class="card blog-post-card">';
														$query->the_post();
														get_template_part( 'template-parts/content/content-excerpt' );
														echo '</div><!--//card-->';
 										echo '</div><!--//col-->'; 
													}
													

												}  
 
												?>
				 
				   


				</div><!--//row-->
			    
			    
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-next nav-item nav-link rounded" target="_blank" href="<?php echo get_home_url(); ?>">Ir a la página principal<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
		    </div>
	    </section>