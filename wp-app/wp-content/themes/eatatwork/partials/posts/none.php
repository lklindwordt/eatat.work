<?php
/**
 * None posts partial
 * 
 * @package Eatat.work
 */

?>

<section class="no-result not-found">
  <h1 class="page-title"><?php esc_html_e( 'Nothing found', 'eatatwork'); ?></h1>

  <div class="page-content">
    <?php
      if ( is_home() && current_user_can( 'publish_posts' )) {
        ?>
        <p>
          <?php
            printf(
              wp_kses(
                __( 'Ready to publish your first post? <a href="%s">Get started here</a>', 'eatatwork' ),
                [
                  'a' => [
                    'href' => []
                  ]
                ]
              ),
              esc_url( admin_url( 'post-new.php' )) 
            );
          ?>
        </p>
        <?php
      } elseif ( is_search() ) {
        ?>
          <p><?php esc_html_e( 'Sorry but nothing matched your search item. Please try again with some diffrent keywords.', 'eatatwork' ); ?></p>
        <?php
        get_search_form();
      } else {
        ?>
          <p><?php esc_html_e( 'It seems that we cannot find what you are loocking for.', 'eatatwork' ); ?></p>
        <?php
      }
    ?>
  </div>
</section>