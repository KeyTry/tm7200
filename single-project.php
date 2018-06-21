<?php get_header(); ?>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div class="container">
                <div class="row title-container">
                    <div class="proyecto-box col-12 text-center">
                        <img class="proyecto-image img-fluid" alt="Responsive image" src="
                            <?php 
                                if (has_post_thumbnail()) {
                                echo the_post_thumbnail_url();}; 
                            ?>
                        ">
                    </div>
                    <h1 class="col-12 project-title text-center"><?php the_title(); ?></h1>
                </div>
            </div>

            <div class="blog-box text-center">
                <p class="the-content"><?php the_content(); ?></p>
            </div>
            
            <div class="container">
                <div class="row">
                    <?php 
                        // Do nothing if we don't have Types.
                        if( apply_filters( 'types_is_active', false ) ) {
                    
                            $output = '';
                
                            // ID of the current post
                            $post_id = get_the_ID();
                
                            // Slug of a Types repeating image field, without the "wpcf-" prefix.
                            $field_slug = 'imagen-proyecto'; // TODO set the field slug you want to display
                
                            // Parameters that define the field
                            $field_definition = wpcf_fields_get_field_by_slug( $field_slug );
                            if( ! empty( $field_definition ) ) {
                        
                                // Get the raw field data.
                                $images = get_post_meta( $post_id, "wpcf-{$field_slug}" );
                
                                foreach( $images as $image_index => $image ) {
                
                                    // Parameters for the Types field rendering mechanism.
                                    $image_parameters = array(
                                        'proportional' => 'true',
                                        'url' => 'true',
                                        'field_value' => $image
                                    );

                                    // Get the image in full size.
                                    $parameters = array_merge( $image_parameters, array( 'size' => 'full' ) );
                                    $url = types_render_field_single( $field_definition, $parameters, null, '', $image_index );
                
                                    // Append the markup (a thumbnail linking to the full image) to existing content.
                                    // NOTE: Customize the output to your needs
                                    $output .= sprintf(
                                        '<div class="col-sm-6 col-md-4 col-xl-3"><a href=" '. $url .' "><img class="img-fluid" src=" '. $url .' "></a></div>'
                                    );
                                }
                            }
                
                            echo $output;
                        }
                    ?>
                    
                    <!-- <img class="col-sm-6 col-md-4 col-xl-3 img-fluid" src="
                        <?php // echo types_render_field( 'imagen-proyecto', array('raw' => 'true','separator' => '"><img class="col-sm-6 col-md-4 col-xl-3 img-fluid" src="') ); ?>
                    "> -->
                </div>
            </div>
    <?php 
    endwhile;
    else :
        echo "<p>No hay nada aquí!</p>";
    endif;
    ?>
<?php get_footer(); ?>