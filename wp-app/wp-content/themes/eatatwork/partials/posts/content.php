<?php
/**
 * Content post partial
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

eatatwork_posted_on();
?>