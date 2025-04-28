<?php

/**
 * The template for displaying the footer
 *
 * @package Sailor
 */
?>

</main>

<footer id="footer" class="footer dark-background">
    <div class="container footer-top">
        <div class="row gy-4">
            <!-- Company Info & Contact Section -->
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo d-flex align-items-center">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        echo '<span class="sitename">' . get_bloginfo('name') . '</span>';
                    }
                    ?>
                </a>

                <!-- Contact Information -->
                <div class="footer-contact pt-3">
                    <?php
                    $address_line1 = get_theme_mod('sailor_address_line1', 'A108 Adam Street');
                    $address_line2 = get_theme_mod('sailor_address_line2', 'New York, NY 535022');
                    $phone = get_theme_mod('sailor_phone', '+1 5589 55488 55');
                    $email = get_theme_mod('sailor_email', 'info@example.com');
                    ?>
                    <p><?php echo esc_html($address_line1); ?></p>
                    <p><?php echo esc_html($address_line2); ?></p>
                    <p class="mt-3"><strong><?php echo esc_html__('Phone:', 'sailor'); ?></strong> <span><?php echo esc_html($phone); ?></span></p>
                    <p><strong><?php echo esc_html__('Email:', 'sailor'); ?></strong> <span><?php echo esc_html($email); ?></span></p>
                </div>

                <!-- Social Links -->
                <div class="social-links d-flex mt-4">
                    <?php
                    $social_links = array(
                        'twitter' => array(
                            'mod' => 'sailor_twitter_url',
                            'icon' => 'bi-twitter-x'
                        ),
                        'facebook' => array(
                            'mod' => 'sailor_facebook_url',
                            'icon' => 'bi-facebook'
                        ),
                        'instagram' => array(
                            'mod' => 'sailor_instagram_url',
                            'icon' => 'bi-instagram'
                        ),
                        'linkedin' => array(
                            'mod' => 'sailor_linkedin_url',
                            'icon' => 'bi-linkedin'
                        )
                    );

                    foreach ($social_links as $platform => $data) {
                        $url = get_theme_mod($data['mod'], '');
                        if (!empty($url)) {
                            printf(
                                '<a href="%s" target="_blank" rel="noopener noreferrer"><i class="bi %s"></i></a>',
                                esc_url($url),
                                esc_attr($data['icon'])
                            );
                        }
                    }
                    ?>
                </div>
            </div>

            <!-- Useful Links Section -->
            <div class="col-lg-2 col-md-3 footer-links">
                <h4><?php echo esc_html__('Useful Links', 'sailor'); ?></h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-useful',
                    'menu_id'        => 'footer-useful-menu',
                    'container'      => false,
                    'depth'          => 1,
                    'fallback_cb'    => '__return_false',
                ));
                ?>
            </div>

            <!-- Services Section -->
            <div class="col-lg-2 col-md-3 footer-links">
                <h4><?php echo esc_html__('Our Services', 'sailor'); ?></h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-services',
                    'menu_id'        => 'footer-services-menu',
                    'container'      => false,
                    'depth'          => 1,
                    'fallback_cb'    => '__return_false',
                ));
                ?>
            </div>

            <!-- Newsletter Section -->
            <div class="col-lg-4 col-md-12 footer-newsletter">
                <?php if (is_active_sidebar('footer-newsletter')) : ?>
                    <?php dynamic_sidebar('footer-newsletter'); ?>
                <?php else : ?>
                    <h4><?php echo esc_html__('Our Newsletter', 'sailor'); ?></h4>
                    <p><?php echo esc_html__('Subscribe to our newsletter and receive the latest news about our products and services!', 'sailor'); ?></p>
                    <?php
                    // Display newsletter form if Contact Form 7 is active
                    if (function_exists('wpcf7_contact_form')) {
                        $newsletter_form_id = get_theme_mod('sailor_newsletter_form_id', '');
                        if (!empty($newsletter_form_id)) {
                            echo do_shortcode('[contact-form-7 id="' . esc_attr($newsletter_form_id) . '"]');
                        }
                    }
                    ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="container copyright text-center mt-4">
        <p>
            © <span><?php echo esc_html__('Copyright', 'sailor'); ?></span>
            <strong class="px-1 sitename"><?php bloginfo('name'); ?></strong>
            <span><?php echo esc_html__('All Rights Reserved', 'sailor'); ?></span>
        </p>
        <div class="credits">
            <?php
            printf(
                esc_html__('Theme: %1$s by %2$s.', 'sailor'),
                'Sailor',
                '<a href="https://bootstrapmade.com/" target="_blank" rel="noopener noreferrer">BootstrapMade</a>'
            );
            ?>
        </div>
    </div>
</footer>

<!-- Scroll Top Button -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>

<!-- Preloader -->
<div id="preloader"></div>

<?php wp_footer(); ?>

</body>

</html>