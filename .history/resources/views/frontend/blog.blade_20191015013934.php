@extends('frontend.layouts.master')
@section('content')
  <!-- Start main-content -->
  <div class="main-content">


    <section class="inner-header bg-gray-darkgray ">
      <div class="container pt-10 pb-10">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-sm-8 xs-text-center">
              <h3 class="text-white mt-10">Blog</h3>
            </div>
            <div class="col-sm-4">
              <ul class="breadcrumb white mt-10 text-right xs-text-center">
              <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Blog</li>
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
            @foreach($posts as $post)

              <article class="post clearfix mb-30 bg-lighter">
                <div class="entry-header">
                  <div class="post-thumb thumb">
                    <img  src="{{asset('storage/' . $post->image )}}" alt="" class="img-responsive img-fullwidth">
                  </div>
                </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600">{{$post->created_at->format('d') }}</li>
                        <li class="font-12 text-white text-uppercase">{{$post->created_at->format('m') }}</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="{{route('post-details' , [ 'id' => $post->id ])}}">{{$post->name}}</a></h4>
                       </div>
                    </div>
                  </div>
                  <p class="mt-10">   {{ substr($post->description,0,strpos($post->description, ' ', 200)) }} </p>
                  <a href="{{route('post-details' , [ 'id' => $post->id ])}}" class="btn-read-more">Read more</a>
                  <div class="clearfix"></div>
                </div>
              </article>

              @endforeach




            </div>
          </div>
          <div class="col-md-12">
          <nav>
          {{ $posts->links() }}
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
