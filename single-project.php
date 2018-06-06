<?php get_header(); ?>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div class="row">
                <div class="proyecto-box col-12 text-center">
                    <img class="proyecto-image img-fluid" alt="Responsive image" src="
                        <?php 
                            if (has_post_thumbnail()) {
                            echo the_post_thumbnail_url();}; 
                        ?>
                    ">
                </div>
            </div>
            <div class="blog-box text-center">
                <h1 class="the-title"><?php the_title(); ?></h1>
                <p class="the-content"><?php the_content(); ?></p>
            </div>
            <h2>Imágenes:</h2>
            <div class="img">
            <?php types_render_field( "imagen_proy", array( "size"=>"thumbnail", "separator" => "</div><div class='img'>") ); ?>
</div>
    <?php 
    endwhile;
    else :
        echo "<p>No hay nada aquí!</p>";
    endif;
    ?>
<?php get_footer(); ?>