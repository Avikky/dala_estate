@extends('layouts.userpage')
@section('pageTitle', 'Set Standard')
@section('content')
<!-- Content Wrapper. Contains page content -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Set School Standard
      </h1>
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
                <form method="post" class="profile-wrapper" action="{{ url('admin/standard') }}"  enctype="multipart/form-data">
                   {{ method_field('PUT') }}
                            {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">Set Session</label>
                                <select name="session" class="form-control dynamic" id="class1" data-dependent="form">
                                    <option>Select Session</option>
                                    @forelse($sessions as $sessionss)
                                        <option {{ $standards->session == $sessionss->name ? 'selected' : '' }} value="{{ $sessionss->name }}">{{ $sessionss->name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">Set Term</label>
                                <select name="term" class="form-control dynamic" id="class1" data-dependent="form">
                                    <option>Select Term</option>
                                    <option {{ $standards->term == 'First Term' ? 'selected' : '' }}  value="First Term">First Term</option>
                                    <option {{ $standards->term == 'Second Term' ? 'selected' : '' }} value="Second Term">Second Term</option>
                                    <option {{ $standards->term == 'Third Term' ? 'selected' : '' }} value="Third Term">Third Term</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>1st Assessment:</label>  
                                <input class="form-control" type="number" name="test1" value="{{$standards->test1}}" required autofocus>  
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>2nd Assessment:</label>  
                                <input class="form-control" type="number" name="test2" value="{{$standards->test2}}" required autofocus>  
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Exam:</label>  
                                <input class="form-control" type="number" name="exam" value="{{$standards->exam}}" required autofocus>  
                            </div>
                        </div>
                    </div>  

                    <div class="box-header">
                        <h3>Grade A</h3>
                    </div>                          
                    <div class="row">        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>From:</label>  
                                <input class="form-control" type="number" value="{{$standards->a_min}}" required autofocus>  
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>To:</label>  
                                <input class="form-control" type="number" value="{{$standards->a_max}}" required autofocus>  
                            </div>
                        </div>
                    </div>   

                    <div class="box-header">
                        <h3>Grade B</h3>
                    </div>                          
                    <div class="row">        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>From:</label>  
                                <input class="form-control" type="number" value="{{$standards->b_min}}" required autofocus>  
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>To:</label>  
                                <input class="form-control" type="number" value="{{$standards->b_max}}" required autofocus>  
                            </div>
                        </div>
                    </div> 

                    <div class="box-header">
                        <h3>Grade C</h3>
                    </div>                          
                    <div class="row">        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>From:</label>  
                                <input class="form-control" type="number" value="{{$standards->c_min}}" required autofocus>  
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>To:</label>  
                                <input class="form-control" type="number" value="{{$standards->c_max}}" required autofocus>  
                            </div>
                        </div>
                    </div> 

                    <div class="box-header">
                        <h3>Grade D</h3>
                    </div>                          
                    <div class="row">        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>From:</label>  
                                <input class="form-control" type="number" value="{{$standards->d_min}}" required autofocus>  
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>To:</label>  
                                <input class="form-control" type="number" value="{{$standards->d_max}}" required autofocus>  
                            </div>
                        </div>
                    </div> 

                    <div class="box-header">
                        <h3>Grade E</h3>
                    </div>                          
                    <div class="row">        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>From:</label>  
                                <input class="form-control" type="number" value="{{$standards->e_min}}" required autofocus>  
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>To:</label>  
                                <input class="form-control" type="number" value="{{$standards->e_max}}" required autofocus>  
                            </div>
                        </div>
                    </div>     
                    <div class="box-header">
                        <h3>Grade F</h3>
                    </div>                          
                    <div class="row">        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>From:</label>  
                                <input class="form-control" type="number" value="{{$standards->f_min}}" required autofocus>  
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>To:</label>  
                                <input class="form-control" type="number" value="{{$standards->f_max}}" required autofocus>  
                            </div>
                        </div>
                    </div>                      
                    <button type="submit" class="btn btn-success pull-right">Set <i class="fa fa-save"></i></button>                              
                </form>
              </div> 
            </div> 
          </div>
        </div>     
    </section>
    <!-- /.content -->
  </div>
@endsection
