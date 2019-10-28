@extends('backend.layouts.admin')

@section('content')


<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

							<!--begin::Portlet-->
							<div class="kt-portlet">
								<div class="kt-portlet__head">
									<div class="kt-portlet__head-label">
										<h3 class="kt-portlet__head-title">
                                        ADD Product
										</h3>
									</div>
								</div>

    <!--begin::Form-->
    <form method="post" action="{{route('admin.products.store')}}" enctype="multipart/form-data" class="kt-form kt-form--label-right">
        @csrf
									<div class="kt-portlet__body">
										<div class="form-group row">
											<label class="col-form-label col-lg-3 col-sm-12">Name:</label>
											<div class="col-lg-4 col-md-9 col-sm-12">
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter a name" value="{{$products->name }}" class="form-control @error('name') is-invalid @enderror">

@error('name')
<p class="text-danger">{{$message}}</p>
@enderror

                        </div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-lg-3 col-sm-12">Description:</label>
											<div class="col-lg-4 col-md-9 col-sm-12">
                                            <textarea class="form-control" id="description" name="description" placeholder="Enter a description" rows="8">{{ $products->description }}</textarea>
                    @error('description')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
											</div>
										</div>
                                        <div class="form-group row">
                                                 <label  class="col-form-label col-lg-3 col-sm-12">Image Browser</label>
                                                <div  class=" custom-file col-lg-4 col-md-9 col-sm-12">
                                               <input type="file" class="custom-file-input" id="image" name="image">
                                               <label class="custom-file-label text-left" for="customFile">Choose image</label>
                                            </div>
                                         </div>
                                         <div class="form-group row">
													<label class="col-form-label col-lg-3 col-sm-12">Brand *</label>
													<div class="col-lg-4 col-md-9 col-sm-12 form-group-sub">
														<select class="form-control" id="brand_id" name="brand_id">
                                                            <option value="">Select</option>

                                                            @foreach(App\Brands::all()  as $item)
                                                      <option value="{{$item->id}}" {{  old('brand_id', $products->brand_id) == $item->id ? ' selected' : '' }}> {{ $item->name}}</option>
                                                          @endforeach
														</select>
														<span class="form-text text-muted">Please select  a brand.</span>
													</div>
                                                </div>
                                         <div class="form-group row">
													<label class="col-form-label col-lg-3 col-sm-12">Category *</label>
													<div class="col-lg-4 col-md-9 col-sm-12 form-group-sub">
														<select class="form-control" id="main_category_id" name="main_category_id"  >
                                                            <option value="">Select</option>
														</select>
														<span class="form-text text-muted">Please select  a category.</span>
													</div>
                                                </div>

									</div>
									<div class="kt-portlet__foot">
										<div class="kt-form__actions">
											<div class="row">
												<div class="col-lg-8 ml-lg-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
													<button type="reset" class="btn btn-secondary">Cancel</button>
												</div>
											</div>
										</div>
									</div>
								</form>

								<!--end::Form-->
							</div>

							<!--end::Portlet-->


                        </div>
                        @endsection

                        @section('js')
                        <script>
                   var x=0;
                    var _id,_id2,_id3;
                    var getcat,getcat2,getcat_1;
                         $(document).ready(function() {
                              $.ajax({
	 type:'GET',
	 dataType:'json',
	 url:'{{URL::to('/admin/products')}}'+'/getSupCat',
	 success:function(data){
 		 $.each(data.categories,function(index,valu){
 			 if(valu.parent_id==0   ){
 				$('#main_category_id').append(
                     ' <option  value="'+valu.id+'"  >'+valu.name+' </option> '

                    );
			  _id=valu.id;
			  get();
			  }

		 })

	 }

                         });


                        });


 function get(){

                var output;
                $.ajax({
                    async:false,
                type:'GET',
                dataType:'json',
                url:'{{URL::to('/admin/products')}}'+'/getSupCat',
                success:function(data){
                    $.each(data.categories,function(index,valu){


                        if(_id==valu.parent_id ){
                            output="&nbsp;&nbsp;&nbsp; ->"+valu.name
                            $('#main_category_id').append(
                                ' <option  value="'+valu.id+'"  >'+output+' </option> '

                                );
                            _id2=valu.id;
                        get2();
                        }
                    })

                }

            })

}


 function get2(){
 	 var output,output2;
	 var x=1;
	 $.ajax({
		 async:false,
	 type:'GET',
	 dataType:'json',
	 url:'{{URL::to('/admin/products')}}'+'/getSupCat',
	 success:function(data){
		 $.each(data.categories,function(index,valu){
			if((_id2==valu.parent_id && _id2!=_id)   ){x=0;
				_id3=valu.id;
				output="&nbsp; &nbsp; &nbsp; -->"+valu.name
 				  $('#main_category_id').append(
                     ' <option  value="'+valu.id+'"  >'+output+' </option> '
                      );
			 }
			if(_id3==valu.parent_id  && x==0){x=1;
			output2=" &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;--->"+valu.name;
				  $('#main_category_id').append(
                       ' <option  value="'+valu.id+'"  >'+output2+' </option> '
                         );
			}

		 })

	 }

 })

 }

                 </script>
          @endsection

