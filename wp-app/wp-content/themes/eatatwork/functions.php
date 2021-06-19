<?php
/**
 * Theme Functions
 * 
 * @package Eatat.work
 */

if ( !defined( 'EATATWORK_DIR_PATH' )) {
  define( 'EATATWORK_DIR_PATH', untrailingslashit( get_template_directory() ));
}

if ( !defined( 'EATATWORK_DIR_URI' )) {
  define( 'EATATWORK_DIR_URI', untrailingslashit( get_template_directory_uri() ));
}

require_once EATATWORK_DIR_PATH . '/inc/helpers/autoloader.php';

function eatatwork_get_theme_instance() {
  \EATATWORK_THEME\Inc\EATATWORK_THEME::get_instance();
}

eatatwork_get_theme_instance();

?>