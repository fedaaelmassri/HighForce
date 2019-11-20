@extends('frontend.layouts.master')
@section('style')
<style>
.brandlist li {
    margin: 6px 0 15px 6px;
    float: left;


}
.brandlist li a {
    display: block;
    padding: 10px 11px;
    background: #f1f1f1;
    font-size: 11px;
    color: #000;
}
</style>

@endsection

@section('content')

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
        <form method="post" action="#"  >
        @csrf
        <ul class="brandlist mt-0">
        <input type="hidden" id="catid" name="catid">
        @foreach($brands as $brand)
        <li >
        <a href="javascript:void(0);">
<!-- <input type="checkbox" value="437" id="chk_437" onclick="return getProductList(this.value);"> -->

        <input type="checkbox" name="{{$brand->name}}-{{$brand->id}}" id="{{$brand->name}}-{{$brand->id}}" value="{{$brand->id}}"  onclick="viewByBraCat({{$brand->id}});">
        &nbsp;&nbsp; <label  style="cursor:pointer; float:right; margin-top:2px;">{{$brand->name}}</label>


</a>
        </li>
        @endforeach
     </ul>
     </form>
        </div>
          <div class="row multi-row-clearfix">
            <div class="products" id="productsfilter">
               @foreach($products as $products)
              <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                <div class="product pb-0">
                  <div class="product-thumb">
                  <img alt="" src="{{asset('storage/'.$products->image)}}"width="320" heigt="360" class="img-responsive img-fullwidth">

                  </div>
                  <div class="product-details text-center bg-lighter pt-15 pb-10">
                    <a href="#"><h5 class="product-title mt-0">{{$products->name}} </h5></a>
                  </div>
                </div>
              </div>

              @endforeach

               <div class="col-md-12">
                <nav>
                {{\App\Products::paginate(10)}}

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
            <div class="widget">
              <h5 class="widget-title line-bottom">Categories</h5>
              <div class="categories">
                <ul class="list list-border angle-double-right" id="catlist">
                  <!-- <li><a href="#">Creative<span>(19)</span></a>
                  <ul class="list list-border angle-double-right">
                  <li><a href="#">Portfolio<span>(21)</span></a></li>
                  <li><a href="#">Fitness<span>(15)</span></a></li>
                  <li><a href="#">Gym<span>(35)</span></a></li>
                  </ul>
                  </li>
                  <li><a href="#">Portfolio<span>(21)</span></a></li>
                  <li><a href="#">Fitness<span>(15)</span></a></li>
                  <li><a href="#">Gym<span>(35)</span></a></li>
                  <li><a href="#">Personal<span>(16)</span></a></li> -->
                </ul>
              </div>
            </div>
            <!-- <div class="widget">
            <h5 class="widget-title line-bottom">Categories</h5>

                            <div class="services-list">
                                <ul class="list mt-0" id="catlist">





                                </ul>
                            </div>
                        </div> -->

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end main-content -->

</div>

@endsection

@section('js')
                  <script>
                  var caturl='{{URL::to('/getSupCat')}}';
                  var x=0;
                                        var _id,_id2,_id3;
                                        var getcat,getcat2,getcat_1;
                              $(document).ready(function() {

                                 $.ajax({
                      type:'POST',
                      dataType:'json',
                      url:caturl,
                      headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
                      success:function(data){
                //    alert('success');
                       $.each(data.categories,function(index,valu){
                        if(valu.parent_id==0   ){
                          	$('#catlist').append(

                                     '  <li   class=" " ><a   data-toggle="collapse" href="javascript:void(0);" data-target="#childcat-'+valu.id+'"   onclick="viewByCat('+valu.id+')"> '+ valu.name+'</a> <ul class="collapse list list-border angle-double-right" id="childcat-'+valu.id+'"></ul> </li> '



                                        );
                                        _id=valu.id;
			                    get(valu.id);
                            }
                    });
                }
                 });
                });


                function get(id){

                var output;
                $.ajax({
                    async:false,
                type:'POST',
                dataType:'json',
                url:caturl,
                headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
                success:function(data){
                    $('#childcat-'+id).html(' ');
                    $.each(data.categories,function(index,valu){
                        if(_id==valu.parent_id ){
                            output="&nbsp;&nbsp;&nbsp; "+valu.name
                            $("#childcat-"+id).append(
                                '  <li    class=" " > <a   data-toggle="collapse" href="javascript:void(0);" data-target="#childpcat-'+valu.id+'" onclick="viewByCat('+valu.id+')"  >  <i  class="fa fa-angle-right"></i> &nbsp;&nbsp;'+ valu.name+'</a> <ul class="collapse list list-border angle-double-right" id="childpcat-'+valu.id+'"></ul> </li> '

                                // '&nbsp;&nbsp;&nbsp; <li id="childpcat-'+valu.id +'"    > <i  class="fa fa-angle-right"></i>'+output+'</li>'

                                );
                                _id2=valu.id;
                        get2(valu.id);
                        }
                    })

                }

                })

    }


 function get2(id){
 	 var output,output2;
	 var x=1;
	 $.ajax({
		 async:false,
	 type:'POST',
	 dataType:'json',
	 url:caturl,
     headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
	 success:function(data){
		 $.each(data.categories,function(index,valu){
			if((_id2==valu.parent_id && _id2!=_id)   ){x=0;
				_id3=valu.id;
  				  $('#childpcat-'+id).append(

                    //  '<br/><input type="checkbox" name="vehicle3" value="'+valu.id+'" checked>'+output
                     '  <li    class=" " > <a   data-toggle="collapse" href="javascript:void(0);" onclick="viewByCat('+valu.id+')" data-target="#childppcat-'+valu.id+'"  ><i  class="fa fa-angle-right"></i> &nbsp;&nbsp; '+ valu.name+'</a>  <ul class="collapse list list-border angle-double-right" id="childppcat-'+valu.id+'"></ul> </li> '

                      );
			 }
			if(_id3==valu.parent_id  && x==0){x=1;
 				  $('#childppcat-'+id).append(
            '<li    class=" " > <a   data-toggle="collapse" href="javascript:void(0);" data-target="#childpppcat-'+valu.id+'" onclick="viewByCat('+valu.id+')" > '+ valu.name+'</a>   </li> '
                         );
			}

		 })

	 }

 })

 }

 function viewByBraCat(bid){
    var cid=$("#catid").val();
    alert(cid);
    var url_m='productsByBraCat/'+cid+'/'+bid;
            $.ajax({
                url: url_m,
                data: {},
                method: 'GET',
                beforeSend:function(){

                },

            }).done(function (data) {
                 console.log(data)
                $("#productsfilter").html(data);
                if(data == '') {
                    // $("#"+id+".first-akar").append('<div>hello</div>');
                }

             });
 }
 function viewByCat(id) {
    var url_m='productsByCat/'+id;
            $.ajax({
                url: url_m,
                data: {},
                method: 'GET',
                beforeSend:function(){

                },

            }).done(function (data) {
                 console.log(data)
                     $("#catid").val(id);
                $("#productsfilter").html(data);
                if(data == '') {
                    // $("#"+id+".first-akar").append('<div>hello</div>');
                }

             });
        }

                 </script>
@endsection
