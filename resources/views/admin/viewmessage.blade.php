@extends('layouts.master')
@section('pageTitle', 'Read')
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

          <div class="card-header">
            <div class="p-3">
              <h4>Read Message
              </h4>
            </div>
          </div>
          <div class="card-body p-5">
            <p>From: <b>{{ $ms->name }}</b></p>
            <p>Email: <b>{{ $ms->email }}</b></p>
            <p>Phone: <b>{{ $ms->phone }}</b></p>
            <p>Message: <br><b>{{ $ms->message }}</b></p>
          </div>
          @if($ms->property_id)
            <div class="card-header text-center">
              Property ID: <b>{{ $ms->property_id }}</b><br>
              <a href="{{ url('/realtor') }}/{{ $ms->property_id }}" class="btn btn-info btn-xs" target="_blank">View Property</a>
            </div>
          @endif
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
