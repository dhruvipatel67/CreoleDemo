<?php get_header(); ?>

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-ride="carousel" class="carousel slide carousel-fade">
        <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/slide/slide-1.jpg);">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Welcome to <span><?php bloginfo('name'); ?></span></h2>
                        <p class="animate__animated animate__fadeInUp">Your trusted partner for professional services</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/slide/slide-2.jpg);">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Professional Services</h2>
                        <p class="animate__animated animate__fadeInUp">Delivering excellence in everything we do</p>
                        <a href="#services" class="btn-get-started animate__animated animate__fadeInUp scrollto">Our Services</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/slide/slide-3.jpg);">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Our Portfolio</h2>
                        <p class="animate__animated animate__fadeInUp">Check out our latest work and projects</p>
                        <a href="#portfolio" class="btn-get-started animate__animated animate__fadeInUp scrollto">View Portfolio</a>
                    </div>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
    </div>
</section>

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="row content">
                <div class="col-lg-6">
                    <h2>About Us</h2>
                    <h3>Learn more about our company and our mission</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Welcome to <?php bloginfo('name'); ?>. We are dedicated to providing high-quality services to our clients.
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Professional team with years of experience</li>
                        <li><i class="ri-check-double-line"></i> Commitment to excellence and customer satisfaction</li>
                        <li><i class="ri-check-double-line"></i> Innovative solutions for modern challenges</li>
                    </ul>
                    <p class="fst-italic">
                        Our mission is to deliver exceptional value to our clients through innovative solutions and dedicated service.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Services</h2>
                <p>Our Services</p>
            </div>

            <div class="row">
                <?php
                $services_args = array(
                    'post_type' => 'services',
                    'posts_per_page' => 6
                );
                $services_query = new WP_Query($services_args);

                if ($services_query->have_posts()) :
                    while ($services_query->have_posts()) : $services_query->the_post();
                ?>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="icon-box">
                                <i class="bi bi-briefcase"></i>
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <p><?php echo get_the_excerpt(); ?></p>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="icon-box">
                            <i class="bi bi-briefcase"></i>
                            <h4><a href="#">Business Consulting</a></h4>
                            <p>Expert business consulting services to help your company grow and succeed.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="icon-box">
                            <i class="bi bi-card-checklist"></i>
                            <h4><a href="#">Project Management</a></h4>
                            <p>Professional project management to ensure your projects are completed on time and within budget.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="icon-box">
                            <i class="bi bi-bar-chart"></i>
                            <h4><a href="#">Market Analysis</a></h4>
                            <p>Comprehensive market analysis to help you understand your market and competitors.</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Our Recent Work</p>
            </div>

            <div class="row portfolio-container">
                <?php
                $portfolio_args = array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => 6
                );
                $portfolio_query = new WP_Query($portfolio_args);

                if ($portfolio_query->have_posts()) :
                    while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                ?>
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <div class="portfolio-wrap">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium_large', array('class' => 'img-fluid')); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                                <?php endif; ?>
                                <div class="portfolio-info">
                                    <h4><?php the_title(); ?></h4>
                                    <p><?php echo get_the_excerpt(); ?></p>
                                    <div class="portfolio-links">
                                        <a href="<?php the_permalink(); ?>" title="More Details"><i class="bi bi-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Project 1</h4>
                                <p>Sample project description</p>
                                <div class="portfolio-links">
                                    <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Project 2</h4>
                                <p>Sample project description</p>
                                <div class="portfolio-links">
                                    <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Project 3</h4>
                                <p>Sample project description</p>
                                <div class="portfolio-links">
                                    <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p><?php echo esc_html(get_theme_mod('footer_address', 'A108 Adam Street, NY 535022, USA')); ?></p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p><?php echo esc_html(get_theme_mod('footer_email', 'info@example.com')); ?></p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p><?php echo esc_html(get_theme_mod('footer_phone', '+1 5589 55488 55')); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">
                    <div class="contact-form">
                        <?php echo do_shortcode('[contact-form-7 id="contact-form" title="Contact Form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>