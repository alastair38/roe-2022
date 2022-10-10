<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

<div id="post-<?php the_ID(); ?>" class="w-11/12 mx-auto grid grid-cols-sidebar" style="background-image: url('http://jennyjroe.local/wp-content/uploads/2022/09/COVER-IMAGE_210301.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
	<header class="entry-header screen-reader-text">
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div>
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
	<aside ></aside>

</div><!-- #post-<?php the_ID(); ?> -->
