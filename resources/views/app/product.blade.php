@extends('layouts.landing')
@section('css_after')
    <style>
        .set-line-area .line-inner .line {
            border-right: 0px !important;
        }
    </style>
@endsection
@section('content')
    <!-- Start Page Wrapper -->
    <main class="page-wrapper">

        <!-- Start Slider Area -->
        <div class="sveetlo-slider-area sveetlo-slide-activation">
            <!-- Start Single Slide -->
            <div class="sveetlo-slide slide-style-default theme-gradient slider-fixed-height d-flex align-items-center paralax-area">
                <div class="container">
                    <div class="row align-items-center pt_md--60 mt_sm--60">
                        <div class="col-lg-7 col-12 order-2 order-lg-1">
                            <div class="content pt_md--30 pt_sm--30">
                                <h1 class="sveetlo-display-1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="500ms">
                                    {{ $product->name }}</h1>
                                <p class="subtitle-3 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="800ms">
                                    {{ $product->description }}
                                </p>
                                <form method="POST" action="https://www.liqpay.ua/api/3/checkout" accept-charset="utf-8">
                                    <input type="hidden" name="data" value="{{$paymentData}}">
                                    <input type="hidden" name="signature" value="kOxp+Kl1AI4+1pxS6HDQitDLeqg=" />
                                    <input type="image" src="//static.liqpay.ua/buttons/p1ru.radius.png" name="btn_text" />
                                </form>
                                <a class="sveetlo-button btn-large btn-transparent wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="1300ms" href="#"><span
                                        class="button-text">Оплатить</span>
                                    <span class="far fa-shopping-cart"> </span>
                                </a>
                                <div class="scroll-down_btn">
                                    <a id="scrollDown" class="sveetlo-scrollbown smoth-animation" href="#sectionBottom"><span></span></a>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-5 col-12 order-1 order-lg-2">
                            <div class="breadcrumb-thumbnail-group with-image-group text-right">
                                <div class="thumbnail">
                                    <img class="paralax-image" src="/landing/images/others/keystoke-image-1.png" alt="Keystoke Images">
                                </div>
                                <div class="image-group">
                                    <img class="paralax-image" src="/landing/images/others/keystoke-image-2.svg" alt="Keystoke Images">
                                </div>
                                <div class="shape-group">
                                    <div class="shape shape-1 paralax--1">
                                        <img src="/landing/images/others/shape-01.svg" alt="keystoke">
                                    </div>
                                    <div class="shape shape-2">
                                        <img class="customOne" src="/landing/images/others/shape-02.svg" alt="keystoke">
                                    </div>
                                    <div class="shape shape-3 paralax--3">
                                        <img src="/landing/images/others/shape-03.svg" alt="keystoke">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slide -->
        </div>
        <!-- End Slider Area -->

        <!-- Start Service Area -->
        <div class="sveetlo-service-area ax-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="sub-title extra08-color wow" data-splitting>what we can do for you</span>
                            <h2 class="title wow" data-splitting><span>Services we can help you with</span></h2>
                            <p class="subtitle-2 wow" data-splitting>Nulla facilisi. Nullam in magna id dolor
                                blandit rutrum eget vulputate
                                augue sed eu leo eget risus imperdiet.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 move-up wow">
                        <div class="sveetlo-service text-center sveetlo-control paralax-image">
                            <div class="inner">
                                <div class="icon">
                                    <div class="icon-inner">
                                        <img src="/landing/images/icons/layer.svg" alt="Icon Images">
                                        <div class="image-2"><img src="/landing/images/icons/icon-04.svg" alt="Shape Images"></div>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title wow"><a href="single-service.html">Design</a></h4>
                                    <p class="wow">We design professional looking yet simple websites. Our designs
                                        are search engine
                                        and user friendly. </p>
                                    <a class="sveetlo-button" data-hover="Learn More" href="single-service.html">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->

                    <!-- Start Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 move-up wow">
                        <div class="sveetlo-service text-center sveetlo-control paralax-image active">
                            <div class="inner">
                                <div class="icon gradient-color-02">
                                    <div class="icon-inner">
                                        <img src="/landing/images/icons/layer.svg" alt="Icon Images">
                                        <div class="image-2"><img src="/landing/images/icons/icon-02.svg" alt="Shape Images"></div>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title wow"><a href="single-service.html">Development</a></h4>
                                    <p class="wow">We design professional looking yet simple websites. Our designs
                                        are search engine
                                        and user friendly. </p>
                                    <a class="sveetlo-button" href="single-service.html">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->

                    <!-- Start Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 move-up wow">
                        <div class="sveetlo-service text-center sveetlo-control paralax-image">
                            <div class="inner">
                                <div class="icon gradient-color-03">
                                    <div class="icon-inner">
                                        <img src="/landing/images/icons/layer.svg" alt="Icon Images">
                                        <div class="image-2"><img src="/landing/images/icons/icon-03.svg" alt="Shape Images"></div>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title wow"><a href="single-service.html">Online marketing</a></h4>
                                    <p class="wow">We design professional looking yet simple websites. Our designs
                                        are search engine
                                        and user friendly. </p>
                                    <a class="sveetlo-button" href="single-service.html">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->

                    <!-- Start Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 move-up wow">
                        <div class="sveetlo-service text-center sveetlo-control paralax-image">
                            <div class="inner">
                                <div class="icon gradient-color-04">
                                    <div class="icon-inner">
                                        <img src="/landing/images/icons/layer.svg" alt="Icon Images">
                                        <div class="image-2"><img src="/landing/images/icons/icon-03.svg" alt="Shape Images"></div>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title wow"><a href="single-service.html">Business</a></h4>
                                    <p class="wow">We design professional looking yet simple websites. Our designs
                                        are search engine
                                        and user friendly. </p>
                                    <a class="sveetlo-button" href="single-service.html">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->

                    <!-- Start Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 move-up wow">
                        <div class="sveetlo-service text-center sveetlo-control paralax-image">
                            <div class="inner">
                                <div class="icon gradient-color-06">
                                    <div class="icon-inner">
                                        <img src="/landing/images/icons/layer.svg" alt="Icon Images">
                                        <div class="image-2"><img src="/landing/images/icons/icon-02.svg" alt="Shape Images"></div>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title wow"><a href="single-service.html">Technology</a></h4>
                                    <p class="wow">We design professional looking yet simple websites. Our designs
                                        are search engine
                                        and user friendly. </p>
                                    <a class="sveetlo-button" href="single-service.html">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->

                    <!-- Start Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 move-up wow">
                        <div class="sveetlo-service text-center sveetlo-control paralax-image">
                            <div class="inner">
                                <div class="icon gradient-color-05">
                                    <div class="icon-inner">
                                        <img src="/landing/images/icons/layer.svg" alt="Icon Images">
                                        <div class="image-2"><img src="/landing/images/icons/icon-02.svg" alt="Shape Images"></div>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title wow"><a href="single-service.html">Content strategy</a></h4>
                                    <p class="wow">We design professional looking yet simple websites. Our designs
                                        are search engine
                                        and user friendly. </p>
                                    <a class="sveetlo-button" href="single-service.html">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
        <!-- End Service Area -->

        <!-- Start Featured Area -->
        <div class="sveetlo-featured-area ax-section-gap bg-color-lightest">
            <div class="container sveetlo-featured-activation sveetlo-carousel" data-slick-options='{
                        "spaceBetween": 0,
                        "slidesToShow": 1,
                        "slidesToScroll": 1,
                        "arrows": false,
                        "infinite": true,
                        "centerMode":true,
                        "dots": true
                    }' data-slick-responsive='[
                        {"breakpoint":769, "settings": {"slidesToShow": 1}},
                        {"breakpoint":756, "settings": {"slidesToShow": 1}},
                        {"breakpoint":481, "settings": {"slidesToShow": 1}}
                    ]'>
                <!-- Start Single Feature  -->
                <div class="row d-flex flex-wrap sveetlo-featured row--0">
                    <div class="col-lg-6 col-xl-6 col-md-12 col-12">
                        <div class="thumbnail">
                            <img class="image w-100" src="/landing/images/featured/featured-image-01.jpg" alt="Featured Images">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 col-md-12 col-12 offset-xl-1 mt_md--40 mt_sm--40">
                        <div class="inner">
                            <div class="section-title text-left">
                                <span class="sub-title extra04-color wow">featured case study</span>
                                <h2 class="title wow"><a href="single-case-study.html">
                                        Logo, identity & web design for Uber
                                    </a></h2>
                                <p class="subtitle-2 wow">Donec metus lorem, vulputate at sapien sit amet, auctor
                                    iaculis
                                    lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique
                                    libero
                                    at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id
                                    dignissim et, imperdiet vitae mauris.</p>
                                <a class="sveetlo-button btn-large btn-transparent" href="single-case-study.html"><span
                                        class="button-text">Read
                                            Case Study</span><span class="button-icon"></span></a>
                            </div>
                            <div class="sveetlo-counterup-area d-flex flex-wrap separator-line-vertical">
                                <!-- Start Counterup -->
                                <div class="single-counterup counterup-style-1">
                                    <h3 class="count">15</h3>
                                    <p>ROI increase</p>
                                </div>
                                <!-- End Counterup -->

                                <!-- Start Counterup -->
                                <div class="single-counterup counterup-style-1">
                                    <h3 class="count counter-k">60</h3>
                                    <p>Monthly website visits</p>
                                </div>
                                <!-- End Counterup -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Feature  -->
                <!-- Start Single Feature  -->
                <div class="row d-flex flex-wrap sveetlo-featured row--0">
                    <div class="col-lg-6 col-xl-6 col-md-12 col-12">
                        <div class="thumbnail">
                            <img class="image w-100" src="/landing/images/featured/featured-image-03.jpg" alt="Featured Images">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 col-md-12 col-12 offset-xl-1 mt_md--40 mt_sm--40">
                        <div class="inner">
                            <div class="section-title text-left">
                                <span class="sub-title extra04-color wow">featured case study</span>
                                <h2 class="title wow"><a href="single-case-study.html">
                                        Logo, identity & web design for Uber
                                    </a></h2>
                                <p class="subtitle-2 wow">Donec metus lorem, vulputate at sapien sit amet, auctor
                                    iaculis
                                    lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique
                                    libero
                                    at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id
                                    dignissim et, imperdiet vitae mauris.</p>
                                <a class="sveetlo-button btn-large btn-transparent" href="single-case-study.html"><span
                                        class="button-text">Read
                                            Case Study</span><span class="button-icon"></span></a>
                            </div>
                            <div class="sveetlo-counterup-area d-flex flex-wrap separator-line-vertical">
                                <!-- Start Counterup -->
                                <div class="single-counterup counterup-style-1">
                                    <h3 class="count">15</h3>
                                    <p>ROI increase</p>
                                </div>
                                <!-- End Counterup -->

                                <!-- Start Counterup -->
                                <div class="single-counterup counterup-style-1">
                                    <h3 class="count counter-k">60</h3>
                                    <p>Monthly website visits</p>
                                </div>
                                <!-- End Counterup -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Feature  -->
                <!-- Start Single Feature  -->
                <div class="row d-flex flex-wrap sveetlo-featured row--0">
                    <div class="col-lg-6 col-xl-6 col-md-12 col-12">
                        <div class="thumbnail">
                            <img class="image w-100" src="/landing/images/featured/featured-image-04.jpg" alt="Featured Images">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 col-md-12 col-12 offset-xl-1 mt_md--40 mt_sm--40">
                        <div class="inner">
                            <div class="section-title text-left">
                                <span class="sub-title extra04-color wow">featured case study</span>
                                <h2 class="title wow"><a href="single-case-study.html">
                                        Logo, identity & web design for Uber
                                    </a></h2>
                                <p class="subtitle-2 wow">Donec metus lorem, vulputate at sapien sit amet, auctor
                                    iaculis
                                    lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique
                                    libero
                                    at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id
                                    dignissim et, imperdiet vitae mauris.</p>
                                <a class="sveetlo-button btn-large btn-transparent" href="single-case-study.html"><span
                                        class="button-text">Read
                                            Case Study</span><span class="button-icon"></span></a>
                            </div>
                            <div class="sveetlo-counterup-area d-flex flex-wrap separator-line-vertical">
                                <!-- Start Counterup -->
                                <div class="single-counterup counterup-style-1">
                                    <h3 class="count">15</h3>
                                    <p>ROI increase</p>
                                </div>
                                <!-- End Counterup -->

                                <!-- Start Counterup -->
                                <div class="single-counterup counterup-style-1">
                                    <h3 class="count counter-k">60</h3>
                                    <p>Monthly website visits</p>
                                </div>
                                <!-- End Counterup -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Feature  -->

            </div>
        </div>
        <!-- End Featured Area -->

        <!-- Start About Us Area -->
        <div class="sveetlo-about-us-area ax-section-gap bg-color-white sveetlo-shape-position">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-md-12 col-12">
                        <div class="sveetlo-about-inner">
                            <div class="section-title text-left">
                                <span class="sub-title extra08-color move-up wow">about us</span>
                                <h2 class="title move-up wow">We do design, code <br /> & develop.</h2>
                                <p class="subtitle-2 mb--50 mb_lg--20 mb_md--20 mb_sm--15 move-up wow">Nulla et
                                    velit gravida, facilisis quam a, molestie ante.
                                    Mauris placerat suscipit dui, eget maximus tellus blandit a. Praesent non tellus
                                    sed
                                    ligula commodo blandit in et mauris. Quisque efficitur ipsum ut dolor molestie
                                    pellentesque.</p>
                                <p class="subtitle-2 move-up wow">Nulla pharetra hendrerit mi quis dapibus. Quisque
                                    luctus, tortor a
                                    venenatis fermentum, est lacus feugiat nisl, id pharetra odio enim eget libero.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 offset-xl-1 col-md-12 col-12 mt_md--30 mt_sm--30">
                        <div class="contact-form-wrapper">
                            <!-- Start Contact Form -->
                            <div class="sveetlo-contact-form contact-form-style-1">
                                <h3 class="title">Get a free Keystroke quote now</h3>
                                <form action="#">
                                    <div class="form-group">
                                        <input type="text">
                                        <label>Name</label>
                                        <span class="focus-border"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="email">
                                        <label>Email</label>
                                        <span class="focus-border"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text">
                                        <label>Company</label>
                                        <span class="focus-border"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text">
                                        <label>Phone</label>
                                        <span class="focus-border"></span>
                                    </div>
                                    <div class="form-group">
                                        <button class="sveetlo-button btn-large btn-transparent w-100">
                                            <span class="button-text">Get Pricing Now</span><span
                                                class="button-icon"></span>
                                        </button>
                                    </div>
                                </form>
                                <div class="callto-action-wrapper text-center">
                                    <span class="text">Or call us now</span>
                                    <span><i class="fal fa-phone-alt"></i> <a href="#">(123) 456 7890</a></span>
                                </div>
                            </div>
                            <!-- End Contact Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Shape Group  -->
            <div class="sveetlo-shape-group">
                <div class="shape shape-1">
                    <img src="/landing/images/others/shape-12.svg" alt="Shape Images">
                </div>
                <div class="shape shape-2">
                    <img src="/landing/images/others/shape-03.svg" alt="Shape Images">
                </div>
            </div>
            <!-- End Shape Group  -->
        </div>
        <!-- End About Us Area -->

        <!-- Start Portfolio Area -->
        <div class="sveetlo-portfolio-area ax-section-gap bg-color-lightest">
            <div class="container sveetlo-masonary-wrapper">
                <div class="row align-items-end">
                    <div class="col-lg-5 col-md-12">
                        <div class="section-title">
                            <span class="sub-title extra07-color wow" data-splitting>our projects</span>
                            <h2 class="title wow mb--0" data-splitting>Some of our finest work.</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 mt_md--20 mt_sm--20">
                        <div class="messonry-button text-left text-lg-right">
                            <button data-filter="*" class="is-checked"><span class="filter-text">All</span></button>
                            <button data-filter=".cat--1"><span class="filter-text">Branding</span></button>
                            <button data-filter=".cat--2"><span class="filter-text">Web</span></button>
                            <button data-filter=".cat--3"><span class="filter-text">Graphic</span></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mesonry-list grid-metro3 mt--20">
                            <!-- Start Single Portfolio -->
                            <div class="portfolio portfolio_style--1 sveetlo-control active portfolio-33-33 cat--1 cat--2">
                                <div class="inner move-up wow">
                                    <div class="thumb wow paralax-image">
                                        <a href="single-case-study.html"><img src="/landing/images/portfolio/portfolio-01.jpg" alt="Portfolio Images"></a>
                                    </div>
                                    <div class="port-overlay-info">
                                        <div class="hover-action">
                                            <h4 class="title"><a href="single-case-study.html">Creative
                                                    Agency</a></h4>
                                            <span class="category">ios, design</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Portfolio -->

                            <!-- Start Single Portfolio -->
                            <div class="portfolio portfolio_style--1 sveetlo-control portfolio-33-33 cat--2">
                                <div class="inner move-up wow">
                                    <div class="thumb wow paralax-image">
                                        <a href="single-case-study.html"><img src="/landing/images/portfolio/portfolio-02.jpg" alt="Portfolio Images"></a>
                                    </div>
                                    <div class="port-overlay-info">
                                        <div class="hover-action">
                                            <h4 class="title"><a href="single-case-study.html">Rant bike</a></h4>
                                            <span class="category">Branding</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Portfolio -->

                            <!-- Start Single Portfolio -->
                            <div class="portfolio portfolio_style--1 portfolio-33-33 cat--3">
                                <div class="inner move-up wow">
                                    <div class="thumb wow paralax-image">
                                        <a href="single-case-study.html"><img src="/landing/images/portfolio/portfolio-03.jpg" alt="Portfolio Images"></a>
                                    </div>
                                    <div class="port-overlay-info">
                                        <div class="hover-action">
                                            <h4 class="title"><a href="single-case-study.html">All Volees</a></h4>
                                            <span class="category">Web application</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Portfolio -->

                            <!-- Start Single Portfolio -->
                            <div class="portfolio portfolio_style--1 portfolio-33-33 cat--1 cat--2">
                                <div class="inner move-up wow">
                                    <div class="thumb wow paralax-image">
                                        <a href="single-case-study.html"><img src="/landing/images/portfolio/portfolio-04.jpg" alt="Portfolio Images"></a>
                                    </div>
                                    <div class="port-overlay-info">
                                        <div class="hover-action">
                                            <h4 class="title"><a href="single-case-study.html">Larq</a></h4>
                                            <span class="category">Branding, design</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Portfolio -->

                            <!-- Start Single Portfolio -->
                            <div class="portfolio portfolio_style--1 portfolio-33-33 cat--3">
                                <div class="inner move-up wow">
                                    <div class="thumb wow paralax-image">
                                        <a href="single-case-study.html"><img src="/landing/images/portfolio/portfolio-05.jpg" alt="Portfolio Images"></a>
                                    </div>
                                    <div class="port-overlay-info">
                                        <div class="hover-action">
                                            <h4 class="title"><a href="single-case-study.html">Rant bike</a></h4>
                                            <span class="category">Branding</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Portfolio -->

                            <!-- Start Single Portfolio -->
                            <div class="portfolio portfolio_style--1 portfolio-33-33 cat--2 cat--3">
                                <div class="inner move-up wow">
                                    <div class="thumb wow paralax-image">
                                        <a href="single-case-study.html"><img src="/landing/images/portfolio/portfolio-01.jpg" alt="Portfolio Images"></a>
                                    </div>
                                    <div class="port-overlay-info">
                                        <div class="hover-action">
                                            <h4 class="title"><a href="single-case-study.html">Creative
                                                    Agency</a></h4>
                                            <span class="category">ios, design</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Portfolio -->
                        </div>
                        <div class="view-all-portfolio-button mt--60 text-center">
                            <a class="sveetlo-button btn-large btn-transparent btn-xxl" href="#"><span
                                    class="button-text">Discover More Projects</span><span
                                    class="button-icon"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Portfolio Area -->

        <!-- Start Counterup Area -->
        <div class="sveetlo-counterup-area ax-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="sub-title extra08-color wow" data-splitting>experts in field</span>
                            <h2 class="title wow" data-splitting>Design startup movement</h2>
                            <p class="subtitle-2 wow" data-splitting>In vel varius turpis, non dictum sem. Aenean in
                                efficitur ipsum, in
                                egestas ipsum. Mauris in mi ac tellus.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Counterup Area -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="sveetlo-counterup mt--60 text-center counter-first move-up wow">
                            <div class="icon">
                                <img src="/landing/images/counterup/shape-01.png" alt="Shape Images">
                            </div>
                            <h3 class="count">15</h3>
                            <p>Years of operation</p>
                        </div>
                    </div>
                    <!-- End Counterup Area -->

                    <!-- Start Counterup Area -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="sveetlo-counterup mt--60 text-center counter-second move-up wow">
                            <div class="icon">
                                <img src="/landing/images/counterup/shape-02.png" alt="Shape Images">
                            </div>
                            <h3 class="count">360</h3>
                            <p>Projects deliverd</p>
                        </div>
                    </div>
                    <!-- End Counterup Area -->

                    <!-- Start Counterup Area -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="sveetlo-counterup mt--60 mt_md--30 mt_sm--30 text-center counter-third move-up wow">
                            <div class="icon">
                                <img src="/landing/images/counterup/shape-03.png" alt="Shape Images">
                            </div>
                            <h3 class="count">600</h3>
                            <p>Specialist</p>
                        </div>
                    </div>
                    <!-- End Counterup Area -->

                    <!-- Start Counterup Area -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="sveetlo-counterup mt--60 text-center counter-four move-up wow">
                            <div class="icon">
                                <img src="/landing/images/counterup/shape-04.png" alt="Shape Images">
                            </div>
                            <h3 class="count">64</h3>
                            <p>Years of operation</p>
                        </div>
                    </div>
                    <!-- End Counterup Area -->

                </div>
            </div>
        </div>
        <!-- End Counterup Area -->

        <!-- Start Testimonial Area -->
        <div class="sveetlo-testimonial-area ax-section-gap bg-color-lightest">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="sub-title extra05-color wow" data-splitting>testimonials</span>
                            <h2 class="title wow" data-splitting>From getting started</h2>
                            <p class="subtitle-2 wow" data-splitting>In vel varius turpis, non dictum sem. Aenean in
                                efficitur ipsum, in
                                egestas ipsum. Mauris in mi ac tellus.</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-activation">
                    <div class="row sveetlo-testimonial-single">

                        <!-- Start Single Testimonial -->
                        <div class="col-lg-6 mt--60 mt_sm--30 mt_md--30">
                            <div class="sveetlo-testimonial testimonial sveetlo-control active move-up wow">
                                <div class="inner">
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="/landing/images/testimonial/client-01.jpg" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h4 class="title">Martha Maldonado</h4>
                                            <span>Executive Chairman @ Google</span>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p class="subtitle-3">Donec metus lorem, vulputate at sapien sit amet,
                                            auctor
                                            iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                                        <a class="sveetlo-link-button" href="#">Read Project Case Study</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial -->

                        <!-- Start Single Testimonial -->
                        <div class="col-lg-6 mt--60 mt_sm--30 mt_md--30">
                            <div class="sveetlo-testimonial sveetlo-control testimonial move-up wow">
                                <div class="inner">
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="/landing/images/testimonial/client-02.jpg" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h4 class="title">Martha Maldonado</h4>
                                            <span>Executive Chairman @ Google</span>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p class="subtitle-3">Donec metus lorem, vulputate at sapien sit amet,
                                            auctor
                                            iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                                        <a class="sveetlo-link-button" href="#">Read Project Case Study</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial -->

                    </div>
                </div>
            </div>
        </div>
        <!-- End Testimonial Area -->

        <!-- Start Team Area -->
        <div class="sveetlo-team-area shape-position ax-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="thumbnail">
                            <div class="image">
                                <img src="/landing/images/team/team-group.png" alt="Team Images">
                            </div>
                            <div class="total-team-button">
                                <a href="team.html"><span>20+</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-5 offset-xl-1 mt_md--40 mt_sm--40">
                        <div class="content">
                            <div class="inner">
                                <div class="section-title text-left">
                                    <span class="sub-title extra08-color wow" data-splitting>our team</span>
                                    <h2 class="title wow" data-splitting>Alone we can do so little; together we can
                                        do so much.</h2>
                                    <p class="subtitle-2 wow pr--0" data-splitting>Donec metus lorem, vulputate at
                                        sapien sit amet, auctor
                                        iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam
                                        tristique libero.</p>
                                    <div class="sveetlo-button-group mt--40">
                                        <a class="sveetlo-button btn-large btn-transparent" href="team.html"><span
                                                class="button-text">Our Team</span><span
                                                class="button-icon"></span></a>
                                        <a class="sveetlo-button sveetlo-link-button" href="#">Careers</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-group">
                <div class="shape shape-1">
                    <img class="customOne" src="/landing/images/others/shape-06.svg" alt="Shape">
                </div>
                <div class="shape shape-2">
                    <img src="/landing/images/others/shape-13.svg" alt="Shape">
                </div>
                <div class="shape shape-3">
                    <img src="/landing/images/others/shape-14.svg" alt="Shape">
                </div>
            </div>
        </div>
        <!-- End Team Area -->

        <!-- Start Pricing Table Area -->
        <div class="sveetlo-pricing-table-area pricing-shape-position ax-section-gap bg-color-lightest">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="sub-title extra04-color wow" data-splitting>pricing plan</span>
                            <h2 class="title wow" data-splitting>From getting started </h2>
                            <p class="subtitle-2 wow" data-splitting>In vel varius turpis, non dictum sem. Aenean in
                                efficitur ipsum, in
                                egestas ipsum. Mauris in mi ac tellus.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt--20 row--30 mt_sm--0">
                    <!-- Start Single pricing table -->
                    <div class="col-lg-5 col-md-6 col-sm-12 col-12 offset-lg-1">
                        <div class="sveetlo-pricing-table mt--40 active move-up wow">
                            <div class="sveetlo-pricing-inner">
                                <div class="pricing-header">
                                    <h4>Small Business</h4>
                                    <p>A beautiful, simple website</p>
                                    <div class="price-wrapper">
                                        <div class="price">
                                            <h2 class="currency">$</h2>
                                            <h2 class="heading headin-h3">46</h2>
                                            <span>/month</span>
                                        </div>
                                        <div class="date-option">
                                            <select>
                                                <option>Yearly</option>
                                                <option>Monthly</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="pricing-get-button">
                                        <a class="sveetlo-button btn-large btn-transparent" href="#"><span
                                                class="button-text">Get Started Today</span><span
                                                class="button-icon"></span></a>
                                    </div>
                                    <span class="subtitle">100% money back guarantee</span>
                                </div>
                                <div class="pricing-body">
                                    <div class="inner">
                                        <ul class="list-style">
                                            <li>10 Pages Responsive Website</li>
                                            <li>5 PPC Campaigns</li>
                                            <li>10 SEO Keywords</li>
                                            <li>5 Facebook Camplaigns</li>
                                            <li>2 Video Camplaigns</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single pricing table -->

                    <!-- Start Single pricing table -->
                    <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                        <div class="sveetlo-pricing-table mt--40 mt_sm--60 move-up wow">
                            <div class="sveetlo-pricing-inner">
                                <div class="pricing-header">
                                    <h4>Corporate Business</h4>
                                    <p>A beautiful, simple website</p>
                                    <div class="price-wrapper">
                                        <div class="price">
                                            <h2 class="currency">$</h2>
                                            <h2 class="heading headin-h3">199</h2>
                                            <span>/month</span>
                                        </div>
                                        <div class="date-option">
                                            <select>
                                                <option>Yearly</option>
                                                <option>Monthly</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="pricing-get-button">
                                        <a class="sveetlo-button btn-large btn-transparent" href="#"><span
                                                class="button-text">Get Started Today</span><span
                                                class="button-icon"></span></a>
                                    </div>
                                    <span class="subtitle">100% money back guarantee</span>
                                </div>
                                <div class="pricing-body">
                                    <div class="inner">
                                        <ul class="list-style">
                                            <li>50 Pages Responsive Website</li>
                                            <li>Unlimited PPC Campaigns</li>
                                            <li>Unlimited SEO Keywords</li>
                                            <li>Unlimited Facebook Camplaigns</li>
                                            <li>Unlimited Video Camplaigns</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single pricing table -->
                </div>
            </div>
            <div class="shape-group">
                <div class="shape">
                    <img src="/landing/images/others/shape-15.svg" alt="Shape">
                </div>
            </div>
        </div>
        <!-- End Pricing Table Area -->

        <!-- Start Brand Area -->
        <div class="sveetlo-brand-area ax-section-gap bg-color-white">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-8 col-12">
                        <div class="section-title">
                            <span class="sub-title extra06-color wow" data-splitting>top clients</span>
                            <h2 class="title wow" data-splitting>We’ve built solutions for...</h2>
                            <p class="subtitle-2 wow" data-splitting>Nulla facilisi. Nullam in magna id dolor
                                blandit rutrum eget.</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 mt_md--40 mt_sm--40">
                        <div class="sveetlo-brand-logo-wrapper">
                            <ul class="brand-list liststyle d-flex flex-wrap justify-content-center">
                                <li><a href="#">
                                        <img src="/landing/images/brand/brand-01.png" alt="Brand Logo Images">
                                    </a></li>
                                <li><a href="#">
                                        <img src="/landing/images/brand/brand-02.png" alt="Brand Logo Images">
                                    </a></li>
                                <li><a href="#">
                                        <img src="/landing/images/brand/brand-03.png" alt="Brand Logo Images">
                                    </a></li>
                                <li><a href="#">
                                        <img src="/landing/images/brand/brand-04.png" alt="Brand Logo Images">
                                    </a></li>
                                <li><a href="#">
                                        <img src="/landing/images/brand/brand-05.png" alt="Brand Logo Images">
                                    </a></li>
                                <li><a href="#">
                                        <img src="/landing/images/brand/brand-06.png" alt="Brand Logo Images">
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Area -->

        <!-- Start Blog Area -->
        <div class="sveetlo-blog-area ax-section-gap bg-color-lightest">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="sub-title extra04-color">what's going on</span>
                            <h2 class="title">Latest stories</h2>
                            <p class="subtitle-2">In vel varius turpis, non dictum sem. Aenean in efficitur ipsum,
                                in
                                egestas ipsum. Mauris in mi ac tellus.</p>
                        </div>
                    </div>
                </div>
                <div class="row blog-list-wrapper mt--20">
                    <!-- Start Blog Area -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="sveetlo-blog sveetlo-control mt--40 active move-up wow">
                            <div class="content">
                                <div class="content-wrap paralax-image">
                                    <div class="inner">
                                        <span class="category">Lifestyle</span>
                                        <h5 class="title"><a href="blog-details.html">Choosing the right features
                                                for your custom</a></h5>
                                        <p>Quisque eget erat augue. Cras gravida enim nulla, a dictum erat fringilla
                                            at.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="thumbnail">
                                <div class="image">
                                    <img src="/landing/images/blog/blog-01.jpg" alt="Blog images">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Area -->

                    <!-- Start Blog Area -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="sveetlo-blog sveetlo-control mt--40 move-up wow">
                            <div class="content">
                                <div class="content-wrap paralax-image">
                                    <div class="inner">
                                        <span class="category">Design</span>
                                        <h5 class="title"><a href="blog-details.html">Choosing the right features
                                                for your custom</a></h5>
                                        <p>Quisque eget erat augue. Cras gravida enim nulla, a dictum erat fringilla
                                            at.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="thumbnail">
                                <div class="image">
                                    <img src="/landing/images/blog/blog-02.jpg" alt="Blog images">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Area -->
                </div>
            </div>
        </div>
        <!-- End Blog Area -->

        <!-- Start Call To Action  -->
        <!-- Start Call To Action -->
        <div class="sveetlo-call-to-action-area shape-position ax-section-gap theme-gradient">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sveetlo-call-to-action">
                            <div class="section-title text-center">
                                <span class="sub-title extra04-color wow" data-splitting>Let's work together</span>
                                <h2 class="title wow" data-splitting>Need a successful project?</h2>
                                <a class="sveetlo-button btn-large btn-transparent" href="#"><span
                                        class="button-text">Estimate Project</span><span class="button-icon"></span></a>
                                <div class="callto-action">
                                    <span class="text wow" data-splitting>Or call us now</span>
                                    <span class="wow" data-splitting><i class="fal fa-phone-alt"></i> <a href="#">(123)
                                    456 7890</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-group">
                <div class="shape shape-01">
                    <img src="/landing/images/others/shape-08.svg" alt="Shape">
                </div>
                <div class="shape shape-02">
                    <img src="/landing/images/others/shape-09.svg" alt="Shape">
                </div>

                <div class="shape shape-03">
                    <img src="/landing/images/others/shape-10.svg" alt="Shape">
                </div>
                <div class="shape shape-04">
                    <img src="/landing/images/others/shape-11.svg" alt="Shape">
                </div>
            </div>
        </div>
        <!-- End Call To Action -->
        <!-- End Call To Action  -->

    </main>
    <!-- End Page Wrapper -->

@endsection
@section('js_after')

@endsection
