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
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
    );
    
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'impande' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'impande' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
    );
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'impande' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'impande' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'impande_widgets_init' );