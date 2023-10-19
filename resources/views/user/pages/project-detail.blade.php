@extends('main')


@section('title')
    {{ $project->name }}
@endsection

@section('content')
    <!-- Project Detail -->
    <section class="project-detail">
        <div class="container">
            <div class="row clearfix">

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h2 class="project-detail__title">{{ $project->name }}</h2>
                    {!! $project->short_description !!}
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="project-detail__info-box">
                        <div class="project-detail__info-title">{{ $project->service->name }}</div>
                        <div class="row clearfix">
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <ul class="project-detail__info">
                                    <li>
                                        <span class="icon icon-user"></span>
                                        Khách hàng:
                                        <strong>{{ $project->client }}</strong>
                                    </li>
                                    <li>
                                        <span class="icon icon-tag-chevron-thin"></span>
                                        Website Khách hàng:
                                        <strong>{{ $project->client_website }}</strong>
                                    </li>
                                </ul>
                            </div>
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <ul class="project-detail__info">
                                    <li>
                                        <span class="icon icon-clock"></span>
                                        Hoàn thành:
                                        <strong>{{ $project->finish_date }}</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    {!! $project->description !!}
                </div>

            </div>
        </div>
    </section>
    <!-- End Project Detail -->
@endsection
