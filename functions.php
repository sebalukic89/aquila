<?php

/**
 * Theme Functions
 * 
 * @package Aquila
 */

use AQUILA_THEME\Inc\AQUILA_THEME;

if (!defined('AQUILA_DIR_PATH')) {
    define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory()));
}

require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';

function aquila_get_theme_instance()
{
    \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}

aquila_get_theme_instance();

function aquila_enqueue_scripts()
{
    // Resgister Styles
    wp_register_style('aquila-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

    // Resgister Scripts
    wp_register_script('aquila-js', get_template_directory_uri() . "/assets/main.js", [], filemtime(get_template_directory() . '/assets/main.js'), true);
    wp_register_script('bootstrap-js', get_template_directory_uri() . "/assets/src/library/js/bootstrap.min.js", ['jquery'], false, true);

    // Engueue Styles
    wp_enqueue_style('aquila-stylesheet');
    wp_enqueue_style('bootstrap-css');

    // Engueue Scripts
    wp_enqueue_script('aquila-js');
    wp_enqueue_script('bootstrap-js');
}

add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');
