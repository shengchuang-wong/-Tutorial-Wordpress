<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Make this iOS compatible -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="La Pizzeria Restaurant">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/apple-touch-icon.jpg">
    <title>La Pizzeria</title>

    <!-- Make this Android compatible -->
    <meta name="theme-color" content="#a61206">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="La Pizzeria Restaurant">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/icon.png" sizes="192x192">

    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

<header class="site-header">
    <div class="container">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')) ?>">
                <img class="logo_image" src="<?php echo get_template_directory_uri().'/img/logo.svg' ?>" alt="logo">
            </a>
        </div> <!-- logo -->
        <div class="header-information">
            <div class="socials">
                <?php
                    $args = array(
                        'theme_location' => 'social-menu',
                        'container' => 'nav',
                        'container_class' => 'socials',
                        'container_id' => 'socials',
                        'link_before' => '<span class="sr-text">',
                        'link_after' => '</span>'
                    );
                    wp_nav_menu($args);
                ?>
            </div>
            <div class="address">
                <p><?php echo esc_html(get_option('lapizzeria_info_location')); ?></p>
                <p>Phone Number: <?php echo esc_html(get_option('lapizzeria_info_phonenumber')); ?></p>
            </div>
        </div> <!-- socials -->
    </div><!-- container -->
</header>
<div class="main-menu">
    <div class="mobile-menu">
        <a href="#" class="mobile"><i class="fa fa-bars"></i> Menu</a>
    </div>
    <div class="navigation container">
        <?php
            $args = array(
                'theme_location' => 'header-menu',
                'container' => 'nav',
                'container_class' => 'site-nav'
            );
            wp_nav_menu($args);
        ?>
    </div>
</div>