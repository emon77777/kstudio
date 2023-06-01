@extends('backend.layout.master')

@section('content')
<div class="content-wrapper" style="min-height: 2080.12px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Portfolio Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Category</a></li>
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
                  <h3 class="card-title">All Categories</h3>
                  <a href="{{ route('admin.category.create')}}" class="btn btn-primary btn-sm ml-auto">Create</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-sm table-bordered">
                          <thead>
                            <tr>
                              <th style="width: 10px">#</th>
                              <th class="col-4">Name</th>
                              <th class="col-4">Status</th>
                              <th class="col-4">Action</th>
                            </tr>
                          </thead>
                          <tbody id="all-category">
                            {{-- category data from ajax --}}
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

    {{-- Delete Category Modal --}}
    <div class="modal fade" id="category-delete" style="display: none;" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Confirm Delete</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Are you sure to delete this category!</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            
            <button type="submit" class="btn btn-danger" id="category-delete-modal-btn" value="">Delete</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    {{-- Edit Category Modal --}}
    <div class="modal fade" id="category-edit" style="display: none;" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Category</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="category-edit-name">Categoy Name</label>
                    <input type="text" class="form-control form-control-sm" name="name" id="category-edit-name" placeholder="Enter category name" value="">
                    <div class="text-danger py-0 px-1 mb-1" id="category-edit-name-error">
                        
                    </div>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="category-edit-status">Status</label>
                    <select name="status" id="category-edit-status" class="form-control form-control-sm">
                        <option value="">--Select Status--</option>
                        <option value="0">Inactive</option>
                        <option value="1">Active</option>
                    </select>
                    <div class=" text-danger py-0 px-1 mb-1" id="category-edit-status-error">
                        
                    </div>
                    
                </div>
            </div>
            
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        
            <button type="button" class="btn btn-primary" id="category-update-btn">Update</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  </div>



@endsection