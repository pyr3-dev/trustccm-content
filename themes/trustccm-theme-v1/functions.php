<?php


/**
 * Trustcmm's functions and definitions
 *
 * @package Trustcmm
 * @since Trustcmm 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */


if ( ! function_exists( 'trustcmm_setup' ) ) :

function trustcmm_setup() {

	add_theme_support( 'automatic-feed-links' );

	register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'mc_menu' ),
    'secondary' => __( 'Secondary Menu', 'mc_menu' )
	) );

	register_nav_menus([
	  'main-menu' => 'Main Navigation'
	]);

	register_nav_menus( [
    'footer_pages'        => __( 'Footer Pages', 'mytheme' ),
    'footer_case_studies' => __( 'Footer Case Studies', 'mytheme' ),
  ] );


	// load_theme_textdomain( 'onesec', get_template_directory() . '/languages' );

	// add_theme_support( 'post-thumbnails' );

	// add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

}

endif;
add_action( 'after_setup_theme', 'trustcmm_setup' );

function trustcmm_theme_scripts() {
    // Tailwind v4 via Play CDN
    wp_enqueue_script('tailwind-play', 'https://cdn.tailwindcss.com', [], null, false);

    // Flowbite CSS & JS v3.1.2
    wp_enqueue_style('flowbite-css', 'https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css', [], null);
    wp_enqueue_script('flowbite-js', 'https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js', ['tailwind-play'], null, true);

    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', [], null);


    // Your theme CSS
    wp_enqueue_style('trustcmm-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'trustcmm_theme_scripts');


