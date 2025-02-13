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
    wp_enqueue_style('go2-product-page', get_stylesheet_directory_uri() . '/css/product-page.css', array('parent-style') );
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

function display_recommended_accessories($atts) {
   
    $atts = shortcode_atts(array(
        'category' => 'h1', 
    ), $atts);

    // Start output buffering
    ob_start();
    ?>
    <div class="section-6 pb-5">
        <div class="container">
            <div class="mtb-50 d-flex align-items-center flex-wrap">
                <h3 class="font_30 font800">Recommended Accessories</h3>
                <button id="view-all-products">View All</button>
            </div>
            <div class="row" id="product-list">
            <?php 
            $args = array(
                'post_type' => 'product',
                'post_status' => 'publish',
                'posts_per_page' => -1, 
                'orderby' => 'rand',
                'tax_query' => array( array(
                    'taxonomy' => 'product_cat',
                    'field' => 'slug', 
                    'terms' => $atts['category'], 
                )),
            );
            $loop = new WP_Query($args); 
            if(!empty($loop)) {  
                $count = 0; 
                while ($loop->have_posts()) : $loop->the_post();
                    global $product; 
                    $product_id = get_the_ID();
                    $_product = wc_get_product($product_id);
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'single-post-thumbnail');
                    $pro_image = !empty($image) ? $image[0] : get_template_directory_uri() . '/assets/images/no-image-icon.png';
                    ?>
                    <div class="col-lg-4 product-item" style="<?php echo ($count >= 6) ? 'display: none;' : ''; ?>">
                        <div class="single-accessories">
                            <div class="accessories-image col-lg-6 col-md-6 col-sm-6 col-6">
                                <a href="<?php echo get_permalink(); ?>"><img src="<?php echo esc_url($pro_image); ?>"></a>
                            </div>
                            <div class="accessories-text col-lg-6 col-md-6 col-sm-6 col-6">
                                <a href="<?php echo get_permalink(); ?>"><h4><?php the_title(); ?></h4>
                                <h4 class="price"><?php echo $_product->get_price_html(); ?></h4></a>
                                <br>
                                <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" data-quantity="1" class="link add_to_cart_button ajax_add_to_cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <?php 
                    $count++; 
                endwhile; 
            } ?>
            </div>
        </div>
    </div>
    <?php

    return ob_get_clean();
}

add_shortcode('recommended_accessories', 'display_recommended_accessories');
