@extends('backend.layout.master')

@section('content')
<div class="content-wrapper" style="min-height: 2080.12px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Your Contacts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Contact</a></li>
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
              <div class="card-header">
                <h3 class="card-title">Contacts</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 10px">#</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th style="">Address</th>
                            <th colspan="2">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                              $sl = 1;
                          @endphp
                          
                          <tr>
                            <td>{{ $sl++ }}</td>
                            <td>
                              @foreach(json_decode($contact->email) as $email)
                              <div>
                                {{ $email }}
                              </div>
                              @endforeach
                            </td>
                            <td>
                              @foreach(json_decode($contact->phone) as $phone)
                              <div>
                                {{ $phone }}
                              </div>
                              @endforeach
                            </td>
                            <td>{{ $contact->address }}</td>
                            <td class="text-center"><a href="{{route('admin.contact.edit', $contact->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a></td>
                            {{-- <td class="text-center"><button type="button" data-toggle="modal" data-target="#contact-delete" class="btn btn-danger btn-sm contact-del-btn" value="{{ $contact->id }}"><i class="fas fa-trash"></i></button></td> --}}
                          </tr>
                          
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

    {{-- Contact Delete Modal --}}
    <div class="modal fade" id="contact-delete" style="display: none;" aria-hidden="true">
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
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  </div>
  
@endsection