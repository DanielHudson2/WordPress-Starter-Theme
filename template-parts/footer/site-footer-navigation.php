<?php if ( has_nav_menu( 'footer' ) ) : ?>

<nav id="site-footer-navigation" class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer menu', 'wordpresstheme' ); ?>"><?php

    wp_nav_menu(
        array(
            'theme_location'  => 'footer',
            'menu_class'      => 'menu-wrapper',
            'container_class' => 'footer-menu-container',
            'items_wrap'      => '<ul id="footer-menu-list" class="%2$s">%3$s</ul>',
            'fallback_cb'     => false,
        )
    );
    
?></nav>

<?php endif; ?>