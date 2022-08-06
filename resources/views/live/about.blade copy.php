@extends('layouts.head')
@section('pageTitle', 'About')
@section('content')

    <!-- Page Title -->
    <div class="page-title-area">
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
    </div>
    <!-- End Page Title -->

    <!-- About -->
    <div class="about-area ptb-100">
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
    </div>
    <!-- End About -->

    <div class="more-info about-info" style="margin-top: 0px;">
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
    </div>
@endsection
