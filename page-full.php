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
			
			get_template_part( 'template-parts/content', 'full' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
