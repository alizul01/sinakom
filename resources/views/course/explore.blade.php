@php
    $html_tag_data = [];
    $title = 'Course Explore';
    $description= 'Acorn elearning platform course explore.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
@endsection

@section('js_vendor')
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/course.explore.js"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->

        <!-- Popular Start -->
        <div class="d-flex justify-content-between">
            <h2 class="small-title">Popular</h2>
            <div class="mt-n1">
                <button class="btn btn-icon btn-icon-end btn-background pe-0 pt-0" type="button">
                    <span>View All</span>
                    <i data-acorn-icon="chevron-right"></i>
                </button>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3 mb-5">
            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/course-1.webp" class="card-img-top sh-22" alt="card image" />
                    <div class="card-body">
                        <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Advanced React Web Developer Course</a></h5>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="mb-2">
                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="text-muted d-inline-block text-small align-text-top">(114)</div>
                        </div>
                        <div class="card-text mb-0">
                            <div class="text-muted text-overline text-small">
                                <del>$ 24.60</del>
                            </div>
                            <div>$ 18.90</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/course-2.webp" class="card-img-top sh-22" alt="card image" />
                    <div class="card-body">
                        <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Python for Beginners: From Zero to Expert</a></h5>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="mb-2">
                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="text-muted d-inline-block text-small align-text-top">(84)</div>
                        </div>
                        <div class="card-text mb-0">
                            <div class="text-muted text-overline text-small">
                                <del>$ 33.25</del>
                            </div>
                            <div>$ 22.15</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/course-3.webp" class="card-img-top sh-22" alt="card image" />
                    <div class="card-body">
                        <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Learn and Understand NodeJS</a></h5>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="mb-2">
                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="text-muted d-inline-block text-small align-text-top">(117)</div>
                        </div>
                        <div class="card-text mb-0">
                            <div class="text-muted text-overline text-small">
                                <del>$ 28.15</del>
                            </div>
                            <div>$ 22.50</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/course-4.webp" class="card-img-top sh-22" alt="card image" />
                    <div class="card-body">
                        <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">HTML 5 - The Complete Guide for Every Level</a></h5>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="mb-2">
                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="text-muted d-inline-block text-small align-text-top">(53)</div>
                        </div>
                        <div class="card-text mb-0">
                            <div class="text-muted text-overline text-small">
                                <del>$ 16.75</del>
                            </div>
                            <div>$ 12.50</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular End -->

        <!-- Trending Start -->
        <div class="d-flex justify-content-between">
            <h2 class="small-title">Trending</h2>
            <div class="mt-n1">
                <button class="btn btn-icon btn-icon-end btn-background pe-0 pt-0" type="button">
                    <span>View All</span>
                    <i data-acorn-icon="chevron-right"></i>
                </button>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3 mb-5">
            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/course-5.webp" class="card-img-top sh-22" alt="card image" />
                    <div class="card-body">
                        <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Advanced Techniques with Gulpjs</a></h5>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="mb-2">
                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="text-muted d-inline-block text-small align-text-top">(53)</div>
                        </div>
                        <div class="card-text mb-0">
                            <div class="text-muted text-overline text-small">
                                <del>$ 32.50</del>
                            </div>
                            <div>$ 24.80</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/course-6.webp" class="card-img-top sh-22" alt="card image" />
                    <div class="card-body">
                        <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Introduction to Sass with Full Website</a></h5>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="mb-2">
                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="3">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="text-muted d-inline-block text-small align-text-top">(67)</div>
                        </div>
                        <div class="card-text mb-0">
                            <div class="text-muted text-overline text-small">
                                <del>$ 27.00</del>
                            </div>
                            <div>$ 13.20</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/course-7.webp" class="card-img-top sh-22" alt="card image" />
                    <div class="card-body">
                        <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Java - The Complete Guide</a></h5>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="mb-2">
                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="text-muted d-inline-block text-small align-text-top">(427)</div>
                        </div>
                        <div class="card-text mb-0">
                            <div class="text-muted text-overline text-small">
                                <del>$ 48.00</del>
                            </div>
                            <div>$ 28.80</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/course-8.webp" class="card-img-top sh-22" alt="card image" />
                    <div class="card-body">
                        <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">PHP for Beginners with CMS Project</a></h5>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="mb-2">
                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="text-muted d-inline-block text-small align-text-top">(84)</div>
                        </div>
                        <div class="card-text mb-0">
                            <div class="text-muted text-overline text-small">
                                <del>$ 32.25</del>
                            </div>
                            <div>$ 24.50</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending End -->

        <!-- Paths Start -->
        <h2 class="small-title">Paths</h2>
        <div class="row g-3 row-cols-1 row-cols-xl-2 row-cols-xxl-4 mb-5">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/img/illustration/icon-performance.webp" class="theme-filter" alt="performance" />
                            <div class="d-flex flex-column sh-5">
                                <a href="/Path/List" class="heading stretched-link">Frontend Developer</a>
                            </div>
                        </div>
                        <div class="text-muted">Sweet roll apple pie tiramisu bonbon sugar plum muffin sesame snaps chocolate. Lollipop halvah powder.</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/img/illustration/icon-experiment.webp" class="theme-filter" alt="experiment" />
                            <div class="d-flex flex-column sh-5">
                                <a href="/Path/List" class="heading stretched-link">CSS Mastery</a>
                            </div>
                        </div>
                        <div class="text-muted">Chocolate cake marshmallow bear claw sweet. Apple pie macaroon sesame snaps candy jelly pudding.</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/img/illustration/icon-storage.webp" class="theme-filter" alt="storage" />
                            <div class="d-flex flex-column sh-5">
                                <a href="/Path/List" class="heading stretched-link">Webmaster</a>
                            </div>
                        </div>
                        <div class="text-muted">Cheesecake chocolate carrot cake pie lollipop lemon drops toffee lollipop.</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/img/illustration/icon-accounts.webp" class="theme-filter" alt="people" />
                            <div class="d-flex flex-column sh-5">
                                <a href="/Path/List" class="heading stretched-link">Backend Developer</a>
                            </div>
                        </div>
                        <div class="text-muted">Cake tart apple pie bear bonbon sugar plum muffin sesame snaps sweet roll gingerbread bonbon sugar.</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Paths End -->

        <h2 class="small-title">Sale</h2>
        <div class="row g-3">
            <div class="col-lg-6 mb-5 position-relative">
                <span class="badge rounded-pill bg-primary me-1 position-absolute e-4 t-n2 z-index-1">-30%</span>
                <div class="card w-100 sh-24 hover-img-scale-up">
                    <img src="/img/banner/cta-horizontal-short-1.webp" class="card-img h-100 scale" alt="card image" />
                    <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                        <div>
                            <div class="cta-3 mb-3 text-white opacity-75 w-75">Introduction to Machine Learning</div>
                            <div class="mb-4 text-white opacity-75">$ 26.25</div>
                            <a href="/Course/Detail" class="btn btn-icon btn-icon-start btn-primary stretched-link">
                                <i data-acorn-icon="chevron-right"></i>
                                <span>View</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5 position-relative">
                <span class="badge rounded-pill bg-primary me-1 position-absolute e-4 t-n2 z-index-1">-25%</span>
                <div class="card w-100 sh-24 hover-img-scale-up">
                    <img src="/img/banner/cta-horizontal-short-2.webp" class="card-img h-100 scale" alt="card image" />
                    <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                        <div>
                            <div class="cta-3 mb-3 text-white opacity-75 w-75">Basic Robotics Coding with Arduino</div>
                            <div class="mb-4 text-white opacity-75">$ 19.80</div>
                            <a href="/Course/Detail" class="btn btn-icon btn-icon-start btn-primary stretched-link">
                                <i data-acorn-icon="chevron-right"></i>
                                <span>View</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content End -->
    </div>
@endsection
