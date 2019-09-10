<?php
/**
 * Created by PhpStorm.
 * User: ROG
 * Date: 8/1/2019
 * Time: 8:18 PM
 */

class Primera_theme_option_header {

	public $header_option = '';

	function __construct() {
		$this->header_option = vp_option('vpt_option.primera-header-option','default');
	}


	public function primera_header_option(){
		switch ($this->header_option){
			case 'default-header': return 'default';
			case 'basic-header': return 'basic';
			case 'header-topbar': return 'topbar';
			case 'header-topbar-slider': return 'topbar-slider';
			case 'header-search': return 'search';
			default: return 'default';
		}
	}

}