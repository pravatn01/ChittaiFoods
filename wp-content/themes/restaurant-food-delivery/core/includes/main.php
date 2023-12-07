<?php

/**
* Get started notice
*/

add_action( 'wp_ajax_restaurant_food_delivery_dismissed_notice_handler', 'restaurant_food_delivery_ajax_notice_handler' );

/**
 * AJAX handler to store the state of dismissible notices.
 */
function restaurant_food_delivery_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        // Store it in the options table
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function restaurant_food_delivery_deprecated_hook_admin_notice() {
        // Check if it's been dismissed...
        if ( ! get_option('dismissed-get_started', FALSE ) ) {
            // Added the class "notice-get-started-class" so jQuery pick it up and pass via AJAX,
            // and added "data-notice" attribute in order to track multiple / different notices
            // multiple dismissible notice states ?>

            <?php
            $current_screen = get_current_screen();
				if ($current_screen->id !== 'appearance_page_restaurant-food-delivery-guide-page') {
             $restaurant_food_delivery_comments_theme = wp_get_theme(); ?>
            <div class="restaurant-food-delivery-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
			<div class="restaurant-food-delivery-notice">
				<div class="restaurant-food-delivery-notice-img">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/admin-logo.png'); ?>" alt="<?php esc_attr_e('logo', 'restaurant-food-delivery'); ?>">
				</div>
				<div class="restaurant-food-delivery-notice-content">
					<div class="restaurant-food-delivery-notice-heading"><?php esc_html_e('Thanks for installing ','restaurant-food-delivery'); ?><?php echo esc_html( $restaurant_food_delivery_comments_theme ); ?></div>
					<p><?php printf(__('In order to fully benefit from everything our theme has to offer, please make sure you visit our <a href="%s">For Premium Options</a>.', 'restaurant-food-delivery'), esc_url(admin_url('themes.php?page=restaurant-food-delivery-guide-page'))); ?></p>
					<?php if (is_child_theme()) { ?>
						<?php $child_theme = wp_get_theme(); ?>
						<?php printf(esc_html__('You\'re using %1$s theme, It\'s a child theme of %2$s.', 'restaurant-food-delivery'), '<strong>' . $child_theme->Name . '</strong>', '<strong>' . esc_html__('restaurant_food_delivery', 'restaurant-food-delivery') . '</strong>'); 
						?>
						<?php
						$copy_link_args = array(
							'page' => 'restaurant-food-delivery',
							'action' => 'show_copy_settings',
						);
						$copy_link = add_query_arg($copy_link_args, admin_url('themes.php'));
						?>
						<?php printf('%s <a href="%s" class="go-to-setting">%s</a>', esc_html__('Now you can copy setting data from parent theme to this child theme', 'restaurant-food-delivery'), esc_url($copy_link), esc_html__('Copy Settings', 'restaurant-food-delivery')); ?>
					<?php } ?>
				</div>
			</div>
		</div>
        <?php }
	}
}

add_action( 'admin_notices', 'restaurant_food_delivery_deprecated_hook_admin_notice' );

add_action( 'admin_menu', 'restaurant_food_delivery_getting_started' );
function restaurant_food_delivery_getting_started() {    	    	
	add_theme_page( esc_html__('Get Started', 'restaurant-food-delivery'), esc_html__('Get Started', 'restaurant-food-delivery'), 'edit_theme_options', 'restaurant-food-delivery-guide-page', 'restaurant_food_delivery_test_guide');
	wp_enqueue_script( 'restaurant-food-delivery-admin-script', get_template_directory_uri() . '/js/restaurant-food-delivery-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'restaurant-food-delivery-admin-script', 'restaurant_food_delivery_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );   
}

function restaurant_food_delivery_admin_enqueue_scripts() {
	wp_enqueue_style( 'restaurant-food-delivery-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'restaurant_food_delivery_admin_enqueue_scripts' );

if ( ! defined( 'RESTAURANT_FOOD_DELIVERY_DOCS_FREE' ) ) {
define('RESTAURANT_FOOD_DELIVERY_DOCS_FREE',__('https://www.misbahwp.com/docs/restaurant-food-delivery-free-docs/','restaurant-food-delivery'));
}
if ( ! defined( 'RESTAURANT_FOOD_DELIVERY_DOCS_PRO' ) ) {
define('RESTAURANT_FOOD_DELIVERY_DOCS_PRO',__('https://www.misbahwp.com/docs/restaurant-food-delivery-pro-docs','restaurant-food-delivery'));
}
if ( ! defined( 'RESTAURANT_FOOD_DELIVERY_BUY_NOW' ) ) {
define('RESTAURANT_FOOD_DELIVERY_BUY_NOW',__('https://www.misbahwp.com/themes/food-delivery-wordpress-theme/','restaurant-food-delivery'));
}
if ( ! defined( 'RESTAURANT_FOOD_DELIVERY_SUPPORT_FREE' ) ) {
define('RESTAURANT_FOOD_DELIVERY_SUPPORT_FREE',__('https://wordpress.org/support/theme/restaurant-food-delivery','restaurant-food-delivery'));
}
if ( ! defined( 'RESTAURANT_FOOD_DELIVERY_REVIEW_FREE' ) ) {
define('RESTAURANT_FOOD_DELIVERY_REVIEW_FREE',__('https://wordpress.org/support/theme/restaurant-food-delivery/reviews/#new-post','restaurant-food-delivery'));
}
if ( ! defined( 'RESTAURANT_FOOD_DELIVERY_DEMO_PRO' ) ) {
define('RESTAURANT_FOOD_DELIVERY_DEMO_PRO',__('https://www.misbahwp.com/demo/food-delivery-restaurant/','restaurant-food-delivery'));
}
if( ! defined( 'RESTAURANT_FOOD_DELIVERY_THEME_BUNDLE' ) ) {
define('RESTAURANT_FOOD_DELIVERY_THEME_BUNDLE',__('https://www.misbahwp.com/themes/wordpress-bundle/','restaurant-food-delivery'));
}

function restaurant_food_delivery_test_guide() { ?>
	<?php $restaurant_food_delivery_theme = wp_get_theme(); ?>
	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( RESTAURANT_FOOD_DELIVERY_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'restaurant-food-delivery' ) ?></a>			
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'restaurant-food-delivery' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( RESTAURANT_FOOD_DELIVERY_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'restaurant-food-delivery' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( RESTAURANT_FOOD_DELIVERY_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'restaurant-food-delivery' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','restaurant-food-delivery'); ?><?php echo esc_html( $restaurant_food_delivery_theme ); ?>  <span><?php esc_html_e('Version: ', 'restaurant-food-delivery'); ?><?php echo esc_html($restaurant_food_delivery_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-inside">
					<?php
						$restaurant_food_delivery_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $restaurant_food_delivery_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>
		<div id="righty">
			<div class="postbox donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'restaurant-food-delivery' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','restaurant-food-delivery'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( RESTAURANT_FOOD_DELIVERY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'restaurant-food-delivery' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( RESTAURANT_FOOD_DELIVERY_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'restaurant-food-delivery' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( RESTAURANT_FOOD_DELIVERY_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'restaurant-food-delivery' ) ?></a>
					</div>
				</div>

				<h3 class="hndle bundle"><?php esc_html_e( 'Go For Theme Bundle', 'restaurant-food-delivery' ); ?></h3>
				<div class="inside theme-bundle">
					<p class="offer"><?php esc_html_e('Get 50+ Perfect WordPress Theme In A Single Package at just $79."','restaurant-food-delivery'); ?></p>
					<p class="coupon"><?php esc_html_e('Exclusive Offer !! Get Our Theme Pack of 60+ WordPress Themes At 10% Off','restaurant-food-delivery'); ?><span class="coupon-code"><?php esc_html_e('"Themespack10"','restaurant-food-delivery'); ?></span></p>
					<div id="admin_pro_linkss">
						<a class="blue-button-1" href="<?php echo esc_url( RESTAURANT_FOOD_DELIVERY_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Theme Bundle', 'restaurant-food-delivery' ) ?></a>
					</div>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','restaurant-food-delivery'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','restaurant-food-delivery'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','restaurant-food-delivery'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','restaurant-food-delivery'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','restaurant-food-delivery'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','restaurant-food-delivery'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Secton Reordering','restaurant-food-delivery'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','restaurant-food-delivery'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','restaurant-food-delivery'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','restaurant-food-delivery'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','restaurant-food-delivery'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','restaurant-food-delivery'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','restaurant-food-delivery'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','restaurant-food-delivery'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','restaurant-food-delivery'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>		    
	  		</div>
			</div>
		</div>
	</div>

<?php } ?>
