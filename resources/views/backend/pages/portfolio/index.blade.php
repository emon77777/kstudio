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
                            @foreach ($portfolio_data as $each_portfolio)
                            <tr>
                              <td></td>
                              <td>{{$each_portfolio['title']}}</td>
                              <td>{{$each_portfolio['subtitle']}}</td>
                              <td>{{$each_portfolio->category->name}}</td>
                              <td><img src="{{ asset('storage/'.$each_portfolio['image'])}}" alt="portfolio image" height="80"></td>
                              <td><a href="{{route('admin.portfolio.edit', $each_portfolio['id'])}}">Edit</a>|Delete</td>
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

    {{-- Portfolio Add Modal --}}
    <div class="modal fade" id="portfolio-add-modal" style="display: none;" aria-hidden="true">
      <div class="modal-dialog" style="max-width:700px">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Add New Portfolio</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="portfolio-form-data" enctype="multipart/form-data">
              <div class="row">
                
                  <div class="col-4">
                    <div class="form-group">
                      <label for="portfolio-title">Title</label>
                      <input type="text" class="form-control form-control-sm" id="portfolio-title" name="title">
                      <div class="text-danger py-0 px-1 mb-1" id="portfolio-title-error">
                          
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="portfolio-sub-title">Sub-title</label>
                      <input type="text" class="form-control form-control-sm" id="portfolio-sub-title" name="subTitle">
                      <div class="text-danger py-0 px-1 mb-1" id="portfolio-subtitle-error">
                          
                      </div>
                  </div></div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="portfolio-category">Category</label>
                      <select name="category" id="portfolio-category" class="form-control form-control-sm">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name}}</option>
                        @endforeach
                      </select>
                      <div class="text-danger py-0 px-1 mb-1" id="portfolio-category-error">
                          
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="portfolio-description">Description</label>
                      <textarea name="description" id="portfolio-description" cols="30" rows="3" class="form-control form-control-sm"></textarea>
                      <div class="text-danger py-0 px-1 mb-1" id="portfolio-description-error">
                          
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="portfolio-img">Image</label>
                      <input type="file" class="form-control-file" id="portfolio-img" name="image">
                      <div class="text-danger py-0 px-1 mb-1" id="portfolio-image-error">
                          
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group" id="menu-container">
                      <label for="portfolio-menu">Menu</label>
                      <div class="d-flex mb-2">
                        <input type="text" class="form-control form-control-sm portfolio-menu" id="portfolio-menu" name="menu[]">
                        <span class="btn btn-success btn-sm ml-2" id="add-menu"><i class="fas fa-plus"></i></span><br>
                      </div>
                      <div class="text-danger py-0 px-1 mb-1" id="portfolio-menu-error">
                          
                      </div>
                    </div>
                  </div>
                
              </div>
            
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" id="portfolio-save">Save</button>
          </div>
        </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>


    {{-- Portfolio Edit Modal --}}
    <div class="modal fade" id="portfolio-edit-modal" style="display: none;" aria-hidden="true">
      <div class="modal-dialog" style="max-width:700px">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Portfolio</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="portfolio-edit-form" method="post" enctype="multipart/form-data">
              @method('PUT')
              <div class="row">
                
                  <div class="col-4">
                    <div class="form-group">
                      <label for="portfolio-edit-title">Title</label>
                      <input type="text" class="form-control form-control-sm" id="portfolio-edit-title" name="title">
                      <div class="text-danger py-0 px-1 mb-1" id="portfolio-edit-title-error">
                          
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="portfolio-edit-sub-title">Sub-title</label>
                      <input type="text" class="form-control form-control-sm" id="portfolio-edit-sub-title" name="subTitle">
                      <div class="text-danger py-0 px-1 mb-1" id="portfolio-edit-subtitle-error">
                          
                      </div>
                  </div></div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="portfolio-edit-category">Category</label>
                      <select name="category" id="portfolio-edit-category" class="form-control form-control-sm">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name}}</option>
                        @endforeach
                      </select>
                      <div class="text-danger py-0 px-1 mb-1" id="portfolio-edit-category-error">
                          
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="portfolio-edit-description">Description</label>
                      <textarea name="description" id="portfolio-edit-description" cols="30" rows="3" class="form-control form-control-sm"></textarea>
                      <div class="text-danger py-0 px-1 mb-1" id="portfolio-edit-description-error">
                          
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="portfolio-edit-img">Image</label>
                      <input type="file" class="form-control-file" id="portfolio-edit-img" name="image">
                      <div class="text-danger py-0 px-1 mb-1" id="portfolio-edit-image-error">
                          
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group" id="edit-menu-container">
                      <label for="portfolio-edit-menu">Menu</label>
                      <div class="d-flex mb-2">
                        <input type="text" class="form-control form-control-sm portfolio-edit-menu" id="portfolio-edit-menu" name="menu[]">
                        <span class="btn btn-success btn-sm ml-2" id="add-edit-menu"><i class="fas fa-plus"></i></span><br>
                      </div>
                      <div class="text-danger py-0 px-1 mb-1" id="portfolio-edit-menu-error">
                          
                      </div>
                    </div>
                  </div>
                
              </div>
            
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" id="portfolio-update-btn">Update</button>
          </div>
        </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    {{-- Contact Delete Modal --}}
    <div class="modal fade" id="portfolio-delete-modal" style="display: none;" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Confirm Delete</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Are you sure to delete this contact!</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <form id="deleteContact" action="" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" id="portfolio-delete-modal-btn">Delete</button>
            </form>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  </div>



@endsection