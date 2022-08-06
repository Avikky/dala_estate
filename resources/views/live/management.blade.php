@extends('layouts.head')
@section('pageTitle', 'Management Team')
@section('content')


    <!-- Page Title -->
    <div class="page-title-area">
      <div class="d-table">
          <div class="d-table-cell">
              <div class="container">
                  <div class="title-content">
                      <h2>Management</h2>
                      <ul>
                          <li>
                              <a href="{{ url('/')}}">Home</a>
                          </li>
                          <li>
                              <span>management</span>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End Page Title -->

<br><br>
<div class="team mb-5" style="margin-top: -30px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-5">
          <div class="section-heading text-center">
            <h2>Our Management <span style="color:#21B068">Team</span></h2>
          </div>
        </div>
        @forelse($managements as $management)
          <div class="col-md-3">
            <div class="team-item" >
              <img alt="" src="{{ asset('storage') }}/{{ $management->image }}" class="img-fluid img-responsive center" style="height: 220px; width: 100%">
              <div class="down-content">
                <a href="{{ url('/management') }}/{{ $management->slug }}">
                  <h4 class="name" style="color: #21B068;">{{ $management->name }}</h4>
                  <p class="sub-title">{{ $management->post }}</p>
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