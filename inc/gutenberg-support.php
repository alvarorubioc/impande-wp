<?php

// Adds support for editor color palette.
add_theme_support( 'editor-color-palette', array(
	array(
		'name'  => __( 'Primary', 'impande' ),
		'slug'  => 'primary',
		'color'	=> '#1C4F4B',
	),
	array(
		'name'  => __( 'Secondary', 'impande' ),
		'slug'  => 'secondary',
		'color' => '#F3993A',
	),
	array(
		'name'  => __( 'Ligth', 'impande' ),
		'slug'  => 'ligth',
		'color' => '#F4F4F4',
       ),
    array(
		'name'  => __( 'Dark', 'impande' ),
		'slug'  => 'dark',
		'color' => '#133633',
       ),
	array(
		'name'  => __( 'White', 'impande' ),
		'slug'  => 'white',
		'color' => '#FFFFFF',
    ),   
) );

// Disables custom colors in block color palette.
add_theme_support( 'disable-custom-colors' );
add_theme_support( 'disable-custom-gradients' );

// Add support for Block Styles.
add_theme_support( 'wp-block-styles' );

// Add support for full and wide align images.
add_theme_support( 'align-wide' );

// Add support for editor styles.
add_theme_support( 'editor-styles' );

// Enqueue editor styles.
add_editor_style( 'style-editor.css' );


// Add custom block slider for activities
function kd_acf_init() {
	if(function_exists('acf_register_block')) {
		acf_register_block(array(
			'name' => 'activities',
			'title' => __('Actividades', 'impande'),
			'description' => __('Slider Activiades destacadas', 'impande'),
			'render_callback' => 'acf_block_callback',
			'category' => 'design',
			'icon' => 'grid-view',
			'mode' => 'auto',
			'keywords' => array('actividades', 'slider', 'acf'),
		));
	}
}
add_action('acf/init', 'kd_acf_init');

function acf_block_callback($block) {
	// convert name ("acf/programs") into path friendly slug ("programs")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if( file_exists(STYLESHEETPATH . "/template-parts/blocks/block-{$slug}.php") ) {
		include( STYLESHEETPATH . "/template-parts/blocks/block-{$slug}.php" );
	}
}

