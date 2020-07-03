<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Mathe
 * @since Mathe 1.0
 */

get_header();
?>
<p style='display: none;'>Test 2</p>
	<?php

	// Start the Loop.
	while ( have_posts() ) :
		the_post();

		the_content();
		//get_template_part( 'template-parts/content/content', 'single' );

	endwhile; // End the loop.
	?>


<?php
get_footer();
