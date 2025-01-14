
@extends('layouts.dalahead')
@section('pageTitle', 'Home')
@section('content')

 <section class="hero-wrap style2">
    <div class="container-fluid">
        <div class="hero-slider-one owl-carousel">
            @foreach($sliders as $slider)
            <div class="hero-slide-item bg-f"  style="background-image: url( {{asset('storage/'.$slider->image) }} );
            background-position: center center; background-size: cover;background-repeat: no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-10">
                            <div class="hero-content">
                                <h1>{{$slider->title}}</h1>
                                <p>
                                    {{$slider->description}}
                                </p>
                                <a href="#" class="btn style2">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>



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
                        <a href="{{route('gallery')}}">
                            <p>{{$gallery->description}}</p>
                        </a>
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
                    @forelse($properties as $property)

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
                    @empty

                    @endforelse

                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{url('allproperty/more-properties')}}" style="margin-left:5em;" class="btn style1 mt-20">View More Property</a>
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