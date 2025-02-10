<?php
/**
 * * Template Name: Home Page Template
 *
 * @package blockhaus
 */

get_header();
?>

	<main id="primary" class="main-content mx-auto mt-28 mb-20 lg:mt-12 lg:mb-12">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'home' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
