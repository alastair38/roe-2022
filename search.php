<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package blockhaus
 */

get_header();
?>

<main class="space-y-6 p-6 w-11/12 md:w-3/4 bg-primary-default rounded-md shadow-md mx-auto mt-16 mb-4 md:mt-12 md:mb-12">

		<?php if ( have_posts() ) : 
	
		$header_image = get_field('search_header', 'options');
				
		?>



<!-- <header class="col-span-full"> -->


<header class="entry-header p-6 bg-offset bg-graindots flex items-center relative overflow-hidden justify-between">

	<h1 class="text-lg md:text-gigantic px-6 font-black">
	<?php
	/* translators: %s: search query. */
	printf( esc_html__( 'Search Results for: %s', 'blockhaus' ), '<span class="underline decoration-accent-secondary decoration-4">' . get_search_query() . '</span>' );
	?>
</h1>

<?php 
				if($header_image):
				?>
				<img class="hidden md:inline-block h-40 rounded-md" src="<?php echo $header_image['url'];?>" alt="<?php echo $header_image['alt'];?>">

				<?php endif; ?>
	</header><!-- .page-header -->

	<div class="grid w-full grid-cols-1 md:grid-cols-3 gap-6">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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
