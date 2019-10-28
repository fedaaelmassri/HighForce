@extends('backend.layouts.admin')

@section('style')
<style>

.image{
    margin-left:24rem !important;
    height:100px !important;

}
</style>

@endsection
@section('content')


<!--begin::Portlet-->
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
               UPDATE Brands
            </h3>
        </div>
    </div>

    <!--begin::Form-->
    <form method="post" action="{{route('admin.brands.update', [ 'id' => $brands->id ])}}" enctype="multipart/form-data" class="kt-form kt-form--label-right">
                      @method('PUT')
                        @csrf
        <div class="kt-portlet__body">
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Title:</label>
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter brand name" value="{{$brands->name }}" class="form-control @error('name') is-invalid @enderror">

                    @error('name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror

                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Description:</label>
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <textarea class="form-control" id="description" name="description" placeholder="Enter a description" rows="8">{{ $brands->description }}</textarea>
                    @error('description')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Image Browser</label>
                <div class=" custom-file col-lg-6 col-md-9 col-sm-12">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label text-left" for="customFile">Choose image</label>
                            @error('image')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                </div>
            </div>
            <div class="row form-group ">
                        <img class="image " src="{{ asset('storage/' . $brands->image) }}" height="100"  >
                    </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-lg-8 ml-lg-auto">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

    </form>
</div>

<!--end::Portlet-->







@endsection
