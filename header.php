<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bistro
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bistro' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="site-navbar">
			<nav class="site-navigation">
				<div class="container">
					<div class="row between">
						<button class="btn menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<span class="screen-reader-text"><?php esc_html_e( 'Primary Menu', 'bistro' ); ?></span>
						</button>
						<?php
							wp_nav_menu( array(
								'theme_location' => 'site-navigation',
								'container'			 => 'false',
								'menu_id'        => 'primary-menu',
								'menu_class'		 => 'nav-menu',
							) );
						?>
					</div><!-- .row -->
				</div><!-- .container -->
			</nav><!-- .site-navigation -->
		</div><!-- .site-navbar -->

		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
