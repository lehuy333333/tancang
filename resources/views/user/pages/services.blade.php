@extends('main')

@section('title')
    Services
@endsection

@section('content')
<section class="page-title" style="background-image: url({{ url('images/background/energy-12.jpg') }})">
    <div class="container">
        <h1 class="page-main__title">@yield('title')</h1>
        <ul class="page__breadcrumb">
            <li><a href="{{url('/')}}">home</a></li>
            <li>@yield('title')</li>
        </ul>
    </div>
</section>
    <!-- Service Two -->
    <section class="service-two style-two">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title centered">
                {{-- <span class="section-title__tagline">That's what we do</span> --}}
                <h2 class="section-title__title">Dịch vụ của chúng tôi</h2>
                {{-- <div class="section-title__text">We adopt an individual approach with each and every client and our
                    business <br> model is built on the following key promises.</div> --}}
            </div>

            <div class="row clearfix">
                @isset($services)
                    @foreach ($services as $key => $service)
                        <div class="service-two__single col-lg-4 col-md-12 col-sm-12">
                            <div class="service-two__single-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <span class="service-two__number">{{ $key + 1 }}</span> 
                                <span class="service-two__icon"><img src="{{ asset('storage/' . $service->icon) }}" width="36" height="36"></span>
                                <h3 class="service-two__title"><a href="{{url('/service\/').$service->id}}">{{ $service->name }}</a></h3>
                                <div class="service-two__text">
                                    {!! Str::limit($service->description, 30, ' ...') !!}
                                </div>
                                <a href="{{url('/service\/').$service->id}}" class="service-two__read-more"><span
                                        class="service-two__read-arrow icon-right-arrow"></span> Xem thêm</a>
                            </div>
                        </div>
                    @endforeach
                @endisset
                <!-- Service Two Single -->


            </div>
        </div>
    </section>
    <!-- End Service One -->
@endsection
