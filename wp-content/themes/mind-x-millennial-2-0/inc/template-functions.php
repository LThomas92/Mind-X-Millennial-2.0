<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Mind_X_Millennial_2.0
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function mind_x_millennial_2_0_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'mind_x_millennial_2_0_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function mind_x_millennial_2_0_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'mind_x_millennial_2_0_pingback_header' );

function about_text_block() {
	
	if( function_exists('acf_register_block') ) {

		acf_register_block(array(
			'name'				=> 'about-text-block',
			'title'				=> __('About Text Block'),
			'description'		=> __('A custom block for text on the about page.'),
			'render_template'	=> 'template-parts/blocks/about-text-block.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'text', 'about', 'block', 'mind-x-millennial' ),
		));
	}
}

add_action('acf/init', 'about_text_block');

function about_three_column_block() {
	
	if( function_exists('acf_register_block') ) {
		
		acf_register_block(array(
			'name'				=> 'about-three-column-block',
			'title'				=> __('About Three Column Block'),
			'description'		=> __('A three column block for about page.'),
			'render_template'	=> 'template-parts/blocks/about-three-column-block.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'text', 'about', 'block', 'three-column', 'mind-x-millennial' ),
		));
	}
}

add_action('acf/init', 'about_three_column_block');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

