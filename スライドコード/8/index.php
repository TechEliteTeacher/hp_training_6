<?php get_header(); ?>
TechElite第５回
<?php
$post_query = new WP_Query(
    array(
        'post_type'      => 'post', //投稿を表示する時は「post」
        'posts_per_page' => 2, //表示する記事の数
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => 'category-1'
            )
        )
    )
);
?>
<?php if ($post_query->have_posts()) : ?>
    <div class="post_contents">
        <?php while ($post_query->have_posts()) : ?>
            <?php $post_query->the_post(); ?>
            <div class="post_content">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <p><?php the_title(); ?></p>
                </a>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); //サブループが終わる際に記載が必要です 
?>

<?php get_footer(); ?>