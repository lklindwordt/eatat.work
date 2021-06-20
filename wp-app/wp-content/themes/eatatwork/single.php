<?php
/**
 * Single post template
 * 
 * @package Eatat.work
 */

  get_header();
?>

<div id="primary">
  <main id="main" class="site-main mt-5" role="main">
    <?php
      if ( have_posts() ) :
        ?>
        <div class="container">
          <?php
            if ( is_home() && !is_front_page() ) {
              ?>  
              <div class="mb-5">
                <h1 class="page-title screen-reader-text">
                  <?php single_post_title(); ?>
                </h1>
              </div>
              <?php
            }
     
            while ( have_posts() ) : the_post();
              get_template_part( 'partials/posts/show' );
            endwhile;

            ?>

          <div class="d-flex">
            <div class="prev-link flex-grow-1"><?php previous_post_link(); ?></div>
            <div class="next-link"><?php next_post_link(); ?></div>
          </div>
        </div>

        <?php
      else :
        get_template_part( 'partials/posts/none' );
      endif;
     ?>
  </main>
</div>
  
<?php 
  
  get_footer();