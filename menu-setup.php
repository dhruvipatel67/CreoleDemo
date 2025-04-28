function register_sailor_menus() {
register_nav_menus(
array(
'primary-menu' => __('Primary Menu', 'sailor'),
'footer-useful' => __('Footer Useful Links', 'sailor'),
'footer-services' => __('Footer Services', 'sailor')
)
);
}
add_action('init', 'register_sailor_menus');