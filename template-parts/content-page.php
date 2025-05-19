<article id="post-<?php the_ID();?>" <?php post_class();?>>

    <div class="entry-header">
        <?php the_title('<h1 class ="entry-title">','</h1>');?>
    </div>

    <?php 
        if(has_post_thumbnail()):
            echo '<div class="post-thumbnail">';
                                //AQUI puedes poner tamaños predefinos de worpress, en este caso estas ponienod el custom medium que defines en functions.php
            the_post_thumbnail('custom-medium');
            echo '</div>';
        endif;
    ?>

    <div class="entry-content">
        <?php the_content();?>
    </div>

</article>