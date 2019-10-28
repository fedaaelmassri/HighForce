@extends('backend.layouts.admin')

@section('content')


<!--begin::Portlet-->
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Settings
            </h3>
        </div>
    </div>

    <!--begin::Form-->
    <form method="post" action="{{ route('admin.setting.update') }}" class="kt-form kt-form--label-right">
        @csrf


        <div class="kt-portlet__body">
            @foreach($Settings as $settings)
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">{{$settings->constant}} :</label>
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <input type="text" class="form-control @error('{{$settings->constant}}') is-invalid @enderror" name="{{$settings->constant}}" value="{{ old($settings->constant,$settings->value)}}" autofocus>

                    @error('{{$settings->constant}}')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>


            @endforeach


            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">From Time :</label>
                <div class="col-lg-6 col-md-9 col-sm-12 timepicker">
                    <!-- <input type="text" class="form-control  @error('time') is-invalid @enderror" name="time" value="{{ old('time',$settings->value)}}" autofocus> -->
                    <input  id="kt_timepicker_1" class="form-control @error('{{$time->constant}}') is-invalid @enderror" type="text" name="{{$time->constant}}" value="{{ old('$time->constant',$time->value)}}" autofocusid="example-time-input">
                    @error('$time->constant')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">To Time :</label>
                <div class="col-lg-6 col-md-9 col-sm-12 ">
                    <!-- <input type="text" class="form-control  @error('time') is-invalid @enderror" name="time" value="{{ old('time',$settings->value)}}" autofocus> -->
                    <input  id="kt_timepicker_1" class="form-control @error('{{$to_time->constant}}') is-invalid @enderror" type="text" name="{{$to_time->constant}}" value="{{ old('$to_time->constant',$to_time->value)}}" autofocusid="example-time-input">
                    @error('$to_time->constant')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">From Today</label>
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <select class="custom-select form-control" name='from_today'>
                        <option selected="">Open this select menu</option>

                        <option @if($from_today->value == 'Saturday')selected @endif value="Saturday">Saturday</option>
                        <option @if($from_today->value == 'Sunday')selected @endif value="Sunday">Sunday</option>
                        <option @if($from_today->value == 'Monday')selected @endif value="Monday">Monday</option>
                        <option @if($from_today->value == 'Tuesday')selected @endif value="Tuesday">Tuesday</option>
                        <option @if($from_today->value == 'Wednesday')selected @endif value="Wednesday">Wednesday</option>
                        <option @if($from_today->value == 'Thursday')selected @endif value="Thursday">Thursday</option>
                        <option @if($from_today->value == 'Friday')selected @endif value="Friday">Friday</option>
                    </select>
                </div>

            </div>

            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">To Today</label>
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <select class="custom-select form-control" name='to_today'>
                        <option selected="">Open this select menu</option>

                        <option @if($to_today->value == 'Saturday')selected @endif value="Saturday">Saturday</option>
                        <option @if($to_today->value == 'Sunday')selected @endif value="Sunday">Sunday</option>
                        <option @if($to_today->value == 'Monday')selected @endif value="Monday">Monday</option>
                        <option @if($to_today->value == 'Tuesday')selected @endif value="Tuesday">Tuesday</option>
                        <option @if($to_today->value == 'Wednesday')selected @endif value="Wednesday">Wednesday</option>
                        <option @if($to_today->value == 'Thursday')selected @endif value="Thursday">Thursday</option>
                        <option @if($to_today->value == 'Friday')selected @endif value="Friday">Friday</option>
                    </select>
                </div>

            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Email:</label>
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <input type="email" class="form-control @error('$email->constant') is-invalid @enderror" name="{{$email->constant}}" value="{{$email->value}}" autofocus>

                    @error('{{$email->constant}}')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Single File Upload</label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <div class="kt-dropzone dropzone" action="inc/api/dropzone/upload.php" id="m-dropzone-one">
                        <div class="kt-dropzone__msg dz-message needsclick">
                            <h3 class="kt-dropzone__msg-title">Drop files here or click to upload.</h3>
                            <span class="kt-dropzone__msg-desc">This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.</span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-lg-8 ml-lg-auto">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <!-- <button type="submit" class="btn btn-secondary">Cancel</button> -->
                        </div>
                    </div>
                </div>
            </div>

    </form>
</div>

<!--end::Portlet-->







@endsection


@section('js')
<script src="{{asset('assets/app/custom/general/crud/forms/widgets/bootstrap-timepicker.js')}}" type="text/javascript"></script>

@endsection
