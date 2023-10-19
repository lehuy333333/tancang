@extends('main')

{{-- @section('title')
    Contact
@endsection --}}

@section('content')
<section class="page-title" style="background-image: url({{ url('images/background/energy-10.jpg') }})">
    <div class="container">
        <h1 class="page-main__title">@yield('title')</h1>
        <ul class="page__breadcrumb">
            <li><a href="{{url('/')}}">home</a></li>
            <li>@yield('title')</li>
        </ul>
    </div>
</section>
    <section class="solar-one">
        <div class="solar-one__color"></div>
        <div class="solar-two__color"></div>
        <div class="solar-one__shape-three" style="background-image: url(assets/images/shapes/shape-2.png)"></div>
        <div class="solar-one__shape-four" style="background-image: url(assets/images/shapes/shape-4.png)"></div>
        <div class="row clearfix">

            <!-- Image Column -->
            <div class="solar-one__image-column col-lg-6 col-md-12 col-sm-12">
                <div class="solar-one__image-inner-column wow slideInLeft" data-wow-delay="100ms"
                    data-wow-duration="2500ms">
                    {{-- <div class="solar-three__color"></div>
                        <div class="solar-one__shape-one"
                            style="background-image: url(assets/images/shapes/shape-5.png)"></div>
                        <div class="solar-one__shape-two"
                            style="background-image: url(assets/images/shapes/shape-6.png)"></div> --}}
                    <div class="solar-two__image">
                        <img src="{{ url('images/resource/gioithieu.png') }}" alt="" />
                    </div>
                    {{-- <div class="solar-one__image-two">
                            <img src="{{ url('images/resource/energy-1.jpg') }}" alt="" />
                        </div>
                        <div class="solar-one__image-three">
                            <img src="{{ url('images/resource/gioithieu.jpg') }}" alt="" />
                        </div> --}}
                </div>
            </div>

            {{-- <div class="solar-one__image-column col-lg-1 col-md-12 col-sm-12">
                <div class="solar-one__image-inner-column wow slideInLeft" data-wow-delay="100ms"
                    data-wow-duration="2500ms">
                    <div class="solar-two__image">
                        <img src="{{ url('images/resource/gioithieu2.png') }}" alt="" />
                    </div>
                    <div class="solar-two__image">
                        <img src="{{ url('images/resource/gioithieu2.png') }}" alt="" />
                    </div>
                    <div class="solar-two__image">
                        <img src="{{ url('images/resource/gioithieu2.png') }}" alt="" />
                    </div>
                    <div class="solar-two__image">
                        <img src="{{ url('images/resource/gioithieu1.png') }}" alt="" />
                    </div>

                </div>
            </div> --}}

            <!-- Content Column -->
            <div class="solar-one__content-column col-lg-5 col-md-12 col-sm-12">
                <div class="solar-one__content-inner-column">
                    <!-- Section Title -->
                    {{-- <div class="section-title">
                            <span class="section-title__tagline">Giới thiệu</span>
                            <h2 class="section-title__title">Why Choose Our <br> Solar Energy Platform</h2>
                        </div> --}}
                    {{-- <p class="solar-one__text">Tiền thân là Xí nghiệp dịch vụ sửa chữa trực thuộc Tổng Công ty Tân Cảng Sài Gòn, năm 2008 Công ty CP Dịch vụ Kỹ thuật Tân Cảng ra đời với nhiệm vụ bảo đảm công tác kỹ thuật cho toàn bộ trang thiết bị xếp dỡ, phương tiện vận tải hoạt động trên các địa bàn của Tổng Công ty Tân Cảng Sài Gòn trong lãnh thổ Việt Nam.
                            Bên cạnh đó, với năng lực và kinh nghiệm của mình, Công ty còn cung cấp các dịch vụ: sửa chữa, vệ sinh container bồn; sửa chữa, vệ sinh, PTI container lạnh; sản xuất kết cấu thép, thi công nhà xưởng nhà kho...; vận chuyển hàng siêu trường siêu trọng; sửa chữa, bảo hành, sản xuất và lắp dựng phương tiện, thiết bị khai thác cảng biển cho nhiều hãng và công ty trong khu vực: KALMAR, LIEBHERR, KOCKS, KE – Kranbau Eberswalde (Đức), ZPMC (Trung Quốc), DAEWOO, DOOSAN (Hàn Quốc), UD NISSAN, TCM, MITSUI
                            (Nhật Bản)…
                            </p> --}}
                    {{-- <p class="solar-one__text">Công ty CP DVKT Tân Cảng có một đội ngũ đông đảo trên 250 chuyên gia, kỹ sư chuyên nghiệp cùng với hơn 300 kỹ thuật viên chất lượng cao và sở hữu nhiều chủng loại thiết bị chuyên dụng để phục vụ cho công tác bảo đảm kỹ thuật cho toàn bộ khối trang thiết bị của Tổng Công ty Tân Cảng Sài Gòn trên khắp mọi miền đất nước, các trang thiết bị năng lực thi công của công ty đều có xuất xứ từ các hãng sản xuất danh tiếng ở nước ngoài như: Mỹ, Nhật, Đức, Ý, …
                                </p> --}}
                    <div class="list-group">
                        <button type="button" class="list-group-item list-group-item-action active">
                            CƠ SỞ SỬA CHỮA TRÊN CẢ NƯỚC
                        </button>
                        <button type="button" class="list-group-item list-group-item-action">PHÂN XƯỞNG CẨU BỜ</button>
                        <button type="button" class="list-group-item list-group-item-action">PHÂN XƯỞNG CẨU KHUNG-TRẠM
                            NGUỒN ĐIỆN</button>
                        <button type="button" class="list-group-item list-group-item-action">PHÂN XƯỞNG Ô TÔ</button>
                        <button type="button" class="list-group-item list-group-item-action">PHÂN XƯỞNG XE NÂNG</button>
                        <button type="button" class="list-group-item list-group-item-action">PHÂN XƯỞNG HIỆP PHƯỚC</button>
                        <button type="button" class="list-group-item list-group-item-action">PHÂN XƯỞNG PHÚ HỮU</button>
                        <button type="button" class="list-group-item list-group-item-action">PHÂN XƯỞNG CÁI MÉP</button>
                        <button type="button" class="list-group-item list-group-item-action">PHÂN XƯỞNG HẢI PHÒNG</button>
                        <button type="button" class="list-group-item list-group-item-action">PHÂN XƯỞNG LẮP DỰNG ĐÓNG
                            MỚI</button>
                        <button type="button" class="list-group-item list-group-item-action">PHÂN XƯỞNG SỬA CHỮA PHƯƠNG
                            TIỆN THUỶ</button>
                    </div>
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

    
    
@endsection
