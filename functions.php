<?php

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
    'height' => 480,
    'width'  => 720,
) );

	
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'editor-styles' );
add_theme_support( 'html5', array('style','script', ) );


function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all');

    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


if ( ! function_exists( 'theme_register_nav_menu' ) ) {
 
    function theme_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu' ),
            'footer_menu'  => __( 'Footer Menu' ),
        ) );
    }
    add_action( 'after_setup_theme', 'theme_register_nav_menu', 0 );
}