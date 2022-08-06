@extends('layouts.preeminent')
@section('pageTitle', $post->title)
@section('content')

<section class="team-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mb-100">
                    <div class="line"></div>
                    <h2>{{$post->title}}</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <article class="post post-large blog-single-post border-0 m-0 p-0">
                <div class="post-image ml-0">
                    <a href="#">
                        <img src="{{ asset('storage') }}/{{ $post->featured_image }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                    </a>
                </div>
        
                <div class="post-date ml-0">
                    <i class="fa fa-calendar"></i> {{ \Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->toFormattedDateString() }}
                </div>
        
                <div class="post-content ml-0">
        
                    <h2 class="font-weight-bold">{{ $post->title }}</h2>
        
                    <div class="post-meta">
                        <span><i class="far fa-user"></i> By <a href="#">{{ $post->author }}</a> </span>
                    </div>

                    {!!html_entity_decode($post->description)!!}
                   
                </div>
            </article>
        </div>
    </div>
</div>
@endsection