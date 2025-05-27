<?php get_header(); ?>

<main id="primary" class="site-main">
    <?php while (have_posts()) : the_post(); ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class('animal-single'); ?>>
            <!-- Imagen destacada -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="animal-featured-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>
            
            <!-- Título y tipos -->
            <header class="animal-header">
                <h1><?php the_title(); ?>- <?php the_field('nombrenombre'); ?></h1>
                <?php 
                $tipos = get_the_terms(get_the_ID(), 'tipo-animal');
                if ($tipos && !is_wp_error($tipos)) : ?>
                    <div class="animal-types">
                        <span>Tipo: </span>
                        <?php foreach ($tipos as $tipo) : ?>
                            <a href="<?php echo esc_url(get_term_link($tipo)); ?>" class="animal-type-link">
                                <?php echo esc_html($tipo->name); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </header>
            
            <!-- Contenido -->
            <div class="animal-content">
                <?php the_content(); ?>
            </div>
            
           
        </article>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>