<?php

class Primera_theme_option_footer{

	public $show_toolbar = false;
	protected $content = '';
	protected $content_link = '';

	public function __construct() {
		if( ! empty(  vp_option('vpt_option.site-footer-toolbar') ) ) {
			$this->show_toolbar = true;
			$this->html = vp_option('vpt_option.site-footer-toolbar-esc-content');
			if( ! empty(  vp_option('vpt_option.site-footer-toolbar-content') ) ) {
				$this->content = vp_option('vpt_option.site-footer-toolbar-content');
				$this->content_link = vp_option('vpt_option.site-footer-toolbar-content-link');
			}
		}
	}

	public static function init(){
		return new Primera_theme_option_footer();
	}

	public function is_toolbar_shown(){
		return $this->show_toolbar;
	}

	/**
	 * @param string $wrapper
	 * @return string
	 */
	public function content( $wrapper = 'p' ){
		if( $this->show_toolbar ){
			$format = '<%s> <a href="%s"> %s </a></%s>';
			$format = sprintf( $format, $wrapper, esc_url( $this->content_link ), __( $this->content ), $wrapper );
			echo $format;
		}
	}

	/**
	 * @return string
	 */
	public function getContentLink() {
		return $this->content_link;
	}


}