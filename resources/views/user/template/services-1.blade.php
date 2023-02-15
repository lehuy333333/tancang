<section class="service-one">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title centered">
            <span class="section-title__tagline">Năng lực công ty</span>
            <h2 class="section-title__title">Các Dịch Vụ Chính </h2>
            {{-- <div class="section-title__text">We adopt an individual approach with each and every client and our
                business <br> model is built on the following key promises.</div> --}}
        </div>

        <div class="row clearfix">
            @foreach ($services as $service)
                <!-- Service One Single -->
                <div class="service-one__single col-lg-4 col-md-12 col-sm-12">
                    <div class="service-one__single-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <span class="service-one__icon">
                            <img src="{{ asset('storage/' . $service->icon) }}" width="36" height="36">
                        </span>
                        <h3 class="service-one__title"><a href="{{url('/service\/').$service->id}}">{{ $service->name }}</a></h3>
                        <div class="service-one__text">
                            {!! Str::limit($service->description, 30, ' ...') !!}
                        </div>
                        <a href="{{url('/service\/').$service->id}}" class="service-one__read-more">Read More <span
                                class="service-one__read-arrow icon-right-arrow"></span></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- <style>
        .service-one__text {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 5;
            /* number of lines to show */
            line-clamp: 2;
            -webkit-box-orient: vertical;
        }
    </style> --}}
</section>
