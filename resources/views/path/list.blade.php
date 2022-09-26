@php
    $html_tag_data = [];
    $title = 'Path List';
    $description= 'Acorn elearning platform path list.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
    <script src="/js/pages/path.list.js"></script>
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

        <!-- Your Paths Start -->
        <div class="d-flex justify-content-between">
            <h2 class="small-title">Your Paths</h2>
            <button class="btn btn-icon btn-icon-end btn-xs btn-background-alternate p-0 text-small" type="button">
                <span class="align-bottom">View All</span>
                <i data-acorn-icon="chevron-right" class="align-middle" data-acorn-size="12"></i>
            </button>
        </div>
        <div class="row g-3 mb-5">
            <div class="col-xl-6">
                <div class="card">
                    <div class="row g-0 h-auto sh-sm-23">
                        <div class="col-12 col-sm-auto h-100 p-5 pb-0 pb-lg-5 text-center">
                            <img src="/img/illustration/icon-launch.webp" alt="path" class="card-img w-auto theme-filter" />
                        </div>
                        <div class="col-12 col-sm p-0 h-100">
                            <div class="card-body ps-lg-0">
                                <div class="d-flex flex-row justify-content-between mb-2">
                                    <div class="heading body-link mb-0">Becoming a Frontend Developer</div>
                                    <div class="text-muted">60%</div>
                                </div>
                                <div class="progress mb-2">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="text-muted mb-2 clamp-line" data-line="2">
                                    Sweet roll apple pie tiramisu halvah muffin dragée gummies sugar plum macaroon tiramisu bonbon sugar chocolate.
                                </div>
                                <a href="/Path/Detail" class="btn btn-link btn-icon btn-icon-end ps-0 p-1 stretched-link">
                                    <span>Continue</span>
                                    <i data-acorn-icon="chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="row g-0 h-auto sh-sm-23">
                        <div class="col-12 col-sm-auto h-100 p-5 pb-0 pb-lg-5 text-center">
                            <img src="/img/illustration/icon-experiment.webp" alt="path" class="card-img w-auto theme-filter" />
                        </div>
                        <div class="col-12 col-sm p-0 h-100">
                            <div class="card-body ps-lg-0">
                                <div class="d-flex flex-row justify-content-between mb-2">
                                    <div class="heading body-link mb-0">Code Master</div>
                                    <div class="text-muted">25%</div>
                                </div>
                                <div class="progress mb-2">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="text-muted mb-2 clamp-line" data-line="2">
                                    Tiramisu lemon drops tootsie roll macaroon tootsie roll topping brownie croissant tart halvah bear claw.
                                </div>
                                <a href="/Path/Detail" class="btn btn-link btn-icon btn-icon-end ps-0 p-1 stretched-link">
                                    <span>Continue</span>
                                    <i data-acorn-icon="chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Your Paths End -->

        <!-- Popular Paths Start -->
        <h2 class="small-title">Popular Paths</h2>
        <div class="row g-3 row-cols-1 row-cols-lg-2 row-cols-xxl-3 mb-5">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/img/illustration/icon-performance.webp" class="theme-filter" alt="performance" />
                            <div class="d-flex flex-column sh-5">
                                <a href="/Path/Detail" class="heading stretched-link">Becoming a CSS Developer</a>
                            </div>
                        </div>
                        <div class="text-muted text-center">
                            Sweet roll apple pie tiramisu bonbon sugar plum muffin sesame snaps chocolate. Lollipop halvah powder.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/img/illustration/icon-experiment.webp" class="theme-filter" alt="experiment" />
                            <div class="d-flex flex-column sh-5">
                                <a href="/Path/Detail" class="heading stretched-link">Designer by Trade</a>
                            </div>
                        </div>
                        <div class="text-muted text-center">Chocolate cake marshmallow bear claw sweet. Apple pie macaroon sesame snaps candy jelly pudding.</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/img/illustration/icon-storage.webp" class="theme-filter" alt="storage" />
                            <div class="d-flex flex-column sh-5">
                                <a href="/Path/Detail" class="heading stretched-link">Javascript in the Server</a>
                            </div>
                        </div>
                        <div class="text-muted text-center">Cheesecake chocolate carrot cake pie lollipop lemon drops toffee lollipop.</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/img/illustration/icon-accounts.webp" class="theme-filter" alt="people" />
                            <div class="d-flex flex-column sh-5">
                                <a href="/Path/Detail" class="heading stretched-link">Responsive Master</a>
                            </div>
                        </div>
                        <div class="text-muted text-center">Cake tart apple pie bear bonbon sugar plum muffin sesame snaps sweet roll gingerbread bonbon sugar.</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/img/illustration/icon-performance.webp" class="theme-filter" alt="performance" />
                            <div class="d-flex flex-column sh-5">
                                <a href="/Path/Detail" class="heading stretched-link">Going Fullstack</a>
                            </div>
                        </div>
                        <div class="text-muted text-center">
                            Sweet roll apple pie tiramisu bonbon sugar plum muffin sesame snaps chocolate. Lollipop halvah powder.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/img/illustration/icon-experiment.webp" class="theme-filter" alt="experiment" />
                            <div class="d-flex flex-column sh-5">
                                <a href="/Path/Detail" class="heading stretched-link">Serverside Chemistry</a>
                            </div>
                        </div>
                        <div class="text-muted text-center">Chocolate cake marshmallow bear claw sweet. Apple pie macaroon sesame snaps candy jelly pudding.</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Paths End -->

        <!-- Science Behind the Paths Start -->
        <h2 class="small-title">Science Behind the Paths</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-3">
            <div class="col">
                <div class="card mb-5">
                    <a href="#">
                        <img src="/img/blog/blog-image-5.webp" class="card-img-top sh-30 theme-filter" alt="card image" />
                    </a>
                    <div class="card-body">
                        <div class="mb-2">
                            <a href="#" class="heading">How the Paths are Created</a>
                        </div>
                        <p class="text-alternate sh-5 clamp-line mb-0" data-line="2">
                            Jujubes brownie marshmallow apple pie donut ice cream jelly-o jelly-o gummi bears. Tootsie roll chocolate bar dragée bonbon cheesecake
                            icing. Danish wafer donut cookie caramels gummies topping.
                        </p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="d-flex align-items-center">
                            <div class="sw-5 d-inline-block position-relative me-3">
                                <img src="/img/profile/profile-1.webp" class="img-fluid rounded-xl" alt="thumb" />
                            </div>
                            <div class="d-inline-block">
                                <a href="#">Olli Hawkins</a>
                                <div class="text-muted text-small">Development Lead</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-5">
                    <a href="#">
                        <img src="/img/blog/blog-image-6.webp" class="card-img-top sh-30 theme-filter" alt="card image" />
                    </a>
                    <div class="card-body">
                        <div class="mb-2">
                            <a href="#" class="heading">Why Should You Take a Path</a>
                        </div>
                        <p class="text-alternate sh-5 clamp-line mb-0" data-line="2">
                            Jujubes brownie marshmallow apple pie donut ice cream jelly-o jelly-o gummi bears. Tootsie roll chocolate bar dragée bonbon cheesecake
                            icing. Danish wafer donut cookie caramels gummies topping.
                        </p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="d-flex align-items-center">
                            <div class="sw-5 d-inline-block position-relative me-3">
                                <img src="/img/profile/profile-2.webp" class="img-fluid rounded-xl" alt="thumb" />
                            </div>
                            <div class="d-inline-block">
                                <a href="#">Laurent Wilma</a>
                                <div class="text-muted text-small">Community Lead</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-5">
                    <a href="#">
                        <img src="/img/blog/blog-image-7.webp" class="card-img-top sh-30 theme-filter" alt="card image" />
                    </a>
                    <div class="card-body">
                        <div class="mb-2">
                            <a href="#" class="heading">Benefits of Learning with a Path</a>
                        </div>
                        <p class="text-alternate sh-5 clamp-line mb-0" data-line="2">
                            Jujubes brownie marshmallow apple pie donut ice cream jelly-o jelly-o gummi bears. Tootsie roll chocolate bar dragée bonbon cheesecake
                            icing. Danish wafer donut cookie caramels gummies topping.
                        </p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="d-flex align-items-center">
                            <div class="sw-5 d-inline-block position-relative me-3">
                                <img src="/img/profile/profile-5.webp" class="img-fluid rounded-xl" alt="thumb" />
                            </div>
                            <div class="d-inline-block">
                                <a href="#">Ryland Darrin</a>
                                <div class="text-muted text-small">Learning Expert</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-5">
                    <a href="#">
                        <img src="/img/blog/blog-image-8.webp" class="card-img-top sh-30 theme-filter" alt="card image" />
                    </a>
                    <div class="card-body">
                        <div class="mb-2">
                            <a href="#" class="heading">Path Courses and Quizes</a>
                        </div>
                        <p class="text-alternate sh-5 clamp-line mb-0" data-line="2">
                            Jujubes brownie marshmallow apple pie donut ice cream jelly-o jelly-o gummi bears. Tootsie roll chocolate bar dragée bonbon cheesecake
                            icing. Danish wafer donut cookie caramels gummies topping.
                        </p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="d-flex align-items-center">
                            <div class="sw-5 d-inline-block position-relative me-3">
                                <img src="/img/profile/profile-3.webp" class="img-fluid rounded-xl" alt="thumb" />
                            </div>
                            <div class="d-inline-block">
                                <a href="#">Eneida Farzana</a>
                                <div class="text-muted text-small">Quiz Designer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Science Behind the Paths End -->

        <!-- Content End -->
    </div>
@endsection
