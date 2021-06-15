<?php
/**
 * Bootstraps the Theme
 * 
 * @package Eatat.work
 */

namespace EATATWORK_THEME\Inc;

use EATATWORK_THEME\Inc\Traits\Singleton;

class EATATWORK_THEME {
  use Singleton;

  protected function __construct() {
    // load class

    Assets::get_instance();

    $this->setup_hooks();
  }

  protected function setup_hooks() {
    /**
     * Actions
     */

    add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ]);
    add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ]);
  }
}