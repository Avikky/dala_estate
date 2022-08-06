@extends('layouts.userpage')
@section('pageTitle', 'Add Event')
@section('content')
  <div class="content-wrapper">
   <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header">
              <h3 class="box-title">Add Event</h3>
            </div><!-- /.box-header -->

            <div class="box-body">
              @if(isset($status))
                <div class="alert alert-success alert-dismissable" style="margin:20px">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4>  <i class="icon fa fa-check"></i> Success!</h4>
                    {{ $status}}
                </div>
              @endif
              
              <form role="form" enctype="multipart/form-data" action="{{ url('admin/newevent') }}" method="post" >
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                    
                        <div class="form-group">
                            <label for="disabledSelect">Enter Event Title</label>
                            <input class="form-control" type="text"  name="title" id="myInput" oninput="myFunction()"  Required=""/>
                          
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
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12"> 
                      <div style="margin-top:10px; margin-right:5px">                                                                           
                                                 
                          <div class="form-group">
                            <label>Date of Event</label>
                            <input class="form-control" type="date"  name="date_event"/>                          
                          </div>

                          <div class="form-group">
                            <label>Venue of Event</label>
                            <textarea  class="form-control" name="venue"></textarea>                         
                          </div>

                          <div class="form-group">
                              <input type="hidden" name="author" value="{{ Auth::user()->name }}">
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
                       </div>                                    
                    </div> 
                  </div>
                  <button type="submit" name="publish" value="Published" class="btn btn-primary">Publish</button>
              </form>
             
            </div>
          </div><!-- /.box -->
        </div>       
      </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection
