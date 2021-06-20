<?php
/**
 * Post show partial
 * 
 * @package Eatat.work
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?>>
  <header>
    <?php get_template_part( 'partials/posts/header' ); ?>
  </header>
  <section>
    <?php get_template_part( 'partials/posts/content' ); ?>
  <section>
</article>