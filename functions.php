<?php
/**
 * Register and Enqueue Styles.
 *
 * @since Lar Assistencial Matilde 1.0
 */
function lam_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'lam-style', get_stylesheet_uri(), array(), $theme_version );
	wp_style_add_data( 'lam-style', 'rtl', 'replace' );

	// Add print CSS.
    wp_enqueue_style( 'lam-material', get_template_directory_uri() . '/assets/css/startup-materialize.css', null, $theme_version, 'all' );
	#wp_enqueue_style( 'lam-material', get_template_directory_uri() . '/assets/css/materialize.min.css', null, $theme_version, 'screen, projection' );
    wp_enqueue_style( 'lam-icon', get_template_directory_uri() . '/assets/css/icon.css', null, $theme_version, 'all' );
    wp_enqueue_style( 'lam-icon', get_template_directory_uri() . '/assets/css/lam.css', null, $theme_version, 'all' );

}
add_action( 'wp_enqueue_scripts', 'lam_register_styles' );

/**
 * Register and Enqueue Scripts.
 *
 * @since Lar Assistencial Matilde 1.0
 */
function lam_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	if ( (!is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    wp_enqueue_script( 'lam-js', get_template_directory_uri() . '/assets/js/materialize.min.js', array(), $theme_version, true );
    wp_enqueue_script( 'lam-images', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('lam-js'), $theme_version, true );
    wp_enqueue_script( 'lam-masonry', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array('lam-images'), $theme_version, true );
    wp_enqueue_script( 'lam-tween', get_template_directory_uri() . '/assets/js/TweenMax.min.js', array('lam-masonry'), $theme_version, true );
    wp_enqueue_script( 'lam-scroll', get_template_directory_uri() . '/assets/js/ScrollMagic.min.js', array('lam-tween'), $theme_version, true );
    wp_enqueue_script( 'lam-anima', get_template_directory_uri() . '/assets/js/animation.gsap.min.js', array('lam-scroll'), $theme_version, true );
    wp_enqueue_script( 'lam-start', get_template_directory_uri() . '/assets/js/startup.js', array('lam-anima'), $theme_version, true );
    wp_enqueue_script( 'lam-init', get_template_directory_uri() . '/assets/js/init.js', array('lam-start'), $theme_version, true );

}
add_action( 'wp_enqueue_scripts', 'lam_register_scripts' );


/**
 * 
 * 
 */
if ( ! function_exists( 'lam_register_nav_menu' ) ) {
 
    function lam_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu' ),
            'mobile_menu' => __( 'Mobile Menu' ),
            'footer_menu'  => __( 'Footer Menu' ),
        ) );
    }
    add_action( 'after_setup_theme', 'lam_register_nav_menu', 0 );

}

/***
 * 
 * 
 */

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
    'height'                => 60,
    'width'                 => 125,
    'flex-height'           => true,
    'flex-width'            => true,
    'header-text'           => array( 'site-title', 'site-description' ),
) );
	
#add_image_size( 'custom-size', 220, 180, true );

	
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'editor-styles' );
add_theme_support( 'html5', array('style','script', ) );

/**
 * Proper ob_end_flush() for all levels
 *
 * This replaces the WordPress `wp_ob_end_flush_all()` function
 * with a replacement that doesn't cause PHP notices.
 */
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
    while ( @ob_end_flush() );
});