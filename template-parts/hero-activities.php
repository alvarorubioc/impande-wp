<section id="hero" class="bg-primary pb-4">

    <?php if(is_post_type_archive('products')) : ?>
        
    
    <?php elseif (is_tax('category-activities')) :?>

        <?php // get the current taxonomy term
            $tax = get_queried_object();
            // vars
            $image = get_field('image_category_activities', $tax);
            $title = get_field('title_category_activities', $tax);
        ?>

        <div class="container pt-3 pb-3">
            <div class="row middle-xs">
                <div class="col-xs-12 col-md-7">
                <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
                    <?php
                        if ($title) {
                            echo '<h1>' .$title. '</h1>';
                        }
                        else
                        echo '<h1>', single_cat_title(),'</h1>';
                    ?>
                    <?php the_archive_description() ;?>
                </div>
                <div class="col-xs-12 col-md-5">
                    <div class="post-thumbnail pt-2">
                        <img src="<?php echo $image; ?>" alt="<?php echo single_cat_title(); ?>">
                    </div>
                </div>
            </div>   
        </div>
        <a href="#primary" class="btn-scroll-down">
            <span></span>
        </a>

    <?php else : ?>
        <div class="container pt-3 pb-3">
            <div class="row">
                <div class="col-xs-12 col-md-7">
                    <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
                    <h1><?php the_title();?></h1>
                    <p><?php the_excerpt(); ?></p>

                    <div class="dflex">
                        <div class="dflex middle-xs">
                            <svg class="icon" width="24" height="24" viewBox="0 0 24 24">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#clock-01" />
                            </svg>
                            <span><?php the_field('duracion_actividad');?></span>
                        </div>

                        <div class="dflex middle-xs">
                            <svg class="icon" width="24" height="24" viewBox="0 0 24 24">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#clock" />
                            </svg>
                            <span><?php the_field('dificultad_actividad');?></span>
                        </div>
                        
                        <div class="dflex middle-xs">
                            <svg class="icon" width="24" height="24" viewBox="0 0 24 24">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#clock" />
                            </svg>
                            <span><?php the_field('precio_actividad');?>€</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-5">
                    <div class="cta-form">
                        <?php echo do_shortcode('[contact-form-7 id="24" title="Formulario Actividad"]'); ?>
                    </div>
                </div>
            </div>   
        </div>
    <?php endif; ?>
</section>