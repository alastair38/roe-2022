<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

get_header();

$header_image = get_field(get_post_type() . '_header', 'options');
$post_type_obj = get_post_type_object( $post_type );

?>

	<!-- <main id="primary" class="pt-20 lg:p-6 bg-primary-default my-12 rounded-md w-11/12 md:w-3/4 mx-auto grid-cols-1 md:grid-cols-3 gap-6"> -->
	<main class="space-y-6 p-6 w-11/12 lg:w-3/4 bg-primary-default rounded-md shadow-md mx-auto mt-32 mb-20 lg:mt-12 lg:mb-12">

			<!-- <header class="col-span-full"> -->

	
	<header class="entry-header p-6 bg-offset flex items-center relative overflow-hidden justify-between">

		<?php 
		

		the_archive_title( '<h1 class="page-title z-0 w-fit has-gigantic-font-size text-primary-default font-black leading-tight">', '</h1>' );
	
	?>

<?php 
	if($header_image):
	?>
	
	<img class="hidden md:inline-block h-40 rounded-md" src="<?php echo $header_image['url'];?>" alt="<?php echo $header_image['alt'];?>">

	<?php endif; 
	?>
		</header><!-- .page-header -->

			<?php echo blockhaus_custom_form("Search " . $post_type_obj->labels->name . " ..."); ?>

			<div class="grid w-full grid-cols-1 md:grid-cols-3 gap-6">
				
			<?php $description = get_field(get_post_type() . '_page_description', "options");

			if($description):?>

			<p class="col-span-full"><?php echo $description;?></p>

			<?php endif;
			
			
			?>

			<?php if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation(
				array(
						'prev_text' => __('<span aria-hidden="true" class="nav-subtitle font-bold bg-offset p-1 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						<path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
					</svg></span> <span class="ml-2">Older Content</span>', 'theme_textdomain'),
						'next_text' => __('<span class="mr-2">Newer Content</span> <span aria-hidden="true" class="nav-subtitle font-bold bg-offset p-1 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
					</svg></span>', 'theme_textdomain'),
						'screen_reader_text' => __('Posts navigation', 'theme_textdomain')
				)
			);

			else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</div>

	</main><!-- #main -->

<?php
get_footer();
