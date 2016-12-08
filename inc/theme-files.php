<?php
function theme_files()
{
    wp_register_style('bootstrap-css','//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-css');
    wp_register_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
    wp_enqueue_style('font-awesome');
    wp_register_style('fonts.googleapis','//fonts.googleapis.com/css?family=Raleway');
    wp_enqueue_style('fonts.googleapis');
    wp_register_style('googleapis','//fonts.googleapis.com/css?family=Montserrat+Alternates');
    wp_enqueue_style('googleapis');
    wp_register_style('responsive',get_template_directory_uri().'/css/responsive.css',array(),'3.2','all');
    wp_enqueue_style('responsive');
    wp_enqueue_style('theme-style',get_stylesheet_uri() );
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('html5shiv','//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"');
    wp_enqueue_script('respond','//oss.maxcdn.com/respond/1.4.2/respond.min.js"');
    wp_enqueue_script('googleapis-api','//maps.googleapis.com/maps/api/js"');
    wp_enqueue_script('googleapis','//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"');
    wp_enqueue_script('bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"');
    wp_enqueue_script('main',get_template_directory_uri().'/js/main.js"',array('jquery'),'1.0',true);
    wp_enqueue_script('mixitup',get_template_directory_uri().'/js/jquery.mixitup.js"',array('jquery'),'2.1.7',true);
   
    
}
add_action('wp_enqueue_scripts','theme_files');
?>