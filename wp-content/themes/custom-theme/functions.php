<?php

function assessment_theme_enqueue()
{
    wp_enqueue_style('mainstyle', get_template_directory_uri() . '/style.css', false, '1.1', 'all');
}

add_action('wp_enqueue_scripts', 'assessment_theme_enqueue');

add_theme_support('post-formats', ['image', 'video', 'aside']);
