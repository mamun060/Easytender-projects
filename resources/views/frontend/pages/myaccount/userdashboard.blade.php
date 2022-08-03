@extends('frontend.layouts.master')

@section('title', 'My Account')

@section('content')

 <!-- Breadcrumbs Start -->
 <div class="rs-breadcrumbs img1">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
               Dashboard
                <span class="watermark">Dashboard</span>
            </h1>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Start content -->
<div class="rs-about style2">
    <div class="container pt-5 pb-5">
       <div class="row">
        <div class="col-md-12">
            <div class="myaccount-heading">
                <h4>Welcome Back - <span>Md Al Mamun</span></h4>
            </div>
        </div>
       </div>
       <div class="row">
        <div class="col-md-3">
            <div class="account-menu-list">
                <ul>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Appliyed Job List</a></li>
                    <li><a href="#">Job Post List</a></li>
                    <li><a href="#">Vat List</a></li>
                    <li><a href="#">All Tender</a></li>
                    <li><a href="#">Profile Edit</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>
       </div>
    </div>
</div>
<!-- end content -->
    
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom.css')}}">
@endpush