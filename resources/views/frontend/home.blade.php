@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')
    <!-- Slider Start -->
    <div class="rs-banner banner-style6">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-5 col-md-7">
                    <div class="sec-title4 mb-30">
                        <div class="sub-title">Welcome To</div>
                        <h2 class="title primary-color">Easy VAT</h2>
                        <div class="desc left-line-v">
                            <div class="draw-line start-draw"></div>
                            Praesent eu dolor eu orci vehicula euismod. Vivamus sed sollicitudin libero, vel malesuada velit. Nullam et maximus lorem. Suspendisse maximus.
                        </div>
                    </div>
                    <div class="btn-area">
                        <a class="readon2" href="#">All Tender<div class="btn-arrow"></div></a>
                    </div>
                </div>
                <div class="col-md-5 col-lg-7">
                    <div class="custom-tender-vector-file">
                        <img src="{{ asset('frontend/images/hero/vat vactor.webp')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider End -->

    <!-- Premium Services Section Start -->
    <div id="rs-services" class="rs-services style2 gray-bg pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="sec-title2 d-flex align-items-center mb-60 md-mb-40">
                <div class="first-half">
                    <div class="sub-text">What We Offer</div>
                    <h2 class="title mb-0 md-pb-20">The best solutions for your business - <span>what we do.</span>
                    </h2>
                </div>
                <div class="last-half">
                    <p class="desc mb-0 pl-20 md-pl-15">30+ years experience in business and finance consulting, IT
                        solutions, and working with 5k+ clients over the world. Creation timelines for the digital
                        consulting business theme 2021.</p>
                </div>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                data-dots="true" data-nav="false" data-nav-speed="false" data-md-device="3"
                data-md-device-nav="false" data-md-device-dots="true" data-center-mode="false" data-ipad-device2="2"
                data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-ipad-device="2"
                data-ipad-device-nav="false" data-ipad-device-dots="true" data-mobile-device="1"
                data-mobile-device-nav="false" data-mobile-device-dots="true">
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="{{ asset('frontend/images/services/style2/1.jpg')}}" alt="">
                    </div>
                    <div class="content-part">
                        <h3 class="title"><a href="business-planning.html">Business Planning</a></h3>
                        <div class="desc">We denounce with indignation on and dislike men who are so begui led and
                            demoralized data.</div>
                    </div>
                </div>
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="{{ asset('frontend/images/services/style2/2.jpg')}}" alt="">
                    </div>
                    <div class="content-part">
                        <h3 class="title"><a href="tax-strategy.html">Tax Strategy</a></h3>
                        <div class="desc">We denounce with indignation on and dislike men who are so begui led and
                            demoralized data.</div>
                    </div>
                </div>
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="{{ asset('frontend/images/services/style2/3.jpg')}}" alt="">
                    </div>
                    <div class="content-part">
                        <h3 class="title"><a href="financial-advices.html">Financial Advices</a></h3>
                        <div class="desc">We denounce with indignation on and dislike men who are so begui led and
                            demoralized data.</div>
                    </div>
                </div>
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="{{ asset('frontend/images/services/style2/4.jpg')}}" alt="">
                    </div>
                    <div class="content-part">
                        <h3 class="title"><a href="insurance-strategy.html">Insurance Strategy</a></h3>
                        <div class="desc">We denounce with indignation on and dislike men who are so begui led and
                            demoralized data.</div>
                    </div>
                </div>
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="{{ asset('frontend/images/services/style2/5.jpg')}}" alt="">
                    </div>
                    <div class="content-part">
                        <h3 class="title"><a href="start-ups.html">Start Ups</a></h3>
                        <div class="desc">We denounce with indignation on and dislike men who are so begui led and
                            demoralized data.</div>
                    </div>
                </div>
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="{{ asset('frontend/images/services/style2/6.jpg')}}" alt="">
                    </div>
                    <div class="content-part">
                        <h3 class="title"><a href="manage-investment.html">Investment</a></h3>
                        <div class="desc">We denounce with indignation on and dislike men who are so begui led and
                            demoralized data.</div>
                    </div>
                </div>
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="{{ asset('frontend/images/services/style2/1.jpg')}}" alt="">
                    </div>
                    <div class="content-part">
                        <h3 class="title"><a href="business-planning.html">Business Planning</a></h3>
                        <div class="desc">We denounce with indignation on and dislike men who are so begui led and
                            demoralized data.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Premium Services Section End -->

    <!-- About Section Start -->
    <div class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                    <div class="sec-title2 mb-30">
                        <div class="sub-text">Who We Are</div>
                        <h2 class="title mb-23">We craft your business ideas and <span>plans.</span></h2>
                        <p class="desc mb-0">Nor is there anyone who loves or pursues or desires to obtain pain of
                            itself, because it is pain, but occasionally circumstances occur in which toil and pain
                            can procure him some great pleasure. We did with righteous indignat ion and dislike men
                            who are so begui led and demoralized data business theme 2021.</p>
                    </div>
                    <!-- Skillbar Section Start -->
                    <div class="rs-skillbar style1">
                        <div class="cl-skill-bar">
                            <!-- Start Skill Bar -->
                            <span class="skillbar-title">Business Consulting</span>
                            <div class="skillbar" data-percent="92">
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent"></span>
                            </div>
                            <!-- Start Skill Bar -->
                            <span class="skillbar-title">Financial Advices</span>
                            <div class="skillbar" data-percent="90">
                                <p class="skillbar-bar"></p>
                                <span class="skill-bar-percent"></span>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-45">
                            <div class="btn-part">
                                <a class="readon consultant discover" href="about.html">Discover More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Skillbar Section End -->
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('frontend/images/about/about-2.png')}}" alt="images">
                        <div class="working-experiance">
                            <div class="experience-year">
                                <div class="count-year plus"><span class="sub-text">25+</span></div>
                                <h4 class="title mb-0">Years Experience</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partner Section Start -->
        <div class="rs-patter-section style1 pt-75">
            <div class="container custom">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30"
                    data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                    data-dots="false" data-nav="false" data-nav-speed="false" data-md-device="5"
                    data-md-device-nav="false" data-md-device-dots="false" data-center-mode="false"
                    data-ipad-device2="4" data-ipad-device-nav2="false" data-ipad-device-dots2="true"
                    data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false"
                    data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false">
                    <div class="logo-img">
                        <a href="https://rstheme.com/">
                            <img class="hovers-logos rs-grid-img" src="{{ asset('frontend/images/partner/main-home/1.png')}}"
                                title="" alt="">
                            <img class="mains-logos rs-grid-img " src="{{ asset('frontend/images/partner/main-home/1.png')}}"
                                title="" alt="">
                        </a>
                    </div>
                    <div class="logo-img">
                        <a href="https://rstheme.com/">
                            <img class="hovers-logos rs-grid-img" src="{{ asset('frontend/images/partner/main-home/2.png')}}"
                                title="" alt="">
                            <img class="mains-logos rs-grid-img " src="{{ asset('frontend/images/partner/main-home/2.png')}}"
                                title="" alt="">
                        </a>
                    </div>
                    <div class="logo-img">
                        <a href="https://rstheme.com/">
                            <img class="hovers-logos rs-grid-img" src="{{ asset('frontend/images/partner/main-home/3.png')}}"
                                title="" alt="">
                            <img class="mains-logos rs-grid-img " src="{{ asset('frontend/images/partner/main-home/3.png')}}"
                                title="" alt="">
                        </a>
                    </div>
                    <div class="logo-img">
                        <a href="https://rstheme.com/">
                            <img class="hovers-logos rs-grid-img" src="{{ asset('frontend/images/partner/main-home/4.png')}}"
                                title="" alt="">
                            <img class="mains-logos rs-grid-img " src="{{ asset('frontend/images/partner/main-home/4.png')}}"
                                title="" alt="">
                        </a>
                    </div>
                    <div class="logo-img">
                        <a href="https://rstheme.com/">
                            <img class="hovers-logos rs-grid-img" src="{{ asset('frontend/images/partner/main-home/5.png')}}"
                                title="" alt="">
                            <img class="mains-logos rs-grid-img " src="{{ asset('frontend/images/partner/main-home/5.png')}}"
                                title="" alt="">
                        </a>
                    </div>
                    <div class="logo-img">
                        <a href="https://rstheme.com/">
                            <img class="hovers-logos rs-grid-img" src="{{ asset('frontend/images/partner/main-home/6.png')}}"
                                title="" alt="">
                            <img class="mains-logos rs-grid-img " src="{{ asset('frontend/images/partner/main-home/6.png')}}"
                                title="" alt="">
                        </a>
                    </div>
                    <div class="logo-img">
                        <a href="https://rstheme.com/">
                            <img class="hovers-logos rs-grid-img" src="{{ asset('frontend/images/partner/main-home/7.png')}}"
                                title="" alt="">
                            <img class="mains-logos rs-grid-img " src="{{ asset('frontend/images/partner/main-home/7.png')}}"
                                title="" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partner Section End -->
    </div>
    <!-- About Section Start -->

    <!-- Project Section Start -->
    <div class="rs-project style7 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container custom">
            <div class="row y-middle">
                <div class="col-lg-6">
                    <div class="sec-title2 mb-55 md-mb-30">
                        <div class="sub-text">Recent Work</div>
                        <h2 class="title mb-23">We blend business ideas to create something <span>awesome.</span>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6 pl-60 md-pl-15 mb-30">
                    <p class="desc mb-0">30+ years experience in business and finance consulting, IT solutions, and
                        working with 5k+ clients over the world. Creation timelines for the digital consulting
                        business theme 2021.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid pl-30 pr-30">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30"
                data-autoplay="false" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                data-dots="false" data-nav="false" data-nav-speed="false" data-md-device="4"
                data-md-device-nav="false" data-md-device-dots="true" data-center-mode="false" data-ipad-device2="2"
                data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-ipad-device="2"
                data-ipad-device-nav="false" data-ipad-device-dots="true" data-mobile-device="1"
                data-mobile-device-nav="false" data-mobile-device-dots="true">

                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset('frontend/images/project/style2/1.jpg')}}" alt="images">
                    </div>
                    <div class="project-content">
                        <div class="project-inner">
                            <h3 class="title"><a href="project-single.html">Business planning</a></h3>
                            <span class="category"><a href="project-single.html">Investment</a></span>
                        </div>
                        <a class="p-icon" href="project-single.html"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset('frontend/images/project/style2/2.jpg')}}" alt="images">
                    </div>
                    <div class="project-content">
                        <div class="project-inner">
                            <h3 class="title"><a href="project-single.html">Strength solutions</a></h3>
                            <span class="category"><a href="project-single.html">Investment</a></span>
                        </div>
                        <a class="p-icon" href="project-single.html"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset('frontend/images/project/style2/3.jpg')}}" alt="images">
                    </div>
                    <div class="project-content">
                        <div class="project-inner">
                            <h3 class="title"><a href="project-single.html">Business analytics</a></h3>
                            <span class="category"><a href="project-single.html">Business Strategy</a></span>
                        </div>
                        <a class="p-icon" href="project-single.html"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset('frontend/images/project/style2/4.jpg')}}" alt="images">
                    </div>
                    <div class="project-content">
                        <div class="project-inner">
                            <h3 class="title"><a href="project-single.html">Stock market analysis</a></h3>
                            <span class="category"><a href="project-single.html">Business Strategy</a></span>
                        </div>
                        <a class="p-icon" href="project-single.html"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset('frontend/images/project/style2/5.jpg')}}" alt="images">
                    </div>
                    <div class="project-content">
                        <div class="project-inner">
                            <h3 class="title"><a href="project-single.html">Sales analysis</a></h3>
                            <span class="category"><a href="project-single.html">Financial</a></span>
                        </div>
                        <a class="p-icon" href="project-single.html"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset('frontend/images/project/style2/6.jpg')}}" alt="images">
                    </div>
                    <div class="project-content">
                        <div class="project-inner">
                            <h3 class="title"><a href="project-single.html">Stock investments</a></h3>
                            <span class="category"><a href="project-single.html">Tax Consulting</a></span>
                        </div>
                        <a class="p-icon" href="project-single.html"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset('frontend/images/project/style2/7.jpg')}}" alt="images">
                    </div>
                    <div class="project-content">
                        <div class="project-inner">
                            <h3 class="title"><a href="project-single.html">Advertising Technology</a></h3>
                            <span class="category"><a href="project-single.html">Business Strategy</a></span>
                        </div>
                        <a class="p-icon" href="project-single.html"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{ asset('frontend/images/project/style2/1.jpg')}}" alt="images">
                    </div>
                    <div class="project-content">
                        <div class="project-inner">
                            <h3 class="title"><a href="project-single.html">Business planning</a></h3>
                            <span class="category"><a href="project-single.html">Investment</a></span>
                        </div>
                        <a class="p-icon" href="project-single.html"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Section End -->

    <!-- Blog Start -->
    <div class="rs-blog style2 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row y-middle md-mb-30">
                <div class="col-lg-5 mb-20 md-mb-10">
                    <div class="sec-title2">
                        <div class="sub-text">News Updates</div>
                        <h2 class="title mb-23">Read our latest updates & business <span>tips & tricks.</span></h2>
                    </div>
                </div>
                <div class="col-lg-7 mb-20">
                    <div class="btn-part text-right md-left">
                        <a class="readon consultant discover" href="blog-details.html">View Updates</a>
                    </div>
                </div>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
                data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true"
                data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2"
                data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3"
                data-md-device-nav="false" data-md-device-dots="true">
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="#"><img src="{{ asset('frontend/images/blog/1.jpg')}}" alt="Blog"></a>
                        <ul class="post-categories">
                            <li><a href="blog-details.html">Branding</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta mb-10">
                            <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                            <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Customer Onboarding Strategy: A Guide to
                                Class</a></h3>
                        <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...
                        </p>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="#"><img src="{{ asset('frontend/images/blog/2.jpg')}}" alt="Blog"></a>
                        <ul class="post-categories">
                            <li><a href="blog-details.html">Branding</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta mb-10">
                            <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                            <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">How to plan a fail-proof website redesign
                                strategy</a></h3>
                        <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...
                        </p>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="#"><img src="{{ asset('frontend/images/blog/3.jpg')}}" alt="Blog"></a>
                        <ul class="post-categories">
                            <li><a href="blog-details.html">Digital Marketing</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta mb-10">
                            <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                            <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">How investing in dependend increasing to
                                business</a></h3>
                        <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...
                        </p>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="#"><img src="{{ asset('frontend/images/blog/4.jpg')}}" alt="Blog"></a>
                        <ul class="post-categories">
                            <li><a href="blog-details.html">Digital Marketing</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta mb-10">
                            <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                            <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">7 Productivity tips to avoid burnout when
                                working</a></h3>
                        <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...
                        </p>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="#"><img src="{{ asset('frontend/images/blog/5.jpg')}}" alt="Blog"></a>
                        <ul class="post-categories">
                            <li><a href="blog-details.html">Graphic Design</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta mb-10">
                            <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                            <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Email marketing tips that will increase
                                your sales</a></h3>
                        <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...
                        </p>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="#"><img src="{{ asset('frontend/images/blog/6.jpg')}}" alt="Blog"></a>
                        <ul class="post-categories">
                            <li><a href="blog-details.html"></a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta mb-10">
                            <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                            <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">How to maintain customer relations
                                disaster strikes</a></h3>
                        <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...
                        </p>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="#"><img src="{{ asset('frontend/images/blog/1.jpg')}}" alt="Blog"></a>
                        <ul class="post-categories">
                            <li><a href="blog-details.html">E-commerce</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta mb-10">
                            <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                            <li class="date"> <i class="fa fa-calendar-check-o"></i> 16 Aug 2021</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">How to plan a fail-proof website redesign
                                strategy</a></h3>
                        <p>We denounce with righteous indige nation and dislike men who are so beguiled and demo...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Testimonial Section Start -->
    <div class="rs-testimonial style2 bg10 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="sec-title2 text-center md-left mb-30">
                <div class="sub-text">Testimonials</div>
                <h2 class="title mb-0 white-color">Whats our customers saying<br> about us</h2>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
                data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true"
                data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2"
                data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3"
                data-md-device-nav="false" data-md-device-dots="true">
                <div class="testi-wrap">
                    <div class="item-content">
                        <span><img src="{{ asset('frontend/images/testimonial/quote.png')}}" alt="Testimonial"></span>
                        <p>Customer support is excellent and documentation good – novice can easily understand.
                            Although I had a problem with the performance, thanks to the customer support, we have
                            solved this problem as well.</p>
                    </div>
                    <div class="testi-content">
                        <div class="image-wrap">
                            <img src="{{ asset('frontend/images/testimonial/avatar/1.jpg')}}" alt="Testimonial">
                        </div>
                        <div class="testi-information">
                            <div class="testi-name">David Warner</div>
                            <span class="testi-title">Envato User</span>
                            <div class="ratting-img">
                                <img src="{{ asset('frontend/images/testimonial/ratting.png')}}" alt="Testimonial">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi-wrap">
                    <div class="item-content">
                        <span><img src="{{ asset('frontend/images/testimonial/quote.png')}}" alt="Testimonial"></span>
                        <p>Customer support is excellent and documentation good – novice can easily understand.
                            Although I had a problem with the performance, thanks to the customer support, we have
                            solved this problem as well.</p>
                    </div>
                    <div class="testi-content">
                        <div class="image-wrap">
                            <img src="{{ asset('frontend/images/testimonial/avatar/2.jpg')}}" alt="Testimonial">
                        </div>
                        <div class="testi-information">
                            <div class="testi-name">Emily Blunt</div>
                            <span class="testi-title">Web Developer</span>
                            <div class="ratting-img">
                                <img src="{{ asset('frontend/images/testimonial/ratting.png')}}" alt="Testimonial">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi-wrap">
                    <div class="item-content">
                        <span><img src="{{ asset('frontend/images/testimonial/quote.png')}}" alt="Testimonial"></span>
                        <p>Customer support is excellent and documentation good – novice can easily understand.
                            Although I had a problem with the performance, thanks to the customer support, we have
                            solved this problem as well.</p>
                    </div>
                    <div class="testi-content">
                        <div class="image-wrap">
                            <img src="{{ asset('frontend/images/testimonial/avatar/3.jpg')}}" alt="Testimonial">
                        </div>
                        <div class="testi-information">
                            <div class="testi-name">Ansu Fati</div>
                            <span class="testi-title">Marketing</span>
                            <div class="ratting-img">
                                <img src="{{ asset('frontend/images/testimonial/ratting.png')}}" alt="Testimonial">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi-wrap">
                    <div class="item-content">
                        <span><img src="{{ asset('frontend/images/testimonial/quote.png')}}" alt="Testimonial"></span>
                        <p>Customer support is excellent and documentation good – novice can easily understand.
                            Although I had a problem with the performance, thanks to the customer support, we have
                            solved this problem as well.</p>
                    </div>
                    <div class="testi-content">
                        <div class="image-wrap">
                            <img src="{{ asset('frontend/images/testimonial/avatar/4.jpg')}}" alt="Testimonial">
                        </div>
                        <div class="testi-information">
                            <div class="testi-name">Angelina Jolie</div>
                            <span class="testi-title">Graphic Designer</span>
                            <div class="ratting-img">
                                <img src="{{ asset('frontend/images/testimonial/ratting.png')}}" alt="Testimonial">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi-wrap">
                    <div class="item-content">
                        <span><img src="{{ asset('frontend/images/testimonial/quote.png')}}" alt="Testimonial"></span>
                        <p>Customer support is excellent and documentation good – novice can easily understand.
                            Although I had a problem with the performance, thanks to the customer support, we have
                            solved this problem as well.</p>
                    </div>
                    <div class="testi-content">
                        <div class="image-wrap">
                            <img src="{{ asset('frontend/images/testimonial/avatar/1.jpg')}}" alt="Testimonial">
                        </div>
                        <div class="testi-information">
                            <div class="testi-name">David Warner</div>
                            <span class="testi-title">Envato User</span>
                            <div class="ratting-img">
                                <img src="{{ asset('frontend/images/testimonial/ratting.png')}}" alt="Testimonial">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi-wrap">
                    <div class="item-content">
                        <span><img src="{{ asset('frontend/images/testimonial/quote.png')}}" alt="Testimonial"></span>
                        <p>Customer support is excellent and documentation good – novice can easily understand.
                            Although I had a problem with the performance, thanks to the customer support, we have
                            solved this problem as well.</p>
                    </div>
                    <div class="testi-content">
                        <div class="image-wrap">
                            <img src="{{ asset('frontend/images/testimonial/avatar/2.jpg')}}" alt="Testimonial">
                        </div>
                        <div class="testi-information">
                            <div class="testi-name">Emily Blunt</div>
                            <span class="testi-title">Web Developer</span>
                            <div class="ratting-img">
                                <img src="{{ asset('frontend/images/testimonial/ratting.png')}}" alt="Testimonial">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi-wrap">
                    <div class="item-content">
                        <span><img src="{{ asset('frontend/images/testimonial/quote.png')}}" alt="Testimonial"></span>
                        <p>Customer support is excellent and documentation good – novice can easily understand.
                            Although I had a problem with the performance, thanks to the customer support, we have
                            solved this problem as well.</p>
                    </div>
                    <div class="testi-content">
                        <div class="image-wrap">
                            <img src="{{ asset('frontend/images/testimonial/avatar/3.jpg')}}" alt="Testimonial">
                        </div>
                        <div class="testi-information">
                            <div class="testi-name">Ansu Fati</div>
                            <span class="testi-title">Marketing</span>
                            <div class="ratting-img">
                                <img src="{{ asset('frontend/images/testimonial/ratting.png')}}" alt="Testimonial">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi-wrap">
                    <div class="item-content">
                        <span><img src="{{ asset('frontend/images/testimonial/quote.png')}}" alt="Testimonial"></span>
                        <p>Customer support is excellent and documentation good – novice can easily understand.
                            Although I had a problem with the performance, thanks to the customer support, we have
                            solved this problem as well.</p>
                    </div>
                    <div class="testi-content">
                        <div class="image-wrap">
                            <img src="{{ asset('frontend/images/testimonial/avatar/4.jpg')}}" alt="Testimonial">
                        </div>
                        <div class="testi-information">
                            <div class="testi-name">Angelina Jolie</div>
                            <span class="testi-title">Graphic Designer</span>
                            <div class="ratting-img">
                                <img src="{{ asset('frontend/images/testimonial/ratting.png')}}" alt="Testimonial">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->


    <!-- Contact Section Start -->
    <div class="rs-contact contact-style2 bg11 pt-95 pb-100 md-pt-65 md-pb-70">
        <div class="container">
            <div class="sec-title2 mb-55 md-mb-35 text-center text-lg-start">
                <div class="sub-text">Contact</div>
                <h2 class="title mb-0">Let us help your business <br> to move <span>forward.</span></h2>
            </div>
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-50">
                    <div class="contact-img">
                        <img src="{{ asset('frontend/images/contact/computer.jpg')}}" alt="Contact">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-wrap">
                        <div id="form-messages"></div>
                        <form id="contact-form" method="post" action="#">
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="from-control" type="text" id="name" name="name"
                                            placeholder="Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="from-control" type="text" id="email" name="email"
                                            placeholder="E-Mail" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="from-control" type="text" id="phone" name="phone"
                                            placeholder="Phone Number" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="from-control" type="text" id="Website" name="subject"
                                            placeholder="Your Website" required="">
                                    </div>

                                    <div class="col-lg-12 mb-30">
                                        <textarea class="from-control" id="message" name="message"
                                            placeholder="Your message Here" required=""></textarea>
                                    </div>
                                </div>
                                <div class="btn-part">
                                    <div class="form-group mb-0">
                                        <input class="readon submit" type="submit" value="Submit Now">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->
@endsection