<header>
    <nav class="navbar navbar-default navbar-fixed-top">

        <!-- Top Bar -->
        <section id="top">
            <div class="container">
                <div class="row">

                    <!-- Site Logo -->
                    <div class="col-xs-12 col-sm-4 col-lg-6">
                        <div id="logo">
                            <a href="{{ site_url }}" title="{{ settings:site_name }}"><img src="{{ theme_url }}/assets/images/logo.png" alt="{{ settings:site_name }}"></a>
                        </div>
                    </div>

                    <!-- Client Login -->
                    <div class="col-xs-12 col-sm-4 col-lg-3 hidden-xs">
                        <div id="login">

                            <p class="form-title">Client Access</p>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="username" class="col-sm-4 control-label">Username:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control input-sm" id="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-4 control-label">Password:</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control input-sm" id="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <button type="submit" class="btn btn-primary btn-sm">Login</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                    <!-- Live Chat -->
                    <div class="col-xs-12 col-sm-4 col-lg-3 hidden-xs">
                        <div id="chat">

                            <!-- BEGIN ProvideSupport.com Graphics Chat Button Code -->
                            <div class="chatIcon">
                              <div id="ci0Khj" style="z-index:100; position: absolute;"></div>
                              <div id="sc0Khj" style="display:inline"></div>
                              <div id="sd0Khj" style="display:none"></div>
                              <script type="text/javascript">var se0Khj=document.createElement("script");se0Khj.type="text/javascript";var se0Khjs=(location.protocol.indexOf("https")==0?"https":"http")+"://image.providesupport.com/js/0mswwhbh9xtsq1eif0slmtvazc/safe-standard.js?ps_h=0Khj&ps_t="+new Date().getTime();setTimeout("se0Khj.src=se0Khjs;document.getElementById('sd0Khj').appendChild(se0Khj)",1)</script><noscript><div style="display:inline"><a href="http://www.providesupport.com?messenger=0mswwhbh9xtsq1eif0slmtvazc">Online Support</a></div></noscript>
                            </div>
                            <!-- END ProvideSupport.com Graphics Chat Button Code -->

                            <!-- Contact numbers -->
                            <p>or call 1-888-475-2215<br>M-F 8AM-8PM EST</p>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Site Navigation -->
        <section id="navigation">
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="navbar-brand hidden-md hidden-lg">Menu</span>
                </div>

                <!-- Nav links -->
                <div id="main-navigation" class="collapse navbar-collapse">
                {{ navigations:nav nav_id="1" class="nav navbar-nav" }}
                {{ if top }}
	                {{ if children }}
	                    <span class="parent-link"><a href="{{ url }}">{{ title }}</a></span>
                        <a href="{{ url }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="parent-title">{{ title }}</span> <span class="caret"></span></a>
                        <div class="clearfix"></div>
	                {{ else }}
	                    <a href="{{ url }}">{{ title }}</a>
	                {{ endif }}
	            {{ else }}
                    <a href="{{ url }}"><span class="ccicon ccicon-{{ icon }}">{{ title }}</span></a>
                {{ endif }}
                {{ /navigations:nav }}
                </div>

            </div>
        </section>

    </nav>
</header>