<?php

	if ( version_compare( $wp_version, '3.0', '>=' ) ) {
		add_theme_support( 'automatic-feed-links' );
	}else{
		automatic_feed_links();
	}
	$custom_background_settings = [
		'wp-head-callback'       => 'custom_bg_cb', // Param can be found in callbacks.php
	];

	add_theme_support( 'title-tag' );
	add_theme_support( 'editor-style' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support('widgets');
	add_theme_support('custom-background', $custom_background_settings);
	add_theme_support('custom-header');
	add_theme_support('post-x',array('aside','image','video', 'gallery', 'audio'));
	add_theme_support('html5',array('search-form'));
	add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'video' ) );


	if( is_woocommerce_activated() ){
        //add_theme_support( 'woocommerce' );
        add_action( 'after_setup_theme', 'primera_add_woocommerce_support' );
        function primera_add_woocommerce_support() {
            add_theme_support( 'woocommerce', array(
                'thumbnail_image_width' => 100,
                'single_image_width'    => 500,
                'product_grid'          => array(
                    'default_rows'    => 3,
                    'min_rows'        => 2,
                    'max_rows'        => 8,
                    'default_columns' => 6,
                    'min_columns'     => 2,
                    'max_columns'     => 5,
                ),
            ) );
        }
    }


	function primera_add_editor_style(){
		add_editor_style( 'editor-style.css' );
	}
	add_action('after_theme_setup', 'primera_add_editor_style');

    function mytheme_setup_theme_supported_features() {
        add_theme_support( 'editor-color-palette', array(
            array(
                'name' => __( 'strong magenta', 'themeLangDomain' ),
                'slug' => 'strong-magenta',
                'color' => '#a156b4',
            ),
            array(
                'name' => __( 'light grayish magenta', 'themeLangDomain' ),
                'slug' => 'light-grayish-magenta',
                'color' => '#d0a5db',
            ),
            array(
                'name' => __( 'very light gray', 'themeLangDomain' ),
                'slug' => 'very-light-gray',
                'color' => '#eee',
            ),
            array(
                'name' => __( 'very dark gray', 'themeLangDomain' ),
                'slug' => 'very-dark-gray',
                'color' => '#444',
            ),
        ) );
    }

    add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );


	function primera_nav_menu() {
		register_nav_menu('primera-nav-menu',__( 'Primary Menu' ));
	}
	add_action( 'init', 'primera_nav_menu' );

	/**
	 *  Add primera theme featured post.
	 */
	add_action( 'init', 'primera_custom_post_status' );
	function primera_custom_post_status(){
		register_post_status( 'featured', array(
			'label'                     => _x( 'Featured Post', 'post' ),
			'public'                    => true,
			'exclude_from_search'       => false,
			'show_in_admin_all_list'    => true,
			'show_in_admin_status_list' => true,
			'post_type'                 => array( 'post' ),
			'label_count'               => _n_noop( 'Featured Post <span class="count">(%s)</span>', 'Featured Posts <span class="count">(%s)</span>' ),
		) );
	}
	function primera_custom_status_add_in_quick_edit() {
		echo "<script>
		        jQuery(document).ready( function() {
		            jQuery( 'select[name=\"_status\"]' ).append( '<option value=\"featured\">Featured</option>' );      
		        }); 
	        </script>";
	}
	add_action('admin_footer-edit.php','primera_custom_status_add_in_quick_edit');
	function primera_custom_status_add_in_post_page() {
		echo "<script>
		        jQuery(document).ready( function() {        
		            jQuery( 'select[name=\"post_status\"]' ).append( '<option value=\"featured\">Featured</option>' );
		        });
		        </script>";
	}
	add_action('admin_footer-post.php', 'primera_custom_status_add_in_post_page');
	add_action('admin_footer-post-new.php', 'primera_custom_status_add_in_post_page');

