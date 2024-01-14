<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="page">
            <p class="title">
                <?php the_title(); ?>
            </p>
            <div class="category">
                <?php the_category(); ?>
            </div>
            <div class="tag">
                <?php the_tags(); ?>
            </div>
            <div>
                <?php the_field('test_text'); ?>
            </div>
            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>