@extends('backend.layout.master')

@section('content')
    <div class="content-wrapper" style="min-height: 1345.31px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Contact</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">About</a></li>
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
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit About</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="{{ route('admin.about.update', $about_info->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6 email-container">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control" name="image" id="image">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="old_image">Old Image</label>
                                            <br>

                                            @if ($about_info['image'])
                                                <img id="old_image" style="max-height:100px;" src="{{ asset('storage/' . $about_info['image']) }}"
                                                    alt="{{ $about_info['text'] }}"/>
                                            @else
                                                <img id="old_image" style="max-height:100px;" src="{{ asset('front/images/business_post_img.png') }}"
                                                    alt="List Image">
                                            @endif

                                        </div>

                                        <div class="form-group col-12">
                                            <label for="text">Text</label>
                                            @if ($errors->first('text'))
                                                <div class=" text-danger py-0 px-1 mb-1">
                                                    Please enter valid Text
                                                </div>
                                            @endif
                                            <input type="text" class="form-control" name="text" id="text" placeholder="Enter text" value="{{ $about_info->text }}">
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="detail">Detail</label>
                                            @if ($errors->first('detail'))
                                                <div class="text-danger py-0 px-1 mb-1">
                                                    Detail field cannot be empty
                                                </div>
                                            @endif
                                            <textarea class="form-control" id="detail" rows="5" name="detail">{{ $about_info->detail }}</textarea>
                                        </div>
                                        
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
