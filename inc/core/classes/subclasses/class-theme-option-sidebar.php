<?php

class Primera_theme_option_sidebar{

	public $position;

	function __construct() {
		$this->position = vp_option('vpt_option.site-sidebar-position');
		//die( $this->position );
	}

	public static function init(){
		return new Primera_theme_option_sidebar();
	}

	public function get( $position ){
		if( $position != $this->position && $this->position != 'all'){
			return false;
		}
		if ( is_active_sidebar( 'primera-sidebar-'.$position ) ) {
			get_template_part('/template-parts/sidebar/sidebar-'.$position, 'sidebar-left.php');
		}
		return $this;
	}
}