@extends('layouts.master')
@section('pageTitle', 'Edit Project')
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

          <div class="card-header p-3 text-center">
            <h4>Edit Project</h4>
          </div>

          <form method="POST" action="{{ url('admin/project') }}/{{ $property->id }}" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" required value="{{ $property->name }}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Image</label>
                    <input class="form-control" type="file" name="image">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" id="editorabout">{{ $property->description }}</textarea>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace( 'editorabout' );
                    </script>
                  </div>
                </div>
              </div>
              <button class="btn btn-success float-right">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
