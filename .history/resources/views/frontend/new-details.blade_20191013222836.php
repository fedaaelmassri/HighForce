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
                <li><a href="{{route('home')}}">Home</a></li>
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
          <div class="col-md-9">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="{{asset('storage/' . $post->image )}}" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content">
                  <div class="entry-meta media no-bg no-border mt-15 pb-20">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600">{{$post->created_at->format('d') }}</li>
                        <li class="font-12 text-white text-uppercase">{{$post->created_at->format('m') }}</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0"><a href="#">{{$post->name}}</a></h4>
                        </div>
                    </div>
                  </div>
                  <p class="mb-15">
                  {{$post->description}}
                   </p>

                </div>
              </article>

            </div>
          </div>
          <div class="col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">

              <div class="widget">
                <h5 class="widget-title line-bottom">Latest News</h5>
                <div class="latest-posts">
                @foreach($latestposts as $latestposts )

                  <article class="post media-post clearfix pb-0 mb-10">
                  <a class="post-thumb" href="{{route('post-details' , [ 'id' => $latestposts->id ])}}"><img src="{{asset('storage/' . $latestposts->image )}}" width="75" height="75" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="{{route('post-details' , [ 'id' => $latestposts->id ])}}">{{$latestposts->name}}</a></h5>
                      <p>{{ substr($latestposts->description,0,strpos($latestposts->description, ' ', 30)) }} ...</p>
                    </div>
                  </article>
                  @endforeach
                </div>
              </div>

              <div class="widget">
                <h5 class="widget-title line-bottom">Archives</h5>
                <ul class="list-divider list-border list check">
                @foreach($archiveposts as $archiveposts )
                   <li><a href="{{route('post-details' , [ 'id' => $archiveposts->id ])}}">{{$archiveposts->name}}</a></li>
                   @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

@endsection
