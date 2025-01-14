@extends('layouts.master')
@section('pageTitle', 'Edit Post')
@section('content')
<div class="content">
  <div class="container">
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
    <div class="row">
      <div class="col-md-12">
        <div class="card mt-3">
          <div class="card-header">
            <h3 class="card-title">Edit Post</h3>
          </div>

          <div class="card-body">
            <form role="form" enctype="multipart/form-data" action="{{ url('admin/blog') }}/{{ $post->id }}" method="post" >
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <div class="form-group">
                    <label for="disabledSelect">Enter Title</label>
                    <input class="form-control" type="text" name="title" value="{{ $post->title }}" Required/>
                  </div>

                  <div class="form-group">
                    <label for="your-label" class="form-label">Post</label>
                    <textarea  class="form-control" id="editor1" rows="50" cols="110" name="description">{{ $post->description }}
                    </textarea>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace( 'editor1' );
                    </script>
                  </div>  
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12"> 
                  <input type="hidden" name="author" value="{{ Auth::user()->name }}">
                  <div class="form-group">
                    <fieldset>
                        <label>Category</label>
                        <div style="border: 1px solid grey; height: 20em; overflow-y: auto; white-space: nowrap; padding:5px">
                          
                    
                            @forelse($categories as $category)
                              @if(in_array($category->id, $avail_cat)) 
                                <div class="c-inputs-stacked">
                                  @if($loop == 0)
                                  <input type="radio" id="checkbox_{{ $category->id }}" name="category" value="{{ $category->id }}" checked required />
                                  @else
                                   <input type="radio" id="checkbox_{{ $category->id }}" name="category" value="{{ $category->id }}" checked />
                                  @endif
                                  <label for="checkbox_{{ $category->id}}" class="block"> {{ $category->title }}</label> 
                                </div>
                              @else
                                <div class="c-inputs-stacked">
                                  <input type="radio" id="checkbox_{{ $category->id }}" name="category" value="{{ $category->id }}" required/>
                                  <label for="checkbox_{{ $category->id}}" class="block"> {{ $category->title }}</label> 
                                </div>
                              @endif 
                            @empty
                            @endforelse
                        </div>                                     
                    </fieldset> 
                  </div>

                  <div class="form-group">
                    <label for="name" class="form-label">Featured Images</label>
                    <input type="file" name="featured_image"/>
                  </div>  
                  <button type="submit" name="publish" value="Published" class="btn btn-primary btm-xs">Publish</button>
              </div>
            </form>
          </div>
        </div>
      </div>       
    </div>
  </div>
</div>
@endsection
