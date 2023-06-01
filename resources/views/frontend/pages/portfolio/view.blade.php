@extends('frontend.layout.master')

@section('content')

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="{{asset("frontend/img/bg/14.jpg")}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Portfolio Details</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html"><span class="ltn__secondary-color"><i
                                            class="fas fa-home"></i></span> Home</a></li>
                            <li>Portfolio Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- PAGE DETAILS AREA START (portfolio-details) -->
<div class="ltn__page-details-area ltn__portfolio-details-area mb-105">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ltn__page-details-inner ltn__portfolio-details-inner">
                    <div class="ltn__blog-img">
                        <img src="{{asset("frontend/img/service/22.jpg")}}" alt="Image">
                    </div>
                    <p> <span class="ltn__first-letter">L</span>orem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exerc itation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                        unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                        eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos qui ratione. </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ltn__testimonial-item ltn__testimonial-item-3">
                                <div class="ltn__testimonial-img">
                                    <img src="{{asset("frontend/img/blog/7.jpg")}}" alt="Image">
                                </div>
                                <div class="ltn__testimoni-info">
                                    <p>Lorem ipsum dolor sit amet, conse
                                        ctetur adipisicing elit, sed do eius
                                        mod tempor incididunt ut labore
                                        et dolore magna aliqua. </p>
                                    <div class="ltn__testimoni-info-inner">
                                        <div class="ltn__testimoni-img">
                                            <img src="{{asset("frontend/img/testimonial/1.jpg")}}" alt="Image">
                                        </div>
                                        <div class="ltn__testimoni-name-designation">
                                            <h4>Jacob William</h4>
                                            <h6>Founder, Browni Co.</h6>
                                        </div>
                                    </div>
                                    <div class="ltn__testimoni-bg-icon">
                                        <i class="far fa-comments"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ltn__testimonial-item ltn__testimonial-item-3">
                                <div class="ltn__testimonial-img">
                                    <img src="{{asset("frontend/img/blog/8.jpg")}}" alt="Image">
                                </div>
                                <div class="ltn__testimoni-info">
                                    <p>Lorem ipsum dolor sit amet, conse
                                        ctetur adipisicing elit, sed do eius
                                        mod tempor incididunt ut labore
                                        et dolore magna aliqua. </p>
                                    <div class="ltn__testimoni-info-inner">
                                        <div class="ltn__testimoni-img">
                                            <img src="{{asset("frontend/img/testimonial/1.jpg")}}" alt="Image">
                                        </div>
                                        <div class="ltn__testimoni-name-designation">
                                            <h4>Jacob William</h4>
                                            <h6>Founder, Browni Co.</h6>
                                        </div>
                                    </div>
                                    <div class="ltn__testimoni-bg-icon">
                                        <i class="far fa-comments"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                        unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                        eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos qui ratione. </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{asset("frontend/img/service/33.jpg")}}" alt="Image">
                            <label>Image Caption</label>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{asset("frontend/img/service/34.jpg")}}" alt="Image">
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                        unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                        eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos qui ratione. </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident.</p>
                    <div class="ltn__service-list-menu text-uppercase mt-50 d-none">
                        <ul>
                            <li><i class="fas fa-car"></i> Front Brakes Repair <span class="service-price">$225.95
                                    <span>Plus Parts</span></span> </li>
                            <li><i class="fas fa-life-ring"></i> Rear Brakes Repair <span class="service-price">$225.95
                                    <span>Plus Parts</span></span> </li>
                            <li><i class="fas fa-cog"></i> Axle <span class="service-price">$225.95 <span>Plus
                                        Parts</span></span> </li>
                            <li><i class="fas fa-car"></i> Starters / Alternators <span class="service-price">$225.95
                                    <span>Plus Parts</span></span> </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area ltn__right-sidebar">
                    <!-- Menu Widget -->
                    <div class="widget-2 ltn__menu-widget ltn__menu-widget-2 text-uppercase">
                        <ul>
                            <li><a href="#">Property Management <span><i class="fas fa-arrow-right"></i></span></a></li>
                            <li class="active"><a href="#">Mortgage Service <span><i
                                            class="fas fa-arrow-right"></i></span></a></li>
                            <li><a href="#">Consulting Service <span><i class="fas fa-arrow-right"></i></span></a></li>
                            <li><a href="#">Home Buying <span><i class="fas fa-arrow-right"></i></span></a></li>
                            <li><a href="#">Home Selling <span><i class="fas fa-arrow-right"></i></span></a></li>
                            <li><a href="#">Escrow Services <span><i class="fas fa-arrow-right"></i></span></a></li>
                        </ul>
                    </div>
                    <!-- Newsletter Widget -->
                    <div class="widget ltn__search-widget ltn__newsletter-widget">
                        <h6 class="ltn__widget-sub-title">// subscribe</h6>
                        <h4 class="ltn__widget-title">Get Newsletter</h4>
                        <form action="#">
                            <input type="text" name="search" placeholder="Search">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <div class="ltn__newsletter-bg-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                    </div>
                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget">
                        <a href="shop.html"><img src="{{asset("frontend/img/banner/banner-2.jpg")}}"
                                alt="Banner Image"></a>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</div>
<!-- PAGE DETAILS AREA END -->

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
                        <a class="btn btn-effect-3 btn-white" href="contact.html">Contact Us <i
                                class="icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CALL TO ACTION END -->
@endsection