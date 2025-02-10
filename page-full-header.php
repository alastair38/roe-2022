<?php
/**
 * * Template Name: Full Width Header
 *
 * @package blockhaus
 */

get_header();
?>

	<main id="primary" class="main-content mx-auto lg:pb-20">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'full-header' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
