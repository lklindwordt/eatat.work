<?php
/**
 * Register menus
 * 
 * @package Eatat.work
 */

namespace EATATWORK_THEME\Inc;

use EATATWORK_THEME\Inc\Traits\Singleton;

class Menus {
  use Singleton;

  protected function __construct() {
    // load class
    $this->setup_hooks();
  }

  protected function setup_hooks() {
    /**
     * Actions
     */

    add_action( 'init', [ $this, 'register_menus' ]);
  }

  public function register_menus() {
    register_nav_menus([
      'eatat-work-header-menu' => esc_html__( 'Header Menu' ),
      'eatat-work-footer-menu' => esc_html__( 'Footer Menu')
    ]);
  }
}