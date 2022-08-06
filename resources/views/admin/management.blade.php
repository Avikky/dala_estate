@extends('layouts.userpage')
@section('pageTitle', 'Management')
@section('content')
<!-- Content Wrapper. Contains page content -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <span style="font-size:20px">All Management Members</span> 
      <!-- <a class="btn btn-primary pull-right"  href="{{ url('/admin/addmanagement') }}">Add management</a>-->
     <a class="btn btn-primary pull-right" href="" data-toggle="modal" data-target="#addmanagementmodal" >Add Member</a>
    </section>


      <!-- Main content -->
      <!-- Main content -->
    <section class="content">
      @if(isset($status))
          <div class="alert alert-success alert-dismissable" style="margin:20px">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4>  <i class="icon fa fa-check"></i> Success!</h4>
              {{ $status}}
          </div>
        @endif
        @if(isset($error))
          <div class="alert alert-danger alert-dismissable" style="margin:20px">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4>  <i class="icon fa fa-times"></i> Error!</h4>
              {{ $error}}
          </div>
        @endif
      <div class="row">
        <div class="col-12">
          <div class="box box-solid">
            <div class="box-body">
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Post/Designation</th>
                          <th>Image</th>
                          <!--<th>Edit</th>-->
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($managements as $management)
                        <tr>
                          <td>{{ $management->name }}</td>
                          <td>{{ $management->post }}</td>
                          <th>
                              @if(isset($management->image))
                                <img class="img-thumbnail" src="{{ asset('storage') }}/{{ $management->image }}" width="70px">
                              @else
                                <img class="img-thumbnail" src="{{ asset('live/images/avatar.png') }}" width="70px">
                              @endif
                          </th>
                          <!--<a href=""><i class="fa fa-edit btn btn-info"></i> </a>
                           <td> 
                            <a 
                              class="open-AddBookDialog btn btn-info" 
                              href="#" 
                              data-toggle="modal" 
                              data-target="#editmodal" 

                              data-id="{{ $management->id }}"
                              data-title="{{ $management->title }}"
                              data-description="{{ strip_tags($management->description) }}">
                              
                              <i class="fa fa-edit"></i> 
                              </a>
                          </td>-->
                          <td>
                            <form action="{{ url('/admin/destroymanagement') }}/{{$management->id}}" method="POST">
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
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="modal fade" id="addmanagementmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog" style="background:white">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"> Add Member</h4>
            </div>
            <div class="modal-body">
              <form method="post" class="profile-wrapper" enctype="multipart/form-data" action="{{ url('admin/management') }}" >
                 {{ csrf_field() }}
                  
                  <div class="form-group">
                      <label for="fname">Name</label>                     
                      <input class="form-control" type="text" name="name" required autofocus>
                  </div> 

                  <div class="form-group">
                      <label for="fname">Post/Desingation</label>                     
                      <input class="form-control" type="text" name="post" required autofocus>
                  </div> 

                  <div class="form-group">
                      <label for="fname">Featured Image</label>
                      <input class="form-control" type="file" name="image" autofocus>  
                  </div>   

                  <button type="submit" class="btn btn-success pull-right">Add <i class="fa fa-save"></i></button>                              
              </form>
            </div>
            
            <div class="modal-footer">
             
            </div>
          </div><!-- /.modal-content -->                     
      </div>
    </div>

    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog" style="background:white">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"> Edit management</h4>
            </div>
            <div class="modal-body">
              <form method="post" class="profile-wrapper" enctype="multipart/form-data" action="{{ url('admin/editmanagement') }}" >
                 {{ csrf_field() }}
                 {{ method_field('PUT') }}
                  <span id="mainname"></span>
                  <div class="form-group">
                      <label for="fname">Title</label>   
                      <input type="hidden" name="id" id="mainid">                   
                      <input class="form-control" type="text" name="name" id="mainname" Required>                     
                  </div>

                  
                  <div class="form-group">
                      <label for="fname">Description</label>  
                      <textarea class="form-control" id="maincode" name="description" required autofocus></textarea>                   
                  </div>

                  <div class="form-group">
                      <label for="fname">Featured Image</label>

                      <input class="form-control" type="file" name="image" autofocus>  
                  </div>  
                  <button type="submit" class="btn btn-success pull-right">Save <i class="fa fa-save"></i></button>                              
              </form>
            </div>
            
            <div class="modal-footer">
             
            </div>
          </div><!-- /.modal-content -->                     
      </div>
    </div>
      <script>
      //result modal
      $(document).on("click", ".open-AddBookDialog", function () {
         var facultyId = $(this).data('id');
         var facultyname = $(this).data('title');
         var facultycode = $(this).data('description');

         $(".modal-body #mainid").val( facultyId );
         $(".modal-body #mainname").val( facultyname );
         $(".modal-body #maincode").val( facultycode );
        $('#editmodal').modal('show');


      });
    </script>
@endsection
