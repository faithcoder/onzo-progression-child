<?php
if (!defined('ABSPATH')) {
    exit;
}
global $product;

// Get product variations if this is a variable product
$variations = $product->is_type('variable') ? $product->get_available_variations() : [];
?>
<div class="product-wrapper">
    <div id="single-product-info-background">
        <div class="container"> 
            <div class="productInformationWrapper row justify-content-between">
                        <div class="ProductPicture col-lg-6 col-md-12">
                            <div id="single-product-info-background">
                                <div class="woocommerce woocommerce-shop-single">
                                    <?php do_action('woocommerce_before_single_product_summary'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="productInformation col-lg-6 col-md-12 ps-5">
                            <?php if ($product->is_type('variable')): ?>
                                <?php 
                                
                                foreach($variations[0]['attributes'] as $attribute):
                                    echo '<h2 class="tobor-product-title">' . esc_html($attribute) . '</h2>';
                                endforeach;
                                
                                $initial_model = get_post_meta($variations[0]['variation_id'], '_model', true);
                                echo '<h4 class="tobor-varation-name">' . esc_html($initial_model) . '</h4>';
                                ?>
                            <?php else: ?>
                                <h2 class="tobor-product-title"><?php echo $product->get_name(); ?></h2>
                            <?php endif; ?>

                            <p class="tobor-variation-description" id="variation-description">
                                <?php echo $product->get_description(); ?>
                            </p>

                            <?php if ($product->is_type('variable')): ?>
                                <div class="variation-buttons-wrapper mb-4">
                                    <?php 
                                    foreach ($variations as $index => $variation) {
                                        $active_class = ($index === 0) ? 'active' : '';
                                        $model = get_post_meta($variation['variation_id'], '_model', true);
                                        $title_html = '';
                                        foreach ($variation['attributes'] as $attribute) {
                                            $title_html .= esc_html($attribute);
                                        }
                                        $title_html .= esc_html($model);
                                        
                                        $variation_data = htmlspecialchars(json_encode([
                                            'description' => $variation['variation_description'],
                                            'price_html' => $variation['price_html'],
                                            'variation_id' => $variation['variation_id'],
                                            'display_price' => $variation['display_price'],
                                            'title_html' => $title_html,
                                            'model' => $model
                                        ]), ENT_QUOTES, 'UTF-8');
                                        ?>
                                        

                                        <button class="variation-selector-btn <?php echo $active_class; ?>" 
                                                data-variation='<?php echo $variation_data; ?>'>
                                            <?php echo $attribute; ?>
                                        </button>
                                    <?php } ?>
                                </div>
                            <?php endif; ?>

                            <form class="<?php echo $product->is_type('variable') ? 'variations_form' : ''; ?> cart" 
                                action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" 
                                method="post" 
                                enctype='multipart/form-data' 
                                data-product_id="<?php echo get_the_ID(); ?>">
                                <div class="cartinformation row justify-content-between align-items-start">
                                    <div class="price col-12 d-flex flex-column justify-content-center align-items-start">
                                        <h3 class="variation_price"><?php echo $product->get_price_html(); ?></h3>
                                    </div>
                                    <div class="affirm-img">
                                        <p id="learn-more" class="affirm-as-low-as" 
                                        data-affirm-color="blue" 
                                        data-learnmore-show="true" 
                                        data-page-type="product" 
                                        data-amount="<?php echo $product->get_price(); ?>00">
                                            Starting at <span class="affirm-ala-price">$167</span>/mo or 0% APR with 
                                            <span class="__affirm-logo __affirm-logo-blue __ligature__affirm_full_logo__ __processed">Affirm</span>. 
                                            <a class="affirm-modal-trigger" href="javascript:void(0)">Check your purchasing power</a>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <div class="add-quantity-section justify-content-start">
                                            
                                            <button type="submit" id="add-to-cart-" class="single_add_to_cart_button button alt<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
                                            <?php do_action('woocommerce_after_add_to_cart_button'); ?>
                                            <input type="hidden" name="add-to-cart" value="<?php echo absint($product->get_id()); ?>" />
                                            <input type="hidden" name="product_id" value="<?php echo absint($product->get_id()); ?>" />
                                            <?php if ($product->is_type('variable')): ?>
                                                <input type="hidden" name="variation_id" class="variation_id" value="<?php echo $variation['variation_id']; ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex flex-column justify-content-start align-items-start">
                                        <div class="toborlife-custom-number-input">
                                            <input name="quantity" type="number" class="toborlife-qty quantity__input" value="1" />
                                            <div class="toborlife-qty-controls">
                                                <a class="toborlife-qty-up" aria-label="Increase quantity"></a>
                                                <a class="toborlife-qty-down" aria-label="Decrease quantity"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
            </div>
        </div>
    </div>
</div>



<div class="section-6 pb-5">
    <div class="container">
        <div class="mtb-50">
            <h4 class="font_30 font800">Accessories</h4>
        </div>
        <div class="accessor text-center owl-carousel owl-theme mb-2">
            <?php $args = array(
                  'post_type' => 'product',
                  'post_status' => 'publish',
                  'posts_per_page' => 6,
                  'orderby' => 'rand',
                  'tax_query' => array( array(
                      'taxonomy'         => 'product_cat',
                      'field'            => 'slug', 
                      'terms'            => 'home-dog', //terms will be changed according to the product slug like 'accessories'
                  )),
                  ) ;
                $loop = new WP_Query($args); 
                 if(!empty($loop)) {  
                 while ($loop->have_posts()) : $loop->the_post();
                  global $product; 
                  $product_id =get_the_ID();
                  $_product = wc_get_product( $product_id );
                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );
                  if(!empty($image)) { 
                      $pro_image = $image[0];
                  } 
                  else{
                      $pro_image = get_template_directory_uri().'/assets/images/no-image-icon.png';
                  } 
                  ?>

            <div class="item">
                <div class="box-shadow">
                    <div class="other-product">
                        <a href="<?php echo get_permalink();?>"><img src="<?php echo $pro_image;?>"></a>
                        <div class="product-info mt-2">
                            <a href="<?php echo get_permalink();?>"><h3><?php the_title(); ?></h3>
                            <p>Unitree Go2 Pro</p>
                            <h4 class="price"><?php echo $_product->get_price_html();?></h4></a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; } ?>
        </div>
    </div>
</div>