<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>MUSATCAR</title>
    <link rel="icon" href="{{asset('Home/assets/images/icon.png')}}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

    <link href="{{asset('Home/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{asset('Home/assets/css/mdb.min.css')}}" rel="stylesheet" type="text/css" id="mdb">
    <link href="{{asset('Home/assets/css/plugins.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Home/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Home/assets/css/coloring.css')}}" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{asset('Home/assets/css/colors/scheme-01.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    @include('sweetalert::alert')

    <div id="wrapper">
        
        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <header class="transparent header-light scroll-light has-topbar">
            <div id="topbar" class="topbar-dark text-light">
                <div class="container">
                    <div class="topbar-left xs-hide">
                        <div class="topbar-widget">
                            <div class="topbar-widget"><a href="#"><i class="fa fa-phone"></i>0663395215</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-phone"></i>0663370735</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-envelope"></i>Musat.car@gmail.com</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-clock-o"></i>Mon - Fri 08.00 - 18.00</a></div>
                        </div>
                    </div>
                
                    <div class="topbar-right">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="#"><i class="fa fa-youtube fa-lg"></i></a>
                            <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                            <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                        </div>
                    </div>  
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="{{route('user_pages.home')}}">
                                            <img class="logo-1" src="{{asset('Home/assets/images/logo.png')}}" style="width: 200px;" alt="">
                                            <img class="logo-2" src="{{asset('Home/assets/images/logo.png')}}" style="width: 200px;" alt="">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="{{route('user_pages.home')}}">Home</a>    
                                    </li>
                                    <li><a class="menu-item" href="{{route('Cars_List')}}">Cars</a>    
                                    </li>
                                    @php
                                        
                                    if (Route::currentRouteName() === 'user_pages.home') {
                                        $urlfouter='#footer';
                                        $urlexp='#explore';
                                    } else {
                                        $urlfouter='/';
                                        $urlexp='/';
                                    }
                                    @endphp

                                    <li><a class="menu-item" href="{{$urlexp}}">Explore</a></li>
                                    <li><a class="menu-item" href="{{$urlfouter}}">About Us</a>  
                                    </li>
                                    <li><a class="menu-item" href="{{$urlfouter}}">Contact</a>
                                    </li>
                                    @php
                                    if (Auth::check()) {
                                        $title = 'Sign Out';
                                        $url='LogOut';
                                    } else {
                                        $title = 'Sign Up';
                                        $url='register';
                                    }
                                    @endphp
                                    <li><a href="{{route($url)}}" class="btnnmk">{{$title}} </a></li>
                                    
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    {{-- @php
                                        if (Auth::check()) {
                                            $title = 'Sign Out';
                                            $url='LogOut';
                                        } else {
                                            $title = 'Sign Up';
                                            $url='register';
                                        }
                                    @endphp
                                    <a href="{{route($url)}}" class="btn-main menu-item">{{$title}}</a> --}}
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        <!-- content begin -->
        <div class="">
            @yield('content')
        </div>
        <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <footer class="text-light" id="footer">
            <div class="container">
                <div class="row g-custom-x">
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>About MUSATCAR</h5>
                            <p>Musatcar: Your Premier Car Rental Choice in Dakhla, Morocco
                                Welcome to Musatcar, your premier destination for car rentals in the enchanting city of Dakhla, Morocco.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Contact Info</h5>
                            <address class="s1">
                                <span><i class="id-color fa fa-map-marker fa-lg"></i>Dakhla hay hassani NR 07534</span>
                                <span><i class="id-color fa fa-phone fa-lg"></i>0663370735</span>
                                <span><i class="id-color fa fa-phone fa-lg"></i>0663395215</span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:Musat.car@gmail.com">Musat.car@gmail.com</a></span>
                            </address>
                        </div>
                    </div>

                    {{-- <div class="col-lg-2">
                        <h5>Quick Links</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="widget">
                                    <ul>
                                        <li><a href="{{route('user_pages.home')}}">Home</a></li>
                                        <li><a href="#footer">About</a></li>
                                        <li><a href="{{route('Cars_List')}}">Choose a car</a></li>
                                        <li><a href="#explore">Explore</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-lg-6">
                        {{-- <div class="widget">
                            <h5>Social Network</h5>
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                            </div>
                        </div>     --}}
                        <h5>Location</h5>
                        <div id="map"></div>

                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="index.html">
                                        Copyright 2023 -  by MUSATCAR
                                    </a>
                                </div>
                                <ul class="menu-simple mynames">
                                    <li class="dvelopername"><a class="dvelopername" href="#">Developed by</a></li>
                                    <li class="dvelopername"><a class="dvelopername" href="https://www.linkedin.com/in/moad-jaafar-a64794215/">Moad Jaafar</a></li>
                                    <li class="dvelopername"><a class="dvelopername" href="mailto:Khalidouahdou05@gmail.com">Khalid Ouahdou</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>
    
    <!-- Javascript Files
    ================================================== -->
    <script src="{{asset('Home/assets/js/plugins.js')}}"></script>
    <script src="{{asset('Home/assets/js/designesia.js')}}"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAb_ooa9UJOvNP8judM46cHe9xA0LwUHX4"></script> --}}
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAb_ooa9UJOvNP8judM46cHe9xA0LwUHX4&callback=initMap">
    </script>

</body>

</html>