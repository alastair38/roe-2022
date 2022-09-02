<?php
/**
 * Template part for displaying page content in page-home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

<div class="w-full" id="post-<?php the_ID(); ?>">
	<header class="entry-header screen-reader-text">
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="space-y-12">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->

</div><!-- #post-<?php the_ID(); ?> -->