@extends('layouts.dalahead')
@section('pageTitle', 'All Properties')
@section('content')


    <div class="content-wrapper">

        <div class="breadcrumb-wrap bg-f br-2">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>All Properties</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{url('')}}">Home </a></li>
                        <li>Properties</li>
                    </ul>
                </div>
            </div>
        </div>


                <section class="listing-wrap ptb-100">
                    <div class="container">
                        <div class="row align-items-center mb-25">
                            <div class="col-xl-9 col-lg-8 col-md-8">
                                <div class="profuct-result">
                                    <p>{{count($properties)}} Results Found</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4">
                                <div class="filter-item-cat">
                                    <select>
                                        <option value="1">Sort By Most Popular</option>
                                        <option value="2">Sort By High To Low</option>
                                        <option value="3">Sort By Low To High</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @forelse ($properties as $property)
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="property-card style5">
                                        <div class="property-img">
                                            <img
                                                src="{{ asset('storage/'. $property->image) }}"
                                                alt="Image"
                                            /> 
                                        </div>
                                        <div class="property-info">
                                            <div class="property-status-wrap">
                                                 <span class="property-status">{{ $property['propertycategory']->name}}</span>
                                                 <span>For</span>
                                                 <span class="property-status">{{ $property['propertyuses']->name}}</span>
                                                <p class="property-price">
                                                <span class="text-primary">&#8358;</span>
                                                {{ $property->maximum_price}}/
                                                    <span>month</span>
                                                </p>
                                            </div>
                                            <h3>
                                                <a href="{{route('singleProperty', ['slug'=>$property->slug])}}"
                                                    >{{ $property->name}}</a
                                                >
                                            </h3>
                                            <p>
                                                <i class="flaticon-location"></i>{{ $property->location}}
                                            </p>
                                        
                                        </div>
                                    </div>
                                </div>
                            @empty
                                No property yet
                            @endforelse
                        </div>
                        <ul class="page-nav list-style mt-10">
                            <li>
                                {{$properties->links()}}
                            </li>
                        </ul>
                    </div>
                </section>

            </div>

@endsection