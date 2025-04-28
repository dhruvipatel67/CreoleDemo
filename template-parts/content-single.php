<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sailor
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
  <div class="post-img">
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
    <?php endif; ?>
  </div>

  <h1 class="post-title"><?php the_title(); ?></h1>

  <div class="post-meta">
    <span><i class="bi bi-person"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span>
    <span><i class="bi bi-calendar"></i> <?php echo get_the_date(); ?></span>
    <?php if ( has_category() ) : ?>
      <span><i class="bi bi-folder"></i> <?php the_category( ', ' ); ?></span>
    <?php endif; ?>
    <span><i class="bi bi-chat-dots"></i> <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></span>
  </div>

  <div class="post-content">
    <?php
    the_content(
      sprintf(
        wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sailor' ),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        wp_kses_post( get_the_title() )
      )
    );

    wp_link_pages(
      array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sailor' ),
        'after'  => '</div>',
      )
    );
    ?>
  </div>

  <?php if ( has_tag() ) : ?>
    <div class="post-tags">
      <i class="bi bi-tags"></i> <?php the_tags( '', ', ', '' ); ?>
    </div>
  <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
