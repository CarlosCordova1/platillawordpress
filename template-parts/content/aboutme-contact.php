    <?php
session_start();
    $cont=$_SESSION["contacto"];
    ?>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <section class="cta-section theme-bg-light py-5">
		    <div class="container text-center single-col-max-width">
			    <h2 class="heading">Contacto</h2>
			    <div class="intro">
			    <p>Sí estas interesado en contactarme para ayudarte en tus proyectos ó sí solamente quieres saludarme, llena el siguiente formulario de contacto ó enviame un email a <a href="mailto:#">contacto@carloscordova.com</a></p>
			    <p>Sigueme en los siguientes canales sociales</p>
			    <ul class="list-inline mb-0">
			    	<li class="list-inline-item b-3"><a href="https://github.com/CarlosCordova1" target="_blank" ><i class="fab icon brands fa-github fa-lg"></i> </a></li>
	              	<li class="list-inline-item mb-3"><a href="https://www.facebook.com/jcarlosccordova/" target="_blank" ><i class="fab icon brands fa-facebook-f fa-lg"></i></a></li>
					<li class="list-inline-item mb-3"><a href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile" target="_blank" ><i class="fab icon brands fa-linkedin fa-lg"></i></a> </li>
							<li class="list-inline-item mb-3"><a href="https://stackexchange.com/users/16915943/carlos-cordova?tab=accounts" target="_blank" ><i class="fab fa-stack-overflow fa-fw fa-lg"></i></a></li>
	                 
	                
	                
	                <!--<li class="list-inline-item mb-3"><a class="facebook" href="#"><i class="fab fa-facebook-f fa-fw fa-lg"></i></a></li>-->
	                
	                
	            </ul><!--//social-list-->
			    </div>

			</div><!--//container-->
	    </section>
	    <section class="contact-section px-3 py-5 p-md-5">
		    <div class="container responsetrue">
			    <form id="contact-form" class="contact-form col-lg-8 mx-lg-auto" method="post" action="">
			        <h3 class="text-center mb-3">Estar en contacto</h3>
			        <div class="form-row">                                                           
		                <div class="form-group col-md-6">
		                    <label class="sr-only" for="cname">Nombre</label>
		                    <input type="text" class="form-control" id="cname" name="name" value="<?php echo (isset($cont["nombre"])?$cont["nombre"]:"" )?>" placeholder="Nombre" minlength="4" maxlength="30" required="" aria-required="true">
		                </div>                    
		                <div class="form-group col-md-6">
		                    <label class="sr-only" for="cemail">Email</label>
		                    <input type="email" class="form-control" id="cemail" name="email" placeholder="Email" value="<?php echo (isset($cont["email"])?$cont["email"]:"" )?>" required="" aria-required="true">
		                </div>
		                <div class="form-group col-12">
			                <select id="services" class="custom-select" name="services">
			                	<option <?php echo (!isset($cont["services"])?"selected":"" )?> value="Selecciona" >Selecciona un tema de tu interés</option>
								<option <?php echo (isset($cont["services"]) && $cont["services"]=="saludar" ?"selected":"" )?> value="saludar">Saludar</option>
								<option <?php echo (isset($cont["services"]) && $cont["services"]=="ayuda" ?"selected":"" )?>  value="ayuda">Solictar ayuda técnica</option>
								<option <?php echo (isset($cont["services"]) && $cont["services"]=="asesoria" ?"selected":"" )?> value="asesoria">Solicitar asesoría</option>
								<option <?php echo (isset($cont["services"]) && $cont["services"]=="contratar" ?"selected":"" )?> value="contratar">Contratar mis servicios</option>
								<option <?php echo (isset($cont["services"]) && $cont["services"]=="bug" ?"selected":"" )?> value="bug">Reportar un problema del blog</option>
								<option <?php echo (isset($cont["services"]) && $cont["services"]=="notsure" ?"selected":"" )?> value="notsure">No estoy seguro</option>
							</select>
							
						</div>
		                <div class="form-group col-12">
		                    <label class="sr-only" for="cmessage">Tu mensaje</label>
		                    <textarea class="form-control" id="cmessage"  name="message" placeholder="Escribe tu mensaje" rows="10" required="" aria-required="true"><?php echo (isset($cont["cmessage"])?$cont["cmessage"]:"" )?></textarea>
		                </div>
<div class="form-group col-12">
						 
      <div class="g-recaptcha" data-sitekey="6LcGUf0UAAAAAPMafYwNNiYs1JEOfMIGg5QduIjr"></div>
      
     </div>
      <div class="form-group col-12 responsefalse">
		                   
		                </div>

 

		                 <div class="form-group col-12">
		                    <button type="button" class="btn btn-block btn-primary py-2 bton-enviarmsg">Enviar Mensaje</button>
		                </div>                           
		            </div><!--//form-row-->
		        </form>
		    </div><!--//container-->
	    </section>
