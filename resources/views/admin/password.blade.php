@extends('layouts.master')

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
              <h4>Change Password</h4>
            </div>

            <form method="POST" action="{{ route('changePassword') }}">
              {{ csrf_field() }}
                              
              <div class="form-group-inner{{ $errors->has('current-password') ? ' has-error' : '' }}">
                  <label>Current Password</label>
                  <input id="current-password" type="password" class="form-control" name="current-password" required>
                  @if ($errors->has('current-password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('current-password') }}</strong>
                      </span>
                  @endif
              </div>

              <div class="form-group-inner{{ $errors->has('new-password') ? ' has-error' : '' }}">
                  <label>New Password</label>
                  <input id="new-password" type="password" class="form-control" name="new-password" required>
                  @if ($errors->has('new-password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('new-password') }}</strong>
                      </span>
                  @endif
              </div>

              <div class="form-group-inner{{ $errors->has('new-password') ? ' has-error' : '' }}">
                  <label>Confirm New Password</label>
                  <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
              </div>
                   
              <div class="form-group" style="margin-top: 10px">
                  <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">
                          Change Password
                      </button>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
