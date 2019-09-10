<?php

/**
 * Class Primera
 * Main class to load subclasses
 */
class Primera {

    public $links = [];

	public function __construct() {

	}

	/**
	 * Static method to instantiate this class
	 */
	public static function init(){
	    return new Primera();
	}

	public static function sidebar(){
        require_once PRIMERA_CLASS_PATH . 'subclasses/class-theme-option-sidebar.php';
		return new Primera_theme_option_sidebar();
	}

	public static function header(){
		require_once PRIMERA_CLASS_PATH . 'subclasses/class-theme-option-header.php';
		return new Primera_theme_option_header();
	}

	public function primera_user_role( $role ){
		Primera_Admin_Controls::check_user_role( $role );
	}

}