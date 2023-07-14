@extends('backend.layout.master')

@section('content')
<div class="content-wrapper" style="min-height: 2080.12px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact Mails</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Contact Mail</a></li>
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
                  <h3 class="card-title">Mails</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-sm table-bordered">
                          <thead>
                            <tr>
                              <th style="width: 10px">#</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Subject</th>
                              <th class="col-3">Message</th>
                              {{-- <th>Action</th> --}}
                            </tr>
                          </thead>
                          <tbody>
                            @php
                                $sl = 1;
                            @endphp
                            @foreach ($contact_mail_data as $each_mail)
                            <tr>
                              <td>{{ $sl++ }}</td>
                              <td>{{ $each_mail['name'] }}</td>
                              <td>{{ $each_mail['email'] }}</td>
                              <td>{{ $each_mail['phone'] }}</td>
                              <td>{{ $each_mail['subject']}}</td>
                              <td>{{ $each_mail['message']}}</td>
                              {{-- <td>Delete</td> --}}
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