<?php
//! Hook
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_styles()
{
    $parent_style = 'parent-style';
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'add_custom_script');

/**
 * Function to enqueue a custom javascript-file
 * https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 */
function add_custom_script()
{
    wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js');
}
