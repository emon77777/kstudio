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
              <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Category</a></li>
              <li class="breadcrumb-item active">Add</li>
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
                <h3 class="card-title">Add Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('admin.category.store') }}" method="post">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-4">
                        <label for="name">Categoy Name</label>
                        <input type="text" class="form-control form-control-sm" name="name" id="name" placeholder="Enter category name" value="">
                        @error('name')
                        <div class="text-danger py-0 px-1 mb-1" role="alert">
                            Email field cannot be empty!
                        </div>
                        @enderror
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control form-control-sm">
                            <option value="">--Select Status--</option>
                            <option value="0">Inactive</option>
                            <option value="1">Active</option>
                        </select>
                        @error('status')
                        <div class=" text-danger py-0 px-1 mb-1">
                            Please select category status
                        </div>
                        @enderror
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
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