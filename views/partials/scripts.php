<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ theme_url }}/assets/js/bootstrap.min.js"></script>
<!-- Equal Heights -->
<script src="{{ theme_url }}/assets/js/jquery.equalheights.min.js"></script>
<!-- Flexslider -->
<script src="{{ theme_url }}/assets/js/jquery.flexslider-min.js"></script>
<!-- Colorbox -->
<script src="{{ theme_url }}/assets/js/jquery.colorbox-min.js"></script>

<!-- Controller Defined Scripts -->
{{ template:javascripts }}

<!-- Controller Defined Script Snippets -->
{{ template:foot }}

<!-- Script Snippets -->
<script>

    /*
     * "Hovernav" navbar dropdown on hover
     * "https://gist.github.com/SimonPadbury/6774640"
     */
    $(document).ready(function() {
        var mq = window.matchMedia('(min-width: 992px)');

        if (mq.matches) {

            $('ul.navbar-nav > li').addClass('hovernav');

            // Restore "clickable parent links" in navbar.
            $('.hovernav a').bind("click", RestoreParentLink);

        } else {

            $('ul.navbar-nav > li').removeClass('hovernav');
        };

        // The addClass/removeClass also needs to be triggered on page resize <=> 992px.
        if (matchMedia) {

            mq.addListener(WidthChange);
            WidthChange(mq);
        }

        function RestoreParentLink() {
            window.location = this.href;
        }

        function WidthChange(mq) {
            if (mq.matches) {

                $('ul.navbar-nav > li').addClass('hovernav');

                // Restore "clickable parent links" in navbar
                $('.hovernav a').bind("click", RestoreParentLink);

            } else {

                $('.hovernav a').unbind("click", RestoreParentLink);
                $('ul.navbar-nav > li').removeClass('hovernav');
            }
        };
    });


    /* Flexslider */
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            animationLoop: false,
            pauseOnAction: false,
            controlNav: false,
            customDirectionNav: $(".custom-navigation a"),
            itemWidth: 364,
            itemMargin: 12,
            minItems: 1,
            maxItems: 3
        });
    });


    /* Ensure service boxes are the same height. */
    $('.service-box .description').equalHeights();


    /* Colorbox */
    $(document).ready(function() {

        // At a glance image
        $(".at-a-glance .panel-body > a").colorbox({
            maxHeight: "100%"
        });

        // Sample images
        $("#samples-gallery .thumbnail").colorbox({
            rel: "samples",
            maxHeight: "100%"
        });
    });

</script>