<?php
include_once('inc/theme-files.php');


function theme_menus(){
    register_nav_menus(array(
      'main_menu'=>'Main menu',  
    'footer_menu'=>'Footer menu'
    ));
}
add_action('init','theme_menus');


function theme_default_menus(){
    echo '<ul id="nav" >';
    if(page!=get_option('show_on_front'))
    {
        echo '<li> <a href="'.home_url().'/">Home</a></li>';
    }
    wp_list_pages('title_li');
    echo '</ul>';
}
//here no need to add add_action
?>