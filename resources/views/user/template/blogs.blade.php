<section class="news-one">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title centered">
            <span class="section-title__tagline">Bài viết & Tin tức</span>
            <h2 class="section-title__title">Bài viết mới</h2>
            {{-- <div class="section-title__text">Chúng tôi áp dụng phương pháp tiếp cận cá nhân với từng khách hàng và doanh
                nghiệp của chúng tôi
                mô hình được xây dựng trên lòng tin.</div> --}}
        </div>

        <div class="row clearfix">
            @foreach ($blogs as $blog)
                <!-- News One Single -->
                <div class="news-one__single col-lg-4 col-md-6 col-sm-12">
                    <div class="news-one__single-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="news-one__img">
                            <a href="{{url('/blog\/').$blog->id}}">
                                <img src="{{asset('storage/'.$blog->cover_image)}}">
                            </a>
                        </div>
                        <div class="news-one__content">
                            {{-- <ul class="news-one__meta">
                                <li><a href="blog-detail.html"><i class="icon-tag-chevron-thin"></i> Solar
                                        Environment</a></li>
                                <li><a href="blog-detail.html"><i class="icon-comment-outline"></i> 05 Comment</a>
                                </li>
                            </ul> --}}
                            <h3 class="news-one__title">
                                <a href="{{url('/blog\/').$blog->id}}">{{$blog->title}}</a>
                            </h3>
                            {!! Str::limit($blog->content, 50, ' ...') !!}
                            <div class="news-one__info">
                                <div class="news-one__img-two">
                                    <a href="{{url('/blog\/').$blog->id}}"><img src="{{ url('/images/authors/author-2.jpg') }}"
                                            alt="">{{$blog->user->name}}</a>
                                </div>
                                <div class="news-one__designation">{{$blog->publish_at}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</section>
