<?php
/*
Template Name: Sidebar
*/
wp_reset_query();
global $cfs;
?>
<aside class="col-lg-4 col-md-4 padding-left-30 padding-right-30">
	<section>
		<?php foreach($cfs->get("elementos_sidebar", ID_SIDEBAR) as $elemento):?>
			<?php if ($elemento['texto']!=""):?>
				<?php echo $elemento['texto'];?>
			<?php endif;?>
			<?php if ($elemento['banner']!=""):?>
				<a href="<?php echo $elemento['enlace_banner'];?>" target="_blank"><img src="<?php echo $elemento['banner'];?>" alt="Banner destacado" class="img-responsive margin-top-15 padding-right-15"/></a>
			<?php endif;?>
		<?php endforeach;?>
	</section>
</section>
<?php /*

<aside class="col-lg-4 col-md-4 padding-left-30 padding-right-30">
                    
              
                        
                        	<h3 class="bg-head bg-color-primary color-FFF margin-bottom-0 minih3">Formulario de inscripción</h3>
                            
                            <form class="form-horizontal bg-content margin-top-0" role="form" id="formularioCongresos">
                      
                          <div class="form-group  padding-left-24 padding-right-24">
                            <label for="nombre" class="control-label">Nombre <span class="obligatorio">*</span></label>
                            <div class="controls">
                              <input type="text" class="form-control" id="nombre"
                                     placeholder="Nombre" required >
                            </div>
                          </div>
        
        
                          <div class="form-group  padding-left-24 padding-right-24">
                            <label for="apellidos" class="control-label">Apellidos <span class="obligatorio">*</span></label>
                            <div class="controls">
                              <input type="text" class="form-control" id="apellidos"
                                     placeholder="Apellidos" required >
                            </div>
                          </div>
        
                      
                          <div class="form-group  padding-left-24 padding-right-24">
                            <label for="email" class="control-label">Email <span class="obligatorio">*</span></label>
                            <div class="controls">
                              <input type="email" class="form-control" id="email"
                                     placeholder="Email" required >
                            </div>
                          </div>
        
        
                      
                          <div class="form-group  padding-left-24 padding-right-24">
                            <label for="area" class="control-label">Perfil<span class="obligatorio">*</span></label>
                            <div class="controls">
                              <select name="participantes" class="form-control color-999" required>
                                <option value="" selected>¿Cómo vas a participar?</option>
                                <option value="Ponente">Ponente</option>
                                <option value="Colaborador">Colaborador</option>
                                <option value="Invitado">Invitado</option>
                              </select>
                            </div>
                          </div>
                          
                          
                          
                          <div class="form-group  padding-left-24 padding-right-24">

                              <div class="checkbox controls">
                                <label>
                                  <input type="checkbox"  required > 
                                <a href="http://www.unir.net/landing/condiciones.htm" title="Documento de políticas de privacidad" target="_blank">Acepto la política de privacidad</a> </label>
                              </div>
                              
                              <div class="clearfix"><br></div>
                              
                              <div class="controls">

									<button type="submit" class="btn btn-default width-100">Enviar</button>
                              
                              </div>

                          </div>
                          
                        </form>
                        
                    		<div class="clearfix"></div>
                            
                          
                           <h3 class="bg-head bg-color-primary color-FFF margin-bottom-0 minih3">Últimos Tweets</h3>
                           
                           <a class="twitter-timeline bg-head" href="https://twitter.com/EPEDIG" data-widget-id="451308033478381568">Tweets por @EPEDIG</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


                          	
                                                       
                            
                        <h3 class="bg-head bg-color-primary color-FFF margin-bottom-0 minih3">Cómo llegar</h3> 
                            
							<div class="bg-content">
                            
                         <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m20!1m8!1m3!1d188230.39258055447!2d-2.4493214!3d42.5106853!3m2!1i1024!2i768!4f13.1!4m9!1i0!3e1!4m0!4m5!1s0xd5aab143f8b3d25%3A0xaa7c37864c781ae!2sPlaza+de+Toros+de+La+Ribera%2C+C%2F+La+Ribera%2C+s%2Fn%2C+26004+Logro%C3%B1o%2C+La+Rioja!3m2!1d42.471185999999996!2d-2.4370119999999997!5e0!3m2!1ses!2ses!4v1396350728006" height="200" width="100%" frameborder="0"></iframe>
                           
                         </div>


                   
                    
                    </aside>
*/ ?>