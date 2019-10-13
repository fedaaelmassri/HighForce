@extends('frontend.layouts.master')
@section('content')
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5"  >
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row">
            <div class="col-md-12">
              <h3 class="title text-theme-colored">News</h3>
              <ul class="breadcrumb white">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">News</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>



<section>
  <div class="container mt-30 mb-30 pt-30 pb-30">
    <div class="row ">
      <div class="col-md-10 col-md-offset-1">
        <div class="blog-posts">
          <div class="col-md-12">
            <div class="row list-dashed">
            @foreach($news as $new)

              <article class="post clearfix mb-30 bg-lighter">
                <div class="entry-header">
                  <div class="post-thumb thumb">
                    <img  src="{{asset('storage/' . $new->image )}}" alt="" class="img-responsive img-fullwidth">
                  </div>
                </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600">{{$new->created_at->format('d') }}</li>
                        <li class="font-12 text-white text-uppercase">{{$new->created_at->format('m') }}</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="{{route('new-details' , [ 'id' => $new->id ])}}">{{$new->name}}</a></h4>
                       </div>
                    </div>
                  </div>
                  <p class="mt-10">  </p>
                  <a href="{{route('post-details' , [ 'id' => $new->id ])}}" class="btn-read-more">Read more</a>
                  <div class="clearfix"></div>
                </div>
              </article>

              @endforeach




            </div>
          </div>
          <div class="col-md-12">
          <nav>
          {{ $news->links() }}
          </nav>

            <!-- <nav>
              <ul class="pagination theme-colored">
                <li> <a aria-label="Previous" href="#"> <span aria-hidden="true">«</span> </a> </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">...</a></li>
                <li> <a aria-label="Next" href="#"> <span aria-hidden="true">»</span> </a> </li>
              </ul>
            </nav> -->
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
</div>
<!-- end main-content -->


@endsection
