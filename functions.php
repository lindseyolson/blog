<?php
add_action( 'wp_enqueue_scripts', 'enqueueStyles' );
add_action( 'wp_enqueue_scripts', 'enqueueScripts');

function enqueueStyles() {
    wp_enqueue_style( 'parent-style', 
        get_template_directory_uri() . '/style.css' );
}

function enqueueScripts() {
    wp_enqueue_script(
        'script',
        get_stylesheet_directory_uri() . '/client.js',
        ['jQuery' ]
    );
}


?>




