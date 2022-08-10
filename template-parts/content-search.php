<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

$post_type = get_post_type();
$post_type_obj = get_post_type_object( $post_type );

?>

<article id="post-<?php the_ID(); ?>" class="p-6 bg-primary-default border border-neutral-light-500 flex flex-col gap-6 rounded-md shadow-md">
<?php if('post' === get_post_type()):
blockhaus_post_thumbnail('landscape'); 
endif;?>
	<header class="entry-header">

		<?php the_title(sprintf( '<h2 class="has-large-font-size">', '%s' ), '</h2>');
 		?>

		<div class="entry-meta flex gap-2">
		
			<?php

			if ( 'post' === get_post_type() ) :
				blockhaus_posted_on();
			endif; ?>


		</div><!-- .entry-meta -->
		
	</header><!-- .entry-header -->

	
		<?php $external_site = get_field('source');

if($external_site && ('resources' === get_post_type()) ):?>
<p class="py-3 inline-flex text-sm italic"><?php echo 'Published in: ' . $external_site;?></p>

<?php endif;

if(('articles' === get_post_type())):
blockhaus_post_thumbnail('medium'); 
endif;?>

	

	<footer class="entry-footer mt-auto">
	<?php


	
	$external_link = get_field('link');

	if($external_link):
	?>

	<a aria-label="View content at <?php echo $external_site;?>" class="py-1 px-4 border border-current inline-flex transition-colors duration-200 rounded-full hover:ring-4 hover:ring-offset focus:ring-4 focus:ring-offset" href="<?php echo esc_url( $external_link );?>" rel="external">View <?php echo $post_type_obj->labels->singular_name;?></a>

	<?php else:?>

	<a class="py-1 px-4 border border-current inline-flex transition-colors duration-200 rounded-full hover:ring-4 hover:ring-offset focus:ring-4 focus:ring-offset" href="<?php echo esc_url( get_permalink() );?>" rel="bookmark">View <?php echo $post_type_obj->labels->singular_name;?></a>

	<?php endif;?>

	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
