<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>


	

	<article id="post-<?php the_ID(); ?>" class="space-y-6 p-6 w-11/12 lg:w-3/4 bg-primary-default rounded-md shadow-md mx-auto overflow-hidden">
	
	<header class="entry-header bg-offset p-6 bg-graindots flex items-center relative overflow-hidden justify-between">

		<?php 
		$transparent =  get_field('transparent_image_layout');

		the_title( '<h1 class="page-title z-0 w-fit has-gigantic-font-size font-black leading-tight">', '</h1>' );
	
	?>

<?php blockhaus_post_thumbnail('large'); ?>
		</header><!-- .page-header -->

	

	<div class="space-y-6">
		<?php
		
		if ( ('post' === get_post_type()) || ('articles' === get_post_type())  ) :
			?>
			<div class="entry-meta text-sm italic">
				<?php
				blockhaus_posted_on();
			
				?>
			</div><!-- .entry-meta -->
		<?php endif; 

		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blockhaus' ),
				'after'  => '</div>',
			)
		);


		?>

	

	
	<?php $social_sharing = get_field('sharing_enabled');
	if($social_sharing):
	// if sharing is enabled on the content item, show the social media share buttons
	get_template_part( 'template-parts/content', 'share-buttons' );

	endif;
	
	the_post_navigation(
		array(
			'prev_text' => '<span aria-hidden="true" class="nav-subtitle font-bold bg-offset p-1 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
			<path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
		</svg></span> <span class="nav-title sr-only">%title</span>',
			'next_text' => '<span class="nav-title sr-only">%title</span><span aria-hidden="true" class="nav-subtitle font-bold bg-offset p-1 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
			<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
		</svg></span>',
		)
	);
	
	
	?>
</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
