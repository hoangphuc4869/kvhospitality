<?php
// Hook <strong>ql_custom_portfolio()</strong> to the init action hook
add_action('init', 'custom_tour');

// The custom function to register a movie post type
function custom_tour()
{

    register_post_type('tour', [
        'label' => __('Tour', 'txtdomain'),
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-site',
        'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments', 'excerpt', 'custom-fields', 'post-formats', 'page-attributes', 'trackbacks'],
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'tour'],
        'taxonomies' => ['category-tour'],
        'labels' => [
            'singular_name' => __('tour', 'txtdomain'),
            'add_new_item' => __('Add new tour', 'txtdomain'),
            'new_item' => __('New tour', 'txtdomain'),
            'view_item' => __('View tour', 'txtdomain'),
            'not_found' => __('No tour found', 'txtdomain'),
            'not_found_in_trash' => __('No tour found in trash', 'txtdomain'),
            'all_items' => __('All tour', 'txtdomain'),
            'insert_into_item' => __('Insert into tour', 'txtdomain')
        ],
    ]);

    // muc category

    register_taxonomy('category-tour', ['tour'], [
        'label' => __('Category tour', 'txtdomain'),
        'hierarchical' => true,
        'rewrite' => ['slug' => 'category-tour'],
        'show_admin_column' => true,
        'show_in_rest' => true,
        'labels' => [
            'singular_name' => __('category-tour', 'txtdomain'),
            'all_items' => __('All category-tour', 'txtdomain'),
            'edit_item' => __('Edit category-tour', 'txtdomain'),
            'view_item' => __('View category-tour', 'txtdomain'),
            'update_item' => __('Update category-tour', 'txtdomain'),
            'add_new_item' => __('Add New category tour', 'txtdomain'),
            'new_item_name' => __('New category-tour Name', 'txtdomain'),
            'search_items' => __('Search category-tour', 'txtdomain'),
            'parent_item' => __('Parent category tour', 'txtdomain'),
            'parent_item_colon' => __('Parent category-tour:', 'txtdomain'),
            'not_found' => __('No category-tour found', 'txtdomain'),
        ],
    ]);
    register_taxonomy_for_object_type('category-tour', 'tour');
}


function tour_cate()
{
    $cats = get_the_terms(get_the_ID(), 'category-tour');
    foreach ($cats as $cat) :
        if ($cat->slug != 'category-tour') :
            // echo '<a href="' . get_term_link($cat->slug, 'career') . '">';
            echo $cat->name;
            // echo '</a>';
        endif;
    endforeach;
}