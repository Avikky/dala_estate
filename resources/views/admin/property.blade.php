@extends('layouts.master')
@section('pageTitle', 'Property')
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
            <h3 class="card-title">Add New Property</h3>
          </div>

          <div class="card-body">
            <form role="form" enctype="multipart/form-data" action="{{ url('admin/property/create') }}" method="post" >
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="form-group">
                      <label for="disabledSelect">Property Name</label>
                      <input class="form-control" type="text" name="name" Required/>
                    </div>

                    <div class="form-group">
                      <label for="disabledSelect">Location</label>
                      <input class="form-control" type="text" name="location" Required/>
                    </div>

                    <div class="form-group">
                      <label for="disabledSelect">Minimum Price</label>
                      <input class="form-control" type="text" name="minimum_price" Required/>
                    </div>

                    <div class="form-group">
                      <label for="disabledSelect">Maximum Price</label>
                      <input class="form-control" type="text" name="maximum_price" Required/>
                    </div>

                    <div class="form-group">
                      <label for="your-label" class="form-label">Description</label>
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

                     <div class="form-group">
                      <fieldset>
                          <label>Property Category</label>
                          <div style="border: 1px solid grey; height: 10em; overflow-y: auto; white-space: nowrap; padding:5px">
                              @forelse($propertiescat as $propertycat)

                              <div class="c-inputs-stacked">
                    
                                <input type="radio" id="checkbox_{{ $propertycat->id }}" name="property_categories_id" value="{{ $propertycat->id }}"/>
                                <label for="checkbox_{{ $propertycat->id}}" class="block"> {{ $propertycat->name }}</label>  
                              </div>

                              @empty
                              @endforelse
                          </div>                                     
                      </fieldset> 
                    </div><div class="form-group">
                      <fieldset>
                          <label>Property Category</label>
                          <div style="border: 1px solid grey; height: 10em; overflow-y: auto; white-space: nowrap; padding:5px">
                              @forelse($propertiesuses as $usauge)

                              <div class="c-inputs-stacked">
                    
                                <input type="radio" id="checkbox_{{ $usauge->id }}" name="property_uses_id" value="{{ $usauge->id }}"/>
                                <label for="checkbox_{{ $usauge->id}}" class="block"> {{ $usauge->name }}</label>  
                              </div>

                              @empty
                              @endforelse
                          </div>                                     
                      </fieldset> 
                    </div>
                    <div class="form-group">
                      <label for="name" class="form-label">Property Images</label>
                      <input type="file" name="image"/>
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