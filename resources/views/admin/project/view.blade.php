@extends('layouts.master')
@section('pageTitle', 'All Projects')
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

          <div class="card-header text-center">
              <h4>Projects</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive p-2">
              <table class="table table-hover" id="example2">
                <thead>
                  <tr>
                    <th width="400px">Name</th>
                    <!--<th>Type</th>-->
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($projects as $project)
                    <tr>
                      <td>{{ $project->name }}</td>
                      <!--<td>{{ $project->link }}</td>-->
                      <td>
                          <img src="{{ asset('storage') }}/{{ $project->image }}" style="height: 80px; width: 120px">
                      </td>
                      <td>

                        <a href="{{ url('admin/project') }}/{{ $project->id }}">
                          <i class="fa fa-edit text-blue"></i>
                        </a>
                        |
                        <a href="#" onclick="event.preventDefault(); document.getElementById('delete{{ $project->id }}').submit();" class="text-red">
                          <i class="fa fa-trash text-red"></i>
                        </a>

                        <form id="delete{{ $project->id }}" action="{{ url('admin/project') }}/{{ $project->id }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                          {{ Method_field('DELETE') }}
                        </form>  
                      </td>
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
