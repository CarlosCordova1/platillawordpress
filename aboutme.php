<?php

/*
 * @package Carlos cordova	
 * @subpackage Carlos cordova
 * @since 1.0
 * @version 1.0
 Template Name: about me
 */


get_header();
?>


	<body class="is-preload">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v7.0"></script>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main" >
						<div class="inner">



<!-- Header -->
						<?php //get_template_part( 'template-parts/header/header2plantilla' );?>
						<?php get_template_part( 'template-parts/header/header2plantilla-aboutme' );?>


	<!--<section id="primary" class="content-area">-->
		<div id="" class="">
		<main   class="site-main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				//get_template_part( 'template-parts/content/content', 'single' );

				if ( is_singular( 'attachment' ) ) {
					// Parent post navigation.
					the_post_navigation(
						array(
							/* translators: %s: parent post link */
							'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentynineteen' ), '%title' ),
						)
					);
				} elseif ( is_singular( 'post' ) ) {
					// Previous/next post navigation.
					?>
					<div class="container">
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->

  <div class="container_prevandnextpost">
    	<?php
					the_post_navigation(
						array(
							  'screen_reader_text' => ' ', 
							
							'prev_text' =>  __( 'Previous post:', 'twentynineteen' )  .
								' <span class="post-title">%title</span>',	

								'next_text' =>  __( 'Next post:', 'twentynineteen' ) .
								' <span class="post-title">%title</span>',
						)
					);
					?>

</div>
<div style="display: inline-block;"></div>
   </div>

					<?php
				
				}

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="loadpage"></div>

	

	

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar" >
						<div class="inner">

							

							<!-- Menu -->
	
<?php //get_template_part( 'template-parts/header/menunav' );?>
<?php get_template_part( 'template-parts/header/menunav-aboutme' );?>

					
							<?php	//	get_footer();?>
						 

							<!-- Footer -->
							<footer id="footer">
									<p class="copyright"><?php echo date("Y");?> &copy; All rights reserved. <a href="#">Carlos Cordova</a>.</p>
								</footer>
									<!-- Scripts -->
			 <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.min.js"></script> 
			<script src="<?php echo get_template_directory_uri()?>/assets/js/browser.min.js"></script>
			<script src="<?php echo get_template_directory_uri()?>/assets/js/breakpoints.min.js"></script>
			<script src="<?php echo get_template_directory_uri()?>/assets/js/util.js"></script>
			<script src="<?php echo get_template_directory_uri()?>/assets/js/main.js"></script>
		 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
		  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
						</div>
					</div>

			</div>

	

	</body>
</html>
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/themeaboutme.css" />
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/js/all.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/js/js-cookie.min.js"></script>
<script type="text/javascript">

	/* Dependency: js-cookie plugin - Ref: https://github.com/js-cookie/js-cookie */

jQuery(document).ready(function(v) {

	function setThemeFromCookie() {
		// Check if the cookie is set 
		if (typeof Cookies.get('mode') !== "undefined" ) {
			$('body').addClass("dark-mode");
			$('#sidebar').addClass("main2");
			$('.toggle').addClass("main2");
			
			$('#darkmode').attr('checked', true); // toggle change
			console.log('Cookie: dark mode' );
		} else {
			$('body').removeClass("dark-mode");
			$("#sidebar").removeClass("main2");
			$('.toggle').removeClass("main2");
			$('#darkmode').attr('checked', false); // toggle change
			console.log('Cookie: light mode' );

		}

 

	}
	
	setThemeFromCookie();
	
	$('#darkmode').on('change', function(e){

		if ($(this).is(':checked')) {
			$('body').addClass('dark-mode');
			$('#sidebar').addClass("main2");
			$('.toggle').addClass("main2");
			//Set cookies for 7 days 
			Cookies.set('mode', 'dark-mode', { expires: 7 });
				console.log('Cookie: dark mode' );
			
		} else {
			$('body').removeClass('dark-mode');
			$("#sidebar").removeClass("main2");
			$('.toggle').removeClass("main2");
			//Remove cookies
			Cookies.remove('mode');
			console.log('Cookie: light mode' );
		}

	});

 loadpage("aboutme");
 ga('create', 'UA-166484475-1', 'auto', window.location+'/acerca-de-mi/page-init');
		$('.menu .liaboutme').on('click', function(e){
			$('.menu li').removeClass("active");
			$(this).addClass("active");
		 
			 ga('create', 'UA-166484475-1', 'auto', window.location+'/acerca-de-mi/page-link-acerca-de-mi');
			 loadpage("aboutme");
			});
		$('.menu .liportafolio').on('click', function(e){
		$('.menu li').removeClass("active");
			$(this).addClass("active");
			 
			ga('create', 'UA-166484475-1', 'auto', window.location+'/acerca-de-mi/page-link-portfolio');
			loadpage("portfolio");
				});
		$('.menu .liresume').on('click', function(e){
		$('.menu li').removeClass("active");
			$(this).addClass("active");
			 
			ga('create', 'UA-166484475-1', 'auto', window.location+'/acerca-de-mi/page-link-resume');
			loadpage("resume");
				});
		$('.menu .liblog').on('click', function(e){
		$('.menu li').removeClass("active");
			$(this).addClass("active");
			 
			ga('create', 'UA-166484475-1', 'auto', window.location+'/acerca-de-mi/page-link-blog');
			loadpage("blog");
				});
		$('.menu .licontact').on('click', function(e){
		$('.menu li').removeClass("active");
			$(this).addClass("active");
			 
			ga('create', 'UA-166484475-1', 'auto', window.location+'/acerca-de-mi/page-link-contact');
			loadpage("contact");
				});
	
	

$( ".loadpage" ).on( "click", ".bton-portfolio", function() {
   $('.menu .liportafolio').click();
 
   	ga('create', 'UA-166484475-1', 'auto', window.location+'/acerca-de-mi/page-bton-portfolio');
});
$( ".loadpage" ).on( "click", ".bton-curriculum", function() {
	$('.menu .liresume').click();
	 
	 	ga('create', 'UA-166484475-1', 'auto', window.location+'/acerca-de-mi/page-bton-curriculum');
   
});
$( ".loadpage" ).on( "click", ".bton-blog", function() {
	$('.menu .liblog').click();
	 
	 	ga('create', 'UA-166484475-1', 'auto', window.location+'/acerca-de-mi/page-bton-blog');
   
});
$( ".loadpage" ).on( "click", ".bton-contacto", function() {
	$('.menu .licontact').click();
	 
	 	ga('create', 'UA-166484475-1', 'auto', window.location+'/acerca-de-mi/page-bton-contacto');
   
});


$( ".loadpage" ).on( "click", ".bton-enviarmsg", function(e) {
	let nombre= $("#cname").val().trim();
	let email= $("#cemail").val().trim();
	let validamail=false;
 let emailRegex = /^(?:[^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*|"[^\n"]+")@(?:[^<>()[\].,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,63}$/i;
   
    if (emailRegex.test(email)) {
 validamail=true;
    }

	let services= $("#services").val();
	let cmessage= $("#cmessage").val().trim();
	if (nombre=="" || nombre.length<=4) {
		$("#cname").focus();

	}else if (email=="" || validamail==false) {
				$("#cemail").focus();
	}
	else if (services=="Selecciona") {
				$("#services").focus();
	}
	else if (cmessage=="" || cmessage.length<=5) {
				$("#cmessage").focus();
	}
	else if (grecaptcha.getResponse()=="") {
			 
				$( ".responsefalse" ).hide().html('<div class="alert alert-danger"><strong>¿Eres un robot?</strong>  sí lo eres, no podras enviarme un mensaje, de lo contrario, porfavor indica que no lo eres</div>').fadeIn(); 
	}
	else{
  
   enviarmensaje(nombre,email,services,cmessage);
   	ga('create', 'UA-166484475-1', 'auto', window.location+'/acerca-de-mi/page-bton-enviarmsg');
	}
 
 });

		
});	



//----------------------------------
 function enviarmensaje( nombre,email,services,cmessage ){
  $.ajax({
      url : '<?php echo admin_url( 'admin-ajax.php') ?>',
     // url : 'http://52.162.33.137/wp-admin/admin-ajax.php',
    data : { "action" : "enviarmensaje","nombre":nombre,"email":email,"services":services,"cmessage":cmessage,
		 'g-recaptcha-response': grecaptcha.getResponse()},
     type : 'POST',
    dataType : 'HTML',
    beforeSend : function(xhr, status) {
    	$( ".responsetrue" ).fadeOut(); 
  
    },
    success : function(html) {
  //html= JSON.stringify(html);
 
  	$( ".responsetrue" ).hide().html(html).fadeIn();
  	//$( ".responsetrue" ).hide().fadeIn();
 
    },
     error : function( status) {
       $( ".responsefalse" ).hide().html('<div class="alert alert-danger"><strong>Error: </strong> Lo siento mucho! se provoco un error, porfavor intente más tarde.</div>').fadeIn(); 
    $( ".responsetrue" ).hide().fadeIn();
    },
 
    complete : function(xhr, status) {
        //alert('Petición realizada');
    }
});

}
//------------------------------------------


//----------------------------------
 function loadpage( page ){
  $.ajax({
      url : '<?php echo admin_url( 'admin-ajax.php') ?>',
     // url : 'http://52.162.33.137/wp-admin/admin-ajax.php',
    data : { "action" : "my_action","page" : page},
     type : 'POST',
    dataType : 'HTML',
    beforeSend : function(xhr, status) {
    	$( ".loadpage" ).hide(); 
  
    },
    success : function(html) {
  //html= JSON.stringify(html);
 
  	$( ".loadpage" ).html(html).fadeIn().css('opacity', '1');
  	
	setTimeout(show, 1000);
	 
  
 
    },
     error : function( status) {
       $( ".loadpage" ).html('<div class="alert alert-danger"><strong>Error: </strong> '+JSON.stringify(status)+'</div>').fadeIn().css('opacity', '1'); 
    
    },
 
    complete : function(xhr, status) {
        //alert('Petición realizada');
    }
});

}
function show(){
		$( ".loadpage" ).css('opacity', '1');
}
//------------------------------------------
</script>