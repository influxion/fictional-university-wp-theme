<?php

function university_files()
{
    wp_enqueue_script('main-university-js', get_theme_file_uri('./build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('font-google', '//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,700;1,400;1,700&display=swap');
    wp_enqueue_style('university_main_styles', get_theme_file_uri('./build/style-index.css'));
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('./build/index.css'));
}
add_action('wp_enqueue_scripts', 'university_files');

function university_features()
{
    // register_nav_menu('headerMenuLocation', 'Header Menu Location');
    // register_nav_menu('footerLocationOne', 'Footer Location One');
    // register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'university_features');
