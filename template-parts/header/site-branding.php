<?php

    $blog_info    = get_bloginfo( 'name' );
    $description  = get_bloginfo( 'description', 'display' );
    $show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
    $header_class = $show_title ? 'c-site-branding__title' : 'screen-reader-text';

?><div class="c-site-branding"><?php 
    
    ?><div class="c-site-branding__logo"><?php the_custom_logo(); ?></div>
    
    <div class="c-site-branding__info"><?php 
    
        if ( $blog_info ) : 
        
            if ( is_front_page() && ! is_paged() ) : 
            
                ?><h1 class="<?php echo esc_attr( $header_class ); ?>"><?php echo esc_html( $blog_info ); ?></h1><?php 
                
            elseif ( is_front_page() && ! is_home() ) : 
            
                ?><h1 class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></h1><?php 
                
            else : 

                ?><p class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></p><?php
                
            endif; 
                
        endif; 
        
        if ( $description && true === get_theme_mod( 'display_title_and_tagline', true ) ) : 
        
            ?><p class="c-site-branding__description"><?php 
            
                echo $description; // phpcs:ignore WordPress.Security.EscapeOutput 
                
            ?></p><?php 
            
        endif; 

    ?></div>
</div><!-- .site-branding -->