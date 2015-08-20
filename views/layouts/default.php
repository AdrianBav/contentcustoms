<!DOCTYPE html>
<html lang="en">

    {{ theme:partial name="head" }}

    <body>
        
        {{ theme:partial name="header" }}

        <!-- Page Structure -->
        <div class="container">
            {{ theme:partial name="scroller" }}
            
            <div id="content-wrapper">
                <div class="row">

                    <!-- Page Content -->
                    <div class="col-xs-12 col-md-9">
                        {{ content }}
                    </div>

                    <!-- Sidebar -->
                    <div class="col-xs-12 col-md-3">
                        
                        <div id="sidebar">
                            {{ sidebars:sidebar sidebar_id=sidebar default_sidebar="1" }}
                        </div>
                        
                    </div>  

                </div>
            </div>
        </div>

        {{ theme:partial name="footer" }}

        <!-- Footer Scripts -->
        {{ theme:partial name="scripts" }}

    </body>

</html>