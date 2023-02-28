@extends('backend.layout.master')

@section('content')
    <div class="content-wrapper" style="min-height: 1345.31px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>General Settings</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Settings</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col">
                        <!-- form start -->
                        <form role="form" action="{{ route('admin.setting.update', $setting_info->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Page Data Settings</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="brand_logo">Kstudio Logo</label>
                                            <input type="file" class="form-control" name="brand_logo"
                                                id="brand_logo">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="old_image">Old Image</label>
                                            <br>

                                            @if ($setting_info['brand_logo'])
                                                <img id="old_image" style="max-height:100px;"
                                                    src="{{ asset('storage/' . $setting_info['brand_logo']) }}"
                                                    alt="home background image" />
                                            @endif
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="home_back_image">Home Page Section Background Image</label>
                                            <input type="file" class="form-control" name="home_back_image"
                                                id="home_back_image">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="old_image">Old Image</label>
                                            <br>

                                            @if ($setting_info['home_back_image'])
                                                <img id="old_image" style="max-height:100px;"
                                                    src="{{ asset('storage/' . $setting_info['home_back_image']) }}"
                                                    alt="home background image" />
                                            @endif
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="home_video">HomePage Section Youtube Video Link</label>
                                            @if ($errors->first('home_video'))
                                                <div class="text-danger py-0 px-1 mb-1">
                                                    Please enter valid Link
                                                </div>
                                            @endif
                                            <input type="home_video" class="form-control" name="home_video" id="home_video"
                                                placeholder="Enter Link" value="{{ $setting_info->home_video }}">
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="footer_short_text">Footer Short</label>
                                            @if ($errors->first('footer_short_text'))
                                                <div class="text-danger py-0 px-1 mb-1">
                                                    Text field cannot be empty
                                                </div>
                                            @endif
                                            <textarea class="form-control" id="footer_short_text" rows="5" name="footer_short_text">{{ $setting_info->footer_short_text }}</textarea>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="facebook">Facebook Page Link</label>
                                            @if ($errors->first('facebook'))
                                                <div class="text-danger py-0 px-1 mb-1">
                                                    Please enter valid Link
                                                </div>
                                            @endif
                                            <input type="facebook" class="form-control" name="facebook" id="facebook"
                                                placeholder="Enter Link" value="{{ $setting_info->facebook }}">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="twitter">Twitter Page Link</label>
                                            @if ($errors->first('twitter'))
                                                <div class="text-danger py-0 px-1 mb-1">
                                                    Please enter valid Link
                                                </div>
                                            @endif
                                            <input type="twitter" class="form-control" name="twitter" id="twitter"
                                                placeholder="Enter Link" value="{{ $setting_info->twitter }}">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="linkedin">Linkedin Page Link</label>
                                            @if ($errors->first('linkedin'))
                                                <div class="text-danger py-0 px-1 mb-1">
                                                    Please enter valid Link
                                                </div>
                                            @endif
                                            <input type="linkedin" class="form-control" name="linkedin" id="linkedin"
                                                placeholder="Enter Link" value="{{ $setting_info->linkedin }}">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="youtube">Youtube Page Link</label>
                                            @if ($errors->first('youtube'))
                                                <div class="text-danger py-0 px-1 mb-1">
                                                    Please enter valid Link
                                                </div>
                                            @endif
                                            <input type="youtube" class="form-control" name="youtube" id="youtube"
                                                placeholder="Enter Link" value="{{ $setting_info->youtube }}">
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- /.card -->

                            <!-- Banner area elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Banner Settings</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="home_banner">Home Page Banner</label>
                                            <input type="file" class="form-control" name="home_banner"
                                                id="home_banner">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="old_image">Old Image</label>
                                            <br>
                                            @if ($setting_info['home_banner'])
                                                <img id="old_image" style="max-height:100px;"
                                                    src="{{ asset('storage/' . $setting_info['home_banner']) }}"
                                                    alt="home banner image" />
                                            @endif
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="about_banner">About Page Banner</label>
                                            <input type="file" class="form-control" name="about_banner"
                                                id="about_banner">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="old_image">Old Image</label>
                                            <br>
                                            @if ($setting_info['about_banner'])
                                                <img id="old_image" style="max-height:100px;"
                                                    src="{{ asset('storage/' . $setting_info['about_banner']) }}"
                                                    alt="About Page Banner image" />
                                            @endif
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="service_banner">Service Page Banner</label>
                                            <input type="file" class="form-control" name="service_banner"
                                                id="service_banner">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="old_image">Old Image</label>
                                            <br>
                                            @if ($setting_info['service_banner'])
                                                <img id="old_image" style="max-height:100px;"
                                                    src="{{ asset('storage/' . $setting_info['service_banner']) }}"
                                                    alt="Service Page Banner" />
                                            @endif
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="portfolio_banner">Portfolio Page Banner</label>
                                            <input type="file" class="form-control" name="portfolio_banner"
                                                id="portfolio_banner">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="old_image">Old Image</label>
                                            <br>
                                            @if ($setting_info['portfolio_banner'])
                                                <img id="old_image" style="max-height:100px;"
                                                    src="{{ asset('storage/' . $setting_info['portfolio_banner']) }}"
                                                    alt="Portfolio Page Banner" />
                                            @endif
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="contact_banner">Contact Page Banner</label>
                                            <input type="file" class="form-control" name="contact_banner"
                                                id="contact_banner">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="old_image">Old Image</label>
                                            <br>
                                            @if ($setting_info['contact_banner'])
                                                <img id="old_image" style="max-height:100px;"
                                                    src="{{ asset('storage/' . $setting_info['contact_banner']) }}"
                                                    alt="Contact Page Banner" />
                                            @endif
                                        </div>

                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Update</button>
                                </div>
                            </div>
                            <!-- /.card -->
                        </form>

                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
