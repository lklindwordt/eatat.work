<?php
/**
 * Header post partial
 * 
 * @package Eatat.work
 */

$the_post_id = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail( $the_post_id );

if ( $has_post_thumbnail ) {
  if ( is_single() ) {
    // the_post_custom_thumbnail(
    //   $the_post_id,
    //   'featured-full',
    //   [
    //     'class' => 'card-img-top attachment-featured-full size-featured-image',
    //     'sizes' => '(max-width: 1296px) 1296px, auto',
    //   ]
    // );
  } else {
    ?>
    <a class="card-img-top" href="<?php echo esc_url( get_the_permalink( $the_post_id ) ); ?>">
      <?php
        the_post_custom_thumbnail(
          $the_post_id,
          'featured-thumbnail',
          [
            'class' => 'card-img-top attachment-featured-thumbnail size-featured-image',
            'sizes' => '(max-width: 414px) 414px, 276px',
          ]
        );
      ?>
    </a>
    <?php
  }
}
?>

