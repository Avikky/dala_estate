@extends('layouts.dalahead')
@section('pageTitle', 'Testing Page')

@section('content')

    <section class="hero-wrap style3">
                <div class="hero-slider-two owl-carousel">
                    <div class="hero-slide-item hero-slide-4 bg-f"></div>
                    <div class="hero-slide-item hero-slide-5 bg-f"></div>
                    <div class="hero-slide-item hero-slide-6 bg-f"></div>
                </div>
                <div class="hero-content">
                    <div class="row">
                        <div
                            class="col-xxl-8 offset-xxl-2 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1"
                        >
                            <h1
                                data-aos="fade-up"
                                data-aos-duration="1200"
                                data-aos-delay="200"
                            >
                                Luxury House Renting
                            </h1>
                            <p
                                data-aos="fade-up"
                                data-aos-duration="1200"
                                data-aos-delay="300"
                            >
                                Proin gravida nibh vel velit auctor aliquet
                                aenean sollicitudin lorem quis bibendum auctor
                                nisi elit consequat ipsum nec sagittis sem nibh
                                id elit Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.
                            </p>
                            <form
                                action="#"
                                class="property-search-form"
                                data-aos="fade-up"
                                data-aos-duration="1200"
                                data-aos-delay="400"
                            >
                                <div class="form-group-wrap">
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            placeholder="Location"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <select
                                            name="price-range"
                                            id="price-range"
                                        >
                                            <option
                                                value="0"
                                                data-display="Price Range"
                                                >Price Range</option
                                            >
                                            <option value="1"
                                                >$1000 - $2000</option
                                            >
                                            <option value="2"
                                                >$2000 - $3000</option
                                            >
                                            <option value="3"
                                                >$3000 - $4000</option
                                            >
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select
                                            name="property_commodity"
                                            id="property_commodity"
                                        >
                                            <option
                                                value="0"
                                                data-display="Bed &amp; Baths"
                                                >Bed &amp; Baths</option
                                            >
                                            <option value="1"
                                                >2 Bed 2 Bath</option
                                            >
                                            <option value="2"
                                                >3 Bed 2 Bath</option
                                            >
                                            <option value="3"
                                                >4 Bed 3 Bath</option
                                            >
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn style2">
                                    Search Property
                                </button>
                            </form>
                            <div
                                class="client-feedback"
                                data-aos="fade-up"
                                data-aos-duration="1200"
                                data-aos-delay="500"
                            >
                                <ul class="list-style">
                                    <li>
                                        <a href="testimonials.html"
                                            ><img
                                                src="assets/img/clients/client-1.jpg"
                                                alt="Image"
                                        /></a>
                                    </li>
                                    <li>
                                        <a href="testimonials.html"
                                            ><img
                                                src="assets/img/clients/client-2.jpg"
                                                alt="Image"
                                        /></a>
                                    </li>
                                    <li>
                                        <a href="testimonials.html"
                                            ><img
                                                src="assets/img/clients/client-3.jpg"
                                                alt="Image"
                                        /></a>
                                    </li>
                                    <li>
                                        <a href="testimonials.html"
                                            ><img
                                                src="assets/img/clients/client-4.jpg"
                                                alt="Image"
                                        /></a>
                                    </li>
                                </ul>
                                <span>29k Positive Review</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


@endsection