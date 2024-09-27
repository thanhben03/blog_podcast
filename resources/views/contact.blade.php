@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="entry-header entry-header-2 mb-50 mt-50 text-center">
            <div class="thumb-overlay img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news-24.jpg)">
                <div class="position-midded">
                    <div class="entry-meta meta-0 font-small mb-30">
                        <a href="category.html"><span class="post-cat bg-success color-white">Get In Touch</span></a>
                    </div>
                    <h1 class="post-title mb-30 text-white">
                        Contact Us
                    </h1>
                    <div class="entry-meta meta-1 font-x-small color-grey text-uppercase text-white">
                                <span class="mr-5">
                                    <ion-icon name="planet"></ion-icon>
                                </span>
                        <span class="mr-15">alithemes.com</span>
                        <span class="ml-15 mr-5">
                                    <ion-icon name="call"></ion-icon>
                                </span>
                        <span>(+01) 234 567 89</span>
                    </div>
                </div>
            </div>
        </div>
        <!--end entry header-->
        <div class="row mb-50">
            <div class="col-lg-2 d-none d-lg-block"></div>
            <div class="col-lg-8 col-md-12">
                <div class="single-social-share single-sidebar-share mt-30">
                    <ul>
                        <li><a class="social-icon facebook-icon text-xs-center" target="_blank" href="#"><i class="ti-facebook"></i></a></li>
                        <li><a class="social-icon twitter-icon text-xs-center" target="_blank" href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a class="social-icon pinterest-icon text-xs-center" target="_blank" href="#"><i class="ti-pinterest"></i></a></li>
                        <li><a class="social-icon instagram-icon text-xs-center" target="_blank" href="#"><i class="ti-instagram"></i></a></li>
                        <li><a class="social-icon linkedin-icon text-xs-center" target="_blank" href="#"><i class="ti-linkedin"></i></a></li>
                        <li><a class="social-icon email-icon text-xs-center" target="_blank" href="#"><i class="ti-email"></i></a></li>
                    </ul>
                </div>
                <div class="single-excerpt">
                    <p class="font-large">We are AliThemes , a creative and dedicated group of individuals who love web development almost as much as we love our customers.
                        We are passionate team with the mission for achieving the perfection in web design.
                        All designs are made by love with pixel perfect design and excellent coding quality. Speed, security and SEO friendly alway in our mind.</p>
                    <hr class="wp-block-separator is-style-wide">
                    <p><span class="mr-5">
                                    <ion-icon name="location-outline"></ion-icon>
                                </span><strong>Address</strong>: Lorem 142 Str., 2352, Ipsum, State, USA</p>
                    <p><span class="mr-5">
                                    <ion-icon name="home-outline"></ion-icon>
                                </span><strong>Our website</strong>: https://alithemes.com</p>
                    <p><span class="mr-5">
                                    <ion-icon name="planet-outline"></ion-icon>
                                </span><strong>Support center</strong>: https://alithemes.ticksy.com</p>
                </div>
                <div class="entry-main-content mt-50">
                    <h3>Advertise</h3>
                    <hr class="wp-block-separator is-style-wide">
                    <p>Please contact us directly at ads@NewsViral.com. For large or unique campaigns please email sale@NewsViral.com for requests-for-proposal and additional pricing information. </p>
                    <h1 class="mt-30">Get in touch</h1>
                    <hr class="wp-block-separator is-style-wide">
                    <form class="form-contact comment_form" action="#" id="commentForm">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="website" id="website" type="text" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="button button-contactForm">Send message</button>
                        </div>
                    </form>
                </div>
                <div class="entry-bottom mt-50 mb-30">
                    <div class="overflow-hidden mt-30">
                        <div class="single-social-share float-left">
                            <ul class="d-inline-block list-inline">
                                <li class="list-inline-item"><span class="font-small text-muted"><i class="ti-sharethis mr-5"></i>Share: </span></li>
                                <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center" target="_blank" href="#"><i class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center" target="_blank" href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="social-icon pinterest-icon text-xs-center" target="_blank" href="#"><i class="ti-pinterest"></i></a></li>
                                <li class="list-inline-item"><a class="social-icon instagram-icon text-xs-center" target="_blank" href="#"><i class="ti-instagram"></i></a></li>
                                <li class="list-inline-item"><a class="social-icon linkedin-icon text-xs-center" target="_blank" href="#"><i class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End row-->
        <div class="row">
            <div class="col-12 text-center mb-50">
                <a href="#">
                    <img class="d-inline border-radius-10" src="assets/imgs/ads.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
@endsection
