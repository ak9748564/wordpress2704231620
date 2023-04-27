<?php 
register_nav_menus(
    array(
        'header' => 'Header Menu',
        'footer' => 'Footer Menu',
        'sidebar' => 'Sidebar Menu',
        'primary' => 'Primary Menu',
        'secondary' => 'Secondary Menu')
);

add_theme_support('post-thumbnails');
add_theme_support('custom-header');
?>