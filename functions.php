<?php

/**
 * Gets urls for resources relative to the theme directory
 * Value is echoed by default for front end use
 */
function theme_uri($path, $echo = true) {
	$uri = get_template_directory_uri() . $path;
	if ($echo) {
		echo($uri);
	} else {
		return $uri;
	}
}

/**
 * Register and enqueue styles
 */
function custom_enqueue_scripts() {
	$ver = wp_get_theme()->get( 'Version' );
	wp_register_style('custom_style', theme_uri("/assets/css/style.css", false), '', $ver);
	wp_enqueue_style('custom_style');
	wp_register_script('custom_script', theme_uri("/assets/js/script.js", false), [], $ver, true);
	wp_enqueue_script('custom_script');
}

add_action( 'wp_enqueue_scripts', 'custom_enqueue_scripts' );


?>