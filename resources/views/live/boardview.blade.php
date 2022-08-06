@extends('layouts.head')
@section('pageTitle', $board->name)
@section('content')
<<div class="page-heading header-text mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>{{ $board->post }}</h1>
      </div>
    </div>
  </div>
</div>

<section class="divider mt-5">
  <div class="container pt-50 pb-70">
    <div class="row pt-10">
      <div class="col-md-7">
        <h2 class="heading-section with-line">{{ $board->name }}</h2>
        <h4 class="heading-sm-lead">{{ $board->post }}</h4>
        <p>{!!html_entity_decode($board->description)!!}</p>
      </div>
          
      <div class="col-sm-5">
        <img alt="" src="{{ asset('storage') }}/{{ $board->image }}" class="img-fluid img-responsive center">
      </div> 
    </div>
  </div>
</section>
@endsection
