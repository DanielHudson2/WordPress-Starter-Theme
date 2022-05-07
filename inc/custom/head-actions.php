<?php

function wordpresstheme_custom_head_action() {
    echo '
        
    ';
}
add_action( 'wp_head', 'wordpresstheme_custom_head_action', 10, 1 );