@extends('backend.layout.master')

@section('content')
<div class="content-wrapper" style="min-height: 2080.12px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Your Portfolio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Portfolio</a></li>
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
                  <h3 class="card-title">Portfolios</h3>
                  <a href="{{route('admin.portfolio.create')}}" class="btn btn-primary btn-sm ml-auto">Create</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-sm table-bordered">
                          <thead>
                            <tr>
                              <th style="width: 10px">#</th>
                              <th>Title</th>
                              <th>Sub-title</th>
                              <th>Category</th>
                              <th>Image</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php
                                $sl = 1;
                            @endphp
                            @foreach ($portfolio_data as $each_portfolio)
                            <tr>
                              <td>{{ $sl++ }}</td>
                              <td>{{ $each_portfolio['title'] }}</td>
                              <td>{{ $each_portfolio['subtitle'] }}</td>
                              <td>{{ $each_portfolio->category->name }}</td>
                              <td><img src="{{ asset('storage/'.$each_portfolio['image'])}}" alt="portfolio image" height="80"></td>
                              <td><a href="{{ route('admin.portfolio.edit', $each_portfolio['id']) }}">Edit</a>|Delete</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                  </div>
                </div>
               
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