<?php $get_image_url = wp_get_attachment_url( get_post_thumbnail_id() );?>
<div class="bg-hero"> 
    <section id="hero" class="bg-primary" style="background-image: url('<?php echo $get_image_url;?>')">
        <div class="container">
            <div class="row center-xs middle-xs">
                <div class="col-xs-12">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </div>
                <div class="col-xs-12 col-md-8 entry-exceprt pb-1">
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <div class="">
                <?php echo do_shortcode( '[contact-form-7 id="31" title="Formulario de contacto 1"]' ); ?>
            <div>    
        </div>
    </section>
</div>