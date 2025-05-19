<?php get_header()?>

    <main id="primary" class="site-main">
        <?php while(have_posts()): the_post(); ?>
            <article id="post-<?php the_ID();?>" <?php post_class('entrada-destacada'); ?>>
            <?php if (has_post_thumbnail()): ?>
                <div class="hero-section" style="background-image : url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full-width');?>');">
                    <div class="hero-content">
                        <header class="entry-header">
                            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                        </header>
                    </div>
                </div>
            <?php endif; ?>

            <div class="entry-content container">
                <?php the_content(); ?>
            </div>
            </article>
        
            <?php endwhile; ?>
    </main>

<?php get_footer()?>