@extends('layouts.userpage')
@section('pageTitle', 'Add Logo')
@section('content')

     <div class="content-wrapper">   <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <!-- general form elements disabled -->
              <div class="box box-solid">
                <div class="box-body">
                  <form role="form" action="{{ url('admin/logo') }}" enctype="multipart/form-data" method="POST" >
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="form-label">Add Logo</label>
                        <div class="input-group image-preview">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                  <span class="glyphicon glyphicon-remove"></span> Clear
                              </button>
                              <div class="btn btn-default image-preview-input">
                                  <span class="glyphicon glyphicon-folder-open"></span>
                                  <span class="image-preview-input-title">Browse</span>
                                  <input id="file1" type="file" name="logo" required/>
                              </div>

                          </span>
                        </div>
                        <div class="btn btn-default image-preview-input">
                              <input type="submit" value="Add Logo" class="btn btn-success pull-right">
                          </div>
                    </div>
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
@endsection
