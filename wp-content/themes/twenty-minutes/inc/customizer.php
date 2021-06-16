<?php
/**
 * Twenty Minutes Theme Customizer
 *
 * @package Twenty Minutes
 */

get_template_part('/inc/select/category-dropdown-custom-control');

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function twenty_minutes_customize_register( $wp_customize ) {

	function twenty_minutes_sanitize_phone_number( $phone ) {
		return preg_replace( '/[^\d+]/', '', $phone );
	}

	function twenty_minutes_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}

	function twenty_minutes_sanitize_number_absint( $number, $setting ) {
		// Ensure $number is an absolute integer (whole number, zero or greater).
		$number = absint( $number );
		
		// If the input is an absolute integer, return it; otherwise, return the default
		return ( $number ? $number : $setting->default );
	}

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	//Theme Options
	$wp_customize->add_panel( 'twenty_minutes_panel_area', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'title' => __( 'Theme Options Panel', 'twenty-minutes' ),
	) );
	
	//Site Layout Section
	$wp_customize->add_section('twenty_minutes_site_layoutsec',array(
		'title'	=> __('Site Layout','twenty-minutes'),
		'priority'	=> 1,
		'panel' => 'twenty_minutes_panel_area',
	));		
	
	$wp_customize->add_setting('twenty_minutes_box_layout',array(
		'sanitize_callback' => 'twenty_minutes_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'twenty_minutes_box_layout', array(
	   'section'   => 'twenty_minutes_site_layoutsec',
	   'label'	=> __('Check to Box Layout','twenty-minutes'),
	   'type'      => 'checkbox'
 	)); 

 	// Header Section
	$wp_customize->add_section('twenty_minutes_header_section', array(
        'title' => __('Header Section', 'twenty-minutes'),
        'priority' => null,
		'panel' => 'twenty_minutes_panel_area',
 	));

	$wp_customize->add_setting('twenty_minutes_phone_number',array(
		'default' => '',
		'sanitize_callback' => 'twenty_minutes_sanitize_phone_number',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'twenty_minutes_phone_number', array(
	   'settings' => 'twenty_minutes_phone_number',
	   'section'   => 'twenty_minutes_header_section',
	   'label' => __('Add Phone Number', 'twenty-minutes'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('twenty_minutes_email_address',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_email',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'twenty_minutes_email_address', array(
	   'settings' => 'twenty_minutes_email_address',
	   'section'   => 'twenty_minutes_header_section',
	   'label' => __('Add Email Address', 'twenty-minutes'),
	   'type'      => 'text'
	));

	// Social media Section
	$wp_customize->add_section('twenty_minutes_social_media_section', array(
        'title' => __('Social media Section', 'twenty-minutes'),
        'priority' => null,
		'panel' => 'twenty_minutes_panel_area',
 	));

	$wp_customize->add_setting('twenty_minutes_fb_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'twenty_minutes_fb_link', array(
	   'settings' => 'twenty_minutes_fb_link',
	   'section'   => 'twenty_minutes_social_media_section',
	   'label' => __('Facebook Link', 'twenty-minutes'),
	   'type'      => 'url'
	));

	$wp_customize->add_setting('twenty_minutes_twitt_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'twenty_minutes_twitt_link', array(
	   'settings' => 'twenty_minutes_twitt_link',
	   'section'   => 'twenty_minutes_social_media_section',
	   'label' => __('Twitter Link', 'twenty-minutes'),
	   'type'      => 'url'
	));

	$wp_customize->add_setting('twenty_minutes_linked_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'twenty_minutes_linked_link', array(
	   'settings' => 'twenty_minutes_linked_link',
	   'section'   => 'twenty_minutes_social_media_section',
	   'label' => __('Linkdin Link', 'twenty-minutes'),
	   'type'      => 'url'
	));

	$wp_customize->add_setting('twenty_minutes_insta_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'twenty_minutes_insta_link', array(
	   'settings' => 'twenty_minutes_insta_link',
	   'section'   => 'twenty_minutes_social_media_section',
	   'label' => __('Instagram Link', 'twenty-minutes'),
	   'type'      => 'url'
	));

	$wp_customize->add_setting('twenty_minutes_youtube_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'twenty_minutes_youtube_link', array(
	   'settings' => 'twenty_minutes_youtube_link',
	   'section'   => 'twenty_minutes_social_media_section',
	   'label' => __('Youtube Link', 'twenty-minutes'),
	   'type'      => 'url'
	));

	// Home Category Dropdown Section
	$wp_customize->add_section('twenty_minutes_one_cols_section',array(
		'title'	=> __('Manage Slider','twenty-minutes'),
		'description'	=> __('Select Category from the Dropdowns for slider, Also use the given image dimension (1200 x 450).','twenty-minutes'),
		'priority'	=> null,
		'panel' => 'twenty_minutes_panel_area'
	));

	// Add a category dropdown Slider Coloumn
	$wp_customize->add_setting( 'twenty_minutes_slidersection', array(
		'default'	=> '0',	
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( new Twenty_Minutes_Category_Dropdown_Custom_Control( $wp_customize, 'twenty_minutes_slidersection', array(
		'section' => 'twenty_minutes_one_cols_section',
		'settings'   => 'twenty_minutes_slidersection',
	) ) );

	$wp_customize->add_setting('twenty_minutes_button_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'twenty_minutes_button_text', array(
	   'settings' => 'twenty_minutes_button_text',
	   'section'   => 'twenty_minutes_one_cols_section',
	   'label' => __('Add Button Text', 'twenty-minutes'),
	   'type'      => 'text'
	));
	
	//Hide Section
	$wp_customize->add_setting('twenty_minutes_hide_categorysec',array(
		'default' => true,
		'sanitize_callback' => 'twenty_minutes_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 

	$wp_customize->add_control( 'twenty_minutes_hide_categorysec', array(
	   'settings' => 'twenty_minutes_hide_categorysec',
	   'section'   => 'twenty_minutes_one_cols_section',
	   'label'     => __('Uncheck To Enable This Section','twenty-minutes'),
	   'type'      => 'checkbox'
	));

	// Service Section
	$wp_customize->add_section('twenty_minutes_two_cols_section',array(
		'title'	=> __('Manage Service Section','twenty-minutes'),
		'description'	=> __('Select the post category to show services.','twenty-minutes'),
		'priority'	=> null,
		'panel' => 'twenty_minutes_panel_area'
	));
	
	$wp_customize->add_setting('twenty_minutes_section_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'twenty_minutes_section_text', array(
	   'settings' => 'twenty_minutes_section_text',
	   'section'   => 'twenty_minutes_two_cols_section',
	   'label'     => __('Add Section Text','twenty-minutes'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('twenty_minutes_section_title',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'twenty_minutes_section_title', array(
	   'settings' => 'twenty_minutes_section_title',
	   'section'   => 'twenty_minutes_two_cols_section',
	   'label'     => __('Add Section Title','twenty-minutes'),
	   'type'      => 'text'
	));

	// Add a category dropdown Slider Coloumn
	$wp_customize->add_setting( 'twenty_minutes_services_section', array(
		'default'	=> '0',	
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( new Twenty_Minutes_Category_Dropdown_Custom_Control( $wp_customize, 'twenty_minutes_services_section', array(
		'section' => 'twenty_minutes_two_cols_section',
		'settings'   => 'twenty_minutes_services_section',
	) ) );

	// Footer Section 
	$wp_customize->add_section('twenty_minutes_footer', array(
		'title'	=> __('Footer Section','twenty-minutes'),
		'priority'	=> null,
		'panel' => 'twenty_minutes_panel_area',
	));

	$wp_customize->add_setting('twenty_minutes_copyright_line',array(
		'sanitize_callback' => 'sanitize_text_field',
	));	
	$wp_customize->add_control( 'twenty_minutes_copyright_line', array(
	   'section' 	=> 'twenty_minutes_footer',
	   'label'	 	=> __('Copyright Line','twenty-minutes'),
	   'type'    	=> 'text',
	   'priority' 	=> null,
    ));

    // Google Fonts
    $wp_customize->add_section( 'twenty_minutes_google_fonts_section', array(
		'title'       => __( 'Google Fonts', 'twenty-minutes' ),
		'priority'    => 24,
	) );

	$font_choices = array(
		'Kaushan Script:' => 'Kaushan Script',
		'Emilys Candy:' => 'Emilys Candy',
		'Poppins:0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900' => 'Poppins',
		'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
		'Open Sans:400italic,700italic,400,700' => 'Open Sans',
		'Oswald:400,700' => 'Oswald',
		'Playfair Display:400,700,400italic' => 'Playfair Display',
		'Montserrat:400,700' => 'Montserrat',
		'Raleway:400,700' => 'Raleway',
		'Droid Sans:400,700' => 'Droid Sans',
		'Lato:400,700,400italic,700italic' => 'Lato',
		'Arvo:400,700,400italic,700italic' => 'Arvo',
		'Lora:400,700,400italic,700italic' => 'Lora',
		'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
		'Oxygen:400,300,700' => 'Oxygen',
		'PT Serif:400,700' => 'PT Serif',
		'PT Sans:400,700,400italic,700italic' => 'PT Sans',
		'PT Sans Narrow:400,700' => 'PT Sans Narrow',
		'Cabin:400,700,400italic' => 'Cabin',
		'Fjalla One:400' => 'Fjalla One',
		'Francois One:400' => 'Francois One',
		'Josefin Sans:400,300,600,700' => 'Josefin Sans',
		'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
		'Arimo:400,700,400italic,700italic' => 'Arimo',
		'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
		'Bitter:400,700,400italic' => 'Bitter',
		'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
		'Roboto:400,400italic,700,700italic' => 'Roboto',
		'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
		'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
		'Roboto Slab:400,700' => 'Roboto Slab',
		'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
		'Rokkitt:400' => 'Rokkitt',
	);

	$wp_customize->add_setting( 'twenty_minutes_headings_fonts', array(
		'sanitize_callback' => 'twenty_minutes_sanitize_fonts',
	));
	$wp_customize->add_control( 'twenty_minutes_headings_fonts', array(
		'type' => 'select',
		'description' => __('Select your desired font for the headings.', 'twenty-minutes'),
		'section' => 'twenty_minutes_google_fonts_section',
		'choices' => $font_choices
	));

	$wp_customize->add_setting( 'twenty_minutes_body_fonts', array(
		'sanitize_callback' => 'twenty_minutes_sanitize_fonts'
	));
	$wp_customize->add_control( 'twenty_minutes_body_fonts', array(
		'type' => 'select',
		'description' => __( 'Select your desired font for the body.', 'twenty-minutes' ),
		'section' => 'twenty_minutes_google_fonts_section',
		'choices' => $font_choices
	));
}
add_action( 'customize_register', 'twenty_minutes_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function twenty_minutes_customize_preview_js() {
	wp_enqueue_script( 'twenty_minutes_customizer', esc_url(get_template_directory_uri()) . '/js/customize-preview.js', array( 'customize-preview' ), '20161510', true );
}
add_action( 'customize_preview_init', 'twenty_minutes_customize_preview_js' );