<?php
//my functions page

function my_excerpt_length() {
    return 25;
}

add_filter('excerpt_length', 'my_excerpt_length');

set_post_thumbnail_size(200,200);
add_theme_support('post-thumbnails');

// Register Navigation

register_nav_menus(array(
'primary' => 'Primary Menu', 
'footer' => 'Footer Menu'
));


// enqueing scripts

function my_theme_scripts() {
    wp_enqueue_script( 'astuteo', 'https://frirod1.dreamhosters.com/it270/site1/wp-content/themes/first-theme/js/astuteo.js?ver=6.5.5', '1.0.0', false );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );