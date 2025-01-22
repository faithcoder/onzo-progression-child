<?php
/*
 * This is the child theme for Onzo Progression theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
add_action( 'wp_enqueue_scripts', 'onzo_progression_child_enqueue_styles' );
function onzo_progression_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style-one',
        get_stylesheet_directory_uri() . '/css/style-one.css',
        array('parent-style')
    );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

// Enqueue custom JS
function onzo_progression_child_script() {
    wp_enqueue_script('child-script', get_stylesheet_directory_uri() . '/js/coupon-form.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'onzo_progression_child_script');
