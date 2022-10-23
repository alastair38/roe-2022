<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

<article id="post-<?php the_ID(); ?>" class="w-11/12 lg:w-3/4 space-y-6 p-6 bg-primary-default rounded-md shadow-md mx-auto overflow-hidden">
	<header class="entry-header bg-offset p-6 bg-graindots flex items-center relative overflow-hidden justify-between">

		
		<?php the_title( '<h1 class="text-xl md:text-gigantic font-black font-sans">', '</h1>' ); ?>
		<?php blockhaus_post_thumbnail('profile'); ?>
		
	</header><!-- .entry-header -->

	

	<div class="space-y-6">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blockhaus' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
