<article>   
    <div class="entry-header">
        <?php the_title('<h1 classs="entry-title">','</h1>')?>
    </div>



    
    <section class="inicio">
        <div class="contenido">
            <?php the_content ?>
        </div>
    </section>

    <section class="mapa">
        <img src="<?php the_field('mapa');?>" alt="">
    </section>
    <section class="historia">
        <h3><?php the_field('slogan') ?></h3>
        <p><?php the_field('mapa') ?></p>
    </section>
    <?php
</article>