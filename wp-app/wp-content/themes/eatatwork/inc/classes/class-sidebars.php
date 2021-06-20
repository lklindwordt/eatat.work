<?php
/**
 * Theme sidebars
 * 
 * @package Eatat.work
 */

namespace EATATWORK_THEME\Inc;

use EATATWORK_THEME\Inc\Traits\Singleton;

class Sidebars {
  use Singleton;

  protected function __construct() {
    // load class
    $this->setup_hooks();
  }

  protected function setup_hooks() {
    /**
     * Actions
     */
    add_action( 'widgets_init', [ $this, 'register_sidebars'] );
  }

  public function register_sidebars() {
    register_sidebar([
      'name'          => __( 'Sidebar', 'eatatwork' ),
      'id'            => 'sidebar-1',
      'description'   => __( 'Main sidebar', 'eatatwork' ),
      'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ]);

    register_sidebar([
      'name'          => __( 'Footer', 'eatatwork' ),
      'id'            => 'sidebar-2',
      'description'   => __( 'Footer sidebar', 'eatatwork' ),
      'before_widget' => '<div id="%1$s" class="widget widget-footer %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ]);
  }
}