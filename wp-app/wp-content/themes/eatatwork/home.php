<?php
/**
 * Blog templage file
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
          ?>
          <div class="row">
            <?php 
              $index = 0;
              $no_of_cols = 3;
              while ( have_posts() ) : the_post();
                if ( $index % $no_of_cols === 0) {
                  ?>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                  <?php
                }

                get_template_part( 'partials/posts/preview' );

                $index++;
                if ( $index !== 0  && $index % $no_of_cols === 0 ) {
                  ?>
                  </div>
                  <?php
                }
              endwhile;
            ?>
          </div>
        </div>
        <?php
      else :
        get_template_part( 'partials/posts/none' );
      endif;

      eatatwork_pagination();
     ?>
  </main>
</div>
  
<?php 
  
  get_footer();