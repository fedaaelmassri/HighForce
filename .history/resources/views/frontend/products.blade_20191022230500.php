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




                                    @foreach($allServices as $allServ)
                                    <li class="{{$services->id==$allServ->id ? 'active' : ''}}"><a href="{{route('details' , [ 'id' => $allServ->id ])}}"> {{$allServ->name}}</a></li>

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
 <!-- Start main-content -->

 <div class="main-content">

<!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1080">
  <div class="container pt-90 pb-50">
    <!-- Section Content -->
    <div class="section-content pt-100">
      <div class="row">
        <div class="col-md-12">
          <h3 class="title text-theme-colored">Shop Sidebar</h3>
          <ul class="list-inline text-white">
            <li>Home /</li>
            <li><span class="text-gray">Shop Sidebar</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="">
  <div class="container mt-30 mb-30 p-30">
    <div class="section-content">
      <div class="row">
        <div class="col-sm-12 col-md-9">
          <div class="row multi-row-clearfix">
            <div class="products">
              <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                <div class="product pb-0">
                  <span class="tag-sale">Sale!</span>
                  <div class="product-thumb">
                    <img alt="" src="http://placehold.it/320x360" class="img-responsive img-fullwidth">
                    <div class="overlay">
                      <div class="btn-add-to-cart-wrapper">
                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                      </div>
                      <div class="btn-product-view-details">
                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">View detail</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-details text-center bg-lighter pt-15 pb-10">
                    <a href="#"><h5 class="product-title mt-0">Product Name</h5></a>
                    <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 67%;">3.50</span></div>
                    <div class="price"><del><span class="amount">$110.00</span></del><ins><span class="amount">$90.00</span></ins></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                <div class="product pb-0">
                  <div class="product-thumb">
                    <img alt="" src="http://placehold.it/320x360" class="img-responsive img-fullwidth">
                    <div class="overlay">
                      <div class="btn-add-to-cart-wrapper">
                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                      </div>
                      <div class="btn-product-view-details">
                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">View detail</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-details text-center bg-lighter pt-15 pb-10">
                    <a href="#"><h5 class="product-title mt-0">Product Name</h5></a>
                    <div class="star-rating" title="Rated 5.00 out of 5"><span style="width: 100%;">5.00</span></div>
                    <div class="price"><ins><span class="amount">$480.00</span></ins></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                <div class="product pb-0">
                  <span class="tag-sale">Sale!</span>
                  <div class="product-thumb">
                    <img alt="" src="http://placehold.it/320x360" class="img-responsive img-fullwidth">
                    <div class="overlay">
                      <div class="btn-add-to-cart-wrapper">
                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                      </div>
                      <div class="btn-product-view-details">
                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">View detail</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-details text-center bg-lighter pt-15 pb-10">
                    <a href="#"><h5 class="product-title mt-0">Product Name</h5></a>
                    <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 60%;">3.50</span></div>
                    <div class="price"><del><span class="amount">$70.00</span></del><ins><span class="amount">$55.00</span></ins></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                <div class="product pb-0">
                  <div class="product-thumb">
                    <img alt="" src="http://placehold.it/320x360" class="img-responsive img-fullwidth">
                    <div class="overlay">
                      <div class="btn-add-to-cart-wrapper">
                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                      </div>
                      <div class="btn-product-view-details">
                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">View detail</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-details text-center bg-lighter pt-15 pb-10">
                    <a href="#"><h5 class="product-title mt-0">Product Name</h5></a>
                    <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 75%;">3.50</span></div>
                    <div class="price"><ins><span class="amount">$185.00</span></ins></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                <div class="product pb-0">
                  <span class="tag-sale">Sale!</span>
                  <div class="product-thumb">
                    <img alt="" src="http://placehold.it/320x360" class="img-responsive img-fullwidth">
                    <div class="overlay">
                      <div class="btn-add-to-cart-wrapper">
                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                      </div>
                      <div class="btn-product-view-details">
                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">View detail</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-details text-center bg-lighter pt-15 pb-10">
                    <a href="#"><h5 class="product-title mt-0">Product Name</h5></a>
                    <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 40%;">3.50</span></div>
                    <div class="price"><del><span class="amount">$220.00</span></del><ins><span class="amount">$210.00</span></ins></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                <div class="product pb-0">
                  <span class="tag-sale">Sale!</span>
                  <div class="product-thumb">
                    <img alt="" src="http://placehold.it/320x360" class="img-responsive img-fullwidth">
                    <div class="overlay">
                      <div class="btn-add-to-cart-wrapper">
                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                      </div>
                      <div class="btn-product-view-details">
                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">View detail</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-details text-center bg-lighter pt-15 pb-10">
                    <a href="#"><h5 class="product-title mt-0">Product Name</h5></a>
                    <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 80%;">3.50</span></div>
                    <div class="price"><del><span class="amount">$165.00</span></del><ins><span class="amount">$160.00</span></ins></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                <div class="product pb-0">
                  <span class="tag-sale">Sale!</span>
                  <div class="product-thumb">
                    <img alt="" src="http://placehold.it/320x360" class="img-responsive img-fullwidth">
                    <div class="overlay">
                      <div class="btn-add-to-cart-wrapper">
                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                      </div>
                      <div class="btn-product-view-details">
                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">View detail</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-details text-center bg-lighter pt-15 pb-10">
                    <a href="#"><h5 class="product-title mt-0">Product Name</h5></a>
                    <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 32%;">3.50</span></div>
                    <div class="price"><del><span class="amount">$120.00</span></del><ins><span class="amount">$110.00</span></ins></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                <div class="product pb-0">
                  <div class="product-thumb">
                    <img alt="" src="http://placehold.it/320x360" class="img-responsive img-fullwidth">
                    <div class="overlay">
                      <div class="btn-add-to-cart-wrapper">
                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                      </div>
                      <div class="btn-product-view-details">
                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">View detail</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-details text-center bg-lighter pt-15 pb-10">
                    <a href="#"><h5 class="product-title mt-0">Product Name</h5></a>
                    <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 85%;">3.50</span></div>
                    <div class="price"><ins><span class="amount">$240.00</span></ins></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                <div class="product pb-0">
                  <div class="product-thumb">
                    <img alt="" src="http://placehold.it/320x360" class="img-responsive img-fullwidth">
                    <div class="overlay">
                      <div class="btn-add-to-cart-wrapper">
                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                      </div>
                      <div class="btn-product-view-details">
                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">View detail</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-details text-center bg-lighter pt-15 pb-10">
                    <a href="#"><h5 class="product-title mt-0">Product Name</h5></a>
                    <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 56%;">3.50</span></div>
                    <div class="price"><ins><span class="amount">$480.00</span></ins></div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <nav>
                  <ul class="pagination theme-colored mt-0">
                    <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">...</a></li>
                    <li> <a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-3">
          <div class="sidebar sidebar-right mt-sm-30">
            <div class="widget">
              <h5 class="widget-title line-bottom">Search box</h5>
              <div class="search-form">
                <form>
                  <div class="input-group">
                    <input type="text" placeholder="Click to Search" class="form-control search-input">
                    <span class="input-group-btn">
                    <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
            <!-- <div class="widget">
              <h5 class="widget-title line-bottom">Categories</h5>
              <div class="categories">
                <ul class="list list-border angle-double-right">
                  <li><a href="#">Creative<span>(19)</span></a></li>
                  <li><a href="#">Portfolio<span>(21)</span></a></li>
                  <li><a href="#">Fitness<span>(15)</span></a></li>
                  <li><a href="#">Gym<span>(35)</span></a></li>
                  <li><a href="#">Personal<span>(16)</span></a></li>
                </ul>
              </div>
            </div> -->
            <div class="widget">
            <h5 class="widget-title line-bottom">Categories</h5>

                            <div class="services-list">
                                <ul class="list mt-0">




                                    @foreach($allServices as $allServ)
                                    <li class="{{$services->id==$allServ->id ? 'active' : ''}}"><a href="{{route('details' , [ 'id' => $allServ->id ])}}"> {{$allServ->name}}</a></li>

                                    @endforeach
                                </ul>
                            </div>
                        </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end main-content -->

</div>

@endsection
