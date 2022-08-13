@extends('layouts.live')
@section('pageTitle', $property->title )
@section('content')
<div class="page-title-wrap typo-white">
  <div class="section-bg-img p-5" data-bg="{{ asset('live/images/page-title.jpg') }}">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <div class="page-title-inner">
            <h1 class="page-title mb-3" style="color: #fff">{{ $property->title }}</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="content-wrapper pad-none">
  <div class="content-inner">
    <section id="propertys-section" class="propertys-section">
      <div class="container">
          @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong>{{ $message }}</strong>
            </div>
          @endif

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Error!</strong>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
        <div class="row">
          <div class="col-md-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 img-height" src="{{ asset('storage') }}/{{ $property->image1 }}">
                </div>

                @if($property->image2)
                <div class="carousel-item">
                    <img class="w-100 img-height" src="{{ asset('storage') }}/{{ $property->image2 }}">
                </div>
                @endif

                @if($property->image3)
                <div class="carousel-item">
                    <img class="w-100 img-height" src="{{ asset('storage') }}/{{ $property->image3 }}">
                </div>
                @endif

                @if($property->image4)
                <div class="carousel-item">
                    <img class="w-100 img-height" src="{{ asset('storage') }}/{{ $property->image4 }}">
                </div>
                @endif

                @if($property->image5)
                <div class="carousel-item">
                    <img class="w-100 img-height" src="{{ asset('storage') }}/{{ $property->image5 }}">
                </div>
                @endif

                @if($property->image6)
                <div class="carousel-item">
                    <img class="w-100 img-height" src="{{ asset('storage') }}/{{ $property->image6 }}">
                </div>
                @endif
              </div>

              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

            <div class="p-5">
              <h4>{{ $property->title }}</h4>
              <p style="text-align: justify;">{!!html_entity_decode($property->description)!!}</p>
            </div>
            <hr>
            <p>Phone Number: <b>{{ $setting->phone }}</b><br> You can also use the enquiry form.</p>
          </div>
          <div class="col-md-4">
            <div class="product-wrap">
              <div class="product-inner">
                <div class="product-details">
                  <div class="product-title">
                    <h2 class="single-product-name">{{ $property->title }}</h2>
                  </div>

                  <div class="product-pricing my-4">
                    <span class="offer-price"><span>&#8358;</span>{{ $property->price }}</span>
                    <span class="offer-price float-right" style="background: #0060d6; padding: 5px; border-radius: 10px;color: #fff">{{ $property->status }}</span>
                  </div>
                  <div class="product-pricing my-4">
                    <span class="fa fa-address-book"> {{ $property->address }} {{ $property->city }} {{ $property->state }}</span>
                  </div>

                  <div class="product-meta p-3">
                    <p>{{ $property->type }}</p>
                    <p>Room Size: <b>{{ $property->room_size }} Square meter</b></span>
                    <p>Room Size: <b>{{ $property->room_size }} Square meter</b></span>
                    <p>Bedroom: <b>{{ $property->bedrooms }}</b></span>
                    <p>Bathroom: <b>{{ $property->bathrooms }}</b></span>
                    <p>Toilet: <b>{{ $property->toilets  }}</b></span>
                  </div>

                  <div class="p-3 card">
                    <div class="card-header">
                      <div class="card-title"><h2>ENQUIRY FORM</h2></div>
                    </div>
                    
                    <form method="POST" action="{{ url('enquiry') }}">
                      <div class="card-body">
                        @csrf
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Fullname" name="name" required="">
                          <input type="hidden" name="property_id" value="{{ $property->property_id }}">
                        </div>

                        <div class="input-group">
                          <input type="tel" class="form-control" placeholder="Phone Number" name="phone" required="">
                        </div>
                         
                        <div class="input-group">
                          <input type="email" class="form-control" placeholder="Email Address" name="email" required="">
                        </div>

                        <div class="input-group">
                          <textarea class="form-control" placeholder="Your Message" name="message"></textarea>
                        </div>
                      </div>
                      <div class="input-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

     <section class="property-details-wrap pt-100 pb-75">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-8">
                        <div class="property-details">
                           <div class="row align-items-start">
                              <div class="col-md-8">
                                 <div class="property-title">
                                    <h2>Luxury &amp; Modern Apartment</h2>
                                    <ul class="property-metainfo list-style">
                                       <li><i class="flaticon-location"></i>64/A, Ist Aveneu, High Street, Florida, USA</li>
                                       <li><i class="flaticon-square"></i>1310 Sqft</li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <p class="property-price">$34,000 <span>/ month</span></p>
                              </div>
                           </div>
                           <div class="property-img">
                              <img src="assets/img/property/single-property-1.jpg" alt="Image">
                              <span class="property-status">For Rent</span>
                           </div>
                           <div class="property-desc">
                              <h4>Description</h4>
                              <p>Cras ultricies ligula sed magna dictum porta. Nulla quis lorem ut libero malesuada feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Curabitur arcu erat accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat accumsan id imperdiet et porttitor.</p>
                              <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus.</p>
                           </div>
                           <div class="property-desc">
                              <h4>Property Details</h4>
                              <div class="row">
                                 <div class="col-md-4">
                                    <ul class="property-features list-style">
                                       <li>Property ID : <span>V25680</span></li>
                                       <li>Property Price : <span>$34,000</span></li>
                                       <li>Bath : <span>2</span></li>
                                    </ul>
                                 </div>
                                 <div class="col-md-4">
                                    <ul class="property-features list-style">
                                       <li>Property Type : <span>Apartment</span></li>
                                       <li>Rooms : <span>6</span></li>
                                       <li>Garages : <span>4</span></li>
                                    </ul>
                                 </div>
                                 <div class="col-md-4">
                                    <ul class="property-features list-style">
                                       <li>Property Status : <span>For Rent</span></li>
                                       <li>Bedrooms ID : <span>10</span></li>
                                       <li>Year Built : <span>14/02/22</span></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="property-desc">
                              <h4>Floor Plans</h4>
                              <div class="floor-plan">
                                 <img src="assets/img/property/floor-plan.png" alt="Image">
                              </div>
                           </div>
                           <div class="property-desc">
                              <h4>Property Features</h4>
                              <div class="row">
                                 <div class="col-md-4">
                                    <ul class="property-annuties list-style">
                                       <li><i class="ri-checkbox-multiple-line"></i>Air Conditioned</li>
                                       <li><i class="ri-checkbox-multiple-line"></i>Swimming Pool</li>
                                       <li><i class="ri-checkbox-multiple-line"></i>Fitness Gym </li>
                                    </ul>
                                 </div>
                                 <div class="col-md-4">
                                    <ul class="property-annuties list-style">
                                       <li><i class="ri-checkbox-multiple-line"></i>Security Garage </li>
                                       <li><i class="ri-checkbox-multiple-line"></i>Window Coverings </li>
                                       <li><i class="ri-checkbox-multiple-line"></i>Laundry</li>
                                    </ul>
                                 </div>
                                 <div class="col-md-4">
                                    <ul class="property-annuties list-style">
                                       <li><i class="ri-checkbox-multiple-line"></i>Parking</li>
                                       <li><i class="ri-checkbox-multiple-line"></i>Fireplace</li>
                                       <li><i class="ri-checkbox-multiple-line"></i>Refrigerator</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="property-desc">
                              <h4>Property Video</h4>
                              <div class="property-video">
                                 <img src="assets/img/property/single-property-2.jpg" alt="Image">
                                 <a class="play-video" data-fancybox="" href="https://www.youtube.com/watch?v=Qj59_LGUBvE">
                                 <span class="play-now icon"><i class="flaticon-play-1"></i>
                                 <span class="ripple"></span></span>
                                 </a>
                              </div>
                           </div>
                           <div class="property-desc">
                              <h4>3 Reviews</h4>
                              <div class="property-review comment-item-wrap">
                                 <div class="comment-item">
                                    <div class="comment-author-img">
                                       <img src="assets/img/clients/client-1.jpg" alt="mage">
                                    </div>
                                    <div class="comment-author-wrap">
                                       <div class="comment-author-info">
                                          <div class="row align-items-start">
                                             <div class="col-md-9 col-sm-12 col-12 order-md-1 order-sm-1 order-1">
                                                <div class="comment-author-name">
                                                   <h5>Olivic Dsuza</h5>
                                                   <span class="comment-date">22/04/2022</span>
                                                </div>
                                             </div>
                                             <div class="col-md-3 col-sm-12 col-12 text-md-end order-md-2 order-sm-3 order-2">
                                                <ul class="ratings list-style">
                                                   <li><i class="ri-star-s-fill"></i></li>
                                                   <li><i class="ri-star-s-fill"></i></li>
                                                   <li><i class="ri-star-s-fill"></i></li>
                                                   <li><i class="ri-star-s-fill"></i></li>
                                                   <li><i class="ri-star-half-s-fill"></i></li>
                                                </ul>
                                             </div>
                                             <div class="col-md-12 col-sm-12 col-12 order-md-3 order-sm-2 order-3">
                                                <div class="comment-text">
                                                   <p>Nulla porttitor accumsan tincidunt. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel.</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="comment-item">
                                    <div class="comment-author-img">
                                       <img src="assets/img/clients/client-2.jpg" alt="mage">
                                    </div>
                                    <div class="comment-author-wrap">
                                       <div class="comment-author-info">
                                          <div class="row align-items-start">
                                             <div class="col-md-9 col-sm-12 col-12 order-md-1 order-sm-1 order-1">
                                                <div class="comment-author-name">
                                                   <h5>Josef Haris</h5>
                                                   <span class="comment-date">15/04/2022</span>
                                                </div>
                                             </div>
                                             <div class="col-md-3 col-sm-12 col-12 text-md-end order-md-2 order-sm-3 order-2">
                                                <ul class="ratings list-style">
                                                   <li><i class="ri-star-s-fill"></i></li>
                                                   <li><i class="ri-star-s-fill"></i></li>
                                                   <li><i class="ri-star-s-fill"></i></li>
                                                   <li><i class="ri-star-s-fill"></i></li>
                                                   <li><i class="ri-star-half-s-fill"></i></li>
                                                </ul>
                                             </div>
                                             <div class="col-md-12 col-sm-12 col-12 order-md-3 order-sm-2 order-3">
                                                <div class="comment-text">
                                                   <p>Nulla porttitor accumsan tincidunt. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel.</p>
                                                   <div class="row">
                                                      <div class="col-md-6">
                                                         <div class="property-img mb-0 mt-25">
                                                            <img src="assets/img/property/property-1.jpg" alt="Image">
                                                         </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <div class="property-img mb-0 mt-25">
                                                            <img src="assets/img/property/property-2.jpg" alt="Image">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="comment-item">
                                    <div class="comment-author-img">
                                       <img src="assets/img/clients/client-3.jpg" alt="mage">
                                    </div>
                                    <div class="comment-author-wrap">
                                       <div class="comment-author-info">
                                          <div class="row align-items-start">
                                             <div class="col-md-9 col-sm-12 col-12 order-md-1 order-sm-1 order-1">
                                                <div class="comment-author-name">
                                                   <h5>Boris jhonson</h5>
                                                   <span class="comment-date">27/03/2022</span>
                                                </div>
                                             </div>
                                             <div class="col-md-3 col-sm-12 col-12 text-md-end order-md-2 order-sm-3 order-2">
                                                <ul class="ratings list-style">
                                                   <li><i class="ri-star-s-fill"></i></li>
                                                   <li><i class="ri-star-s-fill"></i></li>
                                                   <li><i class="ri-star-s-fill"></i></li>
                                                   <li><i class="ri-star-s-fill"></i></li>
                                                   <li><i class="ri-star-half-s-fill"></i></li>
                                                </ul>
                                             </div>
                                             <div class="col-md-12 col-sm-12 col-12 order-md-3 order-sm-2 order-3">
                                                <div class="comment-text">
                                                   <p>Nulla porttitor accumsan tincidunt. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel.</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="property-desc">
                              <h4>Add Your Review</h4>
                              <form class="review-form">
                                 <div class="row">
                                    <div class="col-md-8">
                                       <div class="form-group">
                                          <p>Your ratings for this property</p>
                                          <div class="star-rating">
                                             <input id="star-5" type="radio" name="rating" value="star-5">
                                             <label for="star-5" title="5 stars">
                                             <i class="active ri-star-fill" aria-hidden="true"></i>
                                             </label>
                                             <input id="star-4" type="radio" name="rating" value="star-4">
                                             <label for="star-4" title="4 stars">
                                             <i class="active ri-star-fill" aria-hidden="true"></i>
                                             </label>
                                             <input id="star-3" type="radio" name="rating" value="star-3">
                                             <label for="star-3" title="3 stars">
                                             <i class="active ri-star-fill" aria-hidden="true"></i>
                                             </label>
                                             <input id="star-2" type="radio" name="rating" value="star-2">
                                             <label for="star-2" title="2 stars">
                                             <i class="active ri-star-fill" aria-hidden="true"></i>
                                             </label>
                                             <input id="star-1" type="radio" name="rating" value="star-1">
                                             <label for="star-1" title="1 star">
                                             <i class="active ri-star-fill" aria-hidden="true"></i>
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4 text-md-end">
                                       <div class='file form-group'>
                                          <label for='input-file'>Upload Image</label>
                                          <input id='input-file' type='file' />
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <input type="text" placeholder="First name">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <input type="text" placeholder="Last name">
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <input type="text" placeholder="Email Address">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <textarea id="msg" cols="30" rows="6" placeholder="Write A Review"></textarea>
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <button type="submit" class="btn style2">
                                       Submit Review
                                       </button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <div class="property-desc">
                              <h4>Similar Property</h4>
                              <div class="row">
                                 <div class="col-lg-6 col-md-6">
                                    <div class="property-card style2">
                                       <div class="property-img-slider owl-carousel">
                                          <img src="assets/img/property/property-10.jpg" alt="Image">
                                          <img src="assets/img/property/property-1.jpg" alt="Image">
                                          <img src="assets/img/property/property-11.jpg" alt="Image">
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
                                          <img src="assets/img/property/property-2.jpg" alt="Image">
                                          <img src="assets/img/property/property-7.jpg" alt="Image">
                                          <img src="assets/img/property/property-8.jpg" alt="Image">
                                       </div>
                                       <div class="property-info">
                                          <div class="property-status-wrap">
                                             <span class="property-status">For Sale</span>
                                             <p class="property-price">$21,400</p>
                                          </div>
                                          <h3><a href="listing-details.html">Modern Apartment</a></h3>
                                          <p><i class="flaticon-location"></i>123/A, Miles Ave, North Steet, USA</p>
                                          <ul class="property-metainfo list-style">
                                             <li><i class="flaticon-double-bed"></i>05</li>
                                             <li><i class="flaticon-bath-tub"></i>03</li>
                                             <li><i class="flaticon-square"></i>2500 sqft</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="sidebar">
                           <div class="sidebar-widget">
                              <h4>Book This Apartment</h4>
                              <form action="#" class="filter-widget">
                                 <div class="form-group">
                                    <input type="text" placeholder="Full Name">
                                 </div>
                                 <div class="form-group">
                                    <input type="number" placeholder="Phone Number">
                                 </div>
                                 <div class="form-group">
                                    <input type="email" placeholder="Email Address">
                                 </div>
                                 <div class="form-group">
                                    <select name="category" id="category">
                                       <option data-show="Family Members" value="0">Family Members</option>
                                       <option value="1">2</option>
                                       <option value="2">4</option>
                                       <option value="3">6</option>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <select name="region" id="region">
                                       <option data-show="Children" value="0">Children</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <textarea name="booking_msg" id="booking_msg" cols="30" rows="10" placeholder="Your Message"></textarea>
                                 </div>
                                 <div class="form-group">
                                    <button class="btn style2">Request Booking</button>
                                 </div>
                              </form>
                           </div>
                           <div class="sidebar-widget">
                              <h4>Recent Properties</h4>
                              <div class="property-thumb-item">
                                 <div class="property-thumb-img">
                                    <img src="assets/img/blog/post-thumb-1.jpg" alt="Image">
                                 </div>
                                 <div class="property-thumb-info">
                                    <h6><a href="listing-details.html">Luxury Villa In Rigo Park</a></h6>
                                    <p>$34,000 <span>/month</span></p>
                                 </div>
                              </div>
                              <div class="property-thumb-item">
                                 <div class="property-thumb-img">
                                    <img src="assets/img/blog/post-thumb-2.jpg" alt="Image">
                                 </div>
                                 <div class="property-thumb-info">
                                    <h6><a href="listing-details.html">Apartment With 3 BHK</a></h6>
                                    <p>$21,000 <span>/month</span></p>
                                 </div>
                              </div>
                              <div class="property-thumb-item">
                                 <div class="property-thumb-img">
                                    <img src="assets/img/blog/post-thumb-3.jpg" alt="Image">
                                 </div>
                                 <div class="property-thumb-info">
                                    <h6><a href="listing-details.html">Ready Flat For Rent</a></h6>
                                    <p>$14,000 <span>/month</span></p>
                                 </div>
                              </div>
                           </div>
                           <div class="sidebar-widget">
                              <h4>Agent Information</h4>
                              <div class="agent-info-box">
                                 <div class="agent-name-wrap">
                                    <div class="agent-img">
                                       <img src="assets/img/clients/client-1.jpg" alt="Image">
                                    </div>
                                    <div class="agent-name">
                                       <h6><a href="agent-details.html">Jayden Gabrien</a></h6>
                                       <span>Senior Sales Manager</span>
                                    </div>
                                 </div>
                                 <ul class="agent-address list-style">
                                    <li><i class="ri-map-pin-line"></i>302 Ave PArk, New York</li>
                                    <li><i class="ri-phone-line"></i>+222 023 4563 123</li>
                                    <li><i class="ri-mail-send-line"></i><a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1a73747c755a707b737e7f7434797577">[email&#160;protected]</a></li>
                                 </ul>
                                 <form action="#" class="agent-contact">
                                    <div class="form-group">
                                       <input type="text" placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                       <input type="number" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                       <input type="text" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                       <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Your Message"></textarea>
                                    </div>
                                    <button class="btn style2">Submit Request</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
  </div>
</div>
@endsection
