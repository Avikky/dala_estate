@extends('layouts.master')
@section('pageTitle', 'Services')
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
              <h4>Services

                <button class="btn btn-success btn-xs float-right" data-toggle="modal" data-target="#addSession">Add New <i class="fa fa-plus fa-fw"></i></button>
              </h4>

              <div class="modal fade mt-5" id="addSession" tabindex="-1" role="dialog" aria-labelledby="addSessionLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="addCourseLabel">Add Service</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <form method="POST" action="{{ url('admin/services') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="modal-body">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" name="name" class="form-control">
                        </div>


                        <div class="form-group">
                          <label>Description</label>
                          <textarea name="description" class="form-control" id="editorabout"></textarea>
                          <script>
                              // Replace the <textarea id="editor1"> with a CKEditor
                              // instance, using default configuration.
                              CKEDITOR.replace( 'editorabout' );
                          </script>
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
                    <th>Title</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($services as $service)
                    <tr>
                      <td>{{ $service->name }}</td>
                      
                      <td>
                        <a href="{{ asset('storage') }}/{{ $service->image }}" target="_blank" class="text-blue">
                          <img src="{{ asset('storage') }}/{{ $service->image }}" style="height: 80px; width: 120px">
                        </a>
                      </td>
                      <td>
                        <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#editSession{{ $service->id }}">
                          <i class="fa fa-edit"></i>
                        </a>

                        <a class="btn btn-danger btn-sm" href="#" onclick="event.preventDefault(); document.getElementById('delete{{ $service->id }}').submit();" class="text-red">
                          <i class="fa fa-trash"></i>
                        </a>

                        <form id="delete{{ $service->id }}" action="{{ url('admin/services') }}/{{ $service->id }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                          {{ Method_field('DELETE') }}
                        </form>  
                      </td>
                    </tr> 

                    <div class="modal fade mt-5" id="editSession{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="editSession{{ $service->id }}Label" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="addCourseLabel">Edit Solution</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          <form method="POST" action="{{ url('admin/services') }}/{{ $service->id }}" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="modal-body">
                              <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="name" class="form-control" value="{{ $service->name }}">
                              </div>


                              <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" id="editor{{ $service->id }}">{{ $service->description }}</textarea>
                                <script>
                                    // Replace the <textarea id="editor1"> with a CKEditor
                                    // instance, using default configuration.
                                    CKEDITOR.replace( 'editor{{ $service->id }}' );
                                </script>
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
