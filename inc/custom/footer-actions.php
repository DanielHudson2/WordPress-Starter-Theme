<?php

function wordpresstheme_custom_footer_action() {
    echo '

    ';
}
add_action( 'wp_footer', 'wordpresstheme_custom_footer_action', 10, 1 );