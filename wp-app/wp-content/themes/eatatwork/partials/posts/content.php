<?php
/**
 * Content post partial
 * To be used inside wordpress loop
 * 
 * @package Eatat.work
 */

$the_post_id = get_the_ID();
$hide_title = get_post_meta( $the_post_id, '_hide_page_title', true );
$heading_class = !empty( $hide_title ) && $hide_title === 'yes' ? 'hide' : '';

if ( is_single() || is_page() ) {
  printf(
    '<h3 class="page-title text-dard %1$s">%2$s</h3>',
    esc_attr( $heading_class ),
    wp_kses_post( get_the_title() )
  );
} else {
  printf(
    '<h3 class="article-title text-dard %1$s">%2$s</h3>',
    esc_attr( $heading_class ),
    wp_kses_post( get_the_title() )
  );
}

if ( is_single() ) {
  the_content(
    sprintf(
      wp_kses(
        __( 'Continue reading %s <span class="meta-nav">&aar;</span>', 'eatatwork' ),
        [
          'span' => [
            'class' => []
          ]
        ]
      ),
      the_title( '<span class="screen-reader-text">"', '"</span>', false )
    )
  );
} else {
  eatatwork_the_excerpt( 100 );
}

?>