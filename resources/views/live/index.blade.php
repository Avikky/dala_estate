
@extends('layouts.dalahead')
@section('pageTitle', 'Home')
@section('content')

<!-- Banner -->
     <section class="hero-wrap style3">
        <div class="hero-slider-two owl-carousel">
            @foreach($sliders as $slider)
            <div class="hero-slide-item"
            style="background-image: url( {{asset('storage/'.$slider->image) }} );
            background-position: center center; background-size: cover;background-repeat: no-repeat;
            background-color: #ddd;">
            </div>
            @endforeach
        </div>
        <div class="hero-content">
            <div class="row">
                @foreach($sliders->take(1) as $slider)
                    <div class="col-xxl-8 offset-xxl-2 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                        <h3 style="color: #fff;" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                            {{$slider->title}}
                        </h3>
                        <p data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                            {{$slider->description}}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
<!-- End Banner -->  
<!-- building preview -->
     <section class="city-wrap style3 ptb-100">
                <img
                    src="{{asset('assets2/img/city/city-shape-2.png')}}"
                    alt="Image"
                    class="city-shape-two"
                />
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="section-title style2 text-center mb-40">
                                <span>CHOOSE FROM OUR DIFFERENT Property Category</span>
                                <h2>Our Hottest Most Sort out Properties</h2>
                            </div>
                        </div>
                    </div>
                    <div class="city-slider-two owl-carousel">
                        @foreach($galleries as $gallery)
                            <div class="city-card style3">
                                <img
                                    src="{{asset('storage/'. $gallery->file_path)}}"
                                    alt="Image"
                                />
                                <p>Best sales</p>
                                <h3>
                                    <a href="{{route('gallery')}}">{{$gallery->name}}</a>
                                </h3>
                                <p>{{$gallery->description}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
    </section>
<!-- end building preview -->
<!-- About -->
     <section class="about-wrap style2 pt-100 bg-seashell">
                <div class="container">
                    <div class="about-box">
                        <img
                            src="assets/img/about/about-shape-3.png"
                            alt="Image"
                            class="about-shape-three"
                        />
                        <div class="row gx-5 align-items-center">
                            <div
                                class="col-lg-6"
                                data-aos="fade-right"
                                data-aos-duration="1200"
                                data-aos-delay="200"
                            >
                                <div
                                    class="about-img-wrap about-bg-1 bg-f"
                                ></div>
                            </div>
                            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                          
                                <div class="about-content">
                                    <div class="content-title style2">
                                      <h3>  <span>ABOUT US</span></h3>
                                        <!-- <h4>
                                            Enjoy Our Property For A Weekend
                                            Longer Stay
                                         
                                        </h4> -->
                                        <p>
                                            {!! html_entity_decode(substr(strip_tags($setting->about) , 0, 150)) !!}

                                        </p>
                                    </div> 
                                    <h5>OUR CORE VALUES ARE</h5>
                                    <ul class="content-feature-list list-style">
                                        <li>
                                            <i class="flaticon-checked"></i>INTEGRITY</li>
                                        <li>
                                            <i class="flaticon-checked"></i>COMPETENCE</li>
                                        <li>
                                            <i class="flaticon-checked"></i
                                            >CREDIBILITY</li>
                                        <li>
                                            <i class="flaticon-checked"></i
                                            >TEAM WORK</li>
                                        <li>
                                            <i class="flaticon-checked"></i
                                            >PROMPT DELIVERY</li>
                                        <li>
                                            <i class="flaticon-checked"></i
                                            >QUALITY CLIENT / CUSTOMER SERVICE</li>
                                    </ul>
                                    <a href="{{route('about')}}" class="btn style2"
                                        >Learn More</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="counter-area pt-100 pb-75">
                    <div class="container">
                        <div class="counter-card-wrap style3">
                            <div class="counter-card">
                                <span class="counter-icon">
                                    <i class="flaticon-quality-control"></i>
                                </span>
                                <div class="counter-text">
                                    <h2 class="counter-num">
                                        <span
                                            class="odometer"
                                            data-count="12"
                                        ></span>
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
                                        <span
                                            class="odometer"
                                            data-count="167"
                                        ></span>
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
                                        <span
                                            class="odometer"
                                            data-count="239"
                                        ></span>
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
                                        <span
                                            class="odometer"
                                            data-count="449"
                                        ></span>
                                        <span class="target">+</span>
                                    </h2>
                                    <p>Apartio Rooms</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
<!--End About -->

<!-- properties -->
     <section class="property-wrap ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="section-title style2 text-center mb-40">
                                <span>OUR PROPERTIES</span>
                                <h2>Latest House Listings</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-slider-three owl-carousel">
                    <div class="property-card style5">
                        <div class="property-img">
                             <img
                                src="{{ asset('assets2/img/property/property-10.jpg') }}"
                                alt="Image"
                            /> 
                        </div>
                        <div class="property-info">
                            <div class="property-status-wrap">
                                <span class="property-status">For Rent</span>
                                <p class="property-price">
                                    $34,900/<span>month</span>
                                </p>
                            </div>
                            <h3>
                                <a href="listing-details.html"
                                    >Villa In Luis Park</a
                                >
                            </h3>
                            <p>
                                <i class="flaticon-location"></i>64, 1st Aveneu,
                                High Steet, USA
                            </p>
                            <ul class="property-metainfo list-style">
                                <li><i class="flaticon-double-bed"></i>06</li>
                                <li><i class="flaticon-bath-tub"></i>04</li>
                                <li>
                                    <i class="flaticon-square"></i>3100 sqft
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="property-card style5">
                        <div class="property-img">
                            <img
                                src="{{asset('assets2/img/property/property-2.jpg')}}"

                                alt="Image"
                            />
                        </div>
                        <div class="property-info">
                            <div class="property-status-wrap">
                                <span class="property-status">For Sale</span>
                                <p class="property-price">$21,400</p>
                            </div>
                            <h3>
                                <a href="listing-details.html"
                                    >Modern Apartment</a
                                >
                            </h3>
                            <p>
                                <i class="flaticon-location"></i>123/A, Miles
                                Ave, North Steet, USA
                            </p>
                            <ul class="property-metainfo list-style">
                                <li><i class="flaticon-double-bed"></i>05</li>
                                <li><i class="flaticon-bath-tub"></i>03</li>
                                <li>
                                    <i class="flaticon-square"></i>2500 sqft
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="property-card style5">
                        <div class="property-img">
                            <img
                                src="{{asset('assets2/img/property/property-3.jpg')}}"

                                alt="Image"
                            />
                        </div>
                        <div class="property-info">
                            <div class="property-status-wrap">
                                <span class="property-status">For Rent</span>
                                <p class="property-price">
                                    $44,900/<span>month</span>
                                </p>
                            </div>
                            <h3>
                                <a href="listing-details.html"
                                    >Apartment For Rent</a
                                >
                            </h3>
                            <p>
                                <i class="flaticon-location"></i>732 Burwell
                                Heights Road, Houston
                            </p>
                            <ul class="property-metainfo list-style">
                                <li><i class="flaticon-double-bed"></i>07</li>
                                <li><i class="flaticon-bath-tub"></i>04</li>
                                <li>
                                    <i class="flaticon-square"></i>4110 sqft
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="property-card style5">
                        <div class="property-img">
                            <img
                                src="{{asset('assets2/img/property/property-4.jpg')}}"

                                alt="Image"
                            />
                        </div>
                        <div class="property-info">
                            <div class="property-status-wrap">
                                <span class="property-status">For Rent</span>
                                <p class="property-price">
                                    $25,900/<span>month</span>
                                </p>
                            </div>
                            <h3>
                                <a href="listing-details.html"
                                    >Dreamy Penthouse</a
                                >
                            </h3>
                            <p>
                                <i class="flaticon-location"></i>4890 Grey Fox
                                Fam Road, Houston
                            </p>
                            <ul class="property-metainfo list-style">
                                <li><i class="flaticon-double-bed"></i>05</li>
                                <li><i class="flaticon-bath-tub"></i>02</li>
                                <li>
                                    <i class="flaticon-square"></i>2210 sqft
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="property-card style5">
                        <div class="property-img">
                            <img
                                src="{{asset('assets2/img/property/property-5.jpg')}}"

                                alt="Image"
                            />
                        </div>
                        <div class="property-info">
                            <div class="property-status-wrap">
                                <span class="property-status">For Rent</span>
                                <p class="property-price">
                                    $34,900/<span>month</span>
                                </p>
                            </div>
                            <h3>
                                <a href="listing-details.html"
                                    >Luxury Apartment</a
                                >
                            </h3>
                            <p>
                                <i class="flaticon-location"></i>2665 Blair
                                Court, Dalton, Missouri
                            </p>
                            <ul class="property-metainfo list-style">
                                <li><i class="flaticon-double-bed"></i>04</li>
                                <li><i class="flaticon-bath-tub"></i>02</li>
                                <li>
                                    <i class="flaticon-square"></i>2800 sqft
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="property-card style5">
                        <div class="property-img">
                            <img
                                src="{{asset('assets2/img/property/property-6.jpg')}}"

                                alt="Image"
                            />
                        </div>
                        <div class="property-info">
                            <div class="property-status-wrap">
                                <span class="property-status">For Sale</span>
                                <p class="property-price">$44,000</p>
                            </div>
                            <h3>
                                <a href="listing-details.html">Flat For Sale</a>
                            </h3>
                            <p>
                                <i class="flaticon-location"></i>1849 Woodbridge
                                Lane, Michigan
                            </p>
                            <ul class="property-metainfo list-style">
                                <li><i class="flaticon-double-bed"></i>06</li>
                                <li><i class="flaticon-bath-tub"></i>05</li>
                                <li>
                                    <i class="flaticon-square"></i>4000 sqft
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
    </section>
<!-- end properties -->


<!-- video clip -->
     <div class="video-wrap style3 ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                            <div class="section-title style2 text-center mb-40">
                                <span>INTRO VIDEO</span>
                                <h2>Enjoy Our Video Tour</h2>
                            </div>
                        </div>
                    </div>
                    <div class="outer">
                        <div id="big" class="owl-carousel owl-theme">
                            <div class="video-bg video-bg-1 bg-f">
                                <a
                                    class="play-video"
                                    data-fancybox=""
                                    href="#"
                                >
                                    <span class="play-now icon"
                                        ><i class="flaticon-play-1"></i>
                                        <span class="ripple"></span
                                    ></span>
                                </a>
                            </div>
                            <div class="video-bg video-bg-2 bg-f">
                                <a
                                    class="play-video"
                                    data-fancybox=""
                                    href="#"
                                >
                                    <span class="play-now icon"
                                        ><i class="flaticon-play-1"></i>
                                        <span class="ripple"></span
                                    ></span>
                                </a>
                            </div>
                            <div class="video-bg video-bg-3 bg-f">
                                <a
                                    class="play-video"
                                    data-fancybox=""
                                    href="#"
                                >
                                    <span class="play-now icon"
                                        ><i class="flaticon-play-1"></i>
                                        <span class="ripple"></span
                                    ></span>
                                </a>
                            </div>
                        </div>
                        <div id="thumbs" class="owl-carousel owl-theme">
                            <div class="video-item">
                                <img
                                    src="{{asset('assets2/img/property/property-14.jpg')}}"
                                    alt="Image"
                                />
                            </div>
                            <div class="video-item">
                                <img
                                    src="{{asset('assets2/img/property/property-15.jpg')}}"
                                    alt="Image"
                                />
                            </div>
                            <div class="video-item">
                                <img
                                    src="{{asset('assets2/img/property/property-16.jpg')}}"
                                    alt="Image"
                                />
                            </div>
                            <div class="video-item">
                                <img
                                    src="{{asset('assets2/img/property/property-32.jpg')}}"
                                    alt="Image"
                                />
                            </div>
                        </div>
                    </div>
                </div>
    </div>
<!-- end video clip -->

<!-- testimonial -->
     <section class="testimonial-wrap style2 ptb-100 bg-seashell">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="section-title style2 text-center mb-40">
                                <span>SEE OUR REVIEW</span>
                                <h3>What Our Users Say About Us</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider-three owl-carousel">
                    @forelse($testimonials as $testimonial)
                    <div class="testimonial-card style3">
                        <p class="client-quote">
                            {{$testimonial->description}}
                        </p>
                        <div class="client-info-wrap">
                            <div class="client-img">
                                <img
                                    src="{{asset('storage/'. $testimonial->image)}}"

                                    alt="Image"
                                />
                            </div>
                            <div class="client-info">
                                <h5>{{$testimonial->name}}</h5>
                                <span>{{$testimonial->post}}</span>
                            </div>
                        </div>
                    </div>
                    @empty

                    @endforelse


                    <!-- <div class="testimonial-card style3">
                        <p class="client-quote">
                            Lorem ipsum dolor sit amet adip elitions repellat
                            tetur delni vel quam aliq earum explibo dolor eme
                            fugiat enim illumon amet sit.
                        </p>
                        <div class="client-info-wrap">
                            <div class="client-img">
                                <img
                                    src="{{asset('assets2/img/clients/client-3.jpg')}}"

                                    alt="Image"
                                />
                            </div>
                            <div class="client-info">
                                <h5>Tom Haris</h5>
                                <span>Civil Engineer, Olleo</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card style3">
                        <p class="client-quote">
                            Lorem ipsum dolor sit amet adip elitions repellat
                            tetur delni vel quam aliq earum explibo dolor eme
                            fugiat enim illumon amet sit.
                        </p>
                        <div class="client-info-wrap">
                            <div class="client-img">
                                <img
                                    src="{{asset('assets2/img/clients/client-2.jpg')}}"

                                    alt="Image"
                                />
                            </div>
                            <div class="client-info">
                                <h5>Chris Jackson</h5>
                                <span>Enterpreneur</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card style3">
                        <p class="client-quote">
                            Lorem ipsum dolor sit amet adip elitions repellat
                            tetur delni vel quam aliq earum explibo dolor eme
                            fugiat enim illumon amet sit.
                        </p>
                        <div class="client-info-wrap">
                            <div class="client-img">
                                <img
                                    src="{{asset('assets2/img/clients/client-4.jpg')}}"

                                    alt="Image"
                                />
                            </div>
                            <div class="client-info">
                                <h5>Robert Muller</h5>
                                <span>MD, ITec</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card style3">
                        <p class="client-quote">
                            Lorem ipsum dolor sit amet adip elitions repellat
                            tetur delni vel quam aliq earum explibo dolor eme
                            fugiat enim illumon amet sit.
                        </p>
                        <div class="client-info-wrap">
                            <div class="client-img">
                                <img
                                    src="{{asset('assets2/img/clients/client-5.jpg')}}"
                                    alt="Image"
                                />
                            </div>
                            <div class="client-info">
                                <h5>Mark Owen</h5>
                                <span>Enterpreneur</span>
                            </div>
                        </div>
                    </div> -->
                </div>
    </section>
<!--end testimonial -->

<!-- Frequently Asked Questions -->
    <section class="faq-wrap style3 ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                            <div class="section-title style2 text-center mb-40">
                                <span>HAVE QUESTIONS?</span>
                                <h2>Frequently Asked Questions</h2>
                            </div>
                        </div>
                    </div>
                   
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                            <div class="faq-img-wrap">
                                <img src="{{asset('assets2/img/faq-img-3.png')}}" alt="Image">
                            </div>
                        </div>
                         
                        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                            @forelse($faqs_dala1 as $faqda1)
                                <div class="faq-content">
                                    <div class="accordion" id="accordionExample{{$faqda1->id}}">
                                        
                                        <div class="accordion-item">
                                            
                                            <h2 class="accordion-header" id="headingOne{{$faqda1->id}}">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne{{$faqda1->id}}" aria-expanded="true"
                                                    aria-controls="collapseOne{{$faqda1->id}}">
                                                    <span>
                                                        <i class="flaticon-plus plus"></i>
                                                        <i class="flaticon-minus-sign minus"></i>
                                                    </span>
                                                {{$faqda1->question}}
                                                </button>
                                            </h2>
                                            <div id="collapseOne{{$faqda1->id}}" class="accordion-collapse collapse {{($loop->index == 0) ? 'show' : ''}}"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample{{$faqda1->id}}">
                                                <div class="accordion-body">
                                                    <div class="single-product-text">
                                                        <p>
                                                        {{substr(strip_tags($faqda1->answer), 0)}}  
                                                        </p>
                                                    </div>
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
            </section>
<!-- End Frequently Asked Questions -->
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

@endsection