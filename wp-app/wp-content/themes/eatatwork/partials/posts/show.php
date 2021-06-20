<?php
/**
 * Post show partial
 * 
 * @package Eatat.work
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?>>
  <?php
    get_template_part( 'partials/posts/header' );

    get_template_part( 'partials/posts/content' );
  ?>
</article>