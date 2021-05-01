@extends('templates.header');

@section('title')
Home
@endsection

@section('content')

<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="{{asset('img/hero-1.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h1>Black friday</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore</p>
                        <a href="#" class="primary-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero-items set-bg" data-setbg="{{asset('img/hero-2.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h1>Black friday</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore</p>
                        <a href="#" class="primary-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<div class="banner-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="{{asset('img/banner-1.jpg')}}" alt="">
                    <div class="inner-text">
                        <h4>Men’s</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="{{asset('img/banner-2.jpg')}}" alt="">
                    <div class="inner-text">
                        <h4>Women’s</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="{{asset('img/banner-3.jpg')}}" alt="">
                    <div class="inner-text">
                        <h4>Kid’s</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- Women Banner Section Begin -->
<section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="{{asset('img/products/women-large.jpg')}}">
                    <h2>Women’s</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class="filter-control">
                    <h3>Kategori Women Terbaru</h3>
                </div>
                <div class="product-slider owl-carousel">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{asset('img/products/women-1.jpg')}}" alt="">
                            <div class="sale">New</div>
                            <ul>
                                <li class="quick-view"><a href="#">Shop Now</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Women’s</div>
                            <a href="#">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">
                                $14.00
                                <span>$35.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{asset('img/products/women-2.jpg')}}" alt="">
                            <div class="sale">New</div>
                            <ul>
                                <li class="quick-view"><a href="#">Shop Now</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Women’s</div>
                            <a href="#">
                                <h5>Guangzhou sweater</h5>
                            </a>
                            <div class="product-price">
                                $13.00
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{asset('img/products/women-3.jpg')}}" alt="">
                            <div class="sale">New</div>
                            <ul>
                                <li class="quick-view"><a href="#">Shop Now</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Women’s</div>
                            <a href="#">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">
                                $34.00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Women Banner Section End -->

<!-- Deal Of The Week Section Begin-->
<section class="deal-of-week set-bg spad" data-setbg="{{asset('img/time-bg.jpg')}}">
    <div class="container">
        <div class="col-lg-6 text-center">
            <div class="section-title">
                <h2>Deal Of The Week</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed<br /> do ipsum dolor sit amet,
                    consectetur adipisicing elit </p>
            </div>
            <a href="#" class="primary-btn">Shop Now</a>
        </div>
    </div>
</section>
<!-- Deal Of The Week Section End -->

<!-- Man Banner Section Begin -->
<section class="man-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="filter-control">
                    <h3>Kategori Men Terbaru</h3>
                </div>
                <div class="product-slider owl-carousel">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{asset('img/products/man-1.jpg')}}" alt="">
                            <div class="sale">New</div>
                            <ul>
                                <liclass="quick-view"><a href="#">Shop Now</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Men's</div>
                            <a href="#">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">
                                $14.00
                                <span>$35.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{asset('img/products/man-2.jpg')}}" alt="">
                            <div class="sale">New</div>
                            <ul>
                                <li class="quick-view"><a href="#">Shop Now</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Men's</div>
                            <a href="#">
                                <h5>Guangzhou sweater</h5>
                            </a>
                            <div class="product-price">
                                $13.00
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{asset('img/products/man-3.jp')}}g" alt="">
                            <div class="sale">New</div>
                            <ul>
                                <li class="quick-view"><a href="#">Shop Now</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Men's</div>
                            <a href="#">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">
                                $34.00
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{asset('img/products/man-4.jpg')}}" alt="">
                            <div class="sale">New</div>
                            <ul>
                                <li class="quick-view"><a href="#">Shop Now</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Men's</div>
                            <a href="#">
                                <h5>Converse Shoes</h5>
                            </a>
                            <div class="product-price">
                                $34.00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg m-large" data-setbg="{{asset('img/products/man-large.jpg')}}">
                    <h2>Men’s</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Man Banner Section End -->

<section class="latest-blog spad" style="padding-top: 0;">
    <div class="container-fluid" style="padding: 0 5%">
        <h3 style="text-align: center;font-weight: bold;margin-bottom: 32px;">Our Instagram</h3>
        <div class="embedsocial-hashtag" data-ref="eeb97c338668c6eb70280a71a3d792854fdfe2c5"><a class="feed-powered-by-es" href="https://embedsocial.com/products/embedfeed/" target="_blank" title="Powered by EmbedSocial">Powered by EmbedSocial<span>→</span></a></div>
        <script>
            (function(d, s, id) {
                var js;
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "https://embedsocial.com/cdn/ht.js";
                d.getElementsByTagName("head")[0].appendChild(js);
            }(document, "script", "EmbedSocialHashtagScript"));
        </script>
    </div>
</section>
@endsection