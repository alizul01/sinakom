@php
    $html_tag_data = [];
    $title = 'Course List';
    $description= 'Acorn elearning platform course list.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
@endsection

@section('js_vendor')
    <script src="/js/vendor/movecontent.js"></script>
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/course.list.js"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row g-0">
                <div class="col-auto mb-2 mb-md-0 me-auto">
                    <div class="w-auto sw-md-30">
                        <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}/h1>
                            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                                <ul class="breadcrumb pt-0">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="/Course/Explore">Courses</a></li>
                                </ul>
                            </nav>
                    </div>
                </div>
                <div class="col-auto d-flex d-lg-none align-items-start mb-2 mb-md-0 order-md-1">
                    <button type="button" class="btn btn-primary btn-icon btn-icon-only ms-1" id="menuButton">
                        <i data-acorn-icon="menu-left"></i>
                    </button>
                </div>
                <div class="col-12 col-md d-flex align-items-start justify-content-end justify-content-lg-start">
                    <div class="me-lg-auto w-100 w-md-auto search-input-container border border-separator">
                        <input class="form-control search" type="text" autocomplete="off" placeholder="Search" id="taskSearch" />
                        <span class="search-magnifier-icon">
            <i data-acorn-icon="search"></i>
          </span>
                    </div>
                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start ms-1">
                        <i data-acorn-icon="sort"></i>
                        <span>Sort</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->
        <div class="row g-0">
            <div class="col-auto d-none d-lg-flex">
                <div class="nav flex-column sw-30 pe-7" id="menuColumn">
                    <!-- Content of this will be moved from #menuMoveContent div based on the responsive breakpoint.  -->
                </div>
            </div>

            <div class="col">
                <!-- List Items Start -->
                <div class="row g-3 row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-4 mb-5">
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
                                    <div class="text-muted d-inline-block text-small align-text-top">(39)</div>
                                </div>
                                <div class="card-text mb-0">
                                    <div class="text-muted text-overline text-small">
                                        <del>$ 36.50</del>
                                    </div>
                                    <div>$ 28.75</div>
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
                                    <div class="text-muted d-inline-block text-small align-text-top">(221)</div>
                                </div>
                                <div class="card-text mb-0">
                                    <div class="text-muted text-overline text-small">
                                        <del>$ 44.80</del>
                                    </div>
                                    <div>$ 34.20</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-3 z-index-1">POPULAR</span>
                            <img src="/img/course/small/course-3.webp" class="card-img-top sh-22" alt="card image" />
                            <div class="card-body">
                                <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Learn and Understand NodeJS</a></h5>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="mb-2">
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="4">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-muted d-inline-block text-small align-text-top">(338)</div>
                                </div>
                                <div class="card-text mb-0">
                                    <div class="text-muted text-overline text-small">
                                        <del>$ 38.50</del>
                                    </div>
                                    <div>$ 29.15</div>
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
                                    <div class="text-muted d-inline-block text-small align-text-top">(25)</div>
                                </div>
                                <div class="card-text mb-0">
                                    <div class="text-muted text-overline text-small">
                                        <del>$ 28.90</del>
                                    </div>
                                    <div>$ 22.25</div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <img src="/img/course/small/course-6.webp" class="card-img-top sh-22" alt="card image" />
                            <div class="card-body">
                                <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Introduction to Sass with Full Website</a></h5>
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
                    <div class="col">
                        <div class="card h-100">
                            <img src="/img/course/small/course-9.webp" class="card-img-top sh-22" alt="card image" />
                            <div class="card-body">
                                <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">10 Real Life C++ Projects</a></h5>
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
                            <img src="/img/course/small/course-10.webp" class="card-img-top sh-22" alt="card image" />
                            <div class="card-body">
                                <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Introduction to Ubuntu: Best Practices for Beginners</a></h5>
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
                            <img src="/img/course/small/course-6.webp" class="card-img-top sh-22" alt="card image" />
                            <div class="card-body">
                                <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Introduction to Sass with Full Website</a></h5>
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
                <div class="row">
                    <div class="col-12 text-center">
                        <button class="btn btn-outline-primary sw-25">Load More</button>
                    </div>
                </div>
                <!-- List Items End -->
            </div>
        </div>

        <!-- Menu Content Start -->
        <div class="modal modal-right fade" id="menuModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Course Filters</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Content of below will be moved to #menuColumn or back in here based on the data-move-breakpoint attribute below -->
                        <!-- Content will be here if the screen size is smaller than lg -->
                        <div id="menuMoveContent" data-move-target="#menuColumn" data-move-breakpoint="lg">
                            <div class="menu-items">
                                <div class="mb-5">
                                    <p class="text-small text-muted mb-2">CATEGORY</p>
                                    <div class="mt-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="category1" />
                                            <label class="form-check-label" for="category1">Bread</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="category2" />
                                            <label class="form-check-label" for="category2">Cake</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="category3" />
                                            <label class="form-check-label" for="category3">Fruit</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="category4" />
                                            <label class="form-check-label" for="category4">Vegetable</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="category5" />
                                            <label class="form-check-label" for="category5">Sandwich</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <p class="text-small text-muted mb-2">DURATION</p>
                                    <div class="mt-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="duration1" />
                                            <label class="form-check-label" for="duration1">0-5 Hours</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="duration2" />
                                            <label class="form-check-label" for="duration2">5-10 Hours</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="duration3" />
                                            <label class="form-check-label" for="duration3">10-20 Hours</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="duration4" />
                                            <label class="form-check-label" for="duration4">20-50 Hours</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="duration5" />
                                            <label class="form-check-label" for="duration5">50-100 Hours</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <p class="text-small text-muted mb-2">PRICE</p>
                                    <div class="row g-1">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Min" />
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Max" />
                                        </div>
                                        <div class="col-auto">
                                            <button class="btn btn-icon btn-icon-only btn-outline-primary" type="button">
                                                <i data-acorn-icon="chevron-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <p class="text-small text-muted mb-2">SEARCH</p>
                                    <div class="row g-1">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Keyword" />
                                        </div>
                                        <div class="col-auto">
                                            <button class="btn btn-icon btn-icon-only btn-outline-primary" type="button">
                                                <i data-acorn-icon="chevron-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <p class="text-small text-muted mb-2">RATING</p>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="ratings" id="rating5" />
                                        <div class="form-check-label">
                                            <div class="br-wrapper br-theme-cs-icon d-inline-block pe-none">
                                                <select class="rating-filter" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="ratings" id="rating4" />
                                        <div class="form-check-label">
                                            <div class="br-wrapper br-theme-cs-icon d-inline-block pe-none">
                                                <select class="rating-filter" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="4">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="ratings" id="rating3" />
                                        <div class="form-check-label">
                                            <div class="br-wrapper br-theme-cs-icon d-inline-block pe-none">
                                                <select class="rating-filter" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="3">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="ratings" id="rating2" />
                                        <div class="form-check-label">
                                            <div class="br-wrapper br-theme-cs-icon d-inline-block pe-none">
                                                <select class="rating-filter" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="2">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="ratings" id="rating1" />
                                        <div class="form-check-label">
                                            <div class="br-wrapper br-theme-cs-icon d-inline-block pe-none">
                                                <select class="rating-filter" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="1">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <div class="d-flex flex-row justify-content-between w-100">
                                        <button type="button" class="btn btn-outline-primary w-100 me-2">Clear</button>
                                        <button type="button" class="btn btn-primary w-100">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu Content End -->

        <!-- Content End -->
    </div>
@endsection
