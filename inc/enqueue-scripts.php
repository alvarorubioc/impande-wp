<?php

/**
 * Enqueue scripts and styles.
 */
function impande_scripts() {
	wp_enqueue_style( 'impande-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script( 'impande-js', get_template_directory_uri() . '/assets/js/impande.min.js', array( 'jquery' ), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'impande_scripts' );