<?php
/**
 * Created by PhpStorm.
 * User: ROG
 * Date: 7/11/2019
 * Time: 7:15 PM
 */

class Theme_option_typography {

	public $heading_font = '';
	public $heading_font_style = '';
	public $heading_font_weight = '';
	public $paragraph_font = '';
	public $paragraph_font_style = '';
	public $paragraph_font_weight = '';

	public function __construct() {
		$this->heading_font = vp_option('vpt_option.heading_font_face');
		$this->heading_font_style = vp_option('vpt_option.heading_font_style');
		$this->heading_font_weight = vp_option('vpt_option.heading_font_weight');
		$this->paragraph_font = vp_option('vpt_option.paragraph_font');
		$this->paragraph_font_style = vp_option('vpt_option.paragraph_font_style');
		$this->paragraph_font_weight = vp_option('vpt_option.paragraph_font_weight');
	}


}