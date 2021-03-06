<?php
/**
 * Plugin Name: Wpazure Kit
 * Description: Enhances Wpazure with extra Features and sections.
 * Version: 1.1.2
 * Author: wpazure
 * Author URI: https://wpazure.com
 * License: GPL-2.0+
 * WC requires at least: 3.3.0
 * WC tested up to: 5.2.2
 * Text Domain: wpazure-kit
 *
 */
 
define( 'WPAZURE_KIT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WPAZURE_KIT_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

if ( ! defined( 'WPAZURE_KIT_VERSION' ) ) {
	define( 'WPAZURE_KIT_VERSION', '1.1.2' );
}

function wpazure_kit_activate() {
	$theme = wp_get_theme();
	if ( 'ConsultEra' == $theme->name){
		
		// Requires Sections files
		
		require_once('inc/consultera/sections/slider-section.php');
		require_once('inc/consultera/sections/service-section.php');
		require_once('inc/consultera/sections/project-section.php');
		require_once('inc/consultera/sections/testimonial-section.php');
		require_once('inc/consultera/sections/woocommerce-section.php');
		require_once('inc/consultera/sections/cta-section.php');
		require_once('inc/consultera/sections/news-section.php');
		
		//Requires Features files
		require_once('inc/customizer/lib/class-alpha-color-control/class-alpha-color-control.php');
		
		require_once('inc/consultera/features/home-section-settings.php');
		
	$item_details_page = get_option('set_consultera_home'); 
    if(!$item_details_page){
		
		// Home 
		$post = array(
			  'comment_status' => 'closed',
			  'ping_status' =>  'closed' ,
			  'post_author' => 1,
			  'post_date' => date('Y-m-d H:i:s'),
			  'post_name' => 'Home',
			  'post_status' => 'publish' ,
			  'post_title' => 'Home',
			  'post_type' => 'page',
		);  
		//insert page and save the id
		$newvalue = wp_insert_post( $post, false );
		if ( $newvalue && ! is_wp_error( $newvalue ) ){
			update_post_meta( $newvalue, '_wp_page_template', 'template-homepage.php' );
			
			// Use a static front page
			$page = get_page_by_title('Home');
			update_option( 'show_on_front', 'page' );
			update_option( 'page_on_front', $page->ID );
		}
		
		
		// Blog page
		$post = array(
		  'comment_status' => 'closed',
		  'ping_status' =>  'closed' ,
		  'post_author' => 1,
		  'post_date' => date('Y-m-d H:i:s'),
		  'post_name' => 'Blog',
		  'post_status' => 'publish' ,
		  'post_title' => 'Blog',
		  'post_type' => 'page',
		);  
		//insert page and save the id
		$newvalue = wp_insert_post( $post, false );
		if ( $newvalue && ! is_wp_error( $newvalue ) ){
			update_post_meta( $newvalue, '_wp_page_template', 'page.php' );
			
			// Use a static front page
			$page = get_page_by_title('Blog');
			update_option( 'show_on_front', 'page' );
			update_option( 'page_for_posts', $page->ID );
			
		}
		update_option( 'set_consultera_home', 'Done' );
    }
	}
	
	if ( 'Busicorp' == $theme->name){
		
		// Requires Sections files
		
		require_once('inc/busicorp/sections/slider-section.php');
		require_once('inc/busicorp/sections/service-section.php');
		require_once('inc/busicorp/sections/project-section.php');
		require_once('inc/busicorp/sections/testimonial-section.php');
		require_once('inc/consultera/sections/woocommerce-section.php');
		require_once('inc/busicorp/sections/cta-section.php');
		require_once('inc/busicorp/sections/news-section.php');
		require_once('inc/busicorp/sections/social-section.php');
		
		//Requires Features files
		require_once('inc/customizer/lib/class-alpha-color-control/class-alpha-color-control.php');
		
		require_once('inc/consultera/features/home-section-settings.php');
		require_once('inc/busicorp/features/social-section.php');
		
	$item_details_page = get_option('set_consultera_home'); 
    if(!$item_details_page){
		
		// Home 
		$post = array(
			  'comment_status' => 'closed',
			  'ping_status' =>  'closed' ,
			  'post_author' => 1,
			  'post_date' => date('Y-m-d H:i:s'),
			  'post_name' => 'Home',
			  'post_status' => 'publish' ,
			  'post_title' => 'Home',
			  'post_type' => 'page',
		);  
		//insert page and save the id
		$newvalue = wp_insert_post( $post, false );
		if ( $newvalue && ! is_wp_error( $newvalue ) ){
			update_post_meta( $newvalue, '_wp_page_template', 'template-homepage.php' );
			
			// Use a static front page
			$page = get_page_by_title('Home');
			update_option( 'show_on_front', 'page' );
			update_option( 'page_on_front', $page->ID );
		}
		
		
		// Blog page
		$post = array(
		  'comment_status' => 'closed',
		  'ping_status' =>  'closed' ,
		  'post_author' => 1,
		  'post_date' => date('Y-m-d H:i:s'),
		  'post_name' => 'Blog',
		  'post_status' => 'publish' ,
		  'post_title' => 'Blog',
		  'post_type' => 'page',
		);  
		//insert page and save the id
		$newvalue = wp_insert_post( $post, false );
		if ( $newvalue && ! is_wp_error( $newvalue ) ){
			update_post_meta( $newvalue, '_wp_page_template', 'page.php' );
			
			// Use a static front page
			$page = get_page_by_title('Blog');
			update_option( 'show_on_front', 'page' );
			update_option( 'page_for_posts', $page->ID );
			
		}
		update_option( 'set_consultera_home', 'Done' );
    }
	}
	
	
	if ( 'Corpera' == $theme->name){
		
		// Requires Sections files
		
		require_once('inc/corpera/sections/slider-section.php');
		require_once('inc/corpera/sections/service-section.php');
		require_once('inc/corpera/sections/project-section.php');
		require_once('inc/corpera/sections/testimonial-section.php');
		require_once('inc/consultera/sections/woocommerce-section.php');
		require_once('inc/corpera/sections/cta-section.php');
		require_once('inc/corpera/sections/news-section.php');
		
		
		//Requires Features files
		require_once('inc/customizer/lib/class-alpha-color-control/class-alpha-color-control.php');
		
		require_once('inc/consultera/features/home-section-settings.php');
		require_once('inc/busicorp/features/social-section.php');
		
	$item_details_page = get_option('set_consultera_home'); 
    if(!$item_details_page){
		
		// Home 
		$post = array(
			  'comment_status' => 'closed',
			  'ping_status' =>  'closed' ,
			  'post_author' => 1,
			  'post_date' => date('Y-m-d H:i:s'),
			  'post_name' => 'Home',
			  'post_status' => 'publish' ,
			  'post_title' => 'Home',
			  'post_type' => 'page',
		);  
		//insert page and save the id
		$newvalue = wp_insert_post( $post, false );
		if ( $newvalue && ! is_wp_error( $newvalue ) ){
			update_post_meta( $newvalue, '_wp_page_template', 'template-homepage.php' );
			
			// Use a static front page
			$page = get_page_by_title('Home');
			update_option( 'show_on_front', 'page' );
			update_option( 'page_on_front', $page->ID );
		}
		
		
		// Blog page
		$post = array(
		  'comment_status' => 'closed',
		  'ping_status' =>  'closed' ,
		  'post_author' => 1,
		  'post_date' => date('Y-m-d H:i:s'),
		  'post_name' => 'Blog',
		  'post_status' => 'publish' ,
		  'post_title' => 'Blog',
		  'post_type' => 'page',
		);  
		//insert page and save the id
		$newvalue = wp_insert_post( $post, false );
		if ( $newvalue && ! is_wp_error( $newvalue ) ){
			update_post_meta( $newvalue, '_wp_page_template', 'page.php' );
			
			// Use a static front page
			$page = get_page_by_title('Blog');
			update_option( 'show_on_front', 'page' );
			update_option( 'page_for_posts', $page->ID );
			
		}
		update_option( 'set_consultera_home', 'Done' );
    }
	}
	
	
	
	if ( 'Rynobiz' == $theme->name){
		
		// Requires Sections files
		
		require_once('inc/rynobiz/sections/slider-section.php');
		require_once('inc/rynobiz/sections/service-section.php');
		require_once('inc/rynobiz/sections/project-section.php');
		require_once('inc/rynobiz/sections/testimonial-section.php');
		require_once('inc/consultera/sections/woocommerce-section.php');
		require_once('inc/rynobiz/sections/cta-section.php');
		require_once('inc/rynobiz/sections/news-section.php');
		
		
		//Requires Features files
		require_once('inc/customizer/lib/class-alpha-color-control/class-alpha-color-control.php');
		
		require_once('inc/consultera/features/home-section-settings.php');
		require_once('inc/rynobiz/features/social-section.php');
		
	$item_details_page = get_option('set_consultera_home'); 
    if(!$item_details_page){
		
		// Home 
		$post = array(
			  'comment_status' => 'closed',
			  'ping_status' =>  'closed' ,
			  'post_author' => 1,
			  'post_date' => date('Y-m-d H:i:s'),
			  'post_name' => 'Home',
			  'post_status' => 'publish' ,
			  'post_title' => 'Home',
			  'post_type' => 'page',
		);  
		//insert page and save the id
		$newvalue = wp_insert_post( $post, false );
		if ( $newvalue && ! is_wp_error( $newvalue ) ){
			update_post_meta( $newvalue, '_wp_page_template', 'template-homepage.php' );
			
			// Use a static front page
			$page = get_page_by_title('Home');
			update_option( 'show_on_front', 'page' );
			update_option( 'page_on_front', $page->ID );
		}
		
		
		// Blog page
		$post = array(
		  'comment_status' => 'closed',
		  'ping_status' =>  'closed' ,
		  'post_author' => 1,
		  'post_date' => date('Y-m-d H:i:s'),
		  'post_name' => 'Blog',
		  'post_status' => 'publish' ,
		  'post_title' => 'Blog',
		  'post_type' => 'page',
		);  
		//insert page and save the id
		$newvalue = wp_insert_post( $post, false );
		if ( $newvalue && ! is_wp_error( $newvalue ) ){
			update_post_meta( $newvalue, '_wp_page_template', 'page.php' );
			
			// Use a static front page
			$page = get_page_by_title('Blog');
			update_option( 'show_on_front', 'page' );
			update_option( 'page_for_posts', $page->ID );
			
		}
		update_option( 'set_consultera_home', 'Done' );
    }
	}
	
}
add_action( 'init', 'wpazure_kit_activate' );
 
