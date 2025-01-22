<?php
/*
 * This is the child theme for Onzo Progression theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
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

    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/custom.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'onzo_progression_child_script');


// Include Custom Post Types
require_once get_stylesheet_directory() . '/inc/cpt-robot-diaries.php';


// add_filter('template_include', 'robot_diaries_template_redirect', 99);
// function robot_diaries_template_redirect($template) {
//     if (is_post_type_archive('robot_diaries')) {
//         // Load blog template for Robot Diaries archive
//         $new_template = locate_template('archive-robot_diaries.php');
//         if (!empty($new_template)) {
//             return $new_template;
//         }
//     }

//     if (is_singular('robot_diaries')) {
//         // Load single.php for Robot Diaries single posts
//         $new_template = locate_template('single-robot_diaries.php');
//         if (!empty($new_template)) {
//             return $new_template;
//         }
//     }

//     return $template;
// }
