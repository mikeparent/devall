<?php

	add_theme_support('post-thumbnails'); 
	add_theme_support('menus');
	add_theme_support('title-tag');

	function devall_add_theme_scripts() {

		wp_enqueue_style( 'style', get_stylesheet_uri() );

		wp_enqueue_script( 'parallax_js', get_template_directory_uri() . '/js/parallax.js', array('jquery'), '', true);
		wp_enqueue_script( 'mbp_section_navigator_js', get_template_directory_uri() . '/js/section_navigator.js', array('jquery'), '', true);
		wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);

		// FONT PAGE

		if(is_front_page()){
			wp_enqueue_script( 'slick_js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true);
			wp_enqueue_script( 'home_js', get_template_directory_uri() . '/js/pages/home.js', array('jquery', 'slick_js', 'parallax_js', 'main_js'), '', true);
		}

		// OUR HERITAGE

		if(is_page('our-heritage')){
			wp_enqueue_script( 'our_heritage_js', get_template_directory_uri() . '/js/pages/our-heritage.js', array('jquery', 'parallax_js', 'main_js'), '', true);
		}

		// TESTIMONIALS

		if(is_page('testimonials')){
			wp_enqueue_script( 'testimonial_js', get_template_directory_uri() . '/js/pages/testimonial.js', array('jquery', 'parallax_js', 'main_js'), '', true);
		}

	}
	add_action( 'wp_enqueue_scripts', 'devall_add_theme_scripts' );

	function devall_theme_styles() {
		wp_enqueue_style( 'slick_css', get_template_directory_uri() . '/css/slick.css', array(), time() );
		wp_enqueue_style( 'slick_theme_css', get_template_directory_uri() . '/css/slick-theme.css', array(), time() );
		wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css', array(), time() );
	}
	add_action( 'wp_enqueue_scripts', 'devall_theme_styles' );

?>