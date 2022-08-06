@extends('layouts.head')
@section('pageTitle', 'Products')
@section('content')

    <!-- Page Title -->
    <div class="page-title-area">
      <div class="d-table">
          <div class="d-table-cell">
              <div class="container">
                  <div class="title-content">
                      <h2>Products</h2>
                      <ul>
                          <li>
                              <a href="{{ url('/')}}">Home</a>
                          </li>
                          <li>
                              <span>Products</span>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End Page Title -->


<div class="services mb-3" style="margin-top: 30px;">
      <div class="container">
        <div class="row">
          @forelse($allproducts as $product)
            <div class="col-md-4">
              <div class="service-item">
                <img src="{{ asset('storage') }}/{{ $product->image }}" alt="" style="height: 212px;  width: 100%">
                <div class="down-content">
                  <h4>{{ $product->name }}</h4>
                  <p>{{ substr(strip_tags($product->description) , 0, 100) }}</p>
                  <a href="{{ url('/product') }}/{{ $product->slug }}" class="btn-link">Learn More</a>
                </div>
              </div>
            </div>
          @empty
          @endforelse
        </div>
      </div>
    </div>





@endsection
