<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Tan Cang technical Services JSC</title>

    <!-- Stylesheets -->
    <link href="{{ url('vendors/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('vendors/fontawesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ url('vendors/flaticons/flaticon.css') }}" rel="stylesheet">
    <link href="{{ url('vendors/animate/css/animate.css') }}" rel="stylesheet">
    <link href="{{ url('vendors/owl-slider/css/owl.css') }}" rel="stylesheet">
    <link href="{{ url('vendors/icomoon-fonts/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('vendors/jquery-ui/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ url('vendors/animate/css/custom-animate.css') }}" rel="stylesheet">
    <link href="{{ url('vendors/fancybox/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ url('vendors/swiper/swiper.min.css') }}" rel="stylesheet">

    <!-- Catamaran Font -->
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Smooch Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ url('images/favicons/site.webmanifest') }}" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <link href="{{ url('css/solapa.css') }}" rel="stylesheet">
    <link href="{{ url('css/solapa-responsive.css') }}" rel="stylesheet">
    <link href="{{ url('css/timeline.css') }}" rel="stylesheet">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{ url('js/respond.js') }}"></script><![endif]-->

</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <span></span>
        </div>
        <!-- End Preloader -->

        <!-- Header Style One -->
        @include('user.template.header')
        <!-- End Main Header -->

        <!-- Page Title -->
		<section class="page-title" style="background-image: url({{ url('images/background/2.jpg') }})">
			<div class="container">
				<h1 class="page-main__title">@yield('title')</h1>
				<ul class="page__breadcrumb">
					<li><a href="{{url('/')}}">home</a></li>
					<li>@yield('title')</li>
				</ul>
			</div>
            
		</section>
		<!-- End Main Slider Section -->

        
        @yield('content')
                
           
        
        
        <!-- Site Footer Start -->
        @include('user.template.footer')

    </div>


    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

    <script src="{{ url('vendors/jquery/jquery-v3.6.0.js') }}"></script>
    <script src="{{ url('vendors/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ url('vendors/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ url('vendors/fancybox/js/jquery.fancybox.js') }}"></script>
    <script src="{{ url('vendors/jquery-appear/appear.js') }}"></script>
    <script src="{{ url('vendors/animate/js/parallax.min.js') }}"></script>
    <script src="{{ url('vendors/animate/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ url('vendors/animate/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ url('vendors/owl-slider/js/owl.js') }}"></script>
    <script src="{{ url('vendors/wow/js/wow.js') }}"></script>
    <script src="{{ url('vendors/validate/js/validate.js') }}"></script>
    <script src="{{ url('vendors/nav-tools/js/nav-tool.js') }}"></script>
    <script src="{{ url('vendors/jquery-ui/js/jquery-ui.js') }}"></script>
    <script src="{{ url('vendors/swiper/swiper.min.js') }}"></script>

    <!-- Template Js -->
    <script src="{{ url('js/solapa-script.js') }}"></script>
</body>

</html>
