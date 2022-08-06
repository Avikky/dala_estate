@extends('layouts.master')
@section('pageTitle', 'Loan Applications')
@section('content')

<div class="content">
  <div class="container">
    <div class="card mt-3">
      @if ($loan = Session::get('success'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $loan }}</strong>
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

      <div class="card-header">
        <div class="card-title">
          <h4>Loans Applications</h4>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive p-2">
          <table class="table table-hover" id="example2">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse($loans as $loan)
                <tr>
                  <td>{{ $loan->lastname }} {{ $loan->firstname }} {{ $loan->middlename }}</td>
                  <td>{{ $loan->email }}</td>
                  <td>{{ $loan->phone }}</td>
                  <td>{{ $loan->address }}</td>
                  <td>{{ $loan->status }}</td>
                  <td width="100px">
                    
                    <a href="{{ url('admin/loan/') }}/{{ $loan->id }}" class="btn btn-info btn-sm">
                      <i class="fa fa-edit"></i>
                    </a>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('delete{{ $loan->id }}').submit();"  class="btn btn-danger btn-sm">
                      <i class="fa fa-trash"></i>
                    </a>

                    <form id="delete{{ $loan->id }}" action="{{ url('admin/loan') }}/{{ $loan->id }}" method="POST" style="display: none;">
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
@endsection
