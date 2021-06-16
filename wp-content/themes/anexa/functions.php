<?php
function anexa_css() {
	$parent_style = 'cozipress-parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'anexa-style', get_stylesheet_uri(), array( $parent_style ));
	
	wp_enqueue_style('anexa-responsive',get_stylesheet_directory_uri().'/assets/css/responsive.css');
	wp_dequeue_style('cozipress-responsive');

}
add_action( 'wp_enqueue_scripts', 'anexa_css',999);
   	


function anexa_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'cozipress_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'c76a1a',
		'width'                  => 2000,
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'cozipress_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'anexa_custom_header_setup' );

/**
 * Import Options From Parent Theme
 *
 */
function anexa_parent_theme_options() {
	$cozipress_mods = get_option( 'theme_mods_cozipress' );
	if ( ! empty( $cozipress_mods ) ) {
		foreach ( $cozipress_mods as $cozipress_mod_k => $cozipress_mod_v ) {
			set_theme_mod( $cozipress_mod_k, $cozipress_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'anexa_parent_theme_options' );
