<?php get_header(); ?>
<h1>
    <?php
    the_archive_title();
    ?>
</h1>
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
    <?php the_posts_pagination(
        array(
            'mid_size' => 5, // 現在のページの左右に表示するページの数
            'prev_text' => '< 前のページ', // 「前へ」にあたるページ用テキスト
            'next_text' => '次のページ >', //「次へ」にあたるページ用テキスト
        )
    ); ?>
<?php endif; ?>

<?php get_footer(); ?>