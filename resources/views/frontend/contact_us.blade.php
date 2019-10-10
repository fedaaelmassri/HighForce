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
                    <div class="col-md-12">

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
                            </div>
                            <div class="form-group">
                                <textarea id="message" name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                            </div>

                                <div class="g-recaptcha"
                                  data-sitekey="6LfjR7wUAAAAAPR3omgOZmPcLs8I_rZmaU1EdDVp">
                                </div>
{{env('GOOGLE_RECAPTCHA_KEY')}}
                            <div id="contact-form-result" class="alert alert-success" role="alert" style="display: none;">
                            </div>
                            <div class="form-group text-center mb-0">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                                <button data-loading-text="Please wait..." class="btn btn-colored btn-rounded btn-theme-colored pl-30 pr-30" type="submit">Send your message</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


