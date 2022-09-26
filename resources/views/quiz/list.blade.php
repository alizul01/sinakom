@php
    $html_tag_data = [];
    $title = 'Quiz List';
    $description= 'Acorn elearning platform quiz list.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
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

        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 row-cols-xxl-5 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/course-1.webp" class="card-img-top sh-25" alt="card image" />
                    <div class="card-body">
                        <h5 class="heading mb-2">
                            <a href="/Quiz/Detail" class="body-link">
                                <span class="clamp-line sh-6 lh-1-5" data-line="2">Advanced React Web Developer Course</span>
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
                        <div class="row g-0 align-items-center mb-4">
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
                        <div class="d-flex flex-row justify-content-between w-100 w-sm-50 w-xl-100">
                            <a href="/Quiz/Detail" class="btn btn-outline-primary w-100 me-1 btn-sm">Start</a>
                            <button class="btn btn-icon btn-icon-only btn-outline-primary btn-sm" type="button">
                                <i data-acorn-icon="more-horizontal"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/course-2.webp" class="card-img-top sh-25" alt="card image" />
                    <div class="card-body">
                        <h5 class="heading mb-2">
                            <a href="/Quiz/Detail" class="body-link">
                                <span class="clamp-line sh-6 lh-1-5" data-line="2">Python for Beginners: From Zero to Expert</span>
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
                                        <div class="sh-4 d-flex align-items-center text-alternate">30</div>
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
                        <div class="row g-0 align-items-center mb-4">
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
                        <div class="d-flex flex-row justify-content-between w-100 w-sm-50 w-xl-100">
                            <a href="/Quiz/Detail" class="btn btn-outline-primary w-100 me-1 btn-sm">Start</a>
                            <button class="btn btn-icon btn-icon-only btn-outline-primary btn-sm" type="button">
                                <i data-acorn-icon="more-horizontal"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/course-3.webp" class="card-img-top sh-25" alt="card image" />
                    <div class="card-body">
                        <h5 class="heading mb-2">
                            <a href="/Quiz/Detail" class="body-link">
                                <span class="clamp-line sh-6 lh-1-5" data-line="2">Learn and Understand NodeJS</span>
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
                        <div class="row g-0 align-items-center mb-4">
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
                        <div class="d-flex flex-row justify-content-between w-100 w-sm-50 w-xl-100">
                            <a href="/Quiz/Detail" class="btn btn-outline-primary w-100 me-1 btn-sm">Start</a>
                            <button class="btn btn-icon btn-icon-only btn-outline-primary btn-sm" type="button">
                                <i data-acorn-icon="more-horizontal"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/course-4.webp" class="card-img-top sh-25" alt="card image" />
                    <div class="card-body">
                        <h5 class="heading mb-2">
                            <a href="/Quiz/Detail" class="body-link">
                                <span class="clamp-line sh-6 lh-1-5" data-line="2">HTML 5 - The Complete Guide for Every Level</span>
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
                        <div class="row g-0 align-items-center mb-4">
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
                        <div class="d-flex flex-row justify-content-between w-100 w-sm-50 w-xl-100">
                            <a href="/Quiz/Detail" class="btn btn-outline-primary w-100 me-1 btn-sm">Start</a>
                            <button class="btn btn-icon btn-icon-only btn-outline-primary btn-sm" type="button">
                                <i data-acorn-icon="more-horizontal"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/course-5.webp" class="card-img-top sh-25" alt="card image" />
                    <div class="card-body">
                        <h5 class="heading mb-2">
                            <a href="/Quiz/Detail" class="body-link">
                                <span class="clamp-line sh-6 lh-1-5" data-line="2">Advanced Techniques with Gulpjs</span>
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
                                        <div class="sh-4 d-flex align-items-center text-alternate">30</div>
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
                        <div class="row g-0 align-items-center mb-4">
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
                        <div class="d-flex flex-row justify-content-between w-100 w-sm-50 w-xl-100">
                            <a href="/Quiz/Detail" class="btn btn-outline-primary w-100 me-1 btn-sm">Start</a>
                            <button class="btn btn-icon btn-icon-only btn-outline-primary btn-sm" type="button">
                                <i data-acorn-icon="more-horizontal"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/course-6.webp" class="card-img-top sh-25" alt="card image" />
                    <div class="card-body">
                        <h5 class="heading mb-2">
                            <a href="/Quiz/Detail" class="body-link">
                                <span class="clamp-line sh-6 lh-1-5" data-line="2">Introduction to Sass with Full Website</span>
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
                        <div class="row g-0 align-items-center mb-4">
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
                        <div class="d-flex flex-row justify-content-between w-100 w-sm-50 w-xl-100">
                            <a href="/Quiz/Detail" class="btn btn-outline-primary w-100 me-1 btn-sm">Start</a>
                            <button class="btn btn-icon btn-icon-only btn-outline-primary btn-sm" type="button">
                                <i data-acorn-icon="more-horizontal"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/course-7.webp" class="card-img-top sh-25" alt="card image" />
                    <div class="card-body">
                        <h5 class="heading mb-2">
                            <a href="/Quiz/Detail" class="body-link">
                                <span class="clamp-line sh-6 lh-1-5" data-line="2">Java - The Complete Guide</span>
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
                                        <div class="sh-4 d-flex align-items-center text-alternate">30</div>
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
                        <div class="row g-0 align-items-center mb-4">
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
                        <div class="d-flex flex-row justify-content-between w-100 w-sm-50 w-xl-100">
                            <a href="/Quiz/Detail" class="btn btn-outline-primary w-100 me-1 btn-sm">Start</a>
                            <button class="btn btn-icon btn-icon-only btn-outline-primary btn-sm" type="button">
                                <i data-acorn-icon="more-horizontal"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/course-8.webp" class="card-img-top sh-25" alt="card image" />
                    <div class="card-body">
                        <h5 class="heading mb-2">
                            <a href="/Quiz/Detail" class="body-link">
                                <span class="clamp-line sh-6 lh-1-5" data-line="2">PHP for Beginners with CMS Project</span>
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
                                        <div class="sh-4 d-flex align-items-center text-alternate">15m</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-4">
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
                        <div class="d-flex flex-row justify-content-between w-100 w-sm-50 w-xl-100">
                            <a href="/Quiz/Detail" class="btn btn-outline-primary w-100 me-1 btn-sm">Start</a>
                            <button class="btn btn-icon btn-icon-only btn-outline-primary btn-sm" type="button">
                                <i data-acorn-icon="more-horizontal"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/course-9.webp" class="card-img-top sh-25" alt="card image" />
                    <div class="card-body">
                        <h5 class="heading mb-2">
                            <a href="/Quiz/Detail" class="body-link">
                                <span class="clamp-line sh-6 lh-1-5" data-line="2">10 Real Life C++ Projects</span>
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
                        <div class="row g-0 align-items-center mb-4">
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
                        <div class="d-flex flex-row justify-content-between w-100 w-sm-50 w-xl-100">
                            <a href="/Quiz/Detail" class="btn btn-outline-primary w-100 me-1 btn-sm">Start</a>
                            <button class="btn btn-icon btn-icon-only btn-outline-primary btn-sm" type="button">
                                <i data-acorn-icon="more-horizontal"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/course-10.webp" class="card-img-top sh-25" alt="card image" />
                    <div class="card-body">
                        <h5 class="heading mb-2">
                            <a href="/Quiz/Detail" class="body-link">
                                <span class="clamp-line sh-6 lh-1-5" data-line="2">Introduction to Ubuntu: Best Practices for Beginners</span>
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
                                        <div class="sh-4 d-flex align-items-center text-alternate">15</div>
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
                        <div class="row g-0 align-items-center mb-4">
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
                        <div class="d-flex flex-row justify-content-between w-100 w-sm-50 w-xl-100">
                            <a href="/Quiz/Detail" class="btn btn-outline-primary w-100 me-1 btn-sm">Start</a>
                            <button class="btn btn-icon btn-icon-only btn-outline-primary btn-sm" type="button">
                                <i data-acorn-icon="more-horizontal"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content End -->
    </div>
@endsection
