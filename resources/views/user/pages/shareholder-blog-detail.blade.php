@extends('main')

@section('content')
    <!-- News Four -->
    <section class="news-four">
        <div class="container">
            <div class="row clearfix">

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <!-- Service Detail Category -->
                    <div class="sidebar-widget service-details__category">
                        <div class="sidebar-widget__content">
                            <h3 class="service-details__title">Blog Categories</h3>
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
                    <!-- News Detail -->
                    <div class="news-detail">
                        <div class="news-detail__inner">
                            <div class="news-detail__img">
                                <img src="{{ asset('storage/' . $blog->cover_image) }}" alt="">
                                <div class="news-detail__category">{{ $blog->type->name }}</div>
                            </div>
                            <div class="news-detail__content">
                                <h2 class="news-detail__title">{{ $blog->title }}</h2>
                                <ul class="news-detail__meta">
                                    <li><i class="icon-user"></i>{{ $blog->user->name }}</li>
                                </ul>
                                {!! $blog->content !!}
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Blog Detail -->
@endsection
