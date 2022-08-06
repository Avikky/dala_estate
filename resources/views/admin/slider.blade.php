@extends('layouts.master')
@section('pageTitle', 'Slider Settings')
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
              <h4>Sliders

                <button class="btn btn-success btn-xs float-right" data-toggle="modal" data-target="#addSession">Add New <i class="fa fa-plus fa-fw"></i></button>
              </h4>
            </div>

            <div class="table-responsive p-2">
              <table class="table table-hover" id="example2">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th width="500px">Description</th>
                    <th>Image</th>
                    <th width="100px">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($sliders as $slider)
                    <tr>
                      <td>{{ $slider->title }}</td>
                      <td>{{ $slider->description }}</td>
                      
                      <td>
                        <a href="{{ asset('storage') }}/{{ $slider->image }}" target="_blank" class="text-blue">
                          <img src="{{ asset('storage') }}/{{ $slider->image }}" style="height: 80px; width: 120px">
                        </a>
                      </td>
                      <td>
                        <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#editSession{{ $slider->id }}">
                          <i class="fa fa-edit"></i>
                        </a>

                        <a class="btn btn-danger btn-sm" href="#" onclick="event.preventDefault(); document.getElementById('delete{{ $slider->id }}').submit();" class="text-red">
                          <i class="fa fa-trash"></i>
                        </a>

                        <form id="delete{{ $slider->id }}" action="{{ url('admin/slider') }}/{{ $slider->id }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                          {{ Method_field('DELETE') }}
                        </form>  
                      </td>
                    </tr> 

                    <div class="modal fade mt-5" id="editSession{{ $slider->id }}" tabindex="-1" role="dialog" aria-labelledby="editSession{{ $slider->id }}Label" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="addCourseLabel">Edit Slider</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          <form method="POST" action="{{ url('admin/slider') }}/{{ $slider->id }}" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="modal-body">
                              <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $slider->title }}">
                              </div>


                              <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control">{{ $slider->description }}</textarea>
                              </div>


                              <div class="form-group">
                                <label>Upload Slider Image</label>
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
     <div class="modal fade mt-5" id="addSession" tabindex="-1" role="dialog" aria-labelledby="addSessionLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="addCourseLabel">Add Slider</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <form method="POST" action="{{ url('admin/slider') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control">
                          </div>


                          <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                          </div>


                          <div class="form-group">
                            <label>Upload Slider Image</label>
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
@endsection
