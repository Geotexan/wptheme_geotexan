<?php
/*
Template Name: Portada
*/
global $cfs;
$carrusel = $cfs->get("carrusel");

?>
<?php get_header();?>
	<div class="blockFull bg-color-666 border-bottom-solid-000">
		<div class="slider">
			<div id="carousel-captions" class="carousel slide carousel-fade" data-ride="carousel">
			  <ol class="carousel-indicators">
				<?php for($i = 0; $i < count($carrusel); $i++): ?>
					<li data-target="#carousel-captions" data-slide-to="<?php echo $i;?>" class="<?php echo ($i == 0 ? "active" : "");?>"></li>
				<?php endfor;?>
			  </ol>
			  <div class="carousel-inner mask">
				<?php $activo = false; ?>
				<?php foreach($carrusel as $item): ?>
				<div class="item <?php echo ($activo == false ? "active " : "");?>mask">
				  <img  alt="900x500" src="<?php echo $item['imagen'];?>" class="mask">
				  <div class="carousel-caption bg-color-halfWhite border-radius-6 padding-12">
					<h2 class="color-primary carousel-h2"><?php echo $item['titulo'];?></h2>
					<p class="color-333 slogan "><?php echo $item['subtitulo'];?></p>
				  </div>
				</div>
				<?php $activo = true; ?>
				<?php endforeach; ?>
			  </div>
			  <a class="left carousel-control color-FFF" href="#carousel-captions" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="right carousel-control color-FFF" href="#carousel-captions" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
			</div>
		</div>
	</div>
    
	<main class="container">

			<div class="whiteBox margin-left-15 margin-right-15 padding-24">
            
				<div class="row">
				
                    <section class="col-lg-8 col-md-8 padding-left-30 padding-right-30">
                    
                    <h2 class="border-bottom-dotted-CCC margin-bottom-24"><?php echo $cfs->get("nombre_del_congreso");?></h2>
                    

                            <p class="destacado well"><?php echo $cfs->get("entradilla");?></p>
                            
							<?php echo $cfs->get("cuerpo");?>
							
                            <p class="destacado margin-top-24">&iexcl;Contamos contigo!</p>
                            
							<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
                            
                            <div class="clearfix"><br></div>
                            
                            <h3 class="border-bottom-solid-CCC margin-top-24">Actualidad del congreso</h3>
                            
                            <div class="clearfix"><br></div>
                            
							<?php
								$xml = simplexml_load_string(file_get_contents("http://blogs.unir.net/derecho?format=feed&type=rss"));
								//print_r($xml);
								
								foreach($xml->channel->item as $noticia):
							?>
							<!--noticia-->

                            
                            <div class="row border-bottom-dotted-CCC padding-bottom-12 margin-top-12">
                                    
                                    <div class=" col-lg-3 col-md-3">
                                    
                                    	<img src="<?php echo $noticia->image;?>" alt="Educación para todos" class="img-responsive img-thumbnail"/>
                                    
                                    </div>
                                    
                                    <div class="noticia col-lg-9 col-md-9">
										<h4><?php echo $noticia->title;?></h4>
                                    	<p class="who">Por <a href="#"><?php echo between("(", ")", $noticia->author);?></a> | Publicado : <?php echo strtoupper(date("j F Y", strtotime($noticia->pubDate)));?> | en <a href="#"><?php echo $noticia->category;?></a></p>
                                    	<p><?php echo (string)$noticia->description;?></p>
                                    
                                    </div>
                            </div>
                            
                            <div class="clearfix"></div> <!--/noticia-->
							
                            <?php endforeach;?>
                            
								<p class="btn btn-default width-100 margin-top-24">Ver más noticias</p>
                            
                             
                    </section>
                    
                    <?php get_sidebar();?>
				
				</div>
			
			</div>
    
    </main>
    
    <div class="clearfix"></div>
<?php get_footer();?>

<?php
function before ($this, $inthat)
    {
        return substr($inthat, 0, strpos($inthat, $this));
    };
	
	function after ($this, $inthat)
    {
        if (!is_bool(strpos($inthat, $this)))
        return substr($inthat, strpos($inthat,$this)+strlen($this));
    };

    function between ($this, $that, $inthat)
    {
        return before ($that, after($this, $inthat));
    };
?>