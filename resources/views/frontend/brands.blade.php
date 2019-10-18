@extends('frontend.layouts.master')
@section('content')
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1080">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row">
            <div class="col-md-12">
              <h3 class="title text-theme-colored">Brands</h3>
              <ul class="breadcrumb white">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Brands</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Brands  -->
    <section>
      <div class="container pb-30">
        <div class="section-content">
          <div class="row">

      
              @foreach($brands as $brand)
            <div class="col-sm-4">
              <div class="icon-box left media p-0 mb-30"> <a class="media-left pull-left flip" href="#"><i class="flaticon-crane text-theme-colored"></i></a>
                <div class="media-body">
                  <h5 class="media-heading heading">{{$brand->name}}</h5>
                <p></p>
                  <a href="#" class="text-theme-colored font-13 font-weight-600">View Details →</a>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </section>




  <!-- end main-content -->

@endsection
