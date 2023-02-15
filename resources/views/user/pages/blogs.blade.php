@extends('main')

@section('title')
    Blogs
@endsection

@section('content')
    <!-- News Two -->
    <section class="news-two style-two">
        <div class="container">
            <div class="row clearfix">
                @foreach ($blogs as $blog)
                    <!-- News Two Single -->
                    <div class="news-two__single col-lg-4 col-md-6 col-sm-12">
                        <div class="news-two__single-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="news-two__img">
                                <a href="{{ url('/blog\/') . $blog->id }}"><img
                                        src="{{ asset('storage/' . $blog->cover_image) }}" alt=""></a>
                                {{-- <div class="news-two__category">Wind Power</div> --}}
                            </div>
                            <div class="news-two__content">
                                <ul class="news-two__meta">
                                    <li><a href="{{ url('/blog\/') . $blog->id }}"><i class="icon-user"></i>
                                            {{ $blog->user->name }}</a>
                                    </li>
                                    {{-- <li><a href="blog-detail.html"><i class="icon-comment-outline"></i> 05 Comment</a>
                                    </li> --}}
                                </ul>
                                <h3 class="news-two__title"><a href="{{ url('/blog\/') . $blog->id }}">{{ $blog->title }}</a>
                                </h3>
                                <div class="news-two__text">
                                    {!! Str::limit($blog->content, 30, ' ...') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {!! $blogs->render() !!}

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
