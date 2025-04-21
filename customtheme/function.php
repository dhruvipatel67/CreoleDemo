<?php
function sailor_theme_setup()
{

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'sailor'),
        'footer-menu' => __('Footer Menu', 'sailor')
    ));
}
add_action('after_setup_theme', 'sailor_theme_setup');


function sailor_enqueue_scripts()
{

    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/vendor/animate.css/animate.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css');
    wp_enqueue_style('boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css');
    wp_enqueue_style('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css');
    wp_enqueue_style('remixicon', get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css');
    wp_enqueue_style('sailor-style', get_template_directory_uri() . '/assets/css/style.css');


    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '', true);
    wp_enqueue_script('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), '', true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), '', true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), '', true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/vendor/waypoints/noframework.waypoints.js', array(), '', true);
    wp_enqueue_script('validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), '', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'sailor_enqueue_scripts');


function sailor_custom_post_types()
{

    register_post_type('portfolio', array(
        'labels' => array(
            'name' => __('Portfolio', 'sailor'),
            'singular_name' => __('Portfolio Item', 'sailor')
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio'
    ));


    register_post_type('services', array(
        'labels' => array(
            'name' => __('Services', 'sailor'),
            'singular_name' => __('Service', 'sailor')
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-admin-tools'
    ));
}
add_action('init', 'sailor_custom_post_types');

function sailor_theme_options_page()
{
    add_menu_page(
        'Theme Options',
        'Theme Options',
        'manage_options',
        'theme-options',
        'sailor_theme_options_page_html',
        'dashicons-admin-customizer'
    );
}
add_action('admin_menu', 'sailor_theme_options_page');

function sailor_theme_options_page_html()
{

    if (!current_user_can('manage_options')) {
        return;
    }
?>
    <div class="wrap">
        <h1><?= esc_html(get_admin_page_title()); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields('sailor_options');
            do_settings_sections('sailor_options');
            submit_button('Save Settings');
            ?>
        </form>
    </div>
<?php
}
