<?php

function university_post_types()
{
    // Event post type
    register_post_type('event', array(
        // 'supports' => array('title', 'editor', 'excerpt!', 'custom-fields'), < this is how you manually add custom plugins
        'supports' => array('title', 'editor', 'excerpt!'),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));


    //Program post type

    register_post_type('program', array(
        // 'supports' => array('title', 'editor', 'excerpt!', 'custom-fields'), < this is how you manually add custom plugins
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug' => 'programs'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'Add New Programs',
            'edit_item' => 'Edit Programs',
            'all_items' => 'All Programs',
            'singular_name' => 'Program'
        ),
        'menu_icon' => 'dashicons-awards'
    ));



    // Professor Post Type

    register_post_type('professor', array(
        // 'supports' => array('title', 'editor', 'excerpt!', 'custom-fields'), < this is how you manually add custom plugins
        'supports' => array('title', 'editor', 'thumbnail'),

        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Professors',
            'add_new_item' => 'Add New Professor',
            'edit_item' => 'Edit Professor',
            'all_items' => 'All Professor',
            'singular_name' => 'Professor'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));
}

add_action('init', 'university_post_types');
