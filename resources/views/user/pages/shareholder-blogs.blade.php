@extends('main')

@section('title')
    Cổ đông
@endsection

@section('content')
    <!-- Blog Detail -->
    <section class="page-title" style="background-image: url({{ url('images/background/energy-11.jpg') }})">
        <div class="container">
            <h1 class="page-main__title">@yield('title')</h1>
            <ul class="page__breadcrumb">
                <li><a href="{{url('/')}}">home</a></li>
                <li>@yield('title')</li>
            </ul>
        </div>
    </section>
    <section class="news-three">
        <div class="container">
            <div class="row clearfix">

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <!-- Service Detail Category -->
                    <div class="sidebar-widget service-details__category">
                        <div class="sidebar-widget__content">
                            <h3 class="service-details__title">Thông tin Cổ Đông</h3>
                            <ul class="service-details__cagegory-list">
                                @foreach ($blog_types as $type)
                                    <li><a href="{{ url('/shareholder_blog/type\/') . $type->id }}">{{ $type->name }}
                                            <span class="numbering">{{ $type->blogs->count() }}</span> <span
                                                class="arrow icon-right-arrow"></span></a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-8 col-md-12 col-sm-12">
                    @foreach ($blogs as $blog)
                        <!-- News Two Single -->
                        <div class="news-three__single">
                            <div class="news-three__single-inner">
                                <div class="news-three__img">
                                    <a href="{{ url('/shareholder_blog\/') . $blog->id }}"><img
                                            src="{{ asset('storage/' . $blog->cover_image) }}" alt=""></a>
                                    <div class="news-three__category">{{ $blog->type->name }}</div>
                                </div>
                                <div class="news-three__content">
                                    <h2 class="news-three__title"><a
                                            href="{{ url('/shareholder_blog\/') . $blog->id }}">{{ $blog->title }}</a></h2>
                                    <ul class="news-three__meta">
                                        <li><a href="{{ url('/shareholder_blog\/') . $blog->id }}"><i class="icon-user"></i>
                                                {{ $blog->user->name }}</a></li>
                                    </ul>
                                    <div class="news-three__text">{!! Str::limit($blog->content, 30, ' ...') !!}</div>
                                    <a href="{{ url('/shareholder_blog\/') . $blog->id }}"
                                        class="news-three__read-more">Đọc thêm <span class="news-three__arrow icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {!! $blogs->render() !!} 

                    <!-- Styled Pagination -->
                    {{-- <ul class="styled-pagination text-right">
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li class="next"><a href="#">Next</a></li>
                    </ul> --}}
                    <!-- End Styled Pagination -->

                {{-- </div>

               
                    {{-- @foreach ($blogs as $blog)
                        <!-- News One Single -->
                        <div class="news-one__single col-lg-4 col-md-6 col-sm-12">
                            <div class="news-one__single-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="news-one__img">
                                    <a href="{{url('/blog\/').$blog->id}}">
                                        <img src="{{asset('storage/'.$blog->cover_image)}}">
                                    </a>
                                </div>
                                <div class="news-one__content">
                                    <ul class="news-one__meta">
                                        <li><a href="blog-detail.html"><i class="icon-tag-chevron-thin"></i> Solar
                                                Environment</a></li>
                                        <li><a href="blog-detail.html"><i class="icon-comment-outline"></i> 05 Comment</a>
                                        </li>
                                    </ul>
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
                    @endforeach --}}
        
            </div>
        </div>
    </section>
    <!-- End Blog Detail -->
@endsection
