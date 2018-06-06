<?php get_header(); ?>
    <h1 class="text-center"> <?php the_title() ?> </h1>

    <div class="container">
        <div class="row">
            <div>
                <h1>Hola Mundo!!</h1>
            </div>
        </div>
    </div>

    <?php 
    $categories = get_the_category();
    $category_id = $categories[0]->cat_ID;
    $args = array( 'post_type' => 'Project', 'cat' => $category_id);
    $the_query = new WP_Query( $args ); 
    ?>

    <div class="row">
        <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <!-- <div class="text-center col-12 col-sm-12 proj-link-box">
                        <a href="<?php the_permalink() ?>">
                            <img class="proj-link-image" alt="Responsive image" src="
                                <?php 
                                    if (has_post_thumbnail()) {
                                    echo the_post_thumbnail_url();}; 
                                ?>
                            ">
                            <h2 class="proj-link-text"><?php the_title() ?></h2>
                        </a>
                    </div> -->
                <?php wp_reset_postdata(); ?>
            <?php endwhile;?>
        <?php else:  ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>