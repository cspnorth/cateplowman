<?php
/**
 * Accelerate Marketing Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 */





function child_scripts_styles() {
    wp_enqueue_style( 'wp_bootstrap_starter_child', get_stylesheet_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_starter_child_styles' );

function wp_bootstrap_starter_child_scripts() {
    wp_enqueue_style( 'wp_bootstrap_starter_child', '//fonts.googleapis.com/css?family=Josefin+Sans:400,600,700' );
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_starter_child_scripts' );



?>