@extends('layouts.master')
@section('pageTitle', 'Contact')
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
                                <h4>Contact Request</h4>
                            </div>

                            <div class="table-responsive p-2">
                                <table class="table table-hover" id="example2">
                                    <thead>
                                    <tr>
                                        @if(isset($property_set))<th>Property ID</th>@endif
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($contacts as $contact)
                                        <tr>
                                            <td>{{$loop->index +1}}</td>
                                            <td>{{$contact->name}}</td>
                                            <td>{{$contact->email}}</td>
                                            <td>{{$contact->subject}}</td>
                                            <td>{{$contact->message}}</td>
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