<?php 

function cv_assets() {
	wp_enqueue_style( 'cv-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', array(), time(), 'all' );
	wp_enqueue_script( 'cv-wow', get_template_directory_uri() . '/src/assets/js/vendor/wow.js', array('jquery'), time(), true);
	wp_enqueue_script( 'cv-webfontloader', get_template_directory_uri() . '/src/assets/js/vendor/webfontloader.js', array('jquery'), time(), true);
	wp_enqueue_script( 'cv-scripts', get_template_directory_uri() . '/dist/assets/js/bundle.js', array('jquery'), time(), true);
	wp_enqueue_script( 'cv-navigation', get_template_directory_uri() . '/js/navigation.js', array(), time(), true );

	wp_enqueue_script( 'cv-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), time(), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action('wp_enqueue_scripts','cv_assets');


function cv_admin_assets() {
	wp_enqueue_style( 'cv-admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/admin.css', array(), time(), 'all' );

	wp_enqueue_script( 'cv-admin-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', array(), time(), true);
}

add_action('admin_enqueue_scripts','cv_admin_assets');