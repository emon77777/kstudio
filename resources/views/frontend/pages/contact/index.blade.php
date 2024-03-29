@extends('frontend.layout.master')

@section('content')

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="{{asset('storage/' . $setting_data['contact_banner'])}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Contact Us</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ url('/') }}"><span class="ltn__secondary-color"><i
                                            class="fas fa-home"></i></span> Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- CONTACT ADDRESS AREA START -->
<div class="ltn__contact-address-area mb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="{{asset("frontend/img/icons/10.png")}}" alt="Icon Image">
                    </div>
                    <h3>Email Address</h3>
                    <p>{{$contact_data->email}}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="{{asset("frontend/img/icons/11.png")}}" alt="Icon Image">
                    </div>
                    <h3>Phone Number</h3>
                    <p>{{$contact_data->phone}}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="{{asset("frontend/img/icons/12.png")}}" alt="Icon Image">
                    </div>
                    <h3>Office Address</h3>
                    <p>{{$contact_data->address}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTACT ADDRESS AREA END -->

<!-- CONTACT MESSAGE AREA START -->
<div class="ltn__contact-message-area mb-120 mb--100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__form-box contact-form-box box-shadow white-bg">
                    <h4 class="title-2">Get A Quote</h4>
                    <form id="contact-form" action="{{ route('contact.store') }}"
                        method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                @error('name')
                                    <div class=" text-danger py-0 px-1 mb-1">
                                        Please enter valid name
                                    </div>
                                @enderror
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="name" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                @error('email')
                                    <div class=" text-danger py-0 px-1 mb-1">
                                        Please enter valid email
                                    </div>
                                @enderror
                                <div class="input-item input-item-email ltn__custom-icon">
                                    <input type="email" name="email" placeholder="Enter email address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                @error('phone')
                                    <div class=" text-danger py-0 px-1 mb-1">
                                        Please enter valid phone
                                    </div>
                                @enderror
                                <div class="input-item input-item-phone ltn__custom-icon">
                                    <input type="text" name="phone" placeholder="Enter phone number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                @error('subject')
                                <div class=" text-danger py-0 px-1 mb-1">
                                    Please enter valid subject
                                </div>
                                @enderror
                                <div class="input-item input-item-phone ltn__custom-icon">
                                    <input type="text" name="subject" placeholder="Enter Topic Name">
                                </div>
                            </div>
                        </div>
                        <div>
                            @error('message')
                            <div class=" text-danger py-0 px-1 mb-1">
                                Please enter valid message
                            </div>
                            @enderror
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea name="message" placeholder="Enter message"></textarea>
                            </div>
                        </div>
                        {{-- <p><label class="input-info-save mb-0"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label></p> --}}
                        <div class="btn-wrapper mt-0 text-center">
                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit</button>
                        </div>
                        <p class="form-messege mb-0 mt-20"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTACT MESSAGE AREA END -->

<!-- GOOGLE MAP AREA START -->
<div class="google-map mb-120">

    <iframe
        src="{{ $contact_data->map }}" width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>
<!-- GOOGLE MAP AREA END -->

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