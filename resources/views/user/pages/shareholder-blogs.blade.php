@extends('main')

@section('title')
    Shareholder Blogs
@endsection

@section('content')
    <!-- Blog Detail -->
    <section class="news-three">
        <div class="container">
            <div class="row clearfix">

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <!-- Service Detail Category -->
                    <div class="sidebar-widget service-details__category">
                        <div class="sidebar-widget__content">
                            <h3 class="service-details__title">Cổ Đông</h3>
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
                                        class="news-three__read-more">Reading
                                        More <span class="news-three__arrow icon-right-arrow"></span></a>
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

                </div>


            </div>
        </div>
    </section>
    <!-- End Blog Detail -->
@endsection
