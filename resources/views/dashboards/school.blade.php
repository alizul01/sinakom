@php
    $html_tag_data = [];
    $title = 'Dashboards School';
    $heading = 'School Dashboard';
    $description= 'Acorn elearning platform dashboard.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
@endsection

@section('js_vendor')
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/dashboard.school.js"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $heading }}</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/Dashboards/Elearning">Dashboards</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->

        <!-- Timetable Start -->
        <h2 class="small-title">Timetable</h2>
        <div class="row row-cols-1 row-cols-lg-5 g-2 mb-5">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-lg-center text-center text-md-start text-lg-center">
                        <p class="text-primary heading mb-4">Monday</p>
                        <div
                                class="d-flex flex-column flex-md-row flex-lg-column align-items-center mb-n4 justify-content-md-between justify-content-center text-center text-md-start text-lg-center"
                        >
                            <div class="mb-4">
                                <p class="mb-0">Geometry</p>
                                <p class="text-small text-muted mb-0">10:00 - 11:00</p>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0">Biology</p>
                                <p class="text-small text-muted mb-0">11:00 - 12:00</p>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0 text-muted">Lunch</p>
                                <p class="text-small text-muted mb-0">12:00 - 13:00</p>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0">Language</p>
                                <p class="text-small text-muted mb-0">13:00 - 14:00</p>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0">Art</p>
                                <p class="text-small text-muted mb-0">13:00 - 14:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-lg-center text-center text-md-start text-lg-center">
                        <p class="text-primary heading mb-4">Tuesday</p>
                        <div
                                class="d-flex flex-column flex-md-row flex-lg-column align-items-center mb-n4 justify-content-md-between justify-content-center text-center text-md-start text-lg-center"
                        >
                            <div class="mb-4">
                                <p class="mb-0">Chemistry</p>
                                <p class="text-small text-muted mb-0">10:00 - 11:00</p>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0">Chemistry</p>
                                <p class="text-small text-muted mb-0">11:00 - 12:00</p>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0 text-muted">Lunch</p>
                                <p class="text-small text-muted mb-0">12:00 - 13:00</p>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0">Physics</p>
                                <p class="text-small text-muted mb-0">13:00 - 14:00</p>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0">History</p>
                                <p class="text-small text-muted mb-0">13:00 - 14:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-lg-center text-center text-md-start text-lg-center">
                        <p class="text-primary heading mb-4">Wednesday</p>
                        <div
                                class="d-flex flex-column flex-md-row flex-lg-column align-items-center mb-n4 justify-content-md-between justify-content-center text-center text-md-start text-lg-center"
                        >
                            <div class="mb-4">
                                <p class="mb-0">Biology</p>
                                <p class="text-small text-muted mb-0">10:00 - 11:00</p>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0">Physics</p>
                                <p class="text-small text-muted mb-0">11:00 - 12:00</p>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0 text-muted">Lunch</p>
                                <p class="text-small text-muted mb-0">12:00 - 13:00</p>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0">Gymnastics</p>
                                <p class="text-small text-muted mb-0">13:00 - 14:00</p>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0">Gymnastics</p>
                                <p class="text-small text-muted mb-0">13:00 - 14:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-lg-center text-center text-md-start text-lg-center">
                        <p class="text-primary heading mb-4">Thursday</p>
                        <div
                                class="d-flex flex-column flex-md-row flex-lg-column align-items-center mb-n4 justify-content-md-between justify-content-center text-center text-md-start text-lg-center"
                        >
                            <div class="mb-4">
                                <p class="mb-0">Algebra</p>
                                <p class="text-small text-muted mb-0">10:00 - 11:00</p>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0">Algebra</p>
                                <p class="text-small text-muted mb-0">11:00 - 12:00</p>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0 text-muted">Lunch</p>
                                <p class="text-small text-muted mb-0">12:00 - 13:00</p>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0">Geometry</p>
                                <p class="text-small text-muted mb-0">13:00 - 14:00</p>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0">Geometry</p>
                                <p class="text-small text-muted mb-0">13:00 - 14:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-lg-center text-center text-md-start text-lg-center">
                        <p class="text-primary heading mb-4">Friday</p>
                        <div
                                class="d-flex flex-column flex-md-row flex-lg-column align-items-center mb-n4 justify-content-md-between justify-content-center text-center text-md-start text-lg-center"
                        >
                            <div class="mb-4">
                                <p class="mb-0">Chemistry</p>
                                <p class="text-small text-muted mb-0">10:00 - 11:00</p>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0">Physics</p>
                                <p class="text-small text-muted mb-0">11:00 - 12:00</p>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0 text-muted">Lunch</p>
                                <p class="text-small text-muted mb-0">12:00 - 13:00</p>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0">Biology</p>
                                <p class="text-small text-muted mb-0">13:00 - 14:00</p>
                            </div>
                            <div class="mb-4">
                                <p class="mb-0">History</p>
                                <p class="text-small text-muted mb-0">13:00 - 14:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Timetable End -->

        <div class="row">
            <!-- Exam Results Start -->
            <div class="col-lg-6 mb-5">
                <div class="d-flex justify-content-between">
                    <h2 class="small-title">Exam Results</h2>
                    <a href="/Quiz/Result" class="btn btn-icon btn-icon-end btn-xs btn-background-alternate p-0 text-small">
                        <span class="align-bottom">View All</span>
                        <i data-acorn-icon="chevron-right" class="align-middle" data-acorn-size="12"></i>
                    </a>
                </div>
                <div class="scroll-out">
                    <div class="scroll-by-count" data-count="5">
                        <div class="card mb-2 sh-11 sh-md-8">
                            <div class="card-body pt-0 pb-0 h-100">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-12 col-md-3 d-flex align-items-center mb-2 mb-md-0">
                                        <a href="/Quiz/Result" class="body-link text-truncate">Chemistry</a>
                                    </div>
                                    <div class="col-5 col-md-4 d-flex align-items-center text-medium justify-content-start justify-content-md-center text-muted">
                                        Kirby Peters
                                    </div>
                                    <div class="col-5 col-md-3 d-flex align-items-center justify-content-center text-muted">12.05.2021</div>
                                    <div class="col-2 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0 justify-content-end">
                                        <span class="badge bg-outline-primary py-1 px-3 text-small lh-1-5">B</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2 sh-11 sh-md-8">
                            <div class="card-body pt-0 pb-0 h-100">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-12 col-md-3 d-flex align-items-center mb-2 mb-md-0">
                                        <a href="/Quiz/Result" class="body-link text-truncate">Biology</a>
                                    </div>
                                    <div class="col-5 col-md-4 d-flex align-items-center text-medium justify-content-start justify-content-md-center text-muted">
                                        Olli Hawkins
                                    </div>
                                    <div class="col-5 col-md-3 d-flex align-items-center justify-content-center text-muted">11.05.2021</div>
                                    <div class="col-2 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0 justify-content-end">
                                        <span class="badge bg-outline-primary py-1 px-3 text-small lh-1-5">A</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2 sh-11 sh-md-8">
                            <div class="card-body pt-0 pb-0 h-100">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-12 col-md-3 d-flex align-items-center mb-2 mb-md-0">
                                        <a href="/Quiz/Result" class="body-link text-truncate">Gymnastics</a>
                                    </div>
                                    <div class="col-5 col-md-4 d-flex align-items-center text-medium justify-content-start justify-content-md-center text-muted">
                                        Emilia Antoine
                                    </div>
                                    <div class="col-5 col-md-3 d-flex align-items-center justify-content-center text-muted">08.05.2021</div>
                                    <div class="col-2 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0 justify-content-end">
                                        <span class="badge bg-outline-primary py-1 px-3 text-small lh-1-5">A</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2 sh-11 sh-md-8">
                            <div class="card-body pt-0 pb-0 h-100">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-12 col-md-3 d-flex align-items-center mb-2 mb-md-0">
                                        <a href="/Quiz/Result" class="body-link text-truncate">Physics</a>
                                    </div>
                                    <div class="col-5 col-md-4 d-flex align-items-center text-medium justify-content-start justify-content-md-center text-muted">
                                        Kathryn Mengel
                                    </div>
                                    <div class="col-5 col-md-3 d-flex align-items-center justify-content-center text-muted">06.05.2021</div>
                                    <div class="col-2 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0 justify-content-end">
                                        <span class="badge bg-outline-primary py-1 px-3 text-small lh-1-5">A</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2 sh-11 sh-md-8">
                            <div class="card-body pt-0 pb-0 h-100">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-12 col-md-3 d-flex align-items-center mb-2 mb-md-0">
                                        <a href="/Quiz/Result" class="body-link text-truncate">Geometry</a>
                                    </div>
                                    <div class="col-5 col-md-4 d-flex align-items-center text-medium justify-content-start justify-content-md-center text-muted">
                                        Daisy Hartley
                                    </div>
                                    <div class="col-5 col-md-3 d-flex align-items-center justify-content-center text-muted">06.05.2021</div>
                                    <div class="col-2 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0 justify-content-end">
                                        <span class="badge bg-outline-primary py-1 px-3 text-small lh-1-5">C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2 sh-11 sh-md-8">
                            <div class="card-body pt-0 pb-0 h-100">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-12 col-md-3 d-flex align-items-center mb-2 mb-md-0">
                                        <a href="/Quiz/Result" class="body-link text-truncate">History</a>
                                    </div>
                                    <div class="col-5 col-md-4 d-flex align-items-center text-medium justify-content-start justify-content-md-center text-muted">
                                        Winry Rockbell
                                    </div>
                                    <div class="col-5 col-md-3 d-flex align-items-center justify-content-center text-muted">04.05.2021</div>
                                    <div class="col-2 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0 justify-content-end">
                                        <span class="badge bg-outline-primary py-1 px-3 text-small lh-1-5">A</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2 sh-11 sh-md-8">
                            <div class="card-body pt-0 pb-0 h-100">
                                <div class="row g-0 h-100 align-content-center">
                                    <div class="col-12 col-md-3 d-flex align-items-center mb-2 mb-md-0">
                                        <a href="/Quiz/Result" class="body-link text-truncate">Biology</a>
                                    </div>
                                    <div class="col-5 col-md-4 d-flex align-items-center text-medium justify-content-start justify-content-md-center text-muted">
                                        Olli Hawkins
                                    </div>
                                    <div class="col-5 col-md-3 d-flex align-items-center justify-content-center text-muted">03.05.2021</div>
                                    <div class="col-2 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0 justify-content-end">
                                        <span class="badge bg-outline-primary py-1 px-3 text-small lh-1-5">A</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Exam Results End -->

            <!-- Homework Start -->
            <div class="col-lg-6 mb-5">
                <h2 class="small-title">Homework</h2>
                <div class="card sh-40 h-lg-100-card">
                    <div class="card-body d-flex align-items-center justify-content-center h-100">
                        <div class="text-center">
                            <img src="/img/illustration/icon-performance.webp" class="theme-filter mb-3" alt="launch" />
                            <p class="mb-3">Yay, no homework for the week!</p>
                            <a href="/Quiz/Result" class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                <i data-acorn-icon="chevron-right"></i>
                                <span>Results</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Homework End -->
        </div>

        <div class="row">
            <!-- Notifications Start -->
            <div class="col-xl-6 mb-5">
                <h2 class="small-title">Notifications</h2>
                <div class="card sh-40 h-xl-100-card">
                    <div class="card-body scroll-out h-100">
                        <div class="scroll h-100">
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-acorn-icon="circle" class="text-primary align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="text-alternate mt-n1 lh-1-25">Jujubes brownie marshmallow apple.</div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">18 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-acorn-icon="circle" class="text-primary align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="text-alternate mt-n1 lh-1-25">Pie fruitcake jelly beans.</div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">18 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-acorn-icon="square" class="text-secondary align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="text-alternate mt-n1 lh-1-25">Candy tootsie roll pie.</div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">16 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-acorn-icon="square" class="text-secondary align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="text-alternate mt-n1 lh-1-25">Liquorice chocolate bar toffee.</div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-acorn-icon="circle" class="text-primary align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="text-alternate mt-n1 lh-1-25">Tiramisu lemon drops tootsie.</div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="text-alternate mt-n1 lh-1-25">Chocolate bar chocolate bar tart.</div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="text-alternate mt-n1 lh-1-25">Bear claw cotton candy powder pastry.</div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-acorn-icon="triangle" class="text-warning align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="text-alternate mt-n1 lh-1-25">Chocolate bar chocolate bar tart.</div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">14 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="text-alternate mt-n1 lh-1-25">Gummi bears dessert muffin</div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="text-alternate mt-n1 lh-1-25">Apple pie candy sugar plum.</div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-acorn-icon="triangle" class="text-warning align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="text-alternate mt-n1 lh-1-25">Candy canes lemon drops.</div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <i data-acorn-icon="triangle" class="text-warning align-top"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="text-alternate mt-n1 lh-1-25">Sweet sugar plum liquorice.</div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Notifications End -->

            <!-- Materials Start -->
            <div class="col-xl-6 mb-5">
                <h2 class="small-title">Materials</h2>
                <div class="card mb-2 sh-17 sh-sm-8">
                    <div class="card-body py-0">
                        <div class="row h-100 align-content-center">
                            <div class="col-12 col-sm-auto mb-2 mb-sm-0 text-center text-sm-start">
                                <i data-acorn-icon="science" class="text-primary"></i>
                            </div>
                            <div class="col-12 col-sm mb-3 mb-sm-0 text-center text-sm-start">
                                <div class="text-alternate">Chemistry</div>
                            </div>
                            <div class="col-12 col-sm d-flex justify-content-center justify-content-sm-end">
                                <a href="/Misc/Material" class="btn btn-outline-primary py-1 px-3 text-small lh-1-5 me-1">NOTES</a>
                                <a href="/Misc/Syllabus" class="btn btn-outline-primary py-1 px-3 text-small lh-1-5">SYLLABUS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2 sh-17 sh-sm-8">
                    <div class="card-body py-0">
                        <div class="row h-100 align-content-center">
                            <div class="col-12 col-sm-auto mb-2 mb-sm-0 text-center text-sm-start">
                                <i data-acorn-icon="abacus" class="text-primary"></i>
                            </div>
                            <div class="col-12 col-sm mb-3 mb-sm-0 text-center text-sm-start">
                                <div class="text-alternate">Algebra</div>
                            </div>
                            <div class="col-12 col-sm d-flex justify-content-center justify-content-sm-end">
                                <a href="/Misc/Material" class="btn btn-outline-primary py-1 px-3 text-small lh-1-5 me-1">NOTES</a>
                                <a href="/Misc/Syllabus" class="btn btn-outline-primary py-1 px-3 text-small lh-1-5">SYLLABUS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2 sh-17 sh-sm-8">
                    <div class="card-body py-0">
                        <div class="row h-100 align-content-center">
                            <div class="col-12 col-sm-auto mb-2 mb-sm-0 text-center text-sm-start">
                                <i data-acorn-icon="flask" class="text-primary"></i>
                            </div>
                            <div class="col-12 col-sm mb-3 mb-sm-0 text-center text-sm-start">
                                <div class="text-alternate">Biology</div>
                            </div>
                            <div class="col-12 col-sm d-flex justify-content-center justify-content-sm-end">
                                <a href="/Misc/Material" class="btn btn-outline-primary py-1 px-3 text-small lh-1-5 me-1">NOTES</a>
                                <a href="/Misc/Syllabus" class="btn btn-outline-primary py-1 px-3 text-small lh-1-5">SYLLABUS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2 sh-17 sh-sm-8">
                    <div class="card-body py-0">
                        <div class="row h-100 align-content-center">
                            <div class="col-12 col-sm-auto mb-2 mb-sm-0 text-center text-sm-start">
                                <i data-acorn-icon="book-open" class="text-primary"></i>
                            </div>
                            <div class="col-12 col-sm mb-3 mb-sm-0 text-center text-sm-start">
                                <div class="text-alternate">History</div>
                            </div>
                            <div class="col-12 col-sm d-flex justify-content-center justify-content-sm-end">
                                <a href="/Misc/Material" class="btn btn-outline-primary py-1 px-3 text-small lh-1-5 me-1">NOTES</a>
                                <a href="/Misc/Syllabus" class="btn btn-outline-primary py-1 px-3 text-small lh-1-5">SYLLABUS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Materials End -->
        </div>

        <!-- Teachers Start -->
        <h2 class="small-title">Teachers</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-6 g-2">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="sw-13 position-relative mb-3 mx-auto">
                            <img src="/img/profile/profile-1.webp" class="img-fluid rounded-xl" alt="thumb" />
                        </div>
                        <a href="/Instructor/Detail" class="mb-3 stretched-link body-link">Blaine Cottrell</a>
                        <div class="text-muted text-medium mb-2">Chemistry</div>
                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="text-muted d-inline-block text-small align-text-top">(572)</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="sw-13 position-relative mb-3 mx-auto">
                            <img src="/img/profile/profile-2.webp" class="img-fluid rounded-xl" alt="thumb" />
                        </div>
                        <a href="/Instructor/Detail" class="mb-3 stretched-link body-link">Kirby Peters</a>
                        <div class="text-muted text-medium mb-2">Geometry</div>
                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="text-muted d-inline-block text-small align-text-top">(211)</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="sw-13 position-relative mb-3 mx-auto">
                            <img src="/img/profile/profile-3.webp" class="img-fluid rounded-xl" alt="thumb" />
                        </div>
                        <a href="/Instructor/Detail" class="mb-3 stretched-link body-link">Olli Hawkins</a>
                        <div class="text-muted text-medium mb-2">Physics</div>
                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="text-muted d-inline-block text-small align-text-top">(28)</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="sw-13 position-relative mb-3 mx-auto">
                            <img src="/img/profile/profile-4.webp" class="img-fluid rounded-xl" alt="thumb" />
                        </div>
                        <a href="/Instructor/Detail" class="mb-3 stretched-link body-link">Emilia Antoine</a>
                        <div class="text-muted text-medium mb-2">Gymnastics</div>
                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="text-muted d-inline-block text-small align-text-top">(75)</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="sw-13 position-relative mb-3 mx-auto">
                            <img src="/img/profile/profile-5.webp" class="img-fluid rounded-xl" alt="thumb" />
                        </div>
                        <a href="/Instructor/Detail" class="mb-3 stretched-link body-link">Kathryn Mengel</a>
                        <div class="text-muted text-medium mb-2">Biology</div>
                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="text-muted d-inline-block text-small align-text-top">(46)</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="sw-13 position-relative mb-3 mx-auto">
                            <img src="/img/profile/profile-6.webp" class="img-fluid rounded-xl" alt="thumb" />
                        </div>
                        <a href="/Instructor/Detail" class="mb-3 stretched-link body-link">Daisy Hartley</a>
                        <div class="text-muted text-medium mb-2">Gymnastics</div>
                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="text-muted d-inline-block text-small align-text-top">(91)</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Teachers End -->

        <!-- Content End -->
    </div>
@endsection
