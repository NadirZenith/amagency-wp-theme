<footer id="page-footer" role="contentinfo" class="full-height">

    <div id="widget-footer" class="clearfix container">

        <div class="row">

            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
            </div>


                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer')) : ?>
                <?php endif; ?>

                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('after_footer')) : ?>
                <?php endif; ?>

        </div>
    </div>

    <nav class="clearfix">
        <?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
    </nav>

        <!--<p class="pull-right"><a href="http://320press.com" id="credit320" title="By the dudes of 320press">320press</a></p>-->

    <p class="attribution text-center small">&copy; <?php bloginfo('name'); ?></p>


</footer> <!-- end footer -->


<!--[if lt IE 7 ]>
        <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
        <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

<?php wp_footer(); // js scripts are inserted using this function ?>

<!-- remove this for production -->
<?php
echo (WP_DEBUG) ? '<script src="//localhost:35729/livereload.js"></script>' : '';
?>

</body>

</html>