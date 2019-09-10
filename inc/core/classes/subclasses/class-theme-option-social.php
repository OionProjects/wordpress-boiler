<?php

class Primera_theme_option_social {

	public $links = [];
	public $enableSocial = false;
	public $showTopBar = false;
	public $showFooter = false;
	public $wrapper;
	public $item_wrapper;

	public function __construct() {
		if( ! empty(  vp_option('vpt_option.enable-site-social') ) ){
			$this->enableSocial = true;
			if( ! empty(  vp_option('vpt_option.show-site-social-top-bar') ) ){
				$this->showTopBar = true;
			}
			if( ! empty(  vp_option('vpt_option.show-site-social-footer') ) ){
				$this->showFooter = true;
			}
		}else{
			$this->showTopBar = false;
			$this->showFooter = false;
		}
		$this->links['fab fa-facebook-f'] = vp_option('vpt_option.fb_url');
		$this->links['fab fa-twitter'] = vp_option('vpt_option.twitter_url');
		$this->links['fab fa-instagram'] = vp_option('vpt_option.instagram_url');
		$this->links['fab fa-google-plus'] = vp_option('vpt_option.google_plus_url');
		$this->links['fab fa-github'] = vp_option('vpt_option.github_url');
		$this->links['fab fa-linkedin-in'] = vp_option('vpt_option.linkedin_url');
	}

	public static function init(){
		return new Primera_theme_option_social();
	}

	 public function social( $wrapper = 'div', $item_wrapper = 'li' ){
		$this->wrapper = $wrapper;
		$this->item_wrapper = $item_wrapper;
		return $this;
	}

	public function showHeader(){
		if( $this->enableSocial ){
			if( $this->showTopBar){
				 $this->render();
			}
		}
		return false;
	}

	public function showFooter(){
		if( $this->enableSocial ){
			if( $this->showFooter ){
				$this->render();
			}
		}
		return false;
	}

	 private function render(){
		$html = '';
		foreach ( $this->links as $icon => $link ){
			if( !empty($link) ){
				$format = '<%s> <a href="%s" target="_blank"> <i class="%s"></i> </a> </%s>';
				$html .= sprintf($format, $this->item_wrapper, $link, $icon, $this->item_wrapper);
			}
		}
		echo $html;
	}

}