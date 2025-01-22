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


global $product
?>
<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>"
    <?php wc_product_class( '', $product ); ?>>
    <div class="width-container-pro">
        <div class="first-heading hide-mobile">
            <h2 class="joy">
                <?php the_field('top_heading'); ?>
            </h2>
        </div>
        <div class="hide-desktop">
            <h6 class="joy-s">A SECURITY & COMPANIONSHIP</h6>
        </div>
    </div>






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


    <!--======================= NEW CODE PRODUCT TAB START =============================-->
    <div class="first-heading hide-mobile">
        <h2 class="text-center" style="font-size:38px"><b>HOME DOG</b></h2>
        <h1 class="joy text-center">
            <b>A SECURITY & COMPANIONSHIP ROBOT!</b>
        </h1>
    </div>



    <div id="single-product-info-background">
        <div class="width-container-pro">

            <div class="tabs-x tab-bordered tabs-below tab-align-center">

                <div class="tab-content" id="myTabContent-kv-6">
                    <div class="tab-pane fade show active" id="home-kv-6" role="tabpanel" aria-labelledby="home-tab">

                        <div class="productInformationWrapper row justify-content-between">
                            <div class="ProductPicture col-lg-6 col-md-12">
                                <div class="col-12">
                                    <div class="product-section">
                                        <div class="product-images">
                                            <div class="slider-controls">
                                                <button id="prevBtn">❮</button>
                                                <img id="mainImage"
                                                    src="https://toborlife.ai/dev/wp-content/uploads/2024/04/1image.png"
                                                    alt="Product Image">
                                                <button id="nextBtn">❯</button>
                                            </div>
                                            <div class="thumbnails row">
                                                <img class="col-2" src="https://toborlife.ai/dev/wp-content/uploads/2024/04/3image-600x580.png" alt="Thumbnail 1"
                                                    onclick="changeImage('dev/wp-content/uploads/2024/04/3image-600x580.png')">
                                                <img class="col-2" src="https://toborlife.ai/dev/wp-content/uploads/2024/04/3image.png" alt="Thumbnail 2"
                                                    onclick="changeImage('image2.jpg')">
                                                <img class="col-2" src="https://toborlife.ai/dev/wp-content/uploads/2024/04/4iamge.png" alt="Thumbnail 3"
                                                    onclick="changeImage('image3.jpg')">
                                                <img class="col-2" src="https://toborlife.ai/dev/wp-content/uploads/2024/04/controller.png" alt="Thumbnail 4"
                                                    onclick="changeImage('image4.jpg')">
                                                <img class="col-2" src="https://toborlife.ai/dev/wp-content/uploads/2024/04/pad.png" alt="Thumbnail 4"
                                                    onclick="changeImage('image5.jpg')">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <button class="single_feature_button" data-bs-toggle="modal"
                                        data-bs-target="#feature-modal">
                                        Feature Details
                                    </button>
                                </div>
                            </div>
                            <div class="productInformation col-lg-5 col-md-12 ms-4 me-2">
                                <p>
                                    Better your life with robots! Capable of improving your home and work life with its
                                    ability to capture photos and videos, respond to commands through voice, remotes, or
                                    included phone app. With Chat GPT (requires 4G or Wi-Fi) it can even tell you what
                                    it's looking at, and perform your requests.
                                    Delight everyone with performing tricks. One year warranty, 2.5 to 4 hours battery
                                    life. FREE fast shipping.
                                </p>

                                <ul class="content-feature">
                                    <li>Provides security of a roaming camera which can go anywhere, and provides a live
                                        feed.</li>
                                    <li>Condition Indication • OTA Upgrades • Android/IOS App • Wi-Fi 6/Bluetooth •
                                        Obstacle avoidance </li>
                                    <li>4G Image Transmission • Intelligent Side Auto-Follow • Carry your things •
                                        System Voice Interaction • Auto Retractable Strap</li>
                                </ul>

                                <div class="cartinformation row col-12 justify-content-between align-items-center">
                                    <div class="price col-4">
                                        <h2>$3,995</h2>
                                        <p>HDog Plus</p>
                                    </div>

                                    <button class="quantity col-4">
                                        <input name="quantity" type="text" class="quantity__input" value="1">
                                        <div class="button">
                                            <a href="#" class="quantity__plus"><span><i class="fa fa-chevron-up"
                                                        aria-hidden="true"></i>
                                                </span></a>
                                            <a href="#" class="quantity__minus"><span><i class="fa fa-chevron-down"
                                                        aria-hidden="true"></i>
                                                </span></a>
                                        </div>
                                    </button>

                                    <button class="product_btn col-4" type="submit">
                                        Add to cart
                                    </button>
                                </div>

                                <div class="affirm-img">
                                    <img src="https://toborlife.ai/dev/wp-content/uploads/2024/07/image-36.jpg" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                    </div>
                </div>

                <ul class="nav nav-tabs" id="myTab-kv-6" role="tablist">

                    <li class="nav-item mx-2" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-kv-6"
                            type="button" role="tab" aria-controls="home" aria-selected="true"><b
                                style="font-size:20px">TOBoR Home Dog Plus</b><br>
                            <b style="font-size:16px">(Unitree Go2 Pro)</b>
                        </button>
                    </li>
                    <li class="nav-item mx-2" id="tab-btn" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">
                            <b style="font-size:20px; line-height:15px">Home Dog Lite </b><br>
                            <b style="font-size:16px; line-height:15px">(Unitree Go2 Air)</b>
                        </button>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">
                            <b style="font-size:20px">Home Dog Ultra </b><br>
                            <b style="font-size:16px">(Unitree Go2 Edu)</b>
                        </button>
                    </li>
                </ul>

            </div>


        </div>
    </div>
    <!--======================= NEW CODE PRODUCT TAB END =============================-->




    <div id="single-product-tabs-background">
        <div class="width-container-pro">
            <div class="woocommerce woocommerce-shop-single">
                <div id="woocomerce-tabs-container-progression-studios">
                    <?php //do_action( 'woocommerce_after_single_product_summary' ); ?>
                    <!-- <div class="col-6"> <button class="single_feature_button" data-bs-toggle="modal" data-bs-target="#feature-modal">Feature Details</button></div> -->
                </div>
            </div><!-- close .woocommerce -->
            <div class="clearfix-pro"></div>
        </div><!-- close .width-container-pro -->
    </div><!-- close #single-product-tabs-background -->
</div><!-- #product-<?php the_ID(); ?> -->
<div class="width-container-pro">
    <?php //do_action( 'woocommerce_after_single_product' ); ?>
</div><!-- close .width-container-pro -->
<!--CSS FOR TABLE  -->
<style>
th.border-secondary,
td.border-secondary {
    padding: 18px;
}

.btn.active {
    border-bottom: 1px solid white;
}
</style>
<!--CSS FOR TABLE  -->
<div class="interaction-section section-2">
    <div class="container">
        <div class="row text-left mtb-50">
            <div class="col-md-6">
                <div class="">
                    <h2 class="font_30 font800 font-opens"><?php the_field('enhanced_interaction_top_heading'); ?></h2>
                    <!--                     <h4 class="font_15 font-opens">Enjoy a dynamic experience by using our app</h4> -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <!--                     <h2 class="font_30 font800 font-opens">Enhanced <br> Interaction</h2> -->
                    <h4 class="font_15 font-opens"><?php the_field('enhanced_interaction_top_description'); ?></h4>
                </div>
            </div>
        </div>
        <div class="row mtb-80">
            <div class="col-md-5 cust-order-md-2">
                <div class="feature-text-paired">
                    <h3 class="font-opens"><?php the_field('enhanced_section-1_left_heading'); ?></h3>
                    <p><?php the_field('enhanced_section-1_left_description'); ?></p>
                </div>
            </div>
            <div class="col-md-7 cust-order-md-1">
                <div class="float-end width100 width-100">
                    <img class="width-100"
                        src="<?php if(!get_field("enhanced_section_1_right_image")) { echo 'https://toborlife.ai/wp-content/uploads/2024/05/one.png'; } else { the_field('enhanced_section_1_right_image'); } ?>"
                        alt="">
                </div>
            </div>
        </div>
        <div class="row mtb-80">
            <div class="col-md-7 cust-order-md-1">
                <div class="width100 width-100">
                    <img class="width-100"
                        src="<?php if(!get_field("enhanced_section_2_left_image")) { echo 'https://toborlife.ai/wp-content/uploads/2024/05/two.png'; } else { the_field('enhanced_section_2_left_image'); } ?>"
                        alt="">
                </div>
            </div>
            <div class="col-md-5 cust-order-md-2">
                <div class="feature-text-paired ml-15-p">
                    <h3 class="font-opens"><?php the_field('enhanced_section-2_right_heading'); ?></h3>
                    <p><?php the_field('enhanced_section-2_right_description'); ?></p>
                </div>
            </div>
        </div>
        <div class="row mtb-80">
            <div class="col-md-5 cust-order-md-2">
                <div class="feature-text-paired">
                    <h3 class="font-opens"><?php the_field('enhanced_section-3_left_heading'); ?></h3>
                    <p><?php the_field('enhanced_section-3_left_description'); ?></p>
                </div>
            </div>
            <div class="col-md-7 cust-order-md-1">
                <div class="float-end width100 width-100">
                    <img class="width-100"
                        src="<?php if(!get_field("enhanced_section_3_right_image")) { echo 'https://toborlife.ai/wp-content/uploads/2024/05/three.png'; } else { the_field('enhanced_section_3_right_image'); } ?>"
                        alt="">
                </div>
            </div>
        </div>
        <div class="row mtb-80 mb-5">
            <div class="col-md-7 cust-order-md-1 p-relative">
                <div class="video-section width-87">
                    <video class="border-r-25" playsinline="" loop="loop" autoplay="autoplay" muted="muted"
                        src="<?php the_field('enhanced_section_4_left_video_link'); ?>"></video>
                </div>
            </div>
            <div class="col-md-5 cust-order-md-2">
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
	echo '<table class="table table-striped ">';
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
            <table class="table table-striped table-hover mb-0">
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
            <table class="table table-striped table-hover mb-0">
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
                    <h2 class="font_30 font800 font-opens color-white">
                        <?php the_field('experience_section_top_heading'); ?></h2>
                    <h4 class="font_15 mb-5 font-opens color-white">
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
                    <h3 class="font-opens color-white"><?php the_field('experience_section-1_left_heading'); ?></h3>
                    <p class="color-white"><?php the_field('experience_section-1_left_description'); ?></p>
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
                    <h3 class="font-opens color-white"><?php the_field('experience_section-2_right_heading'); ?></h3>
                    <p class="color-white"><?php the_field('experience_section-2_right_description'); ?></p>
                </div>
            </div>
        </div>
        <div class="row mtb-80">
            <div class="col-md-6 cust-order-md-2">
                <div class="feature-text-paired">
                    <h3 class="font-opens color-white"><?php the_field('experience_section-3_left_heading'); ?></h3>
                    <p class="color-white"><?php the_field('experience_section-3_left_description'); ?></p>
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
                    <h3 class="font-opens color-white"><?php the_field('experience_section-4_right_heading'); ?></h3>
                    <p class="color-white"><?php the_field('experience_section-4_right_description'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class="image-section bg-black hidemobile">-->
<!--    <div class="container">-->
<!--        <img src="<?php echo home_url();?>/wp-content/uploads/2024/04/home-dog-features-diagram.png">-->
<!--    </div>-->
<!--</div>-->
<!--<div class="image-section bg-black hidedesktop">-->
<!--    <div class="container">-->
<!--        <img src="<?php echo home_url();?>/wp-content/uploads/2024/04/homedog-p1.png">-->
<!--        <img src="<?php echo home_url();?>/wp-content/uploads/2024/04/homedog-p2.webp">-->
<!--    </div>-->
<!--</div>-->
<?php 
if (get_field('want_to_enable_specs_table_2_') === 'disable') {
	$table2status = 'd-none';
} else {
	$table2status = '';
} ?>
<div class="width-container-pro product-specification <?php echo $table2status; ?>">
    <div class="container">
        <!--<div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Product Specifications
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">-->
        <div class="bd-example">
            <?php 
$table = get_field('specs_table_2');

if (!empty($table)) {
    echo '<table class="table table-product-specification table-striped table-dark tb-table-collapsed">';
    echo '<thead><tr><th colspan="2">Product Specifications</th></tr></thead>';
    echo '<tbody>';
    $count = 1;
    foreach ($table['body'] as $tr) {
        $row_status = ($count <= 4) ? 'visible-row' : 'hidden-row';
        echo '<tr class="tbrow' . $count . ' ' . $row_status . '">';
        $count2 = 0; // Reset $count2 for each row
        foreach ($tr as $td) {
            if ($count2 == 0) {
                echo '<th>';
            } else {
                echo '<td>';
            }
            echo $td['c'];
            if ($count2 == 0) {
                echo '</th>';
            } else {
                echo '</td>';
            }
            $count2++;
        }
        echo '</tr>';
        $count++;
    }
    echo '<tr class="hidden-row"><td colspan="4"><p class="font_8">*The maximum torque in the table refers to the maximum torque of the largest joint motor; the actual maximum torque varies for the 12-joint motors.</p></td></tr><tr class="show_hide_btn"><th colspan="2">See Full Spec Chart <span>&#9658;</span></th></tr>';
    echo '</tbody>';
    echo '</table>';
}
?>
            <!--                   <table class="table table-product-specification table-striped table-dark tb-table-collapsed">
                      <thead>
                        <tr>
                            <th colspan="2">Product Specifications</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="tbrow1 visible-row">
                          <th>Dimensions Standing</th>
                          <td>70 x 31 x 40 cm</td>
                        </tr>
                        <tr class="tbrow2 visible-row">
                          <th>Dimensions Crouching</th>
                          <td>76 x 31 x 20 cm</td>
                        </tr>
                        <tr class="tbrow3 visible-row">
                          <th>Weight (with battery)</th>
                          <td>~ 15 kg</td>
                        </tr>
                        <tr class="tbrow4 visible-row">
                          <th>Material</th>
                          <td>Aluminum alloy & high-strength engineering plastic</td>
                        </tr>
                        <tr class="tbrow5 hidden-row">
                          <th>Max Climb Drop Height / Angle</th>
                          <td>~ 16 cm / 40°</td>
                        </tr>
                        <tr class="tbrow6 hidden-row">
                          <th>Voltage</th>
                          <td>28V-33.6V</td>
                        </tr>
                        <tr class="tbrow7 hidden-row">
                          <th>Peaking Capacity</th>
                          <td>~ 3,000W</td>
                        </tr>
                        <tr class="tbrow8 hidden-row">
                          <th>Max Torque*</th>
                          <td>~ 45N.m</td>
                        </tr>
                        <tr class="tbrow9 hidden-row">
                          <th>Aluminum Knee Joint Motor</th>
                          <td>12set</td>
                        </tr>
                        <tr class="tbrow10 hidden-row">
                          <th>Range of Motion</th>
                          <td>body: -48° to 48° <br>
                            thigh: -200° to 90° <br>
                            shank: -156° to -48°</td>
                        </tr>
                        <tr class="tbrow11 hidden-row">
                          <th>Intra-Joint Circuit (Knee)</th>
                          <td><p style="width: 20px; height:20px" class="mb-2 border border-light rounded-circle bg-white"></p></td>
                        </tr>
                        <tr class="tbrow12 hidden-row">
                          <th>Joint Heat Pipe Cooler</th>
                          <td><p style="width: 20px; height:20px" class="mb-2 border border-light rounded-circle bg-white"></p></td>
                        </tr>
                        <tr class="tbrow13 hidden-row">
                          <th>Super-Wide-Angle 3D LIDAR</th>
                          <td><p style="width: 20px; height:20px" class="mb-2 border border-light rounded-circle bg-white"></p></td>
                        </tr>
                        <tr class="tbrow14 hidden-row">
                          <th>Wireless Vector Positioning Tracking Module</th>
                          <td><p style="width: 20px; height:20px" class="mb-2 border border-light rounded-circle bg-white"></p></td>
                        </tr>
                        <tr class="tbrow15 hidden-row">
                          <th>HD Wide-Angle Camera</th>
                          <td><p style="width: 20px; height:20px" class="mb-2 border border-light rounded-circle bg-white"></p></td>
                        </tr>
                        <tr class="tbrow16 hidden-row">
                          <th>Basic Action</th>
                          <td><p style="width: 20px; height:20px" class="mb-2 border border-light rounded-circle bg-white"></p></td>
                        </tr>
                        <tr class="tbrow17 hidden-row">
                          <th>Upgraded Intelligent OTA</th>
                          <td><p style="width: 20px; height:20px" class="mb-2 border border-light rounded-circle bg-white"></p></td>
                        </tr>
                        <tr class="tbrow18 hidden-row">
                          <th>RTT 2.0 Image Transmission</th>
                          <td><p style="width: 20px; height:20px" class="mb-2 border border-light rounded-circle bg-white"></p></td>
                        </tr>
                        <tr class="tbrow19 hidden-row">
                          <th>Graphical Program</th>
                          <td><p style="width: 20px; height:20px" class="mb-2 border border-light rounded-circle bg-white"></p></td>
                        </tr>
                        <tr class="tbrow20 hidden-row">
                          <th>Front Lamp</th>
                          <td><p style="width: 20px; height:20px" class="mb-2 border border-light rounded-circle bg-white"></p></td>
                        </tr>
                        <tr class="tbrow21 hidden-row">
                          <th>WiFI6 with Dual-Band</th>
                          <td><p style="width: 20px; height:20px" class="mb-2 border border-light rounded-circle bg-white"></p></td>
                        </tr>
                        <tr class="tbrow22 hidden-row">
                          <th>Bluetooth 5.2/4.2/2.1</th>
                          <td><p style="width: 20px; height:20px" class="mb-2 border border-light rounded-circle bg-white"></p></td>
                        </tr>
                        <tr class="tbrow23 hidden-row">
                          <th>4G Module - use it anywhere with a SIM card</th>
                          <td><p style="width: 20px; height:20px" class="mb-2 border border-light rounded-circle bg-white"></p></td>
                        </tr>
                        <tr class="tbrow24 hidden-row">
                          <th>Intelligent Detection and Avoidance</th>
                          <td><p style="width: 20px; height:20px" class="mb-2 border border-light rounded-circle bg-white"></p></td>
                        </tr>
                        <tr class="hidden-row"><td colspan="4"><p class="font_8">*The maximum torque in the table refers to the maximum torque of the largest joint motor; the actual maximum torque varies for the 12-joint motors.</p></td></tr>
                      
                        <tr class="show_hide_btn">
                          <th colspan="2">See Full Spec Chart <span>&#9658;</span></th>
                        </tr>
                      </tbody>
                    </table> -->
        </div>
        <!--</div>
            </div>
          </div>
        </div>-->
    </div>
</div>

<?php /*<div class="unitree-section section-5">
    <img class="only-mobile d-none" src="http://toborlife.ai/wp-content/uploads/2024/04/mobile-bg.jpg" alt="">
    <div class="container">
	    <div class="unitree-inner-section">	
	    <div class="text-center unitree-title-section d-none only-mobile">
	        <h2>Unitree Go2</h2>
	        <h4>returning with glory</h4>
	        <h5>leads the bionic robotics world.</h5>
	    </div>
		
		 <!-- For SMALL SCREEN -->
        <div class="d-lg-none d-sm-table">
            <!--<div class="btn-group w-100 mb-4" role="group">-->
            <!--    <button type="button" class="btn btn-secondary active rounded-0 option-button" data-target="air">Air</button>-->
            <!--    <button type="button" class="btn btn-secondary rounded-0 option-button" data-target="pro">Pro</button>-->
            <!--    <button type="button" class="btn btn-secondary rounded-0 option-button" data-target="edu">Edu</button>-->
            <!--</div>-->

            <div class="table-responsive d-none" id="air-table">
                <table class="table table-striped table-dark table-hover mb-0">
                  <tbody>
                      <tr>
                      <th scope="row" class="border-bottom-0 border-secondary">Dimensions Standing</th>
                      <td class="border-bottom-0 border-secondary">70 x 31 x 40 cm</td>
                    </tr>
                    <tr>
                      <th scope="row" class="border-bottom-0 border-secondary">Dimensions Crouching</th>
                      <td class="border-bottom-0 border-secondary">76 x 31 x 20 cm</td>
                    </tr>
                    <tr>
                      <th scope="row" class="border-bottom-0 border-secondary">Weight (with battery)</th>
                      <td class="border-bottom-0 border-secondary">~ 15 kg</td>
                    </tr>
                    <tr>
                      <th scope="row" class="border-bottom-0 border-secondary">Material</th>
                      <td class="border-bottom-0 border-secondary">Aluminum alloy & high-strength engineering plastic</td>
                    </tr>
                    <tr>
                      <th scope="row" class="border-bottom-0 border-secondary">Max Climb Drop Height / Angle</th>
                      <td class="border-bottom-0 border-secondary">~ 15 cm / 30°</td>
                    </tr>
                    <tr>
                      <th scope="row" class="border-bottom-0 border-secondary">Voltage</th>
                      <td class="border-bottom-0 border-secondary">28V ~ 33.6V</td>
                    </tr>
					  <tr>
						  <th scope="row" class="border-bottom-0 border-secondary">Peaking Capacity</th>
						  <td class="border-bottom-0 border-secondary">~ 3,000W</td>
					  </tr>
					  <tr>
						  <th scope="row" class="border-bottom-0 border-secondary">Max Torque*</th>
						  <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle" style="width: 20px; height:20px"></p></td>
					  </tr>
					  <tr>
						  <th scope="row" class="border-bottom-0 border-secondary">Aluminum Knee Joint Motor</th>
						  <td class="border-bottom-0 border-secondary">12Set</td>
					  </tr>
					   <tr>
						  <th scope="row" class="border-bottom-0 border-secondary">Range of Motion</th>
						   <td class="border-bottom-0 border-secondary">
							   <p class="mb-1">Body : -48°~48°</p>
							   <p class="mb-1">Thight : -200°~90°</p>
							   <p class="mb-1">Shank : -156°~-48°</p>
						   </td>
					  </tr>
					  <tr>
						  <th scope="row" class="border-bottom-0 border-secondary">Intra-Joint Circuit (Knee)</th>
						  <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					  </tr>
					  <tr>
						  <th scope="row" class="border-bottom-0 border-secondary">Joint Heat Pipe Cooler</th>
						  <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					  </tr>
					  <tr>
						  <th scope="row" class="border-bottom-0 border-secondary">Super-Wide-Angle 3D LIDAR</th>
						  <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					  </tr>
					  <tr>
						  <th scope="row" class="border-bottom-0 border-secondary">Wireless Vector Positioning Tracking Module</th>
						  <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					  </tr>
					  <tr>
						  <th scope="row" class="border-bottom-0 border-secondary">HD Wide-Angle Camera</th>
						  <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					  </tr>
					  <tr>
						  <th scope="row" class="border-bottom-0 border-secondary">Basic Action</th>
						  <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					  </tr>
					  <tr>
						  <th scope="row" class="border-bottom-0 border-secondary">Upgraded Intelligent OTA</th>
						 <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					  </tr>
					  <tr>
						  <th scope="row" class="border-bottom-0 border-secondary">RTT 2.0 Image Transmission</th>
						 <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					  </tr>
					  <tr>
						  <th scope="row" class="border-bottom-0 border-secondary">Graphical Program</th>
						  <td class="border-bottom-0 border-secondary"> <p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					  </tr>
					  <tr>
						  <th scope="row" class="border-bottom-0 border-secondary">Front Lamp</th>
						  <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					  </tr>
					  <tr>
						  <th scope="row" class="border-bottom-0 border-secondary">WiFI6 with Dual-Band</th>
						  <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					  </tr>
					  <tr>
						  <th scope="row" class="border-bottom-0 border-secondary">Bluetooth 5.2/4.2/2.1</th>
						  <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					  </tr>
					  <tr>
                          <th scope="row" class="border-bottom-0 border-secondary">4G Module - use it anywhere with a SIM card</th>
                          <td class="border-bottom-0 border-secondary"><p style="width: 20px; height:20px" class="mb-2 border border-light rounded-circle bg-white"></p></td>
                        </tr>
					  <tr>
						  <th scope="row" class="border-bottom-0 border-secondary">Intelligent Detection and Avoidance	</th>
						  <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					  </tr>
					  <tr>
						  <th scope="row" class="border-bottom-0 border-secondary">Charging Pile Compatibility</th>
						  <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle" style="width: 20px; height:20px"></p></td>
					  </tr>
					  <tr>
						  <th scope="row" class="border-bottom-0 border-secondary">Secondary Development</th>
						  <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle" style="width: 20px; height:20px"></p></td>
					  </tr>
                  </tbody>
                </table>
            </div>
            <div class="table-responsive " id="pro-table">
                <table class="table table-striped table-dark table-hover mb-0">
                   <tbody>
                       <tr>
                      <th scope="row" class="border-bottom-0 border-secondary">Dimensions Standing</th>
                      <td class="border-bottom-0 border-secondary">70 x 31 x 40 cm</td>
                    </tr>
                    <tr>
                      <th scope="row" class="border-bottom-0 border-secondary">Dimensions Crouching</th>
                      <td class="border-bottom-0 border-secondary">76 x 31 x 20 cm</td>
                    </tr>
                    <tr>
                      <th scope="row" class="border-bottom-0 border-secondary">Weight (with battery)</th>
                      <td class="border-bottom-0 border-secondary">~ 15 kg</td>
                    </tr>
                    <tr>
                      <th scope="row" class="border-bottom-0 border-secondary">Material</th>
                      <td class="border-bottom-0 border-secondary">Aluminum alloy & high-strength engineering plastic</td>
                    </tr>
                    <tr>
                      <th scope="row" class="border-bottom-0 border-secondary">Max Climb Drop Height / Angle</th>
                      <td class="border-bottom-0 border-secondary">~ 15 cm / 30°</td>
                    </tr>
					   <tr>
						   <th scope="row" class="border-bottom-0 border-secondary">Voltage</th>
						   <td class="border-bottom-0 border-secondary">28V ~ 33.6V</td>
					   </tr>
					   <tr>
						   <th scope="row" class="border-bottom-0 border-secondary">Peaking Capacity</th>
						   <td class="border-bottom-0 border-secondary">~ 3,000W</td>
					   </tr>
					   <tr>
						   <th scope="row" class="border-bottom-0 border-secondary">Max Torque*</th>
						   <td class="border-bottom-0 border-secondary">~ 45N.m</td>
					   </tr>
					   <tr>
						   <th scope="row" class="border-bottom-0 border-secondary">Aluminum Knee Joint Motor</th>
						   <td class="border-bottom-0 border-secondary">12 Set</td>
					   </tr>
					   <tr>
						   <th scope="row" class="border-bottom-0 border-secondary">Range of Motion</th>
						   <td class="border-bottom-0 border-secondary">
							   <p class="mb-1">Body : -48°~48°</p>
							   <p class="mb-1">Thight : -200°~90°</p>
							   <p class="mb-1">Shank : -156°~-48°</p>
						   </td>
					   </tr>
					   <tr>
						   <th scope="row" class="border-bottom-0 border-secondary">Intra-Joint Circuit (Knee)</th>
						   <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					   </tr>
					   <tr>
						   <th scope="row" class="border-bottom-0 border-secondary">Joint Heat Pipe Cooler</th>
						   <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					   </tr>
					   <tr>
						   <th scope="row" class="border-bottom-0 border-secondary">Super-Wide-Angle 3D LIDAR</th>
						   <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					   </tr>
					   <tr>
						   <th scope="row" class="border-bottom-0 border-secondary">Wireless Vector Positioning Tracking Module</th>
						   <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					   </tr>
					   <tr>
						   <th scope="row" class="border-bottom-0 border-secondary">HD Wide-Angle Camera</th>
						   <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					   </tr>
					   <tr>
						   <th scope="row" class="border-bottom-0 border-secondary">Basic Action</th>
						   <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					   </tr>
					   <tr>
						   <th scope="row" class="border-bottom-0 border-secondary">Upgraded Intelligent OTA</th>
						   <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					   </tr>
					   <tr>
						   <th scope="row" class="border-bottom-0 border-secondary">RTT 2.0 Image Transmission</th>
						   <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					   </tr>
					   <tr>
						   <th scope="row" class="border-bottom-0 border-secondary">Graphical Program</th>
						   <td class="border-bottom-0 border-secondary"> <p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					   </tr>
					   <tr>
						   <th scope="row" class="border-bottom-0 border-secondary">Front Lamp</th>
						   <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					   </tr>
					   <tr>
						   <th scope="row" class="border-bottom-0 border-secondary">WiFI6 with Dual-Band</th>
						   <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					   </tr>
					   <tr>
						   <th scope="row" class="border-bottom-0 border-secondary">Bluetooth 5.2/4.2/2.1</th>
						   <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					   </tr>
					   <tr>
                          <th scope="row" class="border-bottom-0 border-secondary">4G Module - use it anywhere with a SIM card</th>
                          <td class="border-bottom-0 border-secondary"><p style="width: 20px; height:20px" class="mb-2 border border-light rounded-circle bg-white"></p></td>
                        </tr>
					   <tr>
						   <th scope="row" class="border-bottom-0 border-secondary">Intelligent Detection and Avoidance	</th>
						   <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
					   </tr>
					   <!--<tr>-->
						  <!-- <th scope="row" class="border-bottom-0 border-secondary">Charging Pile Compatibility</th>-->
						  <!-- <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle" style="width: 20px; height:20px"></p></td>-->
					   <!--</tr>-->
					   <!--<tr>-->
						  <!-- <th scope="row" class="border-bottom-0 border-secondary">Secondary Development</th>-->
						  <!-- <td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle" style="width: 20px; height:20px"></p></td>-->
					   <!--</tr>-->
					   <tr><td colspan="4"><p class="font_8">*The maximum torque in the table refers to the maximum torque of the largest joint motor; the actual maximum torque varies for the 12-joint motors.</p></td></tr>
                  </tbody>
                </table>
            </div>
            <div class="table-responsive d-none" id="edu-table">
                <table class="table table-striped table-dark table-hover mb-0">
					<tbody>
					    <tr>
                          <th scope="row" class="border-bottom-0 border-secondary">Dimensions Standing</th>
                          <td class="border-bottom-0 border-secondary">70 x 31 x 40 cm</td>
                        </tr>
                        <tr>
                          <th scope="row" class="border-bottom-0 border-secondary">Dimensions Crouching</th>
                          <td class="border-bottom-0 border-secondary">76 x 31 x 20 cm</td>
                        </tr>
                        <tr>
                          <th scope="row" class="border-bottom-0 border-secondary">Weight (with battery)</th>
                          <td class="border-bottom-0 border-secondary">~ 15 kg</td>
                        </tr>
                        <tr>
                          <th scope="row" class="border-bottom-0 border-secondary">Material</th>
                          <td class="border-bottom-0 border-secondary">Aluminum alloy & high-strength engineering plastic</td>
                        </tr>
                        <tr>
                          <th scope="row" class="border-bottom-0 border-secondary">Max Climb Drop Height / Angle</th>
                          <td class="border-bottom-0 border-secondary">~ 16 cm / 30°</td>
                        </tr>
						<tr>
							<th scope="row" class="border-bottom-0 border-secondary">Voltage</th>
							<td class="border-bottom-0 border-secondary">28V ~ 33.6V</td>
						</tr>
						<tr>
							<th scope="row" class="border-bottom-0 border-secondary">Peaking Capacity</th>
							<td class="border-bottom-0 border-secondary">~ 3,000W</td>
						</tr>
						<tr>
							<th scope="row" class="border-bottom-0 border-secondary">Max Torque*</th>
							<td class="border-bottom-0 border-secondary">~ 45N.m</td>
						</tr>
						<tr>
							<th scope="row" class="border-bottom-0 border-secondary">Aluminum Knee Joint Motor</th>
							<td class="border-bottom-0 border-secondary">12 Set</td>
						</tr>
						<tr>
							<th scope="row" class="border-bottom-0 border-secondary">Range of Motion</th>
							<td class="border-bottom-0 border-secondary">
								<p class="mb-1">Body : -48°~48°</p>
								<p class="mb-1">Thight: -200°~90°</p>
								<p class="mb-1">Shank: -156°~-48°</p>
							</td>
						</tr>
						<tr>
							<th scope="row" class="border-bottom-0 border-secondary">Intra-Joint Circuit (Knee)</th>
							<td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
						</tr>
						<tr>
							<th scope="row" class="border-bottom-0 border-secondary">Joint Heat Pipe Cooler</th>
							<td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
						</tr>
						<tr>
							<th scope="row" class="border-bottom-0 border-secondary">Super-Wide-Angle 3D LIDAR</th>
							<td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
						</tr>
						<tr>
							<th scope="row" class="border-bottom-0 border-secondary">Wireless Vector Positioning Tracking Module</th>
							<td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
						</tr>
						<tr>
							<th scope="row" class="border-bottom-0 border-secondary">HD Wide-Angle Camera</th>
							<td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
						</tr>
						<tr>
							<th scope="row" class="border-bottom-0 border-secondary">Basic Action</th>
							<td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
						</tr>
						<tr>
							<th scope="row" class="border-bottom-0 border-secondary">Upgraded Intelligent OTA</th>
							<td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
						</tr>
						<tr>
							<th scope="row" class="border-bottom-0 border-secondary">RTT 2.0 Image Transmission</th>
							<td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
						</tr>
						<tr>
							<th scope="row" class="border-bottom-0 border-secondary">Graphical Program</th>
							<td class="border-bottom-0 border-secondary"> <p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
						</tr>
						<tr>
							<th scope="row" class="border-bottom-0 border-secondary">Front Lamp</th>
							<td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
						</tr>
						<tr>
							<th scope="row" class="border-bottom-0 border-secondary">WiFI6 with Dual-Band</th>
							<td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
						</tr>
						<tr>
							<th scope="row" class="border-bottom-0 border-secondary">Bluetooth 5.2/4.2/2.1</th>
							<td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
						</tr>
						<tr>
                          <th scope="row" class="border-bottom-0 border-secondary">4G Module - use it anywhere with a SIM card</th>
                          <td class="border-bottom-0 border-secondary"><p style="width: 20px; height:20px" class="mb-2 border border-light rounded-circle bg-white"></p></td>
                        </tr>
						<tr>
							<th scope="row" class="border-bottom-0 border-secondary">Intelligent Detection and Avoidance	</th>
							<td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
						</tr>
						<tr>
							<th scope="row" class="border-bottom-0 border-secondary">Charging Pile Compatibility</th>
							<td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
						</tr>
						<tr>
							<th scope="row" class="border-bottom-0 border-secondary">Secondary Development</th>
							<td class="border-bottom-0 border-secondary"><p class="mb-2 border border-light rounded-circle bg-white" style="width: 20px; height:20px"></p></td>
						</tr>
					</tbody>
                </table>
            </div>
        </div>
		
		<section class="p-4 brochure-terms d-none">
			<p class="mb-1">*Note: </p>
			<ol class="mt-0">
				<li>The maximum torque in the table refers to the maximum torque of the largest joint motor; the actual maximum torque varies for the 12 joint 	motors</li>
				<li>In open environment without interference and blocking.</li>
				<li>3.Transformation and quality varies considerably in different network environments.</li>
				<li>Voice functions include offline voice interaction, commands, intercom and music play.</li>
				<li>For more information, please read the secondary development manual.</li>
				<li>For more detailed warranty terms, please read the product warranty brochure.</li>
				<li>The above parameters may vary in different scenarios and configurations, please subject to actual situation.</li>
				<li>If any change in the appearance of the product, please refer to the actual product.</li>
			</ol>
			<p>
				*Tip: Limited to the current technique and computing power resources, part of function shall be realized human operation or secondary development.
			</p>
		</section>
<!--         <img src="<?php echo home_url();?>/wp-content/uploads/2024/04/home-dog-spec-list-01.png"> -->
</div>
</div>
</div> */ ?>

<div class="section-6 mtb-80">
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
                      'terms'            => 'accessories', 
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
                <a class="box-shadow" href="<?php //echo get_permalink();?>javascript:void(0);">
                    <div class="other-product">
                        <img src="<?php echo $pro_image;?>">
                        <div class="product-info mt-2">
                            <h3><?php the_title(); ?></h3>
                            <h4 class="price"><?php echo $_product->get_price_html();?></h4>
                            <!-- <span class="link">Shop now</span> -->
                            <a href="<?php echo $product->add_to_cart_url(); ?>" data-quantity="1"
                                class="link add_to_cart_button ajax_add_to_cart" %s>Add to Cart</a>
                        </div>
                    </div>
                </a>
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

<!-- JS for Slider -->
<script>
	const images = ['dev/wp-content/uploads/2024/04/3image-600x580.png', 'image2.jpg', 'image3.jpg', 'image4.jpg', 'image5.jpg'];
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