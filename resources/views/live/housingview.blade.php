@extends('layouts.dalahead')
@section('pageTitle', $housing->name )
@section('content')


  <div class="content-wrapper">

                <div class="breadcrumb-wrap bg-f br-1">
                    <div class="container">
                        <div class="breadcrumb-title">
                            <h2>{{$housing->name}}</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index.html">Home </a></li>
                                <li>{{$housing->name}}</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <section class="listing-wrap ptb-100">
                    <div class="container">
                        <div class="row gx-5">
                            <div class="col-xl-8">
                                <div class="row align-items-center mb-25">
                                    <div class="col-md-8">
                                        <div class="profuct-result">
                                            <p>15 Results Found</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
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
                                    <div class="col-lg-6 col-md-6">
                                        <div class="property-card style2">
                                            <div class="property-img-slider owl-carousel">
                                                <img src="{{asset('assets2/img/property/property-10.jpg')}}" alt="Image">
                                                <img src="{{asset('assets2/img/property/property-1.jpg')}}" alt="Image">
                                                <img src="{{asset('assets2/img/property/property-11.jpg')}}" alt="Image">
                                            </div>
                                            <div class="property-info">
                                                <div class="property-status-wrap">
                                                    <span class="property-status">For Rent</span>
                                                    <p class="property-price">$34,900/<span>month</span></p>
                                                </div>
                                                <h3><a href="listing-details.html">Villa In Luis Park</a></h3>
                                                <p><i class="flaticon-location"></i>64, 1st Aveneu, High Steet, USA</p>
                                                <ul class="property-metainfo list-style">
                                                    <li><i class="flaticon-double-bed"></i>06</li>
                                                    <li><i class="flaticon-bath-tub"></i>04</li>
                                                    <li><i class="flaticon-square"></i>3100 sqft</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="property-card style2">
                                            <div class="property-img-slider owl-carousel">
                                                <img src="{{asset('assets2/img/property/property-2.jpg')}}" alt="Image">
                                                <img src="{{asset('assets2/img/property/property-7.jpg')}}" alt="Image">
                                                <img src="{{asset('assets2/img/property/property-8.jpg')}}" alt="Image">
                                            </div>
                                            <div class="property-info">
                                                <div class="property-status-wrap">
                                                    <span class="property-status">For Sale</span>
                                                    <p class="property-price">$21,400</p>
                                                </div>
                                                <h3><a href="listing-details.html">Modern Apartment</a></h3>
                                                <p><i class="flaticon-location"></i>123/A, Miles Ave, North Steet, USA
                                                </p>
                                                <ul class="property-metainfo list-style">
                                                    <li><i class="flaticon-double-bed"></i>05</li>
                                                    <li><i class="flaticon-bath-tub"></i>03</li>
                                                    <li><i class="flaticon-square"></i>2500 sqft</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="property-card style2">
                                            <div class="property-img-slider owl-carousel">
                                                <img src="{{asset('assets2/img/property/property-3.jpg')}}" alt="Image">
                                                <img src="{{asset('assets2/img/property/property-9.jpg')}}" alt="Image">
                                                <img src="{{asset('assets2/img/property/property-17.jpg')}}" alt="Image">
                                            </div>
                                            <div class="property-info">
                                                <div class="property-status-wrap">
                                                    <span class="property-status">For Rent</span>
                                                    <p class="property-price">$44,900/<span>month</span></p>
                                                </div>
                                                <h3><a href="listing-details.html">Apartment For Rent</a></h3>
                                                <p><i class="flaticon-location"></i>732 Burwell Heights Road, Houston
                                                </p>
                                                <ul class="property-metainfo list-style">
                                                    <li><i class="flaticon-double-bed"></i>07</li>
                                                    <li><i class="flaticon-bath-tub"></i>04</li>
                                                    <li><i class="flaticon-square"></i>4110 sqft</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="property-card style2">
                                            <div class="property-img-slider owl-carousel">
                                                <img src="{{asset('assets2/img/property/property-4.jpg')}}" alt="Image">
                                                <img src="{{asset('assets2/img/property/property-13.jpg')}}" alt="Image">
                                                <img src="{{asset('assets2/img/property/property-12.jpg')}}" alt="Image">
                                            </div>
                                            <div class="property-info">
                                                <div class="property-status-wrap">
                                                    <span class="property-status">For Rent</span>
                                                    <p class="property-price">$25,900/<span>month</span></p>
                                                </div>
                                                <h3><a href="listing-details.html">Dreamy Penthouse</a></h3>
                                                <p><i class="flaticon-location"></i>4890 Grey Fox Fam Road, Houston</p>
                                                <ul class="property-metainfo list-style">
                                                    <li><i class="flaticon-double-bed"></i>05</li>
                                                    <li><i class="flaticon-bath-tub"></i>02</li>
                                                    <li><i class="flaticon-square"></i>2210 sqft</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="property-card style2">
                                            <div class="property-img-slider owl-carousel">
                                                <img src="{{asset('assets2/img/property/property-5.jpg')}}" alt="Image">
                                                <img src="{{asset('assets2/img/property/property-17.jpg')}}" alt="Image">
                                                <img src="{{asset('assets2/img/property/property-18.jpg')}}" alt="Image">
                                            </div>
                                            <div class="property-info">
                                                <div class="property-status-wrap">
                                                    <span class="property-status">For Rent</span>
                                                    <p class="property-price">$34,900/<span>month</span></p>
                                                </div>
                                                <h3><a href="listing-details.html">Luxury Apartment</a></h3>
                                                <p><i class="flaticon-location"></i>2665 Blair Court, Dalton, Missouri
                                                </p>
                                                <ul class="property-metainfo list-style">
                                                    <li><i class="flaticon-double-bed"></i>04</li>
                                                    <li><i class="flaticon-bath-tub"></i>02</li>
                                                    <li><i class="flaticon-square"></i>2800 sqft</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="property-card style2">
                                            <div class="property-img-slider owl-carousel">
                                                <img src="{{asset('assets2/img/property/property-6.jpg')}}" alt="Image">
                                                <img src="{{asset('assets2/img/property/property-19.jpg')}}" alt="Image">
                                                <img src="{{asset('assets2/img/property/property-23.jpg')}}" alt="Image">
                                            </div>
                                            <div class="property-info">
                                                <div class="property-status-wrap">
                                                    <span class="property-status">For Sale</span>
                                                    <p class="property-price">$44,000</p>
                                                </div>
                                                <h3><a href="listing-details.html">Flat For Sale</a></h3>
                                                <p><i class="flaticon-location"></i>1849 Woodbridge Lane, Michigan</p>
                                                <ul class="property-metainfo list-style">
                                                    <li><i class="flaticon-double-bed"></i>06</li>
                                                    <li><i class="flaticon-bath-tub"></i>05</li>
                                                    <li><i class="flaticon-square"></i>4000 sqft</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="listings-one.html" class="btn style1 mt-20">Load More Listings</a>
                            </div>
                            <div class="col-xl-4">
                                <div class="sidebar">
                                    <div class="sidebar-widget">
                                        <h4>Filter By Features</h4>
                                        <form action="#" class="filter-widget">
                                            <div class="form-group">
                                                <label for="price-range">Radius Around Distance</label>
                                                <div id="slider-range" class="price-range mar-bot-20"></div>
                                                <input type="text" id="amount_one">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Keywords">
                                            </div>
                                            <div class="form-group">
                                                <select name="category" id="category">
                                                    <option data-show="Filter By Category" value="0">Filter By Category
                                                    </option>
                                                    <option value="1">Apartment</option>
                                                    <option value="2">Villa</option>
                                                    <option value="3">Condo</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select name="region" id="region">
                                                    <option data-show="Filter By Region" value="0">Filter By Region
                                                    </option>
                                                    <option value="1">Apartment</option>
                                                    <option value="2">Villa</option>
                                                    <option value="3">Condo</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select name="region" id="region">
                                                    <option data-show="Filter By Region" value="0">Filter By Region
                                                    </option>
                                                    <option value="1">Apartment</option>
                                                    <option value="2">Villa</option>
                                                    <option value="3">Condo</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select name="city" id="city">
                                                    <option data-show="Filter By City" value="0">Filter By City</option>
                                                    <option value="1">Apartment</option>
                                                    <option value="2">Villa</option>
                                                    <option value="3">Condo</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select name="type" id="type">
                                                    <option data-show="Filter By Type" value="0">Filter By Type</option>
                                                    <option value="1">Apartment</option>
                                                    <option value="2">Villa</option>
                                                    <option value="3">Condo</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Location">
                                            </div>
                                            <div class="form-group">
                                                <select name="price_range" id="price_range">
                                                    <option data-show="Price Range" value="0">Price Range</option>
                                                    <option value="1">$1000 - $2000</option>
                                                    <option value="2">$2000 - $3000</option>
                                                    <option value="3">$3000 - $4000</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn style2 d-block w-100">Filter By Features</button>
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
