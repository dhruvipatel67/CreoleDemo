<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3><?php bloginfo('name'); ?></h3>
                        <?php
                        $address = get_theme_mod('footer_address', 'A108 Adam Street, NY 535022, USA');
                        $phone = get_theme_mod('footer_phone', '+1 5589 55488 55');
                        $email = get_theme_mod('footer_email', 'info@example.com');
                        ?>
                        <p>
                            <?php echo esc_html($address); ?><br><br>
                            <strong>Phone:</strong> <?php echo esc_html($phone); ?><br>
                            <strong>Email:</strong> <?php echo esc_html($email); ?><br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'container' => false,
                        'menu_class' => 'footer-menu'
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span><?php bloginfo('name'); ?></span></strong>. All Rights Reserved
        </div>
    </div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php wp_footer(); ?>
</body>

</html>