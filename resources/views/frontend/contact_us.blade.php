@extends('frontend.layouts.master')


@section('content')


<!-- Section: Have Any Question -->
<section id="contact" class="divider">
    <div class="container pt-60 pb-60">
        <div class="section-title mb-60">
            <div class="row">
                <div class="col-md-12">
                    <div class="esc-heading small-border text-center">
                        <h3>Have any Questions?</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="contact-info text-center">
                        <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                        <h4>Call Us</h4>
                        <h6 class="text-gray">Phone: +262 695 2601</h6>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="contact-info text-center">
                        <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                        <h4>Address</h4>
                        <h6 class="text-gray">121 King Street, Australia</h6>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="contact-info text-center">
                        <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                        <h4>Email</h4>
                        <h6 class="text-gray">you@yourdomain.com</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Contact -->
<section id="contact" data-bg-img="{{asset('assets/images/pattern/p4.png')}}">
    <div class="container">
        <div class="section-title text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Contact</span> Us</h2>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-md-6">

                    <!-- Contact Form -->
                    <form class="contact-form-transparent" id="contact_form" action="{{route('sendEmail')}}" name="contact-form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input id="name" name="name" class="form-control" type="text" placeholder="Enter Name" required="">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input id="phone" name="phone" class="form-control" type="text" placeholder="Enter Phone">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input id="email" name="email" class="form-control required email" type="email" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input id="subject" name="subject" class="form-control required" type="text" placeholder="Enter Subject">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea id="message" name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                            <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
                      <label for="password" class="col-md-4 control-label">Captcha</label>


                      <div class="col-md-6">
                          <div class="captcha">
                          <span>{!! captcha_img() !!}</span>
                          <button type="button" class="btn btn-success btn-refresh"><i class="fa fa-refresh"></i></button>
                          </div>
                          <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">


                          @if ($errors->has('captcha'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('captcha') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="form-group ">

                                    <input id="captcha" name="captcha" required="" type="text" class="form-control" placeholder="Enter Captcha" >

                                </div>
                            </div>
                        </div>


                        <div class="form-group text-center mb-0">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />

                            <button data-loading-text="Please wait..." class="btn btn-colored btn-rounded btn-theme-colored pl-30 pr-30" type="submit">Send your message</button>
                        </div>
                    </form>


                </div>

                <div class="col-md-6">
                    <iframe style="border:0" allowfullscreen width="600" height="425" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d846.8341340404598!2d35.922398529202155!3d31.897452398827912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b58af0c404581%3A0x24ae14eb20c405bb!2sHigh+Force+Engineering+Solutions+Ltd!5e0!3m2!1sen!2s!4v1502276308644"></iframe>
                    <!-- Google Map Javascript Codes -->


                </div>
            </div>
        </div>
    </div>
</section>


@endsection


@section('js')
<!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyCZS5wBc1UzKHoKxZTpjHS_1K-CFbk3vTU"></script> -->
<!-- <script src="{{asset('assets/js/google-map-init-multilocation.js')}}"></script> -->


<script type="text/javascript">
    $(document).on("click", '#refresh', function() {
        console.log('salam');
        var url = '{{URL::to(' / refreshcaptcha ')}}';
        console.log(url);
        $.ajax({
            type: 'GET',
            url: url,
            success: function(data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>



@endsection
