<?php 
function load_assets()
{
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.min.js');
    wp_enqueue_script('bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js');
    wp_enqueue_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
}

function custom_add_google_fonts()
{
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Righteous
', false);
}

add_action('wp_enqueue_scripts', 'custom_add_google_fonts');

add_action('wp_enqueue_scripts', 'load_assets');

add_theme_support('post-thumbnails');

$args = array(
    'width' => 100,
    'height' => 100,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support('custom-header', $args);

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'tm7200' ),
) );
?>