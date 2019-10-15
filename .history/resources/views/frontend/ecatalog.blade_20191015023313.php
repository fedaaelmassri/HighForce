@extends('frontend.layouts.master')
@section('content')
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header bg-gray-darkgray ">
      <div class="container pt-10 pb-10">
        <!-- Section Content -->
        <div class="section-content">
        <div class="row">
        <div class="col-md-12">
              <h3 class="title text-theme-colored">E-Catalog</h3>
              <ul class="breadcrumb white">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">E-Catalog</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>



<section>
  <div class="container mt-30 mb-30 pt-30 pb-30">

    <div class="section-content">
          <div class="row">
            <div class="col-md-12">

              <!-- Portfolio Gallery Grid -->
              <div id="grid" class="gallery-isotope grid-3 gutter clearfix" style="position: relative; height: 1005.89px;">
                <!-- Portfolio Item Start -->
                <div class="gallery-item photography" style="position: absolute; left: 0px; top: 0px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/470x320" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="http://placehold.it/470x320"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="http://placehold.it/470x320">View more</a>
                  </div>
                  <a class="btn btn-colored btn-flat btn-theme-colored  pb-10"   href="{{route('ecatalog')}}">E-Catalog</a>

                  <h5 class="text-center mt-15 mb-40">Place here your original caption </h5>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item branding" style="position: absolute; left: 379px; top: 0px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/470x320" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="#"><i class="fa fa-link"></i></a>
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="http://placehold.it/470x320">View more</a>
                  </div>
                  <h5 class="text-center mt-15 mb-40">Place here your original caption </h5>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item design" style="position: absolute; left: 759px; top: 0px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/470x320" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="http://placehold.it/470x320">View more</a>
                  </div>
                  <h5 class="text-center mt-15 mb-40">Place here your original caption </h5>
                </div>
                <!-- Portfolio Item End -->



                <!-- Portfolio Item End -->
              </div>
              <!-- End Portfolio Gallery Grid -->

            </div>
          </div>
        </div>
 </div>
</section>
</div>
<!-- end main-content -->


@endsection
