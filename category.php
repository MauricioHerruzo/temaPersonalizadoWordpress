<?php get_header();?>

<main id="primary" class="site-main">
    <div class_alias="page-header">
        <h1 class="page-title"><?php single_cat_title('Categoría: ');?></h1>
        <?php the_archive_description('<div class="archive-description">','</div>')?>
    </div>

    <?php if(have_posts()) :?>
        <div class="posts-grid">
            <?php while (have_posts()): the_post(); ?>
            <article id="post-<?php the_ID();?>" <?php post_class('post-card'), ?>>
                <?php if (has_post_thumbnail()); ?>
                <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                    <?php the_post_thumbnail('medium_large'); ?>
                </a>
            <?php endif; ?>

            <div class="post-content">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                <div class="entry-meta">
                    <?php the_category(', ')?>
                </div>
                <div class="entry-excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </div>
            </article>
            <?php endwhile; ?>
        </div>

        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p>No hay entradas en esta categoría.</p>
    <?php endif; ?>
</main>

<?php get_footer();?>