<?php
/**
 * Post preview partial
 * 
 * @package Eatat.work
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?>>
  <?php
    get_template_part( 'partials/posts/header' );
  ?>
  
  <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="card-body">
  
  <?php
    get_template_part( 'partials/posts/content' );
  ?>
  
  </a>

  <?php 
    get_template_part( 'partials/posts/footer' );
  ?>
</article>