<?php

function detramax_scripts() {
    wp_enqueue_style('styles', get_template_directory_uri() . '/css/style.css', array(), filemtime(get_template_directory() . '/css/style.css'), false);
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'detramax_scripts' );