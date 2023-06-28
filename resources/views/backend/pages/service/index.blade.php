@extends('backend.layout.master')

@section('content')
    <div class="content-wrapper" style="min-height: 2080.12px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Core Services</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Service</a></li>
                            <li class="breadcrumb-item active">Show</li>
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
                                <h3 class="card-title">All Services</h3>
                                <a href="{{ route('admin.service.create') }}"
                                    class="btn btn-primary btn-sm ml-auto">Create</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th class="col-4">Icon</th>
                                                <th class="col-4">Title</th>
                                                <th class="col-4">Detail</th>
                                                <th class="col-4">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="all-service">
                                            @foreach ($all_service as $key=>$each_service)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $each_service['icon'] }}</td>
                                                    <td>{{ $each_service['title'] }}</td>
                                                    <td>{{ $each_service['detail'] }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.service.edit', $each_service->id)}}">Edit</a> | Delete
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

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
