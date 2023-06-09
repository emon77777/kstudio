@extends('backend.layout.master')

@section('content')
    <div class="content-wrapper" style="min-height: 2080.12px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Portfolio</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Portfolios</li>
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
                    <div class="col">
                        <div class="card">
                            <div class="card-header d-flex">
                                <h3 class="card-title">Edit Portfolio Data</h3>
                            </div>
                            <form id="portfolio-form-data" action="{{ route('admin.portfolio.update', $portfolio_data->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">                                  
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="portfolio-title">Title</label>
                                                @if ($errors->first('title'))
                                                <div class=" text-danger py-0 px-1 mb-1">
                                                    Please enter valid title
                                                </div>
                                                @endif
                                                <input type="text" class="form-control" id="portfolio-title" name="title" placeholder="Enter Title" value="{{$portfolio_data->title}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="portfolio-sub-title">Sub-title</label>
                                                @if ($errors->first('subTitle'))
                                                <div class=" text-danger py-0 px-1 mb-1">
                                                    Please enter valid subtitle
                                                </div>
                                                @endif
                                                <input type="text" class="form-control" id="portfolio-sub-title" name="subTitle" placeholder="Enter Subtitle" value="{{$portfolio_data->subtitle}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="portfolio-category">Category</label>
                                                @if ($errors->first('category'))
                                                <div class=" text-danger py-0 px-1 mb-1">
                                                    Please enter valid category
                                                </div>
                                                @endif
                                                <select name="category" id="portfolio-category" class="form-control">
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{$portfolio_data->category->id==$category->id?'selected':''}}>{{ $category->name}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="portfolio-img">Image</label>
                                                @if ($errors->first('image'))
                                                <div class=" text-danger py-0 px-1 mb-1">
                                                    Please enter valid image
                                                </div>
                                                @endif
                                                <input type="file" class="form-control" id="portfolio-img" name="image">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="old_image">Old Image</label>
                                          <br>

                                          @if ($portfolio_data['image'])
                                              <img id="old_image" style="max-height:100px;"
                                                  src="{{ asset('storage/' . $portfolio_data['image']) }}"
                                                  alt="portfolio image" />
                                          @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" id="portfolio-update">Update</button>
                                </div>
                            </div>
                          </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        
    </div>


@endsection