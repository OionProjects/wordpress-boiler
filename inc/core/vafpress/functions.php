<?php
add_action('after_setup_theme', 'vp_tb_load_textdomain');

function vp_tb_load_textdomain()
{
	load_theme_textdomain('primera_dm', get_template_directory() . '/lang/');
}

require_once 'vafpress-framework/bootstrap.php';
require_once 'admin/data_sources.php';

/*$tmpl_mb2  = get_template_directory() . '/admin/metabox/sample_2.php';
$tmpl_mb3  = get_template_directory() . '/admin/metabox/sample_3.php';
$tmpl_mb4  = get_template_directory() . '/admin/metabox/sample_4.php';
$tmpl_mb5  = get_template_directory() . '/admin/metabox/sample_5.php';
$tmpl_mb6  = get_template_directory() . '/admin/metabox/sample_6.php';
$tmpl_mb6  = get_template_directory() . '/admin/metabox/sample_6.php';
$tmpl_mb7  = get_template_directory() . '/admin/metabox/sample_7.php';
$tmpl_mb8  = get_template_directory() . '/admin/metabox/sample_8.php';*/


/*$tmpl_sg1  = get_template_directory() . '/admin/shortcode_generator/shortcodes1.php';
$tmpl_sg2  = get_template_directory() . '/admin/shortcode_generator/shortcodes2.php';*/

/**
 * Create instance of Options
 */

$tmpl_opt = require dirname( __FILE__ ) .'/admin/option/option.php';
// metaboxes
	$menu_page = [
		//'icon_url' => get_template_directory_uri() . '/images/gavilan-vafpress.png',
		'icon_url' => get_template_directory_uri().'/inc/core/vafpress/vafpress-framework/public/img/primera-vafress.png',
        'position' => 99
	];

	$tmpl_mb1  = require dirname( __FILE__ )  . '/admin/metabox/sample_1.php';
		$theme_options = new VP_Option(array(
			'is_dev_mode'           => false,
			'option_key'            => 'vpt_option',
			'page_slug'             => 'vpt_option',
			'template'              => $tmpl_opt,
			'menu_page'             => $menu_page,//'themes.php',
			'use_auto_group_naming' => true,
			'use_util_menu'         => true,
			'minimum_role'          => 'edit_theme_options',
			'layout'                => 'fluid',
			'page_title'            => __( 'Theme Options', 'primera_dm' ),
			'menu_label'            => __( 'Theme Options', 'primera_dm' ),
		));
	//$mb1 = new VP_Metabox($tmpl_mb1);


/**
 * Create instances of Metaboxes
 */
/*$mb1 = new VP_Metabox($tmpl_mb1);*/
/*$mb2 = new VP_Metabox($tmpl_mb2);
$mb3 = new VP_Metabox($tmpl_mb3);
$mb4 = new VP_Metabox($tmpl_mb4);
$mb5 = new VP_Metabox($tmpl_mb5);
$mb6 = new VP_Metabox($tmpl_mb6);
$mb7 = new VP_Metabox($tmpl_mb7);
$mb8 = new VP_Metabox($tmpl_mb8);*/

/**
 * Create instances of Shortcode Generator
 */
/*$tmpl_sg1 = array(
	'name'           => 'sg_1',                                        // unique name, required
	'template'       => $tmpl_sg1,                                     // template file or array, required
	'modal_title'    => __( 'Vafpress Shortcodes 1', 'vp_textdomain'), // modal title, default to empty string
	'button_title'   => __( 'Vafpress', 'vp_textdomain'),              // button title, default to empty string
	'types'          => array( 'post', 'page' ),                       // at what post types the generator should works, default to post and page
	'included_pages' => array( 'appearance_page_vpt_option' ),         // or to what other admin pages it should appears
);
$tmpl_sg2 = array(
	'name'           => 'sg_2',
	'template'       => $tmpl_sg2,
	'modal_title'    => __( 'Vafpress Shortcodes 2', 'vp_textdomain'),
	'button_title'   => __( 'Vafpress', 'vp_textdomain'),
	'types'          => array( 'post', 'page' ),
	'main_image'     => get_template_directory_uri() . '/public/img/vp_shortcode_icon.png',
	'sprite_image'   => get_template_directory_uri() . '/public/img/vp_shortcode_icon_sprite.png',
);*/

/*$sg1 = new VP_ShortcodeGenerator($tmpl_sg1);
$sg2 = new VP_ShortcodeGenerator($tmpl_sg2);*/

/*
 * EOF
 */