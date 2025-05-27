<?php
/**
 * Template para mostrar los animales por tipo
 */
get_header(); ?>

<main id="primary" class="site-main">
    <?php
    $term = get_queried_object();
    $args = array(
        'post_type' => 'animales',
        'tax_query' => array(
            array(
                'taxonomy' => 'tipo-animal',
                'field' => 'slug',
                'terms' => $term->slug
            )
        ),
        'posts_per_page' => -1
    );
    $animales = new WP_Query($args);
    ?>

    <header class="page-header">
        <h1 class="page-title">
            Animales tipo: <?php echo esc_html($term->name); ?>
        </h1>
        <?php if (term_description()) : ?>
            <div class="archive-description">
                <?php echo term_description(); ?>
            </div>
        <?php endif; ?>
    </header>

    <?php if ($animales->have_posts()) : ?>
        <div class="animales-grid">
            <?php while ($animales->have_posts()) : $animales->the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('animal-card'); ?>>
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="animal-thumbnail">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php endif; ?>
                        
                        <h2><?php the_title(); ?></h2>
                        
                        <?php if (has_excerpt()) : ?>
                            <div class="animal-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                        <?php endif; ?>
                    </a>
                    
                    <?php 
                    $tipos = get_the_terms(get_the_ID(), 'tipo-animal');
                    if ($tipos && !is_wp_error($tipos)) : ?>
                        <div class="animal-types">
                            <?php foreach ($tipos as $tipo) : ?>
                                <a href="<?php echo esc_url(get_term_link($tipo)); ?>" class="animal-type-badge">
                                    <?php echo esc_html($tipo->name); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </article>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    <?php else : ?>
        <p>No hay animales de este tipo registrados.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>