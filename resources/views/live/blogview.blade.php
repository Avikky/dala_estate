@extends('layouts.dalahead')
@section('pageTitle', $post->title )
@section('content')

   <div class="content-wrapper">

                <div class="breadcrumb-wrap bg-f br-2">
                    <div class="container">
                        <div class="breadcrumb-title">
                            <h2>{{$post->title}}</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="{{'/'}}">Home </a></li>
                                <li>{{$post->title}} </li>
                            </ul>
                        </div>
                    </div>
                </div>


    <section class="listing-wrap ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="property-details">
                        <div class="row align-items-start">
                            <div class="col-md-8">
                                <div class="property-title">
                                    {{-- <h2>{{$post->title}}</h2> --}}
                                    {{-- <ul class="property-metainfo list-style">
                                        <li><i class="flaticon-location"></i>64/A, Ist Aveneu, High Street, Florida, USA</li>
                                        <li><i class="flaticon-square"></i>1310 Sqft</li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                        <div class="property-img">
                            <img src="{{asset('storage/'.$post->featured_image)}}" alt="Image">
                        </div>
                        <div class="property-desc">
                            <h4>{{$post->title}}</h4>
                            <div>
                                {!! $post->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="sidebar">
                        <div class="row justify-content-center">
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
                        </div>
                        <div class="sidebar-widget">
                            <h4>Interested in a Property ..?</h4>
                            <form method="post" action="{{route('bookings')}}" class="filter-widget">
                                @csrf
                                <div class="form-group">
                                <input type="text" name="name" placeholder="Full Name" required>
                                </div>
                                <div class="form-group">
                                <input type="number" name="phone" placeholder="Phone Number" required>
                                </div>
                                <div class="form-group">
                                <input type="email" name="email" placeholder="Email Address" required>
                                </div>
                                <div class="form-group">
                                <select name="property" id="category" required>
                                    <option data-show="Select Property">Select Property</option>
                                    @foreach ($properties as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                        
                                    @endforeach
                                </select>
                                </div>
                                <div class="form-group">
                                <textarea name="booking_msg" id="booking_msg" cols="30" rows="10" placeholder="Your Message"></textarea>
                                </div>
                                <div class="form-group">
                                <button class="btn style2">Request Booking</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

            </div>

@endsection
