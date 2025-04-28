// Create Home Page
<?php
/* Template Name: Home */
get_header();
?>

<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>Your Business Digital Partner</h1>
                <h2>We are team of talented designers making websites</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    <a href="https://www.youtube.com/watch?v=jDDaplaOQQY" class="glightbox btn-watch-video">
                        <i class="bi bi-play-circle"></i><span>Watch Video</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="<?php echo get_theme_file_uri('assets/img/hero-img.png'); ?>" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>