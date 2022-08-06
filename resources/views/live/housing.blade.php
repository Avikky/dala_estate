

@extends('layouts.dalahead')
@section('pageTitle', 'Our Housing')
@section('content')
<div class="page-heading header-text mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Housing</h1>
      </div>
    </div>
  </div>
</div>

<section class="divider">
  <div class="container pt-50 pb-70">
    <div class="row pt-10">
      @forelse($housings as $housing)
        <div class="col-md-4 col-sm-6">
          <!-- feature box -->
          <div class="feature boxed">
            <div class="fbox-photo">
              <img src="{{ asset('storage') }}/{{ $housing->image }}" alt="" style="height: 212px; width: 100%">
            </div>
            <div class="fbox-content">
              <a href="{{ url('housing') }}/{{ $housing->slug }}">
                <h3>{{ $housing->name }}</h3>
              </a>
            </div>
          </div>
          <!-- End Feature box -->
        </div>
      @empty
      @endforelse 
    </div>
  </div>
</section>
@endsection
