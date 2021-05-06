<div id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
	
	<div class="card-image">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('img-card'); ?></a>
	</div>
		
	<div class="card-content">
		<?php $terms = get_the_terms( $post->ID , 'category-activities' ); 
			if  ($terms) {
				foreach ( $terms as $term ) {
				echo '<div class="text-caption">' . $term->name . '</div>';
				}
			}
		?>
		<h2 class="text-h4"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	</div>
	
	<div class="card-footer dflex between-xs ">
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

</div><!-- /card -->
	