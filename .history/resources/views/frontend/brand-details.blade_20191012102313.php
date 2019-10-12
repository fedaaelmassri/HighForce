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
            <h3 class="title text-white">Single Post</h3>
            <ul class="breadcrumb white">
              <li><a href="index-mp-layout1.html">Home</a></li>
              <li class="active">Single Post</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Blog -->
  <section>
    <div class="container mt-30 mb-30 pt-30 pb-30">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="blog-posts single-post">
            <article class="post clearfix mb-0">
              <div class="entry-header">
                <div class="post-thumb thumb"> <img src="http://placehold.it/1920x1080" alt="" class="img-responsive img-fullwidth"> </div>
              </div>
              <div class="entry-content">
                <div class="entry-meta media no-bg no-border mt-15 pb-20">
                  <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                    <ul>
                      <li class="font-16 text-white font-weight-600">28</li>
                      <li class="font-12 text-white text-uppercase">Feb</li>
                    </ul>
                  </div>
                  <div class="media-body pl-15">
                    <div class="event-content pull-left flip">
                      <h4 class="entry-title text-white text-uppercase m-0"><a href="#">Post title here</a></h4>
                      <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                      <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                    </div>
                  </div>
                </div>
                <p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <blockquote class="theme-colored pt-20 pb-20">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

              </div>
            </article>
            <div class="tagline p-0 pt-20 mt-5">
              <div class="row">
                <div class="col-md-8">
                  <div class="tags">
                    <p class="mb-0"><i class="fa fa-tags text-theme-colored"></i> <span>Tags:</span>Eco, Water, Air, Environment</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="share text-right">
                    <p><i class="fa fa-share-alt text-theme-colored"></i> Share</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="author-details media-post">
              <a href="#" class="post-thumb mb-0 pull-left flip pr-20"><img class="img-thumbnail" alt="" src="http://placehold.it/125x148"></a>
              <div class="post-right">
                <h5 class="post-title mt-0 mb-0"><a href="#" class="font-18">John Doe</a></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <ul class="social-icons square-sm m-0">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
              </div>
              <div class="clearfix"></div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- end main-content -->

@endsection
