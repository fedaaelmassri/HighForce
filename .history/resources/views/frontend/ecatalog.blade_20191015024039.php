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
  <div class="row">
              <div class="col-xs-6 col-md-3">
                        <img alt="..." src="https://placehold.it/200x200" class=" " width="200" height="230">
               <a class="btn btn-colored btn-flat btn-theme-colored  pb-10 pt-10"   href="{{route('ecatalog')}}">E-Catalog</a>

            </div>
              <div class="col-xs-6 col-md-3"> <a class="thumbnail" href="#"> <img alt="..." src="https://placehold.it/200x200" class="img-fullwidth"> </a> </div>
              <div class="col-xs-6 col-md-3"> <a class="thumbnail" href="#"> <img alt="..." src="https://placehold.it/200x200" class="img-fullwidth"> </a> </div>
              <div class="col-xs-6 col-md-3"> <a class="thumbnail" href="#"> <img alt="..." src="https://placehold.it/200x200" class="img-fullwidth"> </a> </div>
            </div>
  </div>
</section>
</div>
<!-- end main-content -->


@endsection
