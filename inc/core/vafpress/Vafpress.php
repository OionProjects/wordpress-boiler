<?php
/**
 * Created by PhpStorm.
 * User: ROG
 * Date: 6/23/2019
 * Time: 9:42 PM
 */

namespace gavilan\core\vafpress;

use VP_Metabox;
use VP_Option;

class Vafpress {
	/**
	 * Vafpress constructor.
	 */
	public $metabox = [];

	public function __construct() {
		require_once 'vafpress-framework/bootstrap.php';
		require_once 'admin/data_sources.php';
		$this->load_theme_option();
	}


	public function load_theme_option(){

		function load_vapress(){
			$tmpl_opt = require dirname( __FILE__ ) .'/admin/option/option.php';
			//echo '<pre>'; print_r($tmpl_opt);exit;
			//$tmpl_mb1  = get_template_directory() . '/admin/metabox/sample_1.php';
			$tmpl_mb1  = require dirname( __FILE__ ) .'/admin/metabox/sample_1.php';
			//echo '<pre>'; print_r($tmpl_mb1);exit;
			$theme_options = new VP_Option(array(
				'is_dev_mode'           => false,                                  // dev mode, default to false
				'option_key'            => 'vpt_option',                           // options key in db, required
				'page_slug'             => 'vpt_option',                           // options page slug, required
				'template'              => $tmpl_opt,                              // template file path or array, required
				'menu_page'             => 'themes.php',                           // parent menu slug or supply `array` (can contains 'icon_url' & 'position') for top level menu
				'use_auto_group_naming' => true,                                   // default to true
				'use_util_menu'         => true,                                   // default to true, shows utility menu
				'minimum_role'          => 'edit_theme_options',                   // default to 'edit_theme_options'
				'layout'                => 'fixed',                                // fluid or fixed, default to fixed
				'page_title'            => __( 'Theme Options', 'vp_textdomain' ), // page title
				'menu_label'            => __( 'Theme Options', 'vp_textdomain' ), // menu label
				'priority'              => 16
			));

			/**
			 * Create instances of Metaboxes
			 */
			$mb1 = new VP_Metabox($tmpl_mb1);
		}
		add_action( 'after_setup_theme', 'load_vapress' );

	}

	/**
	 * @return mixed
	 */
	public function getMetabox() {
		return $this->metabox;
	}

	/**
	 * @param mixed $metabox
	 */
	public function setMetabox( $metabox ) {
		$this->metabox = $metabox;
	}


}