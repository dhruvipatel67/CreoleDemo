<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sailor
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-4 col-md-6'); ?> data-aos="fade-up" data-aos-delay="100">
  <div class="blog-card">
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="post-img">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail( 'sailor-blog', array( 'class' => 'img-fluid' ) ); ?>
        </a>
      </div>
    <?php endif; ?>

    <div class="post-content">
      <div class="post-date">
        <span class="day"><?php echo get_the_date( 'd' ); ?></span>
        <span class="month"><?php echo get_the_date( 'M' ); ?></span>
      </div>

      <div class="post-meta">
        <span><i class="bi bi-person"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span>
        <?php if ( has_category() ) : ?>
          <span><i class="bi bi-folder"></i> <?php the_category( ', ' ); ?></span>
        <?php endif; ?>
        <span><i class="bi bi-chat-dots"></i> <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></span>
      </div>

      <?php the_title( '<h3 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>

      <div class="post-excerpt">
        <?php the_excerpt(); ?>
      </div>

      <a href="<?php the_permalink(); ?>" class="read-more"><span><?php echo esc_html__( 'Read More', 'sailor' ); ?></span><i class="bi bi-arrow-right"></i></a>
    </div>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->
