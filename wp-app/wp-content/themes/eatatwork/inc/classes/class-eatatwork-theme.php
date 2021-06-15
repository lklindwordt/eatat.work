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
    // load class.
    $this->set_hooks();
  }

  protected function set_hooks() {
    // actions and filters
  }
}