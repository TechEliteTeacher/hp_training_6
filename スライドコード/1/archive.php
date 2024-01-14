<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="page">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('thumbnail'); ?>
                <p class="title">
                    <?php the_title(); ?>
                </p>
            </a>
            <div class="category">
                <?php the_category(); ?>
            </div>
            <div class="tag">
                <?php the_tags(); ?>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>