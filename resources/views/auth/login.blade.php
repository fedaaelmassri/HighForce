<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->

<head>
    <meta charset="utf-8" />
    <title>High Force | Login Admin</title>
    <meta name="description" content="Login page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{asset('assets/app/custom/login/login-v4.default.css')}}" rel="stylesheet" type="text/css" />

    <!--end::Page Custom Styles -->


    @include('backend.templates.head')


</head>

<!-- end::Head -->

<!-- begin::Body -->

<body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(../assets/media/bg/bg-2.jpg);">
                <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                    <div class="kt-login__container">
                        <div class="kt-login__logo">
                            <a href="#">
                                <img src="{{asset('assets/media/logos/logo-login.png')}}">
                            </a>
                        </div>
                        <div class="kt-login__signin">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">Sign In  Admin</h3>
                            </div>
                            <form method="POST" class="kt-form" action="{{ route('login') }}">
                                @csrf
                                <div class="input-group">
                                    <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" placeholder="Email" name="email"
                                     value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <input class="form-control" id="password" type="password" placeholder="Password" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="row kt-login__extra">
                                    <div class="col">
                                        <label class="kt-checkbox">
                                            <input type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} > Remember me
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col kt-align-right">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" id="kt_login_forgot" class="kt-login__link">Forget Password ?</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="kt-login__actions">
                                    <button type="submit"  class="btn btn-brand btn-pill kt-login__btn-primary">Sign In</button>
                                </div>
                            </form>
                        </div>

                        <div class="kt-login__forgot">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">Forgotten Password ?</h3>
                                <div class="kt-login__desc">Enter your email to reset your password:</div>
                            </div>
                            <form class="kt-form">
                                <div class="input-group">
                                    <input class="form-control" type="email" placeholder="Email" name="email" id="email" autocomplete="off">
                                </div>
                                <div class="kt-login__actions">
                                    <button id="kt_login_forgot_submit" class="btn btn-brand btn-pill kt-login__btn-primary">Request</button>&nbsp;&nbsp;
                                    <button id="kt_login_forgot_cancel" class="btn btn-secondary btn-pill kt-login__btn-secondary">Cancel</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Page -->





    @include('backend.templates.foot')

    <!--begin::Page Scripts(used by this page) -->
    <script src="{{asset('assets/app/custom/login/login-general.js')}}" type="text/javascript"></script>
    <script>
$("#owl-demo").owlCarousel({
    navigation : true
  });

    </script>


    <!--end::Page Scripts -->


</body>

<!-- end::Body -->

</html>
