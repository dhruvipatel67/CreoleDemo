<?php
/**
 * The template for displaying single service items
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sailor
 */

get_header();
?>

<section class="service-single section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-8">
        <div class="service-details">
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="service-details-img">
              <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
            </div>
          <?php endif; ?>
          
          <h2><?php the_title(); ?></h2>
          
          <div class="service-content">
            <?php the_content(); ?>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="service-sidebar">
          <h3><?php echo esc_html__( 'Our Services', 'sailor' ); ?></h3>
          
          <div class="service-list">
            <?php
            // Get all services
            $services_query = new WP_Query( array(
              'post_type'      => 'service',
              'posts_per_page' => -1,
              'post__not_in'   => array( get_the_ID() ),
            ) );
            
            if ( $services_query->have_posts() ) :
            ?>
              <ul>
                <?php
                while ( $services_query->have_posts() ) : $services_query->the_post();
                  $icon = get_post_meta( get_the_ID(), '_service_icon', true );
                  if ( empty( $icon ) ) {
                    $icon = 'bi bi-briefcase';
                  }
                ?>
                  <li>
                    <a href="<?php the_permalink(); ?>"><i class="<?php echo esc_attr( $icon ); ?>"></i> <?php the_title(); ?></a>
                  </li>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
              </ul>
            <?php
            else :
              // Default service list
              $default_services = array(
                array(
                  'icon' => 'bi bi-briefcase',
                  'title' => __( 'Business Consulting', 'sailor' ),
                ),
                array(
                  'icon' => 'bi bi-card-checklist',
                  'title' => __( 'Financial Planning', 'sailor' ),
                ),
                array(
                  'icon' => 'bi bi-bar-chart',
                  'title' => __( 'Market Analysis', 'sailor' ),
                ),
                array(
                  'icon' => 'bi bi-binoculars',
                  'title' => __( 'Strategic Planning', 'sailor' ),
                ),
                array(
                  'icon' => 'bi bi-brightness-high',
                  'title' => __( 'Brand Development', 'sailor' ),
                ),
              );
            ?>
              <ul>
                <?php foreach ( $default_services as $service ) : ?>
                  <li>
                    <a href="#"><i class="<?php echo esc_attr( $service['icon'] ); ?>"></i> <?php echo esc_html( $service['title'] ); ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
          
          <div class="service-contact">
            <h3><?php echo esc_html__( 'Need Help?', 'sailor' ); ?></h3>
            <p><?php echo esc_html__( 'Contact us for a free consultation', 'sailor' ); ?></p>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-contact"><?php echo esc_html__( 'Contact Us', 'sailor' ); ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Related Services Section -->
<section class="related-services section light-background">
  <div class="container">
    <h2><?php echo esc_html__( 'Related Services', 'sailor' ); ?></h2>
    
    <div class="row gy-4">
      <?php
      // Get related services
      $related_query = sailor_get_related_service_items( get_the_ID(), 3 );
      
      if ( $related_query->have_posts() ) :
        while ( $related_query->have_posts() ) : $related_query->the_post();
          $icon = get_post_meta( get_the_ID(), '_service_icon', true );
          if ( empty( $icon ) ) {
            $icon = 'bi bi-briefcase';
          }
        ?>
          <div class="col-lg-4 col-md-6">
            <div class="service-item d-flex position-relative h-100">
              <i class="<?php echo esc_attr( $icon ); ?> icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="<?php the_permalink(); ?>" class="stretched-link"><?php the_title(); ?></a></h4>
                <p class="description"><?php echo wp_kses_post( get_the_excerpt() ); ?></p>
              </div>
            </div>
          </div>
        <?php
        endwhile;
        wp_reset_postdata();
      else :
        // Default related services
        $default_services = array(
          array(
            'icon' => 'bi bi-briefcase',
            'title' => __( 'Business Consulting', 'sailor' ),
            'description' => __( 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'sailor' ),
          ),
          array(
            'icon' => 'bi bi-card-checklist',
            'title' => __( 'Financial Planning', 'sailor' ),
            'description' => __( 'Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata', 'sailor' ),
          ),
          array(
            'icon' => 'bi bi-bar-chart',
            'title' => __( 'Market Analysis', 'sailor' ),
            'description' => __( 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'sailor' ),
          ),
        );
        
        foreach ( $default_services as $service ) :
        ?>
          <div class="col-lg-4 col-md-6">
            <div class="service-item d-flex position-relative h-100">
              <i class="<?php echo esc_attr( $service['icon'] ); ?> icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="#" class="stretched-link"><?php echo esc_html( $service['title'] ); ?></a></h4>
                <p class="description"><?php echo esc_html( $service['description'] ); ?></p>
              </div>
            </div>
          </div>
        <?php
        endforeach;
      endif;
      ?>
    </div>
  </div>
</section>

<?php
get_footer();
