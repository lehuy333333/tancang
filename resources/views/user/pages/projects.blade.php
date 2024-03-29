@extends('main')

@section('title')
    Projects
@endsection

@section('content')
<section class="page-title" style="background-image: url({{ url('images/background/energy-5.jpg') }})">
    <div class="container">
        <h1 class="page-main__title">@yield('title')</h1>
        <ul class="page__breadcrumb">
            <li><a href="{{url('/')}}">home</a></li>
            <li>@yield('title')</li>
        </ul>
    </div>
</section>
    <!-- Project One -->
    <section class="project-one style-two">
        <div class="container">
            <div class="row clearfix">
                @isset($projects)
                    @foreach ($projects as $project)
                        <!-- Project One -->
                        <div class="project-one__single col-lg-4 col-md-6 col-sm-12">
                            <div class="project-one__image">
                                <img src="{{ asset('storage/' . $project->cover_image) }}" alt="" />
                                <div class="project-one__overlay-box">
                                    <div class="project-one__sub-title">{{ $project->service->name }}</div>
                                    <h3 class="project-one__title"><a href="{{ url('/project\/') . $project->id }}">{{ $project->name }}</a>
                                    </h3>
                                    <a href="project-detail.html" class="project-one__arrow">
                                        <span class="icon-right-arrow-1"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset

            </div>
        </div>
    </section>
    <!-- End Project One -->
@endsection
