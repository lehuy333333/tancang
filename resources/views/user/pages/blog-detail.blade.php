@extends('main')

@section('content')
    <!-- News Four -->
    <section class="news-four">
        <div class="container">
            <div class="row clearfix">

                <div class="col-lg-9 col-md-12 col-sm-12">

                    <!-- News Detail -->
                    <div class="news-detail">
                        <div class="news-detail__inner">
                            <div class="news-detail__img">
                                <img src="{{ asset('storage/' . $blog->cover_image) }}">
                                {{-- <div class="news-detail__category">Turbine wild</div> --}}
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

                <div class="col-lg-3 col-md-12 col-sm-12">
                    <!-- Blog Detail Posts -->
                    <div class="sidebar-widget blog-details__posts">
                        <div class="sidebar-widget__content">
                            <h3 class="service-details__title">Tin tức liên quan</h3>
                            <ul class="sidebar__post-list">
                                @foreach ($blog->type->blogs->sortByDesc('id') as $key => $item)
                                    @if ($key > 4)
                                        @break
                                    @endif
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('storage/' . $blog->cover_image) }}" alt="" />
                                        </div>
                                        <span class="sidebar__post-content-meta">{{ $blog->publish_at }}</span>
                                        <a href="{{ url('/blog\/') . $blog->id }}">{{ $blog->title }}</a>
                                    </li>
                                @endforeach
                                {{-- <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/post-thumb-1-1.jpg" alt="" />
                                    </div>
                                    <span class="sidebar__post-content-meta">April 25, 2022</span>
                                    <a href="blog-detail.html">Find Hidden Turbulent Motion on the Sun</a>
                                </li>
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/post-thumb-1-2.jpg" alt="" />
                                    </div>
                                    <span class="sidebar__post-content-meta">April 25, 2022</span>
                                    <a href="blog-detail.html">Mapping Atmospheric Mysteries</a>
                                </li>
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/post-thumb-1-3.jpg" alt="" />
                                    </div>
                                    <span class="sidebar__post-content-meta">April 25, 2022</span>
                                    <a href="blog-detail.html"> Installing solar panels could help historic</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>

                    <!-- Service Detail Category -->
                    {{-- <div class="sidebar-widget service-details__contractor">
                        <div class="service-details__contractor-image">
                            <img src="assets/images/resource/contractors.jpg" alt="" />
                        </div>
                        <div class="service-details__contractor-content"
                            style="background-image: url(assets/images/shapes/shape-11.png)">
                            <div class="service-details__contractor-icon icon-phone-call"></div>
                            <h3 class="service-details__contractor-title">Talk To Professional Solar Contractors
                            </h3>
                            <div class="service-details__contractor-quote">Call us for a FREE quote!</div>
                            <a href="tel:+11-103-5751" class="service-details__contractor-phone">(11) 103-5751</a>
                        </div>
                    </div> --}}

                </div>

            </div>
        </div>
    </section>
    <!-- End Blog Detail -->
@endsection
