<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package harley
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function harley_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'harley_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function harley_jetpack_setup
add_action( 'after_setup_theme', 'harley_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function harley_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function harley_infinite_scroll_render
