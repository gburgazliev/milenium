<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link
  rel="stylesheet"
  href="https://unpkg.com/leaflet/dist/leaflet.css"
/>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <button id="mobile-menu-open" class="menu-toggle d-lg-none" aria-expanded="false" aria-controls="main-menu">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </button>

        <a href="/milenium/"><img class="z-1" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/milenium_logo.png' ); ?>"  
        width="250px"  height="140px" alt="Logo"></a>

        <?php
$logo_url = esc_url( get_template_directory_uri() . '/assets/images/milenium_logo.png' );
$home_url = esc_url( home_url('/') );

wp_nav_menu([
  'theme_location' => 'header',
  'container'      => 'nav',
  'menu_class'     => 'menu',
  'items_wrap'     =>
    '<button class="d-none" id="mobile-menu-close" type="button" aria-controls="primary-menu" aria-expanded="false">
      <span class="line"></span>
      <span class="line"></span>
    </button>
    <ul id="menu-header-menu" class="%2$s">%3$s</ul>
    <a href="' . $home_url . '" class="d-none">
      <img class="z-1" src="' . $logo_url . '" alt="Logo">
    </a>',
]);
?>


    </header>
    <div class="menu-overlay"></div>