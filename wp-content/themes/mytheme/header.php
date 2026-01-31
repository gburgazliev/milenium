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

        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/milenium_logo.png' ); ?>"  
        width="250px"  height="140px" alt="Logo">

        <?php wp_nav_menu([
            'theme_location' => 'primary',
            'container' => 'nav',
            'menu_class' => 'menu',
            'items_wrap'     => '<button class="nav-toggle" type="button" aria-controls="primary-menu" aria-expanded="false">
            <span class="line"></span>
            <span class="line"></span>
          </button>
            <ul id="menu-header-menu" class="%2$s">%3$s</ul>',

        ]); ?>

    </header>
    <div class="menu-overlay"></div>