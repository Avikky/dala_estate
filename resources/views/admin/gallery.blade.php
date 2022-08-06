@extends('layouts.master')
@section('pageTitle', 'Gallery')
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
              <h4>All Gallery

                <button class="btn btn-success btn-xs float-right" data-toggle="modal" data-target="#addSession">Add New <i class="fa fa-plus fa-fw"></i></button>
              </h4>

              <div class="modal fade mt-5" id="addSession" tabindex="-1" role="dialog" aria-labelledby="addSessionLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="addCourseLabel">Add Gallery</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" class="profile-wrapper" enctype="multipart/form-data" action="{{ url('admin/gallery') }}" >
                          {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label for="fname">Title</label>                     
                                <input class="form-control" type="text" name="name" required autofocus>
                            </div> 
                            <div class="form-group">
                                <label for="fname">Image</label>
                                <input class="form-control" type="file" name="image" required autofocus>  
                            </div> 
                            <div class="form-group mb-3">
                              <label for="descp">Description</label>
                              <textarea class="form-control" name="description" id="" cols="30" rows="3"></textarea>
                            </div> 

                            <button type="submit" class="btn btn-success pull-right">Add <i class="fa fa-save"></i></button>                              
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Featured Image</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($galleries as $gallery)
                      <tr>
                        <td>{{ $gallery->name }}</td>
                        <td>{{ $gallery->description }}</td>
                        <th><img class="img-thumbnail" src="{{ asset('storage/'.$gallery->file_path) }}" width="70px"></th>
                        <td>
                          <form action="{{ route('g.delete', ['id' => $gallery->id] ) }}" method="POST">
                            {{ csrf_field() }}
                            {{ Method_field('DELETE') }}
                              <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                          </form>
                        </td>
                      </tr>
                      @empty
                      @endforelse
                    </tbody>                     
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

    @endsection
