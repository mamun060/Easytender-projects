@extends('frontend.layouts.master')

@section('title', 'Registration')

@section('content')

  <!-- My Account Section Start -->
    <div class="rs-my-account pt-20 pb-20 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 md-mb-50 shadow p-4">
                    <h2 class="title pb-30 md-pb-15">Regitration</h2>
                    <div class="rs-login">
                        <div class="form-group mb-30">
                            <label>Name<span>*</span></label>
                            <input id="fname" name="fname" class="form-control-mod" type="text" required=""> 
                            <label>Mobile<span>*</span></label>
                            <input id="fname" name="fname" class="form-control-mod" type="number" required=""> 
                            <label>District<span>*</span></label>
                            <input id="fname" name="fname" class="form-control-mod" type="number" required=""> 
                            <label>Password <span>*</span></label>
                            <input id="tname" name="text" class="form-control-mod" type="password" required="">
                            <label>Confirm Password <span>*</span></label>
                            <input id="tname" name="text" class="form-control-mod" type="password" required="">
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
