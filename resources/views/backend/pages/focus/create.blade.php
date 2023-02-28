@extends('backend.layout.master')

@section('content')
    <div class="content-wrapper" style="min-height: 2080.12px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Our Focus</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Service</li>
                            <li class="breadcrumb-item"><a href="#">Our Focus</a></li>
                            <li class="breadcrumb-item active">Create</li>
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
                                <h3 class="card-title">Create Focus Data</h3>
                            </div>
                            <form role="form" action="{{ route('admin.focus.store') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6 email-container">
                                            <label for="icon">Icon</label>
                                            @if ($errors->first('icon'))
                                                <div class=" text-danger py-0 px-1 mb-1">
                                                    Please enter valid Icon
                                                </div>
                                            @endif
                                            <input type="text" required class="form-control" name="icon" id="icon" placeholder="Enter Icon">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="title">Title</label>
                                            @if ($errors->first('title'))
                                                <div class=" text-danger py-0 px-1 mb-1">
                                                    Please enter valid title
                                                </div>
                                            @endif
                                            <input type="text" required class="form-control" name="title" id="title" placeholder="Enter Title">
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="detail">Detail</label>
                                            @if ($errors->first('detail'))
                                                <div class="text-danger py-0 px-1 mb-1">
                                                    Detail field cannot be empty
                                                </div>
                                            @endif
                                            <textarea class="form-control" required id="detail" rows="5" name="detail"></textarea>
                                        </div>
                                        
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>

                        </div>
                        <div class="card">
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
