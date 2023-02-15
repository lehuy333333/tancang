@extends('main')

@section('title')
    Contact
@endsection

@section('content')
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
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s"
            allowfullscreen=""></iframe>
    </section>
    <!-- End Contact Map -->
@endsection
