<?php
/**
 * Header post partial
 * 
 * @package Eatat.work
 */

$the_post_id = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail( $the_post_id );

if ( $has_post_thumbnail ) {
  ?>
  <a class="card-img-top" href="<?php esc_url( get_permalink() ); ?>">
    <?php
      the_post_custom_thumbnail(
        $the_post_id,
        'featured-large',
        [
          'class' => 'card-img-top',
          'sizes' => '(max-width: 350px) 350px, 233px',
        ]
      );
    ?>
  </a>
  <?php
}
?>

