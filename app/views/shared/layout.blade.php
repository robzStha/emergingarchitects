<html>
    <head>
        <title>
            {{"Rabin"}}
        </title>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('bootstrap-3.1.1/css/bootstrap.min.css')}}" />
        <!--<link rel="stylesheet" type="text/css" href="{{URL::asset('bootstrap-3.1.1/css/bootstrap-theme.css')}}" />-->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('bootstrap-3.1.1/css/custom.css')}}" />
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'/>
        @yield('links')
        
        <script type="text/javascript" src="{{URL::asset('bootstrap-3.1.1/js/jquery-2.1.1.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('bootstrap-3.1.1/js/custom.js')}}"></script>
        
        @yield('scripts')
        
        @yield('embedded-scripts')
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="logo">
                    <img src="{{URL::asset('images/logo_medium.png')}}"/>
                </div>
                <div class="menu-bar">
                    <div class="user-userful">
                        <span class="links">
                            <a href="{{URL::asset('')}}">Login | Register</a>
                        </span>
                        <span class="search-bar">
                            <input type="text" placeholder="Search" class="search-bar"/>
                        </span>
                    </div>
                    <br/>
                    <div class="menu">
                        Home | Some | Rome
                    </div>
                </div>
            </nav>
        
            <div class="contents">
                @yield('contents')
            </div>
            
            <div class="footer">
                
                
                <!--<div class="partition">asdf</div>-->
                <div class="contents">
                    <div class="partition">
                        <div class="title">Navigation</div>
                        <div class="list">
                            <ul>
                                <li>Home</li>
                                <li>About</li>
                                <li>Gallery</li>
                                <li>Projects</li>
                                <li>Blog</li>
                                <li>Client</li>
                                <li>Contact</li>                            
                            </ul>
                        </div>
                    </div>
                    <div class="partition">
                        <div class="title">Follow Us</div>
                        <div class="list">
                            <ul>
                                <li>Facebook</li>
                                <li>Twitter</li>
                                <li>Google+</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-img">
                    <img src="{{URL::asset('images/footer_blue.png')}}" class="footer-blue"/>
                    <img src="{{URL::asset('images/logo_footer.png')}}" class="footer-logo"/>
                </div>
            </div>
        </div>
    </body>
</html>