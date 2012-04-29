<?php

add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
add_image_size('cover-medium', 380, 100, false);
add_image_size('cover', 780, 250, false);

add_action('init', 'theme_init_styles');

require dirname(__FILE__).'/vendor/wp-less/bootstrap-for-theme.php';
$WPLessPlugin->dispatch();

/*
 * Sidebars
 */
register_sidebar(array(
    'id' => 'sidebar-single',
    'name' => 'Sidebar Single',
));
register_sidebar(array(
    'id' => 'sidebar-default',
    'name' => 'Sidebar Default',
));
register_sidebar(array(
    'id' => 'sidebar-common-top',
    'name' => 'Sidebar Common (Top)',
));
register_sidebar(array(
    'id' => 'sidebar-common-bottom',
    'name' => 'Sidebar Common (Bottom)',
    'before_widget' => '<li id="%1$s" class="widget widget-compact %2$s">',
));

function theme_init_styles(){
    wp_enqueue_style('theme', get_stylesheet_directory_uri().'/assets/styles/theme.less');
}