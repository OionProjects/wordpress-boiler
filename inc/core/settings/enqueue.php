<?php
/*
	==========================================
	 Include scripts
	==========================================
*/
function primera_css_enqueue() {
    wp_enqueue_style('primera-iconic-bs', get_template_directory_uri().'/assets/css/open-iconic-bootstrap.min.css',array(), '1.0.0', 'screen');
    wp_enqueue_style('primera-animate', get_template_directory_uri().'/assets/css/animate.css',array(), '1.0.0', 'screen');
    wp_enqueue_style('primera-owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css',array(), '1.0.0', 'screen');
    wp_enqueue_style('primera-owl-theme-default', get_template_directory_uri().'/assets/css/owl.theme.default.min.css',array(), '1.0.0', 'screen');
    wp_enqueue_style('primera-magnific', get_template_directory_uri().'/assets/css/magnific-popup.css',array(), '1.0.0', 'screen');
    wp_enqueue_style('primera-aos', get_template_directory_uri().'/assets/css/aos.css',array(), '1.0.0', 'screen');
    wp_enqueue_style('primera-ionicons-icons', get_template_directory_uri().'/assets/css/ionicons.min.css',array(), '1.0.0', 'screen');
    wp_enqueue_style('primera-bootstrap-datepicker', get_template_directory_uri().'/assets/css/bootstrap-datepicker.css',array(), '1.0.0', 'screen');
    wp_enqueue_style('primera-jquery-timepicker', get_template_directory_uri().'/assets/css/jquery.timepicker.css',array(), '1.0.0', 'screen');
    wp_enqueue_style('primera-flaticon', get_template_directory_uri().'/assets/css/flaticon.css',array(), '1.0.0', 'screen');
    wp_enqueue_style('primera-jquery-timepicker', get_template_directory_uri().'/assets/css/icomoon.css',array(), '1.0.0', 'screen');
    wp_enqueue_style('primera-icomoon', get_template_directory_uri().'/assets/css/icomoon.css',array(), '1.0.0', 'screen');
    wp_enqueue_style('primera-theme-default-style', get_template_directory_uri().'/assets/css/style.css',array(), '1.0.0', 'screen');
    //wp_enqueue_style('primera-theme-style', get_template_directory_uri().'/style.css',array(), '1.0.0', 'screen');
}

/**
 * Enqueue custom fonts using protocol relative URL.
 * Syntax: wp_enqueue_style( $handle, $src, $deps, $ver, $media );
 * Ensure $handle is unique to prevent conflicts with plugins
 * Note(s): The pipe (|) operator is used to load multiple typefaces in a single call. We also only load the weights we want   * by comma seperating them, instead of loading every available weight.
 */
function primera_fonts()
{
	wp_enqueue_style( 'primera-fonts-poppins', "https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap", '', '1.0.0', 'screen' );
	wp_enqueue_style( 'primera-fonts-lora', "https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap", '', '1.0.0', 'screen' );
	wp_enqueue_style( 'primera-fonts-amatic', "https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap", '', '1.0.0', 'screen' );
}

function primera_scripts_enqueue(){
    wp_deregister_script('jquery');
    wp_deregister_script('jquery-migrate');

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery-waypoint', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery-magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/aos.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery-animate-number', get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bootstrap-date-picker', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js', array(), '1.0.0', true );
	wp_enqueue_script( 'scrollax', get_template_directory_uri() . '/assets/js/scrollax.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'google-maps', get_template_directory_uri() . 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false', array(), '1.0.0', true );
	wp_enqueue_script( 'google-maps-init', get_template_directory_uri() . '/assets/js/google-map.js', array(), '1.0.0', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'primera_fonts' );
add_action( 'wp_enqueue_scripts', 'primera_css_enqueue' );
add_action( 'wp_enqueue_scripts', 'primera_scripts_enqueue' );

