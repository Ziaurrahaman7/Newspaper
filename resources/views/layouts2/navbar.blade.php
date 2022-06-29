<div class="side-nav">
    <div class="side-nav-inner nicescroll-container">
        <form action="#" class="side-nav-search-form">
            <div class="form-group search-field">
                <input type="text" class="search-field" name="search-field" placeholder="Search...">
                <button class="side-nav-search-btn"><i class="fas fa-search"></i></button>
            </div>
            <!-- End of .side-nav-search-form -->
        </form>
        <!-- End of .side-nav-search-form -->
        <div class="side-nav-content">
            <div class="row ">
                <div class="col-lg-6">
                    <ul class="main-navigation side-navigation list-inline flex-column">
                      @foreach ($menus as $mainmenu )
                        <li><a href="/category/{{$mainmenu->id}}">{{$mainmenu->title}}</a></li>
                      @endforeach
                    </ul>
                    <!-- End of .main-navigation -->
                </div>
                <!-- End of  .col-md-6 -->
                <div class="col-lg-6">
                    <div class="axil-contact-info-inner">
                        <h5 class="h5 m-b-xs-10">
                            Contact Information
                        </h5>
                        <div class="axil-contact-info">
                            <address class="address">
                                <p class="m-b-xs-30  mid grey-dark-three "> @isset($setting->address) 
                                    {{$setting->address }}                               
                                @endisset</p>
                                
                                <div>
                                    <a class="tel" href="tel:8884562790"><i class="fas fa-phone"></i>@isset($setting->phone)
                                        {{$setting->phone}}
                                        @endisset</a>
                                </div>
                                {{-- <div>
                                    <a class="tel" href="tel:12125553333"><i class="fas fa-fax"></i>(121)
                                        255-53333</a>
                                </div> --}}
                            </address>
                            <!-- End of address -->
                            <div class="contact-social-share m-t-xs-30">
                                <div class="axil-social-title h5">Follow Us</div>
                                <ul class="social-share social-share__with-bg">
                                    <li><a href="@isset($setting->facebook){{$setting->facebook}}@endisset"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="@isset($setting->twitter){{$setting->twitter}}@endisset"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="@isset($setting->linkedin){{$setting->linkedin}}@endisset"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- End of .contact-shsdf -->
                        </div>
                        <!-- End of .axil-contact-info -->
                    </div>
                    <!-- End of .axil-contact-info-inner -->
                </div>
            </div>
            <!-- End of .row -->
        </div>
    </div>
    <!-- End of .side-nav-inner -->
    <div class="close-sidenav" id="close-sidenav">
        <div></div>
        <div></div>
    </div>
</div>
<!-- End of .side-nav -->
<!-- Header starts -->
<header class="page-header">
    <div class="header-top bg-grey-dark-one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md">
                    <ul class="header-top-nav list-inline justify-content-center justify-content-md-start">
                        <li class="current-date">{{date('d, M, Y')}}</li>
                        <li><a href="#">Advertisement</a></li>
                        {{-- <li><a href="about-us.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li> --}}
                    </ul>
                    <!-- End of .header-top-nav -->
                </div>
                <div class="col-md-auto">
                    <ul class="ml-auto social-share header-top__social-share">
                        <li><a href="@isset($setting->facebook){{$setting->facebook}}@endisset"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="@isset($setting->twitter){{$setting->twitter}}@endisset"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="@isset($setting->instagram){{$setting->linkdin}}@endisset"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="@isset($setting->linkdin){{$setting->linkdin}}@endisset"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .container -->
    </div>
    <!-- End of .header-top -->
    <nav class="navbar bg-white">
        <div class="container">
            <div class="navbar-inner">
                <div class="brand-logo-container">
                    <a href="/">
                        <img src="@isset($setting->facebook){{asset("storage/uploads/".$setting->logo)}}@endisset" alt="" class="brand-logo">
                    </a>
                </div>
                <!-- End of .brand-logo-container -->
                <div class="main-nav-wrapper">
                    <ul class="main-navigation list-inline" id="main-menu">
                        {{-- <li class="has-dropdown">
                            <a href="#">Home</a>
                            <ul class="submenu">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="home-2.html">Home Two</a></li>
                                <li><a href="home-3.html">Home Three</a></li>
                                <li><a href="home-4.html">Home Four</a></li>
                                <li><a href="home-5.html">Home Five</a></li>
                            </ul>
                            <!-- End of .submenu -->
                        </li> --}}
                       @foreach ($menus as $mainmenu)
                        <li class="has-dropdown">
                            <a href="/category/{{$mainmenu->id}}">{{$mainmenu->title}}</a>
                        </li>
                       @endforeach
                    </ul>
                    <!-- End of .main-navigation -->
                </div>
                <!-- End of .main-nav-wrapper -->
                <div class="navbar-extra-features ml-auto">
                    <form action="#" class="navbar-search">
                        <div class="search-field">
                            <input type="text" class="navbar-search-field" placeholder="Search Here...">
                            <button class="navbar-search-btn" type="button"><i
                                    class="fal fa-search"></i></button>
                        </div>
                        <!-- End of .search-field -->
                        <a href="#" class="navbar-search-close"><i class="fal fa-times"></i></a>
                    </form>
                    <!-- End of .navbar-search -->
                    <a href="#" class="nav-search-field-toggler" data-toggle="nav-search-feild"><i
                            class="far fa-search"></i></a>
                    <a href="#" class="side-nav-toggler" id="side-nav-toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <!-- End of .navbar-extra-features -->
                <div class="main-nav-toggler d-block d-lg-none" id="main-nav-toggler">
                    <div class="toggler-inner">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <!-- End of .main-nav-toggler -->
            </div>
            <!-- End of .navbar-inner -->
        </div>
        <!-- End of .container -->
    </nav>
    <!-- End of .navbar -->
</header>
<!-- End of .section-gap -->