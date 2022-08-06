@extends('layouts.live')
@section('pageTitle', $management->name)
@section('content')
<div class="page-heading header-text mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>{{ $management->name }}</h1>
      </div>
    </div>
  </div>
</div>

<section class="divider">
  <div class="container pt-50 pb-70">
    <div class="row pt-10">
      <div class="col-md-7">
        <h2 class="heading-section with-line">{{ $management->name }}</h2>
        <h4 class="heading-sm-lead">{{ $management->post }}</h4>
        <p>{!!html_entity_decode($management->description)!!}</p>
      </div>
          
      <div class="col-sm-5">
        <img alt="" src="{{ asset('storage') }}/{{ $management->image }}" class="img-fluid img-responsive center">
      </div> 
    </div>
  </div>
</section>
@endsection
