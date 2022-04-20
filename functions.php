<?php
#https://generatewp.com/generator/

// Register Navigation Menus
function lam_navigation_menus() {

	$locations = array(
		'header' => __( 'Menu Cabecalho', 'lam_theme' ),
		'footer' => __( 'Menu Rodape', 'lam_theme' ),
		'topbar' => __( 'Menu do Topo', 'lam_theme' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'lam_navigation_menus' );

// Register Theme Features
function lam_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'status', 'gallery', 'image', 'video', 'link' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// Add theme support for Custom Background
	$background_args = array(
		'default-color'          => '',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $background_args );

	// Add theme support for Custom Header
	$header_args = array(
		'default-image'          => '',
		'width'                  => 0,
		'height'                 => 0,
		'flex-width'             => false,
		'flex-height'            => false,
		'uploads'                => true,
		'random-default'         => false,
		'header-text'            => false,
		'default-text-color'     => '',
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
		'video'                  => true,
		'video-active-callback'  => '',
	);
	add_theme_support( 'custom-header', $header_args );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

	// Add theme support for Translation
	load_theme_textdomain( 'lam_theme', get_template_directory() . '/language' );
}
add_action( 'after_setup_theme', 'lam_theme_features' );


// Register Custom Post Type
function project_post_type() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'lam_theme' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'lam_theme' ),
		'menu_name'             => __( 'Project', 'lam_theme' ),
		'name_admin_bar'        => __( 'Project', 'lam_theme' ),
		'archives'              => __( 'Item Archives', 'lam_theme' ),
		'attributes'            => __( 'Item Attributes', 'lam_theme' ),
		'parent_item_colon'     => __( 'Parent Item:', 'lam_theme' ),
		'all_items'             => __( 'All Items', 'lam_theme' ),
		'add_new_item'          => __( 'Add New Item', 'lam_theme' ),
		'add_new'               => __( 'Add New', 'lam_theme' ),
		'new_item'              => __( 'New Item', 'lam_theme' ),
		'edit_item'             => __( 'Edit Item', 'lam_theme' ),
		'update_item'           => __( 'Update Item', 'lam_theme' ),
		'view_item'             => __( 'View Item', 'lam_theme' ),
		'view_items'            => __( 'View Items', 'lam_theme' ),
		'search_items'          => __( 'Search Item', 'lam_theme' ),
		'not_found'             => __( 'Not found', 'lam_theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'lam_theme' ),
		'featured_image'        => __( 'Featured Image', 'lam_theme' ),
		'set_featured_image'    => __( 'Set featured image', 'lam_theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'lam_theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'lam_theme' ),
		'insert_into_item'      => __( 'Insert into item', 'lam_theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'lam_theme' ),
		'items_list'            => __( 'Items list', 'lam_theme' ),
		'items_list_navigation' => __( 'Items list navigation', 'lam_theme' ),
		'filter_items_list'     => __( 'Filter items list', 'lam_theme' ),
	);
	$rewrite = array(
		'slug'                  => 'projetos',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Project', 'lam_theme' ),
		'description'           => __( 'Projetos que acontecem dentro do lar assistencial matilde', 'lam_theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-hammer',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'project_lam', $args );

}
add_action( 'init', 'project_post_type', 0 );

// Register Custom Post Type
function rifa_post_type() {

	$labels = array(
		'name'                  => _x( 'Rifas', 'Post Type General Name', 'lam_theme' ),
		'singular_name'         => _x( 'Rifa', 'Post Type Singular Name', 'lam_theme' ),
		'menu_name'             => __( 'Rifas', 'lam_theme' ),
		'name_admin_bar'        => __( 'Rifas', 'lam_theme' ),
		'archives'              => __( 'Item Archives', 'lam_theme' ),
		'attributes'            => __( 'Item Attributes', 'lam_theme' ),
		'parent_item_colon'     => __( 'Parent Item:', 'lam_theme' ),
		'all_items'             => __( 'All Items', 'lam_theme' ),
		'add_new_item'          => __( 'Add New Item', 'lam_theme' ),
		'add_new'               => __( 'Add New', 'lam_theme' ),
		'new_item'              => __( 'New Item', 'lam_theme' ),
		'edit_item'             => __( 'Edit Item', 'lam_theme' ),
		'update_item'           => __( 'Update Item', 'lam_theme' ),
		'view_item'             => __( 'View Item', 'lam_theme' ),
		'view_items'            => __( 'View Items', 'lam_theme' ),
		'search_items'          => __( 'Search Item', 'lam_theme' ),
		'not_found'             => __( 'Not found', 'lam_theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'lam_theme' ),
		'featured_image'        => __( 'Featured Image', 'lam_theme' ),
		'set_featured_image'    => __( 'Set featured image', 'lam_theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'lam_theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'lam_theme' ),
		'insert_into_item'      => __( 'Insert into item', 'lam_theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'lam_theme' ),
		'items_list'            => __( 'Items list', 'lam_theme' ),
		'items_list_navigation' => __( 'Items list navigation', 'lam_theme' ),
		'filter_items_list'     => __( 'Filter items list', 'lam_theme' ),
	);
	$args = array(
		'label'                 => __( 'Rifa', 'lam_theme' ),
		'description'           => __( 'Rifas realizadas', 'lam_theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-table-col-after',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'rifa', $args );

}
add_action( 'init', 'rifa_post_type', 0 );

// Register Custom Post Type
function kit_post_type() {

	$labels = array(
		'name'                  => _x( 'Kits', 'Post Type General Name', 'lam_theme' ),
		'singular_name'         => _x( 'Kit', 'Post Type Singular Name', 'lam_theme' ),
		'menu_name'             => __( 'Kits', 'lam_theme' ),
		'name_admin_bar'        => __( 'Kits', 'lam_theme' ),
		'archives'              => __( 'Item Archives', 'lam_theme' ),
		'attributes'            => __( 'Item Attributes', 'lam_theme' ),
		'parent_item_colon'     => __( 'Parent Item:', 'lam_theme' ),
		'all_items'             => __( 'All Items', 'lam_theme' ),
		'add_new_item'          => __( 'Add New Item', 'lam_theme' ),
		'add_new'               => __( 'Add New', 'lam_theme' ),
		'new_item'              => __( 'New Item', 'lam_theme' ),
		'edit_item'             => __( 'Edit Item', 'lam_theme' ),
		'update_item'           => __( 'Update Item', 'lam_theme' ),
		'view_item'             => __( 'View Item', 'lam_theme' ),
		'view_items'            => __( 'View Items', 'lam_theme' ),
		'search_items'          => __( 'Search Item', 'lam_theme' ),
		'not_found'             => __( 'Not found', 'lam_theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'lam_theme' ),
		'featured_image'        => __( 'Featured Image', 'lam_theme' ),
		'set_featured_image'    => __( 'Set featured image', 'lam_theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'lam_theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'lam_theme' ),
		'insert_into_item'      => __( 'Insert into item', 'lam_theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'lam_theme' ),
		'items_list'            => __( 'Items list', 'lam_theme' ),
		'items_list_navigation' => __( 'Items list navigation', 'lam_theme' ),
		'filter_items_list'     => __( 'Filter items list', 'lam_theme' ),
	);
	$args = array(
		'label'                 => __( 'Kit', 'lam_theme' ),
		'description'           => __( 'Kits necessários para projetos', 'lam_theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 15,
		'menu_icon'             => 'dashicons-admin-customizer',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'kit_type', $args );

}
add_action( 'init', 'kit_post_type', 0 );

// Register Sidebars
function lam_sidebars() {

	$args = array(
		'id'            => 'side1',
		'class'         => 'sidebar',
		'name'          => __( 'Footer', 'lam_theme' ),
		'description'   => __( 'Sidebar do Footer', 'lam_theme' ),
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'side2',
		'class'         => 'sidebar',
		'name'          => __( 'Projetos', 'lam_theme' ),
		'description'   => __( 'Barra lateral de projetos', 'lam_theme' ),
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'side3',
		'class'         => 'sidebar',
		'name'          => __( 'Posts', 'lam_theme' ),
		'description'   => __( 'Barra Lateral de posts', 'lam_theme' ),
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'lam_sidebars' );

// Register Settings Page
function footer_settings_page() {

    register_setting( 'wporg', 'wporg_options' );
 
    add_settings_section(
        'wporg_section_developers',
        __( 'The Matrix has you.', 'wporg' ), 'wporg_section_developers_callback',
        'wporg'
    );
 
    add_settings_field(
        'wporg_field_pill', // As of WP 4.6 this value is used only internally.
                                // Use $args' label_for to populate the id inside the callback.
            __( 'Pill', 'wporg' ),
        'wporg_field_pill_cb',
        'wporg',
        'wporg_section_developers',
        array(
            'label_for'         => 'wporg_field_pill',
            'class'             => 'wporg_row',
            'wporg_custom_data' => 'custom',
        )
    );
}
add_action( 'admin_init', 'footer_settings_page' );