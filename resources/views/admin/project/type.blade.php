@extends('layouts.master')
@section('pageTitle', 'Property Types')
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
              <h4>Property Types

                <button class="btn btn-success btn-xs float-right" data-toggle="modal" data-target="#addSession">Add New <i class="fa fa-plus fa-fw"></i></button>
              </h4>

              <div class="modal fade mt-5" id="addSession" tabindex="-1" role="dialog" aria-labelledby="addSessionLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="addCourseLabel">Add Property Type</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <form method="POST" action="{{ url('admin/property/type') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="modal-body">
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="name" class="form-control" required="">
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
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($types as $type)
                    <tr>
                      <td>{{ $type->name }}</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#editSession{{ $type->id }}">
                          Edit <i class="fa fa-edit text-blue"></i>
                        </a>
                        
                        |

                        <a href="#" onclick="event.preventDefault(); document.getElementById('delete{{ $type->id }}').submit();" class="text-red">
                          Delete <i class="fa fa-trash text-red"></i>
                        </a>

                        <form id="delete{{ $type->id }}" action="{{ url('admin/property/type') }}/{{ $type->id }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                          {{ Method_field('DELETE') }}
                        </form>  
                      </td>
                    </tr> 

                    <div class="modal fade mt-5" id="editSession{{ $type->id }}" tabindex="-1" role="dialog" aria-labelledby="editSession{{ $type->id }}Label" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="addCourseLabel">Edit type</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          <form method="POST" action="{{ url('admin/property/type') }}/{{ $type->id }}">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="modal-body">
                              <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $type->name }}" required="">
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
