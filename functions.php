<?php
/**
 * Theme functions and definitions
 *
 * @package Activist_Network_Child_Theme
 */

/**
 * Load setup functions.
 */
require get_stylesheet_directory() . '/inc/setup.php';

/**
 * Load custom theme functions.
 */
require get_stylesheet_directory() . '/inc/theme.php';

/**
 * Prevent Jetpack Publicize connections from being auto-selected
 */
add_filter( 'publicize_checkbox_default', '__return_false' );

/**
 * Allow shortcodes in text widget
 */
add_filter('widget_text', 'do_shortcode');
