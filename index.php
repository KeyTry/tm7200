<?php get_header(); ?>
<?php 
    if(have_posts()):
        while(have_posts()) : the_post();?>
            <h2 class="the-title"><?php the_title(); ?></h2>
            <p class="the-content"><?php the_content(); ?></p>
            <?php // check if the post or page has a Featured Image assigned to it.
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            } ?>
    <?php endwhile;
    else :
        echo "<p>No hay nada aquí!</p>";
    endif;
        ?>
<?php get_footer(); ?>