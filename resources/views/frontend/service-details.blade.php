@extends('frontend.layouts.master')
@section('content')
<!-- Start main-content -->
<div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{asset('storage/' . $services->image )}}">
        <div class="container pt-100 pb-50">
            <!-- Section Content -->
            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-theme-colored">{{$services->name}}</h3>
                        <ul class="breadcrumb white">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">{{$services->name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Services Details -->
    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-8 blog-pull-right">
                    <div class="single-service">
                        <img src="{{asset('storage/' . $services->image )}}" height="450" width="750" alt="">
                        <h4 class="line-bottom text-uppercase mt-30 mb-20">Services Details</h4>
                        <p>{{$services->description}}</p>


                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="sidebar sidebar-left mt-sm-30 ml-30 ml-sm-0">
                        <div class="widget">
                            <div class="services-list">
                                <ul class="list mt-0">

                                    <li class="active"><a href="{{route('details' , [ 'id' => $activeServices->id ])}}"> {{$activeServices->name}}</a></li>



                                    @foreach($allServices as $allServ)
                                    <li><a href="{{route('details' , [ 'id' => $allServ->id ])}}"> {{$allServ->name}}</a></li>

                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title line-bottom">Download Brochures</h4>
                            <div class="brochured">
                                <ul class="list">
                                    @foreach($ecatalogues as $ecatalogues)
                                    @if (pathinfo($ecatalogues->filepath, PATHINFO_EXTENSION) == 'docx')

                                    <li><a href="{{ route('downloads.download', [ 'id' => $ecatalogues->id ]) }}"><i class="fa fa-file-word-o"></i>{{$ecatalogues->name}}</a></li>
                                    @else
                                    <li><a href="{{ route('downloads.download', [ 'id' => $ecatalogues->id ]) }}"><i class="fa fa-file-pdf-o"></i>{{$ecatalogues->name}}</a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
