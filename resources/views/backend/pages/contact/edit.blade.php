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
              <li class="breadcrumb-item"><a href="#">Contacts</a></li>
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
                <h3 class="card-title">Edit Contact</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admin.contact.update', $contact->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-4 email-container">
                      <label for="">Email</label>
                      @if($errors->first('email.*'))
                      <div class="text-danger py-0 px-1 mb-1" role="alert">
                        Email field cannot be empty!
                      </div>
                      @endif
                      <input type="email" class="form-control form-control-sm" name="email" placeholder="Enter email" value="{{ $contact->email }}">
                    </div>
                    
                    <div class="form-group col-md-4 phone-container">
                      <label for="phone">Phone</label>
                      @if($errors->first('phone.*'))
                      <div class=" text-danger py-0 px-1 mb-1">
                        Please enter valid phone
                      </div>
                      @endif
                      <input type="text" class="form-control form-control-sm" name="phone" id="phone" placeholder="Enter phone" value="{{ $contact->phone }}">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="address">Address</label>
                      @if($errors->first('address'))
                      <div class="text-danger py-0 px-1 mb-1">
                        Address field cannot be empty
                      </div>
                      @endif
                      <input type="text" class="form-control form-control-sm" name="address" id="address" placeholder="Enter address" value="{{ $contact->address }}">
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