@extends('layouts.live')
@section('pageTitle', $portfolio->name)
@section('content')
  <div class="section section-about section-pad">
    <div class="container">
      <div class="content row">
        <h2 class="heading-section with-line">{{ $portfolio->name }}</h2>
        <h4 class="heading-sm-lead">{{ $portfolio->post }}</h4>

        <div class="row">
          <div class="col-md-7 res-m-bttm">
            <p>{!!html_entity_decode($portfolio->description)!!}</p>
          </div>
          
          <div class="col-sm-5 npr">
            <img alt="" src="{{ asset('storage') }}/{{ $portfolio->image }}" class="img-fluid img-responsive" style="height: 500px">
          </div>
        </div>
      </div>  
    </div>
  </div>
@endsection
