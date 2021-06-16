<?php
/**
 * Classic Business functions and definitions
 *
 * @package Classic Business
 */

add_action( 'wp_enqueue_scripts', 'classic_busines_enqueue_styles' );
function classic_busines_enqueue_styles() {
    $parenthandle = 'twenty-minutes-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, esc_url(get_template_directory_uri()) . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'classic-business-child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}

add_action( 'customize_register', 'classic_busines_customize_register', 11 );
function classic_busines_customize_register() {
	global $wp_customize;
	$wp_customize->remove_setting( 'twenty_minutes_phone_number' );
	$wp_customize->remove_control( 'twenty_minutes_phone_number' );
	$wp_customize->remove_setting( 'twenty_minutes_email_address' );
	$wp_customize->remove_control( 'twenty_minutes_email_address' );
	$wp_customize->remove_setting( 'twenty_minutes_fb_link' );
	$wp_customize->remove_control( 'twenty_minutes_fb_link' );
	$wp_customize->remove_setting( 'twenty_minutes_twitt_link' );
	$wp_customize->remove_control( 'twenty_minutes_twitt_link' );
	$wp_customize->remove_setting( 'twenty_minutes_linked_link' );
	$wp_customize->remove_control( 'twenty_minutes_linked_link' );
	$wp_customize->remove_setting( 'twenty_minutes_insta_link' );
	$wp_customize->remove_control( 'twenty_minutes_insta_link' );
	$wp_customize->remove_setting( 'twenty_minutes_youtube_link' );
	$wp_customize->remove_control( 'twenty_minutes_youtube_link' );
}