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

                <!-- Portfolio Item Start -->
                <div class="gallery-item photography" style="position: absolute; left: 0px; top: 335px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/470x320" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fa fa-youtube-play"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h5 class="text-center mt-15 mb-40">Place here your original caption </h5>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item branding" style="position: absolute; left: 379px; top: 335px;">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/470x320" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a class="popup-vimeo" href="https://vimeo.com/45830194"><i class="fa fa-play"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h5 class="text-center mt-15 mb-40">Place here your original caption </h5>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item design" style="position: absolute; left: 759px; top: 335px;">
                  <div class="thumb">
                    <div class="flexslider-wrapper">
                      <div class="flexslider">

                      <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-750px, 0px, 0px);"><li class="clone" aria-hidden="true" style="width: 375px; margin-right: 0px; float: left; display: block;"><a href="http://placehold.it/470x320" title="Portfolio Gallery - Photo 3"><img src="http://placehold.it/470x320" alt="" draggable="false"></a></li>
                          <li style="width: 375px; margin-right: 0px; float: left; display: block;" class="" data-thumb-alt=""><a href="http://placehold.it/470x320" title="Portfolio Gallery - Photo 1"><img src="http://placehold.it/470x320" alt="" draggable="false"></a></li>
                          <li data-thumb-alt="" class="flex-active-slide" style="width: 375px; margin-right: 0px; float: left; display: block;"><a href="http://placehold.it/470x320" title="Portfolio Gallery - Photo 2"><img src="http://placehold.it/470x320" alt="" draggable="false"></a></li>
                          <li data-thumb-alt="" style="width: 375px; margin-right: 0px; float: left; display: block;"><a href="http://placehold.it/470x320" title="Portfolio Gallery - Photo 3"><img src="http://placehold.it/470x320" alt="" draggable="false"></a></li>
                        <li style="width: 375px; margin-right: 0px; float: left; display: block;" class="clone" aria-hidden="true"><a href="http://placehold.it/470x320" title="Portfolio Gallery - Photo 1"><img src="http://placehold.it/470x320" alt="" draggable="false"></a></li></ul></div><ol class="flex-control-nav flex-control-paging"><li><a href="#" class="">1</a></li><li><a href="#" class="flex-active">2</a></li><li><a href="#">3</a></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
                    </div>
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="#"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h5 class="text-center mt-15 mb-40">Place here your original caption </h5>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item photography" style="position: absolute; left: 0px; top: 670px;">
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
                  <h5 class="text-center mt-15 mb-40">Place here your original caption </h5>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item design" style="position: absolute; left: 379px; top: 670px;">
                  <div class="thumb">
                    <div class="flexslider-wrapper" data-direction="vertical">
                      <div class="flexslider">

                      <div class="flex-viewport" style="overflow: hidden; position: relative; height: 256px;"><ul class="slides" style="height: 1000%; position: absolute; width: 100%; transition-duration: 0s; transform: translate3d(0px, -512px, 0px);"><li class="clone" aria-hidden="true" style="display: block;"><a href="http://placehold.it/470x320" title="Portfolio Gallery - Photo 3"><img src="http://placehold.it/470x320" alt="" draggable="false"></a></li>
                          <li style="display: block;" class="" data-thumb-alt=""><a href="http://placehold.it/470x320" title="Portfolio Gallery - Photo 1"><img src="http://placehold.it/470x320" alt="" draggable="false"></a></li>
                          <li data-thumb-alt="" class="flex-active-slide" style="display: block;"><a href="http://placehold.it/470x320" title="Portfolio Gallery - Photo 2"><img src="http://placehold.it/470x320" alt="" draggable="false"></a></li>
                          <li data-thumb-alt="" style="display: block;"><a href="http://placehold.it/470x320" title="Portfolio Gallery - Photo 3"><img src="http://placehold.it/470x320" alt="" draggable="false"></a></li>
                        <li style="display: block;" class="clone" aria-hidden="true"><a href="http://placehold.it/470x320" title="Portfolio Gallery - Photo 1"><img src="http://placehold.it/470x320" alt="" draggable="false"></a></li></ul></div><ol class="flex-control-nav flex-control-paging"><li><a href="#" class="">1</a></li><li><a href="#" class="flex-active">2</a></li><li><a href="#">3</a></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
                    </div>
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="#"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h5 class="text-center mt-15 mb-40">Place here your original caption </h5>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item photography" style="position: absolute; left: 759px; top: 670px;">
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
                  <h5 class="text-center mt-15 mb-40">Place here your original caption </h5>
                </div>
                <!-- Portfolio Item End -->
              </div>
              <!-- End Portfolio Gallery Grid -->

            </div>
          </div>
        </div>
</div>
</div>
</section>
</div>
<!-- end main-content -->


@endsection
