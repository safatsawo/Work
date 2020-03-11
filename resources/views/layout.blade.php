<!DOCTYPE html>
<html lang="en">

<head>
    <title>ThirdEyeCare</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-lg-2 pr-4 align-items-center">
                    <a class="navbar-brand" href="/">THIRDEYE<span>CARE</span></a>
                </div>
                <div class="col-lg-10 d-none d-md-block">
                    <div class="row d-flex">
                        <div class="col-md-4 pr-4 d-flex topper align-items-center">
                            <div class="icon bg-white mr-2 mb-4 d-flex justify-content-center align-items-center"><a href="{{$user = DB::table('top_navigations')->where('id', '1')->value('url')}}"><span
                                    class="icon-map"></span></a></div>
                            <span class="text">Address:{{$user = DB::table('top_navigations')->where('id', '1')->value('name')}}</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon bg-white mr-2 mb-4 d-flex justify-content-center align-items-center"><a href="{{$user = DB::table('top_navigations')->where('id', '1')->value('url')}}"><span
                                    class="icon-paper-plane"></span></a></div>
                            <span class="text mb-4">Email: {{$user = DB::table('top_navigations')->where('id','2')->value('name')}}</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon bg-white mr-2 mb-4 d-flex justify-content-center align-items-center"><a href="{{$user = DB::table('top_navigations')->where('id', '1')->value('url')}}"><span
                                    class="icon-phone2"></span></a></div>
                            <span class="text mb-4">{{$user = DB::table('top_navigations')->where('id','3')->value('name')}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <p class="button-custom order-lg-last mb-0"><a href="/appointment" class="btn btn-secondary py-2 px-3">Make
                    An Appointment</a></p>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                @foreach($navigations as $navigation)
                    <li class="nav-item"><a href="{{ $navigation->url }}" class="nav-link pl-0">{{ $navigation->name }}</a></li>
                    @endforeach
                </ul>
            </div>
           
        </div>
    </nav>
    <!-- END nav -->
  
    <div class="alert alert-success alert-dismissible fade show" role="alert">.
    @if( Session::has( 'success' ))
     {{ Session::get( 'success' ) }}
@endif
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

    @yield('content')
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2 logo">ThirdEye<span>Care</span></h2>

                    </div>
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><a href="#"><span class="icon icon-map-marker"></span><span class="text">{{$user = DB::table('top_navigations')->where('id', '1')->value('name')}}</span></a></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{$user = DB::table('top_navigations')->where('id','3')->value('name')}}</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text"> {{$user = DB::table('top_navigations')->where('id','2')->value('name')}}</span></a></li>
                            </ul>
                        </div>

                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-5 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                        @foreach($navigations as $navigation)
                    <li class="nav-item"><a href="{{ $navigation->url }}" class="nav-link pl-0">{{ $navigation->name }}</a></li>
                    @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-md">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Opening Hours</h2>
                        <h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>We are open 24/7</h3>
                    </div>


                    <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address"
                        departments>
                    <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>

                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());

                        </script> All rights reserved | This template is made with <i class="icon-heart"
                            aria-hidden="true"></i>
                        by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

<!-- </html> -->
