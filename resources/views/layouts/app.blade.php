<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Sxgnal</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico')}}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">

{{--    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>--}}
{{--    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">--}}
    <!-- Latest compiled and minified CSS -->
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">--}}
    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
{{--    <script src="{{ asset('assets/js/config.navbar-vertical.js')}}"></script>--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">--}}
{{--    <link href="{{ asset('assets/lib/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/lib/datatables-bs4/dataTables.bootstrap4.min.css')}}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.css')}}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/lib/leaflet/leaflet.css')}}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/lib/leaflet.markercluster/MarkerCluster.css')}}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/lib/leaflet.markercluster/MarkerCluster.Default.css')}}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/css/theme.css')}}" rel="stylesheet">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">--}}
{{--    <script src="https://kit.fontawesome.com/213888b847.js" crossorigin="anonymous"></script>--}}
{{--    <script type="text/javascript" src="https://themes.getbootstrap.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp"></script>--}}
{{--    <script type="text/javascript" src="https://themes.getbootstrap.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1"></script>--}}
<!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <script type="text/javascript" id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vfl1CGgp3/www-widgetapi.js" async=""></script><script src="../assets/js/config.navbar-vertical.js"></script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="../assets/lib/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/lib/fancybox/jquery.fancybox.min.css" rel="stylesheet">
    <link href="../assets/lib/plyr/plyr.css" rel="stylesheet">
    <link href="../assets/lib/select2/select2.min.css" rel="stylesheet">
    <link href="../assets/css/theme.css" rel="stylesheet">


</head>


<body>
<div id="app">


<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">


    <div class="container" style=" text-align: center; margin-top: 4rem;" data-layout="container">
    {{-- @include('layouts/partials/sidebar') --}}
        @yield('content')
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
            <div class="modal-dialog mt-6" role="document">
                <div class="modal-content border-0">
                    <div class="modal-header px-5 text-white position-relative modal-shape-header">
                        <div class="position-relative z-index-1">
                            <div>
                                <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                                <p class="fs--1 mb-0">Please create your free Falcon account</p>
                            </div>
                        </div>
                        <button class="close text-white position-absolute t-0 r-0 mt-1 mr-1" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body py-4 px-5">
                        <form>
                            <div class="form-group">
                                <label for="modal-auth-name">Name</label>
                                <input class="form-control" type="text" id="modal-auth-name" />
                            </div>
                            <div class="form-group">
                                <label for="modal-auth-email">Email address</label>
                                <input class="form-control" type="email" id="modal-auth-email" />
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label for="modal-auth-password">Password</label>
                                    <input class="form-control" type="password" id="modal-auth-password" />
                                </div>
                                <div class="form-group col-6">
                                    <label for="modal-auth-confirm-password">Confirm Password</label>
                                    <input class="form-control" type="password" id="modal-auth-confirm-password" />
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="modal-auth-register-checkbox" />
                                <label class="custom-control-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Register</button>
                            </div>
                        </form>
                        <div class="w-100 position-relative mt-5">
                            <hr class="text-300" />
                            <div class="position-absolute absolute-centered t-0 px-3 bg-white text-sans-serif fs--1 text-500 text-nowrap">or register with</div>
                        </div>
                        <div class="form-group mb-0">
                            <div class="row no-gutters">
                                <div class="col-sm-6 pr-sm-1"><a class="btn btn-outline-google-plus btn-sm btn-block mt-2" href="#"><span class="fab fa-google-plus-g mr-2" data-fa-transform="grow-8"></span> google</a></div>
                                <div class="col-sm-6 pl-sm-1"><a class="btn btn-outline-facebook btn-sm btn-block mt-2" href="#"><span class="fab fa-facebook-square mr-2" data-fa-transform="grow-8"></span> facebook</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->



<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->


{{--<script src="{{ asset('assets/js/popper.min.js') }}"></script>--}}

{{--<script src="{{ asset('assets/lib/@fortawesome/all.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/lib/stickyfilljs/stickyfill.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/lib/sticky-kit/sticky-kit.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/lib/is_js/is.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/lib/lodash/lodash.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/lib/perfect-scrollbar/perfect-scrollbar.js') }}"></script>--}}

{{--<script src="{{ asset('assets/lib/chart.js/Chart.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/lib/datatables/js/jquery.dataTables.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/lib/datatables-bs4/dataTables.bootstrap4.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/lib/datatables.net-responsive/dataTables.responsive.js') }}"></script>--}}
{{--<script src="{{ asset('assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.js') }}"></script>--}}

{{--<script src="{{ asset('assets/lib/leaflet/leaflet.js') }}"></script>--}}
{{--<script src="{{ asset('assets/lib/leaflet.markercluster/leaflet.markercluster.js') }}"></script>--}}
{{--<script src="{{ asset('assets/lib/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js') }}"></script>--}}

{{--<script src="{{ asset('assets/js/test.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/jquery.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/theme.js')}}"></script>--}}
<script src="{{ asset('js/app.js') }}"></script>
<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->

<script src="../assets/js/jquery.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>--}}
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/lib/@fortawesome/all.min.js"></script>
<script src="../assets/lib/stickyfilljs/stickyfill.min.js"></script>
<script src="../assets/lib/sticky-kit/sticky-kit.min.js"></script>
<script src="../assets/lib/is_js/is.min.js"></script>
<script src="../assets/lib/lodash/lodash.min.js"></script>
<script src="../assets/lib/perfect-scrollbar/perfect-scrollbar.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
<script src="../assets/lib/fancybox/jquery.fancybox.min.js"></script>
<script src="../assets/lib/plyr/plyr.polyfilled.min.js"></script>
<script src="../assets/lib/select2/select2.min.js"></script>
<script src="../assets/js/theme.js"></script>
@yield('page-script')

</body>

</html>
