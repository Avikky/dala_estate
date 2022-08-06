@extends('layouts.master')
@section('pageTitle', 'Products')
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
              <h4>Products

                <button class="btn btn-success btn-xs float-right" data-toggle="modal" data-target="#addSession">Add New <i class="fa fa-plus fa-fw"></i></button>
              </h4>

              <div class="modal fade mt-5" id="addSession" tabindex="-1" role="dialog" aria-labelledby="addSessionLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="addCourseLabel">Add Product</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <form method="POST" action="{{ url('admin/products') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="modal-body">
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                          <label for="fname">Description</label>
                          <textarea  class="form-control" id="editorX" rows="30" cols="30" name="description">
                          </textarea>
                          <script>
                              // Replace the <textarea id="editor1"> with a CKEditor
                              // instance, using default configuration.
                              CKEDITOR.replace( 'editorX' );
                          </script>   
                        </div> 

                        <div class="form-group">
                          <label for="fname">Benefits</label>
                          <textarea  class="form-control" id="editor1" rows="30" cols="30" name="benefits"> 
                          </textarea>
                          <script>
                              // Replace the <textarea id="editor1"> with a CKEditor
                              // instance, using default configuration.
                              CKEDITOR.replace( 'editor1' );
                          </script>   
                        </div> 
                        <div class="form-group">
                            <label for="fname">Beneficiary</label>
                            <textarea  class="form-control" id="editor2" rows="30" cols="30" name="beneficiary">
                            </textarea>
                            <script>
                                // Replace the <textarea id="editor1"> with a CKEditor
                                // instance, using default configuration.
                                CKEDITOR.replace( 'editor2' );
                            </script>   
                        </div>
                        <div class="form-group">
                          <label for="fname">Requirements</label>
                          <textarea  class="form-control" id="editor3" rows="50" cols="40" name="requirements">
                          </textarea>
                          <script>
                              // Replace the <textarea id="editor1"> with a CKEditor
                              // instance, using default configuration.
                              CKEDITOR.replace( 'editor3' );
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
                  @forelse($products as $product)
                    <tr>
                      <td>{{ $product->name }}</td>
                      
                      <td>
                        <a href="{{ asset('storage') }}/{{ $product->image }}" target="_blank" class="text-blue">
                          <img src="{{ asset('storage') }}/{{ $product->image }}" style="height: 80px; width: 120px">
                        </a>
                      </td>
                      <td>
                        <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#editSession{{ $product->id }}">
                          <i class="fa fa-edit"></i>
                        </a>
                        
                        <a class="btn btn-danger btn-sm" href="#" onclick="event.preventDefault(); document.getElementById('delete{{ $product->id }}').submit();" class="text-red">
                          <i class="fa fa-trash"></i>
                        </a>

                        <form id="delete{{ $product->id }}" action="{{ url('admin/products') }}/{{ $product->id }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                          {{ Method_field('DELETE') }}
                        </form>  
                      </td>
                    </tr> 

                    <div class="modal fade mt-5" id="editSession{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="editSession{{ $product->id }}Label" aria-hidden="true">
                      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="addCourseLabel">Edit Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          <form method="POST" action="{{ url('admin/products') }}/{{ $product->id }}" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="modal-body">
                              <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                              </div>

                              <div class="form-group">
                                <label for="fname">Description</label>
                                <textarea  class="form-control" id="editor0{{ $product->id }}" rows="30" cols="30" name="description">
                                  {{ $product->description }} 
                                </textarea>
                                <script>
                                    // Replace the <textarea id="editor1"> with a CKEditor
                                    // instance, using default configuration.
                                    CKEDITOR.replace( 'editor0{{ $product->id }}' );
                                </script>   
                              </div> 
                           
                        <div class="form-group">
                          <label for="fname">Benefits</label>
                          <textarea  class="form-control" id="ben{{ $product->id }}" rows="30" cols="30" name="benefits">
                            {{ $product->benefits }} 
                          </textarea>
                          <script>
                              // Replace the <textarea id="editor1"> with a CKEditor
                              // instance, using default configuration.
                              CKEDITOR.replace( 'ben{{ $product->id }}' );
                          </script>   
                        </div> 
                        <div class="form-group">
                            <label for="fname">Beneficiary</label>
                            <textarea  class="form-control" id="factor{{ $product->id }}" rows="30" cols="30" name="beneficiary">
                              {{ $product->beneficiary }}
                            </textarea>
                            <script>
                                // Replace the <textarea id="editor1"> with a CKEditor
                                // instance, using default configuration.
                                CKEDITOR.replace( 'factor{{ $product->id }}' );
                            </script>   
                        </div>
                        <div class="form-group">
                          <label for="fname">Requirements</label>
                          <textarea  class="form-control" id="req{{ $product->id }}" rows="50" cols="40" name="requirements">
                            {{ $product->requirements }}
                          </textarea>
                          <script>
                              // Replace the <textarea id="editor1"> with a CKEditor
                              // instance, using default configuration.
                              CKEDITOR.replace( 'req{{ $product->id }}' );
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
