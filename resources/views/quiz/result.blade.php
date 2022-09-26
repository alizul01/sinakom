@php
    $html_tag_data = [];
    $title = 'Quiz Result';
    $description= 'Acorn elearning platform quiz result.';
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
                            <li class="breadcrumb-item"><a href="/Quiz/List">Quizes</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->

        <div class="row d-none d-lg-flex mb-3 g-0">
            <div class="col-auto">
                <div class="sw-lg-16 sh-1"></div>
            </div>
            <div class="col">
                <div class="row gx-2 px-5">
                    <div class="col-5">
                        <div class="text-muted text-small">QUIZ</div>
                    </div>
                    <div class="col-3">
                        <div class="text-muted text-small">QUESTIONS</div>
                    </div>
                    <div class="col-2">
                        <div class="text-muted text-small">TIME</div>
                    </div>
                    <div class="col-2 text-end">
                        <div class="text-muted text-small">SCORE</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-3 mb-5">
            <div class="col-sm-6 col-lg-12">
                <div class="card">
                    <div class="row g-0 h-auto sh-lg-12">
                        <div class="col-12 col-lg-auto h-100">
                            <img src="/img/course/small/course-1.webp" alt="course" class="card-img card-img-horizontal-lg sh-18 sw-lg-16 h-lg-100" />
                        </div>
                        <div class="col-12 col-lg p-0 h-100">
                            <div class="card-body h-100">
                                <div class="row gx-2 d-flex h-100 align-items-lg-center">
                                    <div class="col-lg-5 mb-2 mb-lg-1">
                                        <a href="#" class="stretched-link body-link">
                                            <div class="lh-1-5 mb-0">Advanced React Web Developer Course</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="clock" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Time</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate">8m</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="form-check" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Questions</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate">30</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="badge" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Score</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate justify-content-lg-end">A</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-12">
                <div class="card">
                    <div class="row g-0 h-auto sh-lg-12">
                        <div class="col-12 col-lg-auto h-100">
                            <img src="/img/course/small/course-2.webp" alt="course" class="card-img card-img-horizontal-lg sh-18 sw-lg-16 h-lg-100" />
                        </div>
                        <div class="col-12 col-lg p-0 h-100">
                            <div class="card-body h-100">
                                <div class="row gx-2 d-flex h-100 align-items-lg-center">
                                    <div class="col-lg-5 mb-2 mb-lg-1">
                                        <a href="#" class="stretched-link body-link">
                                            <div class="lh-1-5 mb-0">Python for Beginners: From Zero to Expert</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="clock" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Time</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate">6m</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="form-check" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Questions</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate">30</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="badge" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Score</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate justify-content-lg-end">B</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-12">
                <div class="card">
                    <div class="row g-0 h-auto sh-lg-12">
                        <div class="col-12 col-lg-auto h-100">
                            <img src="/img/course/small/course-3.webp" alt="course" class="card-img card-img-horizontal-lg sh-18 sw-lg-16 h-lg-100" />
                        </div>
                        <div class="col-12 col-lg p-0 h-100">
                            <div class="card-body h-100">
                                <div class="row gx-2 d-flex h-100 align-items-lg-center">
                                    <div class="col-lg-5 mb-2 mb-lg-1">
                                        <a href="#" class="stretched-link body-link">
                                            <div class="lh-1-5 mb-0">Learn and Understand NodeJS</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="clock" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Time</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate">6m</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="form-check" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Questions</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate">40</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="badge" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Score</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate justify-content-lg-end">A</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-12">
                <div class="card">
                    <div class="row g-0 h-auto sh-lg-12">
                        <div class="col-12 col-lg-auto h-100">
                            <img src="/img/course/small/course-4.webp" alt="course" class="card-img card-img-horizontal-lg sh-18 sw-lg-16 h-lg-100" />
                        </div>
                        <div class="col-12 col-lg p-0 h-100">
                            <div class="card-body h-100">
                                <div class="row gx-2 d-flex h-100 align-items-lg-center">
                                    <div class="col-lg-5 mb-2 mb-lg-1">
                                        <a href="#" class="stretched-link body-link">
                                            <div class="lh-1-5 mb-0">HTML 5 - The Complete Guide for Every Level</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="clock" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Time</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate">4m</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="form-check" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Questions</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate">15</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="badge" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Score</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate justify-content-lg-end">C</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-12">
                <div class="card">
                    <div class="row g-0 h-auto sh-lg-12">
                        <div class="col-12 col-lg-auto h-100">
                            <img src="/img/course/small/course-5.webp" alt="course" class="card-img card-img-horizontal-lg sh-18 sw-lg-16 h-lg-100" />
                        </div>
                        <div class="col-12 col-lg p-0 h-100">
                            <div class="card-body h-100">
                                <div class="row gx-2 d-flex h-100 align-items-lg-center">
                                    <div class="col-lg-5 mb-2 mb-lg-1">
                                        <a href="#" class="stretched-link body-link">
                                            <div class="lh-1-5 mb-0">Advanced Techniques with Gulpjs</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="clock" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Time</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate">8m</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="form-check" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Questions</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate">15</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="badge" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Score</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate justify-content-lg-end">A</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-12">
                <div class="card">
                    <div class="row g-0 h-auto sh-lg-12">
                        <div class="col-12 col-lg-auto h-100">
                            <img src="/img/course/small/course-6.webp" alt="course" class="card-img card-img-horizontal-lg sh-18 sw-lg-16 h-lg-100" />
                        </div>
                        <div class="col-12 col-lg p-0 h-100">
                            <div class="card-body h-100">
                                <div class="row gx-2 d-flex h-100 align-items-lg-center">
                                    <div class="col-lg-5 mb-2 mb-lg-1">
                                        <a href="#" class="stretched-link body-link">
                                            <div class="lh-1-5 mb-0">Introduction to Sass with Full Website</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="clock" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Time</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate">6m</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="form-check" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Questions</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate">20</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="badge" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Score</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate justify-content-lg-end">A</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-12">
                <div class="card">
                    <div class="row g-0 h-auto sh-lg-12">
                        <div class="col-12 col-lg-auto h-100">
                            <img src="/img/course/small/course-7.webp" alt="course" class="card-img card-img-horizontal-lg sh-18 sw-lg-16 h-lg-100" />
                        </div>
                        <div class="col-12 col-lg p-0 h-100">
                            <div class="card-body h-100">
                                <div class="row gx-2 d-flex h-100 align-items-lg-center">
                                    <div class="col-lg-5 mb-2 mb-lg-1">
                                        <a href="#" class="stretched-link body-link">
                                            <div class="lh-1-5 mb-0">Java - The Complete Guide</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="clock" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Time</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate">8m</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="form-check" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Questions</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate">50</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="badge" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Score</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate justify-content-lg-end">B</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-12">
                <div class="card">
                    <div class="row g-0 h-auto sh-lg-12">
                        <div class="col-12 col-lg-auto h-100">
                            <img src="/img/course/small/course-8.webp" alt="course" class="card-img card-img-horizontal-lg sh-18 sw-lg-16 h-lg-100" />
                        </div>
                        <div class="col-12 col-lg p-0 h-100">
                            <div class="card-body h-100">
                                <div class="row gx-2 d-flex h-100 align-items-lg-center">
                                    <div class="col-lg-5 mb-2 mb-lg-1">
                                        <a href="#" class="stretched-link body-link">
                                            <div class="lh-1-5 mb-0">PHP for Beginners with CMS Project</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="clock" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Time</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate">7m</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="form-check" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Questions</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate">40</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="badge" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Score</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate justify-content-lg-end">B</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-12">
                <div class="card">
                    <div class="row g-0 h-auto sh-lg-12">
                        <div class="col-12 col-lg-auto h-100">
                            <img src="/img/course/small/course-9.webp" alt="course" class="card-img card-img-horizontal-lg sh-18 sw-lg-16 h-lg-100" />
                        </div>
                        <div class="col-12 col-lg p-0 h-100">
                            <div class="card-body h-100">
                                <div class="row gx-2 d-flex h-100 align-items-lg-center">
                                    <div class="col-lg-5 mb-2 mb-lg-1">
                                        <a href="#" class="stretched-link body-link">
                                            <div class="lh-1-5 mb-0">10 Real Life C++ Projects</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="clock" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Time</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate">7m</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="form-check" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Questions</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate">40</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="badge" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Score</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate justify-content-lg-end">B</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-12">
                <div class="card">
                    <div class="row g-0 h-auto sh-lg-12">
                        <div class="col-12 col-lg-auto h-100">
                            <img src="/img/course/small/course-10.webp" alt="course" class="card-img card-img-horizontal-lg sh-18 sw-lg-16 h-lg-100" />
                        </div>
                        <div class="col-12 col-lg p-0 h-100">
                            <div class="card-body h-100">
                                <div class="row gx-2 d-flex h-100 align-items-lg-center">
                                    <div class="col-lg-5 mb-2 mb-lg-1">
                                        <a href="#" class="stretched-link body-link">
                                            <div class="lh-1-5 mb-0">Introduction to Ubuntu: Best Practices for Beginners</div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="clock" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Time</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate">7m</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="form-check" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Questions</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate">40</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-auto d-lg-none">
                                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                                    <i data-acorn-icon="badge" class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col col-lg-12">
                                                <div class="row g-0">
                                                    <div class="col d-lg-none">
                                                        <div class="text-alternate sh-4 d-flex align-items-center lh-1-25">Score</div>
                                                    </div>
                                                    <div class="col-auto col-lg-12">
                                                        <div class="sh-4 d-flex align-items-center text-alternate justify-content-lg-end">B</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <button class="btn btn-outline-primary sw-25">Load More</button>
            </div>
        </div>

        <!-- Content End -->
    </div>
@endsection
