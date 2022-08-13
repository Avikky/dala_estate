@extends('layouts.dalahead')
@section('pageTitle', 'Blog')
@section('content')


<div class="content-wrapper">
    <div class="breadcrumb-wrap bg-f br-4">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Blog</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="index.html">Home </a></li>
                    <li>blog</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="blog-wrap ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                @forelse($posts as $post)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog-card style1">
                            <div class="blog-img">
                                <img
                                    src="{{asset('storage/'.$post->featured_image)}}"
                                    alt="Image"
                                />
                            </div>
                            <div class="blog-info">
                                <ul class="blog-metainfo  list-style">
                                    <li>
                                        <i class="flaticon-calendar"></i
                                        ><a href="{{route('blogpost', ['slug' => $post->slug])}}"
                                            >{{$post->created_at}}</a
                                        >
                                    </li>
                                    <li>
                                        <i
                                            class="flaticon-user"
                                        ></i
                                        >
                                        Author: {{$post->author}}
                                    </li>
                                </ul>
                                <h3>
                                    <a href="{{route('blogpost', ['slug' => $post->slug])}}">
                                    {{ $post->title }}
                                    </a>
                                </h3>
                                <div>
                                    {!! substr(strip_tags($post->description) , 0, 80) !!}
                                </div>
                                <a href="{{route('blogpost', ['slug' => $post->slug])}}"
                                    class="link style2">Read More
                                    <i class="flaticon-right-arrow-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No Blog Post Yet</p>
                @endforelse
            </div>
            <ul class="page-nav list-style mt-10">
                <li>
                    {{$posts->links()}}
                </li>
            </ul>
        </div>
    </div>
</div>





<!-- <div class="page-heading header-text mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Blog Posts</h1>
      </div>
    </div>
  </div>
</div>

<section >
  <div class="container">
    <div class="row" style="">
      @forelse($posts as $post)
        <div class="col-md-4 mt-5">
          <div class="card" style="height: 450px;">
           <img src="{{ asset('storage') }}/{{ $post->featured_image }}" alt="" style="height: 180px">
            <div class="card-body">
              <strong class="card-title" >
                <a style="color: #28a745;" href="{{ url('/blog') }}/{{ $post->slug }}">{{ $post->title }}</a>
              </strong>
              <div class="mt-2 pb-4" >
                <p class="mb-2">{!! substr(strip_tags($post->description) , 0, 80) !!}</p>
                <a href="{{ url('/blog') }}/{{ $post->slug }}" style="color: #28a745;" class="btn btn-small">Read More</a>
              </div>
            </div>
          </div>
        </div>
      @empty
      @endforelse
    </div>
    <div class="paginate p-5">
      {{ $posts->links() }}
    </div>
  </div>
</section> -->



@endsection
