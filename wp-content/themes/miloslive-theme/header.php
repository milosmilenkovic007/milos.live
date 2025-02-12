<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <nav class="main-navigation">
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'primary', 
                'container' => 'ul',
                'menu_class' => 'nav-menu'
            ));
            ?>
        </nav>

        <div class="burger-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div class="mobile-menu">
        <?php 
        wp_nav_menu(array(
            'theme_location' => 'primary', 
            'container' => 'ul',
            'menu_class' => 'mobile-nav-menu'
        ));
        ?>
    </div>
</header>
