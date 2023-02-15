<section class="main-slider clearfix">
    <div class="swiper-container thm-swiper__slider"
        data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "pagination": {
    "el": "#main-slider-pagination",
    "type": "bullets",
    "clickable": true
    },
    "navigation": {
    "nextEl": "#main-slider__swiper-button-next",
    "prevEl": "#main-slider__swiper-button-prev"
    },
    "autoplay": {
    "delay": 5000
    }}'>
        <div class="swiper-wrapper">

            <div class="swiper-slide">

                <div class="image-layer"
                @isset($settings->where('id', 1)->first()->value)
                style="background-image: url({{ asset('storage/' . $settings->where('id', 1)->first()->value) }});">
                @endisset
                    
                </div>
                <!-- /.image-layer -->

                <div class="main-slider__shape-1">
                    <img src="{{ asset('images/shapes/main-slider-shape-1.png') }}" alt="">
                </div>
                <div class="main-slider__shape-2">
                    <img src="{{ asset('images/shapes/main-slider-shape-2.png') }}" alt="">
                </div>

                <div class="container">
                    <div class="main-slider__inner">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                <div class="main-slider__content-left">
                                    <div class="main-slider__content-img">
                                        @isset($settings->where('id', 2)->first()->value)
                                        <img src="{{ asset('storage/' . $settings->where('id', 2)->first()->value) }}"
                                        alt="" 
                                        @endisset
                                    >
                                    </div>
                                    <div class="main-slider__shape-group">
                                        <div class="main-slider__shape-7"></div>
                                        <div class="main-slider__shape-8"></div>
                                        <div class="main-slider__shape-9"></div>
                                        <div class="main-slider__shape-3">
                                            <img src="{{ asset('images/shapes/main-slider-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <div class="main-slider__shape-4">
                                            <img src="{{ asset('images/shapes/main-slider-shape-4.png') }}"
                                                alt="">
                                        </div>
                                        <div class="main-slider__shape-5">
                                            <img src="{{ asset('images/shapes/main-slider-shape-5.png') }}"
                                                alt="">
                                        </div>
                                        <div class="main-slider__shape-6">
                                            <img src="{{ asset('images/shapes/main-slider-shape-6.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="main-slider__content-right">
                                    <div class="main-slider__sub-title-box">
                                        {{-- <div class="main-slider__sub-title-icon">
                                            <img src="{{ asset('images/icons/icon-1.png') }}" alt="">
                                        </div>
                                        <p class="main-slider__sub-title">Solar and Power</p> --}}
                                    </div>
                                    <h3 class="main-slider__title">
                                        @isset($settings->where('id', 3)->first()->value)
                                        {{ $settings->where('id', 3)->first()->value }}
                                        @endisset
                                        
                                    </h3>
                                    {{-- <div class="main-slider__btn-box">
                                        <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Get
                                                Solution</span></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">

                <div class="image-layer"
                @isset($settings->where('id', 4)->first()->value)
                style="background-image: url({{ asset('storage/' . $settings->where('id', 4)->first()->value) }});"
                @endisset
                >
                </div>
                <!-- /.image-layer -->

                <div class="main-slider__shape-1">
                    <img src="{{ asset('images/shapes/main-slider-shape-1.png') }}" alt="">
                </div>
                <div class="main-slider__shape-2">
                    <img src="{{ asset('images/shapes/main-slider-shape-2.png') }}" alt="">
                </div>

                <div class="container">
                    <div class="main-slider__inner">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                <div class="main-slider__content-left">
                                    <div class="main-slider__content-img">
                                        @isset($settings->where('id', 5)->first()->value)
                                        <img src="{{ asset('storage/' . $settings->where('id', 5)->first()->value) }}"
                                        alt="">
                                        @endisset
                                        
                                    </div>
                                    <div class="main-slider__shape-group">
                                        <div class="main-slider__shape-7"></div>
                                        <div class="main-slider__shape-8"></div>
                                        <div class="main-slider__shape-9"></div>
                                        <div class="main-slider__shape-3">
                                            <img src="{{ asset('images/shapes/main-slider-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <div class="main-slider__shape-4">
                                            <img src="{{ asset('images/shapes/main-slider-shape-4.png') }}"
                                                alt="">
                                        </div>
                                        <div class="main-slider__shape-5">
                                            <img src="{{ asset('images/shapes/main-slider-shape-5.png') }}"
                                                alt="">
                                        </div>
                                        <div class="main-slider__shape-6">
                                            <img src="{{ asset('images/shapes/main-slider-shape-6.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="main-slider__content-right">
                                    <div class="main-slider__sub-title-box">
                                        {{-- <div class="main-slider__sub-title-icon">
                                            <img src="{{ asset('images/icons/icon-1.png') }}" alt="">
                                        </div>
                                        <p class="main-slider__sub-title">Solar and Power</p> --}}
                                    </div>
                                    <h3 class="main-slider__title">
                                        @isset($settings->where('id', 6)->first()->value)
                                        {{ $settings->where('id', 6)->first()->value }}
                                        @endisset
                                    </h3>
                                    {{-- <div class="main-slider__btn-box">
                                        <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Get
                                                Solution</span></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">

                <div class="image-layer"
                @isset($settings->where('id', 7)->first()->value)
                style="background-image: url({{ asset('storage/' . $settings->where('id', 7)->first()->value) }});"
                @endisset
                >
                </div>
                <!-- /.image-layer -->

                <div class="main-slider__shape-1">
                    <img src="{{ asset('images/shapes/main-slider-shape-1.png') }}" alt="">
                </div>
                <div class="main-slider__shape-2">
                    <img src="{{ asset('images/shapes/main-slider-shape-2.png') }}" alt="">
                </div>

                <div class="container">
                    <div class="main-slider__inner">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                <div class="main-slider__content-left">
                                    <div class="main-slider__content-img">
                                        @isset($settings->where('id', 8)->first()->value)
                                        <img src="{{ asset('storage/' . $settings->where('id', 8)->first()->value) }}"
                                        alt="">
                                        @endisset
                                    </div>
                                    <div class="main-slider__shape-group">
                                        <div class="main-slider__shape-7"></div>
                                        <div class="main-slider__shape-8"></div>
                                        <div class="main-slider__shape-9"></div>
                                        <div class="main-slider__shape-3">
                                            <img src="{{ asset('images/shapes/main-slider-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <div class="main-slider__shape-4">
                                            <img src="{{ asset('images/shapes/main-slider-shape-4.png') }}"
                                                alt="">
                                        </div>
                                        <div class="main-slider__shape-5">
                                            <img src="{{ asset('images/shapes/main-slider-shape-5.png') }}"
                                                alt="">
                                        </div>
                                        <div class="main-slider__shape-6">
                                            <img src="{{ asset('images/shapes/main-slider-shape-6.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="main-slider__content-right">
                                    <div class="main-slider__sub-title-box">
                                        {{-- <div class="main-slider__sub-title-icon">
                                            <img src="{{ asset('images/icons/icon-1.png') }}" alt="">
                                        </div>
                                        <p class="main-slider__sub-title">Solar and Power</p> --}}
                                    </div>
                                    <h3 class="main-slider__title">
                                        @isset($settings->where('id', 9)->first()->value)
                                        {{ $settings->where('id', 9)->first()->value }}
                                        @endisset
                                    </h3>
                                    {{-- <div class="main-slider__btn-box">
                                        <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Get
                                                Solution</span></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-left-arrow-2"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-right-arrow-2"></i>
            </div>
        </div>

    </div>

    {{-- <style>
        .main-slider__title {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style> --}}
</section>
