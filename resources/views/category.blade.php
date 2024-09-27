@extends('layouts.app')

@section('content')
    <div class="archive-header text-center mb-50">
        <div class="container">
            <h2>
                <span class="text-success">Lifestyle</span>
                <span class="post-count">2538 articles</span>
            </h2>
            <div class="breadcrumb">
                <span class="no-arrow">You are here:</span>
                <a href="index.html" rel="nofollow">Home</a>
                <span></span>
                Lifestyle
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- sidebar-left -->
            <div class="col-lg-2 col-md-3 primary-sidebar sticky-sidebar sidebar-left order-2 order-md-1">
                <!-- Widget Weather -->
                <div class="sidebar-widget widget-weather border-radius-10 bg-white mb-30">
                    <div class="d-flex">
                        <div class="font-medium">
                            <p>Monday</p>
                            <h2>12</h2>
                            <p><strong>August</strong></p>
                        </div>
                        <div class="font-medium ml-10 pt-20">
                            <div id="datetime" class="d-inline-block">
                                <ul>
                                    <li><span class="font-small">
                                                    <a class="text-primary" href="#">London</a><br>
                                                    <i class="wi wi-day-sunny mr-5"></i>32ºc
                                                </span>
                                        <p>Sunny</p>
                                    </li>
                                    <li><span class="font-small">
                                                    <a class="text-danger" href="#">Paris</a><br>
                                                    <i class="wi wi-day-cloudy mr-5"></i>28ºc
                                                </span>
                                        <p>Cloudy</p>
                                    </li>
                                    <li><span class="font-small">
                                                    <a class="text-success" href="#">New York</a><br>
                                                    <i class="wi wi-rain-mix mr-5"></i>25ºc
                                                </span>
                                        <p>Rainy</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Widget Categories -->
                <div class="sidebar-widget widget_categories_2 border-radius-10 bg-white mb-30">
                    <ul class="font-small text-muted">
                        <li class="cat-item cat-item-2 active"><a href="#"><span class="mr-10">
                                            <ion-icon name="earth-outline"></ion-icon>
                                        </span>International</a></li>
                        <li class="cat-item cat-item-3"><a href="#"><span class="mr-10">
                                            <ion-icon name="trending-up-outline"></ion-icon>
                                        </span>Businesss</a></li>
                        <li class="cat-item cat-item-4"><a href="#"><span class="mr-10">
                                            <ion-icon name="glasses-outline"></ion-icon>
                                        </span>Entertainment</a></li>
                        <li class="cat-item cat-item-5"><a href="#"><span class="mr-10">
                                            <ion-icon name="bicycle-outline"></ion-icon>
                                        </span>Sport News</a></li>
                        <li class="cat-item cat-item-6"><a href="#"><span class="mr-10">
                                            <ion-icon name="fitness-outline"></ion-icon>
                                        </span>Health</a></li>
                        <li class="cat-item cat-item-2"><a href="#"><span class="mr-10">
                                            <ion-icon name="book-outline"></ion-icon>
                                        </span>Magazine</a></li>
                    </ul>
                </div>
                <!-- Widget Categories -->
                <div class="sidebar-widget widget_categories border-radius-10 bg-white mb-30">
                    <div class="widget-header position-relative mb-15">
                        <h5 class="widget-title"><strong>Categories</strong></h5>
                    </div>
                    <ul class="font-small text-muted">
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
                </div>
            </div>
            <!-- main content -->
            <div class="col-lg-10 col-md-9 order-1 order-md-2">
                <div class="row mb-50">
                    <div class="col-lg-8 col-md-12">
                        <div class="latest-post mb-50">
                            <div class="loop-list-style-1">
                                <article class="first-post p-10 background-white border-radius-10 mb-30 wow fadeIn animated">
                                    <div class="img-hover-slide border-radius-15 mb-30 position-relative overflow-hidden">
                                        <span class="top-right-icon bg-dark"><i class="mdi mdi-flash-on"></i></span>
                                        <a href="single.html">
                                            <img src="assets/imgs/news-23.jpg" alt="post-slider">
                                        </a>
                                    </div>
                                    <div class="pr-10 pl-10">
                                        <div class="entry-meta mb-30">
                                            <a class="entry-meta meta-0" href="category.html"><span class="post-in background2 text-primary font-x-small">Home decor</span></a>
                                            <div class="float-right font-small">
                                                <span><span class="mr-10 text-muted"><i class="fa fa-eye" aria-hidden="true"></i></span>5.8k</span>
                                                <span class="ml-30"><span class="mr-10 text-muted"><i class="fa fa-comment" aria-hidden="true"></i></span>2.5k</span>
                                                <span class="ml-30"><span class="mr-10 text-muted"><i class="fa fa-share-alt" aria-hidden="true"></i></span>125k</span>
                                            </div>
                                        </div>
                                        <h4 class="post-title mb-20">
                                                    <span class="post-format-icon">
                                                        <ion-icon name="headset-outline"></ion-icon>
                                                    </span>
                                            <a href="single.html">Ettitude — Beautifully Designed Bamboo Sheets & Sleep Wear-Home Décor Holiday Gift Guide</a></h4>
                                        <p class="post-exerpt font-medium text-muted mb-30">These people envy me for having a lifestyle they don’t have, but the truth is, sometimes I envy their lifestyle instead. Struggling to sell one multi-million dollar home currently.</p>
                                        <div class="mb-20 overflow-hidden">
                                            <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                                <span class="post-by">By <a href="author.html">KNICKMEYER</a></span>
                                                <span class="post-on">18/09/2020 09:35 EST</span>
                                                <span class="time-reading">12 mins read</span>
                                                <p class="font-x-small mt-10">Updated 18/09/2020 10:28 EST</p>
                                            </div>
                                            <div class="float-right">
                                                <a href="single.html" class="read-more"><span class="mr-10"><i class="fa fa-thumbtack" aria-hidden="true"></i></span>Picked by Editor</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="p-10 background-white border-radius-10 mb-30 wow fadeIn animated">
                                    <div class="d-md-flex d-block">
                                        <div class="post-thumb post-thumb-big d-flex mr-15 border-radius-15 img-hover-scale">
                                            <a class="color-white" href="single.html">
                                                <img class="border-radius-15" src="assets/imgs/thumbnail-15.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <div class="entry-meta mb-15 mt-10">
                                                <a class="entry-meta meta-2" href="category.html"><span class="post-in text-danger font-x-small">Politic</span></a>
                                            </div>
                                            <h5 class="post-title mb-15 text-limit-2-row">
                                                        <span class="post-format-icon">
                                                            <ion-icon name="videocam-outline"></ion-icon>
                                                        </span>
                                                <a href="single.html">More than 1.5 million people sought state unemployment benefits last week even as businesses reopened.</a></h5>
                                            <p class="post-exerpt font-medium text-muted mb-30 d-none d-lg-block">These people envy me for having a lifestyle they don’t have, but the truth is, sometimes I envy their lifestyle instead. Struggling to sell one multi-million dollar home currently.</p>
                                            <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                                <span class="post-by">By <a href="author.html">Sean Boynton</a></span>
                                                <span class="post-on">15/09/2020 07:00 EST</span>
                                                <span class="time-reading">12 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="p-10 background-white border-radius-10 mb-30 wow fadeIn animated">
                                    <div class="d-md-flex d-block">
                                        <div class="post-thumb post-thumb-big d-flex mr-15 border-radius-15 img-hover-scale">
                                            <a class="color-white" href="single.html">
                                                <img class="border-radius-15" src="assets/imgs/thumbnail-13.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <div class="entry-meta mb-15 mt-10">
                                                <a class="entry-meta meta-2" href="category.html"><span class="post-in text-warning font-x-small">Religion</span></a>
                                            </div>
                                            <h5 class="post-title mb-15 text-limit-2-row">
                                                <a href="single.html">Elite B.C., Ontario crime network laundering ‘hundreds of millions’ a year, inquiry hears</a></h5>
                                            <p class="post-exerpt font-medium text-muted mb-30 d-none d-lg-block">These people envy me for having a lifestyle they don’t have, but the truth is, sometimes I envy their lifestyle instead. Struggling to sell one multi-million dollar home currently.</p>
                                            <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                                <span class="post-by">By <a href="author.html">Walter Cronkite</a></span>
                                                <span class="post-on">16/09/2020 08:15 EST</span>
                                                <span class="time-reading">14 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="p-10 background-white border-radius-10 mb-30 wow fadeIn animated">
                                    <div class="d-md-flex d-block">
                                        <div class="post-thumb post-thumb-big d-flex mr-15 border-radius-15 img-hover-scale">
                                            <a class="color-white" href="single.html">
                                                <img class="border-radius-15" src="assets/imgs/thumbnail-16.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <div class="entry-meta mb-15 mt-10">
                                                <a class="entry-meta meta-2" href="category.html"><span class="post-in text-success font-x-small">Healthy</span></a>
                                            </div>
                                            <h5 class="post-title mb-15 text-limit-2-row">
                                                        <span class="post-format-icon">
                                                            <ion-icon name="image-outline"></ion-icon>
                                                        </span>
                                                <a href="single.html">Daycares are opening across the country, but can they really operate safely?</a></h5>
                                            <p class="post-exerpt font-medium text-muted mb-30 d-none d-lg-block">These people envy me for having a lifestyle they don’t have, but the truth is, sometimes I envy their lifestyle instead. Struggling to sell one multi-million dollar home currently.</p>
                                            <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                                <span class="post-by">By <a href="author.html">JONATHAN LEMIRE</a></span>
                                                <span class="post-on">17/09/2020 19:35 EST</span>
                                                <span class="time-reading">6 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="p-10 background-white border-radius-10 mb-30 wow fadeIn animated">
                                    <div class="d-md-flex d-block">
                                        <div class="post-thumb post-thumb-big d-flex mr-15 border-radius-15 img-hover-scale">
                                            <a class="color-white" href="single.html">
                                                <img class="border-radius-15" src="assets/imgs/thumbnail-8.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <div class="entry-meta mb-15 mt-10">
                                                <a class="entry-meta meta-2" href="category.html"><span class="post-in text-info font-x-small">Conflicts</span></a>
                                            </div>
                                            <h5 class="post-title mb-15 text-limit-2-row">
                                                        <span class="post-format-icon">
                                                            <ion-icon name="chatbox-outline"></ion-icon>
                                                        </span>
                                                <a href="single.html">Dwayne ‘The Rock’ Johnson confronts Donald Trump: ‘Where are you?’</a></h5>
                                            <p class="post-exerpt font-medium text-muted mb-30 d-none d-lg-block">These people envy me for having a lifestyle they don’t have, but the truth is, sometimes I envy their lifestyle instead. Struggling to sell one multi-million dollar home currently.</p>
                                            <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                                <span class="post-by">By <a href="author.html">Walter Cronkite</a></span>
                                                <span class="post-on">18/09/2020 09:35 EST</span>
                                                <span class="time-reading">13 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="p-10 background-white border-radius-10 mb-30 wow fadeIn animated">
                                    <div class="d-md-flex d-block">
                                        <div class="post-thumb post-thumb-big d-flex mr-15 border-radius-15 img-hover-scale">
                                            <a class="color-white" href="single.html">
                                                <img class="border-radius-15" src="assets/imgs/thumbnail-9.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <div class="entry-meta mb-15 mt-10">
                                                <a class="entry-meta meta-2" href="category.html"><span class="post-in text-success font-x-small">Politic</span></a>
                                            </div>
                                            <h5 class="post-title mb-15 text-limit-2-row">
                                                        <span class="post-format-icon">
                                                            <ion-icon name="chatbox-outline"></ion-icon>
                                                        </span>
                                                <a href="single.html">The myth of society: the social contract and the body politic</a></h5>
                                            <p class="post-exerpt font-medium text-muted mb-30 d-none d-lg-block">These people envy me for having a lifestyle they don’t have, but the truth is, sometimes I envy their lifestyle instead. Struggling to sell one multi-million dollar home currently.</p>
                                            <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                                <span class="post-by">By <a href="author.html">Tomy Crust</a></span>
                                                <span class="post-on">17/09/2020 09:35 EST</span>
                                                <span class="time-reading">12 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="pagination-area mb-30">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link" href="#">04</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 sidebar-right">
                        <div class="sidebar-widget mb-50">
                            <div class="widget-header mb-30 bg-white border-radius-10 p-15">
                                <h5 class="widget-title mb-0">Top <span>Trending</span></h5>
                            </div>
                            <div class="post-aside-style-2">
                                <ul class="list-post">
                                    <li class="mb-30 wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
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
                                    <li class="mb-30 wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
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
                                    <li class="mb-30 wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
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
                                    <li class="mb-30 wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
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
                                    <li class="wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
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
                        <div class="sidebar-widget mb-50">
                            <div class="widget-header mb-30">
                                <h5 class="widget-title">Recent <span>posts</span></h5>
                            </div>
                            <div class="post-aside-style-3">
                                <article class="bg-white border-radius-15 mb-30 p-10 wow fadeIn animated">
                                    <div class="post-thumb d-flex mb-15 border-radius-15 img-hover-scale">
                                        <a href="single.html">
                                            <video autoplay="" class="photo-item__video" loop="" muted="" preload="none">
                                                <source src="https://player.vimeo.com/external/210754416.sd.mp4?s=826dbe91a402d3fc239674b6595a0100b2a45098&amp;profile_id=164&amp;oauth2_token_id=57447761" type="video/mp4">
                                            </video>
                                        </a>
                                    </div>
                                    <div class="pl-10 pr-10">
                                        <h5 class="post-title mb-15"><a href="single.html">Vancouver woman finds pictures and videos of herself online</a></h5>
                                        <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase mb-10">
                                            <span class="post-in">In <a href="category.html">Global</a></span>
                                            <span class="post-by">By <a href="author.html">K. Marry</a></span>
                                            <span class="post-on">4m ago</span>
                                        </div>
                                    </div>
                                </article>
                                <article class="bg-white border-radius-15 mb-30 p-10 wow fadeIn animated">
                                    <div class="post-thumb d-flex mb-15 border-radius-15 img-hover-scale">
                                        <a href="single.html">
                                            <img class="border-radius-15" src="assets/imgs/news-22.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pl-10 pr-10">
                                        <h5 class="post-title mb-15"><a href="single.html">Fight breaks out at Disneyland</a></h5>
                                        <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase mb-10">
                                            <span class="post-in">In <a href="category.html">Healthy</a></span>
                                            <span class="post-by">By <a href="author.html">Steven</a></span>
                                            <span class="post-on">14m ago</span>
                                        </div>
                                    </div>
                                </article>
                                <article class="bg-white border-radius-15 mb-30 p-10 wow fadeIn animated">
                                    <div class="post-thumb d-flex mb-15 border-radius-15 img-hover-scale">
                                        <a href="single.html">
                                            <img class="border-radius-15" src="assets/imgs/news-20.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pl-10 pr-10">
                                        <h5 class="post-title mb-15"><a href="single.html">California sheriff’s deputy shot during ‘ambush’ at police station, officials say</a></h5>
                                        <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase mb-10">
                                            <span class="post-in">In <a href="category.html">US</a></span>
                                            <span class="post-by">By <a href="author.html">Murler</a></span>
                                            <span class="post-on">16m ago</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="sidebar-widget p-20 border-radius-15 bg-white widget-latest-comments wow fadeIn animated">
                            <div class="widget-header mb-30">
                                <h5 class="widget-title">Last <span>Comments</span></h5>
                            </div>
                            <div class="post-block-list post-module-6">
                                <div class="last-comment mb-20 d-flex wow fadeIn animated">
                                            <span class="item-count vertical-align">
                                                <a class="red-tooltip author-avatar" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Azumi - 985 posts"><img src="assets/imgs/authors/author-14.png" alt=""></a>
                                            </span>
                                    <div class="alith_post_title_small">
                                        <p class="font-medium mb-10"><a href="single.html">A writer is someone for whom writing is more difficult than it is for other people.</a></p>
                                        <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase mb-10">
                                            <span class="post-by">By <a href="author.html">Azumi</a></span>
                                            <span class="post-on">4m ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="last-comment mb-20 d-flex wow fadeIn animated">
                                            <span class="item-count vertical-align">
                                                <a class="red-tooltip author-avatar" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Harry - 1245 posts"><img src="assets/imgs/authors/author-9.png" alt=""></a>
                                            </span>
                                    <div class="alith_post_title_small">
                                        <p class="font-medium mb-10"><a href="single.html">Riding the main trail was easy, a little bumpy because my mountain bike is a hardtail</a></p>
                                        <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase mb-10">
                                            <span class="post-by">By <a href="author.html">K. Harry</a></span>
                                            <span class="post-on">4m ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="last-comment d-flex wow fadeIn animated">
                                            <span class="item-count vertical-align">
                                                <a class="red-tooltip author-avatar" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Johny - 445 posts"><img src="assets/imgs/authors/author-3.png" alt=""></a>
                                            </span>
                                    <div class="alith_post_title_small">
                                        <p class="font-medium mb-10"><a href="single.html">Teamwork begins by building trust. And the only way to do that is to overcome our need for invulnerability.</a></p>
                                        <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase mb-10">
                                            <span class="post-by">By <a href="author.html">D. Johny</a></span>
                                            <span class="post-on">4m ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
