<?php
get_header();
?>

<div class="content-box">
    <?php
    if (have_posts()) :
        while (have_posts()) :
        the_post();
    ?>
        <div class="container">
            <div class="row">
                <div class="text-center profile-image-box col-md-3">
                    <?php
                    // check for a Featured Image and then assign it to a PHP variable for later use
                    if (has_post_thumbnail()) {
                        $featured_image = get_the_post_thumbnail_url();
                    }
                    ?>
                    <img class="mx-auto d-block profile-image" src="<?php
                                                                    echo $featured_image;
                                                                    ?>">
                </div>
                <div class="bio-box col-md-8 align-middle">
                    <h1 class="text-center text-md-left the-title"><?php
                                                                    the_title();
                                                                    ?></h1>
                    <span class="text-left pagination-centered"><?php
                                                                the_content();
                                                                ?></span>
                </div>
            </div>
        </div>
        <div class="container projects-box">
            <div class="row">
                <h1 class="col-12 text-center">Proyectos</h1>
            </div>
            <div class="row projects-wrapper justify-content-center">
                    <div class="project-box col-12 col-md-3 align-self-center"><img class="project-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/FIO.PNG"><h2 class="text-center align-self-center project-text">Animación</h2></div>
                    <div class="project-box col-12 col-md-3 align-self-center"><img class="project-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/mirroredplane.png"><h2 class="text-center align-self-center project-text">Videojuegos</h2></div>
                    <div class="project-box col-12 col-md-3 align-self-center"><h2 class="text-center align-self-center project-text">Diseño</h2></div>
                    <div class="project-box col-12 col-md-3 align-self-center"><h2 class="text-center align-self-center project-text">Diseño</h2></div>
            </div>
        </div>
    <?php
    endwhile;
    else :
        echo "<p>No hay nada aquí!</p>";
    endif;
    ?>
</div>

<?php
get_footer();
?>