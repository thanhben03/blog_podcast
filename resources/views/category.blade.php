@extends('layouts.app')

@section('content')
    <div class="archive-header text-center mb-50">
        <div class="container">
            <h2>
                <span class="text-success">Cập nhật thị trường</span>
            </h2>
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span></span>
                Cập nhật thị trường
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
                    <div class="sidebar-widget widget_categories_2 border-radius-10 bg-white mb-30">
                        <ul class="font-small text-muted">
                            <li class="cat-item cat-item-2 active"><a href="#"><span class="mr-10">
                                            <ion-icon name="earth-outline"></ion-icon>
                                        </span>Giá vàng</a></li>
                            <li class="cat-item cat-item-3"><a href="#"><span class="mr-10">
                                            <ion-icon name="trending-up-outline"></ion-icon>
                                        </span>Giá dầu</a></li>
                            <li class="cat-item cat-item-5"><a href="#"><span class="mr-10">
                                            <ion-icon name="bicycle-outline"></ion-icon>
                                        </span>Hàng hoá</a></li>
                            <li class="cat-item cat-item-6"><a href="#"><span class="mr-10">
                                            <ion-icon name="fitness-outline"></ion-icon>
                                        </span>Ngoại hối</a></li>
                            <li class="cat-item cat-item-2"><a href="#"><span class="mr-10">
                                            <ion-icon name="book-outline"></ion-icon>
                                        </span>Tiền điện tử</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Widget Categories -->
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
                    <x-right-banner />
                </div>
            </div>
        </div>
    </div>
@endsection
