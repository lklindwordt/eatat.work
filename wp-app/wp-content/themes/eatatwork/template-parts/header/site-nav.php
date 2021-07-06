<?php
/**
 * Header Navigation partial
 * 
 * @package Eatat.work
 */

$menu_class = \EATATWORK_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id( 'eatat-work-header-menu' );

$header_menus = wp_get_nav_menu_items( $header_menu_id );

?>

<div id="nav-trigger" class="nav-trigger open">
  <span class="line"></span>
  <span class="line"></span>
  <span class="line"></span>
</div>

<div id="nav-layer" class="overlay hide">
  <div class="d-flex justify-content-center p-4">
    <img src="/wp-content/themes/eatatwork/assets/build/src/img/bkr-unterwegs-logo.png">
  </div>
  <?php
    if ( !empty($header_menus ) && is_array( $header_menus )) {
      ?>
      <nav class="nav flex-column">
        <?php
          foreach( $header_menus as $menu_item ) {
            if ( !$menu_item->menu_item_parent ) {
              ?>
                <a class="nav-link" href="<?php echo esc_url( $menu_item->url ); ?>">
                  <?php echo esc_html( $menu_item->title ); ?>
                </a>
              <?php
            }
          }
        ?>
      </nav>
      <?php
    }
  ?>
</div>