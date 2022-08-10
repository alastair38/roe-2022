<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blockhaus
 */

?>

<footer id="colophon" class="bg-primary-default space-y-6 p-6">

<div class="flex justify-center">

  <?php echo blockhaus_display_social_profiles();?>	

</div>	
<p class="flex justify-center">
		<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html_e( bloginfo('name') . ' &copy; ' . date("Y") , 'Blockhaus' ), 'Blockhaus' );
				?>
</p>


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
