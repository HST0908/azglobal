<?php
function tt_create_taxonomy($args) {
    if(!is_array($args) || !$args['post_type'] || !$args['name'] || !$args['single'] || !$args['taxonomy'] || !$args['slug']) return;
    $post_type = $args['post_type'];
    $name = $args['name'];
    $single = $args['single'];
    $slug = $args['slug'];
    $rewrite = (isset($args['rewrite']))?$args['rewrite']:$slug;
    $taxonomy = $args['taxonomy'];
    $labels = array(
        'name' => __($name,'pp'),
        'singular_name' => __($single,'pp'),
        'search_items' => __('Filter By '.$name,'pp'),
        'popular_items' => __('Popular '.$name,'pp'),
        'all_items' => __('All '.$name,'pp'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Edit '.$single,'pp'),
        'update_item' => __('Update '.$single,'pp'),
        'add_new_item' => __('Add New '.$single,'pp'),
        'new_item_name' => __('Add New '.$single,'pp'),
        'menu_name' => __($name,'pp'),
    );
    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => $rewrite),
    );
    register_taxonomy($taxonomy, $post_type, $args);
}

add_action('init', 'create_custom_taxonomies', 0);
function create_custom_taxonomies() {
    $args = array(
        array(
            "post_type" => array('News'),
            "name" => "Loại bài viết",
            "single" => "Loại bài viết",
            "slug" => "post-category",
            "taxonomy" => "post-category",
            'taxonomies' => array('category', 'post_tag')
        ),
    );
    foreach($args as $arg) {
        if(!empty($arg['post_type'])) {
            tt_create_taxonomy($arg);
        }
    }
}