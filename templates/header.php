<!DOCTYPE html>
<html class="ie ie7" <?php language_attributes(); ?>>
<html class="ie ie8" <?php language_attributes(); ?>>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php wp_title( '|', true, 'right' ); ?></title>

        
        <!--[if lt IE 9]-->
       
        <!--[endif]-->
        <?php wp_head();?> 
    </head>
    <body <?php body_class();?>>
        
       <div class="header">
       	<div class="container">
       		<div class="row">
       			<div class="col-md-4">
       			<div class="logo">
       				<img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="">
       			</div>
       			</div>
       			
       			
       				<div class="mainmenu_area">
		              <div class="col-md-8">
                                 <?php
                wp_nav_menu(array(
                    'theme_location'=>'main_menu',
                    'menu_id'=>'nav',
                    'fallback_cb'=>'theme_default_menus'
                    
                ));
                ?>
					</div>
					
				</div>
			
		
       				
       			</div>
       		</div>
       	</div>
       	