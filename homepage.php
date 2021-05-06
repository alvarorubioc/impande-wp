<?php
/**
 * The template for displaying frontpage
 * 
 * Template name: Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Impande
 */

get_header();
?>
	
	<?php get_template_part( 'template-parts/hero', 'home' ); ?>

	<main id="primary" class="site-main">

		<?php		
		//get_template_part( 'template-parts/section/advantage' );
		//get_template_part( 'template-parts/activities-tabs' );

		while ( have_posts() ) :
			the_post();

            get_template_part( 'template-parts/content','page' );

		endwhile; // End of the loop.

		get_template_part( 'template-parts/testimonials' );
		get_template_part( 'template-parts/cta' );
		get_template_part( 'template-parts/blog' );	

		?>

	</main><!-- #main -->
	
<?php
get_footer();
