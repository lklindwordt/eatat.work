<?php
/**
 * Page template
 * 
 * @package Eatat.work
 */

  get_header();
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile;
			?>

		</main>
	</div>

<?php 
  get_footer();