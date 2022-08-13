@extends('layouts.master')
@section('pageTitle', 'Booking Requests')
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
                                <h4>Booking Request</h4>
                            </div>

                            <div class="table-responsive p-2">
                                <table class="table table-hover" id="example2">
                                    <thead>
                                    <tr>
                                        @if(isset($property_set))<th>Property ID</th>@endif
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Phone.NO</th>
                                        <th>Email</th>
                                        <th>Interested in</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($bookings as $booking)
                                        <tr>
                                            <td>{{$loop->index +1}}</td>
                                            <td>{{$booking->name}}</td>
                                            <td>{{$booking->phone}}</td>
                                            <td>{{$booking->email}}</td>
                                            <td>{{$booking->property}}</td>
                                            <td>
                                                  {{-- <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#editSession{{ $booking->id }}">
                                            <i class="fa fa-edit"></i>
                                            </a> --}}
                                        
                                                <a class="btn btn-danger btn-sm" href="#" onclick="event.preventDefault(); document.getElementById('delete{{ $booking->id }}').submit();" class="text-red">
                                                <i class="fa fa-trash"></i>
                                                </a>

                                        <form id="delete{{ $booking->id }}"
                                        action="{{ route('delete.bookings',['id'=>$booking->id]) }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            {{-- {{ Method_field('DELETE') }} --}}
                                        </form>  
                                            </td>
                                        </tr>
                                         {{-- <div class="modal fade mt-5" id="editSession{{ $booking->id }}" tabindex="-1" role="dialog" aria-labelledby="editSession{{ $booking->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addCourseLabel">View request message</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                                <div class="modal-body">
                                                    <div>
                                                        <label>Subject</label>
                                                        <input class="form-control" value="{{$booking->subject}}">
                                                    </div>
                                                    <hr>
                                                    <div>
                                                        <lable>Request Message</label>
                                                        <p class="form-control">
                                                            {{$booking->message}}
                                                        
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                        </div> --}}
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