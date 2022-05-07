<?php

if ( ! function_exists( 'wordpresstheme_setup' ) ) :

    function wordpresstheme_setup() {

        load_theme_textdomain( 'wordpresstheme', get_template_directory() . '/languages' );

        add_theme_support( 'post-thumbnails' );

        add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);
    }

endif;

add_action( 'after_theme_setup', 'wordpresstheme_setup' );

// Include Functions
foreach ( glob( dirname(__FILE__) . '/inc/*.php') as $filename ) {
    include_once $filename;
}

foreach ( glob( dirname(__FILE__) . '/inc/custom/*.php') as $filename ) {
    include_once $filename;
}

add_theme_support(
    'custom-logo',
    array(
        'height'               => 100,
        'width'                => 300,
        'flex-width'           => true,
        'flex-height'          => true,
        'unlink-homepage-logo' => true,
    )
);