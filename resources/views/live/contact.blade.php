@extends('layouts.dalahead')
@section('pageTitle', 'Contact')
@section('content')

    <div class="content-wrapper">

                <div class="breadcrumb-wrap bg-f br-2">
                    <div class="container">
                        <div class="breadcrumb-title">
                            <h2>Contact Us</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index.html">Home </a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <section class="contact-us-wrap ptb-100">
                    <div class="container">
                        <div class="row justify-content-center pb-75">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="contact-item">
                                    <span class="contact-icon">
                                        <i class="flaticon-map"></i>
                                    </span>
                                    <div class="contact-info">
                                        <h3>Visit Us Anytime</h3>
                                        <p>
                                            {{$setting->address}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="contact-item">
                                    <span class="contact-icon">
                                        <i class="flaticon-email-2"></i>
                                    </span>
                                    <div class="contact-info">
                                        <h3>Send An Email</h3>
                                        <a
                                            href="#">
                                            <span class="__cf_email__">
                                                [{{$setting->email}}]

                                            </span>
                                            </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="contact-item">
                                    <span class="contact-icon">
                                        <i class="flaticon-call-2"></i>
                                    </span>
                                    <div class="contact-info">
                                        <h3>Call Center</h3>
                                        <a href="#">{{$setting->phone}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="contact-content">
                                    <div class="content-title style1">
                                        <span>Contact Us</span>
                                        <h2>How Can We Help You?</h2>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores pariatur a
                                            eius ea similique quod dicta ipsa vel quidem repellendus, beatae nulla
                                            veniam, quaerat veritatis architecto. Aliquid doloremque nesciunt nobis,
                                            debitis, quas veniam dolore culpa corrupti maxime cum similique.</p>
                                    </div>
                                    <ul class="social-profile list-style style1">
                                        <li>
                                            <a target="_blank" href="{{$setting->facebook}}">
                                                <i class="ri-facebook-fill"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="{{$setting->twitter}}">
                                                <i class="ri-twitter-fill"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="{{$setting->instagram}}">
                                                <i class="ri-instagram-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="{{$setting->linkedin}}">
                                                <i class="ri-linkedin-fill"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- id="contactForm" -->
                            <div class="col-lg-6 col-12">
                                    <div class="row justify-content-center">
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
                                    </div>
                                <div class="contact-form">
                                    <form class="form-wrap" id="contactForm" action="{{url('/admin/contact/create')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="name" placeholder="Name*" id="name"
                                                        required data-error="Please enter your name">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" name="email" id="email" required
                                                        placeholder="Email*" data-error="Please enter your email">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="subject" placeholder="Subject*"
                                                        id="msg_subject" required
                                                        data-error="Please enter your subject">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group v1">
                                                    <textarea name="message" id="message" placeholder="Your Messages.."
                                                        cols="30" rows="10" required
                                                        data-error="Please enter your message"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox">
                                                    <input name="gridCheck"
                                                        value="I agree to the terms and privacy policy."
                                                        class="form-check-input" type="checkbox" id="gridCheck"
                                                        required>
                                                    <label class="form-check-label" for="gridCheck">
                                                        I agree to the <a class="link style1"
                                                            href="terms-of-service.html">terms &amp; conditions</a> and
                                                        <a class="link style1" href="privacy-policy.html">privacy
                                                            policy</a>
                                                    </label>
                                                    <div class="help-block with-errors gridCheck-error"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn style2">Send Message</button>
                                                 <!-- id="msgSubmit" -->
                                                <div class="h3 text-center hidden"></div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
@endsection
