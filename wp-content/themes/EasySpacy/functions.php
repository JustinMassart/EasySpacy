<?php

/* *****
 * Return a compiled asset's URI
 * *****/

function easyspacy_asset($path): string
{
    return rtrim(get_template_directory_uri(), '/') . '/public/' . ltrim($path, '/');
}

/* *****
 * Register a custom post type
 * post_type toujours au singulier
 * *****/

add_action('init', 'easyspacy_custom_post_type');

function easyspacy_custom_post_type()
{
    register_post_type('Capsules', [
            'label' => 'Capsules',
            'labels' => [
                'singular_name' => 'Capsule',
                'add_new' => 'Ajouter une capsule',
                'add_new_item' => 'Ajouter une nouvelle capsule',
            ],
            'description' => 'Voici les dernières capsules ajoutées au site !',
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-welcome-add-page',
            'rewrite' => [
                'slug' => 'capsules'
            ]
        ]
    );
}

/* *****
 * Disable the Wordpress Gutenberg Editor
 * *****/

add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");

function disable_gutenberg_editor(): bool
{
    return false;
}