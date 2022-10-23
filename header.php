<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blockhaus
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page-blockhaus" class="h-full flex flex-col">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blockhaus' ); ?></a>

	<header id="masthead" class="bg-primary-default fixed top-0 left-0 right-0 px-2 lg:flex-row lg:relative flex justify-between items-center border-b-4 border-offset">
		<div class="flex justify-center items-center gap-0 lg:mr-6 lg:gap-2 w-full lg:w-auto">

   <img class="h-12" src="/wp-content/themes/roe-2022/assets/images/logo/logo.png" alt="Graphic showing a tree-lined city skyline">
				<span class="text-base mx-auto text-center lg:text-left lg:text-xl font-black uppercase"><a class="block w-max" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
			
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation flex overflow-y-auto gap-0 lg:gap-6 items-center h-12 md:px-6 lg:overflow-x-auto lg:overflow-y-hidden">
		
			<button class="menu-toggle text-sm flex items-center gap-1 font-sans lg:hidden font-bold uppercase bg-white px-2 shadow-md rounded-full" aria-controls="primary-menu" aria-expanded="false"><span id="mobile-menu-text"><?php esc_html_e( 'Menu', 'blockhaus' ); ?></span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
</svg></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'		 => 'overflow-auto flex flex-col text-2xl lg:text-base lg:h-12 lg:flex-row absolute lg:relative left-0 right-0 top-0 -z-10 lg:z-0 bg-primary-default -translate-y-full lg:translate-y-0 invisible lg:visible gap-4 lg:gap-4 h-screen justify-center items-center ml-auto ease-in-out duration-200'
				)
			);
			?>
		
		</nav><!-- #site-navigation -->

    
<?php if( is_user_logged_in() ) {

echo '<div class="flex flex-col fixed bottom-4 right-4 w-fit gap-2 z-50 items-center justify-center">';

  blockhaus_post_edit_link();
  
  blockhaus_admin_link();

  blockhaus_logout_link();

echo '</div>';
}?>
	</header><!-- #masthead -->
