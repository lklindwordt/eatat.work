<?php
/**
 * Enqueue theme assets
 * 
 * @package Eatat.work
 */

namespace EATATWORK_THEME\Inc;

use EATATWORK_THEME\Inc\Traits\Singleton;

class Assets {
  use Singleton;

  protected function __construct() {
    // load class
    $this->setup_hooks();
  }

  protected function setup_hooks() {
    /**
     * Actions
     */

    add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ]);
    add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ]);
  }

  public function register_styles() {
    // Register Styles
    wp_register_style( 'bootstrap-css', EATATWORK_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all' );
    wp_register_style( 'main-css', EATATWORK_BUILD_CSS_URI . '/main.css', ['bootstrap-css'], filemtime( EATATWORK_BUILD_CSS_DIR_PATH . '/main.css' ), 'all' );

    // Enqueue Styles
    // wp_enqueue_style( 'bootstrap-css' );
    wp_enqueue_style( 'main-css' );
  }

  public function register_scripts() {
    // Register Scripts
    wp_register_script( 'main-js', EATATWORK_BUILD_JS_URI . '/main.js', ['jquery'], filemtime( EATATWORK_BUILD_JS_DIR_PATH . '/main.js'), true );
    wp_register_script( 'bootstrap-js', EATATWORK_DIR_URI . '/assets/src/library/js/bootstrap.min.js', [], false, true );

    // Enqueue Scripts
    wp_enqueue_script( 'main-js' );
    wp_enqueue_script( 'bootstrap-js' );
  }
}