<?php
/**
 * * Template Name: Full Width Page
 *
 * @package blockhaus
 */

get_header();
?>

	<main  id="primary" class="main-content lg:pb-20 mt-28 mb-20 lg:mt-12 lg:mb-12">

		<?php
		while ( have_posts() ) :
			the_post();
			
			get_template_part( 'template-parts/content', 'full' );


		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
