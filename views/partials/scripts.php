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