@extends('layouts.userpage')
@section('pageTitle', 'Profile')
@section('content')
<div class="content-wrapper">   
    <section class="content-header" style="margin-bottom: 10px;"><h3>Edit Profile</h3></section>
    <section class="content-header" style="padding-bottom: 60px;">
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
        <form method="post" class="profile-wrapper" action="{{ url('admin/profile') }}/{{ Auth::user()->id}}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="fname">Fullname</label>
                        <input class="form-control" type="text" readonly="True" id="fname" name="name"  value="{{ $profile->name }}" required autofocus>
                       
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="fname">Email</label>
                        <input class="form-control" readonly="True" type="email" id="fname" name="email"  value="{{ $profile->email }}" required autofocus>
                       
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="fname">Password</label>
                        <input class="form-control" type="password" name="password"  required autofocus>
                    </div>
                </div>

            </div>                           
            <button type="submit" class="btn btn-success pull-right">Update <i class="fa fa-save"></i></button>                              
        </form>
    </section>
</div>
@endsection
