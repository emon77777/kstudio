<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a {{ url('/') }}><img src="{{asset("frontend/img/logo.png")}}" alt="Logo"></a>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="ltn__utilize-menu">
            <ul>
                <li><a href="{{route("index")}}">Home</a>
                </li>
                <li><a href="{{route("about.index")}}">About</a>
                </li>
                <li><a href="{{route("service.index")}}">Service</a>
                    <ul class="sub-menu">
                        <li><a href="{{route("service.show", "1")}}">Servie Details</a></li>
                    </ul>
                </li>
                <li><a href="{{route("portfolio.index")}}">Portfolio</a>
                    <ul class="sub-menu">
                        <li><a href="{{route("portfolio.show", "1")}}">News</a></li>
                    </ul>
                </li>
                <li><a href="{{route("contact.index")}}">Contact</a></li>
            </ul>
        </div>
        <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
            <ul>
                <li>
                    <a href="account.html" title="My Account">
                        <span class="utilize-btn-icon">
                            <i class="far fa-user"></i>
                        </span>
                        My Account
                    </a>
                </li>
            </ul>
        </div>
        <div class="ltn__social-media-2">
            <ul>
                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<div class="ltn__utilize-overlay"></div>