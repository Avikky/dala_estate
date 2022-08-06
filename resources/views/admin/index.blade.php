@extends('layouts.userpage')
@section('pageTitle', 'Admin Home')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Welcome to {{ $setting->sitename }} Dashboard
      </h1>
    </section> 

    <section class="content">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="box box-solid bg-black">
            <div class="box-header with-border">
              <h4 class="box-title">About Us</h4>
            </div>
            <div class="box-body p-0">
              <div class="media-list media-list-hover media-list-divided">
                <p class="media media-single p-10">
                  <b>Our Vision</b>
                  <span class="title">{{ $setting->vision }}</span>
                </p>
                <hr>

                <p class="media media-single p-10">
                  <b>Our Mission</b>
                  <span class="title">{{ $setting->mission }}</span>
                </p>
                <hr>
                <h5 style="margin-left:5px"><b><u style="margin-left: 15px;">Products</u></b></h5>
                @forelse($product1 as $product)

                <p class="media media-single p-10">
                    <span class="title">
                      {{ $product->name}}<br>
                    </span>
                </p>
                  @empty
                  @endforelse
                

              </div>
            </div>
          </div>        
        </div>

        <div class="col-lg-8 col-12">
          <div class="row">
            <div class="col-md-12 col-12">            
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h4 class="box-title">Services</h4>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="example2" class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Descripton</th>
                              <th>Featured Image</th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse($services1 as $service)
                            <tr>
                              <td>{{ $service->name }}</td>
                              <th>{{ substr(strip_tags($service->description) , 0, 90) }} ...</th>
                              <th><img class="img-thumbnail" src="{{ asset('storage') }}/{{ $service->image }}" width="70px"></th>
                              <!--<a href=""><i class="fa fa-edit btn btn-info"></i> </a>-->                       
                            </tr>
                            @empty
                            @endforelse
                          </tbody>                     
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection
