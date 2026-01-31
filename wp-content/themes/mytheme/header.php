<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <button id="mobile-menu-toggle" class="menu-toggle d-lg-none" aria-expanded="false" aria-controls="main-menu">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </button>
        <h1 class="logo"><?php bloginfo('name'); ?></h1>

        <?php wp_nav_menu([
            'theme_location' => 'primary',
            'container' => 'nav',
            'menu_class' => 'menu'
        ]); ?>

    </header>
    <div class="menu-overlay"></div>