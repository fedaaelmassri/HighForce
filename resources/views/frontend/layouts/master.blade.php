<!DOCTYPE html>

<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Industrypress - Factory & Industrial Business Template" />
    <meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
    <meta name="author" content="ThemeMascot" />

    <!-- Page Title -->
    <title>High Force</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{asset('assets/images/favicon.png')}}" rel="shortcut icon" type="image/png">
    <link href="{{asset('assets/images/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset('assets/images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{asset('assets/images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{asset('assets/images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/css-plugin-collections.css')}}" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{asset('assets/css/menuzord-skins/menuzord-rounded-boxed.css')}}" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="{{asset('assets/css/style-main.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{asset('assets/css/preloader.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{asset('assets/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- CSS | Theme Color -->
    <link href="{{asset('assets/css/colors/theme-skin-green.css')}}" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{asset('assets/js/jquery-plugin-collection.js')}}"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>


    @yield('style')

    <style>
        .list-inline {
            display: none;


        }

        #customies {
            width: 23% !important;
            display: block;
            margin-block-end: 2px;

            /* clear: both;

    border: 0 none ;
    font-size: 12px ;
    position: relative; */
        }
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="">
    <div id="wrapper" class="clearfix">
        <!-- preloader -->
        <div id="preloader">
            <div id="spinner">
                <img class="ml-5" src="{{asset('assets/images/preloaders/3.gif')}}" alt="">
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
        </div>

        <!-- Header -->
        <header id="header" class="header">
            <div class="header-top bg-black-333 sm-text-center border-top-theme-color-3px p-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="widget no-border m-0">
                                <ul class="list-inline xs-text-center text-white mt-5">
                                    <li class="m-0 pl-10 pr-10"> <a href="#" class="text-white"><i class="fa fa-phone text-theme-colored"></i> 123-456-789</a> </li>
                                    <li class="m-0 pl-10 pr-10">
                                        <a href="#" class="text-white"><i class="fa fa-envelope-o text-theme-colored"></i> contact@yourdomain.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 pr-0">
                            <div class="widget no-border m-0">
                                <ul class="styled-icons icon-dark icon-flat icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                                    <li><a href="{{$data['facebook_value']}}"><i class="fa fa-facebook text-white"></i></a></li>
                                    <li><a href="{{$data['twitter_value']}}"><i class="fa fa-twitter text-white"></i></a></li>
                                    <!-- <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li> -->
                                    <li><a href="{{$data['linkedin_value']}}"><i class="fa fa-linkedin text-white"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-colored btn-flat btn-theme-colored  pb-10" href="{{route('ecatalog')}}">E-Catalog</a>

                            <a class="btn btn-colored btn-flat btn-theme-colored bs-modal-ajax-load pb-10" data-toggle="modal" data-target="#BSParentModal">Get A Quote Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav">
                <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                    <div class="container">
                        <nav id="menuzord-right" class="menuzord default">
                            <a class="menuzord-brand pull-left flip xs-pull-center mt-20" href="{{route('home')}}">
                                <img src="{{asset('assets/images/HF _logo _435x68-01.png')}}" alt="">
                            </a>
                            <ul class="menuzord-menu">
                                <li class="active"><a href="{{route('home')}}">Home</a>

                                </li>
                                <li><a href="#">Services</a>
                                    <ul class="dropdown">
                                        <?php

                                        $services = App\Services::get();
                                        ?>

                                        @foreach($services as $servic)
                                        <li><a href="{{route('details', [ 'id' => $servic->id ])}}">{{$servic->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="#">Products </a>
                                </li>
                                </li>
                                <!-- <li><a href="{{route('brands')}}">Brands</a>

                                </li> -->


                                <li><a href="{{route('brands')}}">Brands</a>
                                    <ul class="dropdown list-inline " id="customies">
                                        <?php

                                        $brands = App\Brands::get();
                                        ?>

                                        @foreach($brands as $brand)
                                        <li><a href="">{{$brand->name}} -
                                                <img alt="" width="20" height="10" src="{{asset('storage/'.$brand->image) }}">
                                            </a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{route('news')}}">News</a>

                                </li>
                                <li><a href="{{route('blog')}}">Blog</a>

                                </li>
                                <li><a href="{{route('about')}}">About us</a>

                                </li>
                                <li><a href="{{route('contactUs')}}">Contact us</a>

                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <!-- Start main-content -->
        <div class="main-content">
            @yield('content')
        </div>
        <!-- end main-content -->

        <!-- Footer -->
        <footer id="footer" class="footer" data-bg-img="{{asset('assets/images/footer-bg.png')}}" data-bg-color="#001018">
            <div class="container pt-70 pb-40">
                <div class="row border-bottom-black">
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark">
                            <img class="mt-10 mb-20" alt="" src="{{asset('assets\media\logos\logo-footer.png')}}">
                            <p>203, Envato Labs, Behind Alis Steet, Melbourne, Australia.</p>
                            <ul class="list-inline mt-5">
                                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="https://wa.me/+96264203026">+962 6 420 3026</a> </li>
                                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="mailto:info@hiforcejo.com"> info@hiforcejo.com</a> </li>
                                <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#">www.yourdomain.com</a> </li>
                            </ul>
                            <ul class="social-icons icon-bordered icon-circled icon-sm mt-15">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark">
                            <h5 class="widget-title line-bottom">Latest News</h5>
                            <div class="latest-posts">
                                @foreach (App\News::orderBy('created_at', 'desc')->take(3)->get() as $new)

                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a href="{{route('new-details' , [ 'id' => $new->id ])}}" class="post-thumb"><img alt="" width="80" height="55" src="{{asset('storage/'.$new->image) }}"></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-5"><a href="{{route('new-details' , [ 'id' => $new->id ])}}">{{$new->name}}</a></h5>
                                        <p class="post-date mb-0 font-12">{{$new->created_at}}</p>
                                    </div>
                                </article>
                                @endforeach
                                <!-- <article class="post media-post clearfix pb-0 mb-10">
                                    <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
                                        <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                    </div>
                                </article>
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-5"><a href="#">Storefront Installations</a></h5>
                                        <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                    </div>
                                </article> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark">
                            <h5 class="widget-title line-bottom">Useful Links</h5>
                            <ul class="list angle-double-right list-border">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('news')}}">Latest News</a></li>
                                <li><a href="{{route('blog')}}">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark">
                            <h5 class="widget-title line-bottom">Quick Contact</h5>
                            <form id="footer_quick_contact_form" name="footer_quick_contact_form" class="quick-contact-form" action="{{route('sendEmail.QuickContactus')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input id="email" name="email" class="form-control email" type="email" required="" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <textarea id="message" name="message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                                    <button type="submit" class="btn btn-default btn-transparent btn-xs btn-flat " >Send Message</button>
                                </div>
                            </form>

                            <!-- Quick Contact Form Validation-->

                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom" data-bg-color="#001111">
                <div class="container pt-15 pb-10">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="font-12 text-gray m-0 text-center">Copyright &copy;2019 <span class="text-theme-colored">ThemeMascot</span>. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{ asset('assets/app/bundle/app.bundle.js')}}" type="text/javascript"></script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if(session('message'))

        var type = "{{session('alert-type')}}"
        switch (type) {
            case 'success':
                toastr.success("{{ session('message') }}");
                break;
            case 'error':
                toastr.error("{{ session('message') }}");
                break;
        }

        @endif
    </script>


<script>
     $(document).ready(function() {
   $(document).on("click", '.sendQuote', function() {
        // alert("hhh");

        var url='{{URL::to('/send_email/GetAQuoteNow')}}';

    //  alert($("#name").val() );
    //  alert($("#messageQouta").val() );
    //  alert($("#phone").val() );
    //  alert($('#emailQouta').val() );
    //     // console.log(url);


    // alert(url);
        $.ajax({
            url:url ,
            type: 'POST',
            data: {
                'name':$("#name").val(),
                'phone':$("#phone").val(),
                'emailQouta':$("#emailQouta").val(),
                'messageQouta':$('#messageQouta').val(),
                '_token':$('input[name="_token"]').val(),

                },
            success: function(data) {
                // alert(data);
                $('#BSParentModal').modal('toggle');
                toastr.success(""+data.message);
                $('#BSParentModal').modal('hide');

            },
            error: function (data) {
                // alert(data.responseJSON.errors.messageQouta);
                if(data.responseJSON.errors.name)
                    $('.nameError').text(data.responseJSON.errors.name);
                if(data.responseJSON.errors.messageQouta)
                    $('.messageError').text(data.responseJSON.errors.messageQouta);
                    if(data.responseJSON.errors.emailQouta)
                    $('.emailError').text(data.responseJSON.errors.emailQouta);
            }
        });

    });

});
</script>


    @yield('js')

</body>




</html>

<div class="modal fade" id="BSParentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Get A Quote Now</h4>
            </div>
            <div class="modal-body">
                <form id="reservation_form_popup" name="reservation_form" class="reservation-form" >
                    <h3 class="mt-0 line-bottom mb-40">Get A Free Service<span class="text-theme-colored font-weight-600"> Now!</span></h3>
@csrf
                    <!-- <input type="hidden" name="_token" value="{{ csrf_token()}}"> -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-30">
                                <input placeholder="Enter Name" type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror">

                                    <p class="text-danger nameError"></p>


                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-30">
                                <input placeholder="Email" type="email" id="emailQouta" name="emailQouta" class="form-control  @error('emailQouta') is-invalid @enderror" >

                                    <p class="text-danger emailError"></p>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-30">
                                <input placeholder="Phone" type="text" id="phone" name="phone" class="form-control" >
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea id="messageQouta" name="messageQouta" class="form-control  @error('messageQouta') is-invalid @enderror" rows="5" placeholder="Enter Message"></textarea>

                                    <p class="text-danger messageError"></p>


                            </div>
                        </div>

                    </div>

                    <button type="button" class="btn btn-colored btn-theme-colored btn-lg btn-flat sendQuote">Submit Now</button>



                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
