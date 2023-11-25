<?php
// Hook <strong>ql_custom_portfolio()</strong> to the init action hook
add_action('init', 'custom_casino');

// The custom function to register a movie post type
function custom_casino()
{

    register_post_type('casino', [
        'label' => __('Casino', 'txtdomain'),
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-store',
        'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments', 'excerpt', 'custom-fields', 'post-formats', 'page-attributes', 'trackbacks'],
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'casino'],
        'taxonomies' => ['category-casino'],
        'labels' => [
            'singular_name' => __('casino', 'txtdomain'),
            'add_new_item' => __('Add new casino', 'txtdomain'),
            'new_item' => __('New casino', 'txtdomain'),
            'view_item' => __('View casino', 'txtdomain'),
            'not_found' => __('No casino found', 'txtdomain'),
            'not_found_in_trash' => __('No casino found in trash', 'txtdomain'),
            'all_items' => __('All casino', 'txtdomain'),
            'insert_into_item' => __('Insert into casino', 'txtdomain')
        ],
    ]);

    // muc category

    register_taxonomy('category-casino', ['casino'], [
        'label' => __('Category casino', 'txtdomain'),
        'hierarchical' => true,
        'rewrite' => ['slug' => 'category-casino'],
        'show_admin_column' => true,
        'show_in_rest' => true,
        'labels' => [
            'singular_name' => __('category-casino', 'txtdomain'),
            'all_items' => __('All category-casino', 'txtdomain'),
            'edit_item' => __('Edit category-casino', 'txtdomain'),
            'view_item' => __('View category-casino', 'txtdomain'),
            'update_item' => __('Update category-casino', 'txtdomain'),
            'add_new_item' => __('Add New category casino', 'txtdomain'),
            'new_item_name' => __('New category-casino Name', 'txtdomain'),
            'search_items' => __('Search category-casino', 'txtdomain'),
            'parent_item' => __('Parent category casino', 'txtdomain'),
            'parent_item_colon' => __('Parent category-casino:', 'txtdomain'),
            'not_found' => __('No category-casino found', 'txtdomain'),
        ],
    ]);
    register_taxonomy_for_object_type('category-casino', 'casino');
}


function casino_cate()
{
    $cats = get_the_terms(get_the_ID(), 'category-casino');
    foreach ($cats as $cat) :
        if ($cat->slug != 'category-casino') :
            // echo '<a href="' . get_term_link($cat->slug, 'career') . '">';
            echo $cat->name;
            // echo '</a>';
        endif;
    endforeach;
}