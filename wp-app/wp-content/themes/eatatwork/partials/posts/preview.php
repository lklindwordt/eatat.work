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
    get_template_part( 'partials/posts/meta' );
    get_template_part( 'partials/posts/content' );
    get_template_part( 'partials/posts/footer' );
  ?>
</article>