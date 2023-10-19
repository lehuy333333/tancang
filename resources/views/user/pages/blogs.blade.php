@extends('main')

@section('title')
    Blogs
@endsection

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
    <!-- News Two -->
    <section class="news-two style-two">
        <div class="container">
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

            <!-- Styled Pagination -->
            {{-- <ul class="styled-pagination text-center">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="next"><a href="#">Next</a></li>
            </ul> --}}
            <!-- End Styled Pagination -->

        </div>
    </section>
    <!-- End News Two -->
@endsection
