@extends('frontend.layouts.master')

@section('title', 'Contact Us')

@section('content')
     <!-- Breadcrumbs Start -->
     <div class="rs-breadcrumbs img9">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    Have questions - contact us
                    <span class="watermark">Contact</span>
                </h1>
                <span class="sub-text">Excepteur sint occaecat cupidatat non proident, sunt in coulpa qui official
                    modeserunt<br>
                    mollit anim id est laborum 20 years experience.</span>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Contact Section Start -->
    <div class="rs-contact contact-style2 bg9 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-40 md-pr-15 md-mb-50">
                    <div class="contact-map">
                        <iframe src="https://maps.google.com/maps?q=rstheme&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sec-title mb-45 md-mb-25">
                        <h2 class="title pb-20">
                            Let us help your business to move <span>forward.</span>
                        </h2>
                        <p class="margin-0">We donec pulvinar magna id leoersi pellentesque impered dignissim
                            rhoncus euismod euismod eros vitae..</p>
                    </div>
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

                                    <div class="col-lg-12 mb-35">
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
        <!-- Contact Icon Section Start -->
        <div class="rs-contact main-home">
            <div class="container">
                <div class="contact-icons-style box-address pt-100 md-pt-70">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <img src="{{ asset('frontend/images/contact/icons/1.png')}}" alt="images">
                                </div>
                                <div class="content-text">
                                    <h2 class="title"><a href="#">USA office</a></h2>
                                    <p class="services-txt">55 Gerad Lane,<br>
                                        NY 11201, USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <img src="{{ asset('frontend/images/contact/icons/2.png')}}" alt="images">
                                </div>
                                <div class="content-text">
                                    <h2 class="title"><a href="#">BD office</a></h2>
                                    <p class="services-txt">Ta-134/A, Link<br> Road, Gulshan-1</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <img src="{{ asset('frontend/images/contact/icons/3.png')}}" alt="images">
                                </div>
                                <div class="content-text">
                                    <h2 class="title"><a href="#">Email us</a></h2>
                                    <a href="mailto:test@gamil.com">test@gamil.com</a><br>
                                    <a href="mailto:test2@gamil.com">test2@gamil.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <img src="{{ asset('frontend/images/contact/icons/4.png')}}" alt="images">
                                </div>
                                <div class="content-text">
                                    <h2 class="title"><a href="#">Call us</a></h2>
                                    <a href="tel:(+088)589-8745">(+088) 589-8745</a><br>
                                    <a href="tel:(+088)222-9999">(+088) 222-9999</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Icon Section End -->
    </div>
    <!-- Contact Section End -->
@endsection