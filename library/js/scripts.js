
(function ($) {
    "use strict"; // Start of use strict
    /*alert ('HAHA');*/
    //fade initial page show

    $(function () {
        console.log("ready!");
        $('html').animate({
            opacity: 1
        }, 1300);
        // jQuery for page scrolling feature - requires jQuery Easing plugin
        $('a.page-scroll').bind('click', function (event) {
            /*var $anchor = $(this);*/
            /*var href = $anchor.attr('href');*/
            var href = this.hash;
            $('html, body').stop().animate({
                scrollTop: ($(href).offset().top - 50)
            }, 1250, 'easeInOutExpo');
            /*window.location.hash = href;*/
            event.preventDefault();
        });

        // Highlight the top nav as scrolling occurs
        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 51
        });

        // Closes the Responsive Menu on Menu Item Click
        $('.navbar-collapse ul li a').click(function () {
            $('.navbar-toggle:visible').click();
        });


        // Offset for Main Navigation
        $('#mainNav').affix({
            offset: {
                top: 100
            }
        });
        
        new WOW().init();
    });



})(jQuery); // End of use strict
