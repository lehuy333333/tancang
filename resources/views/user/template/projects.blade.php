<!-- Project One -->
<section class="project-one">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title centered">
            <span class="section-title__tagline">Dự án tiêu biểu</span>
            <h2 class="section-title__title">Những Dự Án Công Ty Đã Thực Hiện</h2>
            {{-- <div class="section-title__text">We adopt an individual approach with each and every client and our
                business <br> model is built on the following key promises.</div> --}}
        </div>

        <div class="three-item-carousel owl-theme owl-carousel thm-owl__carousel"
            data-owl-options='{
            "animateOut": "fadeOut",
            "animateIn": "fadeIn",
            "loop":true,
            "margin":30,
            "nav":true,
            "autoplayTimeout":5000,
            "autoHeight": true,
            "smartSpeed": 500,
            "autoplay": 6000,
            "navText": ["<span class=\"icon-left-arrow-2\"></span>","<span class=\"icon-right-arrow-2\"></span>"],
            "responsive":{
                "0":{
                    "items":1
                },
                "768":{
                    "items":2
                },
                "1200":{
                    "items":3
                }
            }
        }'>

            @foreach ($projects as $project)
                <!-- Project One -->
                <div class="project-one__single">
                    <div class="project-one__image">
                        <img src="{{asset('storage/'.$project->cover_image)}}" width="370" height="489">
                        <div class="project-one__overlay-box">
                            <div class="project-one__sub-title">{{$project->service->name}}</div>
                            <h3 class="project-one__title">
                                <a href="{{url('/project\/').$project->id}}">{{$project->name}}</a>
                            </h3>
                            <a href="{{url('/project\/').$project->id}}" class="project-one__arrow">
                                <span class="icon-right-arrow-1"></span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach


            {{-- <!-- Project One -->
            <div class="project-one__single">
                <div class="project-one__image">
                    <img src="{{ url('images/gallery/gallery-1-2.jpg') }}" alt="" />
                    <div class="project-one__overlay-box">
                        <div class="project-one__sub-title">Plant, Solar Plant</div>
                        <h3 class="project-one__title"><a href="project-detail.html">Solar Installation</a>
                        </h3>
                        <a href="project-detail.html" class="project-one__arrow">
                            <span class="icon-right-arrow-1"></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project One -->
            <div class="project-one__single">
                <div class="project-one__image">
                    <img src="{{ url('images/gallery/gallery-1-3.jpg') }}" alt="" />
                    <div class="project-one__overlay-box">
                        <div class="project-one__sub-title">Plant, Solar Plant</div>
                        <h3 class="project-one__title"><a href="project-detail.html">Solar Installation</a>
                        </h3>
                        <a href="project-detail.html" class="project-one__arrow">
                            <span class="icon-right-arrow-1"></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project One -->
            <div class="project-one__single">
                <div class="project-one__image">
                    <img src="{{ url('images/gallery/gallery-1-1.jpg') }}" alt="" />
                    <div class="project-one__overlay-box">
                        <div class="project-one__sub-title">Plant, Solar Plant</div>
                        <h3 class="project-one__title"><a href="project-detail.html">Solar Installation</a>
                        </h3>
                        <a href="project-detail.html" class="project-one__arrow">
                            <span class="icon-right-arrow-1"></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project One -->
            <div class="project-one__single">
                <div class="project-one__image">
                    <img src="{{ url('images/gallery/gallery-1-2.jpg') }}" alt="" />
                    <div class="project-one__overlay-box">
                        <div class="project-one__sub-title">Plant, Solar Plant</div>
                        <h3 class="project-one__title"><a href="project-detail.html">Solar Installation</a>
                        </h3>
                        <a href="project-detail.html" class="project-one__arrow">
                            <span class="icon-right-arrow-1"></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project One -->
            <div class="project-one__single">
                <div class="project-one__image">
                    <img src="{{ url('images/gallery/gallery-1-3.jpg') }}" alt="" />
                    <div class="project-one__overlay-box">
                        <div class="project-one__sub-title">Plant, Solar Plant</div>
                        <h3 class="project-one__title"><a href="project-detail.html">Solar Installation</a>
                        </h3>
                        <a href="project-detail.html" class="project-one__arrow">
                            <span class="icon-right-arrow-1"></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project One -->
            <div class="project-one__single">
                <div class="project-one__image">
                    <img src="{{ url('images/gallery/gallery-1-1.jpg') }}" alt="" />
                    <div class="project-one__overlay-box">
                        <div class="project-one__sub-title">Plant, Solar Plant</div>
                        <h3 class="project-one__title"><a href="project-detail.html">Solar Installation</a>
                        </h3>
                        <a href="project-detail.html" class="project-one__arrow">
                            <span class="icon-right-arrow-1"></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project One -->
            <div class="project-one__single">
                <div class="project-one__image">
                    <img src="{{ url('images/gallery/gallery-1-2.jpg') }}" alt="" />
                    <div class="project-one__overlay-box">
                        <div class="project-one__sub-title">Plant, Solar Plant</div>
                        <h3 class="project-one__title"><a href="project-detail.html">Solar Installation</a>
                        </h3>
                        <a href="project-detail.html" class="project-one__arrow">
                            <span class="icon-right-arrow-1"></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project One -->
            <div class="project-one__single">
                <div class="project-one__image">
                    <img src="{{ url('images/gallery/gallery-1-3.jpg') }}" alt="" />
                    <div class="project-one__overlay-box">
                        <div class="project-one__sub-title">Plant, Solar Plant</div>
                        <h3 class="project-one__title"><a href="project-detail.html">Solar Installation</a>
                        </h3>
                        <a href="project-detail.html" class="project-one__arrow">
                            <span class="icon-right-arrow-1"></span>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<section class="project-two">
    <div class="container">
        <div class="project-two__inner-container clearfix">

            <div class="pull-right">
                <div class="project-two__btn-box">
                    <a href="{{ url('/projects') }}" class="theme-btn btn-style-two"><span class="txt">View All
                            Project</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Project One -->

<!-- Project Two -->
{{-- <section class="project-two">
    <div class="container">
        <div class="project-two__inner-container clearfix">
            <div class="pull-left">
                <h2 class="project-two__title"><span>2316</span> Dự án đã hoàn thành</h2>
                <div class="project-two__text">Every business is different, that’s why we have different
                    options
                    <br> designed to work for different industries
                </div>
            </div>
            <div class="pull-right">
                <div class="project-two__btn-box">
                    <a href="{{url('/projects')}}" class="theme-btn btn-style-two"><span class="txt">View All
                            Project</span></a>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- End Project Two -->
