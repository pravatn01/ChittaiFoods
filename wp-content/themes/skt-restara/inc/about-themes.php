<?php
//about theme info
add_action( 'admin_menu', 'skt_restara_abouttheme' );
function skt_restara_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-restara'), esc_html__('About Theme', 'skt-restara'), 'edit_theme_options', 'skt_restara_guide', 'skt_restara_mostrar_guide');   
} 
//guidline for about theme
function skt_restara_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-restara'); ?>
		   </div>
          <p><?php esc_html_e('SKT Restara theme can be used to create food and restaurant websites. Use cases: Eating house, lunch, dinner, chef, recipe, fish, turkey, chicken, street food, multicuisine, continental dining, diner, bistro, take away, pizza, cafe, coffee and tea shop, pastry, pub, seafood, table order booking, eateries, cafeteria, burger, fast food blogger, hotels, bakery, cup cakes, appetizer, soups, healthy eating lifestyle. Call to action, easy to use using page builder, SEO friendly, WooCommerce and contact form compatible. Editable, flexible and scalable.','skt-restara'); ?></p>
          <a href="<?php echo esc_url(SKT_RESTARA_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_RESTARA_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-restara'); ?></a> | 
				<a href="<?php echo esc_url(SKT_RESTARA_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-restara'); ?></a> | 
				<a href="<?php echo esc_url(SKT_RESTARA_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-restara'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_RESTARA_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>