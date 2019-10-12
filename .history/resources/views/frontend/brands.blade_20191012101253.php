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
            <div class="col-sm-4">
              <div class="icon-box left media p-0 mb-30"> <a class="media-left pull-left flip" href="#"><i class="flaticon-crane text-theme-colored"></i></a>
                <div class="media-body">
                  <h5 class="media-heading heading">Features Title Here</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                  <a href="#" class="text-theme-colored font-13 font-weight-600">View Details →</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="icon-box left media p-0 mb-30"> <a class="media-left pull-left flip" href="#"><i class="flaticon-worker text-theme-colored"></i></a>
                <div class="media-body">
                  <h5 class="media-heading heading">Features Title Here</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                  <a href="#" class="text-theme-colored font-13 font-weight-600">View Details →</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="icon-box left media p-0 mb-30"> <a class="media-left pull-left flip" href="#"><i class=" flaticon-truck text-theme-colored"></i></a>
                <div class="media-body">
                  <h5 class="media-heading heading">Features Title Here</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                  <a href="#" class="text-theme-colored font-13 font-weight-600">View Details →</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="icon-box left media p-0 mb-30"> <a class="media-left pull-left flip" href="#"><i class=" flaticon-circular-saw2 text-theme-colored"></i></a>
                <div class="media-body">
                  <h5 class="media-heading heading">Features Title Here</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                  <a href="#" class="text-theme-colored font-13 font-weight-600">View Details →</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="icon-box left media p-0 mb-30"> <a class="media-left pull-left flip" href="#"><i class=" flaticon-speedometer text-theme-colored"></i></a>
                <div class="media-body">
                  <h5 class="media-heading heading">Features Title Here</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                  <a href="#" class="text-theme-colored font-13 font-weight-600">View Details →</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="icon-box left media p-0 mb-30"> <a class="media-left pull-left flip" href="#"><i class=" flaticon-tools text-theme-colored"></i></a>
                <div class="media-body">
                  <h5 class="media-heading heading">Features Title Here</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                  <a href="#" class="text-theme-colored font-13 font-weight-600">View Details →</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-white-9" data-bg-img="http://placehold.it/1920x1080" data-parallax-ratio="0.7">
      <div class="container pt-30 pb-0">
        <div class="row">
          <div class="col-md-4">
            <img class="img-fullwidth" src="http://placehold.it/350x370" alt="">
          </div>
          <div class="col-md-8 pt-100">
            <div class="col-xs-12 col-sm-6 col-md-4 mb-md-50">
              <div class="funfact text-center">
                <i class="flaticon-worker font-weight-800 font-32 mt-5"></i>
                <h2 class="animate-number text-theme-colored font-36 font-weight-500 font-trirong mt-10 mb-0" data-value="86" data-animation-duration="2000">0</h2>
                <h5 class="text-uppercase font-14 text-gray">Workers Employed</h5>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 mb-md-50">
              <div class="funfact text-center">
                <i class="flaticon-layers font-weight-800 font-32 mt-5"></i>
                <h2 class="animate-number text-theme-colored font-36 font-weight-500 font-trirong mt-10 mb-0" data-value="1452" data-animation-duration="2000">0</h2>
                <h5 class="text-uppercase font-14 text-gray">Projects Done</h5>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 mb-md-50">
              <div class="funfact text-center">
                <i class="flaticon-trophy2 font-weight-800 font-32 mt-5"></i>
                <h2 class="animate-number text-theme-colored font-36 font-weight-500 font-trirong mt-10 mb-0" data-value="868" data-animation-duration="2000">0</h2>
                <h5 class="text-uppercase font-14 text-gray">Awards Won</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

@endsection
