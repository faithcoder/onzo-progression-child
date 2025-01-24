<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.6.0
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $product;

$terms = get_the_terms($product->get_id(), 'product_cat');
// echo '<pre>';
// print_r($terms);
$slug = false;
foreach($terms as $term)
{
    if($term->parent == 29)
    {
        $slug = true;
        break;
    }
}

if ( $slug ) { 
    
    // Get product data
    $title = $product->get_name();
    $description = $product->get_description();
    $price = $product->get_price_html();
    $thePrice = $product->get_price();
    $sku = $product->get_sku();
    $product_id = $product->get_id();
    $images = $product->get_gallery_image_ids();
    $main_image = $product->get_image_id();
    
    $images_length = count($images);

    // Add the main image to the front of the images array
    array_unshift($images, $main_image);
    $product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );
    $single_cat = array_shift( $product_cats ); 
    $accessCatArr = [
        '42' => ["name" => "Home Dog", "url" => "https://toborlife.ai/dev/product/tobor-home-dog/"],
        '43' => ["name" => "Go2-W", "url" => "https://toborlife.ai/dev/go2-w/"],
        '44' => ["name" => "B2", "url" => "https://toborlife.ai/dev/b2/"],
        '45' => ["name" => "G1", "url" => "https://toborlife.ai/dev/g1/"],
        '46' => ["name" => "H1", "url" => "https://toborlife.ai/dev/h1/"],
        '47' => ["name" => "B2-W", "url" => "https://toborlife.ai/dev/b2-w/"]
    ];
    //print_r($accessCatArr[$single_cat->term_id]['url']);
 ?>
    <div class="container-fluid b2-product comm-section pt-2" id="b2-product">
          <nav class="woocommerce-breadcrumb d-block mb-5" itemprop="breadcrumb" style="display:block!important">
                <a href="<?php echo home_url();?>" class="hide_mobile">Home</a><span class="hide_mobile"> &gt; </span>
                <a href="<?php echo $accessCatArr[$single_cat->term_id]['url'];?>" class="hide_mobile"><?php echo $single_cat->name;?></a><span class="hide_mobile"> &gt; </span>
                <span class="hide_mobile"><?php echo get_the_title();?></span>
                <span class="hide_desktop" onclick="history.back()" style="cursor: pointer;"><img src="https://toborlife.ai/dev/wp-content/uploads/2024/10/image-93.png" alt="tobor arrow"></span>
                <?php echo '<div class="prev_next_buttons float-end gap-4 d-flex">';
                   // 'product_cat' will make sure to return next/prev from current category
                   $previous = next_post_link('%link', '< Previous ', TRUE, ' ', 'product_cat');
                   $next = previous_post_link('%link', 'Next >', TRUE, ' ', 'product_cat');
                 
                   echo $previous;
                   echo $next;
                    
                echo '</div>'; ?>
          </nav>
          <!-- <div class="row justify-content-center d-lg-none d-md-none d-flex mt-2 mb-3">
              <div class="col-md-2 col-2">
               <div class="">
                   <a href="<?php echo home_url();?>"><img class="" src="<?php echo home_url();?>/wp-content/uploads/2024/10/image_93.png" alt=""></a>
               </div> 
            </div>
            <div class="col-md-10 col-9">
                <?php echo '<div class="prev_next_buttons float-end gap-4 d-flex">';
                   // 'product_cat' will make sure to return next/prev from current category
                   $previous = next_post_link('%link', '< Previous ', TRUE, ' ', 'product_cat');
                   $next = previous_post_link('%link', 'Next >', TRUE, ' ', 'product_cat');
                 
                   echo $previous;
                   echo $next;
                    
                echo '</div>'; ?>
            </div>
          </div> -->
        <div class="row justify-content-center pt-5">
            <div class="col-md-4 col-11">
                <div class="custom-product-slider position-relative">
                    <div class="slider-main-image mb-3 position-relative">
                        <img id="main-image-<?php echo $product_id; ?>" class="img-fluid" src="<?php echo wp_get_attachment_image_url($main_image, 'large'); ?>" alt="<?php echo $title; ?>">
                        <?php if($images_length > 1 ){ ?>
                        <!-- Previous Arrow -->
                        <a class="prev-arrow position-absolute" href="javascript:void(0);" style="left: 0; top: 50%; transform: translateY(-50%);">
                            &#10094;
                        </a>
                        <!-- Next Arrow -->
                        <a class="next-arrow position-absolute" href="javascript:void(0);" style="right: 0; top: 50%; transform: translateY(-50%);">
                            &#10095;
                        </a>
                        <?php } ?>
                    </div>
                    <?php if($images_length > 1 ){ ?>
                    <div class="slider-thumbnails d-flex justify-content-between flex-wrap flex-md-nowrap">
                        <?php foreach ($images as $index => $image_id): ?>
                            <img class="thumbnail img-thumbnail <?php echo $index === 0 ? 'active' : ''; ?>" src="<?php echo wp_get_attachment_image_url($image_id, 'thumbnail'); ?>" alt="<?php echo $title; ?>" data-large="<?php echo wp_get_attachment_image_url($image_id, 'large'); ?>">
                        <?php endforeach; ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-7">
                <h2 class="<?php if($product_id == 5615){ echo 'text-center-sm'; }?>"><?php echo $title; ?></h2>
                <div class="description accoess mb-3"><?php echo $description; ?></div>
                <form class="cart" method="post" enctype='multipart/form-data'>
                    <div class="marge-div">
                    <div class="comm-sec-flex">
    					<div class="left">
    						<h6><?php echo str_replace('.00','',$price); ?></h6>
                    		<span><?php echo $sku; ?></span>
    					</div>
    					<div class="mid">
    						<div class="left-con">
                      			<input type="number" id="quantity_<?php echo $product_id; ?>" class="num" step="1" min="1" max="10" name="quantity" value="1" title="Qty" size="4" />
                    		</div>
    						<div class="right-con">
    						  <div class="up">
    							<img src="https://toborlife.ai/dev/wp-content/uploads/2024/09/arrow-up.png" alt="">
    						  </div>
    						  <div class="down">
    							<img src="https://toborlife.ai/dev/wp-content/uploads/2024/09/arrow-down.png" alt="">
    						  </div>
    						</div>
    					</div>
    					<div class="right">
            			     <input type="hidden" name="add-to-cart" value="<?php echo $product_id;?>" />
                             <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />
                             <input type="hidden" name="variation_id" value="0" />
                            <button type="submit" name="add-to-cart" value="<?php echo $product_id; ?>" class="single_add_to_cart_button cart-btn">Add to cart</button>
    					</div>
                    </div>
                    <?php  if($thePrice < 30000){?>
                     <p id="learn-more" class="affirm-as-low-as mt-4" data-affirm-color="blue" data-learnmore-show="true" data-page-type="product" data-amount="<?php echo $thePrice;?>">Starting at <span class="affirm-ala-price">$167</span>/mo or 0% APR with <span class="__affirm-logo __affirm-logo-blue __ligature__affirm_full_logo__ __processed">Affirm</span>. <a class="affirm-modal-trigger" aria-label="Check your purchasing power - Learn more about Affirm Financing (opens in modal)" href="javascript:void(0)">Check your purchasing power</a></p>
                    <?php }  ?>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const thumbnails = document.querySelectorAll('.slider-thumbnails img');
        const mainImage = document.getElementById('main-image-<?php echo $product_id; ?>');
        const prevArrow = document.querySelector('.prev-arrow');
        const nextArrow = document.querySelector('.next-arrow');
        let currentIndex = 0;

        function updateMainImage(index) {
            mainImage.src = thumbnails[index].dataset.large;
            thumbnails.forEach(thumb => thumb.classList.remove('active'));
            thumbnails[index].classList.add('active');
        }

        thumbnails.forEach((thumbnail, index) => {
            thumbnail.addEventListener('click', function() {
                currentIndex = index;
                updateMainImage(index);
            });
        });

        prevArrow.addEventListener('click', function() {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : thumbnails.length - 1;
            updateMainImage(currentIndex);
        });

        nextArrow.addEventListener('click', function() {
            currentIndex = (currentIndex < thumbnails.length - 1) ? currentIndex + 1 : 0;
            updateMainImage(currentIndex);
        });
    });
</script>
</div>
<?php } else { ?>
<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>"
    <?php wc_product_class( '', $product ); ?>>
    <?php if(false){ ?>
    <!-- <div class="width-container-pro">
        <div class="first-heading hide-mobile">
            <h2 class="joy">
                //**<?php the_field('top_heading'); ?>
            </h2>
        </div>
        <div class="hide-desktop">
            <h6 class="joy-s">A SECURITY & COMPANIONSHIP</h6>
        </div>
    </div> -->

    <div id="single-product-info-background">
        <div
            class="width-container-pro   <?php if ( get_theme_mod( 'progression_studios_shop_post_sidebar') == 'left') : ?> left-sidebar-pro<?php endif; ?>">
            <?php if ( get_theme_mod( 'progression_studios_shop_post_sidebar') == 'right' || get_theme_mod( 'progression_studios_shop_post_sidebar') == 'left') : ?>
            <div id="main-container-pro"><?php endif; ?>

                <?php do_action( 'woocommerce_before_single_product' ); if ( post_password_required() ) { echo get_the_password_form(); return; } ?>
                <div class="woocommerce woocommerce-shop-single">
                    <?php do_action( 'woocommerce_before_single_product_summary' ); ?>

                    <div class="summary entry-summary">
                        <div class="progression-woocommerce-product-short-summary">
                            <?php do_action( 'woocommerce_single_product_summary' ); ?>
                        </div><!-- close .progression-woocommerce-product-short-summary -->
                    </div><!-- .summary -->
                    <meta itemprop="url" content="<?php the_permalink(); ?>" />
                </div><!-- close .woocommerce .woocommerce-shop-single -->
                <?php if ( get_theme_mod( 'progression_studios_shop_post_sidebar') =='right' || get_theme_mod( 'progression_studios_shop_post_sidebar') =='left') : ?>
            </div><!-- close #main-container-pro --><?php do_action( 'woocommerce_sidebar' ); ?><?php endif; ?>
            <div class="clearfix-pro"></div>

        </div>
        <!-- close .width-container-pro -->
    </div>
    <!-- close #single-product-info-background -->
    <?php } ?>


    <!--======================= NEW CODE PRODUCT TAB START =============================-->
    <!---------------------PRODUCT PANEL------------------------------>
    <?php 
    $x =1;
    $y=1;
    $xM = 1;
    $yM=1;
        $variations = $product->get_available_variations();
        // foreach ( $variations as $variation ) { 
        //     echo '<pre>';
        //     print_r($variation);
        //     echo '</pre>';
        // }
        
    ?>
    <!--------------FOR DESKTOP-------------------------->
    
    <div class="product-wrapper">
        <!-- <div class="first-heading">
            <div class="width-container-pro">
                <div class="woocommerce-notices-wrapper"></div>
            </div>
            <h2 class="mb-0 mt-5 mt-md-0 text-center"><b><?php echo get_field('first_title');?></b></h2>
            <h1 class="joy text-center">
                <b>  //*<?php echo get_field('top_heading');?></b>
            </h1>
        </div> -->
    
        <div id="single-product-info-background">
            <div class="container">
                <div class="tabs-x tab-bordered tabs-below tab-align-center" id="">
                    <div class="tab-content" id="myTabContent-kv-6">
                    <?php 
                       foreach ( $variations as $variation ) {  
                        if($product->get_id() == 7281){ 
                        if($x == 3){ $active = 'active'; $show='show';} else {$active =''; $show='';} 
                        } else {
                            if($x == 1){ $active = 'active'; $show='show';} else {$active =''; $show='';} 
                        }
                        $variation['wattage'] = get_post_meta( $variation[ 'variation_id' ], '_wattage', true ); ?>

                        <div class="tab-pane fade <?php echo $show;?> <?php echo $active;?>" id="<?php echo $variation['variation_id'];?>_id" role="tabpanel" aria-labelledby="<?php echo $variation['variation_id'];?>-tab">
                            
             
                            <div class="productInformationWrapper row justify-content-between">
                                <div class="ProductPicture col-lg-6 col-md-12">
                                    <div id="single-product-info-background">
                                        <div class="woocommerce woocommerce-shop-single">
                                            <?php do_action( 'woocommerce_before_single_product_summary' ); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="productInformation col-lg-6 col-md-12 ps-5">
                                   
                               
                                    <?php 
                                    // Display initial title for the first variation
                                    foreach($variations[0]['attributes'] as $attribute):
                                        echo '<h2 class="tobor-product-title">' . esc_html($attribute) . '</h2>';
                                    endforeach;
                                    $initial_model = get_post_meta($variations[0]['variation_id'], '_model', true);
                                    echo '<h4 class="tobor-varation-name">' . esc_html($initial_model) . '</h4>';
                                    ?>
                                

                                
                                
                                <p class="tobor-variation-description" id="variation-description">
                                    <?php echo $variations[0]['variation_description']; ?>
                                </p>

                                <div class="variation-buttons-wrapper mb-4">
                                    <?php 
                                    foreach ($variations as $index => $variation) {
                                        $active_class = ($index === 0) ? 'active' : '';
                                        $model = get_post_meta($variation['variation_id'], '_model', true);
                                        $title_html = '';
                                        foreach($variation['attributes'] as $attribute) {
                                            $title_html .= '<b style="font-size:20px">' . esc_html($attribute) . '</b>';
                                        }
                                        $title_html .= '<b style="font-size:16px">' . esc_html($model) . '</b>';
                                        
                                        $variation_data = htmlspecialchars(json_encode([
                                            'description' => $variation['variation_description'],
                                            'price_html' => $variation['price_html'],
                                            'variation_id' => $variation['variation_id'],
                                            'display_price' => $variation['display_price'],
                                            'title_html' => $title_html
                                        ]), ENT_QUOTES, 'UTF-8');
                                    ?>
                                        <button 
                                            class="variation-selector-btn <?php echo $active_class; ?>" 
                                            data-variation='<?php echo $variation_data; ?>'
                                        >
                                            <?php echo $attribute; ?>
                                        </button>
                                    <?php } ?>
                                </div>

                                    <form class="variations_form cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype="multipart/form-data" data-product_id="<?php the_ID(); ?>">   

                                        <div class="cartinformation row justify-content-between align-items-start">
                                            <div class="price col-12 d-flex flex-column justify-content-center align-items-start">
                                                <h3 class="variation_price"><?php echo $variation['price_html'];?></h3>
                                            </div>

                                            <div class="affirm-img">
                                                <p id="learn-more" class="affirm-as-low-as" data-affirm-color="blue" data-learnmore-show="true" data-page-type="product" data-amount="<?php echo $variation['display_price'];?>00">Starting at <span class="affirm-ala-price">$167</span>/mo or 0% APR with <span class="__affirm-logo __affirm-logo-blue __ligature__affirm_full_logo__ __processed">Affirm</span>. <a class="affirm-modal-trigger" aria-label="Check your purchasing power - Learn more about Affirm Financing (opens in modal)" href="javascript:void(0)">Check your purchasing power</a></p>
                                            </div>

                                            <div class="col-6">
                                                <div class="add-quantity-section justify-content-start">
                                                    <button type="submit" id="add-to-cart-" class="single_add_to_cart_button button alt<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
                                                
                                                    <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
                                                
                                                    <input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
                                                    <input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
                                                    <input type="hidden" name="variation_id" class="variation_id" value="<?php echo $variation['variation_id'];?>" />
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
                    <?php $x++; } ?>
                    </div>
                    
                </div>
                
                
                <!--=============== For Mobile View =====================-->
             
                <!--=============== For Mobile View END ===============-->
            </div>
        </div>
    </div>
    <!---------------------PRODUCT PANEL------------------------------>
    
    <!---------------------WHAT YOU GET PANEL NEW------------------------------>

    <div class="whats-in-the-box-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="whats-in-the-box-text">
                    <h1 class="text-center">What’s in the box?</h1>
                    <div class="whats-in-the-box-list">
                        <ul>
                            <li>Home Robot Dog (Unitree GO2) with extra foot pads, and stand</li>
                            <li>Beautiful luggage case to transport dog with handle and wheels</li>
                            <li>Battery charger, pocket-sized remote control* (plus & ultra only)</li>
                            <li>Android/IOS App for robot control, programming, photo/video, tutorial videos, reference guide, and much more</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="whats-in-the-box-image-left">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <img class="img-fluid" src="https://toborlife.ai/dev/wp-content/uploads/2025/01/IMG_0224-1.png" alt="Extra Foot Pads">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <img class="img-fluid" src="https://toborlife.ai/dev/wp-content/uploads/2025/01/IMG_0222-1.png" alt="Extra Foot Pads">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-4">
                        <div class="single-accessories">
                            <p class="single-accessories-name">Full-sized remote control</p>
                            <img class="img-fluid" src="https://toborlife.ai/dev/wp-content/uploads/2025/01/image-101.png" alt="Extra Foot Pads">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-4">
                        <div class="single-accessories">
                            <p class="single-accessories-name">Extra Foot Pads</p>
                            <img class="img-fluid" src="https://toborlife.ai/dev/wp-content/uploads/2025/01/image-173.png" alt="Extra Foot Pads">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-4">
                        <div class="single-accessories">
                            <p class="single-accessories-name">Battery Charger</p>
                            <img class="img-fluid" src="https://toborlife.ai/dev/wp-content/uploads/2025/01/image-charger.png" alt="Extra Foot Pads">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="whats-in-the-box-image-right">
                            <p class="single-accessories-name">Home Robot Dog with extra foot pads, and stand</p>
                            <img class="img-fluid" src="https://toborlife.ai/dev/wp-content/uploads/2025/01/image-183.png" alt="Extra Foot Pads">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="apps-screenshot-area">
        <div class="row">  
            <div class="col-lg-12">
                <h3 class="apps-screenshot-title text-center">IOS/Android App</h3>
            </div>
                <div class="col-lg-4">
                    <div class="single-apps-screen">
                        <img class="img-fluid" src="https://toborlife.ai/dev/wp-content/uploads/2025/01/123-46.png" alt="Extra Foot Pads">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-apps-screen">
                        <img class="img-fluid" src="https://toborlife.ai/dev/wp-content/uploads/2025/01/123-46.png" alt="Extra Foot Pads">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-apps-screen">
                        <img class="img-fluid" src="https://toborlife.ai/dev/wp-content/uploads/2025/01/123-46.png" alt="Extra Foot Pads">
                    </div>
                </div>
        </div>
        </div>
    </div>
</div>


    <!---------------------WHAT YOU GET PANEL NEW------------------------------>


    <!-- BUSINESS APPLICATION AREA START -->
     <div class="bussines-application-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Business Applications</h1>
                    <p>Having a robot dog brings business opportunities. Get a leg up in the competition, actually 4 legs up! Promote your business, patrol & inspect areas, attract crowds, boost your social media presence, make deliveries, and more.</p>
                </div>
            </div>
            <div class="row">
                <!-- Navigation -->
                <div class="tobor-nav-wrapper">
                    <nav class="tobor-nav">
                        <ul class="tobor-nav-list">
                            <li><a href="#section1" class="tobor-nav-item">Promote Your <br> Business</a></li>
                            <li><a href="#section2" class="tobor-nav-item">Patrol & <br> Inspection </a></li>
                            <li><a href="#section3" class="tobor-nav-item">Attract <br> Crowds</a></li>
                            <li><a href="#section4" class="tobor-nav-item">Increase Visibility on <br> Social Media</a></li>
                            <li><a href="#section5" class="tobor-nav-item">Deliveries</a></li>
                            <li><a href="#section6" class="tobor-nav-item">Business <br> Opportunities</a></li>
                        </ul>
                    </nav>
                    <nav class="tobor-nav-mobile">
                        <ul class="tobor-nav-list-mobile">
                            <li><a href="#section1" class="tobor-nav-item">Promote Your <br> Business</a></li>
                            <li><a href="#section2" class="tobor-nav-item">Patrol & <br> Inspection </a></li>
                            <li><a href="#section3" class="tobor-nav-item">Attract <br> Crowds</a></li>
                        </ul>
                        <ul class="tobor-nav-list-mobile">
                            <li><a href="#section4" class="tobor-nav-item">Increase Visibility on <br> Social Media</a></li>
                            <li><a href="#section5" class="tobor-nav-item">Deliveries</a></li>
                            <li><a href="#section6" class="tobor-nav-item">Business <br> Opportunities</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Sections -->
                <div class="tobor-sections">
                    <div id="section1" class="tobor-section">
                        <div class="tobor-left">
                            <h2>Promote Your Business</h2>
                            <p>Bring customers to your business with the Home Dog. Greet guests, provide information on products or services, or have it hand out promotional material.</p>
                        </div>
                        <div class="tobor-right">
                        <img class="img-fluid" src="https://toborlife.ai/dev/wp-content/uploads/2025/01/promote-business.png" alt="image">
                        </div>
                    </div>
                    <div id="section2" class="tobor-section">
                        <div class="tobor-left">
                            <h2>Patrol & Inspection</h2>
                            <p>Use the Home Dog to patrol & inspect areas of concern. Detects anomalies and notifies you immediately. Its size and mobility allows it to access most areas. </p>
                        </div>
                        <div class="tobor-right">
                        <img class="img-fluid" src="https://toborlife.ai/dev/wp-content/uploads/2025/01/patrol_station.png" alt="image">
                        </div>
                    </div>
                    <div id="section3" class="tobor-section">
                        <div class="tobor-left">
                            <h2>Attract Crowds</h2>
                            <p>Gather people to your business or booth using the Home Dog. Catches people’s attention & effortlessly brings them over to you. </p>
                        </div>
                        <div class="tobor-right">
                        <img class="img-fluid" src="https://toborlife.ai/dev/wp-content/uploads/2025/01/promote-business.png" alt="image">
                        </div>
                    </div>
                    <div id="section4" class="tobor-section">
                        <div class="tobor-left">
                            <h2>Increase Visibility on Social Media</h2>
                            <p>Boost social media engagement with the Home Dog. Get people curious about your brand & attract social media users to your page.</p>
                        </div>
                        <div class="tobor-right">
                        <img class="img-fluid" src="https://toborlife.ai/dev/wp-content/uploads/2025/01/promote-business.png" alt="image">
                        </div>
                    </div>
                    <div id="section5" class="tobor-section">
                        <div class="tobor-left">
                            <h2>Deliveries</h2>
                            <p>Use the Home Dog to deliver items for you. Carries up to 22 pounds on its back to help deliver what you need. </p>
                        </div>
                        <div class="tobor-right">
                        <img class="img-fluid" src="https://toborlife.ai/dev/wp-content/uploads/2025/01/promote-business.png" alt="image">
                        </div>
                    </div>
                    <div id="section6" class="tobor-section">
                        <div class="tobor-left">
                            <h2>Business Opportunities</h2>
                            <p>Make use of the Home Dog for business opportunities at events or large gatherings. Perform in front of kids with the Home Dog or rent them out for other businesses to make extra income. </p>
                        </div>
                        <div class="tobor-right">
                        <img class="img-fluid" src="https://toborlife.ai/dev/wp-content/uploads/2025/01/promote-business.png" alt="image">
                        </div>
                    </div>
                
                </div>       
            </div>
        </div>
    </div>

    <!-- BUSINESS APPLICATION AREA END -->

 
<div class="interaction-section section-2" id="features">
    <div class="container">
        <div class="row text-left mtb-50">
            <div class="col-md-12">
                <div class="">
                    <h2 class="font_30 font700 font-opens"><?php the_field('enhanced_interaction_top_heading'); ?></h2>
                    <h4 class="font_15 font-opens"><?php the_field('enhanced_interaction_top_description'); ?></h4>
                    <!--                     <h4 class="font_15 font-opens">Enjoy a dynamic experience by using our app</h4> -->
                </div>
            </div>
            
        </div>
        <div class="row mtb-80">
            <div class="col-md-6 cust-order-md-2">
                <div class="feature-text-paired">
                    <h3 class="font-opens"><?php the_field('enhanced_section-1_left_heading'); ?></h3>
                    <p><?php the_field('enhanced_section-1_left_description'); ?></p>
                </div>
            </div>
            <div class="col-md-6 cust-order-md-1">
                <div class="float-end width100 width-100">
                    <img class="width-100"
                        src="<?php if(!get_field("enhanced_section_1_right_image")) { echo 'https://toborlife.ai/wp-content/uploads/2024/05/one.png'; } else { the_field('enhanced_section_1_right_image'); } ?>"
                        alt="">
                </div>
            </div>
        </div>
        <div class="row mtb-80">
            <div class="col-md-6 cust-order-md-1">
                <div class="width100 width-100">
                    <img class="width-100"
                        src="<?php if(!get_field("enhanced_section_2_left_image")) { echo 'https://toborlife.ai/wp-content/uploads/2024/05/two.png'; } else { the_field('enhanced_section_2_left_image'); } ?>"
                        alt="">
                </div>
            </div>
            <div class="col-md-6 cust-order-md-2">
                <div class="feature-text-paired ml-15-p">
                    <h3 class="font-opens"><?php the_field('enhanced_section-2_right_heading'); ?></h3>
                    <p><?php the_field('enhanced_section-2_right_description'); ?></p>
                </div>
            </div>
        </div>
        <div class="row mtb-80">
            <div class="col-md-6 cust-order-md-2">
                <div class="feature-text-paired">
                    <h3 class="font-opens"><?php the_field('enhanced_section-3_left_heading'); ?></h3>
                    <p><?php the_field('enhanced_section-3_left_description'); ?></p>
                </div>
            </div>
            <div class="col-md-6 cust-order-md-1">
                <div class="float-end width100 width-100">
                    <img class="width-100"
                        src="<?php if(!get_field("enhanced_section_3_right_image")) { echo 'https://toborlife.ai/wp-content/uploads/2024/05/three.png'; } else { the_field('enhanced_section_3_right_image'); } ?>"
                        alt="">
                </div>
            </div>
        </div>
        <div class="row mtb-80 mb-5">
            <div class="col-md-6 cust-order-md-1 p-relative">
                <div class="video-section width-87">
                    <video class="border-r-25" playsinline="" loop="loop" autoplay="autoplay" muted="muted"
                        src="<?php the_field('enhanced_section_4_left_video_link'); ?>"></video>
                </div>
            </div>
            <div class="col-md-6 cust-order-md-2">
                <div class="feature-text-paired ml-15-p">
                    <h3 class="font-opens"><?php the_field('enhanced_section-4_right_heading'); ?></h3>
                    <p><?php the_field('enhanced_section-4_right_description'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="width-container-pro section-3 table-chart-1  product-specification">
    <div class="only-desktop">
        <div class="container">
            <?php 
$table = get_field( 'specs_table' );

if ( ! empty ( $table ) ) {
	echo '<table class="table">';
	echo '<tbody>';
	$strong = 0;
	foreach ( $table['body'] as $tr ) {
		echo '<tr>';
		$count = 0; // Initialize a counter for each row
		foreach ( $tr as $td ) {
			if ($count == 0) {
				echo '<th>';
			} else {
				$strong++;
				if ($strong <= 4) {
					echo '<td><strong>';
				} else {
			echo '<td>';
				}
			}
			echo $td['c'];
			if ($count == 0) {
				echo '</th>';
			} else {
				if ($strong <= 4) {
					echo '</strong></td>';
				} else {
			echo '</td>';
				}
			}
			$count++; // Increment the counter
		}
		echo '</tr>';
	}
	echo '<tr><td colspan="4"><br>*Voice function includes offline voice interaction, commands, intercom and music play.</td></tr></tbody>';
	echo '</table>';
}
?>

            <!--             <table class="table table-striped ">
              <thead>
              </thead>
              <tbody>
                <tr>
                  <th>Average Running Speed (approx.)</th>
                  <td><strong>3.5 m/s</strong></td>
                </tr>
                <tr>
                  <th>Accepts Voice Commands*</th>
                  <td><strong>Yes</strong></td>
                </tr>
                <tr>
                  <th>ChatGPT and AI Functionality (Enhanced Computing)</th>
                  <td><strong>8-Core High-Performance CPU</strong></td>
                </tr>
                <tr>
                  <th>Intelligent Side-Follow System (Robot matches your speed and stays with you)</th>
                  <td><strong>Yes</strong></td>
                </tr>
                <tr>
                  <th>Max Payload (approx.)</th>
                  <td>22 lb</td>
                </tr>
                <tr>
                  <th>Voltage</th>
                  <td>28V-33.6V</td>
                </tr>
                <tr>
                  <th>Warranty</th>
                  <td>1 year</td>
                </tr>
                <tr>
                  <th>Battery Power / Battery Life</th>
                  <td>15,000 mAh / upto 4 hrs</td>
                </tr>
                <tr>
                  <th>Foot-End Force Sensor</th>
                  <td>No - Edu model only</td>
                </tr>
                <tr>
                  <th>Secondary Development Support with High Computing Power Module</th>
                  <td>No - Edu model only</td>
                </tr>
                <tr>
                  <th>Charger</th>
                  <td>33.6V 3.5A</td>
                </tr>    
                <tr><td colspan="4"><br>*Voice function includes offline voice interaction, commands, intercom and music play.</td></tr>
              </tbody>
            </table> -->
        </div>
    </div>

    <!-- For SMALL SCREEN -->
    <!-- For SMALL SCREEN -->
    <div class="d-lg-none d-sm-table">
        <!--<div class="btn-group w-100 mb-4" role="group">-->
        <!--    <button type="button" class="btn btn_first btn-secondary active rounded-0 option-button" data-target="air-first">Air</button>-->
        <!--    <button type="button" class="btn btn_first btn-secondary rounded-0 option-button" data-target="pro-first">Pro</button>-->
        <!--    <button type="button" class="btn btn_first btn-secondary rounded-0 option-button" data-target="edu-first">Edu</button>-->
        <!--</div>-->

        <!-- 	HIDDEN TABLE	 -->
        <div class="d-none table-responsive-first" id="air-first-table1">
            <table class="table table-hover mb-0">
                <tbody>
                    <tr>
                        <th scope="row" class="border-bottom-0">Average Running Speed (approx.)</th>
                        <td class="border-bottom-0">2.5 m/s</td>
                    </tr>
                    <tr>
                        <th scope="row" class="border-bottom-0">Accepts Voice Commands*</th>
                        <td class="border-bottom-0">No</td>
                    </tr>
                    <tr>
                        <th scope="row" class="border-bottom-0">ChatGPT and AI Functionality (Enhanced Computing)</th>
                        <td class="border-bottom-0">N/A</td>
                    </tr>
                    <tr>
                        <th scope="row" class="border-bottom-0">Intelligent Side-Follow System (Robot matches your speed
                            and stays with you)</th>
                        <td class="border-bottom-0">No</td>
                    </tr>
                    <tr>
                        <th scope="row" class="border-bottom-0">Max Payload (approx.)</th>
                        <td class="border-bottom-0">22 lb</td>
                    </tr>
                    <tr>
                        <th scope="row" class="border-bottom-0">Warranty</th>
                        <td class="border-bottom-0">1 year</td>
                    </tr>
                    <tr>
                        <th scope="row" class="border-bottom-0">Battery Power / Battery Life</th>
                        <td class="border-bottom-0">15,000 mAh / upto 4 hrs</td>
                    </tr>
                    <tr>
                        <th scope="row" class="border-bottom-0">Foot-End Force Sensor</th>
                        <td class="border-bottom-0">No - Edu model only</td>
                    </tr>
                    <tr>
                        <th scope="row" class="border-bottom-0">Secondary Development Support with High Computing Power
                            Module</th>
                        <td class="border-bottom-0">No - Edu model only</td>
                    </tr>
                    <tr>
                        <th scope="row" class="border-bottom-0">Charger</th>
                        <td class="border-bottom-0">33.6V 3.5A</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive-first" id="pro-first-table1">
            <?php 
$table = get_field( 'specs_table' );

if ( ! empty ( $table ) ) {
	echo '<table class="table table-striped table-hover mb-0">';
	echo '<tbody>';
	foreach ( $table['body'] as $tr ) {
		echo '<tr>';
		$count = 0; // Initialize a counter for each row
		foreach ( $tr as $td ) {
			if ($count == 0) {
				echo '<th scope="row" class="border-bottom-0">';
			} else {
				echo '<td class="border-bottom-0"><strong>';
			}
			echo $td['c'];
			if ($count == 0) {
				echo '</th>';
			} else {
				echo '</strong></td>';
			}
			$count++; // Increment the counter
		}
		echo '</tr>';
	}
	echo '</tbody>';
	echo '</table>';
}
?>
            <!--           <table class="table table-striped table-hover mb-0">
            <tbody>
              <tr>
              <th scope="row" class="border-bottom-0">Average Running Speed (approx.)</th>
              <td class="border-bottom-0"><strong>3.5 m/s</strong></td>
            </tr>
            <tr>
              <th scope="row" class="border-bottom-0">Accepts Voice Commands*</th>
              <td class="border-bottom-0"><strong>Yes</strong></td>
            </tr>
            <tr>
              <th scope="row" class="border-bottom-0">ChatGPT and AI Functionality (Enhanced Computing)</th>
              <td class="border-bottom-0"><strong>8-Core High-Performance CPU</strong></td>
            </tr>
            <tr>
              <th scope="row" class="border-bottom-0">Intelligent Side-Follow System (Robot matches your speed and stays with you)</th>
              <td class="border-bottom-0"><strong>Yes</strong></td>
            </tr>
            <tr>
              <th scope="row" class="border-bottom-0">Max Payload (approx.)</th>
              <td class="border-bottom-0">22 lb</td>
            </tr>
            <tr>
              <th scope="row" class="border-bottom-0">Warranty</th>
              <td class="border-bottom-0">1 year</td>
            </tr>
            <tr>
              <th scope="row" class="border-bottom-0">Battery Power / Battery Life</th>
              <td class="border-bottom-0">15,000 mAh / upto 4 hrs</td>
            </tr>
            <tr>
              <th scope="row" class="border-bottom-0">Foot-End Force Sensor</th>
              <td class="border-bottom-0">No - Edu model only</td>
            </tr>
            <tr>
              <th scope="row" class="border-bottom-0">Secondary Development Support with High Computing Power Module</th>
              <td class="border-bottom-0">No - Edu model only</td>
            </tr>
            <tr>
              <th scope="row" class="border-bottom-0">Charger</th>
              <td class="border-bottom-0">33.6V 3.5A</td>
            </tr>
          </tbody>
          </table> -->
        </div>

        <!-- 	HIDDEN TABLE	 -->
        <div class="d-none table-responsive-first" id="edu-first-table1">
            <table class="table table-hover mb-0">
                <tbody>
                    <tr>
                        <th scope="row" class="border-bottom-0">Average Running Speed (approx.)</th>
                        <td class="border-bottom-0"><strong>3.7 m/s</strong></td>
                    </tr>
                    <tr>
                        <th scope="row" class="border-bottom-0">Accepts Voice Commands*</th>
                        <td class="border-bottom-0"><strong>Yes</strong></td>
                    </tr>
                    <tr>
                        <th scope="row" class="border-bottom-0">ChatGPT and AI Functionality (Enhanced Computing)</th>
                        <td class="border-bottom-0"><strong>8-Core High-Performance CPU</strong></td>
                    </tr>
                    <tr>
                        <th scope="row" class="border-bottom-0">Intelligent Side-Follow System (Robot matches your speed
                            and stays with you)</th>
                        <td class="border-bottom-0"><strong>Yes</strong></td>
                    </tr>
                    <tr>
                        <th scope="row" class="border-bottom-0">Max Payload (approx.)</th>
                        <td class="border-bottom-0">22 lb</td>
                    </tr>
                    <tr>
                        <th scope="row" class="border-bottom-0">Warranty</th>
                        <td class="border-bottom-0">1 year</td>
                    </tr>
                    <tr>
                        <th scope="row" class="border-bottom-0">Battery Power / Battery Life</th>
                        <td class="border-bottom-0"><strong>15,000 mAh / upto 4 hrs</strong></td>
                    </tr>
                    <tr>
                        <th scope="row" class="border-bottom-0">Foot-End Force Sensor</th>
                        <td class="border-bottom-0"><strong>Yes</strong></td>
                    </tr>
                    <tr>
                        <th scope="row" class="border-bottom-0">Secondary Development Support with High Computing Power
                            Module</th>
                        <td class="border-bottom-0"><strong>Nvidia Jetson Orin (optional)
                                40-100 AI TOPS Computing Power</strong></td>
                    </tr>
                    <tr>
                        <th scope="row" class="border-bottom-0">Charger</th>
                        <td class="border-bottom-0"><strong>(Fast Charge) 33.6V 9A</strong></td>
                    </tr>
                </tbody>
            </table>


        </div>
        <br>
        <p class="mt-2">*Voice function includes offline voice interaction, commands, intercom and music play.</p>
    </div>

</div>
<div class="experience section-4">
    <div class="container">
        <div class="row justify-content-center text-left mtb-50">
            <div class="col-md-12">
                <div class="">
                    <h2 class="font_30 font700 font-opens">
                        <?php the_field('experience_section_top_heading'); ?></h2>
                    <h4 class="font_15 mb-5 font-opens">
                        <?php the_field('experience_section_top_description'); ?></h4>
                    <img class="hidemobile border-r-25 aisecimage"
                        src="<?php if(!get_field("experience_section_top_image")) { echo 'https://toborlife.ai/wp-content/uploads/2024/06/persondoghome.png'; } else { the_field('experience_section_top_image'); } ?>"
                        alt="">
                </div>
            </div>
        </div>
        <div class="row mtb-80">
            <div class="col-md-6 cust-order-md-2">
                <div class="feature-text-paired">
                    <h3 class="font-opens"><?php the_field('experience_section-1_left_heading'); ?></h3>
                    <p class=""><?php the_field('experience_section-1_left_description'); ?></p>
                </div>
            </div>
            <div class="col-md-6 cust-order-md-1">
                <div class="">
                    <video playsinline="" loop="loop" autoplay="autoplay" muted="muted"
                        src="<?php the_field('experience_section-1_right_video_link'); ?>"></video>
                </div>
            </div>
        </div>
        <div class="row mtb-80">
            <div class="col-md-6 cust-order-md-1">
                <div class="">
                    <video playsinline="" loop="loop" autoplay="autoplay" muted="muted"
                        src="<?php the_field('experience_section-2_left_video_link'); ?>"></video>
                </div>
            </div>
            <div class="col-md-6 cust-order-md-2">
                <div class="feature-text-paired feature-text-paired-right">
                    <h3 class="font-opens"><?php the_field('experience_section-2_right_heading'); ?></h3>
                    <p class=""><?php the_field('experience_section-2_right_description'); ?></p>
                </div>
            </div>
        </div>
        <div class="row mtb-80">
            <div class="col-md-6 cust-order-md-2">
                <div class="feature-text-paired">
                    <h3 class="font-opens"><?php the_field('experience_section-3_left_heading'); ?></h3>
                    <p class=""><?php the_field('experience_section-3_left_description'); ?></p>
                </div>
            </div>
            <div class="col-md-6 cust-order-md-1">
                <div class="">
                    <video playsinline="" loop="loop" autoplay="autoplay" muted="muted"
                        src="<?php the_field('experience_section-3_right_video_link'); ?>"></video>
                </div>
            </div>
        </div>
        <div class="row mtb-80">
            <div class="col-md-6 cust-order-md-1">
                <div class="width100">
                    <img class="border-r-25"
                        src="<?php if(!get_field("4_left_image")) { echo 'https://toborlife.ai/wp-content/uploads/2024/05/second.jpg'; } else { the_field('experience_section-4_left_image'); } ?>"
                        alt="">
                </div>
            </div>
            <div class="col-md-6 cust-order-md-2">
                <div class="feature-text-paired feature-text-paired-right">
                    <h3 class="font-opens"><?php the_field('experience_section-4_right_heading'); ?></h3>
                    <p class=""><?php the_field('experience_section-4_right_description'); ?></p>
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
                      'terms'            => 'home-dog', 
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


<?php /*<div class="width-container-pro section-6 only_mobile">
    <div class="container">
        <div class="text-center mtb-50">
            <h4 class="font_30 font500">ACCESSORIES</h4>
        </div>
        <div class="accessor owl-carousel owl-theme mb-2">
            <?php $args = array(
                  'post_type' => 'product',
                  'post_status' => 'publish',
                  'posts_per_page' => 4,
                  'orderby' => 'rand',
                  'tax_query' => array( array(
                      'taxonomy'         => 'product_cat',
                      'field'            => 'slug', 
                      'terms'            => 'accessories', 
                  )),
                  ) ;
                $loop = new WP_Query($args); 
                $item_count=0;
                 if(!empty($loop)) {  
                 while ($loop->have_posts()) : $loop->the_post();
                  $item_count=$item_count+1;
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
<?php if($item_count==1){ ?>
<div class="item">
    <?php } ?>
    <a href="<?php echo get_permalink();?>">
        <div class="other-product">
            <img src="<?php echo $pro_image;?>">
            <div class="product-info mt-2">
                <h3><?php the_title(); ?></h3>
                <h4 class="price"><?php echo $_product->get_price_html();?></h4>
                <span class="link">Shop Now</span>
            </div>
        </div>
    </a>
    <?php if($item_count==2){ ?>
</div>
<?php $item_count=0; } ?>
<?php endwhile; } ?>
<?php if($item_count==1){ ?>
</div>
<?php } ?>
</div>
</div> */ ?>
</div>



<script>
// document.addEventListener('DOMContentLoaded', function () {
//     const buttons = document.querySelectorAll('.btn');
//     buttons.forEach(function (button) {
//         button.addEventListener('click', function () {
//             const target = this.getAttribute('data-target');

//             document.querySelectorAll('.table-responsive').forEach(function (table) {
//                 table.classList.add('d-none');
//             });
//             document.getElementById(target + '-table').classList.remove('d-none');
//             buttons.forEach(function (btn) {
//                 btn.classList.remove('active');
//             });
//             this.classList.add('active');
//         });
//     });
// });

document.addEventListener('DOMContentLoaded', function() {
    const buttonss = document.querySelectorAll('.btn_first');
    buttonss.forEach(function(button) {
        button.addEventListener('click', function() {
            const target = this.getAttribute('data-target');

            document.querySelectorAll('.table-responsive-first').forEach(function(table) {
                table.classList.add('d-none');
            });
            document.getElementById(target + '-table1').classList.remove('d-none');
            buttonss.forEach(function(btn) {
                btn.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
});



jQuery('.show_hide_btn').click(function() {
    if (jQuery('.table-product-specification').hasClass('tb-table-collapsed')) {
        jQuery('.table-product-specification').removeClass('tb-table-collapsed');
        jQuery('.show_hide_btn th').html('Collapse Spec Chart <span>&#9650;</span>');
        jQuery('.first_hide').removeClass('d-none');
        jQuery('.first_show').addClass('d-none');
    } else {
        jQuery('.table-product-specification').addClass('tb-table-collapsed');
        jQuery('.show_hide_btn th').html('See Full Spec Chart <span>&#9658;</span>');
        jQuery('.first_hide').addClass('d-none');
        jQuery('.first_show').removeClass('d-none');
    }
});
</script>


<!-- ===========================COUNTER PRODUCT NEW CODE============================ -->
<!-- JQUERY FOR COUNTER -->
<script>
jQuery(document).ready(function() {
    const minus = jQuery('.quantity__minus');
    const plus = jQuery('.quantity__plus');
    const input = jQuery('.quantity__input');
    minus.click(function(e) {
        e.preventDefault();
        var value = input.val();
        if (value > 1) {
            value--;
        }
        input.val(value);
    });

    plus.click(function(e) {
        e.preventDefault();
        var value = input.val();
        value++;
        input.val(value);
    })
});
</script>

<?php /*
<!-- JS for Slider -->

<script>
	const images = ['https://toborlife.ai/dev/wp-content/uploads/2024/04/2image.png', 'https://toborlife.ai/dev/wp-content/uploads/2024/04/3image.png', 'https://toborlife.ai/dev/wp-content/uploads/2024/04/4iamge.png', 'https://toborlife.ai/dev/wp-content/uploads/2024/04/controller.png', 'https://toborlife.ai/dev/wp-content/uploads/2024/04/pad.png', 'https://toborlife.ai/dev/wp-content/uploads/2024/04/1image.png'];
	let currentIndex = 0;

	function changeImage(imageSrc) {
		document.getElementById('mainImage').src = imageSrc;
		currentIndex = images.indexOf(imageSrc);
	}

	document.getElementById('prevBtn').addEventListener('click', () => {
		currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;
		document.getElementById('mainImage').src = images[currentIndex];
	});

	document.getElementById('nextBtn').addEventListener('click', () => {
		currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
		document.getElementById('mainImage').src = images[currentIndex];
	});
</script>
*/?>

<?php } ?>