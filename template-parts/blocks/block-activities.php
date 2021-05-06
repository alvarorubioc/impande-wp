<?php
/**
 * Block Name: Programs
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

global $post;
$posts = get_field('featured_activities');

if($posts) :

?>
	<div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach($posts as $post) : setup_postdata($post);
            
                echo '<div class="swiper-slide">';
                    get_template_part( 'template-parts/card', get_post_type() );
                echo '</div>';
            
            endforeach; wp_reset_postdata(); ?>
	    </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            
        <!-- Add Pagination --> 
        <div class="swiper-pagination"></div> 
    </div>

<?php endif; ?>

<!-- Swiper JS -->
<script src="<?php echo get_template_directory_uri() . '/assets/js/swiper-bundle.min.js'?>"></script>

<!-- Initialize Swiper -->
<script>
	var swiper = new Swiper('.swiper-container', {
	slidesPerView: 1,
	spaceBetween: 30,
	navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
		dynamicBullets: true,
	},
	breakpoints: {
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      }
	});
</script>