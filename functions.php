<?php

/**
 *  Wordpress version check for defining global variable paths
 *  Don't register custom functions here. Instead create a new file @ core directory;
 */

if ( version_compare( $wp_version, '3.0', '>=' ) ) {
    defined( 'PRIMERA_CORE_PATH' ) or define( 'PRIMERA_CORE_PATH', get_theme_file_path('/inc/core/') );
    defined( 'PRIMERA_INC_PATH' ) or define( 'PRIMERA_INC_PATH', get_theme_file_path('/inc/') );
    defined( 'PRIMERA_CLASS_PATH' ) or define( 'PRIMERA_CLASS_PATH', get_theme_file_path('/inc/core/classes/') );
}else{
    defined( 'PRIMERA_CORE_PATH' ) or define( 'PRIMERA_CORE_PATH', dirname(__FILE__) . '/inc/core/' );
    defined( 'PRIMERA_INC_PATH' ) or define( 'PRIMERA_INC_PATH', dirname(__FILE__) . '/inc/' );
    defined( 'PRIMERA_CLASS_PATH' ) or define( 'PRIMERA_CLASS_PATH', dirname(__FILE__) . '/inc/core/classes/' );
}

require_once PRIMERA_CORE_PATH . 'init.php';

