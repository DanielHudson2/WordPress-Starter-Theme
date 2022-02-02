<?php

function wordpresstheme_enqueue() {

    // Enqueue Styles
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );

    //Enqueue Scripts
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/scripts.js' );
}

add_action( 'wp_enqueue_scripts', 'wordpresstheme_enqueue' );