<?php
/**
 * Footer navigation partial
 * 
 * @package Eatat.work
 */

$menu_class = \EATATWORK_THEME\Inc\Menus::get_instance();
$footer_menu_id = $menu_class->get_menu_id( 'eatat-work-footer-menu' );

$footer_menus = wp_get_nav_menu_items( $footer_menu_id );
?>

<nav>
  <?php
    if ( !empty($footer_menus ) && is_array( $footer_menus )) {
      ?>
      <ul class="nav flex-column">
        <?php
          foreach( $footer_menus as $menu_item ) {
            if ( !$menu_item->menu_item_parent ) {
              ?>
                <li class="nav-item">
                  <a class="nav-link p-0 mb-2" aria-current="page" href="<?php echo esc_url( $menu_item->url ); ?>">
                    <?php echo esc_html( $menu_item->title ); ?>
                  </a>
                </li>
              <?php
            }
          }
        ?>
      </ul>
      <?php
    }
  ?>
</nav>