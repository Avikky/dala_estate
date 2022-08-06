@extends('layouts.head')
@section('pageTitle', 'Board of Directors')
@section('content')


<div class="page-heading header-text mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Board of Directors</h1>
      </div>
    </div>
  </div>
</div>


<div class="team mb-5" style="margin-top: -30px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Board <em>members</em></h2>
            </div>
          </div>
          @forelse($boards as $board)
            <div class="col-md-3">
              <div class="team-item" >
                <img alt="" src="{{ asset('storage') }}/{{ $board->image }}" class="img-fluid img-responsive center" style="height: 200px; width: 1000%">
                <div class="down-content">
                  <a href="{{ url('/board') }}/{{ $board->slug }}">
                    <h4 class="name" style="color: #21B068;">{{ $board->name }}</h4>
                    <p class="sub-title">{{ $board->post }}</p>
                  </a>
                </div>
              </div>
            </div>
          @empty
          @endforelse
        </div>
      </div>
</div>
@endsection
