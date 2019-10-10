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
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Category name">
														<span class="form-text text-muted">Please enter Category name</span>
                                            </div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-lg-3 col-sm-12">Description:</label>
											<div class="col-lg-4 col-md-9 col-sm-12">
												<textarea class="form-control"   id="description"  name="description" placeholder="Enter  description" rows="8"></textarea>
												<span class="form-text text-muted">Please enter description</span>
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
                                                            @foreach($brands as $item)
                                                      <option value="{{$item->id}}"> {{ $item->name}}</option>
                                                          @endforeach
														</select>
														<span class="form-text text-muted">Please select  a brand.</span>
													</div>
                                                </div>
                                         <div class="form-group row">
													<label class="col-form-label col-lg-3 col-sm-12">Category *</label>
													<div class="col-lg-4 col-md-9 col-sm-12 form-group-sub">
														<select class="form-control" id="main_category_id" name="main_category_id"  onchange="getSubCat()">
                                                            <option value="">Select</option>
                                                            @foreach($categories as $parent)
                                                            @if ($parent->parent_id==0)

                                                          <option value="{{$parent->id}}" > {{$parent->name}}</option>
                                                          @endif

                                                          @if ($parent->children->count())

                                                          @foreach ($parent->children as $child)
                                                          <option value="{{$child->id}}" >&nbsp;-> {{$child->name}}</option>
                                                           @if ($child->children->count())
                                                          @foreach ($child->children as $child2)

                                                          <option value="{{$child2->id}}" >&nbsp; &nbsp;--> {{$child2->name}}</option>
                                                           @endforeach

                                                          @endif

                                                          @endforeach
                                                          @endif
                                                         @endforeach

														</select>
														<span class="form-text text-muted">Please select  a category.</span>
													</div>
                                                </div>
                                                <div id="sub_id" class="d-none">
                                                <div  class="form-group row ">
													<label class="col-form-label col-lg-3 col-sm-12">Sub Category *</label>
													<div class="col-lg-4 col-md-9 col-sm-12 form-group-sub">
														<select class="form-control" id="sub_category_id" name="sub_category_id">
															<option value="">Select</option>

														</select>
 													</div>
												</div>
                                                </div>

									</div>
									<div class="kt-portlet__foot">
										<div class="kt-form__actions">
											<div class="row">
												<div class="col-lg-8 ml-lg-auto">
													<button type="reset" class="btn btn-primary">Submit</button>
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
                        <script>

                          function getSubCat(){
                        var id=$('#main_category_id').val();
                        // alert(id)
                        var url='{{URL::to('/admin/products')}}'+'/getSupCat/'+id;
                        // alert(url)
                     $.ajax({
                         url: url,
                        type: 'GET',
                       data: {'id':id},
                       dataType: 'JSON',
                         success: function(response){
                            var len = response.categories.length;
                                            $.each(response.categories, function(index, item) {
                                                $('#sub_id').removeClass('d-none');
                                                $('#sub_id').addClass('d-block');

                        $('#sub_category_id').append(
                            $("<option></option>")
                                .text(item.name)
                                .val(item.id)
                        );
                    });
                         }
                    });

                 }

                 </script>
                            @endsection
