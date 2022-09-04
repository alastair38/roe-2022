<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package blockhaus
 */

get_header();
?>

	<main id="primary" class="site-main lg:pb-20">

		<?php
		while ( have_posts() ) :
			the_post();

			// get_template_part( 'template-parts/content', 'page' );
			get_template_part( 'template-parts/content', 'single');

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
