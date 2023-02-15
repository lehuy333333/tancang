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
                            <span class="section-title__tagline">Giới thiệu</span>
                            {{-- <h2 class="section-title__title">Why Choose Our <br> Solar Energy Platform</h2> --}}
                        </div>
                        <p class="solar-one__text">Tiền thân là Xí nghiệp dịch vụ sửa chữa trực thuộc Tổng Công ty Tân Cảng Sài Gòn, năm 2008 Công ty CP Dịch vụ Kỹ thuật Tân Cảng ra đời với nhiệm vụ bảo đảm công tác kỹ thuật cho toàn bộ trang thiết bị xếp dỡ, phương tiện vận tải hoạt động trên các địa bàn của Tổng Công ty Tân Cảng Sài Gòn trong lãnh thổ Việt Nam.
                            Bên cạnh đó, với năng lực và kinh nghiệm của mình, Công ty còn cung cấp các dịch vụ: sửa chữa, vệ sinh container bồn; sửa chữa, vệ sinh, PTI container lạnh; sản xuất kết cấu thép, thi công nhà xưởng nhà kho...; vận chuyển hàng siêu trường siêu trọng; sửa chữa, bảo hành, sản xuất và lắp dựng phương tiện, thiết bị khai thác cảng biển cho nhiều hãng và công ty trong khu vực: KALMAR, LIEBHERR, KOCKS, KE – Kranbau Eberswalde (Đức), ZPMC (Trung Quốc), DAEWOO, DOOSAN (Hàn Quốc), UD NISSAN, TCM, MITSUI
                            (Nhật Bản)…
                            </p>
                            <p class="solar-one__text">Công ty CP DVKT Tân Cảng có một đội ngũ đông đảo trên 250 chuyên gia, kỹ sư chuyên nghiệp cùng với hơn 300 kỹ thuật viên chất lượng cao và sở hữu nhiều chủng loại thiết bị chuyên dụng để phục vụ cho công tác bảo đảm kỹ thuật cho toàn bộ khối trang thiết bị của Tổng Công ty Tân Cảng Sài Gòn trên khắp mọi miền đất nước, các trang thiết bị năng lực thi công của công ty đều có xuất xứ từ các hãng sản xuất danh tiếng ở nước ngoài như: Mỹ, Nhật, Đức, Ý, …
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
        <span class="section-title__tagline">Các cột mốc quan trọng</span>
        <div class="row">
            <div class="col-md-12">
                <div class="main-timeline4">
                    <div class="timeline">
                        <a href="{{ url('images/resource/gioithieu.png') }}" class="timeline-content">
                            <span class="year">2008</span>
                            <div class="inner-content">
                                <h3 class="title">Thành lập Công ty CP Dịch vụ kỹ thuật Tân Cảng</h3>
                                <p class="description">
                                    Thành lập Công ty CP Dịch vụ kỹ thuật Tân Cảng
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <span class="year">2014</span>
                            <div class="inner-content">
                                <h3 class="title">Lắp dựng cẩu KOCKS</h3>
                                <p class="description">
                                    Lắp dựng 02 cẩu KOCKS ở Myanmar, 04 cẩu khung RTG 6+1 ở Malaysia
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <span class="year">2016</span>
                            <div class="inner-content">
                                <h3 class="title">Vinh dự đón chứng nhận Depot Tank</h3>
                                <p class="description">
                                    Vinh dự đón chứng nhận Depot Tank và gia nhập Hiệp hội Container Tank Châu Á
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <span class="year">2018</span>
                            <div class="inner-content">
                                <h3 class="title">Đón nhận huân chương</h3>
                                <p class="description">
                                Được Chủ tịch nước trao Huân chương Lao động hạng Ba
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <span class="year">2019</span>
                            <div class="inner-content">
                                <h3 class="title">Vận chuyển cẩu STS và cẩu RTG</h3>
                                <p class="description">
                                    Vận chuyển 6 cẩu STS và 24 cẩu RTG Mitsui từ Nhật Bản về Việt Nam
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <span class="year">2022</span>
                            <div class="inner-content">
                                <h3 class="title">Sản xuất và xuất khẩu cẩu</h3>
                                <p class="description">
                                    Sản xuất và xuất khẩu thành công 01 cẩu KOCKS sang Cảng Haldila, Ấn Độ
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
            <span class="section-title__tagline">CƠ SỞ VẬT CHẤT, NGUỒN LỰC - DANH MỤC CÁC THIẾT BỊ SỞ HỮU </span>
            {{-- <h4>CƠ SỞ VẬT CHẤT, NGUỒN LỰC - DANH MỤC CÁC THIẾT BỊ SỞ HỮU </h4> --}}
            <div class="counter-one__inner-container">
                <div class="row clearfix">

                    <!-- Counter One Single -->
                    <div class="counter-one__single col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-one__inner">
                            {{-- <div class="counter-one__icon icon-medal"></div> --}}
                            <div class="counter-one__count count-box">
                                <span class="count-text" data-speed="3000" data-stop="5">0</span>
                            </div>
                            <div class="counter-one__text">Nhà xưởng phục vụ sản xuất</div>
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
                            <div class="counter-one__text">Xe bán tải</div>
                        </div>
                    </div>

                    <!-- Counter One Single -->
                    <div class="counter-one__single col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-one__inner">
                            <div class="counter-one__icon icon-wind-mill"></div>
                            <div class="counter-one__count count-box">
                                <span class="count-text" data-speed="3000" data-stop="10">0</span>+
                            </div>
                            <div class="counter-one__text">Xe tải 1,25T</div>
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
                            <div class="counter-one__text">Xe tải - kéo 15T</div>
                        </div>
                    </div>

                    <!-- Counter One Single -->
                    <div class="counter-one__single col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-one__inner">
                            <div class="counter-one__icon icon-energy-alternative-energy-source"></div>
                            <div class="counter-one__count count-box">
                                <span class="count-text" data-speed="3000" data-stop="2">0</span>+ mw
                            </div>
                            <div class="counter-one__text">Cẩu bánh lốp Liebherr 220T-400T</div>
                        </div>
                    </div>

                    <!-- Counter One Single -->
                    <div class="counter-one__single col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-one__inner">
                            <div class="counter-one__icon icon-wind-mill-ecological-generator"></div>
                            <div class="counter-one__count count-box">
                                <span class="count-text" data-speed="3000" data-stop="4">0</span>+
                            </div>
                            <div class="counter-one__text">Cẩu RTG</div>
                        </div>
                    </div>

                    <!-- Counter One Single -->
                    <div class="counter-one__single col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-one__inner">
                            <div class="counter-one__icon icon-wind-mill"></div>
                            <div class="counter-one__count count-box">
                                <span class="count-text" data-speed="3000" data-stop="12">0</span>+
                            </div>
                            <div class="counter-one__text">Xe thang tự hành 18-40m</div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    
@endsection
