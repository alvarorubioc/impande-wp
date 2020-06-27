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

	<footer id="colophon" class="site-footer bg-primary">

		<div class="container">
			<div class="row mt-2 mb-2">
				<div class="col-xs-12 col-md-3 pt-2">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer-Logo')) : ?>
					<?php endif; ?>
					<div>
						<ul class="social">
							<li><a href="" rel="nofollow">FB</a></li>
							<li><a href="" rel="nofollow">FB</a></li>
							<li><a href="" rel="nofollow">FB</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-md-4 pt-2">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer-1')) : ?>
					<?php endif; ?>
				</div>
				<div class="col-xs-12 col-md-5 pt-2">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer-2')) : ?>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="site-info bg-primary-dark dflex center-xs">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Desarrollado por: &nbsp; %2$s.' ), 'impande', '<a href="https://www.alvarorubioc.com">Alvaro Rubioc</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
