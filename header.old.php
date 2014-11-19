<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- <meta name="description" content="">
        <meta name="author" content="©UNIR">
        <meta name="Keywords" content=""/>
        <meta name="Description" content=""/>
        <meta name="geo.region" content="ES-MD"/>
        <meta name="geo.placename" content="Madrid"/>
        <meta name="geo.position" content="#"/>
        <meta name="ICBM" content="#"/>
        <meta name="revisit-after" content="3 days"/>
        <meta name="Copyright" content="1995-2014"/>-->
    
    <title>Plantilla Congresos</title>
	<link rel="shortcut icon" href="<?php bloginfo("stylesheet_directory");?>/img/favicon.ico">
    
    
    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
	<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="css/ie.css">
    <![endif]-->


	
    <!-- UNIR CSS -->
    	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/structure.css">


	<?php wp_head(); ?>
  </head>

<body>

    <header>
		<div class="width-100">
			<div class="container">
				<div class="col-md-6 col-sm-6 logo"><img src="<?php bloginfo('stylesheet_directory');?>/img/unir-research.png" width="300" height="57" class="img-responsive"></div>
				<div class="col-md-6 col-sm-6 claim hidden-sm hidden-xs"><p>La Universidad en Internet</p></div>
			</div>
		</div>
        
		<div class="width-100 bg-color-primary">
			
				<div class="container">
                
                
                            <div class="toolbar pull-right">
                                <ul class="nav navbar-header margin-top-6">
                                    <li class="dropdown border-divider-left">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Otras web de UNIR <span class="caret"></span></a>
                                         <ul class="dropdown-menu bg-color-FFF">
                                            <li><a href="http://www.unir.net/" title="UNIR.NET" target="_blank">UNIR.net</a></li>
                                            <li><a href="http://revista.unir.net/" title="UNIR revista" target="_blank">UNIR Revista</a></li>
                                            <li><a href="http://cultural.unir.net/" title="UNIR cultural" target="_blank">UNIR Cultural</a></li>
                                            <li><a href="http://alumni.unir.net/" title="UNIR alumni" target="_blank">UNIR Alumni</a></li>
                                            <li><a href="http://teatro.unir.net/" title="UNIR teatro" target="_blank">UNIR Teatro</a></li>
                                            <li><a href="http://masterclass.unir.net/" title="UNIR masterclass" target="_blank">Masterclass</a></li>
                                            <li><a href="http://cuidadores.unir.net/" title="UNIR cuidadores" target="_blank">UNIR Cuidadores</a></li>
                                        </ul>
                                     </li>
                                </ul>
                                
                          </div>
                          
                                          				
                             <div class="toolbar pull-right">
                                    <form class="search">
                                    <input class="bt-search margin-top-6" type="image" src="<?php bloginfo('stylesheet_directory');?>/img/xlupa.png">
                                   
                                    <input class="search-box margin-left-3 margin-top-0" type="text" value="" placeholder="Buscar">
                                    </form>

                             </div>   	

                          
                  
				</div>
			
		</div>
        
 <?php /* <nav class="nav navbar-inverse" role="navigation" id="navigation">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	        </div>
	        <div class="navbar-collapse collapse">
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="<?php echo home_url();?>" title="Portada">Portada</a></li>
		        
				<li class="display dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Información del congreso">El congreso</a>
					<ul class="dropdown-menu">
			             <li><a href="<?php echo home_url();?>/presentacion" title="Información del congreso" >Presentación</a></li>
			             <li><a href="<?php echo home_url();?>/comite" title="Comités">Comités</a></li>
			             <li><a href="<?php echo home_url();?>/ponentes" title="Investigación" >Ponentes</a></li>
				    </ul>
		        </li>
				
 				<li class="display dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Programa del congreso">Programa</a>
					<ul class="dropdown-menu">
			             <li><a href="<?php echo home_url();?>/agenda" title="Agenda del congreso">Agenda</a></li>
                        <li><a href="<?php echo home_url();?>/lineas-tematicas" title="Líneas temáticas">Líneas temáticas</a></li>
			             <li><a href="<?php echo home_url();?>/documentacion" title="Documentación">Documentación</a></li>
				    </ul>
		        </li>

                
                


 				<li class="display dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Ediciones anteriores">Ediciones</a>
					<ul class="dropdown-menu">
			             <li><a href="<?php echo home_url();?>/galeria" title="Galería">Galería</a></li>
			             <li><a href="<?php echo home_url();?>/videoteca" title="Vídeoteca">Videoteca</a></li>
				    </ul>
		        </li>
                   <li class="display dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Cómo participar">Cómo participar</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo home_url();?>/inscripcion" title="Inscripcion">Inscripción</a></li>
                      <li><a href="<?php echo home_url();?>/comunicaciones" title="Comunicaciones">Comunicaciones</a></li>
                      <li><a href="<?php echo home_url();?>/certificacion-y-publicacion" title="Certificación y publicación">Certificación y publicación</a></li>
                    </ul>
                  </li>
				 <li><a href="<?php echo home_url();?>/faq" title="faq">FAQ</a></li>
	          </ul>
	        </div><!--/.navbar-collapse -->
	      </div>
	    </nav> 
        */ ?>
<?php $inicio        = (is_page('inicio') ? " class='active'" : ""); ?>
    <?php $quienes       = (is_page('nuestrogrupo') || is_page('miembros') || is_page('universidad') || is_page('contacto')  ? "active " : ""); ?>
    <?php $lineas        = (is_page('lineasdeinvestigacion')  ? " class='active'" : ""); ?>
    <?php $proyectos     = (is_page('proyectos')  ? " class='active'" : ""); ?>
    <?php $publicaciones = (is_page('publicaciones')  ? " class='active'" : ""); ?>
    <?php $congresos     = (is_page('congresos')  ? " class='active'" : ""); ?>
    <?php $blog          = (is_page('blog')  ? " class='active'" : ""); ?>
	
    
	<?php
		$argsMenu = array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'navbar-collapse collapse',
		'container_id'    => '',
		'menu_class'      => 'nav navbar-nav',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	);
	?>
	
	<nav class="nav navbar-inverse" role="navigation" id="navigation">
    
		<div class="container">
        
			<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Mostrar navegación</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
            
            <?php 
		
				$locations = get_nav_menu_locations();
				$menu = wp_get_nav_menu_object( $locations[ 'header-menu' ] );

				$menu_items = wp_get_nav_menu_items($menu->term_id);
				
				?>
			
			<div class="navbar-collapse collapse">
            
				<ul class="nav navbar-nav">
					<?php for($i = 0 ; $i < count($menu_items) ; $i++):?>
						<?php $item = $menu_items[$i];?>
						<?php $clase = ( is_page($item->title) ?  " class='active'"  : "" );?>
						<?php if (isset($menu_items[$i+1]) && $menu_items[$i+1]->menu_item_parent == $item->ID):?>
							<li class="display dropdown"><a href="#" title="<?php echo $item->title;?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $item->title;?></a>
								<ul class="dropdown-menu">
								<?php
								while (isset($menu_items[$i+1]) && $menu_items[$i+1]->menu_item_parent == $item->ID)	
									{
									$i++;
									$subitem = $menu_items[$i];
									?>
										<li><a href="<?php echo $subitem->url;?>" title="<?php echo $subitem->title;?>"><?php echo $subitem->title;?></a></li>
									<?php
									}
								?>
								</ul>
							</li>
						<?php else: ?>
							<li<?php echo $clase;?>><a href="<?php echo $item->url;?>" title="<?php echo $item->title;?>"><?php echo $item->title;?></a></li>
						<?php endif; ?>
					
                    <?php endfor;?>
				</ul><!--/.navbar ul --> 
                
			</div><!--/.navbar-collapse --> 
          
		</div><!--/ div container [nav] --> 
        
	</nav>	
		
	
	</header>