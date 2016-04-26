<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title('|', true, 'right'); ?></title>	
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <!-- wordpress head functions -->
        <?php wp_head(); ?>
        <!-- end of wordpress head -->
        <!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
        <!-- media-queries.js (fallback) -->
        <!--[if lt IE 9]>
                <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
        <![endif]-->

        <!-- html5.js -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->	

        <!-- respond.js -->
        <!--[if lt IE 9]>
                  <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
        <![endif]-->	
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->

    </head>

    <body <?php body_class(); ?>>

        <!--<header role="banner">-->

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <!--<nav id="mainNav" class="navbar navbar-default navbar-fixed-top wow fadeInDown " data-wow-delay="0.1s" style="visibility:hidden">-->
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand" >
                        <a class="page-scroll" href="#page-top">
                            <!--<img src="src/img/logo.png"/>-->
                            <img class="logo-img" alt="AM Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/library/img/am_pre.png" >
                            <!--AM-->
                        </a>

                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                                global $post;
                                ?>
                                <li>
                                    <a class="page-scroll" href="#<?php echo $post->post_name ?>"><?php the_title() ?></a>
                                </li>
                            <?php endwhile; ?>	
                            <?php $page_footer_name = 'Contact' ?>
                            <li>
                                <a class="page-scroll" href="#page-footer"><?php echo $page_footer_name ?></a>
                            </li>

                        <?php endif; ?>
                    </ul>

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!--</header> end header -->


