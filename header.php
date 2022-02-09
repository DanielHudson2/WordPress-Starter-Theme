<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
        <?php wp_head(); ?>
    </head>

    <body>
        
        <?php get_template_part( 'template-parts/header/site-header' ); ?>