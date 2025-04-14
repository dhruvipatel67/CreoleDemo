<?php get_header(); ?>

<div class="container" style="display: flex; gap: 20px; padding: 20px;">
    <main style="flex: 2;">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </article>
            <?php endwhile; ?>
            <?php the_posts_navigation(); ?>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </main>

    <div class="sidebar" style="flex: 1;">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>