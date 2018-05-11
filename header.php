<html>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <title>
        </title>
        <?php wp_head();?>
    </head>
    <body class="<?php body_class();?>">
    <div class="header-class">
        <center>             
            <h1 class="site-title">
                <?php bloginfo('name'); ?>
            </h1>
            <img class="img-full-width head-image" src="<?php bloginfo('template_directory') ?>/assets/images/header.png" alt="">
        </center>
    </div>
    <?php register_nav_menus( array('primary' => __( 'Primary Menu', 'tm7200-menu' ),) );?>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><?php bloginfo('name')?></a>
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker()
            ) );
            ?>
        </div>
    </nav>