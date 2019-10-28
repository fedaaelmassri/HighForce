@extends('frontend.layouts.master')


@section('content')
<!-- Section: inner-header -->
<section class="inner-header bg-black-222">
    <div class="container pt-10 pb-10">
        <!-- Section Content -->
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">

                    <ol class="breadcrumb text-black mb-10" style="margin-top:18px">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('contactUs')}}">contact</a></li>
                        <li class="active text-theme-colored">contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Divider: Contact -->
<section class="divider">
    <div class="container">
        <div class="row pt-10">
            <div class="col-md-7">
                <h4 class="mt-0 mb-30 line-bottom">Interested in discussing?</h4>
                <!-- Contact Form -->
                <form class="contact-form-transparent" id="contact_form" action="{{route('sendEmail')}}" name="contact-form" method="post">

                    @csrf

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="form_name">Name <small>*</small></label>
                                <input id="name" name="name" class="form-control" type="text" placeholder="Enter Name" required="">
                            </div>
                            <div class="form-group">
                                <label for="form_email">Email <small>*</small></label>
                                <input id="email" name="email" class="form-control required email" type="email" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label for="form_name">Subject <small>*</small></label>
                                <input id="subject" name="subject" class="form-control required" type="text" placeholder="Enter Subject">
                            </div>
                            <div class="form-group">
                                <label for="form_phone">Phone</label>
                                <input id="phone" name="phone" class="form-control" type="text" placeholder="Enter Phone">
                            </div>
                            <div class="form-group">
                                <label for="form_name">Message</label>
                                <textarea id="message" name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                            </div>

                            <div class="col-sm-12">
                                <!-- <div class="form-group ">
                                <div class="captcha">
                                    <span style="padding-right:6px;">{!! captcha_img() !!}</span>
                                    <button type="button" id="refresh" class="btn btn-success "><i class="fa fa-refresh"></i></button>
                                </div>
                            </div> -->




                                <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">

                                    <div class="captcha">
                                        <span style="padding-right:6px;">{!! captcha_img() !!}</span>
                                        <button type="button" id="refresh" class="btn btn-success btn-refresh"><i class="fa fa-refresh"></i></button>
                                    </div>

                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group ">
                                    <!-- <input id="captcha" name="captcha" required="" type="text" class="form-control" placeholder="Enter Captcha"> -->
                                    <input id="captcha" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Captcha" name="captcha">
                                    @error('captcha')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror


                                    <!-- @if ($errors->has('captcha'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('captcha') }}</strong>
                                    </span>
                                    @endif -->
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                                    <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5">Send your message</button>
                                    <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>

                <!-- Contact Form Validation-->

            </div>
            <div class="col-md-4 col-md-offset-1">
                <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
                    <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                    <h4>Call Us</h4>
                    <h6 class="text-gray">Phone: {{$data['phone_value']}}</h6>
                </div>
                <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
                    <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                    <h4>Email</h4>
                    <h6 class="text-gray">{{$data['email_value']}}</h6>
                </div>
                <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
                    <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                    <h4>Address</h4>
                    <h6 class="text-gray">{{$data['address_value']}}</h6>
                </div>

                <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
                    <i class="fa fa-clock-o font-36 mb-10 text-theme-colored"></i>
                    <h4> Work Time </h4>
                    <h6 class="text-gray">{{$data['from_today_value']}} - {{$data['to_today_value']}} &nbsp;&nbsp; {{$data['from_time_value']}} - {{$data['to_time_value']}}</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <!-- Google Map HTML Codes -->
    <iframe style="border:0" allowfullscreen height="400 " data-zoom="12" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d846.8341340404598!2d35.922398529202155!3d31.897452398827912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b58af0c404581%3A0x24ae14eb20c405bb!2sHigh+Force+Engineering+Solutions+Ltd!5e0!3m2!1sen!2s!4v1502276308644"></iframe>



</section>
@endsection




@section('js')
<!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyCZS5wBc1UzKHoKxZTpjHS_1K-CFbk3vTU"></script> -->
<!-- <script src="{{asset('assets/js/google-map-init-multilocation.js')}}"></script> -->


<script type="text/javascript">
    $(document).on("click", '#refresh', function() {
        console.log('salam');
        var url = '{{URL::to('refreshcaptcha')}}';
        console.log(url);
        $.ajax({
            type: 'GET',
            url: url,
            success: function(data) {
                alert(data);
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>



@endsection
