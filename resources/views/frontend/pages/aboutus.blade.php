@extends('frontend.layouts.master')

@section('title', 'About Us')

@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img1">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    We strengthen organizations
                    <span class="watermark">About</span>
                </h1>
                <span class="sub-text">Excepteur sint occaecat cupidatat non proident, sunt in coulpa qui official
                    modeserunt mollit anim id est laborum 20 years experience.</span>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- About Section Start -->
    <div class="rs-about style2 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-33 md-pr-15 md-mb-50">
                    <div class="images-part">
                        <img src="{{ asset('frontend/images/about/about-3.png')}}" alt="Images">
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="sec-title">
                        <h2 class="title pb-22">
                            We help to implement your ideas into automation
                        </h2>
                        <span class="sub-text big">We donec pulvinar magna id leoersi pellentesque impered dignissim
                            rhoncus euismod euismod eros vitae best consulting & financial services theme .</span>

                        <p class="margin-0 pt-15">Business ipsum dolor sit amet nsectetur cing elit. Suspe ndisse
                            suscipit sagittis leo sit met entum is not estibulum dignity sim posuere cubilia durae.
                            Leo sit met entum cubilia crae. At vero eos accusamus et iusto odio dignissimos
                            provident.</p>
                        <div class="btn-part mt-45 md-mt-30">
                            <a class="readon consultant discover" href="about.html">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rs-animation">
            <div class="animate-style">
                <img class="scale" src="{{ asset('frontend/images/about/tri-circle-1.png')}}" alt="About">
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Services Section Start -->
    <div id="rs-services" class="rs-services chooseus-style about-style bg12 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 md-mb-30">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="{{ asset('frontend/images/choose/icons/1.png')}}" alt="Images">
                        </div>
                        <div class="services-text">
                            <h3 class="title"><a href="services-style1.html">Expert peoples</a></h3>
                            <p class="services-txt">At vero eos et accusamus etiusto odio praesentium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sm-mb-30">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="{{ asset('frontend/images/choose/icons/2.png')}}" alt="Images">
                        </div>
                        <div class="services-text">
                            <h3 class="title"><a href="services-style1.html">Big experience</a></h3>
                            <p class="services-txt">At vero eos et accusamus etiusto odio praesentium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="{{ asset('frontend/images/choose/icons/3.png')}}" alt="Images">
                        </div>
                        <div class="services-text">
                            <h3 class="title"><a href="services-style1.html">Committed to quality</a></h3>
                            <p class="services-txt">At vero eos et accusamus etiusto odio praesentium.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- Why Choose Section Start -->
    <div class="rs-choose pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                    <div class="sec-title mb-35">
                        <h2 class="title pb-30">
                            Why choose us
                        </h2>
                        <p class="margin-0">We donec pulvinar magna id leoersi pellentesque impered dignissim
                            rhoncus euismod euismod eros vitae. we denounce with righteous indignation and dislike
                            men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                    </div>
                    <!-- Skillbar Section Start -->
                    <div class="rs-skillbar style1">
                        <div class="cl-skill-bar">
                            <!-- Start Skill Bar -->
                            <span class="skillbar-title">Business Planning</span>
                            <div class="skillbar" data-percent="90">
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent"></span>
                            </div>
                            <!-- Start Skill Bar -->
                            <span class="skillbar-title">Financial Advices</span>
                            <div class="skillbar" data-percent="85">
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent"></span>
                            </div>
                            <!-- Start Skill Bar -->
                            <span class="skillbar-title">Investment Strategy</span>
                            <div class="skillbar" data-percent="75">
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent"></span>
                            </div>
                            <!-- Start Skill Bar -->
                            <span class="skillbar-title">Business Security</span>
                            <div class="skillbar margin-no" data-percent="65">
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent"></span>
                            </div>
                        </div>
                    </div>
                    <!-- Skillbar Section End -->
                </div>
                <div class="col-lg-6">
                    <div class="rs-videos choose-video">
                        <div class="images-video">
                            <img src="assets/images/choose/chosse-video.jpg" alt="images">
                        </div>
                        <div class="animate-border">
                            <a class="popup-border" href="https://www.youtube.com/watch?v=FMvA5fyZ338">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Section End -->
        <div class="rs-counter style1 pt-100 md-pt-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                        <div class="counter-area">
                            <div class="counter-list mb-20">
                                <div class="counter-icon">
                                    <img src="{{ asset('frontend/images/counter/icons/1.png')}}" alt="Counter">
                                </div>
                                <div class="counter-number">
                                    <span class="rs-count">582</span>
                                </div>
                            </div>
                            <div class="content-part">
                                <h5 class="title">Projects completed for our respected clients.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                        <div class="counter-area">
                            <div class="counter-list mb-20">
                                <div class="counter-icon">
                                    <img src="{{ asset('frontend/images/counter/icons/2.png')}}" alt="Counter">
                                </div>
                                <div class="counter-number">
                                    <span class="rs-count">215</span>
                                    <span class="prefix">+</span>
                                </div>
                            </div>
                            <div class="content-part">
                                <h5 class="title">Experienced people serving to clients.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                        <div class="counter-area">
                            <div class="counter-list mb-20">
                                <div class="counter-icon">
                                    <img src="{{ asset('frontend/images/counter/icons/3.png')}}" alt="Counter">
                                </div>
                                <div class="counter-number">
                                    <span class="rs-count">25</span>
                                    <span class="prefix">+</span>
                                </div>
                            </div>
                            <div class="content-part">
                                <h5 class="title">Years experience in business & consulting.</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-area">
                            <div class="counter-list mb-20">
                                <div class="counter-icon">
                                    <img src="{{ asset('frontend/images/counter/icons/4.png')}}" alt="Counter">
                                </div>
                                <div class="counter-number">
                                    <span class="rs-count">70</span>
                                    <span class="prefix">+</span>
                                </div>
                            </div>
                            <div class="content-part">
                                <h5 class="title">Business & consulting awards won over world.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Section End -->
    </div>
    <!-- Why Choose Section Start -->

    <!-- Testimonial Section Start -->
    <div class="rs-testimonial main-home bg6 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-40">
                    <div class="testi-image">
                        <img src="{{ asset('frontend/images/testimonial/testi.png')}}" alt="Testimonial">
                    </div>
                </div>
                <div class="col-lg-6 pl-60 md-pl-15">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="30"
                        data-autoplay="false" data-hoverpause="true" data-autoplay-timeout="5000"
                        data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false"
                        data-md-device="1" data-md-device-nav="false" data-md-device-dots="true"
                        data-center-mode="false" data-ipad-device2="1" data-ipad-device-nav2="false"
                        data-ipad-device-dots2="true" data-ipad-device="1" data-ipad-device-nav="false"
                        data-ipad-device-dots="true" data-mobile-device="1" data-mobile-device-nav="false"
                        data-mobile-device-dots="true">
                        <div class="testi-item">
                            <div class="item-content">
                                <span class="icon-img">
                                    <img src="{{ asset('frontend/images/testimonial/quote.png')}}" alt="">
                                </span>
                                <p class="desc">
                                    Customer support is excellent and documentation good – novice can easily
                                    understand. Although I had a problem with the performance, thanks to the
                                    customer support, we have solved this problem as well..
                                </p>
                            </div>
                            <div class="testi-content">
                                <div class="image-wrap">
                                    <img src="{{ asset('frontend/images/testimonial/avatar/1.jpg')}}" alt="Testimonial">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Ben Stokes</div>
                                    <span class="testi-title">Envato User</span>
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="item-content">
                                <span class="icon-img">
                                    <img src="{{ asset('frontend/images/testimonial/quote.png')}}" alt="">
                                </span>
                                <p class="desc">
                                    These guys are awesome! Each time I needed their help, their response was quick
                                    and very helpful. Also, the theme is very flexible. Five stars from me for
                                    everything! I truly recommend this theme!!!
                                </p>
                            </div>
                            <div class="testi-content">
                                <div class="image-wrap">
                                    <img src="{{ asset('frontend/images/testimonial/avatar/2.jpg')}}" alt="Testimonial">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Angelina Jolie</div>
                                    <span class="testi-title">Envato Advisor</span>
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="item-content">
                                <span class="icon-img">
                                    <img src="{{ asset('frontend/images/testimonial/quote.png')}}" alt="">
                                </span>
                                <p class="desc">
                                    The theme is fine. It is customizable and its demos are great. The education
                                    plugin also works fine. But, although I like it so much, I want to point out a
                                    few shortcomings. Theme is appropriate, I agree.
                                </p>
                            </div>
                            <div class="testi-content">
                                <div class="image-wrap">
                                    <img src="{{ asset('frontend/images/testimonial/avatar/3.jpg')}}" alt="Testimonial">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Megan Fox</div>
                                    <span class="testi-title">Senior CEO</span>
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="item-content">
                                <span class="icon-img">
                                    <img src="{{ asset('frontend/images/testimonial/quote.png')}}" alt="">
                                </span>
                                <p class="desc">
                                    These guys are awesome! Each time I needed their help, their response was quick
                                    and very helpful. Also, the theme is very flexible. Five stars from me for
                                    everything! I truly recommend this theme!!!
                                </p>
                            </div>
                            <div class="testi-content">
                                <div class="image-wrap">
                                    <img src="{{ asset('frontend/images/testimonial/avatar/4.jpg')}}" alt="Testimonial">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Nicole Kidman</div>
                                    <span class="testi-title">Envato Author</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Pricing section start -->
    <div class="rs-pricing style1 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="sec-title text-center mb-55 md-mb-30">
                <h2 class="title title2">
                    Pricing plans
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 md-mb-30">
                    <div class="pricing-table">
                        <div class="pricing-table-header">
                            <h3 class="table-title">Basic Plan</h3>
                        </div>
                        <div class="pricing-icon mb-40">
                            <img src="{{ asset('frontend/images/pricing/style1/1.png')}}" alt="">
                        </div>
                        <div class="pricing-table-price">
                            <div class="pricing-table-bags">
                                <span class="pricing-currency">$</span>
                                <span class="table-price-text">29</span>
                                <span class="table-period">/ Month</span>
                            </div>
                        </div>
                        <div class="pricing-table-body">
                            <ul>
                                <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                <li><i class="fa fa-check"></i><span>3 Native Android App</span></li>
                                <li><i class="fa fa-close"></i><span>Multi-Language Support</span></li>
                                <li><i class="fa fa-close"></i><span>Support via E-mail and Phone</span></li>
                            </ul>
                        </div>
                        <div class="btn-part">
                            <a class="readon price" href="contact.html">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 md-mb-30 md-mb-0 sm-mb-30">
                    <div class="pricing-table white-bg">
                        <div class="pricing-table-header">
                            <h3 class="table-title">Premium Plan</h3>
                        </div>
                        <div class="pricing-icon mb-40">
                            <img src="{{ asset('frontend/images/pricing/style1/2.png')}}" alt="">
                        </div>
                        <div class="pricing-table-price">
                            <div class="pricing-table-bags">
                                <span class="pricing-currency">$</span>
                                <span class="table-price-text">49</span>
                                <span class="table-period">/ Month</span>
                            </div>
                        </div>
                        <div class="pricing-table-body">
                            <ul>
                                <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                <li><i class="fa fa-check"></i><span>3 Native Android App</span></li>
                                <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                <li><i class="fa fa-close"></i><span>Support via E-mail and Phone</span></li>
                            </ul>
                        </div>
                        <div class="btn-part">
                            <a class="readon price price2" href="contact.html">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-table">
                        <div class="pricing-table-header">
                            <h3 class="table-title">Family Plan</h3>
                        </div>
                        <div class="pricing-icon mb-40">
                            <img src="{{ asset('frontend/images/pricing/style1/3.png')}}" alt="">
                        </div>
                        <div class="pricing-table-price">
                            <div class="pricing-table-bags">
                                <span class="pricing-currency">$</span>
                                <span class="table-price-text">79</span>
                                <span class="table-period">/ Month</span>
                            </div>
                        </div>
                        <div class="pricing-table-body">
                            <ul>
                                <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                <li><i class="fa fa-check"></i><span>3 Native Android App</span></li>
                                <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                            </ul>
                        </div>
                        <div class="btn-part">
                            <a class="readon price" href="contact.html">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing section end -->
@endsection