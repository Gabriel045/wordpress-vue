<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


// Add global js file
function wpb_adding_scripts()
{
	wp_enqueue_script('index', get_template_directory_uri() . '/assets/js/index.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'wpb_adding_scripts');



