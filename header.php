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
	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.jpg">
    <link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.jpg">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171066482-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-171066482-1');
	</script>
	<meta name="google-site-verification" content="1lZcRcmE5qUtcXvqUaUV98-TwVCam-IqvxLp3AqF3nU" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'impande' ); ?></a>

	
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

	<div id="masthead" class="nav-container">
		<header class="masterhead-container">
			<div class="site-branding">
				<?php
				the_custom_logo();
				?>
			</div><!-- .site-branding -->	
			
			
				<div class="menu-container">     
					<button class="menu-button"><?php _e('Menu','impande'); ?></button>
					<div id="site-header-menu" class="site-header-menu">
						<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e('Primary Menu', 'ths'); ?>">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'primary',
							'depth'          => 3,
							'container'      => false,
							'has_dropdown'   => true,
							));
						?>
						</nav>
					</div>
				</div>
			
		</header><!-- .site-header -->
	</div>