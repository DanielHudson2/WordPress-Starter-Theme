<?php if ( has_nav_menu( 'primary' ) ) : ?>

	<nav id="site-navigation" class="c-primary-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'wordpresstheme' ); ?>"><?php

		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'menu_class'      => 'menu align-center',
				'container_class' => 'primary-menu-container',
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		
    ?></nav>

<?php endif; ?>
