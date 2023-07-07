@extends("frontend.layout.master")


@section('content')

<!-- SLIDER AREA START -->
<div class="ltn__slider-area ltn__slider-4 position-relative ltn__primary-bg fix"
    style="background-image: url('{{ asset('storage/' . $setting_data['home_banner']) }}'); background-size: cover;">
    <div
        class="ltn__slide-one-active----- slick-slide-arrow-1----- slick-slide-dots-1----- arrow-white----- ltn__slide-animation-active">
        <!-- ltn__slide-item -->
        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-7 bg-image--- bg-overlay-theme-black-10---">
            <div class="ltn__slide-item-inner text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <h6 class="slide-sub-title white-color animated"><span><i class="fas fa-home"></i></span>Kstudio Real Estate Profile</h6>
                                    <h1 class="slide-title text-uppercase white-color animated ">Make Your Dream <br> House By Us</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SLIDER AREA END -->

<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-left">
                    <img src="{{ asset('storage/' . $about_data['image']) }}" alt="About Us Image">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2--- mb-20">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">About Us</h6>
                        <h1 class="section-title">{{ $about_data['text'] }}<span>.</span></h1>
                        <p>{{ $about_data['detail'] }}</p>
                    </div>
                    <ul class="ltn__list-item-half clearfix">
                        @foreach ($amenity_data as $each_amenity)
                            <li>
                                <i class="{{ $each_amenity['icon'] }}"></i>
                                {{ $each_amenity['title'] }}
                            </li>
                        @endforeach
                    </ul>
                    {{-- <div class="ltn__callout bg-overlay-theme-05  mt-30">
                        <p>"Enimad minim veniam quis nostrud exercitation <br>
                            llamco laboris. Lorem ipsum dolor sit amet" </p>
                    </div> --}}
                    <div class="btn-wrapper animated">
                        <a href="{{ route('service.index') }}" class="theme-btn-1 btn btn-effect-1">OUR SERVICES</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- COUNTER UP AREA START -->
<div class="ltn__counterup-area section-bg-1 pt-120 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Portfolio</h6>
                    <h1 class="section-title">Our Achievements</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item text-color-white---">
                    <div class="counter-icon">
                        <i class="flaticon-select"></i>
                    </div>
                    <h1><span class="counter">560</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Total Area Sq</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item text-color-white---">
                    <div class="counter-icon">
                        <i class="flaticon-office"></i>
                    </div>
                    <h1><span class="counter">197</span><span class="counterUp-letter">K</span><span
                            class="counterUp-icon">+</span> </h1>
                    <h6>Apartments Sold</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item text-color-white---">
                    <div class="counter-icon">
                        <i class="flaticon-excavator"></i>
                    </div>
                    <h1><span class="counter">268</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Total Constructions</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item text-color-white---">
                    <div class="counter-icon">
                        <i class="flaticon-armchair"></i>
                    </div>
                    <h1><span class="counter">340</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Apartio Rooms</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- COUNTER UP AREA END -->

<!-- VIDEO AREA START -->
<div class="ltn__video-popup-area ltn__video-popup-margin---">
    <div class="ltn__video-bg-img ltn__video-popup-height-600--- bg-overlay-black-30 bg-image bg-fixed ltn__animation-pulse1"
        data-bs-bg="{{ asset('storage/' . $setting_data['home_back_image']) }}">
        <a class="ltn__video-icon-2 ltn__video-icon-2-border---"
            href="{{ $setting_data['home_video'] }}"
            data-rel="lightcase:myCollection">
            <i class="fa fa-play"></i>
        </a>
    </div>
</div>
<!-- VIDEO AREA END -->

<!-- FEATURE AREA START ( Feature - 6) -->
<div class="ltn__feature-area section-bg-1 pt-120 pb-90 mb-120---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Services</h6>
                    <h1 class="section-title">Our Main Focus</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__custom-gutter--- justify-content-center">
            
            @foreach ($focus_data as $each_focus)
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-house"></i></span> -->
                            <img src="{{asset('storage/' . $each_focus['icon'])}}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="service-details.html">{{ $each_focus['title'] }}</a></h3>
                            <p>{{ $each_focus['detail'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach


            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-house"></i></span> -->
                        <img src="{{asset("frontend/img/icons/icon-img/21.png")}}" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="service-details.html">Buy a home</a></h3>
                        <p>over 1 million+ homes for sale available on the website, we can match you with a house you
                            will want to call home.</p>
                        <a class="ltn__service-btn" href="service-details.html">Find A Home <i
                                class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1 active">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-house-3"></i></span> -->
                        <img src="{{asset("frontend/img/icons/icon-img/22.png")}}" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="service-details.html">Rent a home</a></h3>
                        <p>over 1 million+ homes for sale available on the website, we can match you with a house you
                            will want to call home.</p>
                        <a class="ltn__service-btn" href="service-details.html">Find A Home <i
                                class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-deal-1"></i></span> -->
                        <img src="{{asset("frontend/img/icons/icon-img/23.png")}}" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="service-details.html">Sell a home</a></h3>
                        <p>over 1 million+ homes for sale available on the website, we can match you with a house you
                            will want to call home.</p>
                        <a class="ltn__service-btn" href="service-details.html">Find A Home <i
                                class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->

<!-- CATEGORY AREA START -->
<div class="ltn__category-area section-bg-1-- ltn__primary-bg before-bg-1 bg-image bg-overlay-theme-black-5--0 pt-115 pb-90 d-none"
    data-bs-bg="img/bg/5.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title white-color">Top Categories</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__category-slider-active slick-arrow-1">
            <div class="col-12">
                <div class="ltn__category-item ltn__category-item-4 text-center">
                    <div class="ltn__category-item-img">
                        <a href="shop.html">
                            <i class="flaticon-car"></i>
                        </a>
                    </div>
                    <div class="ltn__category-item-name">
                        <h4><a href="shop.html">Parking Space</a></h4>
                    </div>
                    <div class="ltn__category-item-btn">
                        <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="ltn__category-item ltn__category-item-4 text-center">
                    <div class="ltn__category-item-img">
                        <a href="shop.html">
                            <i class="flaticon-car"></i>
                        </a>
                    </div>
                    <div class="ltn__category-item-name">
                        <h4><a href="shop.html">Parking Space</a></h4>
                    </div>
                    <div class="ltn__category-item-btn">
                        <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="ltn__category-item ltn__category-item-4 text-center">
                    <div class="ltn__category-item-img">
                        <a href="shop.html">
                            <i class="flaticon-car"></i>
                        </a>
                    </div>
                    <div class="ltn__category-item-name">
                        <h4><a href="shop.html">Parking Space</a></h4>
                    </div>
                    <div class="ltn__category-item-btn">
                        <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="ltn__category-item ltn__category-item-4 text-center">
                    <div class="ltn__category-item-img">
                        <a href="shop.html">
                            <i class="flaticon-car"></i>
                        </a>
                    </div>
                    <div class="ltn__category-item-name">
                        <h4><a href="shop.html">Parking Space</a></h4>
                    </div>
                    <div class="ltn__category-item-btn">
                        <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="ltn__category-item ltn__category-item-4 text-center">
                    <div class="ltn__category-item-img">
                        <a href="shop.html">
                            <i class="flaticon-car"></i>
                        </a>
                    </div>
                    <div class="ltn__category-item-name">
                        <h4><a href="shop.html">Parking Space</a></h4>
                    </div>
                    <div class="ltn__category-item-btn">
                        <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="ltn__category-item ltn__category-item-4 text-center">
                    <div class="ltn__category-item-img">
                        <a href="shop.html">
                            <i class="flaticon-car"></i>
                        </a>
                    </div>
                    <div class="ltn__category-item-name">
                        <h4><a href="shop.html">Parking Space</a></h4>
                    </div>
                    <div class="ltn__category-item-btn">
                        <a href="shop.html"><i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CATEGORY AREA END -->

<!-- CATEGORY AREA START -->
<div class="ltn__category-area ltn__product-gutter section-bg-1--- pt-115 pb-90 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Aminities</h6>
                    <h1 class="section-title">Building Aminities</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__category-slider-active--- slick-arrow-1 justify-content-center">
            
            @foreach ($amenity_data as $each_amenity)
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__category-item ltn__category-item-5 text-center">
                        <a href="shop.html">
                            <span class="category-icon"><i class="{{ $each_amenity['icon'] }}"></i></span>
                            <span class="category-title" style="font-size: 16px;">{{ $each_amenity['title'] }}</span>
                            {{-- <span class="category-btn"><i class="flaticon-right-arrow"></i></span> --}}
                        </a>
                    </div>
                </div>
            @endforeach

            {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="shop.html">
                        <span class="category-icon"><i class="flaticon-car"></i></span>
                        <span class="category-title">Parking Space</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="shop.html">
                        <span class="category-icon"><i class="flaticon-swimming"></i></span>
                        <span class="category-title">Swimming Pool</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="shop.html">
                        <span class="category-icon"><i class="flaticon-secure-shield"></i></span>
                        <span class="category-title">Private Security</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="shop.html">
                        <span class="category-icon"><i class="flaticon-stethoscope"></i></span>
                        <span class="category-title">Medical Center</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="shop.html">
                        <span class="category-icon"><i class="flaticon-book"></i></span>
                        <span class="category-title">Library Area</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="shop.html">
                        <span class="category-icon"><i class="flaticon-bed-1"></i></span>
                        <span class="category-title">King Size Beds</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="shop.html">
                        <span class="category-icon"><i class="flaticon-home-2"></i></span>
                        <span class="category-title">Smart Homes</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="shop.html">
                        <span class="category-icon"><i class="flaticon-slider"></i></span>
                        <span class="category-title">Kid’s Playland</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div> --}}

        </div>
    </div>
</div>
<!-- CATEGORY AREA END -->

<!-- TESTIMONIAL AREA START (testimonial-7) -->
<div class="ltn__testimonial-area section-bg-1--- bg-image-top pt-115 pb-70" data-bs-bg="{{asset("frontend/img/bg/20.jpg")}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Testimonial</h6>
                    <h1 class="section-title">Clients Feedback</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__testimonial-slider-5-active slick-arrow-1">
            @foreach ($feedback_data as $each_feedback)
                <div class="col-lg-4">
                    <div class="ltn__testimonial-item ltn__testimonial-item-7">
                        <div class="ltn__testimoni-info">
                            <p>
                                <i class="flaticon-left-quote-1"></i>
                                {{ $each_feedback['detail'] }}
                            </p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="{{ asset('storage/' . $each_feedback['image']) }}" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h5>{{ $each_feedback['name'] }}</h5>
                                    <label>{{ $each_feedback['title'] }}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
            {{-- <div class="col-lg-4">
                <div class="ltn__testimonial-item ltn__testimonial-item-7">
                    <div class="ltn__testimoni-info">
                        <p><i class="flaticon-left-quote-1"></i>
                            Precious ipsum dolor sit amet
                            consectetur adipisicing elit, sed dos
                            mod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad min
                            veniam, quis nostrud Precious ips
                            um dolor sit amet, consecte</p>
                        <div class="ltn__testimoni-info-inner">
                            <div class="ltn__testimoni-img">
                                <img src="{{asset("frontend/img/testimonial/1.jpg")}}" alt="#">
                            </div>
                            <div class="ltn__testimoni-name-designation">
                                <h5>Jacob William</h5>
                                <label>Selling Agents</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__testimonial-item ltn__testimonial-item-7">
                    <div class="ltn__testimoni-info">
                        <p><i class="flaticon-left-quote-1"></i>
                            Precious ipsum dolor sit amet
                            consectetur adipisicing elit, sed dos
                            mod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad min
                            veniam, quis nostrud Precious ips
                            um dolor sit amet, consecte</p>
                        <div class="ltn__testimoni-info-inner">
                            <div class="ltn__testimoni-img">
                                <img src="{{asset("frontend/img/testimonial/2.jpg")}}" alt="#">
                            </div>
                            <div class="ltn__testimoni-name-designation">
                                <h5>Kelian Anderson</h5>
                                <label>Selling Agents</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__testimonial-item ltn__testimonial-item-7">
                    <div class="ltn__testimoni-info">
                        <p><i class="flaticon-left-quote-1"></i>
                            Precious ipsum dolor sit amet
                            consectetur adipisicing elit, sed dos
                            mod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad min
                            veniam, quis nostrud Precious ips
                            um dolor sit amet, consecte</p>
                        <div class="ltn__testimoni-info-inner">
                            <div class="ltn__testimoni-img">
                                <img src="{{asset("frontend/img/testimonial/3.jpg")}}" alt="#">
                            </div>
                            <div class="ltn__testimoni-name-designation">
                                <h5>Adam Joseph</h5>
                                <label>Selling Agents</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__testimonial-item ltn__testimonial-item-7">
                    <div class="ltn__testimoni-info">
                        <p><i class="flaticon-left-quote-1"></i>
                            Precious ipsum dolor sit amet
                            consectetur adipisicing elit, sed dos
                            mod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad min
                            veniam, quis nostrud Precious ips
                            um dolor sit amet, consecte</p>
                        <div class="ltn__testimoni-info-inner">
                            <div class="ltn__testimoni-img">
                                <img src="{{asset("frontend/img/testimonial/4.jpg")}}" alt="#">
                            </div>
                            <div class="ltn__testimoni-name-designation">
                                <h5>James Carter</h5>
                                <label>Selling Agents</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            
        </div>
    </div>
</div>
<!-- TESTIMONIAL AREA END -->

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