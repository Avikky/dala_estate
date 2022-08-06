@extends('layouts.master')
@section('pageTitle', 'Testimonial')
@section('content')

<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card mt-3">
          @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong>{{ $message }}</strong>
            </div>
          @endif

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Error!</strong>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <div class="card-body">
            <div class="p-3">
              <h4>Testimonial

                <button class="btn btn-success btn-xs float-right" data-toggle="modal" data-target="#addSession">Add New <i class="fa fa-plus fa-fw"></i></button>
              </h4>

              <div class="modal fade mt-5" id="addSession" tabindex="-1" role="dialog" aria-labelledby="addSessionLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="addCourseLabel">Add Tesitmony</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <form method="POST" action="{{ url('admin/testimonial') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="modal-body">
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="name" class="form-control" required="">
                        </div>

                        <div class="form-group">
                          <label>Post</label>
                          <input type="text" name="post" class="form-control">
                        </div>

                        <div class="form-group">
                          <label>Message</label>
                          <textarea name="description" class="form-control"></textarea>
                        </div>


                        <div class="form-group">
                          <label>Upload Featured Image</label>
                          <input type="file" name="image" class="form-control" required>
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="table-responsive p-2">
              <table class="table table-hover" id="example2">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Post</th>
                    <th>Message</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($testimonials as $testimonial)
                    <tr>
                      <td>{{ $testimonial->name }}</td>
                      <td>{{ $testimonial->post }}</td>
                      <td>{{ $testimonial->description }}</td>
                      <td>
                          <img src="{{ asset('storage') }}/{{ $testimonial->image }}" style="height: 80px; width: 120px">
                      </td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#editSession{{ $testimonial->id }}">
                          Edit <i class="fa fa-edit text-blue"></i>
                        </a>
                        
                        |

                        <a href="#" onclick="event.preventDefault(); document.getElementById('delete{{ $testimonial->id }}').submit();" class="text-red">
                          Delete <i class="fa fa-trash text-red"></i>
                        </a>

                        <form id="delete{{ $testimonial->id }}" action="{{ url('admin/testimonial') }}/{{ $testimonial->id }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                          {{ Method_field('DELETE') }}
                        </form>  
                      </td>
                    </tr> 

                    <div class="modal fade mt-5" id="editSession{{ $testimonial->id }}" tabindex="-1" role="dialog" aria-labelledby="editSession{{ $testimonial->id }}Label" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="addCourseLabel">Edit Testimonial</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          <form method="POST" action="{{ url('admin/offers') }}/{{ $testimonial->id }}">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="modal-body">
                              <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $testimonial->name }}">
                              </div>

                              <div class="form-group">
                                <label>Post</label>
                                <input type="text" name="post" class="form-control" value="{{ $testimonial->post }}">
                              </div>


                              <div class="form-group">
                                <label>Message</label>
                                <textarea name="description" class="form-control">{{ $testimonial->description }}</textarea>
                              </div>


                              <div class="form-group">
                                <label>Upload Featured Image</label>
                                <input type="file" name="image" class="form-control">
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  @empty
                  @endforelse 
                </tbody>                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
