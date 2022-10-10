<?php
/**
 * * Template Name: Full Width Page
 *
 * @package blockhaus
 */

get_header();
?>

	<main  id="primary" class="main-content lg:pb-20 mt-16 mb-4 md:mt-12 md:mb-12">

		<?php
		while ( have_posts() ) :
			the_post();
		

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
