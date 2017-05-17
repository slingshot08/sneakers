<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

if ( ! is_admin() && ! $this->is_login_page() ) {
    wp_enqueue_style(
        '100x100',
        get_template_directory_uri() . '/assets/css/100x100.css',
        array(),
        null,
        'all'
    );
}

if ( ! is_admin() && ! $this->is_login_page() ) {
    wp_deregister_script( 'jquery' );

    wp_enqueue_script(
        'home',
        get_template_directory_uri() . '/assets/js/100x100.js',
        array(),
        null,
        'all'
    );
}
    
function is_login_page() {
    return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}    

add_action( 'init', 'create_post_type_marca' );

function create_post_type_marca() {
    register_post_type( 'Marca',
        array(
        'label' => __(' Marcas '),
        'labels' => array(
                'singular_name' => __( 'Marca' ),
                'singular_label' => __( 'Marca' ),
                'edit_item' => __('Editar'),
                'add_new' => __('Añadir Marca')    
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
        //'menu_icon' => get_stylesheet_directory_uri() .'/images/marca.png', //26px26
        'rewrite' => array('slug' => 'marca'),
        'supports' => array('title','thumbnail')
        )
    );
}


function is_subcategory (){
    $cat = get_query_var('cat');
    $category = get_category($cat);
    $category->parent;
    return ( $category->parent == '0' ) ? false : true;
}


?>