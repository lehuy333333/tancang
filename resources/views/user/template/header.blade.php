<header class="main-header">

    <!-- Header Top -->
    {{-- <div class="main-header__top">
        <div class="container clearfix">

            <div class="pull-left">
                <ul class="main-header__info">
                    <li><a href="{{url('/contact')}}"><span class="icon icon-location"></span>27 Division St, New York,
                            NY</a></li>
                    <li><a href="mailto:helpus24@gmail.com"><span class="icon icon-email"></span>helpus24@gmail.com</a>
                    </li>
                </ul>
            </div>

            <div class="pull-right clearfix">
                <div class="main-header__top-text">Wind Energy for Enriching the World</div>
                <div class="main-header__top-estimate"><a href="{{url('/contact')}}">GET ESTIMATE</a></div>

                <!-- Language DropDown -->
                <div class="main-header__language-dropdown dropdown">
                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="header-top__flag-icon"><img src="{{ asset('images/icons/flag-vn.png') }}"
                                alt="" /></span> Vietnam
                    </button>
                    <ul class="main-header__language-list dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a href="#">Vietnam</a></li>
                        <li><a href="#">English</a></li>
                    </ul>
                </div>

                <!-- Cart Box -->
                <div class="main-header__cart-box">
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton2"
                            data-bs-toggle="dropdown" aria-expanded="false"><span
                                class="icon-shopping-cart"></span><span
                                class="main-header__total-cart">2</span></button>
                        <div class="dropdown-menu main-header__cart-panel" aria-labelledby="dropdownMenuButton2">
                            <div class="main-header__cart-product">
                                <div class="inner">
                                    <div class="main-header__cross-icon"><span class="icon fa fa-remove"></span>
                                    </div>
                                    <div class="main-header__cart-image"><img
                                            src="{{ asset('images/resource/post-thumb-1.jpg') }}" alt="" />
                                    </div>
                                    <h3 class="main-header__cart-title"><a href="shoping-cart.html">Product
                                            01</a></h3>
                                    <div class="main-header__quantity-text">Quantity 1</div>
                                    <div class="main-header__cart-price">$99.00</div>
                                </div>
                            </div>
                            <div class="main-header__cart-product">
                                <div class="inner">
                                    <div class="main-header__cross-icon"><span class="icon fa fa-remove"></span>
                                    </div>
                                    <div class="main-header__cart-image"><img
                                            src="{{ asset('images/resource/post-thumb-2.jpg') }}" alt="" />
                                    </div>
                                    <h3 class="main-header__cart-title"><a href="shoping-cart.html">Product
                                            02</a></h3>
                                    <div class="main-header__quantity-text">Quantity 1</div>
                                    <div class="main-header__cart-price">$99.00</div>
                                </div>
                            </div>
                            <div class="main-header__cart-total">Sub Total: <span>$198</span></div>
                            <ul class="main-header__cart-btns">
                                <li><a href="shoping-cart.html">View Cart</a></li>
                                <li><a href="checkout.html">CheckOut</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Cart Box -->

            </div>

        </div>
    </div> --}}

    <!-- Header Lower -->
    <div class="main-header__lower">
        <div class="container">
            <div class="main-header__lower__inner clearfix">

                <!-- Logo Box -->
                <div class="main-header__logo-box">
                    <div class="main-header__logo"><a href="{{ url('/') }}"><img
                                src="{{ asset('images/resource/logotcts.png') }}" alt="" title=""></a>
                    </div>
                </div>

                <!-- Nav Outer -->
                <div class="nav-outer clearfix">
                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon fas fa-bars"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu__menu-box navbar-expand-md">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="main-menu__navigation">
                                <li><a href="{{ url('/') }}">Trang chủ</a></li>
                                <li class="dropdown"><a href="{{ url('/introduce') }}">Giới thiệu</a>
                                    <ul>
                                        <li><a href="{{ url('/introduce') }}">Về chúng tôi</a></li>
                                        <li><a href="{{ url('/organization') }}">Mô hình tổ chức</a></li>
                                        <li><a href="{{ url('/vision') }}">Tầm nhìn và sứ mệnh</a></li>
                                    </ul>
                                </li>
                               
                                <li><a href="{{ url('/services') }}">Dịch vụ</a></li>
                                <li><a href="{{ url('/projects') }}">Dự án</a></li>
                                <li><a href="{{ url('/blogs') }}">Tin tức</a></li>
                                <li><a href="{{ url('/shareholder_blogs') }}">Cổ đông</a></li>
                                <li><a href="{{ url('/contact') }}">Liên hệ</a></li>
                            </ul>
                        </div>

                    </nav>
                </div>

                <!-- Main Menu End-->
                <div class="outer-box clearfix">
                    <!-- Language DropDown -->
                    <div class="main-header__language-dropdown dropdown">
                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="header-top__flag-icon"><img src="{{ asset('images/icons/flag-vn.png') }}"
                                    alt="" /></span>
                        </button>
                        <ul class="main-header__language-list dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a href="#"><img src="{{ asset('images/icons/flag-vn.png') }}"
                                        alt="" /> - Tiếng Việt</a></li>
                            <li><a href="#"><img src="{{ asset('images/icons/flag-en.png') }}"
                                        alt="" /> - English</a></li>
                        </ul>
                    </div>
                    <!-- Phone Box -->
                    <div class="main-header__phone-box">
                        <div class="main-header__phone-inner">
                            <span class="main-header__phone-icon icon-phone"></span>
                            <br>
                            <a class="main-header__phone-number" href="tel:+84-5700-24-51"> (028). 3742 0177
                            </a>
                        </div>
                    </div>
                    <!-- End Phone Box -->

                    {{-- <div class="main-header__button-box">
                        <a href="{{url('/contact')}}" class="theme-btn btn-style-one"><span class="txt">Liên hệ</span></a>
                    </div> --}}

                </div>



            </div>
        </div>
    </div>
    <!-- End Header Lower -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="container clearfix">
            <!-- Logo -->
            <div class="sticky-header__logo pull-left">
                <a href="{{ url('/') }}" title=""><img src="{{ asset('images/resource/logotcts.png') }}"
                        alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">

                <!-- Main Menu -->
                <nav class="main-menu__navigation">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
                <!-- Main Menu End-->

                <!-- Mobile Navigation Toggler -->
                <div class="mobile-nav-toggler"><span class="icon fas fa-bars"></span></div>

            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon fas fa-times"></span></div>

        <nav class="mobile-menu__box">
            <div class="mobile-menu__logo"><a href="{{ url('/') }}"><img
                        src="{{ asset('images/resource/logotcts.png') }}" alt="" title=""></a></div>
            <div class="mobile-menu__outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>

            <!-- Contact List -->
            <ul class="mobile-menu__contact-list">
                <li><span class="icon fa fa-envelope"></span><a
                        href="mailto:solapaemail@gmail.com">khkd_dvkt@saigonnewport.com.vn</a></li>
                <li><span class="icon fa fa-phone"></span><a href="tel:+88-01682648101">+(028). 3742 0177</a>
                </li>
            </ul>

            <!-- Social Box -->
            {{-- <ul class="mobile-menu__social">
                <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                <li><a href="https://www.pinterest.com/" class="fa fa-pinterest-p"></a></li>
            </ul> --}}

        </nav>

    </div>
    <!-- End Mobile Menu -->

</header>
