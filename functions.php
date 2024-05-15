<?php
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_post_type_support('page', 'excerpt');


// define some file shortcut
define('THEMEPATH', get_template_directory_uri());
define('THEMEIMAGE', THEMEPATH . '/assets/images/');

function add_nav_menus()
{
    register_nav_menus(array(
        'header-menu' => 'Header menu',
        'footer-menu' => 'Footer menu',
        'footer-service' => 'Footer service',
        'footer-expertise' => 'Footer Expertise'
    ));
}

add_action('init', 'add_nav_menus');

// // Remove junk from <head>
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);


//enqueue script & style 

function enqueue_files()
{
    wp_enqueue_style('main-css', THEMEPATH . '/dist/app.css');
    wp_enqueue_style('slick-css', THEMEPATH . '/assets/slick/slick.css');
    wp_enqueue_script('jquery', THEMEPATH . '/assets/slick/jquery-1.11.0.min.js');
    wp_enqueue_script('slick-js', THEMEPATH . '/assets/slick/slick.min.js');
    wp_enqueue_script('xieno-custom', THEMEPATH . '/assets/js/xieno-custom.js', array(), true, 50);
}

add_action('wp_enqueue_scripts', 'enqueue_files');

// Add images type
function add_file_types_to_uploads($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');


?>