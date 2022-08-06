@extends('layouts.live')
@section('pageTitle', $property->title )
@section('content')
<div class="page-title-wrap typo-white">
  <div class="section-bg-img p-5" data-bg="{{ asset('live/images/page-title.jpg') }}">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <div class="page-title-inner">
            <h1 class="page-title mb-3" style="color: #fff">{{ $property->title }}</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="content-wrapper pad-none">
  <div class="content-inner">
    <section id="propertys-section" class="propertys-section">
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
          <div class="col-md-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 img-height" src="{{ asset('storage') }}/{{ $property->image1 }}">
                </div>

                @if($property->image2)
                <div class="carousel-item">
                    <img class="w-100 img-height" src="{{ asset('storage') }}/{{ $property->image2 }}">
                </div>
                @endif

                @if($property->image3)
                <div class="carousel-item">
                    <img class="w-100 img-height" src="{{ asset('storage') }}/{{ $property->image3 }}">
                </div>
                @endif

                @if($property->image4)
                <div class="carousel-item">
                    <img class="w-100 img-height" src="{{ asset('storage') }}/{{ $property->image4 }}">
                </div>
                @endif

                @if($property->image5)
                <div class="carousel-item">
                    <img class="w-100 img-height" src="{{ asset('storage') }}/{{ $property->image5 }}">
                </div>
                @endif

                @if($property->image6)
                <div class="carousel-item">
                    <img class="w-100 img-height" src="{{ asset('storage') }}/{{ $property->image6 }}">
                </div>
                @endif
              </div>

              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

            <div class="p-5">
              <h4>{{ $property->title }}</h4>
              <p style="text-align: justify;">{!!html_entity_decode($property->description)!!}</p>
            </div>
            <hr>
            <p>Phone Number: <b>{{ $setting->phone }}</b><br> You can also use the enquiry form.</p>
          </div>
          <div class="col-md-4">
            <div class="product-wrap">
              <div class="product-inner">
                <div class="product-details">
                  <div class="product-title">
                    <h2 class="single-product-name">{{ $property->title }}</h2>
                  </div>

                  <div class="product-pricing my-4">
                    <span class="offer-price"><span>&#8358;</span>{{ $property->price }}</span>
                    <span class="offer-price float-right" style="background: #0060d6; padding: 5px; border-radius: 10px;color: #fff">{{ $property->status }}</span>
                  </div>
                  <div class="product-pricing my-4">
                    <span class="fa fa-address-book"> {{ $property->address }} {{ $property->city }} {{ $property->state }}</span>
                  </div>

                  <div class="product-meta p-3">
                    <p>{{ $property->type }}</p>
                    <p>Room Size: <b>{{ $property->room_size }} Square meter</b></span>
                    <p>Room Size: <b>{{ $property->room_size }} Square meter</b></span>
                    <p>Bedroom: <b>{{ $property->bedrooms }}</b></span>
                    <p>Bathroom: <b>{{ $property->bathrooms }}</b></span>
                    <p>Toilet: <b>{{ $property->toilets  }}</b></span>
                  </div>

                  <div class="p-3 card">
                    <div class="card-header">
                      <div class="card-title"><h2>ENQUIRY FORM</h2></div>
                    </div>
                    
                    <form method="POST" action="{{ url('enquiry') }}">
                      <div class="card-body">
                        @csrf
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Fullname" name="name" required="">
                          <input type="hidden" name="property_id" value="{{ $property->property_id }}">
                        </div>

                        <div class="input-group">
                          <input type="tel" class="form-control" placeholder="Phone Number" name="phone" required="">
                        </div>
                         
                        <div class="input-group">
                          <input type="email" class="form-control" placeholder="Email Address" name="email" required="">
                        </div>

                        <div class="input-group">
                          <textarea class="form-control" placeholder="Your Message" name="message"></textarea>
                        </div>
                      </div>
                      <div class="input-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="product-related-slider-section pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap">
              <div class="section-title">
                <h3 class="title text-uppercase">Similar Property Listing</h3>
                <span class="border-bottom"></span>
              </div>
            </div>
            <div class="product-slider-wrap">
              <div class="owl-carousel product-related-slider product-slider-1" data-loop="1" data-nav="0" data-dots="0" data-autoplay="1" data-autoplaypause="1" data-autoplaytime="5000" data-smartspeed="1000" data-margin="60" data-items="3" data-items-tab="2" data-items-mob="1">
                @forelse($properties as $property)
                  <div class="item">
                    <div class="product-wrap">
                      <div class="product-inner">
                        <div class="product-thumb mb-4 relative">
                          <img src="{{ asset('storage') }}/{{ $property->image1 }}" class="img-fluid thumb"/>
                        </div>
                        <div class="product-details text-center">
                          <div class="product-title">
                            <h4 class="mb-1">
                              <a href="{{ url('/realtor') }}/{{ $property->property_id }}" class="product-name font-w-600">{{ $property->title }}</a>
                            </h4>
                          </div>

                          <div class="portfolio-category">
                            <span class="category-item">{{ $property->address }} <br> {{ $property->city }} {{ $property->state }} State</span>
                          </div>

                          <div class="product-pricing mt-1">
                              <span class="offer-price"><span>&#8358;</span>{{ $property->price }}</span>
                          </div>

                          <div class="portfolio-category">
                            <span class="category-item p-2">{{ $property->status }}</span>
                          </div>

                          <div class="portfolio-category">
                            <span class="category-item">
                              <a href="{{ url('/realtor') }}/{{ $property->property_id }}" class="btn btn-info" style="color: #fff;">View</a>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @empty
                @endforelse 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection
