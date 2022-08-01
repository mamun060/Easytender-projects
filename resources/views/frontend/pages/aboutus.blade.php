@extends('frontend.layouts.master')

@section('title', 'About Us')

@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img1">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                   About Us
                    <span class="watermark">About Us</span>
                </h1>
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
                            <img src="{{ asset('frontend/images/choose/chosse-video.jpg')}}" alt="images">
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

@endsection