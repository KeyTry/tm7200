<?php get_header();?>

<div class="content-box">
<?php
    if (have_posts()):
        while (have_posts()): the_post();?>
                <h2 class="the-title"><?php the_title();?></h2>
                <span><?php the_content();?></span>
        <?php
        endwhile;
    else:
        echo "<p>No hay nada aquí!</p>";
    endif;
?>
</div>
<?php get_footer();?>