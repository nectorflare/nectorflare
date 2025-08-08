<?php
/**
 * Travel Influencer Blogs functions
 */

//Admin css
	add_editor_style( array( 'assets/css/admin.css' ) );

if ( ! function_exists( 'travel_influencer_blogs_setup' ) ) :
function travel_influencer_blogs_setup() {
    load_theme_textdomain( 'travel-influencer-blogs', get_template_directory() . '/languages' );

	// Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'travel_influencer_custom_background_args', array(
	    'default-color' => 'ffffff',
	    'default-image' => '',
    ) ) );

	 /**
	 * About Theme Function
	 */
	require get_theme_file_path( '/about-theme/about-theme.php' );

	/**
	 * Customizer
	 */
	require get_template_directory() . '/inc/customizer.php';

}
endif; 
add_action( 'after_setup_theme', 'travel_influencer_blogs_setup' );

if ( ! function_exists( 'travel_influencer_blogs_styles' ) ) :
	function travel_influencer_blogs_styles() {
		// Register theme stylesheet.
		wp_register_style('travel-influencer-blogs-style',
			get_template_directory_uri() . '/style.css',array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'travel-influencer-blogs-style' );

		wp_style_add_data( 'travel-influencer-blogs-style', 'rtl', 'replace' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'travel_influencer_blogs_styles' );