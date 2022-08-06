@extends('layouts.userpage')
@section('pageTitle', 'Add Service')
@section('content')
  <div class="content-wrapper">
   <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header">
              <h3 class="box-title">Add Post</h3>
            </div><!-- /.box-header -->

            <div class="box-body">
              @if(isset($status))
                <div class="alert alert-success alert-dismissable" style="margin:20px">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4>  <i class="icon fa fa-check"></i> Success!</h4>
                    {{ $status}}
                </div>
              @endif
              
              <form role="form" enctype="multipart/form-data" action="{{ url('admin/service') }}" method="post" >
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="col-md-12">
                    
                        <div class="form-group">
                            <label for="disabledSelect">Enter Title</label>
                            <input class="form-control" type="text"  name="name" id="myInput" oninput="myFunction()"  Required=""/>
                          
                        </div>


                        <div class="form-group">
                            <label for="your-label" class="form-label">Enter Content</label>
                            <textarea  class="form-control" id="editor1" rows="50" cols="110" name="description">
                            </textarea>
                            <script>
                                // Replace the <textarea id="editor1"> with a CKEditor
                                // instance, using default configuration.
                                CKEDITOR.replace( 'editor1' );
                            </script>
                        </div>  

                         <div class="form-group">
                              <label for="name" class="form-label">Add Featured Images</label>
                              <div class="input-group image-preview">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>
                                    <div class="btn btn-default image-preview-input">
                                        <span class="glyphicon glyphicon-folder-open"></span>
                                        <span class="image-preview-input-title">Browse</span>
                                        <input type="file" accept="image/png, image/jpeg, image/gif" name="featured_image"/>
                                        
                                    </div>
                                   
                                </span>
                              </div>
                          </div> 
                          <button type="submit" class="btn btn-success pull-right">Add <i class="fa fa-save"></i></button>  
                    </div>
                  </div>
              </form>
             
            </div>
          </div><!-- /.box -->
        </div>       
      </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<script>

function myFunction() {
    var x = document.getElementById("mySelect");
    var option = document.createElement("option");
    x.add(option);
}


$(key).on("keyup", '.tagsinput', function (e) {
    if (e.keyCode == 188) { // KeyCode For comma is 188
        myFunction();
    }
});


$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
@endsection
