<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Trade 24h</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/assets/imgs/logo_bac.png')}}">
    <!-- NewsViral CSS  -->
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/widgets.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/responsive.css')}}">
    @stack('css')
</head>

<body>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="text-center">
                <img class="jump mb-50" src="assets/imgs/loading.svg" alt="">
                <h6>Now Loading</h6>
                <div class="loader">
                    <div class="bar bar1"></div>
                    <div class="bar bar2"></div>
                    <div class="bar bar3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-wrap">
    <!--Offcanvas sidebar-->
    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar position-right">
        <button class="off-canvas-close"><i class="ti-close"></i></button>
        <div class="sidebar-inner">
            <!--Search-->
            <div class="siderbar-widget mb-50 mt-30">
                <form action="#" method="get" class="search-form position-relative">
                    <input type="text" class="search_field" placeholder="Search" value="" name="s">
                    <span class="search-icon"><i class="ti-search mr-5"></i></span>
                </form>
            </div>
            <!--lastest post-->
            <div class="sidebar-widget mb-50">
                <div class="widget-header mb-30">
                    <h5 class="widget-title">Top <span>Trending</span></h5>
                </div>
                <div class="post-aside-style-2">
                    <ul class="list-post">
                        <li class="mb-30 wow fadeIn animated">
                            <div class="d-flex">
                                <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale">
                                    <a class="color-white" href="single.html">
                                        <img src="assets/imgs/thumbnail-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">Vancouver woman finds pictures and videos of herself online</a></h6>
                                    <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                        <span class="post-by">By <a href="author.html">K. Marry</a></span>
                                        <span class="post-on">4m ago</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-30 wow fadeIn animated">
                            <div class="d-flex">
                                <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale">
                                    <a class="color-white" href="single.html">
                                        <img src="assets/imgs/thumbnail-3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">4 Things Emotionally Intelligent People Don’t Do</a></h6>
                                    <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                        <span class="post-by">By <a href="author.html">Mr. John</a></span>
                                        <span class="post-on">3h ago</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-30 wow fadeIn animated">
                            <div class="d-flex">
                                <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale">
                                    <a class="color-white" href="single.html">
                                        <img src="assets/imgs/thumbnail-5.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">Reflections from a Token Black Friend</a></h6>
                                    <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                        <span class="post-by">By <a href="author.html">Kenedy</a></span>
                                        <span class="post-on">4h ago</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-30 wow fadeIn animated">
                            <div class="d-flex">
                                <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale">
                                    <a class="color-white" href="single.html">
                                        <img src="assets/imgs/thumbnail-7.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">How to Identify a Smart Person in 3 Minutes</a></h6>
                                    <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                        <span class="post-by">By <a href="author.html">Steven</a></span>
                                        <span class="post-on">5h ago</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeIn animated">
                            <div class="d-flex">
                                <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale">
                                    <a class="color-white" href="single.html">
                                        <img src="assets/imgs/thumbnail-8.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">Blackface Minstrel Songs Don’t Belong in Children’s Music Class</a></h6>
                                    <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                        <span class="post-by">By <a href="author.html">J.Smith</a></span>
                                        <span class="post-on">5h30 ago</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Categories-->
            <div class="sidebar-widget widget_tag_cloud mb-50">
                <div class="widget-header tags-close mb-20">
                    <h5 class="widget-title mt-5">Tags Cloud</h5>
                </div>
                <div class="tagcloud">
                    <a href="category.html">Beauty</a>
                    <a href="category.html">Book</a>
                    <a href="category.html">Design</a>
                    <a href="category.html">Fashion</a>
                    <a href="category.html">Lifestyle</a>
                    <a href="category.html">Travel</a>
                    <a href="category.html">Science</a>
                    <a href="category.html">Health</a>
                    <a href="category.html">Sports</a>
                    <a href="category.html">Arts</a>
                    <a href="category.html">Books</a>
                    <a href="category.html">Style</a>
                </div>
            </div>
            <!--Ads-->
            <div class="sidebar-widget widget-ads mb-30">
                <div class="widget-header tags-close mb-20">
                    <h5 class="widget-title mt-5">Your Ads Here</h5>
                </div>
                <a href="assets/imgs/news-1.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s">
                    <img class="border-radius-10" src="assets/imgs/ads-1.jpg" alt="">
                </a>
            </div>
        </div>
    </aside>
    <!-- Main Header -->
    <header class="main-header header-style-2 mb-40">
        <div class="header-bottom header-sticky background-white text-center">
            <div class="scroll-progress gradient-bg-1"></div>
            <div class="mobile_menu d-lg-none d-block"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3">
                        <div class="header-logo d-none d-lg-block">
                            <a href="/">
                                <img width="136px" class="logo-img d-inline" src="assets/imgs/logo_bacnguyen.svg" alt="">
                            </a>
                        </div>
                        <div class="logo-tablet d-md-inline d-lg-none d-none">
                            <a href="/">
                                <img class="logo-img d-inline" src="assets/imgs/logo.svg" alt="">
                            </a>
                        </div>
                        <div class="logo-mobile d-block d-md-none">
                            <a href="/">
                                <img class="logo-img d-inline" src="assets/imgs/favicon.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9 main-header-navigation">
                        <!-- Main-menu -->
                        <div class="main-nav text-left float-lg-left float-md-right">
                            <ul class="mobi-menu d-none menu-3-columns" id="navigation">
                                <li class="cat-item cat-item-2"><a href="#">Global Economy</a></li>
                                <li class="cat-item cat-item-3"><a href="#">Environment</a></li>
                                <li class="cat-item cat-item-4"><a href="#">Religion</a></li>
                                <li class="cat-item cat-item-5"><a href="#">Fashion</a></li>
                                <li class="cat-item cat-item-6"><a href="#">Terrorism</a></li>
                                <li class="cat-item cat-item-7"><a href="#">Conflicts</a></li>
                                <li class="cat-item cat-item-2"><a href="#">Scandals</a></li>
                                <li class="cat-item cat-item-2"><a href="#">Executive</a></li>
                                <li class="cat-item cat-item-2"><a href="#">Foreign policy</a></li>
                                <li class="cat-item cat-item-2"><a href="#">Healthy Living</a></li>
                                <li class="cat-item cat-item-3"><a href="#">Medical Research</a></li>
                                <li class="cat-item cat-item-4"><a href="#">Children’s Health</a></li>
                                <li class="cat-item cat-item-5"><a href="#">Around the World</a></li>
                                <li class="cat-item cat-item-6"><a href="#">Ad Choices</a></li>
                                <li class="cat-item cat-item-7"><a href="#">Mental Health</a></li>
                                <li class="cat-item cat-item-2"><a href="#">Media Relations</a></li>
                            </ul>
                            <nav>
                                <ul class="main-menu d-none d-lg-inline">
                                    <li>
                                        <a href="/">
                                            <span class="mr-15">
                                                    <ion-icon name="home-outline"></ion-icon>
                                            </span>Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/category">
                                                <span class="mr-15">
                                                    <ion-icon name="desktop-outline"></ion-icon>
                                                </span>Cập nhật thị trường
                                        </a>
{{--                                        <ul class="sub-menu sub-menu-2 text-muted font-small">--}}
{{--                                            <li><a href="/category">Cập nhật thị trường</a></li>--}}
{{--                                            <li><a href="/category-grid">Phân tích</a></li>--}}
{{--                                            <li><a href="/category-big">Chiến lược</a></li>--}}
{{--                                            <li><a href="/category-metro">Quản lý rủi ro</a></li>--}}
{{--                                            <li><a href="/single-audio">Kỹ năng</a></li>--}}
{{--                                        </ul>--}}
                                    </li>
                                    <li><a href="/podcast"><span class="mr-15">
                                                    <ion-icon name="caret-forward-circle-outline"></ion-icon>
                                                </span>Podcast</a></li>
                                    <li><a href="https://www.youtube.com/@bacnguyeninfo"><span style="color: red" class="mr-15">
                                                    <ion-icon name="logo-youtube"></ion-icon>
                                                </span>YouTube</a></li>
                                    <li><a href="/contact"><span class="mr-15">
                                                    <ion-icon name="newspaper-outline"></ion-icon>
                                                </span>Liên hệ</a></li>
                                </ul>

                            </nav>
                        </div>
                        <!-- Search -->
                        <form action="#" method="get" class="search-form d-lg-inline float-right position-relative mr-30 d-none">
                            <input type="text" class="search_field" placeholder="Search" value="" name="s">
                            <span class="search-icon"><i class="ti-search mr-5"></i></span>
                        </form>
                        <!-- Off canvas -->
                        <div class="off-canvas-toggle-cover">
                            <div class="off-canvas-toggle hidden d-inline-block ml-15" id="off-canvas-toggle">
                                <ion-icon name="grid-outline"></ion-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Wrap Start -->
    <main class="position-relative">
        @yield('content')

    </main>
    <!-- Footer Start-->
    <footer class="mb-2">
{{--        <div class="footer-area pt-50 bg-white">--}}
{{--            <div class="container">--}}
{{--                <div class="row pb-30">--}}
{{--                    <div class="col">--}}
{{--                        <ul class="float-left mr-30 font-medium">--}}
{{--                            <li class="cat-item cat-item-2"><a href="category.html">Global Economy</a></li>--}}
{{--                            <li class="cat-item cat-item-3"><a href="category.html">Environment</a></li>--}}
{{--                            <li class="cat-item cat-item-4"><a href="category.html">Religion</a></li>--}}
{{--                            <li class="cat-item cat-item-5"><a href="category.html">Fashion</a></li>--}}
{{--                            <li class="cat-item cat-item-6"><a href="category.html">Terrorism</a></li>--}}
{{--                            <li class="cat-item cat-item-7"><a href="category.html">Conflicts</a></li>--}}
{{--                            <li class="cat-item cat-item-2"><a href="category.html">Scandals</a></li>--}}
{{--                            <li class="cat-item cat-item-2"><a href="category.html">Executive</a></li>--}}
{{--                            <li class="cat-item cat-item-2"><a href="category.html">Foreign policy</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="col">--}}
{{--                        <ul class="float-left mr-30 font-medium">--}}
{{--                            <li class="cat-item cat-item-2"><a href="category.html">Healthy Living</a></li>--}}
{{--                            <li class="cat-item cat-item-3"><a href="category.html">Medical Research</a></li>--}}
{{--                            <li class="cat-item cat-item-4"><a href="category.html">Children’s Health</a></li>--}}
{{--                            <li class="cat-item cat-item-5"><a href="category.html">Around the World</a></li>--}}
{{--                            <li class="cat-item cat-item-6"><a href="category.html">Ad Choices</a></li>--}}
{{--                            <li class="cat-item cat-item-7"><a href="category.html">Mental Health</a></li>--}}
{{--                            <li class="cat-item cat-item-8"><a href="category.html">Media</a></li>--}}
{{--                            <li class="cat-item cat-item-9"><a href="category.html">Relations</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="col">--}}
{{--                        <ul class="float-left mr-30 font-medium">--}}
{{--                            <li class="cat-item cat-item-2"><a href="category.html">Real Estate</a></li>--}}
{{--                            <li class="cat-item cat-item-3"><a href="category.html">Commercial</a></li>--}}
{{--                            <li class="cat-item cat-item-4"><a href="category.html">Find A Home</a></li>--}}
{{--                            <li class="cat-item cat-item-5"><a href="category.html">Mortgage Calculator</a></li>--}}
{{--                            <li class="cat-item cat-item-6"><a href="category.html">My Real Estate</a></li>--}}
{{--                            <li class="cat-item cat-item-7"><a href="category.html">The High End</a></li>--}}
{{--                            <li class="cat-item cat-item-8"><a href="category.html">List Your Home</a></li>--}}
{{--                            <li class="cat-item cat-item-9"><a href="category.html">World</a></li>--}}
{{--                            <li class="cat-item cat-item-10"><a href="category.html">Magazine</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="col">--}}
{{--                        <ul class="float-left mr-30 font-medium">--}}
{{--                            <li class="cat-item cat-item-2"><a href="category.html">U.S.</a></li>--}}
{{--                            <li class="cat-item cat-item-3"><a href="category.html">Politics</a></li>--}}
{{--                            <li class="cat-item cat-item-4"><a href="category.html">N.Y.</a></li>--}}
{{--                            <li class="cat-item cat-item-5"><a href="category.html">Business</a></li>--}}
{{--                            <li class="cat-item cat-item-6"><a href="category.html">Opinion</a></li>--}}
{{--                            <li class="cat-item cat-item-7"><a href="category.html">Tech</a></li>--}}
{{--                            <li class="cat-item cat-item-8"><a href="category.html">Science</a></li>--}}
{{--                            <li class="cat-item cat-item-9"><a href="category.html">Health</a></li>--}}
{{--                            <li class="cat-item cat-item-10"><a href="category.html">Sports</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="col">--}}
{{--                        <ul class="float-left mr-30 font-medium">--}}
{{--                            <li class="cat-item cat-item-2"><a href="category.html">Arts</a></li>--}}
{{--                            <li class="cat-item cat-item-3"><a href="category.html">Books</a></li>--}}
{{--                            <li class="cat-item cat-item-4"><a href="category.html">Style</a></li>--}}
{{--                            <li class="cat-item cat-item-5"><a href="category.html">Food</a></li>--}}
{{--                            <li class="cat-item cat-item-6"><a href="category.html">Travel</a></li>--}}
{{--                            <li class="cat-item cat-item-7"><a href="category.html">T Magazine</a></li>--}}
{{--                            <li class="cat-item cat-item-8"><a href="category.html">Real Estate</a></li>--}}
{{--                            <li class="cat-item cat-item-9"><a href="category.html">Obituaries</a></li>--}}
{{--                            <li class="cat-item cat-item-10"><a href="category.html">Video</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="col d-none d-lg-block">--}}
{{--                        <ul class="float-left mr-30 font-medium">--}}
{{--                            <li class="cat-item cat-item-2"><a href="category.html">Baseball</a></li>--}}
{{--                            <li class="cat-item cat-item-3"><a href="category.html">Basketball</a></li>--}}
{{--                            <li class="cat-item cat-item-4"><a href="category.html">Football: College</a></li>--}}
{{--                            <li class="cat-item cat-item-5"><a href="category.html">Football: N.F.L.</a></li>--}}
{{--                            <li class="cat-item cat-item-6"><a href="category.html">Golf</a></li>--}}
{{--                            <li class="cat-item cat-item-7"><a href="category.html">Hockey</a></li>--}}
{{--                            <li class="cat-item cat-item-8"><a href="category.html">Soccer</a></li>--}}
{{--                            <li class="cat-item cat-item-9"><a href="category.html">Tennis</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area bg-white text-muted">
            <div class="container">
                <div class="footer-border pt-20 pb-20">

                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-12">
                            <div class="footer-copy-right">
                                <p class="font-medium text-muted">©2024.  Toàn bộ bản quyền thuộc về Nguyễn Văn Bắc</p>
                                <a class="font-medium text-muted" >Chính sách nội dung</a>
                                <p class="font-medium text-muted" >Email: bacnguyen.vn@gmail.com</p>
                                <p class="mt-1 font-medium text-muted" >Điện thoại: 0932886865</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
</div> <!-- Main Wrap End-->
<div class="dark-mark"></div>
<!-- Vendor JS-->
<script src="{{asset('/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/jquery.slicknav.js')}}"></script>
<script src="{{asset('/assets/js/vendor/owl.carousel.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/slick.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/wow.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/animated.headline.js')}}"></script>
<script src="{{asset('/assets/js/vendor/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('/assets/js/vendor/jquery.ticker.js')}}"></script>
<script src="{{asset('/assets/js/vendor/jquery.vticker-min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/jquery.sticky.js')}}"></script>
<script src="{{asset('/assets/js/vendor/perfect-scrollbar.js')}}"></script>
<script src="{{asset('/assets/js/vendor/waypoints.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/jquery.counterup.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/jquery.theia.sticky.js')}}"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<!-- NewsViral JS -->
<script src="{{asset('/assets/js/main.js')}}"></script>
</body>

</html>
