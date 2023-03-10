@extends('main')

@section('title')
    Contact
@endsection

@section('content')
	<!-- Contact One -->
    {{-- <section class="page-title" style="background-image: url(assets/images/background/2.jpg)">
        <div class="container">
            <h1 class="page-main__title">About us</h1>
            <ul class="page__breadcrumb">
                <li><a href="index.html">home</a></li>
                <li>About us</li>
            </ul>
        </div>
    </section> --}}
    <!-- End Main Slider Section -->

    <!-- Counter One -->
    <!-- End Contact One -->
    <section class="solar-one">
        <div class="solar-one__color"></div>
        <div class="solar-two__color"></div>
        <div class="solar-one__shape-three" style="background-image: url(assets/images/shapes/shape-2.png)"></div>
        <div class="solar-one__shape-four" style="background-image: url(assets/images/shapes/shape-4.png)"></div>
        <div class="container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="solar-one__image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="solar-one__image-inner-column wow slideInLeft" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        {{-- <div class="solar-three__color"></div> --}}
                        {{-- <div class="solar-one__shape-one"
                            style="background-image: url(assets/images/shapes/shape-5.png)"></div>
                        <div class="solar-one__shape-two"
                            style="background-image: url(assets/images/shapes/shape-6.png)"></div> --}}
                        <div class="solar-two__image">
                            <img src="{{ url('images/resource/gioithieu.png') }}" alt="" />
                        </div>
                        {{-- <div class="solar-one__image-two">
                            <img src="{{ url('images/resource/energy-1.jpg') }}" alt="" />
                        </div> --}}
                        {{-- <div class="solar-one__image-three">
                            <img src="{{ url('images/resource/gioithieu.jpg') }}" alt="" />
                        </div> --}}
                    </div>
                </div>

                <!-- Content Column -->
                <div class="solar-one__content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="solar-one__content-inner-column">
                        <!-- Section Title -->
                        <div class="section-title">
                            <span class="section-title__tagline">Gi???i thi???u</span>
                            {{-- <h2 class="section-title__title">Why Choose Our <br> Solar Energy Platform</h2> --}}
                        </div>
                        <p class="solar-one__text">Ti???n th??n l?? X?? nghi???p d???ch v??? s???a ch???a tr???c thu???c T???ng C??ng ty T??n C???ng S??i G??n, n??m 2008 C??ng ty CP D???ch v??? K??? thu???t T??n C???ng ra ?????i v???i nhi???m v??? b???o ?????m c??ng t??c k??? thu???t cho to??n b??? trang thi???t b??? x???p d???, ph????ng ti???n v???n t???i ho???t ?????ng tr??n c??c ?????a b??n c???a T???ng C??ng ty T??n C???ng S??i G??n trong l??nh th??? Vi???t Nam.
                            B??n c???nh ????, v???i n??ng l???c v?? kinh nghi???m c???a m??nh, C??ng ty c??n cung c???p c??c d???ch v???: s???a ch???a, v??? sinh container b???n; s???a ch???a, v??? sinh, PTI container l???nh; s???n xu???t k???t c???u th??p, thi c??ng nh?? x?????ng nh?? kho...; v???n chuy???n h??ng si??u tr?????ng si??u tr???ng; s???a ch???a, b???o h??nh, s???n xu???t v?? l???p d???ng ph????ng ti???n, thi???t b??? khai th??c c???ng bi???n cho nhi???u h??ng v?? c??ng ty trong khu v???c: KALMAR, LIEBHERR, KOCKS, KE ??? Kranbau Eberswalde (?????c), ZPMC (Trung Qu???c), DAEWOO, DOOSAN (H??n Qu???c), UD NISSAN, TCM, MITSUI
                            (Nh???t B???n)???
                            </p>
                            <p class="solar-one__text">C??ng ty CP DVKT T??n C???ng c?? m???t ?????i ng?? ????ng ?????o tr??n 250 chuy??n gia, k??? s?? chuy??n nghi???p c??ng v???i h??n 300 k??? thu???t vi??n ch???t l?????ng cao v?? s??? h???u nhi???u ch???ng lo???i thi???t b??? chuy??n d???ng ????? ph???c v??? cho c??ng t??c b???o ?????m k??? thu???t cho to??n b??? kh???i trang thi???t b??? c???a T???ng C??ng ty T??n C???ng S??i G??n tr??n kh???p m???i mi???n ?????t n?????c, c??c trang thi???t b??? n??ng l???c thi c??ng c???a c??ng ty ?????u c?? xu???t x??? t??? c??c h??ng s???n xu???t danh ti???ng ??? n?????c ngo??i nh??: M???, Nh???t, ?????c, ??, ???
                                </p>
                        {{-- <p class="solar-one__text-two">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                            qui officia deserunt mollit anim</p> --}}
                        {{-- <div class="row clearfix">
                            <div class="column col-lg-5 col-md-6 col-sm-12">

                                <!-- Counter One Single -->
                                <div class="counter-one__single">
                                    <div class="counter-one__inner">
                                        <div class="counter-one__icon icon-wind-mill-ecological-generator"></div>
                                        <div class="counter-one__count count-box">
                                            <span class="count-text" data-speed="4000" data-stop="15224">0</span>+
                                        </div>
                                        <div class="counter-one__text">WTGs Installed</div>
                                    </div>
                                </div>

                            </div>
                            <div class="column col-lg-7 col-md-6 col-sm-12">
                                <!-- Phone Box -->
                                <div class="energy-one__phone-box alternate">
                                    <div class="energy-one__phone-inner">
                                        <span class="energy-one__phone-icon icon-phone"></span>
                                        Quick Call Wind Expert<br>
                                        <a class="energy-one__phone-number" href="tel:+88-5700-24-51">(88)
                                            5700-24-51</a>
                                    </div>
                                </div>
                                <!-- End Phone Box -->
                            </div>
                        </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="container">
        <span class="section-title__tagline">C??c c???t m???c quan tr???ng</span>
        <div class="row">
            <div class="col-md-12">
                <div class="main-timeline4">
                    <div class="timeline">
                        <a href="{{ url('images/resource/gioithieu.png') }}" class="timeline-content">
                            <span class="year">2008</span>
                            <div class="inner-content">
                                <h3 class="title">Th??nh l???p C??ng ty CP D???ch v??? k??? thu???t T??n C???ng</h3>
                                <p class="description">
                                    Th??nh l???p C??ng ty CP D???ch v??? k??? thu???t T??n C???ng
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <span class="year">2014</span>
                            <div class="inner-content">
                                <h3 class="title">L???p d???ng c???u KOCKS</h3>
                                <p class="description">
                                    L???p d???ng 02 c???u KOCKS ??? Myanmar, 04 c???u khung RTG 6+1 ??? Malaysia
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <span class="year">2016</span>
                            <div class="inner-content">
                                <h3 class="title">Vinh d??? ????n ch???ng nh???n Depot Tank</h3>
                                <p class="description">
                                    Vinh d??? ????n ch???ng nh???n Depot Tank v?? gia nh???p Hi???p h???i Container Tank Ch??u ??
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <span class="year">2018</span>
                            <div class="inner-content">
                                <h3 class="title">????n nh???n hu??n ch????ng</h3>
                                <p class="description">
                                ???????c Ch??? t???ch n?????c trao Hu??n ch????ng Lao ?????ng h???ng Ba
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <span class="year">2019</span>
                            <div class="inner-content">
                                <h3 class="title">V???n chuy???n c???u STS v?? c???u RTG</h3>
                                <p class="description">
                                    V???n chuy???n 6 c???u STS v?? 24 c???u RTG Mitsui t??? Nh???t B???n v??? Vi???t Nam
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <span class="year">2022</span>
                            <div class="inner-content">
                                <h3 class="title">S???n xu???t v?? xu???t kh???u c???u</h3>
                                <p class="description">
                                    S???n xu???t v?? xu???t kh???u th??nh c??ng 01 c???u KOCKS sang C???ng Haldila, ???n ?????
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="counter-one">   
        <div class="container">
            <span class="section-title__tagline">C?? S??? V???T CH???T, NGU???N L???C - DANH M???C C??C THI???T B??? S??? H???U </span>
            {{-- <h4>C?? S??? V???T CH???T, NGU???N L???C - DANH M???C C??C THI???T B??? S??? H???U </h4> --}}
            <div class="counter-one__inner-container">
                <div class="row clearfix">

                    <!-- Counter One Single -->
                    <div class="counter-one__single col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-one__inner">
                            {{-- <div class="counter-one__icon icon-medal"></div> --}}
                            <div class="counter-one__count count-box">
                                <span class="count-text" data-speed="3000" data-stop="5">0</span>
                            </div>
                            <div class="counter-one__text">Nh?? x?????ng ph???c v??? s???n xu???t</div>
                        </div>
                    </div>

                    <!-- Counter One Single -->
                    <div class="counter-one__single col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-one__inner">
                            <div class="counter-one__icon icon-energy-alternative-energy-source"></div>
                            <div class="counter-one__count count-box">
                                <span class="count-text" data-speed="3000" data-stop="12">0</span>+ mw
                            </div>
                            <div class="counter-one__text">Xe con</div>
                        </div>
                    </div>

                    <!-- Counter One Single -->
                    <div class="counter-one__single col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-one__inner">
                            <div class="counter-one__icon icon-wind-mill-ecological-generator"></div>
                            <div class="counter-one__count count-box">
                                <span class="count-text" data-speed="3000" data-stop="24">0</span>+
                            </div>
                            <div class="counter-one__text">Xe b??n t???i</div>
                        </div>
                    </div>

                    <!-- Counter One Single -->
                    <div class="counter-one__single col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-one__inner">
                            <div class="counter-one__icon icon-wind-mill"></div>
                            <div class="counter-one__count count-box">
                                <span class="count-text" data-speed="3000" data-stop="10">0</span>+
                            </div>
                            <div class="counter-one__text">Xe t???i 1,25T</div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="counter-one__inner-container">
                <div class="row clearfix">

                    <!-- Counter One Single -->
                    <div class="counter-one__single col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-one__inner">
                            {{-- <div class="counter-one__icon icon-medal"></div> --}}
                            <div class="counter-one__count count-box">
                                <span class="count-text" data-speed="3000" data-stop="20">0</span>
                            </div>
                            <div class="counter-one__text">Xe t???i - k??o 15T</div>
                        </div>
                    </div>

                    <!-- Counter One Single -->
                    <div class="counter-one__single col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-one__inner">
                            <div class="counter-one__icon icon-energy-alternative-energy-source"></div>
                            <div class="counter-one__count count-box">
                                <span class="count-text" data-speed="3000" data-stop="2">0</span>+ mw
                            </div>
                            <div class="counter-one__text">C???u b??nh l???p Liebherr 220T-400T</div>
                        </div>
                    </div>

                    <!-- Counter One Single -->
                    <div class="counter-one__single col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-one__inner">
                            <div class="counter-one__icon icon-wind-mill-ecological-generator"></div>
                            <div class="counter-one__count count-box">
                                <span class="count-text" data-speed="3000" data-stop="4">0</span>+
                            </div>
                            <div class="counter-one__text">C???u RTG</div>
                        </div>
                    </div>

                    <!-- Counter One Single -->
                    <div class="counter-one__single col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-one__inner">
                            <div class="counter-one__icon icon-wind-mill"></div>
                            <div class="counter-one__count count-box">
                                <span class="count-text" data-speed="3000" data-stop="12">0</span>+
                            </div>
                            <div class="counter-one__text">Xe thang t??? h??nh 18-40m</div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    
@endsection
