<?php
/**
 * Content meta partial
 * 
 * @package Eatat.work
 */

eatatwork_posted_on();
eatatwork_posted_by();

if ( is_single() ) {
  $the_post_id = get_the_ID();
  $article_terms = wp_get_post_terms( $the_post_id, [ 'category', 'post_tag' ]);

  if ( !empty( $article_terms ) && is_array( $article_terms )) {
    foreach( $article_terms as $key => $article_term ) {
      ?>
        <button class="btn border border-secondary mb-2 mr-2">
          <a href="<?php echo esc_url( get_term_link( $article_term )); ?>">
            <?php echo esc_html( $article_term->name ) ?>
          </a>
        </button>
      <?php
    }
  }
}
?>