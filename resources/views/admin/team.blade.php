@extends('layouts.master')
@section('pageTitle', 'Team')
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
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="board-tab" data-toggle="tab" href="#board" role="tab" aria-controls="board" aria-selected="true">Board of Directors</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="management-tab" data-toggle="tab" href="#management" role="tab" aria-controls="management" aria-selected="true">Management</a>
              </li>
            </ul>

            <div class="tab-content" id="myTabContent">

              <div class="tab-pane fade show active" id="board" role="tabpanel" aria-labelledby="board-tab">
                <div class="p-3">
                  <h4>Board of Directors
                  <button class="btn btn-success btn-xs float-right" data-toggle="modal" data-target="#addBoard">Add New <i class="fa fa-plus fa-fw"></i></button></h4>
                </div>

                <div class="modal fade mt-5" id="addBoard" tabindex="-1" role="dialog" aria-labelledby="addBoardLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="addBoardLabel">Add Board</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <form method="POST" action="{{ url('admin/team/board') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                          <div class="form-group">
                            <label> Name </label>
                            <input type="text" name="name" class="form-control" required="">
                          </div>

                          <div class="form-group">
                            <label> Designation </label>
                            <input type="text" name="post" class="form-control" required="">
                          </div>

                          <div class="form-group">
                            <label>Features Image </label>
                            <input type="file" name="image" class="form-control">
                          </div>

                          <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" id="boardeditor"></textarea>
                            <script>
                                CKEDITOR.replace( 'boardeditor' );
                            </script>
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

                <div class="table-responsive p-2">
                  <table class="table table-hover" id="example1">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Modify</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($boards as $board)
                        <tr>
                          <td>{{ $board->name }}</td>
                          <td>{{ $board->post }}</td>
                          <td>
                            <a href="#" data-toggle="modal" data-target="#editBoard{{ $board->id }}">
                              <i class="fa fa-edit text-blue"></i>
                            </a>
                            |
                            <a href="#" onclick="event.preventDefault(); document.getElementById('delete{{ $board->id }}').submit();">
                              <i class="fa fa-trash text-red"></i>
                            </a>

                            <form id="delete{{ $board->id }}" action="{{ url('admin/team/board') }}/{{ $board->id }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                              {{ Method_field('DELETE') }}
                            </form>  
                          </td>
                        </tr>  
                        <div class="modal fade mt-5" id="editBoard{{ $board->id }}" tabindex="-1" role="dialog" aria-labelledby="editBoard{{ $board->id }}Label" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="addCourseLabel">Edit Board</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <form method="POST" action="{{ url('admin/team/board') }}/{{ $board->id }}" enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PUT') }}
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label> Name </label>
                                    <input type="text" name="name" class="form-control" required="" value="{{ $board->name }}">
                                  </div>

                                  <div class="form-group">
                                    <label> Designation </label>
                                    <input type="text" name="post" class="form-control" required="" value="{{ $board->post }}">
                                  </div>

                                  <div class="form-group">
                                    <label>Features Image </label>
                                    <input type="file" name="image" class="form-control">
                                  </div>

                                  <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" id="board{{ $board->id }}">{{ $board->description }}</textarea>
                                    <script>

                                        CKEDITOR.replace( 'board{{ $board->id }}' );
                                    </script>
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

              <div class="tab-pane fade" id="management" role="tabpanel" aria-labelledby="management-tab">
                <div class="p-3">
                  <h4>Management Team
                    <button class="btn btn-success btn-xs float-right" data-toggle="modal" data-target="#addManagement">Add New <i class="fa fa-plus fa-fw"></i></button>
                  </h4>
                </div>
                <div class="modal fade mt-5" id="addManagement" tabindex="-1" role="dialog" aria-labelledby="addManagementLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="addManagementLabel">Add Management</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <form method="POST" action="{{ url('admin/team/management') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                          <div class="form-group">
                            <label> Name </label>
                            <input type="text" name="name" class="form-control" required="">
                          </div>

                          <div class="form-group">
                            <label> Designation </label>
                            <input type="text" name="post" class="form-control" required="">
                          </div>

                          <div class="form-group">
                            <label>Features Image </label>
                            <input type="file" name="image" class="form-control">
                          </div>

                          <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" id="managementeditor"></textarea>
                            <script>
                                CKEDITOR.replace( 'managementeditor' );
                            </script>
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
                <div class="table-responsive p-2">
                  <table class="table table-hover" id="example2">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Modify</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($managements as $management)
                        <tr>
                          <td>{{ $management->name }}</td>
                          <td>{{ $management->post }}</td>
                          <td>
                            <a href="#" data-toggle="modal" data-target="#editManagement{{ $management->id }}">
                              <i class="fa fa-edit text-blue"></i>
                            </a>
                            |
                            <a href="#" onclick="event.preventDefault(); document.getElementById('delete{{ $management->id }}').submit();">
                              <i class="fa fa-trash text-red"></i>
                            </a>

                            <form id="delete{{ $management->id }}" action="{{ url('admin/team/management') }}/{{ $management->id }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                              {{ Method_field('DELETE') }}
                            </form>  
                          </td>
                        </tr>  
                        <div class="modal fade mt-5" id="editManagement{{ $management->id }}" tabindex="-1" role="dialog" aria-labelledby="editManagement{{ $management->id }}Label" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="addCourseLabel">Edit Management</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <form method="POST" action="{{ url('admin/team/management') }}/{{ $management->id }}" enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PUT') }}
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label> Name </label>
                                    <input type="text" name="name" class="form-control" required="" value="{{ $management->name }}">
                                  </div>

                                  <div class="form-group">
                                    <label> Designation </label>
                                    <input type="text" name="post" class="form-control" required="" value="{{ $management->post }}">
                                  </div>

                                  <div class="form-group">
                                    <label>Features Image </label>
                                    <input type="file" name="image" class="form-control">
                                  </div>

                                  <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" id="management{{ $management->id }}">{{ $management->description }}</textarea>
                                    <script>
                                        CKEDITOR.replace( 'management{{ $management->id }}' );
                                    </script>
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
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
