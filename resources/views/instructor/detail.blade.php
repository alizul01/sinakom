@php
    $html_tag_data = [];
    $title = 'Instructor Detail';
    $description= 'Acorn elearning platform instructor detail.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
@endsection

@section('js_vendor')
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/instructor.detail.js"></script>
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
                            <li class="breadcrumb-item"><a href="/Instructor/List">Instructors</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->
        <div class="row g-5">
            <!-- Left Side Start -->
            <div class="col-12 col-xl-4 col-xxl-3">
                <!-- Biography Start -->
                <h2 class="small-title">About</h2>
                <div class="card">
                    <div class="card-body mb-n5">
                        <div class="d-flex align-items-center flex-column mb-5">
                            <div class="mb-4 d-flex align-items-center flex-column">
                                <div class="sw-13 position-relative mb-3">
                                    <img src="/img/profile/profile-6.webp" class="img-fluid rounded-xl" alt="thumb" />
                                </div>
                                <div class="h5 mb-0">Eneida Farzana</div>
                                <div class="text-muted mb-2">Spanish</div>
                                <div class="text-muted text-center">Cake oat cake sugar plum caramels fruitcake tart dessert jelly beans pudding.</div>
                            </div>
                            <div class="d-flex flex-row justify-content-between w-100 w-sm-50 w-xl-100">
                                <button type="button" class="btn btn-primary w-100 me-2">Courses</button>
                                <button type="button" class="btn btn-outline-primary w-100 me-2">Follow</button>
                                <button class="btn btn-icon btn-icon-only btn-outline-primary" type="button">
                                    <i data-acorn-icon="more-horizontal"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mb-5">
                            <p class="text-small text-muted mb-2">ABOUT ME</p>
                            <p>
                                Jujubes brownie marshmallow apple pie donut ice cream jelly-o jelly-o gummi bears. Tootsie roll chocolate bar dragée bonbon cheesecake
                                icing. Danish wafer donut cookie caramels gummies topping.
                            </p>
                        </div>
                        <div class="mb-5">
                            <p class="text-small text-muted mb-2">CONTACT</p>
                            <a href="#" class="d-block body-link mb-1">
                                <i data-acorn-icon="screen" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">blainecottrell.com</span>
                            </a>
                            <a href="#" class="d-block body-link">
                                <i data-acorn-icon="email" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">contact@blainecottrell.com</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Biography End -->
            </div>
            <!-- Left Side End -->

            <!-- Right Side Start -->
            <div class="col-12 col-xl-8 col-xxl-9">
                <!-- Stats Start -->
                <h2 class="small-title">Stats</h2>
                <div class="row g-3 mb-5">
                    <div class="col-12 col-lg-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                    <span>Courses</span>
                                    <i data-acorn-icon="presentation" class="text-primary"></i>
                                </div>
                                <div class="text-medium text-muted mb-1">
                                    <span class="text-medium">3 New</span>
                                </div>
                                <div class="cta-1 text-primary">35</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                    <span>Rating</span>
                                    <i data-acorn-icon="star" class="text-primary"></i>
                                </div>
                                <div class="text-medium text-muted mb-1">
                                    <span class="text-medium">345 Users</span>
                                </div>
                                <div class="cta-1 text-primary">4.85</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                    <span>Trainee</span>
                                    <i data-acorn-icon="diploma" class="text-primary"></i>
                                </div>
                                <div class="text-medium text-muted mb-1">
                                    <span class="text-medium">~456 Monthly</span>
                                </div>
                                <div class="cta-1 text-primary">24.453</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                    <span>Content</span>
                                    <i data-acorn-icon="clock" class="text-primary"></i>
                                </div>
                                <div class="text-medium text-muted mb-1">
                                    <span class="text-medium">~15 Hours Weekly</span>
                                </div>
                                <div class="cta-1 text-primary">245 Hours</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Stats End -->

                <!-- Courses Start -->
                <div class="d-flex justify-content-between">
                    <h2 class="small-title">Courses</h2>
                    <button class="btn btn-icon btn-icon-end btn-xs btn-background-alternate p-0 text-small" type="button">
                        <span class="align-bottom">View All</span>
                        <i data-acorn-icon="chevron-right" class="align-middle" data-acorn-size="12"></i>
                    </button>
                </div>
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
                </div>
                <!-- Courses End -->

                <!-- Reviews Start -->
                <div class="d-flex justify-content-between">
                    <h2 class="small-title">Reviews</h2>
                    <button class="btn btn-icon btn-icon-end btn-xs btn-background-alternate p-0 text-small" type="button">
                        <span class="align-bottom">View All</span>
                        <i data-acorn-icon="chevron-right" class="align-middle" data-acorn-size="12"></i>
                    </button>
                </div>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="d-flex align-items-center border-bottom border-separator-light pb-3">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="/img/profile/profile-1.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <div>Cherish Kerr</div>
                                    <div class="text-muted text-small mb-2">2 days ago</div>
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-medium text-alternate lh-1-25">Macaroon!</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom border-separator-light pb-3 mt-3">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="/img/profile/profile-2.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <div>Olli Hawkins</div>
                                    <div class="text-muted text-small mb-2">3 days ago</div>
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-medium text-alternate lh-1-25">Cupcake cake fruitcake. Powder chocolate bar soufflé gummi bears topping donut.</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom border-separator-light pb-3 mt-3">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="/img/profile/profile-3.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <div>Kirby Peters</div>
                                    <div class="text-muted text-small mb-2">3 days ago</div>
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-medium text-alternate lh-1-25">Nice, very tasty.</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center pb-3 mt-3">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="/img/profile/profile-4.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <div>Zayn Hartley</div>
                                    <div class="text-muted text-small mb-2">1 week ago</div>
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-medium text-alternate lh-1-25">
                                        Chupa chups topping pastry halvah. Jelly cake jelly sesame snaps jelly beans jelly beans. Biscuit powder brownie powder sesame snaps
                                        jelly-o dragée cake. Pie tiramisu cake jelly lemon drops. Macaroon sugar plum apple pie carrot cake jelly beans chocolate.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Reviews End -->
            </div>
        </div>
        <!-- Content End -->
    </div>
@endsection
