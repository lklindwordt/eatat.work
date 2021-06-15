<?php
/**
 * Theme Functions
 * 
 * @package Eatat.work
 */

if ( !defined( 'EATATWORK_DIR_PATH' )) {
  define( 'EATATWORK_DIR_PATH', untrailingslashit( get_template_directory() ));
}

require_once EATATWORK_DIR_PATH . '/inc/helpers/autoloader.php';

function eatatwork_get_theme_instance() {
  \EATATWORK_THEME\Inc\EATATWORK_THEME::get_instance();
}

eatatwork_get_theme_instance();

function eatatwork_enqueue_scripts() {

  // Register Styles
  wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css'), 'all' );
  wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all' );
  
  // Register Scripts
  wp_register_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js'), true );
  wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', [], false, true );

  // Enqueue Styles
  wp_enqueue_style( 'style-css' );
  wp_enqueue_style( 'bootstrap-css' );
  
  // Enqueue Scripts
  wp_enqueue_script( 'main-js' );
  wp_enqueue_script( 'bootstrap-js' );
}

add_action( 'wp_enqueue_scripts', 'eatatwork_enqueue_scripts' );

?>