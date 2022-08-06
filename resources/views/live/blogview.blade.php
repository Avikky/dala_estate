@extends('layouts.dalahead')
@section('pageTitle', $post->title )
@section('content')

<!-- <div class="section section-services section-pad">
  <div class="container">
    <div class="content row">
      <div class="wide-md center">
        <h4 class="heading-section">{{ $post->title }}</h4>
      </div> -->
          <!-- Feature Row  -->
      <!-- <div class="feature-row feature-service-row row" style="margin-top: 30px">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="fbox-photo">
            <img src="{{ asset('storage') }}/{{ $post->featured_image }}" alt="" style="height: 300px">
          </div>
        </div>

        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="post-meta top-meta mb-4">
            <ul class="nav">
              <li>
                <i class="fa fa-calendar"></i> {{ \Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->toFormattedDateString() }}
              </li>
            </ul>
          </div>
        </div>

        <div class="col-md-12">
          <div class="fbox-content">
            <p>{!!html_entity_decode($post->description)!!}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->


@endsection
