<?php

/**
 * Enqueue scripts and styles.
 */
function twentysixteen_child_scripts()
{
    wp_enqueue_style('twentysixteen', get_template_directory_uri().'/style.css', false, null, 'all');
    wp_enqueue_style('twentysixteen_child', get_stylesheet_uri(). '/style.css', false, null, 'all');
}

add_action('wp_enqueue_scripts', 'twentysixteen_child_scripts', 999);
