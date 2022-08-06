@extends('layouts.dalahead')
@section('pageTitle', 'About')
@section('content')

    <!-- Page Title -->
    <!-- <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>About</h2>
                        <ul>
                            <li>
                                <a href="{{ url('/')}}">Home</a>
                            </li>
                            <li>
                                <span>About</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Page Title -->

    <!-- About -->
    <!-- <div class="about-area ptb-100">
        <div class="about-shape">
            <img src="assets/img/about/about-shape1.png" alt="Shape">
            <img src="assets/img/about/about-shape2.png" alt="Shape">
            <img src="assets/img/about/about-shape3.png" alt="Shape">
        </div>
        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col-lg-5 left-padding">
                    <div class="about-img">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="one">
                                    <img src="assets/img/about/about1.jpg" alt="About">
                                    <img src="assets/img/about/about-shape4.png" alt="Shape">
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="three">
                                    <img src="assets/img/about/about3.jpg" alt="About">
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="two">
                                    <img src="assets/img/about/about2.jpg" alt="About">
                                </div>
                            </div>

                        </div>
                    </div>  
                </div>

                <div class="col-lg-7">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="sub-title">About Our bank</span>
                            <h2>We Help Our Clients To Achieve Their Desired Goals</h2>
                        </div>
                        <div class="middle">
                            <span>UNN Staff Microfinance Bank provides modern banking methods which allow our dear customers to choose from our numerous savings and current account plans to perfectly meet their individual requirements.</span>
                            <p>
                              We have plans for low class, middle class and high class individuals. We also provide innovative banking solutions for business men and women, corporate organizations and NGOs.</p>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li>
                                    <i class="flaticon-workflow"></i>
                                    <h3>
                                        <span class="odometer" data-count="462">00</span>
                                    </h3>
                                    <p>Successful Projects</p>
                                </li>
                                <li>
                                    <i class="flaticon-project"></i>
                                    <h3>
                                        <span class="odometer" data-count="362">00</span>
                                    </h3>
                                    <p>Running Projects</p>
                                </li>
                                <li>
                                    <i class="flaticon-team"></i>
                                    <h3>
                                        <span class="odometer" data-count="562">00</span>
                                    </h3>
                                    <p>Skilled Members</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> -->
    <!-- End About -->

    <!-- <div class="more-info about-info" style="margin-top: 0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <span>OUR SOLID BACKGROUND ON FINANCE</span>
                    <h2>Get to know about <em>our Bank</em></h2>
                    <p>{!!html_entity_decode($setting->about)!!}</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="left-image">
                    <img src="{{ asset('images/about-image.jpg') }}" alt="">
                  </div>
                  <div class="">
                    <div style="margin-top: 30px; margin-left: 10px">
                      <h2 class="heading-section with-line">Our Vision</h2>
                      <p>{{ $setting->vision }}</p>
                    </div>

                    <div style="margin-top: 30px; margin-left: 10px">
                      <h2 class="heading-section with-line">Our Mission</h2>
                      <p>{{ $setting->mission }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

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
                            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                                <div class="section-title style2 text-center mb-40">
                                    <span>ABOUT US</span>
                                    <h2>Fela Awesome Story</h2>
                                    <p>Best Strategic planning dolor sit amet consectetur adipiscing elit. Scel erus
                                        isque ametus odio velit auctor nam elit nulla eget sodales dui pulvinar. Best
                                        strategic planning dolor sit sectetur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="about-img-wrap">
                            <div class="row">
                                <div class="col-5">
                                    <div class="about-bg-2 bg-f"></div>
                                </div>
                                <div class="col-4">
                                    <div class="about-bg-3 bg-f"></div>
                                </div>
                                <div class="col-3">
                                    <div class="about-bg-4 bg-f"></div>
                                </div>
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
                            <div class="col-12 text-center mt-10">
                                <a href="listings-one.html" class="btn style1">Explore Properties</a>
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
                                            <h2>Attend A Virtual Open Apartments</h2>
                                            <p>Best Strategic planning dolor sit amet consectetur adipiscing elit. Scel
                                                erus isque ametus odio velit auctor nam elit nulla eget sodales dui
                                                pulvinar. Best strategic planning dolor sit amet.</p>
                                        </div>
                                        <a href="listings-two.html" class="btn style2">Explore Property</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-4 order-lg-2 order-md-2 order-1">
                                    <a class="play-video" data-fancybox=""
                                        href="https://www.youtube.com/watch?v=Qj59_LGUBvE&amp;t=1s">
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


                <section class="testimonial-wrap ptb-100 bg-seashell ">
                    <img src="assets/img/shape-1.png" alt="Image" class="testimonial-shape-one">
                    <div class="container">
                        <div class="section-title style1 text-center mb-40">
                            <span>See Our Reviews</span>
                            <h2>What Our Users Say About Us</h2>
                        </div>
                        <div class="testimonial-slider-one owl-carousel">
                            <div class="testimonial-card style1">
                                <div class="client-img">
                                    <img src="{{asset('assets2/img/clients/client-1.jpg')}}" alt="Image">
                                </div>
                                <div class="quote-wrap">
                                    <p class="client-quote">
                                        Lorem ipsum dolor sit amet adip elitions repellat tetur delni vel quam aliq
                                        earum explibo dolor eme fugiat enim illumon.
                                    </p>
                                    <div class="client-info-wrap">
                                        <div class="client-info">
                                            <h5>Alexandar Mason</h5>
                                            <span>Managing Director, IBAC</span>
                                        </div>
                                        <div class="ratings">
                                            <i class="flaticon-star"></i>
                                            4.8
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card style1">
                                <div class="client-img">
                                    <img src="{{asset('assets2/img/clients/client-2.jpg')}}" alt="Image">
                                </div>
                                <div class="quote-wrap">
                                    <p class="client-quote">
                                        Lorem ipsum dolor sit amet adip elitions repellat tetur delni vel quam aliq
                                        earum explibo dolor eme fugiat enim illumon.
                                    </p>
                                    <div class="client-info-wrap">
                                        <div class="client-info">
                                            <h5>David Watson</h5>
                                            <span>Director, BAT</span>
                                        </div>
                                        <div class="ratings">
                                            <i class="flaticon-star"></i>
                                            4.7
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card style1">
                                <div class="client-img">
                                    <img src="{{asset('assets2/img/clients/client-3.jpg')}}" alt="Image">
                                </div>
                                <div class="quote-wrap">
                                    <p class="client-quote">
                                        Lorem ipsum dolor sit amet adip elitions repellat tetur delni vel quam aliq
                                        earum explibo dolor eme fugiat enim illumon.
                                    </p>
                                    <div class="client-info-wrap">
                                        <div class="client-info">
                                            <h5>Tom Haris</h5>
                                            <span>Civil Engineer, Olleo</span>
                                        </div>
                                        <div class="ratings">
                                            <i class="flaticon-star"></i>
                                            4.7
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card style1">
                                <div class="client-img">
                                    <img src="{{asset('assets2/img/clients/client-4.jpg')}}" alt="Image">
                                </div>
                                <div class="quote-wrap">
                                    <p class="client-quote">
                                        Lorem ipsum dolor sit amet adip elitions repellat tetur delni vel quam aliq
                                        earum explibo dolor eme fugiat enim illumon.
                                    </p>
                                    <div class="client-info-wrap">
                                        <div class="client-info">
                                            <h5>Chris Jackson</h5>
                                            <span>Enterpreneur</span>
                                        </div>
                                        <div class="ratings">
                                            <i class="flaticon-star"></i>
                                            4.9
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card style1">
                                <div class="client-img">
                                    <img src="{{asset('assets2/img/clients/client-5.jpg')}}" alt="Image">
                                </div>
                                <div class="quote-wrap">
                                    <p class="client-quote">
                                        Lorem ipsum dolor sit amet adip elitions repellat tetur delni vel quam aliq
                                        earum explibo dolor eme fugiat enim illumon.
                                    </p>
                                    <div class="client-info-wrap">
                                        <div class="client-info">
                                            <h5>Robert Muller</h5>
                                            <span>MD, ITec</span>
                                        </div>
                                        <div class="ratings">
                                            <i class="flaticon-star"></i>
                                            4.9
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card style1">
                                <div class="client-img">
                                    <img src="{{asset('assets2/img/clients/client-6.jpg')}}" alt="Image">
                                </div>
                                <div class="quote-wrap">
                                    <p class="client-quote">
                                        Lorem ipsum dolor sit amet adip elitions repellat tetur delni vel quam aliq
                                        earum explibo dolor eme fugiat enim illumon.
                                    </p>
                                    <div class="client-info-wrap">
                                        <div class="client-info">
                                            <h5>Mark Owen</h5>
                                            <span>Enterpreneur</span>
                                        </div>
                                        <div class="ratings">
                                            <i class="flaticon-star"></i>
                                            4.9
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <div class="partner-wrap ptb-100">
                    <div class="container">
                        <div class="partner-slider owl-carousel">
                            <div class="partner-item">
                                <img src="assets/img/partner/partner-1.png" alt="Image">
                            </div>
                            <div class="partner-item">
                                <img src="assets/img/partner/partner-2.png" alt="Image">
                            </div>
                            <div class="partner-item">
                                <img src="assets/img/partner/partner-3.png" alt="Image">
                            </div>
                            <div class="partner-item">
                                <img src="assets/img/partner/partner-4.png" alt="Image">
                            </div>
                            <div class="partner-item">
                                <img src="assets/img/partner/partner-5.png" alt="Image">
                            </div>
                            <div class="partner-item">
                                <img src="assets/img/partner/partner-6.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
@endsection
