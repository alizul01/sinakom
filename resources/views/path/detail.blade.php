@php
    $html_tag_data = [];
    $title = 'Path Detail';
    $description= 'Acorn elearning platform path detail.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
@endsection

@section('js_vendor')
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/path.detail.js"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-sm-6">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/Path/List">Paths</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="col-12 col-sm-6 d-flex align-items-start justify-content-end">
                    <!-- Start Button Start -->
                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-sm-auto">
                        <i data-acorn-icon="chevron-right"></i>
                        <span>Start</span>
                    </button>
                    <!-- Start Button End -->
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->
        <div class="row g-5">
            <div class="col-xl-4 col-xxl-3">
                <!-- Summary Start -->
                <h2 class="small-title">Summary</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/img/illustration/icon-performance.webp" class="theme-filter" alt="performance" />
                            <div class="d-flex flex-column sh-5">
                                <a href="#" class="heading stretched-link">Becoming a Head Chef</a>
                            </div>
                        </div>
                        <div class="text-muted mb-4">Sweet roll apple pie tiramisu bonbon sugar plum muffin sesame snaps chocolate. Lollipop halvah powder.</div>
                        <div class="row g-0 align-items-center mb-1">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="online-class" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Courses</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">8</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-1">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="form-check" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Quizes</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-1">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="clock" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Time</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">32h</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="graduation" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Trainee</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">1.532</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="science" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Level</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">Novice</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Summary End -->
            </div>
            <div class="col-xl-8 col-xxl-9">
                <!-- Courses Start -->
                <h2 class="small-title">Courses</h2>
                <div class="row g-3 mb-5">
                    <div class="col-md-12 col-lg-6 col-xl-12 col-xxl-6">
                        <div class="card">
                            <div class="row g-0 h-auto sh-sm-19">
                                <div class="col-12 col-sm-auto h-100">
                                    <img src="/img/course/small/course-1.webp" alt="course" class="card-img card-img-horizontal-sm sh-19 h-sm-100 sw-sm-16 sw-lg-20" />
                                </div>
                                <div class="col-12 col-sm p-0 h-100">
                                    <div class="card-body">
                                        <a href="/Course/Detail" class="body-link clamp-line lh-1-5 mb-1 heading sh-6" data-line="2">
                                            Advanced React Web Developer Course
                                        </a>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="card-text mb-0">
                                            <div>$ 27.50</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-12 col-xxl-6">
                        <div class="card">
                            <div class="row g-0 h-auto sh-sm-19">
                                <div class="col-12 col-sm-auto h-100">
                                    <img src="/img/course/small/course-2.webp" alt="course" class="card-img card-img-horizontal-sm sh-19 h-sm-100 sw-sm-16 sw-lg-20" />
                                </div>
                                <div class="col-12 col-sm p-0 h-100">
                                    <div class="card-body">
                                        <a href="/Course/Detail" class="body-link clamp-line lh-1-5 mb-1 heading sh-6" data-line="2">Python for Beginners: From Zero to Expert</a>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="card-text mb-0">
                                            <div>$ 15.30</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-12 col-xxl-6">
                        <div class="card">
                            <div class="row g-0 h-auto sh-sm-19">
                                <div class="col-12 col-sm-auto h-100">
                                    <img src="/img/course/small/course-3.webp" alt="course" class="card-img card-img-horizontal-sm sh-19 h-sm-100 sw-sm-16 sw-lg-20" />
                                </div>
                                <div class="col-12 col-sm p-0 h-100">
                                    <div class="card-body">
                                        <a href="/Course/Detail" class="body-link clamp-line lh-1-5 mb-1 heading sh-6" data-line="2">Learn and Understand NodeJS</a>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="card-text mb-0">
                                            <div>$ 44.25</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-12 col-xxl-6">
                        <div class="card">
                            <div class="row g-0 h-auto sh-sm-19">
                                <div class="col-12 col-sm-auto h-100">
                                    <img src="/img/course/small/course-4.webp" alt="course" class="card-img card-img-horizontal-sm sh-19 h-sm-100 sw-sm-16 sw-lg-20" />
                                </div>
                                <div class="col-12 col-sm p-0 h-100">
                                    <div class="card-body">
                                        <a href="/Course/Detail" class="body-link clamp-line lh-1-5 mb-1 heading sh-6" data-line="2">HTML 5 - The Complete Guide for Every Level</a>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="card-text mb-0">
                                            <div>$ 62.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-12 col-xxl-6">
                        <div class="card">
                            <div class="row g-0 h-auto sh-sm-19">
                                <div class="col-12 col-sm-auto h-100">
                                    <img src="/img/course/small/course-5.webp" alt="course" class="card-img card-img-horizontal-sm sh-19 h-sm-100 sw-sm-16 sw-lg-20" />
                                </div>
                                <div class="col-12 col-sm p-0 h-100">
                                    <div class="card-body">
                                        <a href="/Course/Detail" class="body-link clamp-line lh-1-5 mb-1 heading sh-6" data-line="2">
                                            Advanced Techniques with Gulpjs
                                        </a>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="card-text mb-0">
                                            <div>$ 23.25</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-12 col-xxl-6">
                        <div class="card">
                            <div class="row g-0 h-auto sh-sm-19">
                                <div class="col-12 col-sm-auto h-100">
                                    <img src="/img/course/small/course-6.webp" alt="course" class="card-img card-img-horizontal-sm sh-19 h-sm-100 sw-sm-16 sw-lg-20" />
                                </div>
                                <div class="col-12 col-sm p-0 h-100">
                                    <div class="card-body">
                                        <a href="/Course/Detail" class="body-link clamp-line lh-1-5 mb-1 heading sh-6" data-line="2">Introduction to Sass with Full Website</a>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="card-text mb-0">
                                            <div>$ 19.65</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-12 col-xxl-6">
                        <div class="card">
                            <div class="row g-0 h-auto sh-sm-19">
                                <div class="col-12 col-sm-auto h-100">
                                    <img src="/img/course/small/course-7.webp" alt="course" class="card-img card-img-horizontal-sm sh-19 h-sm-100 sw-sm-16 sw-lg-20" />
                                </div>
                                <div class="col-12 col-sm p-0 h-100">
                                    <div class="card-body">
                                        <a href="/Course/Detail" class="body-link clamp-line lh-1-5 mb-1 heading sh-6" data-line="2">Java - The Complete Guide</a>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="card-text mb-0">
                                            <div>$ 14.10</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-12 col-xxl-6">
                        <div class="card">
                            <div class="row g-0 h-auto sh-sm-19">
                                <div class="col-12 col-sm-auto h-100">
                                    <img src="/img/course/small/course-8.webp" alt="course" class="card-img card-img-horizontal-sm sh-19 h-sm-100 sw-sm-16 sw-lg-20" />
                                </div>
                                <div class="col-12 col-sm p-0 h-100">
                                    <div class="card-body">
                                        <a href="/Course/Detail" class="body-link clamp-line lh-1-5 mb-1 heading sh-6" data-line="2">
                                            PHP for Beginners with CMS Project
                                        </a>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="card-text mb-0">
                                            <div>$ 22.25</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Courses End -->

                <!-- Quizes Start -->
                <h2 class="small-title">Quizes</h2>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-xxl-2 g-3">
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="heading mb-2">
                                    <a href="/Quiz/Detail" class="body-link">
                                        <span class="clamp-line sh-6 lh-1-5" data-line="2">Basic Introduction to Bread Making Techniques</span>
                                    </a>
                                </h5>
                                <div class="mb-3 text-muted sh-8 clamp-line" data-line="3">
                                    Pie fruitcake jelly beans. Candy tootsie chocolate croissant jujubes icing chocolate croissant jujubes icing macaroon croissant.
                                </div>
                                <div class="row g-0 align-items-center mb-1">
                                    <div class="col-auto">
                                        <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                            <i data-acorn-icon="form-check" class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="row g-0">
                                            <div class="col">
                                                <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Questions</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="sh-4 d-flex align-items-center text-alternate">25</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 align-items-center mb-1">
                                    <div class="col-auto">
                                        <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                            <i data-acorn-icon="clock" class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="row g-0">
                                            <div class="col">
                                                <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Time</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="sh-4 d-flex align-items-center text-alternate">5m</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 align-items-center">
                                    <div class="col-auto">
                                        <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                            <i data-acorn-icon="graduation" class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="row g-0">
                                            <div class="col">
                                                <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Level</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="sh-4 d-flex align-items-center text-alternate">Beginner</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="heading mb-2">
                                    <a href="/Quiz/Detail" class="body-link">
                                        <span class="clamp-line sh-6 lh-1-5" data-line="2">Advanced Sandwich Making Techniques</span>
                                    </a>
                                </h5>
                                <div class="mb-3 text-muted sh-8 clamp-line" data-line="3">
                                    Pie fruitcake jelly beans. Candy tootsie chocolate croissant jujubes icing chocolate croissant jujubes icing macaroon croissant.
                                </div>
                                <div class="row g-0 align-items-center mb-1">
                                    <div class="col-auto">
                                        <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                            <i data-acorn-icon="form-check" class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="row g-0">
                                            <div class="col">
                                                <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Questions</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="sh-4 d-flex align-items-center text-alternate">20</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 align-items-center mb-1">
                                    <div class="col-auto">
                                        <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                            <i data-acorn-icon="clock" class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="row g-0">
                                            <div class="col">
                                                <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Time</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="sh-4 d-flex align-items-center text-alternate">4m</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 align-items-center">
                                    <div class="col-auto">
                                        <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                            <i data-acorn-icon="graduation" class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="row g-0">
                                            <div class="col">
                                                <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Level</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="sh-4 d-flex align-items-center text-alternate">Novice</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="heading mb-2">
                                    <a href="/Quiz/Detail" class="body-link">
                                        <span class="clamp-line sh-6 lh-1-5" data-line="2">Recipes for Sweet and Healty Treats</span>
                                    </a>
                                </h5>
                                <div class="mb-3 text-muted sh-8 clamp-line" data-line="3">
                                    Pie fruitcake jelly beans. Candy tootsie chocolate croissant jujubes icing chocolate croissant jujubes icing macaroon croissant.
                                </div>
                                <div class="row g-0 align-items-center mb-1">
                                    <div class="col-auto">
                                        <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                            <i data-acorn-icon="form-check" class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="row g-0">
                                            <div class="col">
                                                <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Questions</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="sh-4 d-flex align-items-center text-alternate">40</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 align-items-center mb-1">
                                    <div class="col-auto">
                                        <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                            <i data-acorn-icon="clock" class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="row g-0">
                                            <div class="col">
                                                <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Time</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="sh-4 d-flex align-items-center text-alternate">10m</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 align-items-center">
                                    <div class="col-auto">
                                        <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                            <i data-acorn-icon="graduation" class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="row g-0">
                                            <div class="col">
                                                <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Level</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="sh-4 d-flex align-items-center text-alternate">Expert</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="heading mb-2">
                                    <a href="/Quiz/Detail" class="body-link">
                                        <span class="clamp-line sh-6 lh-1-5" data-line="2">Recipes for Sweet and Healty Treats</span>
                                    </a>
                                </h5>
                                <div class="mb-3 text-muted sh-8 clamp-line" data-line="3">
                                    Pie fruitcake jelly beans. Candy tootsie chocolate croissant jujubes icing chocolate croissant jujubes icing macaroon croissant.
                                </div>
                                <div class="row g-0 align-items-center mb-1">
                                    <div class="col-auto">
                                        <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                            <i data-acorn-icon="form-check" class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="row g-0">
                                            <div class="col">
                                                <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Questions</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="sh-4 d-flex align-items-center text-alternate">40</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 align-items-center mb-1">
                                    <div class="col-auto">
                                        <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                            <i data-acorn-icon="clock" class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="row g-0">
                                            <div class="col">
                                                <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Time</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="sh-4 d-flex align-items-center text-alternate">10m</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 align-items-center">
                                    <div class="col-auto">
                                        <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                            <i data-acorn-icon="graduation" class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="row g-0">
                                            <div class="col">
                                                <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Level</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="sh-4 d-flex align-items-center text-alternate">Expert</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Quizes End -->
            </div>
        </div>
        <!-- Content End -->
    </div>
@endsection
