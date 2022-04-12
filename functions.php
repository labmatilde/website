<?php

function project_custom_post_type() {
    register_post_type(
        'lam_project',
            array(
                'labels'            => array(
                'name'          => __('Projects', 'lam'),
                'singular_name' => __('Project', 'lam'),
            ),
        'public'      => true,
        'has_archive' => true,
        'rewrite'     => array( 'slug' => 'projetos' )
        )
    );
}
add_action('init', 'project_custom_post_type');