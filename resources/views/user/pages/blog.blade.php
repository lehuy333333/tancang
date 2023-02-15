@extends('main')

@section('title')
    Blogs
@endsection

@section('content')
	<!-- News Two -->
    <section class="news-two style-two">
        <div class="container">
            <div class="row clearfix">

                <!-- News Two Single -->
                <div class="news-two__single col-lg-4 col-md-6 col-sm-12">
                    <div class="news-two__single-inner wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="news-two__img">
                            <a href="blog-detail.html"><img src="{{ asset('/images/blog/news-2-1.jpg')}}" alt=""></a>
                            <div class="news-two__category">Wind Power</div>
                        </div>
                        <div class="news-two__content">
                            <ul class="news-two__meta">
                                <li><a href="blog-detail.html"><i class="icon-user"></i> By Admin</a></li>
                                <li><a href="blog-detail.html"><i class="icon-comment-outline"></i> 05 Comment</a>
                                </li>
                            </ul>
                            <h3 class="news-two__title"><a href="blog-detail.html">Is solar or wind a better way to
                                    power your Home?</a></h3>
                            <div class="news-two__text">Convallis convallis tellus id interdum velit laoreet lorem
                                ipsum dolor solar</div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Styled Pagination -->
            <ul class="styled-pagination text-center">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="next"><a href="#">Next</a></li>
            </ul>
            <!-- End Styled Pagination -->

        </div>
    </section>
    <!-- End News Two -->
@endsection
