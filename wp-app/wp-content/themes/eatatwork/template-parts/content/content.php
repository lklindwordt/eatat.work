<?php
/**
 * Content partial
 * 
 * @package Eatat.work
 */

$the_post_id = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail( $the_post_id );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <div class="entry-header-img mb-4">
      <?php
        if ( $has_post_thumbnail ) {
          echo "Thumbnail";
        } else {
          ?>
            <img width="1150" height="767" src="http://127.0.0.1/wp-content/uploads/2021/06/BKR_Truck_DWP2544-1152w.png" class="card-img-top attachment-featured-full size-featured-image" alt="" loading="lazy" sizes="(max-width: 1296px) 1296px, auto" srcset="http://127.0.0.1/wp-content/uploads/2021/06/BKR_Truck_DWP2544-1152w.png 1150w, http://127.0.0.1/wp-content/uploads/2021/06/BKR_Truck_DWP2544-1152w-300x200.png 300w, http://127.0.0.1/wp-content/uploads/2021/06/BKR_Truck_DWP2544-1152w-1024x683.png 1024w, http://127.0.0.1/wp-content/uploads/2021/06/BKR_Truck_DWP2544-1152w-768x512.png 768w">
          <?php
        }
      ?>
    </div>
    <div class="container">
      <?php if ( is_singular() ) : ?>
        <?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
      <?php else : ?>
        <?php the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
      <?php endif; ?>
    </div>

	</header><!-- .entry-header -->

  <div class="entry-content container">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);

		?>
	</div><!-- .entry-content -->
</article>