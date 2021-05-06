<section class="bg-curvas-nivel" id="latest-post">
    <div class="container">
        <div class="row pt-5 pb-4">
            <div class="col-xs-12 col-md-4">
                <p class="text-caption">Blog de Impande Guías</p>
                <h2>Reseñas de barrancos, croquis de escala, material…</h2>
                <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
            </div>
            <?php
            $args = array(
                'post_type' => 'post',
				'posts_per_page' => 2,
				'orderby' => 'date',
                'order'   => 'DESC',
                'post__not_in' => get_option( 'sticky_posts' ),
            );
            // The Query
            $the_query = new WP_Query( $args );
            
            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    ?>
                    <div class="col-xs-12 col-md-4">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="card">  
                                <div class="card-image">
                                    <?php impande_post_thumbnail('img-card'); ?>
                                </div>
                                <div class="card-content">
                                    <?php impande_posted_in(); ?>
                                    <?php impande_posted_on(); ?>
                                    <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <h3 class="mt-1"><?php the_title(); ?></h3>
                                    </a>
                                </div> 
                            </div>
                        </article>
                    </div>
            <?php }
            /* Restore original Post Data */
            wp_reset_postdata(); } ?>
        </div>
    </div>
</section>