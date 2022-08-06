@extends('layouts.head')
@section('pageTitle', $product->name )
@section('content')
    <!-- Page Title -->
    <div class="page-title-area">
      <div class="d-table">
          <div class="d-table-cell">
              <div class="container">
                  <div class="title-content">
                      <h2>{{$product->name}}</h2>
                      <ul>
                          <li>
                              <a href="{{ url('/')}}">Home</a>
                          </li>
                          <li>
                              <span>{{$product->name}}</span>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End Page Title -->

<section class="divider mb-5">
  <div class="container pt-50 pb-70">
    <div class="row pt-10">
      <div class="col-md-12">
        <img src="{{ asset('storage') }}/{{ $product->image }}" alt="" class="img-responsive img-fluid" style="height: 320px; width: 100%">
        <p>{!!html_entity_decode($product->description)!!}</p>
      </div>
    </div>
  </div>
</section>
@endsection
