<?php
/**
 * Enqueue scripts and styles.
 */
function cv_scripts() {
	wp_enqueue_style( 'cv-style', get_stylesheet_uri() );

	wp_enqueue_script( 'cv-navigation', get_template_directory_uri() . '/js/navigation.js', array(), time(), true );

	wp_enqueue_script( 'cv-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), time(), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cv_scripts' );