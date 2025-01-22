<?php

add_action('wp_enqueue_scripts', 'onzo_progression_child_enqueue_styles');
function onzo_progression_child_enqueue_styles() {
    // Enqueue Parent Theme's Style
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    
    // Enqueue Child Theme's CSS
    wp_enqueue_style('child-style-one', 
        get_stylesheet_directory_uri() . '/css/style-one.css', 
        array('parent-style') 
    );
    wp_enqueue_style('child-style', 
        get_stylesheet_directory_uri() . '/style.css', 
        array('parent-style') 
    );

    // Additional CSS Files
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap', [], null);
    wp_enqueue_style('blog-diaries', get_stylesheet_directory_uri() . '/css/blog-diaries.css', array('parent-style') );
}

// Enqueue custom JS
function onzo_progression_child_script() {
    wp_enqueue_script('child-script', get_stylesheet_directory_uri() . '/js/coupon-form.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'onzo_progression_child_script');


// Include Custom Post Types
require_once get_stylesheet_directory() . '/inc/cpt-robot-diaries.php';

