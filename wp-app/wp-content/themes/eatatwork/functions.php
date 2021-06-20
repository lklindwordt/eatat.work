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

if ( !defined( 'EATATWORK_BUILD_URI' )) {
  define( 'EATATWORK_BUILD_URI', untrailingslashit( get_template_directory_uri() . '/assets/build' ));
}

if ( !defined( 'EATATWORK_BUILD_JS_URI' )) {
  define( 'EATATWORK_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() . '/assets/build/js' ));
}

if ( !defined( 'EATATWORK_BUILD_JS_DIR_PATH' )) {
  define( 'EATATWORK_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() . '/assets/build/js' ));
}

if ( !defined( 'EATATWORK_BUILD_IMG_URI' )) {
  define( 'EATATWORK_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() . '/assets/build/src/img' ));
}

if ( !defined( 'EATATWORK_BUILD_CSS_URI' )) {
  define( 'EATATWORK_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() . '/assets/build/css' ));
}

if ( !defined( 'EATATWORK_BUILD_CSS_DIR_PATH' )) {
  define( 'EATATWORK_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() . '/assets/build/css' ));
}

require_once EATATWORK_DIR_PATH . '/inc/helpers/autoloader.php';
require_once EATATWORK_DIR_PATH . '/inc/helpers/template-tags.php';

function eatatwork_get_theme_instance() {
  \EATATWORK_THEME\Inc\EATATWORK_THEME::get_instance();
}

eatatwork_get_theme_instance();

?>