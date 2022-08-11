@extends('layouts.master')
@section('pageTitle', 'All Properties')
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
      <div class="col-lg-12">
        <div class="card mt-3">
          <div class="card-header">
            <h3 class="card-title">All Frequently Asked Questions</h3>
          </div>
       
          <div class="card-body">
            <div class="table-responsive p-2">
              <table class="table table-hover" id="example1">
                <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Property</th>
                    <th>Description</th>
                    <th>Usuage</th>
                    <th>Category</th>
                    <th>Location</th>
                    <th>Minimum Price</th>
                    <th>Maximum Price</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($properties as $property)
                    <tr>
                      <td>{{ $loop->index +1 }}</td>
                      <td>{{ $property->name }}</td>
                      <td>{{ substr(strip_tags($property->description), 0, 100) }}</td>
                      <td>{{ $property['propertyuses']->name }}</td>
                      <td>{{ $property['propertycategory']->name }}</td>
                      <td>{{ $property->location }}</td>
                      <td>{{ $property->minimum_price }}</td>
                      <td>{{ $property->maximum_price }}</td>                      
                      <td> 
                        <a href="{{ url('admin/property/editproperty') }}/{{ $property->id }}">
                          <i class="fa fa-edit btn btn-info btn-sm"></i>
                        </a>
                    </td>
                    <td>              
                         <a href="#" onclick="event.preventDefault(); document.getElementById('delete{{ $property->id }}').submit();">
                          <i class="fa fa-trash btn btn-danger btn-sm"></i>
                        </a>
                      </td>
                     
                      <form id="delete{{ $property->id }}" action="{{ url('/admin/property') }}/{{$property->id}}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        {{ Method_field('DELETE') }}
                      </form>
                      
                    </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>    
      </div>
    </div>
  </div>
</div>

@endsection