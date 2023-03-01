{{-- <footer class="ltn__footer-area  ">
    <div class="footer-top-area  section-bg-2 plr--5">
        <div class="container-fluid">
            <div class="row">
                <div class=" col-12">
                    <div class="footer-widget footer-about-widget">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-logo">
                                    <div class="site-logo">
                                        <img style="height: 60px;" src="{{asset("frontend/img/kstudio_logo.png")}}" alt="Logo">
                                    </div>
                                </div>
                                <p>{{ $footer_data->footer_short_text}}</p>
                            </div>
                            <div class="footer-address col-md-6">
                                <ul>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p>{{ $contact_data->address}}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-call"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="">{{ $contact_data->phone}}</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-mail"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="">{{ $contact_data->email}}</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__social-media mt-10">
                                <ul>
                                    <li><a href="{{ $footer_data->facebook }}" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $footer_data->twitter }}" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ $footer_data->linkedin }}" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="{{ $footer_data->youtube }}" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
        <div class="container-fluid ltn__border-top-2">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="ltn__copyright-design clearfix">
                        <p>All Rights Reserved @ Company <span class="current-year"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> --}}

<!-- FOOTER AREA START -->
<footer class="ltn__footer-area  ">
    <div class="footer-top-area  section-bg-2 plr--5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-about-widget">
                        <div class="footer-logo">
                            <div class="site-logo">
                                <img style="height: 60px;" src="{{asset("storage/".$setting_data->brand_logo)}}" alt="Logo">
                            </div>
                        </div>
                        <p>{{ $footer_data->footer_short_text}}</p>
                        <div class="footer-address">
                            <ul>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-placeholder"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p>{{ $contact_data->address}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-call"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p><a href="tel:+0123-456789">{{ $contact_data->phone}}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-mail"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p><a href="mailto:{{ $contact_data->email}}">{{ $contact_data->email}}</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="ltn__social-media mt-20">
                            <ul>
                                <li><a href="{{ $footer_data->facebook }}" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ $footer_data->twitter }}" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ $footer_data->linkedin }}" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="{{ $footer_data->youtube }}" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-menu-widget clearfix">
                        <h4 class="footer-title">Quick Links</h4>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="{{ route('about.index') }}">About</a></li>
                                <li><a href="#!">Blog</a></li>
                                <li><a href="#!">FAQ</a></li>
                                <li><a href="#!">Privacy & Policy</a></li>
                                <li><a href="#!">Terms & Conditions</a></li>
                                <li><a href="{{ route('contact.index') }}">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-menu-widget clearfix">
                        <h4 class="footer-title">Core Services</h4>
                        <div class="footer-menu">
                            <ul>
                                @foreach ($footer_service as $each)
                                    <li>{{ $each['title'] }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-menu-widget clearfix">
                        <h4 class="footer-title">Our Amenities</h4>
                        <div class="footer-menu">
                            <ul>
                                @foreach ($footer_amenity as $each)
                                    <li>{{ $each['title'] }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                    <div class="footer-widget footer-newsletter-widget">
                        {{-- <h4 class="footer-title">Map Location</h4> --}}
                        <iframe src="{{ $contact_data->map}}" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
        <div class="container-fluid ltn__border-top-2">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="ltn__copyright-design clearfix">
                        <p>All Rights Reserved @ KStudio <span class="current-year"></span></p>
                    </div>
                </div>
                <div class="col-md-6 col-12 align-self-center">
                    <div class="ltn__copyright-menu text-end">
                        <ul>
                            <li><a href="#!">Terms & Conditions</a></li>
                            <li><a href="#!">Claim</a></li>
                            <li><a href="#!">Privacy & Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER AREA END -->