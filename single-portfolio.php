<?php
/**
 * The template for displaying single portfolio items
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sailor
 */

get_header();
?>

<section class="portfolio-single section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-8">
        <div class="portfolio-details-slider">
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="portfolio-details-img">
              <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
            </div>
          <?php endif; ?>
          
          <?php
          // Check if there are additional images
          $gallery_images = get_post_meta( get_the_ID(), '_portfolio_gallery', true );
          
          if ( ! empty( $gallery_images ) && function_exists( 'acf_photo_gallery' ) ) {
            $images = acf_photo_gallery( '_portfolio_gallery', get_the_ID() );
            
            if ( count( $images ) > 0 ) {
              echo '<div class="portfolio-gallery">';
              foreach ( $images as $image ) {
                echo '<div class="portfolio-gallery-item">';
                echo '<img src="' . esc_url( $image['full_image_url'] ) . '" alt="' . esc_attr( $image['title'] ) . '" class="img-fluid">';
                echo '</div>';
              }
              echo '</div>';
            }
          }
          ?>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3><?php the_title(); ?></h3>
          <?php sailor_portfolio_details(); ?>
        </div>
        
        <div class="portfolio-description">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Related Portfolio Section -->
<section class="related-portfolio section light-background">
  <div class="container">
    <h2><?php echo esc_html__( 'Related Projects', 'sailor' ); ?></h2>
    
    <div class="row gy-4">
      <?php
      // Get related portfolio items
      $related_query = sailor_get_related_portfolio_items( get_the_ID(), 3 );
      
      if ( $related_query->have_posts() ) :
        while ( $related_query->have_posts() ) : $related_query->the_post();
        ?>
          <div class="col-lg-4 col-md-6">
            <div class="portfolio-item">
              <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail( 'sailor-portfolio', array( 'class' => 'img-fluid' ) ); ?>
                </a>
              <?php endif; ?>
              <div class="portfolio-info">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <p><?php echo wp_kses_post( get_the_excerpt() ); ?></p>
              </div>
            </div>
          </div>
        <?php
        endwhile;
        wp_reset_postdata();
      else :
        // Default related portfolio items
        for ( $i = 1; $i <= 3; $i++ ) :
        ?>
          <div class="col-lg-4 col-md-6">
            <div class="portfolio-item">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/masonry-portfolio/masonry-portfolio-' . $i . '.jpg' ); ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>"><?php echo esc_html__( 'Portfolio Item', 'sailor' ); ?> <?php echo $i; ?></a></h4>
                <p><?php echo esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'sailor' ); ?></p>
              </div>
            </div>
          </div>
        <?php
        endfor;
      endif;
      ?>
    </div>
  </div>
</section>

<?php
get_footer();
