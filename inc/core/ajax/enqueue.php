<?php
/**
 *  Enqueue all ajax scripts here.
 */
//add_action( 'wp_enqueue_scripts', 'register_ajax_scripts' );
function register_ajax_scripts(){
	wp_enqueue_script('primera-ajax', get_template_directory_uri() . '/assets/js/primera-ajax.js', array('jquery'), null );
	wp_localize_script( 'primera-ajax', 'testAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ), 'nonce'=> wp_create_nonce()) );
}
