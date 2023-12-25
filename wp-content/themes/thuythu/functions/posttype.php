<?php
function pp_create_post_type($args)
{
    if (!is_array($args) || !$args['post_type'] || !$args['name'] || !$args['single'] || !$args['slug']) return;
    $post_type = $args['post_type'];
    $name = $args['name'];
    $single = $args['single'];
    $slug = $args['slug'];
    $rewrite = (isset($args['rewrite'])) ? $args['rewrite'] : $args['slug'];
    $icon = $args['icon'] ? $args['icon'] : "dashicons-star-filled";
    $supports = isset($args['supports']) ? $args['supports'] : array('title', 'editor', 'revisions', 'thumbnail', 'author','excerpt');
    $public = isset($args['public']) ? $args['public'] : true;
    $capabilities = isset($args['capabilities']) ? $args['capabilities'] : array();
    register_post_type($post_type, array(
        'labels' => array(
            'name' => __($name, 'pp'),
            'singular_name' => __($single, 'pp'),
            'add_new' => __('Add New ' . $single, 'pp'),
            'add_new_item' => __('Add New ' . $single, 'pp'),
            'edit_item' => __('Edit ' . $single, 'pp'),
            'new_item' => __('New' . $single, 'pp'),
            'all_items' => __('All ' . $name, 'pp'),
            'view_item' => __('View ' . $single, 'pp'),
            'search_items' => __('Filter By ' . $name, 'pp'),
            'not_found' => __('Not Found ' . $single, 'pp'),
            'not_found_in_trash' => __('Not Found ' . $single . ' In Trash', 'pp'),
            'parent_item_colon' => '',
            'menu_name' => __($name, 'pp')
        ),
        'public' => $public,
        'menu_icon' => $icon,
        'exclude_from_search' => false,
        'menu_position' => 6,
        'has_archive' => true,
        'taxonomies' => array($post_type),
        'rewrite' => array('slug' => $rewrite),
        'publicly_queryable' => $public,
        'supports' => $supports,
        'capabilities' => $capabilities,
    ));
}

add_action('init', 'create_new_custom_post_type');
function create_new_custom_post_type()
{
    $args = array(
        array(
            "post_type" => 'news',
            "name" => "Tin tức",
            "single" => "Tin tức",
            "slug" => "news",
            "icon" => "dashicons-smiley"
        ),
    );
    foreach ($args as $arg) {
        if ($arg['post_type']) {
            pp_create_post_type($arg);
        }
    }
}