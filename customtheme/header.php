<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>


    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <?php if (has_custom_logo()): ?>
                <div class="logo me-auto">
                    <?php the_custom_logo(); ?>
                </div>
            <?php else: ?>
                <h1 class="logo me-auto">
                    <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                </h1>
            <?php endif; ?>

            <nav id="navbar" class="navbar">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu',
                    'container' => false,
                    'menu_class' => 'nav-menu',
                    'fallback_cb' => false
                ));
                ?>
            </nav>
        </div>
    </header>