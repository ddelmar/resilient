<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * @package Write
 */

/**
 * Change excerpt length.
 */
if ( 'ja' !== get_bloginfo( 'language' ) ) {
	function write_change_excerpt_length( $length ) {
		return 30;
	}
	add_filter( 'excerpt_length', 'write_change_excerpt_length', 999 );
}

/**
 * Change excerpt length in Japanese.
 */
function write_change_excerpt_mblength( $length ) {
	return 100;
}
add_filter( 'excerpt_mblength', 'write_change_excerpt_mblength' );

/**
 * Change the [...] string in the excerpt.
 */
function write_change_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'write_change_excerpt_more' );

/**
 * Remove #more anchor from permalinks.
 */
function write_remove_more_anchor( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'write_remove_more_anchor' );

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * @param array $args Configuration arguments.
 * @return array
 */
function write_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'write_page_menu_args' );
