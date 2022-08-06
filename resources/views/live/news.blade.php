@extends('layouts.greenbank')
@section('pageTitle', 'News')
@section('content')
<div role="main" class="main">
    <section class="page-header page-header-classic page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    @if(isset($q))
                        <h1 data-title-border>{{ ucfirst($q) }}</h1>
                    @else
                        <h1 data-title-border>News & Event</h1>
                    @endif
                    
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-right">
                        <li><a href="#">Home</a></li>
                        <li class="active">News & Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">
        <div class="row">
            <div class="col">
                <div class="blog-posts">
                    <div class="row">
                        @forelse($posts as $post)
                        <div class="col-md-4 col-lg-3">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="{{ url('/') }}/{{ $post->slug }}">
                                        <img src="{{ asset('storage') }}/{{ $post->featured_image }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                    </a>
                                </div>

                                <div class="post-content">

                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="{{ url('/') }}/{{ $post->slug }}">{{ $post->title }}</a></h2>
                                    <p>{{ substr(strip_tags($post->description) , 0, 120) }}</p>

                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> By <a href="#">{{ $post->author }}</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                        <span class="d-block mt-2"><a href="{{ url('/') }}/{{ $post->slug }}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>

                                </div>
                            </article>
                        </div>
                        @empty
                            <h2>Nothing found, check back later</h2>
                        @endforelse
                    </div>

                    <div class="row">
                        <div class="col">
                            <ul class="pagination float-right">
                                {{ $posts->links() }}
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
@endsection