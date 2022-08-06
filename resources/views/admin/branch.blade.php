@extends('layouts.userpage')
@section('pageTitle', 'Branches')
@section('content')
<!-- Content Wrapper. Contains page content -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <span style="font-size:20px">All Branches</span> 
      <!-- <a class="btn btn-primary pull-right"  href="{{ url('/admin/addservice') }}">Add Service</a>-->
     <a class="btn btn-primary pull-right" href="" data-toggle="modal" data-target="#addbranchmodal" >Add Branch</a>
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
                          <th>Address</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($branches as $branch)
                        <tr>
                          <td>{{ $branch->name }}</td>
                          <th>{{ $branch->address }}</th>
                          <th>{{ $branch->email }}</th>
                          <th>{{ $branch->phone }}</th>
                          <td> <a 
                              class="open-AddBookDialog btn btn-info" 
                              href="#" 
                              data-toggle="modal" 
                              data-target="#editbranchmodal" 

                              data-id="{{ $branch->id }}"
                              data-name="{{ $branch->name }}"
                              data-phone="{{ $branch->phone }}"
                              data-email="{{ $branch->email }}"
                              data-description="{{ $branch->address }}">
                              
                              <i class="fa fa-edit"></i> 
                              </a>
                          </td>
                          <td>
                            <form action="{{ url('/admin/destroybranch') }}/{{$branch->id}}" method="POST">
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
  <div class="modal fade" id="addbranchmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog" style="background:white">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"> Add Branch</h4>
            </div>
            <div class="modal-body">
              <form method="post" class="profile-wrapper" action="{{ url('admin/branch') }}" >
                 {{ csrf_field() }}
                  
                  <div class="form-group">
                      <label for="fname">Name</label>                     
                      <input class="form-control" type="text" name="name" required autofocus>
                  </div> 

                  <div class="form-group">
                    <label for="fname">Adress</label>  
                    <textarea  class="form-control" name="address">
                    </textarea>  
                  </div>

                  <div class="form-group">
                      <label for="fname">Phone Number</label>                     
                      <input class="form-control" type="text" name="phone" required autofocus>
                  </div>   

                  <div class="form-group">
                      <label for="fname">Email</label>                     
                      <input class="form-control" type="text" name="email" required autofocus>
                  </div>
                  <button type="submit" class="btn btn-success pull-right">Add <i class="fa fa-save"></i></button>                              
              </form>
            </div>
            
            <div class="modal-footer">
             
            </div>
          </div><!-- /.modal-content -->                     
      </div>
    </div>

    <div class="modal fade" id="editbranchmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog" style="background:white">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"> Edit Branch</h4>
            </div>
            <div class="modal-body">
              <form method="post" class="profile-wrapper" action="{{ url('admin/editbranch') }}" >
                 {{ csrf_field() }}
                 {{ method_field('PUT') }}
                  <span id="mainname"></span>
                  <div class="form-group">
                      <label for="fname">Name</label>   
                      <input type="hidden" name="id" id="mainid">                   
                      <input class="form-control" type="text" name="name" id="mainname" Required>                     
                  </div>

                  <div class="form-group">
                    <label for="fname">Adress</label>  
                    <textarea  class="form-control"  id="mainaddress" name="address">
                    </textarea>  
                  </div>

                  <div class="form-group">
                      <label for="fname">Phone Number</label>                     
                      <input class="form-control" type="text" name="phone" id="mainphone" required autofocus>
                  </div>   

                  <div class="form-group">
                      <label for="fname">Email</label>                     
                      <input class="form-control" type="text" name="email" id="mainemail" required autofocus>
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
         var facultyname = $(this).data('name');
         var facultyphone = $(this).data('phone');
         var facultyemail = $(this).data('email');
         var facultyaddress = $(this).data('address');

         $(".modal-body #mainid").val( facultyId );
         $(".modal-body #mainname").val( facultyname );
         $(".modal-body #mainphone").val( facultyphone );
         $(".modal-body #mainemail").val( facultyemail );
         $(".modal-body #mainnaddress").val( facultyaddress );
        $('#editbranchmodal').modal('show');


      });
    </script>
@endsection
