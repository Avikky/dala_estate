@extends('layouts.dalahead')
@section('pageTitle', 'About')
@section('content')

     <div class="content-wrapper">

                <div class="breadcrumb-wrap bg-f br-2">
                    <div class="container">
                        <div class="breadcrumb-title">
                            <h2>About Us</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index.html">Home </a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <section class="about-wrap style3 pt-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="section-title style2 text-center mb-40">
                                    <span>Our Story</span>
                                    <h2>ABOUT DALA PROPERTY</h2>
                                    <p style="text-align:justify">{{substr(strip_tags($setting->about), 0)}}</p>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset('images/abt-img1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </section>

                <section class="advantage-wrap ptb-100">
                    <div class="container">
                        <div class="section-title style1 text-center mb-40">
                            <span>Landmarks</span>
                            <h2>Our Landmark</h2>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-sm-6">
                                <img src="{{asset('images/land3.png')}}" alt="Image">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <img src="{{asset('images/land4.png')}}" alt="Image">
                            </div>
                            <div class="col-md-6 col-sm-6">
                               <img src="{{asset('images/land1.png')}}" alt="Image">
                            </div>
                             <div class="col-md-6 col-sm-6">
                               <img src="{{asset('images/land2.png')}}" alt="Image">
                            </div>
                        </div>
                    </div>
                </section>

                <section class="advantage-wrap ptb-100">
                    <div class="container">
                        <div class="section-title style1 text-center mb-40">
                            <span>Advantages</span>
                            <h2>Our Best Advantages</h2>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="adv-card">
                                    <div class="adv-img">
                                        <img src="{{asset('assets2/img/adv-1.png')}}" alt="Image">
                                    </div>
                                    <div class="adv-info">
                                        <h3>Smart Home Design</h3>
                                        <p>Lorem ipsum dolor sit amet, cons ectetur adip isci ngelit, sed do eiusmod
                                            tem.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="adv-card">
                                    <div class="adv-img">
                                        <img src="{{asset('assets2/img/adv-1.png')}}" alt="Image">
                                    </div>
                                    <div class="adv-info">
                                        <h3>Beautiful Scene Around</h3>
                                        <p>Lorem ipsum dolor sit amet, cons ectetur adip isci ngelit, sed do eiusmod
                                            tem.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="adv-card">
                                    <div class="adv-img">
                                        <img src="{{asset('assets2/img/adv-3.png')}}" alt="Image">
                                    </div>
                                    <div class="adv-info">
                                        <h3>Complete 24/7 Support</h3>
                                        <p>Lorem ipsum dolor sit amet, cons ectetur adip isci ngelit, sed do eiusmod
                                            tem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <div class="pb-100">
                    <div class="container">
                        <div class="video-wrap style1 video-bg-1 bg-f ptb-100">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-8 order-lg-1 order-md-1 order-2">
                                    <div class="video-content">
                                        <div class="content-title style1">
                                            <span>Open Video</span>
                                            <h2>Intro video will go in here</h2>
                                            <p>Best Strategic planning dolor sit amet consectetur adipiscing elit. Scel
                                                erus isque ametus odio velit auctor nam elit nulla eget sodales dui
                                                pulvinar. Best strategic planning dolor sit amet.</p>
                                        </div>
                                        <a href="#" class="btn style2">Check Out Our Property Listings</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-4 order-lg-2 order-md-2 order-1">
                                    <a class="play-video" data-fancybox=""
                                        href="https://youtu.be/-76MIRKRK04">
                                        <span class="play-now icon"><i class="flaticon-play-1"></i>
                                            <span class="ripple"></span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="counter-area style4">
                    <div class="container">
                        <div class="counter-card-wrap style4 bg-white">
                            <div class="counter-card">
                                <span class="counter-icon">
                                    <i class="flaticon-quality-control"></i>
                                </span>
                                <div class="counter-text">
                                    <h2 class="counter-num">
                                        <span class="odometer" data-count="12"></span>
                                        <span class="target">+</span>
                                    </h2>
                                    <p>Years Of Experience</p>
                                </div>
                            </div>
                            <div class="counter-card">
                                <span class="counter-icon">
                                    <i class="flaticon-apartment"></i>
                                </span>
                                <div class="counter-text">
                                    <h2 class="counter-num">
                                        <span class="odometer" data-count="167"></span>
                                        <span class="target">K+</span>
                                    </h2>
                                    <p>Apartments Rent</p>
                                </div>
                            </div>
                            <div class="counter-card">
                                <span class="counter-icon">
                                    <i class="flaticon-office-building"></i>
                                </span>
                                <div class="counter-text">
                                    <h2 class="counter-num">
                                        <span class="odometer" data-count="239"></span>
                                        <span class="target">+</span>
                                    </h2>
                                    <p>Total Constructions</p>
                                </div>
                            </div>
                            <div class="counter-card">
                                <span class="counter-icon">
                                    <i class="flaticon-hand-gesture"></i>
                                </span>
                                <div class="counter-text">
                                    <h2 class="counter-num">
                                        <span class="odometer" data-count="449"></span>
                                        <span class="target">+</span>
                                    </h2>
                                    <p>Apartio Rooms</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Partners begins here -->
                <div class="partner-wrap ptb-100">
                    <div class="container">
                        <div class="partner-slider owl-carousel">
                            @forelse($partners as $partner)
                                <div class="partner-item">
                                <img src="{{asset('storage/'.$partner->image)}}" alt="Image">
                            </div>
                            @empty

                            @endforelse
                        
                        </div>
                    </div>
                </div>
            <!-- End Partners begins here -->

            </div>
@endsection
