@extends('frontend.layouts.master')

@section('style')
<style>
    .blogShort {
        border-bottom: 1px solid #ddd;
    }

    .add {
        background: #333;
        padding: 10%;
        height: 300px;
    }

    .nav-sidebar {
        width: 100%;
        padding: 30px 0;
        border-right: 1px solid #ddd;
    }

    .nav-sidebar a {
        color: #333;
        -webkit-transition: all 0.08s linear;
        -moz-transition: all 0.08s linear;
        -o-transition: all 0.08s linear;
        transition: all 0.08s linear;
    }

    .nav-sidebar .active a {
        cursor: default;
        background-color: #0b56a8;
        color: #fff;
    }

    .nav-sidebar .active a:hover {
        background-color: #E50000;
    }

    .nav-sidebar .text-overflow a,
    .nav-sidebar .text-overflow .media-body {
        white-space: nowrap;
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
    }

    .btn-blog {
        color: #ffffff;
        background-color: #E50000;
        border-color: #E50000;
        border-radius: 0;
        margin-bottom: 10px
    }

    .btn-blog:hover,
    .btn-blog:focus,
    .btn-blog:active,
    .btn-blog.active,
    .open .dropdown-toggle.btn-blog {
        color: white;
        background-color: #0b56a8;
        border-color: #0b56a8;
    }

    article h2 {
        color: #333333;
    }

    h2 {
        color: #0b56a8;
    }

    .margin10 {
        margin-bottom: 10px;
        margin-right: 10px;
    }

    .container .text-style {
        text-align: justify;
        line-height: 23px;
        margin: 0 13px 0 0;
        font-size: 19px;
    }
</style>
@endsection
@section('content')



<!-- Section: Why Choose Us -->
<section class="bg-silver-light bg-no-repeat bg-img-left-top" data-bg-img="images/photos/2.png">




<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
<div class="col-md-3">
            <div class="vertical-tab">
              <ul class="nav nav-tabs">
                  @foreach($abouts as $about)
                <li class=""><a href="#tab{{$about->id}}" data-toggle="tab" aria-expanded="false">{{$about->name}}</a></li>
@endforeach
              </ul>
            </div>
          </div>
          <div class="col-md-9">
            <div class="tab-content">
            @foreach($abouts as $about)

              <div class="tab-pane fade" id="tab{{$about->id}}">
                <div class="row">
                  <div class="col-md-12">
                    <p>{{$about->description}}</p>
                  </div>
                </div>
              </div>
@endforeach
            </div>
          </div>
</div>
    <!-- <div class="col-sm-2">
        <nav class="nav-sidebar">

            <ul class="nav tabs">

                <li class="active"><a href="#tab1" data-toggle="tab">fff</a></li>
                <li class="active"><a href="#tab2" data-toggle="tab">fff2</a></li>

            </ul>
        </nav>
        <div>
            <h2 class="add"></h2>
        </div> -->
    </div>
    <!-- tab content -->
    <!-- <div class="tab-content">
         <div class="tab-pane active text-style" id="tab1">
            <h2>fff</h2>
            <p>
                fff
            </p>

        </div>
        <div class="tab-pane  text-style" id="tab2">
            <h2>fff2</h2>
            <p>
                fff2
            </p>

        </div>

    </div> -->


</div>
</section>
@endsection
