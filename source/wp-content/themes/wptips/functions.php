<?php
define( 'DON_VERSION', '1.1.0' );
define( 'DON_CHILD_VERSION', '1.0.0' );
define( 'DON_SCRIPT_DEBUG', true );
define(THEMEPATH, ABSPATH.'wp-content/themes/wptips/');

function don_child_scripts_styles() {
	$postfix = ( defined( 'DON_SCRIPT_DEBUG' ) && true === DON_SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_script( 'don_child_plugins', get_stylesheet_directory_uri() . "/assets/js/don_child_plugins{$postfix}.js", array('jquery'), DON_CHILD_VERSION, true );
	wp_enqueue_script( 'don_child', get_stylesheet_directory_uri() . "/assets/js/don_child{$postfix}.js", array('jquery', 'don_child_plugins'), DON_CHILD_VERSION, true );


	wp_enqueue_style( 'don_child', get_stylesheet_directory_uri() . "/assets/css/don_child{$postfix}.css", array(), DON_CHILD_VERSION );
}
add_action( 'wp_enqueue_scripts', 'don_child_scripts_styles' );

include_once('includes/helper/utils-helper.php');