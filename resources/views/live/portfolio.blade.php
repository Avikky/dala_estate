@extends('layouts.live')
@section('pageTitle', 'Portfolio')
@section('content')
<div class="section section-quotes section-pad">
  <div class="container">
    <div class="content row">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h2 class="center">Our Corporate Social Responsiblities</h2>
        </div>
      </div>
      <div class="team-member-row row">
        @forelse($portfolios as $portfolio)
          <div class="col-md-4 col-sm-6">
            <div class="feature boxed">
              <div class="fbox-photo">
                <img src="{{ asset('storage') }}/{{ $portfolio->image }}" class="img-fluid img-responsive center" style="height: 200px">
              </div>
              <div class="fbox-content">
                <h3>
                  <a href="{{ url('/projects') }}/{{ $portfolio->slug }}">{{ $portfolio->title }}
                  </a></h3>
                <p>{{ substr(strip_tags($portfolio->description) , 0, 150) }}</p>
                <p><a href="{{ url('/projects') }}/{{ $portfolio->slug }}" class="btn-link">Read More</a></p>
              </div>
            </div>
          </div>
        @empty
        @endforelse
      </div>

      <div class="paginate p-5">
        {{ $portfolios->links() }}
      </div>
    </div>
  </div>
</div>
@endsection
