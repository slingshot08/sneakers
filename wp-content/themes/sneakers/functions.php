<?php

/* ------------------ THEME SUPPORT ---------------- */
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

/* ----------------- REGISTER MENUS ---------------- */
function register_my_menus()
{
    register_nav_menus(
        array(
            'main_menu' => __('Main Menu'),
            'footer_menu' => __('Footer Menu'),
        )
    );
}
add_action('init', 'register_my_menus');

if ( ! is_admin() && ! is_login_page() ) {
    
    wp_enqueue_style(
        'bootstrap',
        get_template_directory_uri() . '/assets/css/bootstrap.min.css',
        array(),
        null,
        'all'
    );

    wp_enqueue_style(
        '100x100',
        get_template_directory_uri() . '/assets/css/100x100.css',
        array(),
        null,
        'all'
    );
}

if ( ! is_admin() && ! is_login_page() ) {

    wp_enqueue_script(
        '100x100',
        get_template_directory_uri() . '/assets/js/bootstrap.min.js',
        array(),
        null,
        'all'
    );

    wp_enqueue_script(
        '100x100',
        get_template_directory_uri() . '/assets/js/100x100.js',
        array(),
        null,
        'all'
    );
}
    
function is_login_page() {
    return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}    

add_action( 'init', 'create_post_type_release' );

function create_post_type_release() {
    register_post_type( 'Release',
        array(
        'label' => __(' Releases '),
        'labels' => array(
                'singular_name' => __( 'Release' ),
                'singular_label' => __( 'Release' ),
                'edit_item' => __('Editar'),
                'add_new' => __('Añadir Release')    
            ),
        'public' => true,
        'exclude_from_search' => true,
        'show_in_admin_bar' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'publicly_queryable' => true,
        'has_archive' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'query_var' => true,
        'menu_position' => 5,
        'rewrite' => array('slug' => 'release'),
        'supports' => array('title','thumbnail')
        )
    );
}

/*
add_action( 'init', 'create_brands_taxonomy', 0 );

function create_brands_taxonomy()
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name' => _x( 'Brands', 'taxonomy general name' ),
    'singular_name' => _x( 'Brand', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Brands' ),
    'popular_items' => __( 'Popular Brands' ),
    'all_items' => __( 'All Brands' ),
    'parent_item' => __( 'Parent Brand' ),
    'parent_item_colon' => __( 'Parent Brand:' ),
    'edit_item' => __( 'Edit Brand' ),
    'update_item' => __( 'Update Brand' ),
    'add_new_item' => __( 'Add New Brand' ),
    'new_item_name' => __( 'New Brand Name' ),
  );
  register_taxonomy('brands',array('release'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'brands' ),
  ));
}
*/

?>