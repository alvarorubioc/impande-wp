<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function impande_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'impande' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'impande' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
    );
    
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Logo', 'impande' ),
			'id'            => 'footer-logo',
			'description'   => esc_html__( 'Add widgets here.', 'impande' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
    );
    
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'impande' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'impande' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title text-caption">',
			'after_title'   => '</div>',
		)
    );
    
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'impande' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'impande' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title text-caption">',
			'after_title'   => '</div>',
		)
    );
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'impande' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'impande' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title text-caption">',
			'after_title'   => '</div>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Texto CTA', 'impande' ),
			'id'            => 'text-cta',
			'description'   => esc_html__( 'Add widgets here.', 'impande' ),
			'before_widget' => '<div id="%1$s" class="mb-4 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Form CTA', 'impande' ),
			'id'            => 'form-cta',
			'description'   => esc_html__( 'Add widgets here.', 'impande' ),
			'before_widget' => '<div id="%1$s" class="widget cta-form %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<p class="text-h3" class="widget-title"><strong>',
			'after_title'   => '</strong></p>',
		)
	);
}
add_action( 'widgets_init', 'impande_widgets_init' );