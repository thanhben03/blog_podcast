@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-50">
            <div class="col-lg-2 d-none d-lg-block"></div>
            <!-- main content -->
            <div class="col-lg-8 col-md-12">
                <div class="author-bio border-radius-10 bg-white p-30 mb-50">
                    <div class="author-image mb-30">
                        <a href="author.html"><img src="assets/imgs/authors/author.png" alt="" class="avatar"></a></div>
                    <div class="author-info">
                        <h3><span class="vcard author"><span class="fn"><a href="author.html" title="Posts by Robert" rel="author">Michael D. Shear</a></span></span></h3>
                        <h5 class="text-muted">
                            <span class="mr-15">Elite author</span>
                            <i class="ti-star"></i>
                            <i class="ti-star"></i>
                            <i class="ti-star"></i>
                            <i class="ti-star"></i>
                            <i class="ti-star"></i>
                        </h5>
                        <div class="author-description">The Pulitzer Prize-winning journalist Charlie Savage is a Washington correspondent for NewsViral. He is also the author of “Small Stars Wars,” published in 2017, an investigative history of national-security legal policymaking in the Henry administration, and “Takeover Again,” published in 2012, which chronicles the Henry administration’s efforts to expand presidential power.</div>
                        <a href="author.html" class="author-bio-link text-muted"><span class="mr-5 font-x-small"><ion-icon name="person-add"></ion-icon></span>Follow This Author</a>
                        <div class="author-social">
                            <ul class="author-social-icons">
                                <li class="author-social-link-facebook"><a href="#" target="_blank"><i class="ti-facebook"></i></a></li>
                                <li class="author-social-link-twitter"><a href="#" target="_blank"><i class="ti-twitter-alt"></i></a></li>
                                <li class="author-social-link-pinterest"><a href="#" target="_blank"><i class="ti-pinterest"></i></a></li>
                                <li class="author-social-link-instagram"><a href="#" target="_blank"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h2>All posts by Michael</h2>
                <hr class="wp-block-separator is-style-wide">
                <div class="latest-post mb-50">
                    <div class="loop-list-style-1">
                        <article class="first-post p-10 background-white border-radius-10 mb-30 wow fadeIn animated">
                            <div class="img-hover-slide border-radius-15 mb-30 position-relative overflow-hidden">
                                <span class="top-right-icon bg-dark"><i class="mdi mdi-flash-on"></i></span>
                                <a href="single.html">
                                    <img src="assets/imgs/news-21.jpg" alt="post-slider">
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
                        <div class="mb-30 text-center pl-50 pr-50">
                            <a href="#">
                                <img class="border-radius-10 d-inline" src="assets/imgs/ads.jpg" alt="post-slider">
                            </a>
                        </div>
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
        </div>
    </div>
@endsection
