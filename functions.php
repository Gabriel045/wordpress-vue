<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


function vue_script()
{
	wp_enqueue_script('app.js', get_template_directory_uri() . '/wordpress-vue/app.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'vue_script');