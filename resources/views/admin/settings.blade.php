@extends('layouts.userpage')
@section('pageTitle', 'Site Settings')
@section('content')
  <div class="content-wrapper">
   <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header">
              <h3 class="box-title">Site Setting</h3>
            </div><!-- /.box-header -->

            <div class="box-body">
              @if(isset($status))
                <div class="alert alert-success alert-dismissable" style="margin:20px">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4>  <i class="icon fa fa-check"></i> Success!</h4>
                    {{ $status}}
                </div>
              @endif
              
              <form role="form" enctype="multipart/form-data" action="{{ url('admin/setting') }}" method="post" >
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    
                        <div class="form-group">
                            <label for="disabledSelect">Enter Name</label>
                            <input class="form-control" type="text"  name="sitename" value="{{ $setting->sitename }}" Required=""/>                      
                        </div>

                        <div class="form-group">
                            <label for="disabledSelect">Enter Title</label>
                            <input class="form-control" type="text"  name="sitetitle" value="{{ $setting->sitetitle }}"/>                      
                        </div>
                        <div class="form-group">
                            <label for="disabledSelect">Enter Email</label>
                            <input class="form-control" type="email"  name="email" value="{{ $setting->email }}" Required=""/>                      
                        </div>

                        <div class="form-group">
                            <label for="disabledSelect">Enter Phone Number</label>
                            <input class="form-control" type="tel"  name="phone" value="{{ $setting->phone }}" Required=""/>                      
                        </div>  

                        <div class="form-group">
                            <label for="your-label" class="form-label">Address</label>
                            <textarea  class="form-control" rows="2"  name="address">{{ $setting->address }}
                            </textarea>                    
                        </div>

                        <div class="form-group">
                            <label for="disabledSelect">Facebook</label>
                            <input class="form-control" type="text"  name="facebook" value="{{ $setting->facebook }}" Required=""/>                      
                        </div>

                        <div class="form-group">
                            <label for="disabledSelect">Twitter</label>
                            <input class="form-control" type="text"  name="twitter" value="{{ $setting->twitter }}"/>                      
                        </div>
                        <div class="form-group">
                            <label for="disabledSelect">LinkedIn</label>
                            <input class="form-control" type="text"  name="linkedin" value="{{ $setting->linkedin }}" Required=""/>                      
                        </div>

                        <div class="form-group">
                            <label for="disabledSelect">Google+</label>
                            <input class="form-control" type="text"  name="googleplus" value="{{ $setting->googleplus }}" Required=""/>                      
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    
                        <div class="form-group">
                            <label for="your-label" class="form-label">Vision</label>
                            <textarea  class="form-control" rows="2"  name="vision">{{ $setting->vision }}
                            </textarea>                    
                        </div>

                        <div class="form-group">
                            <label for="your-label" class="form-label">Mission</label>
                            <textarea  class="form-control" rows="2"  name="mission">{{ $setting->mission }}
                            </textarea>                    
                        </div>

                        <div class="form-group">
                            <label for="your-label" class="form-label">About US</label>
                            <textarea  class="form-control" id="editor1" rows="5" cols="110" name="about">
                              {{ $setting->about }}
                            </textarea>
                            <script>
                                // Replace the <textarea id="editor1"> with a CKEditor
                                // instance, using default configuration.
                                CKEDITOR.replace( 'editor1' );
                            </script>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-success pull-right"> Set </button>                   
                        </div>  
                    </div>
                    
                  </div>
              </form>
             
            </div>
          </div><!-- /.box -->
        </div>       
      </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection
