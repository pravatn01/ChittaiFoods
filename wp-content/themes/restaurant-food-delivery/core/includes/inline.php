<?php


$restaurant_food_delivery_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$restaurant_food_delivery_text_transform = get_theme_mod( 'menu_text_transform_restaurant_food_delivery','CAPITALISE');
    if($restaurant_food_delivery_text_transform == 'CAPITALISE'){

		$restaurant_food_delivery_custom_css .='#main-menu ul li a{';

			$restaurant_food_delivery_custom_css .='text-transform: capitalize ; font-size: 14px;';

		$restaurant_food_delivery_custom_css .='}';

	}else if($restaurant_food_delivery_text_transform == 'UPPERCASE'){

		$restaurant_food_delivery_custom_css .='#main-menu ul li a{';

			$restaurant_food_delivery_custom_css .='text-transform: uppercase ; font-size: 14px;';

		$restaurant_food_delivery_custom_css .='}';

	}else if($restaurant_food_delivery_text_transform == 'LOWERCASE'){

		$restaurant_food_delivery_custom_css .='#main-menu ul li a{';

			$restaurant_food_delivery_custom_css .='text-transform: lowercase ; font-size: 14px;';

		$restaurant_food_delivery_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

$restaurant_food_delivery_container_width = get_theme_mod('restaurant_food_delivery_container_width');

		$restaurant_food_delivery_custom_css .='body{';

			$restaurant_food_delivery_custom_css .='width: '.esc_attr($restaurant_food_delivery_container_width).'%; margin: auto;';

		$restaurant_food_delivery_custom_css .='}';



	/*---------------------------Slider-content-alignment-------------------*/

$restaurant_food_delivery_slider_content_alignment = get_theme_mod( 'restaurant_food_delivery_slider_content_alignment','LEFT-ALIGN');

 if($restaurant_food_delivery_slider_content_alignment == 'LEFT-ALIGN'){

		$restaurant_food_delivery_custom_css .='.blog_box{';

			$restaurant_food_delivery_custom_css .='text-align:left;';

		$restaurant_food_delivery_custom_css .='}';


	}else if($restaurant_food_delivery_slider_content_alignment == 'CENTER-ALIGN'){

		$restaurant_food_delivery_custom_css .='.blog_box{';

			$restaurant_food_delivery_custom_css .='text-align:center; right: 30%; left: 30%;';

		$restaurant_food_delivery_custom_css .='}';


	}else if($restaurant_food_delivery_slider_content_alignment == 'RIGHT-ALIGN'){

		$restaurant_food_delivery_custom_css .='.blog_box{';

			$restaurant_food_delivery_custom_css .='text-align:right; right: 20%; left: 50%;';

		$restaurant_food_delivery_custom_css .='}';

	}


	/*---------------------------Copyright Text alignment-------------------*/

$restaurant_food_delivery_copyright_text_alignment = get_theme_mod( 'restaurant_food_delivery_copyright_text_alignment','LEFT-ALIGN');

 if($restaurant_food_delivery_copyright_text_alignment == 'LEFT-ALIGN'){

		$restaurant_food_delivery_custom_css .='.copy-text p{';

			$restaurant_food_delivery_custom_css .='text-align:left;';

		$restaurant_food_delivery_custom_css .='}';


	}else if($restaurant_food_delivery_copyright_text_alignment == 'CENTER-ALIGN'){

		$restaurant_food_delivery_custom_css .='.copy-text p{';

			$restaurant_food_delivery_custom_css .='text-align:center;';

		$restaurant_food_delivery_custom_css .='}';


	}else if($restaurant_food_delivery_copyright_text_alignment == 'RIGHT-ALIGN'){

		$restaurant_food_delivery_custom_css .='.copy-text p{';

			$restaurant_food_delivery_custom_css .='text-align:right;';

		$restaurant_food_delivery_custom_css .='}';

	}

	/*---------------------------related Product Settings-------------------*/


$restaurant_food_delivery_related_product_setting = get_theme_mod('restaurant_food_delivery_related_product_setting',true);

	if($restaurant_food_delivery_related_product_setting == false){

		$restaurant_food_delivery_custom_css .='.related.products, .related h2{';

			$restaurant_food_delivery_custom_css .='display: none;';

		$restaurant_food_delivery_custom_css .='}';
	}

		/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$restaurant_food_delivery_scroll_top_position = get_theme_mod( 'restaurant_food_delivery_scroll_top_position','Right');

	if($restaurant_food_delivery_scroll_top_position == 'Right'){

		$restaurant_food_delivery_custom_css .='.scroll-up{';

			$restaurant_food_delivery_custom_css .='right: 20px;';

		$restaurant_food_delivery_custom_css .='}';

	}else if($restaurant_food_delivery_scroll_top_position == 'Left'){

		$restaurant_food_delivery_custom_css .='.scroll-up{';

			$restaurant_food_delivery_custom_css .='left: 20px;';

		$restaurant_food_delivery_custom_css .='}';

	}else if($restaurant_food_delivery_scroll_top_position == 'Center'){

		$restaurant_food_delivery_custom_css .='.scroll-up{';

			$restaurant_food_delivery_custom_css .='right: 50%;left: 50%;';

		$restaurant_food_delivery_custom_css .='}';
	}

		/*---------------------------Pagination Settings-------------------*/


$restaurant_food_delivery_pagination_setting = get_theme_mod('restaurant_food_delivery_pagination_setting',true);

	if($restaurant_food_delivery_pagination_setting == false){

		$restaurant_food_delivery_custom_css .='.nav-links{';

			$restaurant_food_delivery_custom_css .='display: none;';

		$restaurant_food_delivery_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$restaurant_food_delivery_slider_opacity_color = get_theme_mod( 'restaurant_food_delivery_slider_opacity_color','0.6');

	if($restaurant_food_delivery_slider_opacity_color == '0'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0';

		$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_slider_opacity_color == '0.1'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0.1';

		$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_slider_opacity_color == '0.2'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0.2';

		$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_slider_opacity_color == '0.3'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0.3';

		$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_slider_opacity_color == '0.4'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0.4';

		$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_slider_opacity_color == '0.5'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0.5';

		$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_slider_opacity_color == '0.6'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0.6';

		$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_slider_opacity_color == '0.7'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0.7';

		$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_slider_opacity_color == '0.8'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0.8';

		$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_slider_opacity_color == '0.9'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0.9';

		$restaurant_food_delivery_custom_css .='}';

		}else if($restaurant_food_delivery_slider_opacity_color == '1.0'){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0.9';

		$restaurant_food_delivery_custom_css .='}';

		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$restaurant_food_delivery_overlay_option = get_theme_mod('restaurant_food_delivery_overlay_option', true);

	if($restaurant_food_delivery_overlay_option == false){

		$restaurant_food_delivery_custom_css .='.blog_inner_box img{';

			$restaurant_food_delivery_custom_css .='opacity:0.6;';

		$restaurant_food_delivery_custom_css .='}';
	}

	$restaurant_food_delivery_slider_image_overlay_color = get_theme_mod('restaurant_food_delivery_slider_image_overlay_color', true);

	if($restaurant_food_delivery_slider_image_overlay_color != false){

		$restaurant_food_delivery_custom_css .='.blog_inner_box{';

			$restaurant_food_delivery_custom_css .='background-color: '.esc_attr($restaurant_food_delivery_slider_image_overlay_color).';';

		$restaurant_food_delivery_custom_css .='}';
	}
