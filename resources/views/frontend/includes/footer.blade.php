<footer class="ltn__footer-area  ">
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
</footer>