<?php
/**
 * Register meta boxes
 * 
 * @package Eatat.work
 */

namespace EATATWORK_THEME\Inc;

use EATATWORK_THEME\Inc\Traits\Singleton;

class Meta_Boxes {
  use Singleton;

  protected function __construct() {
    // load class
    $this->setup_hooks();
  }

  protected function setup_hooks() {
    /**
     * Actions
     */

    add_action( 'add_meta_boxes', [ $this, 'add_custom_meta_box' ]);
    add_action( 'save_post', [ $this, 'save_post_meta_data' ]);
  }

  public function add_custom_meta_box( $post ) {
    $screens = [ 'post' ];
    foreach ( $screens as $screen ) {
      add_meta_box(
        'hide-page-title',                    // Unique ID
        __( 'Hide page title', 'eatatwork' ), // Box title
        [ $this, 'custom_meta_box_html' ],    // Content callback, must be of type callable
        $screen,                              // Post type
        'side',                               // Context
      );
    }
  } 

  public function custom_meta_box_html( $post ) {
    $value = get_post_meta( $post->ID, '_hide_page_title', true );

    /**
     * Use none for verification
     */
    wp_nonce_field( plugin_basename(__FILE__), 'hide_title_meta_box_nonce_field' );

    ?>
    <label for="eatatwork-field"><?php esc_html_e( 'Hide the page title', 'eatatwork' ); ?></label>
    <select name="eatatwork_hide_title_field" id="eatatwork-field" class="postbox">
        <option value=""><?php esc_html_e( 'Select', 'eatatwork' ); ?></option>
        <option value="yes" <?php selected( $value, 'yes' ); ?>>
          <?php esc_html_e( 'Yes', 'eatatwork' ); ?>
        </option>
        <option value="elnose" <?php selected( $value, 'no' ); ?>>
          <?php esc_html_e( 'No', 'eatatwork' ); ?>
        </option>
    </select>
    <?php
  }

  public function save_post_meta_data( $post_id ) {
    /**
     * When the post is saved or updated we get $_POST available
     * Chec if the current user is authorized
     */
    if ( current_user_can( 'edit_post', $post_id )) {
      return;
    }

    /**
     * Check if the nonce value we received is the save we created
     */
    if ( !isset( $_POST['hide_title_meta_box_nonce_field'] ) ||
      !wp_verify_nonce( 'hide_title_meta_box_nonce_field', plugin_basename(__FILE__) )
    ) {
      return;
    }

    if ( array_key_exists( 'eatatwork_hide_title_field', $_POST ) ) {
      update_post_meta(
        $post_id,
        '_hide_page_title',
        $_POST['eatatwork_hide_title_field']
      );
    }
  }
}