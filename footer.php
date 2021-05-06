<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Impande
 */

?>

	<footer id="colophon" class="site-footer bg-primary-dark">

		<div class="container">
			<div class="row mt-2 mb-2">
				<div class="col-xs-12 col-md-3 pt-2 center-xs start-md">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer-Logo')) : ?>
					<?php endif; ?>
					<div class="center-xs start-md">
						<ul class="social">
							<li>
								<a href="https://www.facebook.com/impandeguias/" rel="nofollow">
								<svg class="icon" width="24" height="24" viewBox="0 0 24 24">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#facebook-f" />
								</svg>
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/impande_guias/" rel="nofollow">
								<svg class="icon" width="24" height="24" viewBox="0 0 24 24">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#instagram" />
								</svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-md-3 pt-2">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer-1')) : ?>
					<?php endif; ?>
				</div>
				<div class="col-xs-12 col-md-3 pt-2">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer-2')) : ?>
					<?php endif; ?>
				</div>
				<div class="col-xs-12 col-md-3 pt-2">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer-3')) : ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="site-info bg-primary dflex center-xs">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Desarrollado por: &nbsp; %2$s.' ), 'impande', '<a href="https://www.alvarorubioc.com">Alvaro Rubioc</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
