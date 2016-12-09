<?php
function theme_custom_posts()
{
    register_post_type('slide',array(
        'label'=>'Slides',
        'labels'=>array(
            'name'=>'Slides',
            'singular_name'=>'Slide',
        
        
        ),
        'public'=>true,
        'menu_icon'=>'dashicons-images-alt',
        'supports'=>array('title','editor','thumbnail','custom-fields'),
    ));

}
add_action('init','theme_custom_posts');
?>