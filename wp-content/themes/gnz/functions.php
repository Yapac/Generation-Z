<?php
function yapac_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','yapac_theme_support');


function yapac_menus()
{
    $locations = array(
        'primary' => "Primary menu Header",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus($locations);
}
add_action('init', 'yapac_menus');


function yapac_register_styles()
{
    wp_enqueue_style('yapac_bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css", array(), '5.1.2' ,'all');
    wp_enqueue_style('yapac_aos', "https://unpkg.com/aos@2.3.1/dist/aos.css", array('yapac_bootstrap') ,"2.3.1" ,'all');
    wp_enqueue_style('yapac_style', get_template_directory_uri()."/style.css", array('yapac_bootstrap'),"2.25" ,'all');
    wp_enqueue_style('yapac_sdyle', "https://fonts.googleapis.com/icon?family=Material+Icons", array('yapac_bootstrap'),"1.0" ,'all');
    wp_enqueue_style('yapac_fa', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css", array('yapac_bootstrap'),"6.0.0" ,'all');
}

add_action('wp_enqueue_scripts', 'yapac_register_styles');

function yapac_register_scripts()
{
    wp_enqueue_script('yapac_bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js", array(), '5.1.2', true);
    wp_enqueue_script('yapac_jquery',"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js", array(), '3.6.0', true);
    wp_enqueue_script('yapac_aos',"https://unpkg.com/aos@2.3.1/dist/aos.js", array(), '2.3.1', true);
    wp_enqueue_script('yapac_script',get_template_directory_uri()."/assets/js/script.js", array(), '1.5', true);
}
add_action('wp_enqueue_scripts', 'yapac_register_scripts');

// remove admin bar
add_filter('show_admin_bar', '__return_false');

// Maximum upload file
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

// Custom post types (Members)

function members_post_type()
{
    $args = array(
        'labels' => array(
            'name' => 'Members',
            'singular_name' => 'Member',
            'all_items' => 'All members'
        ),
        // 'hierarchical' => true,
        'public' => true,
        'query_var'           => true,
        'rewrite'             => true,
        'has_archive' => true,
        'supports' => array('title', 'editor' , 'thumbnail'),
        'menu_icon' => 'dashicons-groups'
    );
    register_post_type('members', $args);

    flush_rewrite_rules(false); // Remove rewrite rules 
}
add_action('init', 'members_post_type');

function members_taxonomys()
{
    $args = array(
        'label'=> 'My categories',
        'public' => true,
        'hierarchical' => true
    );
    register_taxonomy('my_categories', array('members'), $args);
}

add_action('init', 'members_taxonomys');


// Custom post types (Classes)

function myclasses_post_type()
{
    $args = array(
        'labels' => array(
            'name' => 'Classes',
            'singular_name' => 'Class',
            'all_items' => 'All classes'
        ),
        'public' => true,
        'query_var'           => true,
        'rewrite'             => true,
        'has_archive' => true,
        'supports' => array('title', 'editor' , 'thumbnail'),
        'menu_icon' => 'dashicons-welcome-learn-more',
		'show_in_rest' => true
    );
    register_post_type('myclasses', $args);

    flush_rewrite_rules(false); // Remove rewrite rules 
}
add_action('init', 'myclasses_post_type');

function myclasses_taxonomys()
{
    $args = array(
        'label'=> 'My tags',
        'public' => true,
        'hierarchical' => false
    );
    register_taxonomy('my_tags', array('myclasses'), $args);
}

add_action('init', 'myclasses_taxonomys');



?>