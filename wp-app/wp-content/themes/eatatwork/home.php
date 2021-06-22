<?php
/**
 * Blog templage file
 * 
 * @package Eatat.work
 */

  get_header();

  ?>

<header class="entry-header">
  <div class="entry-header-img mb-4">
    <img width="1150" height="767" src="http://127.0.0.1/wp-content/uploads/2021/06/BKR_Truck_DWP2544-1152w.png" class="card-img-top attachment-featured-full size-featured-image" alt="" loading="lazy" sizes="(max-width: 1296px) 1296px, auto" srcset="http://127.0.0.1/wp-content/uploads/2021/06/BKR_Truck_DWP2544-1152w.png 1150w, http://127.0.0.1/wp-content/uploads/2021/06/BKR_Truck_DWP2544-1152w-300x200.png 300w, http://127.0.0.1/wp-content/uploads/2021/06/BKR_Truck_DWP2544-1152w-1024x683.png 1024w, http://127.0.0.1/wp-content/uploads/2021/06/BKR_Truck_DWP2544-1152w-768x512.png 768w">
  </div>
  <div class="container">
    <h1 class="entry-title default-max-width"><?php echo single_post_title(); ?></h1>
  </div>

</header><!-- .entry-header -->

<?php

  if ( have_posts() ) :
    
    ?>
    <div class="container">
      <div class="row">
        <?php 
          while ( have_posts() ) : the_post();
            ?>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
              <?php get_template_part( 'partials/posts/preview' ); ?>
            </div>

            <?php
          endwhile;
        ?>
      </div>
    </div>
    <?php
  else :
    get_template_part( 'partials/posts/none' );
  endif;

  eatatwork_pagination();
  
  get_footer();