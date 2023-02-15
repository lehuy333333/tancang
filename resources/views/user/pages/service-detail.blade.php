@extends('main')

@section('title')
    {{ $service->name }}
@endsection

@section('content') 
    <section class="service-detail">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <!-- Service Detail Category -->
                    <div class="sidebar-widget service-details__category">
                        <div class="sidebar-widget__content">
                            <h3 class="service-details__title">Roofing Services</h3>
                            <ul class="service-details__cagegory-list">
                                @foreach ($services as $service)
                                    <li><a href="{{ url('/service\/') . $service->id }}">{{ $service->name }}<span
                                                class="arrow icon-right-arrow"></span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12">
                    <h2 class="service-detail__title">{{ $service->name }}</h2>
                    {!! $service->description !!}
                </div>

            </div>
        </div>
    </section>
@endsection
