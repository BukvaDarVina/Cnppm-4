<?php


add_action( 'wp_enqueue_scripts', 'cnppm4_styles' );

function cnppm4_styles() {

	wp_enqueue_style( 'flexslider', 'https://bootstraptema.ru/snippets/slider/2016/flexslider/flexslider.css');
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/dist/css/lightbox.css');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/libs/slick/slick.css');
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/libs/slick/slick-theme.css');
	wp_enqueue_style( 'normalise', get_template_directory_uri() . '/css/normalise.css');
	wp_enqueue_style( 'style2', get_template_directory_uri() . '/css/style2.css');
	wp_enqueue_style( 'adapt', get_template_directory_uri() . '/css/adapt.css');
	wp_enqueue_style( 'style3', get_template_directory_uri() . '/css/style3.css');
	wp_enqueue_style( 'unitegallery', 'https://cdn.jsdelivr.net/npm/unitegallery@3.11.0/dist/css/unite-gallery.css');

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'lightbox-plus-jquery', get_template_directory_uri() . '/dist/js/lightbox-plus-jquery.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'jquerry3.7.0', get_template_directory_uri() . '/js/jquerry3.7.0.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'slick.min', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'slider-section-1', get_template_directory_uri() . '/js/slider-section-1.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'slider-section-2', get_template_directory_uri() . '/js/slider-section-2.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'gallary', get_template_directory_uri() . '/js/gallary.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'unitegallery', 'https://cdn.jsdelivr.net/npm/unitegallery@3.11.0/dist/js/unitegallery.min.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'pop-up-form', get_template_directory_uri() . '/js/pop-up-form.js', array('jquery'), 'null', true );
	
}

function tp_catpostcount($atts) {

	extract(shortcode_atts(array(
		"id" => '' 
		), $atts));
	$post_count = get_category($id)->category_count;
	$cat_name = get_category($id)->name;
	$cat_slug = get_category($id)->slug;
	return ((string) ''.$post_count.'');
	}

add_shortcode('cpc', 'tp_catpostcount');

add_image_size( 'main_slider', 1440, 800, true);
add_image_size( 'meropriyatiya', 420, 300, true);
add_image_size( 'meropriyatiya_iner_main', 640, 430, true);

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');




?>