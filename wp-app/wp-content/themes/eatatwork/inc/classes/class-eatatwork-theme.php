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

    add_action( 'after_setup_theme', [$this, 'setup_theme' ]);
  }

  public function setup_theme() {
    add_theme_support( 'title_tag' );

    add_theme_support( 'custom_logo', [
      'header-text'          => [ 'site-title', 'site-description' ],
      'height'               => 100,
      'width'                => 400,
      'flex-height'          => true,
      'flex-width'           => true,
      'unlink-homepage-logo' => true 
    ]);
  }
}