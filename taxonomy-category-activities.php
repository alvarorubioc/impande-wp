<?php
/**
 * The template for displaying all activities CPT
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Impande
 */


get_header();
get_template_part( 'template-parts/hero', 'activities' );
?>

<main id="primary" class="site-main bg-curvas-nivel">
    <div class="container">
        <div class="row pt-4 pb-4">
            <aside class="col-xs-12 col-md-3 bg-primary">
                <div class="pl-1 pt-1 pr-2">
                    <p class="uppercase"><strong><?php esc_html_e( 'Tipo Actividad', 'impande' ); ?></strong></p>
                    <?php echo facetwp_display( 'facet', 'categories' ); ?>
                </div>
                <div class="pl-1 pr-2">
                    <p class="uppercase"><strong><?php esc_html_e( 'Dificultad', 'impande' ); ?></strong></p>
                    <?php echo facetwp_display( 'facet', 'dificultad' ); ?>
                </div>
                <div class="pl-1 pr-2">
                    <p class="uppercase"><strong><?php esc_html_e( 'Precio (€)', 'impande' ); ?></strong></p>
                    <?php echo facetwp_display( 'facet', 'precio' ); ?>
                </div>
                 
            </aside>
            
            <div class="col-xs-12 col-md-9">
                <div class="row">
                    <?php if (have_posts()) : while (have_posts()) : the_post();

                        get_template_part( 'template-parts/loop', 'card' );

                        endwhile;
                        facetwp_display( 'pager' );
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>		
</main><!-- #main -->

<section class="container mt-4 mb-4">
    <?php the_field('content_category_activities', get_queried_object());?>
</section>
<?php get_template_part( 'template-parts/cta' ); ?>
<?php
get_footer();
