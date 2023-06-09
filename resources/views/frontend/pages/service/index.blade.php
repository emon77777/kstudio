@extends('frontend.layout.master')

@section('content')

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="{{asset("frontend/img/bg/14.jpg")}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">What We Do</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ url('/') }}"><span class="ltn__secondary-color"><i
                                            class="fas fa-home"></i></span> Home</a></li>
                            <li>Service</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pb-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 align-self-center">
                <div class="about-us-img-wrap ltn__img-shape-left  about-img-left">
                    <img src="{{ asset('storage/' . $about_data['image']) }}" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2--- mb-20">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">About Us</h6>
                        <h1 class="section-title">{{ $about_data['text'] }}<span>.</span></h1>
                        <p>{{ $about_data['detail'] }}</p>
                    </div>
                    <div class="btn-wrapper animated">
                        <a href="{{ route('about.index') }}" class="theme-btn-1 btn btn-effect-1 text-uppercase">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- SERVICE AREA START (Service 1) -->
<div class="ltn__service-area section-bg-1 pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Services</h6>
                    <h1 class="section-title">Our Core Services</h1>
                </div>
            </div>
        </div>
        <div class="row  justify-content-center">
            
            @foreach ($service_data as $each_service)
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <span><i class="{{ $each_service['icon'] }}"></i></span>
                            <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a>{{ $each_service['title'] }}</a></h3>
                            <p>{{ $each_service['detail'] }}</p>
                            <!-- <a class="ltn__service-btn">Find A Home <i class="flaticon-right-arrow"></i></a> -->
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</div>
<!-- SERVICE AREA END -->

<!-- CALL TO ACTION START (call-to-action-6) -->
<div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div
                    class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                    <div class="coll-to-info text-color-white">
                        <h1>Looking for a dream home?</h1>
                        <p>We can help you realize your dream of a new home</p>
                    </div>
                    <div class="btn-wrapper">
                        <a class="btn btn-effect-3 btn-white" href="{{ route('contact.index') }}">Contact Us <i
                                class="icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CALL TO ACTION END -->
@endsection