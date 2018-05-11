<?php 
function load_assets()
{
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.min.js');
    wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
}

function custom_add_google_fonts()
{
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Righteous
', false);
}

add_action('wp_enqueue_scripts', 'custom_add_google_fonts');


// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'tm7200-menu' ),
) );

add_action('wp_enqueue_scripts','load_assets');
?>