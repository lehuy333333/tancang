<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Trang chủ - Tan Cang Technical Services JSC</title>

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
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('images/favicons/favicontcts.gif') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('images/favicons/favicontcts.gif') }}" />
    <link rel="manifest" href="{{ url('images/favicons/site.webmanifest') }}" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <link href="{{ url('css/solapa.css') }}" rel="stylesheet">
    <link href="{{ url('css/solapa-responsive.css') }}" rel="stylesheet">

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
        @include('user/template.header')
        <!-- End Main Header -->

        <!--Main Slider Start-->
        @include('user/template.slider-1')
        <!--Main Slider End-->

        <!-- Introduce One -->
        @include('user/template.introduce')
        <!-- End Introduce One -->

        <!-- Service One -->
        @include('user/template.services-1')
        <!-- End Service One -->

        <!-- Faq One -->
        {{-- @include('user/template.faq') --}}
        <!-- End Faq One -->

        <!-- Service Two -->
        {{-- @include('user/template.services-2') --}}
        <!-- End Service Two -->

        <!-- CTA One Section -->
        <section class="cta-one">
            <div class="container">
                <div class="cta-one__inner">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <h3 class="cta-one__title">CƠ SỞ VẬT CHẤT, NGUỒN LỰC - DANH MỤC CÁC THIẾT BỊ SỞ HỮU
                            </h3>
                            <div class="cta-one__btn-box">
                                <a class="btn-style-three theme-btn" href="about.html"><span class="txt">Năng Lực Phương Tiện</span></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12">

                                    <!-- Cta One -->
                                    <div class="cta-one__counter">

                                        <!-- Cta One Single -->
                                        <div class="cta-one__single">
                                            <div class="cta-one__count count-box">
                                                <span class="count-text" data-speed="4000" data-stop="5">0</span>
                                            </div>
                                            <div class="cta-one__text">Nhà xưởng phục vụ sản xuất </div>
                                        </div>

                                        <!-- Cta One Single -->
                                        <div class="cta-one__single">
                                            <div class="cta-one__count count-box">
                                                <span class="count-text" data-speed="4000" data-stop="80">0</span>
                                            </div>
                                            <div class="cta-one__text">Thiết bị vận chuyển</div>
                                        </div>

                                    </div>

                                </div>
                                {{-- <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="cta-image__one">
                                        <img src="{{ url('images/resource/energy-4.jpg') }}" />
                                    </div>
                                </div> --}}
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End CTA One Section -->

        <!-- Project  -->
        @include('user/template.projects')
        <!-- End Project -->

        <!-- Partner One -->
        @include('user/template.partners')
        <!-- End Partner One -->

        <!-- News One -->
        @include('user/template.blogs')
        <!-- End News One -->

        <!-- Site Footer Start -->
        @include('user/template.footer1')

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
