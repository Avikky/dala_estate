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
                                    <p>15 Results Found</p>
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
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="property-card style4">
                                    <div class="property-img">
                                        <img src="assets/img/property/property-20.jpg" alt="Image">
                                        <span class="property-status">For Rent</span>
                                    </div>
                                    <div class="property-info">
                                        <h3><a href="listing-details.html">Luxury &amp; Modern Villa</a></h3>
                                        <p><i class="flaticon-location"></i>4521 Hilltop Street, Saint Just</p>
                                        <ul class="property-metainfo list-style">
                                            <li><i class="flaticon-double-bed"></i>05</li>
                                            <li><i class="flaticon-bath-tub"></i>04</li>
                                            <li><i class="flaticon-square"></i>1300 sqft</li>
                                        </ul>
                                        <p class="property-price">$35,000/<span>month</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="property-card style4">
                                    <div class="property-img">
                                        <img src="assets/img/property/property-21.jpg" alt="Image">
                                        <span class="property-status">For Rent</span>
                                    </div>
                                    <div class="property-info">
                                        <h3><a href="listing-details.html">Villa In Luis Park</a></h3>
                                        <p><i class="flaticon-location"></i>64, 1st Aveneu, High Steet, USA</p>
                                        <ul class="property-metainfo list-style">
                                            <li><i class="flaticon-double-bed"></i>06</li>
                                            <li><i class="flaticon-bath-tub"></i>04</li>
                                            <li><i class="flaticon-square"></i>3110 sqft</li>
                                        </ul>
                                        <p class="property-price">$34,900/<span>month</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="property-card style4">
                                    <div class="property-img">
                                        <img src="assets/img/property/property-22.jpg" alt="Image">
                                        <span class="property-status">For Rent</span>
                                    </div>
                                    <div class="property-info">
                                        <h3><a href="listing-details.html">Villa For Rent</a></h3>
                                        <p><i class="flaticon-location"></i>2983 Edwards Street, Rocky Mount</p>
                                        <ul class="property-metainfo list-style">
                                            <li><i class="flaticon-double-bed"></i>04</li>
                                            <li><i class="flaticon-bath-tub"></i>02</li>
                                            <li><i class="flaticon-square"></i>1100 sqft</li>
                                        </ul>
                                        <p class="property-price">$22,000/<span>month</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="property-card style4">
                                    <div class="property-img">
                                        <img src="assets/img/property/property-29.jpg" alt="Image">
                                        <span class="property-status">For Sale</span>
                                    </div>
                                    <div class="property-info">
                                        <h3><a href="listing-details.html">Condo For Sale </a></h3>
                                        <p><i class="flaticon-location"></i>1160 Horizon Circle, Pennsylvania</p>
                                        <ul class="property-metainfo list-style">
                                            <li><i class="flaticon-double-bed"></i>05</li>
                                            <li><i class="flaticon-bath-tub"></i>04</li>
                                            <li><i class="flaticon-square"></i>2300 sqft</li>
                                        </ul>
                                        <p class="property-price">$44,900</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="property-card style4">
                                    <div class="property-img">
                                        <img src="assets/img/property/property-30.jpg" alt="Image">
                                        <span class="property-status">For Rent</span>
                                    </div>
                                    <div class="property-info">
                                        <h3><a href="listing-details.html">Apartment For Rent </a></h3>
                                        <p><i class="flaticon-location"></i>849 Stuart Street, Houston</p>
                                        <ul class="property-metainfo list-style">
                                            <li><i class="flaticon-double-bed"></i>07</li>
                                            <li><i class="flaticon-bath-tub"></i>04</li>
                                            <li><i class="flaticon-square"></i>1200 sqft</li>
                                        </ul>
                                        <p class="property-price">$54,900/<span>month</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="property-card style4">
                                    <div class="property-img">
                                        <img src="assets/img/property/property-31.jpg" alt="Image">
                                        <span class="property-status">For Sale</span>
                                    </div>
                                    <div class="property-info">
                                        <h3><a href="listing-details.html">Villa In Lake View</a></h3>
                                        <p><i class="flaticon-location"></i>1160 Horizon Circle, Pennsylvania</p>
                                        <ul class="property-metainfo list-style">
                                            <li><i class="flaticon-double-bed"></i>03</li>
                                            <li><i class="flaticon-bath-tub"></i>04</li>
                                            <li><i class="flaticon-square"></i>2200 sqft</li>
                                        </ul>
                                        <p class="property-price">$24,900</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="page-nav list-style mt-10">
                            <li><a href="listings-one.html"><i class="flaticon-back"></i></a></li>
                            <li><a class="active" href="listings-one.html">1</a></li>
                            <li><a href="listings-one.html">2</a></li>
                            <li><a href="listings-one.html">3</a></li>
                            <li><a href="listings-one.html"><i class="flaticon-next-1"></i></a></li>
                        </ul>
                    </div>
                </section>

            </div>

@endsection