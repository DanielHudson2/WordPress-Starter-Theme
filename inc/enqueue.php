<?php

function wordpresstheme_enqueue() {

    // Enqueue Styles
    wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/css/styles.css' );

    //Enqueue Scripts
    wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/js/scripts.js' );
}

add_action( 'wp_enqueue_scripts', 'wordpresstheme_enqueue' );