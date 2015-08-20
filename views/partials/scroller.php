<div id="scroller">

    <!-- Featured Posts Ribbon -->
    <img src="{{ theme_url }}/assets/images/scroller/featured_ribbon.png" alt="Featured Posts" width="112px" height="112px">

    <!-- Slides -->
    <div class="flexslider">
        <ul class="slides">
        {{ mediaboxes:mediaboxes mediabox_id="1" }}
            <li>
                <a href="{{ link_url }}">
                    <img src="{{ image }}" alt="{{ alt }}" width="364px" height="184px" />
                    <div class="caption">{{ description }}</div>
                </a>
            </li>
        {{ /mediaboxes:mediaboxes }}
        </ul>
    
        <!-- Custom Controls -->
        <div class="custom-navigation">
          <a href="#" class="flex-prev">Prev</a>
          <a href="#" class="flex-next">Next</a>
        </div>
    </div>    

</div>