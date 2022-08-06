@extends('layouts.master')
@section('pageTitle', 'Message')
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

          <div class="card-body">
            <div class="p-3">
              <h4>Messages</h4>
            </div>

            <div class="table-responsive p-2">
              <table class="table table-hover" id="example2">
                <thead>
                  <tr>
                    @if(isset($property_set))<th>Property ID</th>@endif
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($messages as $message)
                    <tr>
                      @if(isset($property_set))<td>{{ $message->property_id }}</td>@endif
                      <td>{{ $message->name }}</td>
                      <td>{{ $message->email }}</td>
                      <td>{{ $message->phone }}</td>
                      <td>
                        @if($message->status==1) 
                          <span class="badge badge-success">Read</span>
                        @else
                          <span class="badge badge-danger">Unread</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ url('admin/messages/') }}/{{ $message->id }}" class="text-blue">Read
                        </a>
                        |

                        <a href="#" onclick="event.preventDefault(); document.getElementById('delete{{ $message->id }}').submit();" class="text-red">
                          Delete
                        </a>

                        <form id="delete{{ $message->id }}" action="{{ url('admin/messages') }}/{{ $message->id }}" method="POST" style="display: none;">
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
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
