@extends('layouts.userpage')
@section('pageTitle', 'Admins & Agents')
@section('content')
<!-- Content Wrapper. Contains page content -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
  
      <span style="font-size:20px">All Admins</span><!-- <a class="btn btn-primary pull-right" href="#" data-toggle="modal" data-target="#shipmentmodal" >Add Shipment</a>-->
      <a class="btn btn-primary pull-right"  href="#" data-toggle="modal" data-target="#addadminmodal" >Add Admin</a>
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

        <div class="row">
          <div class="col-12">
            <div class="box box-solid">
              <!--<div class="box-header">
                <form class="form-style form-style-2" action="{{ url('/searchagent') }}" method="POST" role="search">
                  {{ csrf_field() }}
                  <div class="row">
                  
                      <div class="col-md-10">
                        <input  class="form-control" placeholder="Search By Name or Email or Phone or State" name="search" type="text">
                      </div>

                      <div class="col-md-2">
                        <button class="btn btn-success"> Search</button>
                      </div>
                  </div> 
                </form>
              </div>-->
              
              <div class="box-body">
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse($agents as $agent)
                          <tr>
                            <td>{{ $agent->name }}</td>
                            <td>{{ $agent->email }}</td>
                            <td>{{ $agent->role }}</td>
                            <td>
                              <form action="{{ url('/admin/destroyagent') }}/{{$agent->id}}" method="POST">
                                {{ csrf_field() }}
                                {{ Method_field('DELETE') }}
                                 <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                              </form>
                            </td>
                          </tr>
                          @empty
                              <p style="text-align:center; color:#465161">No admin found </p>
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

    <div class="modal fade" id="addadminmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog" style="background:white">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"> Add Admin</h4>
            </div>
            <div class="modal-body">
              <form method="post" class="profile-wrapper" action="{{ url('admin/addadmin') }}" >
                 {{ csrf_field() }}
                  
                  <div class="form-group">
                      <label for="fname">Fullname</label>
                     
                      <input class="form-control" type="text" name="name" required autofocus>
                      @if ($errors->has('name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                  </div>


                  <div class="form-group">
                      <label for="fname">Email</label>
                     
                      <input class="form-control" type="email" name="email"  required autofocus>
                      @if ($errors->has('title'))
                          <span class="help-block">
                              <strong>{{ $errors->first('title') }}</strong>
                          </span>
                      @endif
                  </div>

                  <div class="form-group">
                      <label for="gender">Role</label>
                      <select name="role" required="" class="form-control">
                        <option value="Super Admin">Super Admin</option>
                        <option value="Admin">Admin</option>  
                                            
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="fname">Password</label>
                     
                      <input class="form-control" type="password" name="password"  required autofocus>
                  </div>
                  <button type="submit" class="btn btn-success pull-right">Add <i class="fa fa-save"></i></button>                              
              </form>
            </div>
            
            <div class="modal-footer">
             
            </div>
          </div><!-- /.modal-content -->                     
      </div>
  </div>
@endsection
