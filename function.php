<?php
if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

/**
 * Theme Setup
 */
function sailor_setup()
{
    load_theme_textdomain('sailor', get_template_directory() . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('custom-logo');

    // Register Navigation Menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'sailor'),
        'footer-useful' => esc_html__('Footer Useful Links', 'sailor'),
        'footer-services' => esc_html__('Footer Services', 'sailor')
    ));
}
add_action('after_setup_theme', 'sailor_setup');

/**
 * Register widget areas
 */
function sailor_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Footer Newsletter', 'sailor'),
        'id'            => 'footer-newsletter',
        'description'   => esc_html__('Add widgets here for newsletter section.', 'sailor'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    // Add other widget areas if needed
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'sailor'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'sailor'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'sailor_widgets_init');

/**
 * Enqueue scripts and styles
 */
function sailor_scripts()
{
    // Enqueue styles
    wp_enqueue_style('sailor-bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), _S_VERSION);
    wp_enqueue_style('sailor-bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), _S_VERSION);
    wp_enqueue_style('sailor-main', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION);
    wp_enqueue_style('sailor-style', get_stylesheet_uri(), array(), _S_VERSION);

    // Enqueue scripts
    wp_enqueue_script('sailor-bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('sailor-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'sailor_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
