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
function footer_options_page() {
    add_menu_page(
        'Footer',
        'Footer Options',
        'manage_options',
        'footer_lam'
    );
}
add_action( 'admin_menu', 'footer_options_page' );


/**
 * @internal never define functions inside callbacks.
 * these functions could be run multiple times; this would result in a fatal error.
 */
 
/**
 * custom option and settings
 */
function wporg_settings_init() {
    // Register a new setting for "wporg" page.
    register_setting( 'wporg', 'wporg_options' );
 
    // Register a new section in the "wporg" page.
    add_settings_section(
        'wporg_section_developers',
        __( 'The Matrix has you.', 'wporg' ), 'wporg_section_developers_callback',
        'wporg'
    );
 
    // Register a new field in the "wporg_section_developers" section, inside the "wporg" page.
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
 
/**
 * Register our wporg_settings_init to the admin_init action hook.
 */
add_action( 'admin_init', 'wporg_settings_init' );
 
 
/**
 * Custom option and settings:
 *  - callback functions
 */
 
 
/**
 * Developers section callback function.
 *
 * @param array $args  The settings array, defining title, id, callback.
 */
function wporg_section_developers_callback( $args ) {
    ?>
    <p id="<?php echo esc_attr( $args['id'] ); ?>"><?php esc_html_e( 'Follow the white rabbit.', 'wporg' ); ?></p>
    <?php
}
 
/**
 * Pill field callbakc function.
 *
 * WordPress has magic interaction with the following keys: label_for, class.
 * - the "label_for" key value is used for the "for" attribute of the <label>.
 * - the "class" key value is used for the "class" attribute of the <tr> containing the field.
 * Note: you can add custom key value pairs to be used inside your callbacks.
 *
 * @param array $args
 */
function wporg_field_pill_cb( $args ) {
    // Get the value of the setting we've registered with register_setting()
    $options = get_option( 'wporg_options' );
    ?>
    <select
            id="<?php echo esc_attr( $args['label_for'] ); ?>"
            data-custom="<?php echo esc_attr( $args['wporg_custom_data'] ); ?>"
            name="wporg_options[<?php echo esc_attr( $args['label_for'] ); ?>]">
        <option value="red" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'red', false ) ) : ( '' ); ?>>
            <?php esc_html_e( 'red pill', 'wporg' ); ?>
        </option>
        <option value="blue" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'blue', false ) ) : ( '' ); ?>>
            <?php esc_html_e( 'blue pill', 'wporg' ); ?>
        </option>
    </select>
    <p class="description">
        <?php esc_html_e( 'You take the blue pill and the story ends. You wake in your bed and you believe whatever you want to believe.', 'wporg' ); ?>
    </p>
    <p class="description">
        <?php esc_html_e( 'You take the red pill and you stay in Wonderland and I show you how deep the rabbit-hole goes.', 'wporg' ); ?>
    </p>
    <?php
}
 
/**
 * Add the top level menu page.
 */
function wporg_options_page() {
    add_menu_page(
        'WPOrg',
        'WPOrg Options',
        'manage_options',
        'wporg',
        'wporg_options_page_html'
    );
}
 
 
/**
 * Register our wporg_options_page to the admin_menu action hook.
 */
add_action( 'admin_menu', 'wporg_options_page' );
 
 
/**
 * Top level menu callback function
 */
function wporg_options_page_html() {
    // check user capabilities
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
 
    // add error/update messages
 
    // check if the user have submitted the settings
    // WordPress will add the "settings-updated" $_GET parameter to the url
    if ( isset( $_GET['settings-updated'] ) ) {
        // add settings saved message with the class of "updated"
        add_settings_error( 'wporg_messages', 'wporg_message', __( 'Settings Saved', 'wporg' ), 'updated' );
    }
 
    // show error/update messages
    settings_errors( 'wporg_messages' );
    ?>
    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
        <form action="options.php" method="post">
            <?php
            // output security fields for the registered setting "wporg"
            settings_fields( 'wporg' );
            // output setting sections and their fields
            // (sections are registered for "wporg", each field is registered to a specific section)
            do_settings_sections( 'wporg' );
            // output save settings button
            submit_button( 'Save Settings' );
            ?>
        </form>
    </div>
    <?php
}