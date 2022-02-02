<?php

if ( ! function_exists( 'wordpresstheme_setup' ) ) :

    function wordpresstheme_setup() {

        load_theme_textdomain( 'wordpresstheme', get_template_directory() . '/languages' );

        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }

endif;

add_action( 'after_theme_setup', 'wordpresstheme_setup' );

// Include Functions
foreach ( glob( get_template_directory() . "/inc/*.php") as $function ) {
    $function = basename($function);
    require get_template_directory() . '/inc/' . $function;
}