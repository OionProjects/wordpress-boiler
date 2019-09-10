<?php
/**
 *  Register all ajax callbacks here.
 */

add_action( 'wp_ajax_primera_ajax', 'primera_ajax_callback' );
add_action( 'wp_ajax_nopriv_primera_ajax', 'primera_ajax_callback' );

function primera_ajax_callback() {

	$action = untrailingslashit( $_POST['action'] );


	echo $action;
	wp_die();
}
