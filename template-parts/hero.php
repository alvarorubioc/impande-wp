<section id="hero" class="bg-primary pb-4">
    <div class="container">
        <div class="row middle-xs">
            <div class="col-xs-12 col-md-7">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <p><?php the_excerpt(); ?></p>
            </div>
            <div class="col-xs-12 col-md-5">
                <?php impande_post_thumbnail(); ?>
            </div>
        </div>   
    </div>
    <a href="#content-page" class="btn-scroll-down">
        <span></span>
    </a>
</section>