@extends('frontend.layouts.master')

@section('title', 'Registration');

@section('content')

  <!-- My Account Section Start -->
    <div class="rs-my-account pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 md-mb-50 shadow p-5">
                    <h2 class="title pb-30 md-pb-15">Regitration</h2>
                    <div class="rs-login">
                        <div class="form-group mb-30">
                            <label>Username or email address<span>*</span></label>
                            <input id="fname" name="fname" class="form-control-mod" type="text" required=""> 
                            <label>Password <span>*</span></label>
                            <input id="tname" name="text" class="form-control-mod" type="text" required="">
                        </div>
                        <button class="add-btn" type="submit">Log In</button>
                        <label>
                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">
                            <span>Remember me</span>
                        </label>
                        <div class="last-password pt-30">
                            <a href="#">Lost your password?</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
    <!-- My Account Section Start -->
@endsection
