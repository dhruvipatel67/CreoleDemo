<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo d-flex align-items-center">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    echo '<span>' . get_bloginfo('name') . '</span>';
                }
                ?>
            </a>
            <nav id="navbar" class="navbar">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'    => 'navmenu',
                    'fallback_cb'   => false,
                    'depth'         => 2,
                    'walker'        => new WP_Bootstrap_Navwalker()
                ));
                ?>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>