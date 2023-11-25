<?php
// Hook <strong>ql_custom_portfolio()</strong> to the init action hook
add_action('init', 'custom_restaurant');

// The custom function to register a movie post type
function custom_restaurant()
{

    register_post_type('restaurant', [
        'label' => __('Restaurant', 'txtdomain'),
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-food',
        'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments', 'excerpt', 'custom-fields', 'post-formats', 'page-attributes', 'trackbacks'],
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'restaurant'],
        'taxonomies' => ['category-restaurant'],
        'labels' => [
            'singular_name' => __('restaurant', 'txtdomain'),
            'add_new_item' => __('Add new restaurant', 'txtdomain'),
            'new_item' => __('New restaurant', 'txtdomain'),
            'view_item' => __('View restaurant', 'txtdomain'),
            'not_found' => __('No restaurant found', 'txtdomain'),
            'not_found_in_trash' => __('No restaurant found in trash', 'txtdomain'),
            'all_items' => __('All restaurant', 'txtdomain'),
            'insert_into_item' => __('Insert into restaurant', 'txtdomain')
        ],
    ]);

    // muc category

    register_taxonomy('category-restaurant', ['restaurant'], [
        'label' => __('Category restaurant', 'txtdomain'),
        'hierarchical' => true,
        'rewrite' => ['slug' => 'category-restaurant'],
        'show_admin_column' => true,
        'show_in_rest' => true,
        'labels' => [
            'singular_name' => __('category-restaurant', 'txtdomain'),
            'all_items' => __('All category-restaurant', 'txtdomain'),
            'edit_item' => __('Edit category-restaurant', 'txtdomain'),
            'view_item' => __('View category-restaurant', 'txtdomain'),
            'update_item' => __('Update category-restaurant', 'txtdomain'),
            'add_new_item' => __('Add New category restaurant', 'txtdomain'),
            'new_item_name' => __('New category-restaurant Name', 'txtdomain'),
            'search_items' => __('Search category-restaurant', 'txtdomain'),
            'parent_item' => __('Parent category restaurant', 'txtdomain'),
            'parent_item_colon' => __('Parent category-restaurant:', 'txtdomain'),
            'not_found' => __('No category-restaurant found', 'txtdomain'),
        ],
    ]);
    register_taxonomy_for_object_type('category-restaurant', 'restaurant');
}


function restaurant_cate()
{
    $cats = get_the_terms(get_the_ID(), 'category-restaurant');
    foreach ($cats as $cat) :
        if ($cat->slug != 'category-restaurant') :
            // echo '<a href="' . get_term_link($cat->slug, 'career') . '">';
            echo $cat->name;
            // echo '</a>';
        endif;
    endforeach;
}