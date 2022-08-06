<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from templates.envytheme.com/finon/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Feb 2022 19:35:21 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
        <!-- Mean Menu CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
        <!-- Box Icons CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
        <!-- Owl Carousel JS -->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <!-- Flat Icons CSS -->
        <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
        <!-- Popup CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        
        <title>@yield('pageTitle') - {{ $setting->sitename }}</title>

        <link rel="icon" type="image/png" href="{{ asset('favicon/favicon.ico') }}">
    </head>
    <body>

        <!-- Header -->
        <div class="header-area two">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="left">
                            <ul>
                                <li>
                                    <i class='bx bx-location-plus'></i>
                                    <a href="#">
                                        {{$setting->address}}
                                    </a>    
                                </li>
                                <li>
                                    <i class='bx bx-mail-send'></i>
                                    <a href="#"><span class="__cf_email__" data-cfemail="dbb3beb7b7b49bbdb2b5b4b5f5b8b4b6">[{{$setting->email}}]</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="right">
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Header --> 

        <!-- Navbar -->
        <div class="navbar-area sticky-top">
            <!-- Menu For Desktop Device -->
            <div class="main-nav two">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#">
                            <img src="{{ asset('images/UNN.jpg') }}" style="max-width: 450px; height: 80%;"  alt="Logo">
                          </a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about')}}" class="nav-link dropdown-toggle">About <i class="bx bx-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('management') }}" class="nav-link">Management Team</a>
                                            <a href="{{ route('board') }}" class="nav-link">Board</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('service')}}" class="nav-link dropdown-toggle">Services <i class="bx bx-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        @foreach($allservices as $service)
                                            <li class="nav-item">
                                                <a href="{{ url('service') }}/{{ $service->slug }}" class="nav-link">{{ $service->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('product')}}" class="nav-link">Product</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('blog')}}" class="nav-link">News</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('loan')}}" class="nav-link">Loans</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                                </li>
                            </ul>
                            <div class="side-nav">
                                <a class="consultant-btn btn-sm" href="#">
                                    <small>Open Account</small>
                                </a>
                            </div>
                          </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar -->


        @yield('content')


          <!-- Footer -->
        <footer class="footer-area two pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="footer-item">
                            <div class="footer-logo">
                                <a class="logo" href="index.html">
                                    <img src="{{ asset('images/UNN.jpg') }}" style="width: 280px;" alt="Logo">
                                </a> 
                                <p>
                                    {!!html_entity_decode(substr(strip_tags($setting->about) , 0, 150))!!}
                                </p>
                                <ul>
                                    <li>
                                        <i class='bx bx-phone-call'></i>
                                        <span>Phone:</span>
                                        <a href="tel:882569756">{{$setting->phone}}</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-mail-send'></i>
                                        <span>Email:</span>
                                        <a href="#"><span class="__cf_email__" data-cfemail="0d65686161624d6b64636263236e6260">[{{$setting->email}}]</span></a>
                                    </li>
                                    <li>
                                        <i class='bx bx-current-location'></i>
                                        <span>Address:</span>
                                        <a href="#">{{$setting->address}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-2">
                        <div class="footer-item">
                            <div class="footer-links">
                                <h3>Quick Links</h3>
                                <ul>
                                    <li>
                                        <a href="{{route('about')}}">About</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('service')}}">Services</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('product')}}">Products</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog')}}">News</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <h3>Newsletter</h3>
                            <div class="footer-newsletter">
                                <p>Stay upto date with our banking activitiesy</p>
                                <form class="newsletter-form" data-toggle="validator">
                                    <input type="email" class="form-control" placeholder="Enter email address" name="EMAIL" required autocomplete="off">
            
                                    <button class="btn common-btn" type="submit">
                                        Subscribe
                                        <span></span>
                                    </button>
                                    <div id="validator-newsletter" class="form-result"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <div class="footer-links">
                                <h3>What We Do</h3>
                                <ul>
                                    @foreach($allservices as $service)
                                        <li>
                                            <a href="{{ url('service') }}/{{ $service->slug }}" class="nav-link">{{ $service->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Copyright -->
        <div class="copyright-area two">
            <div class="container">
                <div class="copyright-item">
                    <p>Copyright &copy;{{ date('y') }} <a href="https://unnmfb.com/"> {{ $setting->sitename }}</a>. All Rights Reserved
                    </p>
                    <small>
                        Developed by <a href="https://specstechafrica.com/" target="_blank">Specstech Africa Solutions & ICT Ltd</a>
                    </small>
                </div>
            </div>
        </div>
        <!-- End Copyright -->

        <!-- Go Top -->
        <div class="go-top">
            <i class='bx bxs-up-arrow'></i>
            <i class='bx bxs-up-arrow'></i>
        </div>
        <!-- End Go Top -->


        <!-- Essential JS -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.5.1.min.js"></script>

        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <!-- Form Validator JS -->
        <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
        <!-- Contact JS -->
        <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
        <!-- Ajax Chip JS -->
        <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
        <!-- Mean Menu JS -->
        <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
        <!-- Owl Carousel JS -->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <!-- Wow JS -->
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <!-- Odometer JS -->
        <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
        <!-- Nice Select JS -->
        <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
        <!-- Popup JS -->
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Custom JS -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>
    </body>
</html>
