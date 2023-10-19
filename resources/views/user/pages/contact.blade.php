@extends('main')

@section('title')
    Contact
@endsection

@section('content')
<section class="page-title" style="background-image: url({{ url('images/background/energy-9.jpg') }})">
    <div class="container">
        <h1 class="page-main__title">@yield('title')</h1>
        <ul class="page__breadcrumb">
            <li><a href="{{url('/')}}">home</a></li>
            <li>@yield('title')</li>
        </ul>
    </div>
</section>
	<!-- Contact One -->
    <section class="contact-one">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h2 class="contact-one__title">Thông tin liên hệ</h2>
                    {{-- <div class="contact-one__text">You can also reach out to us by phone or email are many
                        variations</div> --}}
                    <ul class="contact-one__info">
                        <li>
                            <span class="icon icon-location"></span>
                            Địa chỉ
                            <p>1295B - Nguyễn Thị Định - Phường Cát Lái<br> TP. Thủ Đức- TP.HCM</p>
                        </li>
                        <li>
                            <span class="icon icon-phone"></span>
                            Số điện thoại
                            <p>+(028). 3742 0177</p>
                        </li>
                        <li>
                            <span class="icon icon-email"></span>
                            Email
                            <p>khkd_dvkt@saigonnewport.com.vn</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="contact-one__form-box">

                        <h2 class="contact-one__title-two">Mẫu liên hệ</h2>
                        {{-- <div class="contact-one__text-two">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Ut <br> blandit arcu in pretium ratione voluptatem sequi</div> --}}
                        <!-- Contact Form -->
                        <div class="contact-form">
                            <!-- Contact Form -->
                            <form method="post" action="sendemail.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="name" placeholder="Họ và tên">
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="email" name="email" placeholder="Emal">
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="phone" placeholder="Số điện thoại">
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="subject" placeholder="Chủ đề">
                                    </div>

                                    <div class="form-group">
                                        <textarea name="message" placeholder="Lời nhắn"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="theme-btn btn-style-two"><span class="txt">Gửi liên hệ</span></button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Contact Form -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact One -->

    <!-- Contact Map -->
    <section class="contact-map">
        <iframe
            src="https://maps.google.com/maps?q=1295B - Nguyễn Thị Định - Phường Cát Lái TP. Thủ Đức- TP.HCM&t=&z=10&ie=UTF8&iwloc=&output=embed"
            allowfullscreen=""></iframe>
    </section>
    <!-- End Contact Map -->
@endsection
