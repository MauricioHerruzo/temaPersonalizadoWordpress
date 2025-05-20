<?php get_header();?>
<main id="primary" class="site-main">
<?php 
    while(have_posts()): the_post();

        if(is_page('Sobre Nosotros')):
            get_template_part('template-parts/content','Sobre Nosotros');
        else :
            get_template_part('template-parts/content','page');
        endif;

    endwhile;
?>
</main>
<?php get_footer();?>