@extends('frontend.layout.master')

@section('content')

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="{{asset("frontend/img/bg/14.jpg")}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Our Portfolio</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ url('/') }}"><span class="ltn__secondary-color"><i
                                            class="fas fa-home"></i></span> Home</a></li>
                            <li>Portfolio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- Gallery area start -->
<div class="ltn__gallery-area mb-120">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__gallery-menu">
                    <div class="ltn__gallery-filter-menu portfolio-filter text-uppercase mb-50">
                        
                        <button data-filter="*" class="active">all</button>
                        @foreach ($categories as $category)
                        <button data-filter=".filter_category_{{$category->id}}">{{$category->name}}</button>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>


        <!--Portfolio Wrapper Start-->
        <div class="ltn__gallery-active row ltn__gallery-style-1">
            <div class="ltn__gallery-sizer col-1"></div>

            @foreach($portfolio_data as $portfolio)
            <!-- gallery-item -->
            <div class="ltn__gallery-item @if(isset($portfolio->category->id)) filter_category_{{$portfolio->category->id}} @else filter_category_1 @endif col-md-4 col-sm-6 col-12">
                <div class="ltn__gallery-item-inner">
                    <div class="ltn__gallery-item-img">
                        <a href="{{asset("storage/".$portfolio->image)}}" data-rel="lightcase:myCollection">
                            <img src="{{asset("storage/".$portfolio->image)}}" alt="Image">
                            <span class="ltn__gallery-action-icon">
                                <i class="fas fa-search"></i>
                            </span>
                        </a>
                    </div>
                    <div class="ltn__gallery-item-info">
                        <h4><a>{{$portfolio->title}} </a></h4>
                        <p>{{$portfolio->subtitle}}</p>
                    </div>
                </div>
            </div>
            @endforeach

            {{-- <div class="ltn__gallery-item filter_category_2 col-md-4 col-sm-6 col-12">
                <div class="ltn__gallery-item-inner">
                    <div class="ltn__gallery-item-img">
                        <a href="#ltn__inline_description_1" data-rel="lightcase:myCollection">
                            <img src="{{asset("frontend/img/gallery/2.jpg")}}" alt="Image">
                            <span class="ltn__gallery-action-icon">
                                <i class="far fa-file-alt"></i>
                            </span>
                        </a>
                    </div>
                    <div class="ltn__gallery-item-info">
                        <h4><a href="portfolio-details.html">Inline Description </a></h4>
                        <p>Web Design & Development, Branding</p>
                    </div>
                </div>
            </div>
            <div class="ltn__gallery-item filter_category_1 col-md-4 col-sm-6 col-12">
                <div class="ltn__gallery-item-inner">
                    <div class="ltn__gallery-item-img">
                        <a href="http://www.youtube.com/embed/6v2L2UGZJAM?version=3" data-rel="lightcase:myCollection">
                            <img src="{{asset("frontend/img/gallery/3.jpg")}}" alt="Image">
                            <span class="ltn__gallery-action-icon">
                                <i class="fab fa-youtube"></i>
                            </span>
                        </a>
                    </div>
                    <div class="ltn__gallery-item-info">
                        <h4><a href="portfolio-details.html">Youtube Video </a></h4>
                        <p>Web Design & Development, Branding</p>
                    </div>
                </div>
            </div>
            <div class="ltn__gallery-item filter_category_3 col-md-4 col-sm-6 col-12">
                <div class="ltn__gallery-item-inner">
                    <div class="ltn__gallery-item-img">
                        <a href="http://player.vimeo.com/video/49583118?version=3" data-rel="lightcase:myCollection">
                            <img src="{{asset("frontend/img/gallery/4.jpg")}}" alt="Image">
                            <span class="ltn__gallery-action-icon">
                                <i class="fab fa-vimeo-v"></i>
                            </span>
                        </a>
                    </div>
                    <div class="ltn__gallery-item-info">
                        <h4><a href="portfolio-details.html">Vimeo Video </a></h4>
                        <p>Web Design & Development, Branding</p>
                    </div>
                </div>
            </div>
            <div class="ltn__gallery-item filter_category_2 col-md-4 col-sm-6 col-12">
                <div class="ltn__gallery-item-inner">
                    <div class="ltn__gallery-item-img">
                        <a href="media/1.mp4" data-rel="lightcase:myCollection">
                            <img src="{{asset("frontend/img/gallery/5.jpg")}}" alt="Image">
                            <span class="ltn__gallery-action-icon">
                                <i class="fas fa-video"></i>
                            </span>
                        </a>
                    </div>
                    <div class="ltn__gallery-item-info">
                        <h4><a href="portfolio-details.html">HTML5 Video </a></h4>
                        <p>Web Design & Development, Branding</p>
                    </div>
                </div>
            </div>
            <div class="ltn__gallery-item filter_category_1 col-md-4 col-sm-6 col-12">
                <div class="ltn__gallery-item-inner">
                    <div class="ltn__gallery-item-img">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1575.9076122223137!2d144.96590401578402!3d-37.81779982944919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b6af832249%3A0xe39e415e49a7c44e!2sFlinders%20Street%20Railway%20Station!5e0!3m2!1sen!2sbd!4v1598113544515!5m2!1sen!2sbd"
                            data-rel="lightcase:myCollection">
                            <img src="{{asset("frontend/img/gallery/6.jpg")}}" alt="Image">
                            <span class="ltn__gallery-action-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </span>
                        </a>
                    </div>
                    <div class="ltn__gallery-item-info">
                        <h4><a href="portfolio-details.html">Google Map </a></h4>
                        <p>Web Design & Development, Branding</p>
                    </div>
                </div>
            </div>
            <div class="ltn__gallery-item filter_category_3 col-md-4 col-sm-6 col-12">
                <div class="ltn__gallery-item-inner">
                    <div class="ltn__gallery-item-img">
                        <a href="{{asset("frontend/img/gallery/1.jpg")}}" data-rel="lightcase:myCollection"
                            data-bs-lc-caption="Your caption Here">
                            <img src="{{asset("frontend/img/gallery/7.jpg")}}" alt="Image">
                            <span class="ltn__gallery-action-icon">
                                <i class="fab fa-acquisitions-incorporated"></i>
                            </span>
                        </a>
                    </div>
                    <div class="ltn__gallery-item-info">
                        <h4><a href="portfolio-details.html">Image Caption </a></h4>
                        <p>Web Design & Development, Branding</p>
                    </div>
                </div>
            </div>
            <div class="ltn__gallery-item filter_category_2 col-md-4 col-sm-6 col-12">
                <div class="ltn__gallery-item-inner">
                    <div class="ltn__gallery-item-img">
                        <a href="{{asset("frontend/img/gallery/no-im")}}age.html" data-rel="lightcase:myCollection">
                            <img src="{{asset("frontend/img/gallery/8.jpg")}}" alt="Image">
                            <span class="ltn__gallery-action-icon">
                                <i class="fas fa-not-equal"></i>
                            </span>
                        </a>
                    </div>
                    <div class="ltn__gallery-item-info">
                        <h4><a href="portfolio-details.html">Not Found</a></h4>
                        <p>Web Design & Development, Branding</p>
                    </div>
                </div>
            </div>
            <div class="ltn__gallery-item filter_category_1 col-md-4 col-sm-6 col-12">
                <div class="ltn__gallery-item-inner">
                    <div class="ltn__gallery-item-img">
                        <a href="{{asset("frontend/img/gallery/1.jpg")}}" data-rel="lightcase:myCollection">
                            <img src="{{asset("frontend/img/gallery/9.jpg")}}" alt="Image">
                            <span class="ltn__gallery-action-icon">
                                <i class="fas fa-search"></i>
                            </span>
                        </a>
                    </div>
                    <div class="ltn__gallery-item-info">
                        <h4><a href="portfolio-details.html">Portfolio Link </a></h4>
                        <p>Web Design & Development, Branding</p>
                    </div>
                </div>
            </div>
            <div class="ltn__gallery-item filter_category_3 col-md-4 col-sm-6 col-12">
                <div class="ltn__gallery-item-inner">
                    <div class="ltn__gallery-item-img">
                        <a href="{{asset("frontend/img/gallery/1.jpg")}}" data-rel="lightcase:myCollection">
                            <img src="{{asset("frontend/img/gallery/10.jpg")}}" alt="Image">
                            <span class="ltn__gallery-action-icon">
                                <i class="fas fa-search"></i>
                            </span>
                        </a>
                    </div>
                    <div class="ltn__gallery-item-info">
                        <h4><a href="portfolio-details.html">Portfolio Link </a></h4>
                        <p>Web Design & Development, Branding</p>
                    </div>
                </div>
            </div>
            <div class="ltn__gallery-item filter_category_2 col-md-4 col-sm-6 col-12">
                <div class="ltn__gallery-item-inner">
                    <div class="ltn__gallery-item-img">
                        <a href="{{asset("frontend/img/gallery/1.jpg")}}" data-rel="lightcase:myCollection">
                            <img src="{{asset("frontend/img/gallery/1.jpg")}}" alt="Image">
                            <span class="ltn__gallery-action-icon">
                                <i class="fas fa-search"></i>
                            </span>
                        </a>
                    </div>
                    <div class="ltn__gallery-item-info">
                        <h4><a href="portfolio-details.html">Portfolio Link </a></h4>
                        <p>Web Design & Development, Branding</p>
                    </div>
                </div>
            </div>
            <div class="ltn__gallery-item filter_category_1 col-md-4 col-sm-6 col-12">
                <div class="ltn__gallery-item-inner">
                    <div class="ltn__gallery-item-img">
                        <a href="{{asset("frontend/img/gallery/1.jpg")}}" data-rel="lightcase:myCollection">
                            <img src="{{asset("frontend/img/gallery/2.jpg")}}" alt="Image">
                            <span class="ltn__gallery-action-icon">
                                <i class="fas fa-search"></i>
                            </span>
                        </a>
                    </div>
                    <div class="ltn__gallery-item-info">
                        <h4><a href="portfolio-details.html">Portfolio Link </a></h4>
                        <p>Web Design & Development, Branding</p>
                    </div>
                </div>
            </div> --}}

        </div>

        {{-- <div id="ltn__inline_description_1" style="display: none;">
            <h4 class="first">This content comes from a hidden element on that page</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et
                neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh
                adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi eleifend aliquam. Nunc enim
                ipsum, vehicula non pretium varius, cursus ac tortor.</p>
            <p>Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor in. Phasellus
                dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus sem, id aliquam diam varius
                ac. Maecenas nisl nunc, molestie vitae eleifend vel.</p>
        </div> --}}

        {{-- <div class="btn-wrapper text-center">
            <a href="#" class="btn btn-transparent btn-effect-1 btn-border">LOAD MORE +</a>
        </div> --}}

        <!-- pagination start -->
        <!-- 
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__pagination text-center margin-top-50">
                        <ul>
                            <li class="arrow-icon"><a href="#"> &leftarrow; </a></li>
                            <li class="active"><a href="blog.html">1</a></li>
                            <li><a href="blog-2.html">2</a></li>
                            <li><a href="blog-2.html">3</a></li>
                            <li><a href="blog-2.html">...</a></li>
                            <li><a href="blog-2.html">10</a></li>
                            <li class="arrow-icon"><a href="#"> &rightarrow; </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            -->
        <!-- pagination end -->

    </div>
</div>
<!-- Gallery area end -->

<!-- CALL TO ACTION START (call-to-action-4) -->
<div class="ltn__call-to-action-area ltn__call-to-action-4 bg-image pt-115 pb-120" data-bs-bg="{{asset("frontend/img/bg/6.jpg")}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-to-action-inner call-to-action-inner-4 text-center">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// any question you have //</h6>
                        <h1 class="section-title white-color">{{$contact_data->phone}}</h1>
                    </div>
                    <div class="btn-wrapper">
                        <a href="tel:{{$contact_data->phone}}" class="theme-btn-1 btn btn-effect-1">MAKE A CALL</a>
                        <a href="{{route('contact.index')}}" class="btn btn-transparent btn-effect-3 white-color">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ltn__call-to-4-img-1">
        <!-- <img src="img/bg/12.png" alt="#"> -->
        <img src="{{asset("frontend/img/slider/21.png")}}" alt="#">
    </div>
    <div class="ltn__call-to-4-img-2">
        <img src="{{asset("frontend/img/slider/11.jpg")}}" alt="#">
    </div>
</div>
<!-- CALL TO ACTION END -->

<!-- BRAND LOGO AREA START -->
<div class="ltn__brand-logo-area ltn__brand-logo-1 pt-80 pb-110 plr--9">
    <div class="container-fluid">
        <div class="row ltn__brand-logo-active">
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{asset("frontend/img/brand-logo/1.png")}}" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{asset("frontend/img/brand-logo/2.png")}}" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{asset("frontend/img/brand-logo/3.png")}}" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{asset("frontend/img/brand-logo/4.png")}}" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{asset("frontend/img/brand-logo/5.png")}}" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{asset("frontend/img/brand-logo/3.png")}}" alt="Brand Logo">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BRAND LOGO AREA END -->

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
                        <a class="btn btn-effect-3 btn-white" href="{{route('contact.index')}}">Contact Us <i
                                class="icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CALL TO ACTION END -->
@endsection