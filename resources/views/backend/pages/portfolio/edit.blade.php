@extends('backend.layout.master')

@section('content')

<div class="content-wrapper" style="min-height: 1345.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Category</a></li>
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
                <h3 class="card-title">Edit Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admin.portfolio.update', 1)}}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-4 category-container">
                      <label for="">Name</label>
                      @if($errors->first('name.*'))
                      <div class="text-danger py-0 px-1 mb-1" role="alert">
                        Name field cannot be empty!
                      </div>
                      @endif
                      @foreach($contact->email as $email)
                        @if ($loop->first)
                          <div class="d-flex mb-2 ">
                            <input type="email" class="form-control form-control-sm" name="email[]" placeholder="Enter email" value="{{ $email }}">
                            <button type="button" class="btn btn-success btn-sm " id="add-email-btn"><i class="fas fa-plus"></i></button>
                          </div>
                        @else
                        <div class="d-flex mb-2">
                          <input type="email" class="form-control form-control-sm" name="email[]" id="email" placeholder="Enter email" value="{{ $email }}">
                          <button type="button" class="btn btn-danger btn-sm remove-email-input" ><i class="fas fa-times"></i></button>
                        </div>
                        @endif
                      @endforeach
                    </div>
                    
                    <div class="form-group col-md-4 phone-container">
                      <label for="phone">Phone</label>
                      @if($errors->first('phone.*'))
                      <div class=" text-danger py-0 px-1 mb-1">
                        Please enter valid phone
                      </div>
                      @endif
                      @foreach($contact->phone as $phone)
                        @if($loop->first)
                          <div class="d-flex mb-2">
                            <input type="text" class="form-control form-control-sm" name="phone[]" id="phone" placeholder="Enter phone" value="{{ $phone }}">
                            <button type="button" class="btn btn-success btn-sm" id="add-phone-btn"><i class="fas fa-plus"></i></button>
                          </div>
                        @else
                          <div class="d-flex mb-2">
                            <input type="number" class="form-control form-control-sm" name="phone[]" id="phone" placeholder="Enter phone" value="{{ $phone }}">
                            <button type="button" class="btn btn-danger btn-sm remove-phone-input" ><i class="fas fa-times"></i></button>
                          </div>
                        @endif
                      @endforeach
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