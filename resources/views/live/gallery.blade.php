@extends('layouts.dalahead')
@section('pageTitle', 'Gallery')
@section('content')

    <div class="content-wrapper">

                <div class="breadcrumb-wrap bg-f br-4">
                    <div class="container">
                        <div class="breadcrumb-title">
                            <h2>Our Classic Properties Gallery</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="{{url('/')}}">Home </a></li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <section class="agent-wrap ptb-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            @foreach($galleries as $gallery)
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="agent-card style1">
                                    <div class="agent-img">
                                        <!-- <img src="assets/img/agents/agent-1.jpg" alt="Image"> -->
                                       <img src="{{asset('storage')}}/{{$gallery->file_path}}" alt="">
                                    </div>
                                    <div class="agent-info-wrap">
                                        <div class="agent-info">
                                            <h3><a href="{{url('galleryview')}}/{{$gallery->slug}}">{{$gallery->name}}</a></h3>
                                            <span>Real Estate Agent</span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach




                          <!--  
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="agent-card style1">
                                    <div class="agent-img">
                                        <img src="assets/img/agents/agent-5.jpg" alt="Image">
                                    </div>
                                    <div class="agent-info-wrap">
                                        <div class="agent-info">
                                            <h3><a href="agent-details.html">Tom Ashley</a></h3>
                                            <span>Property Consultant</span>
                                            <ul class="social-profile list-style style1">
                                                <li>
                                                    <a target="_blank" href="https://pinterest.com/">
                                                        <i class="flaticon-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="https://twitter.com/">
                                                        <i class="flaticon-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="https://facebook.com/">
                                                        <i class="flaticon-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="https://linkedin.com/">
                                                        <i class="flaticon-linkedin-1"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="agent-card style1">
                                    <div class="agent-img">
                                        <img src="assets/img/agents/agent-6.jpg" alt="Image">
                                    </div>
                                    <div class="agent-info-wrap">
                                        <div class="agent-info">
                                            <h3><a href="agent-details.html">Joe Kinston</a></h3>
                                            <span>Senior Accountant</span>
                                            <ul class="social-profile list-style style1">
                                                <li>
                                                    <a target="_blank" href="https://pinterest.com/">
                                                        <i class="flaticon-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="https://twitter.com/">
                                                        <i class="flaticon-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="https://facebook.com/">
                                                        <i class="flaticon-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="https://linkedin.com/">
                                                        <i class="flaticon-linkedin-1"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        -->
                        </div>
                        <ul class="page-nav list-style mt-10">
                            {{$galleries->links()}}
                            <!-- <li><a href="agents.html"><i class="flaticon-back"></i></a></li>
                            <li><a class="active" href="agents.html">1</a></li>
                            <li><a href="agents.html">2</a></li>
                            <li><a href="agents.html">3</a></li>
                            <li><a href="agents.html"><i class="flaticon-next-1"></i></a></li> -->
                        </ul>
                    </div>
                </section>

            </div>

@endsection