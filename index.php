<?php get_header(); ?>

<?php
if (have_posts()) : while (have_posts()) : the_post();
        /* global $post; */
        /* d(get_the_title()); */
        $page_section_class = get_post_meta(get_the_ID(), 'section-class', true);
        $section_class = trim('clearfix full-height ' . $page_section_class);

        $page_container_class = get_post_meta(get_the_ID(), 'container-class', true);
        $container_class = empty($page_container_class) ? 'container-fluid' : $page_container_class;

        $page_column_class = get_post_meta(get_the_ID(), 'column-class', true);
        $colum_class = empty($page_column_class) ? 'col-xs-12' : $page_column_class;

        $page_section_title = get_post_meta(get_the_ID(), 'section-title', true);
        $section_title = (empty($page_section_title)) ? get_the_title() : $page_section_title;

        /* <article id="<?php echo get_post_field('post_name', get_post()) ?>" <?php post_class('clearfix'); ?> role="article"> */
        ?>

        <section id="<?php echo get_post_field('post_name', get_post()) ?>" <?php post_class($section_class); ?> >
            <div class="<?php echo $container_class ?>">
                <div class="row">
                    <div class="<?php echo $colum_class; ?>">


                        <header>
                            <h2 class="section-heading"><?php echo $section_title ?></h2>
                        </header>

                        <div class="post_content clearfix">
                            <?php the_content(); ?>
                        </div> 
                        <!--
                                            <footer>
                        
                                                <p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags", "wpbootstrap") . ':</span> ', ' ', ''); ?></p>
                        
                                            </footer> 
                        -->

                    </div>
                </div>
            </div>
        </section> <!-- end article -->

    <?php endwhile; ?>	

<?php else : ?>

    <article id="post-not-found">
        <header>
            <h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
        </header>
        <section class="post_content">
            <p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
        </section>
        <footer>
        </footer>
    </article>

<?php endif; ?>

<?php get_footer(); ?>