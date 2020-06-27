<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Impande
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'impande' ); ?></a>

	<header id="masthead" class="site-header">
		<div id="top-bar" class="bg-primary">
			<div class="container-fluid">
				<div class="row between-xs">
					<div class="col-xs-12 col-sm-6 center-xs start-sm">
						<span class="site-description"><?php bloginfo( 'description' ); ?></span>
					</div>
					<div class="col-xs-12 col-sm-6 center-xs end-sm">
						<a class="top-bar__telf" href="tel:+34656946565">+34 656 94 65 65</a>
						<a href="mailto:info@impandeguias.com">info@impandeguias.com</a>
					</div>
				</div>
			</div>	
		</div> 
		
		<div class="site-branding dflex center-xs">
			<?php the_custom_logo(); ?>
		</div><!-- .site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'impande' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav> #site-navigation -->
	</header><!-- #masthead -->
