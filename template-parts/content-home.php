<?php
/**
 * Template part for displaying page content in page-home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

<div id="post-<?php the_ID(); ?>" class="w-11/12 mx-auto grid grid-cols-sidebar" style="background-image: url('https://staging3.jennyjroe.com/wp-content/uploads/2022/10/COVER-IMAGE_210301.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
	<header class="entry-header screen-reader-text">
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="space-y-12">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->
	<aside></aside>

</div><!-- #post-<?php the_ID(); ?> -->
