<?php
/**
 * Main templage file
 * 
 * @package Eatat.work
 */

  get_header();

  while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content/content');

	endwhile;
 
  get_footer();