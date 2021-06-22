<?php
/**
 * Content meta partial
 * 
 * @package Eatat.work
 */

 if ( is_page()) {
   return;
 }

?>

<div class="container d-flex align-items-center mb-2">
  <div class="posted flex-grow-1">
    <?php
      eatatwork_posted_on();
      eatatwork_posted_by();
    ?>
  </div>

  <?php
    if ( is_single() ) {
      $the_post_id = get_the_ID();
      $article_terms = wp_get_post_terms( $the_post_id, [ 'category', 'post_tag' ]);

      if ( !empty( $article_terms ) && is_array( $article_terms )) {
        foreach( $article_terms as $key => $article_term ) {
          ?>
            <div class="m-1">
              <a href="<?php echo esc_url( get_term_link( $article_term )); ?>" type="button" class="btn btn-outline-primary btn-sm btn-round">
                <?php echo esc_html( $article_term->name ) ?>
              </a>
            </div>
          <?php
        }
      }
    }
  ?>

</div>