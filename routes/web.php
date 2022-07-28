<?php

use Illuminate\Support\Facades\Route;

// Frontend Route list

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/about-us', function(){
    return view('frontend.pages.aboutus');
});

Route::get('/contact-us', function(){
    return view('frontend.pages.contactus');
});

Route::get('/login', function(){
    return view('frontend.pages.login');
});

Route::get('/register', function(){
    return view('frontend.pages.registration');
});


// Admin Route list 
Route::group(['prefix'=>'admins','as'=>'admin.'], function(){
    Route::get('/', function(){
        return view('backend.admindashboard');
    });
});



