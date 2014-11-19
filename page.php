<?php

global $cfs;

$breadcrumbs = $cfs->get('breadcrumb');
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
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="whiteBox margin-left-15 margin-right-15 padding-24">
            
				<div class="row">
				
                    <section class="col-lg-8 col-md-8 padding-left-30 padding-right-30">
                    <ul class="list-inline border-bottom-dotted-CCC color-666 b-crumb">
						<span class=" glyphicon glyphicon-home color-CCC margin-right-9"></span>
						<?php foreach($breadcrumbs as $bc):?>
							<li>
							<?php if($bc['enlace']!="") :?>
								<a title="<?php echo $bc['nombre'];?>" href="<?php echo $bc['enlace'];?>"><?php echo $bc['nombre'];?></a>
							<?php else: ?>
								<?php echo $bc['nombre'];?>
							<?php endif;?>
							</li>
						<?php endforeach;?>
					</ul>
					
                    <h2 class="border-bottom-dotted-CCC margin-bottom-24"><?php the_title();?></h2>

                    <?php if($cfs->get('imagen_destacada')!=""):?><img class="img-responsive img-thumbnail" alt="Imagen destacada" src="<?php echo $cfs->get('imagen_destacada');?>"><?php endif;?>
                             
					<?php the_content();?>
                    </section>
                    
                    <?php get_sidebar();?>
				
				</div>
			
			</div>
			<?php endwhile; else: ?>
			<p><?php echo "buuuu"; ?></p>
			<?php endif; ?>
    </main>
    
    <div class="clearfix"></div>
<?php get_footer();?>