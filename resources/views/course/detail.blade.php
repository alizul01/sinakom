@php
    $html_tag_data = [];
    $title = 'Course Detail';
    $heading ='Bread Making Techniques';
    $description= 'Acorn elearning platform course detail.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
    <link rel="stylesheet" href="/css/vendor/plyr.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/plyr.min.js"></script>
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/course.detail.js"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-sm-6">
                    <h1 class="mb-0 pb-0 display-4" id="title">Advanced Techniques with Gulpjs</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/Course/Explore">Courses</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="col-12 col-sm-6 d-flex align-items-start justify-content-end">
                    <!-- Start Now Start -->
                    <a href="/Misc/Player" class="btn btn-primary btn-icon btn-icon-start w-100 w-sm-auto">
                        <i data-acorn-icon="chevron-right"></i>
                        <span>Start Now</span>
                    </a>
                    <!-- Start Now End -->
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->

        <div class="row">
            <!-- Left Side Start -->
            <div class="col-12 col-xxl-8 mb-5">
                <!-- Preview Start -->
                <h2 class="small-title">Preview</h2>
                <div class="card mb-5">
                    <div class="card-img-top">
                        <video class="player sh-50 cover" poster="/img/course/large/course-1.webp" id="videoPlayer">
                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" />
                        </video>
                    </div>
                    <div class="card-body">
                        <h6>Cookie Macaroon</h6>
                        <p class="mb-4">
                            Liquorice caramels apple pie chupa chups bonbon. Jelly-o candy apple pie sugar plum icing chocolate cake lollipop jujubes bear claw. Pastry
                            sweet roll carrot cake cake macaroon gingerbread cookie.Candy pie sweet roll biscuit marzipan. Chocolate bar candy canes macaroon liquorice
                            danish biscuit biscuit.
                        </p>
                        <h6>Muffin</h6>
                        <p class="mb-4">
                            Tiramisu toffee brownie sweet roll sesame snaps halvah. Icing carrot cake cupcake gummi bears danish. Sesame snaps muffin macaroon tiramisu
                            ice cream. Liquorice caramels apple pie chupa chups bonbon. Jelly-o candy apple pie sugar plum icing chocolate cake lollipop jujubes bear
                            claw. Pastry sweet roll carrot cake cake macaroon gingerbread cookie.
                        </p>
                        <h6>Liquorice</h6>
                        <p class="mb-4">
                            Snaps muffin macaroon tiramisu ice cream toffee carrot sesame tootsie roll.Brownie ice cream marshmallow topping. Icing liquorice oat cake
                            caramels. Sugar plum gummi bears jujubes cookie jelly-o tootsie roll chocolate bar. Jujubes candy jelly-o topping lemon drops. Cupcake
                            gingerbread cookie cookie lemon drops tootsie roll lollipop. Tiramisu toffee brownie sweet roll sesame snaps halvah. Icing carrot cake
                            cupcake gummi bears danish.
                        </p>
                        <h6>Powder Cake</h6>
                        <p class="mb-4">
                            Sesame snaps brownie gummi bears tootsie roll caramels dragée. Powder cake gummies jelly beans toffee carrot cake bonbon powder muffin.
                            Jujubes candy jelly-o topping lemon drops. Cupcake gingerbread cookie cookie lemon drops tootsie roll lollipop. Liquorice caramels apple pie
                            chupa chups bonbon. Jelly-o candy apple pie sugar plum icing chocolate cake lollipop jujubes bear claw. Pastry sweet roll carrot cake cake
                            macaroon gingerbread cookie.Carrot cake jelly-o lemon drops toffee tootsie roll. Brownie topping toffee apple pie apple pie. Wafer pudding
                            chocolate bar pastry bear claw tart carrot cake lemon drops icing. Gingerbread toffee topping. Tootsie roll cotton candy muffin cheesecake
                            liquorice sweet. Sugar plum tart tart marshmallow chocolate wafer apple pie candy canes. Chocolate cake biscuit donut cotton candy soufflé
                            cake macaroon. Halvah chocolate cotton candy sweet roll jelly-o candy danish dragée. Apple pie cotton candy tiramisu biscuit cake muffin
                            tootsie roll bear claw cake. Cupcake cake fruitcake.
                        </p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row align-items-center">
                            <div class="col-6">
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
                            <div class="col-6 text-muted">
                                <div class="row g-0 justify-content-end">
                                    <div class="col-auto pe-3">
                                        <i data-acorn-icon="eye" class="text-primary me-1" data-acorn-size="15"></i>
                                        <span class="align-middle">4.8K</span>
                                    </div>
                                    <div class="col-auto">
                                        <i data-acorn-icon="message" class="text-primary me-1" data-acorn-size="15"></i>
                                        <span class="align-middle">12</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Preview End -->

                <!-- Table of Contents Start -->
                <h2 class="small-title">Table of Contents</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1"></div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="h-100">
                                    <div class="d-flex flex-column justify-content-start">
                                        <div class="d-flex flex-column">
                                            <p class="heading">01. Dashboards</p>
                                            <ul class="list-unstyled">
                                                <li>- Danish brownie fruitcake tootsie</li>
                                                <li>- Fruitcake tart dessert</li>
                                                <li>- Bar carrot cake</li>
                                                <li>- Snaps muffin macaroon tiramisu</li>
                                                <li>- Ice cream marshmallow</li>
                                                <li>- Plum caramels fruitcake</li>
                                                <li>- Chocolate bar carrot cake</li>
                                                <li>- Cotton candy gummies</li>
                                                <li>- Danish cake gummies jelly</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="h-100">
                                    <div class="d-flex flex-column">
                                        <p class="heading">02. Applications</p>
                                        <ul class="list-unstyled">
                                            <li>- Ice cream marshmallow</li>
                                            <li>- Plum caramels fruitcake</li>
                                            <li>- Chocolate bar carrot cake</li>
                                            <li>- Danish brownie fruitcake tootsie</li>
                                            <li>- Fruitcake tart dessert</li>
                                            <li>- Bar carrot cake</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="h-100">
                                    <div class="d-flex flex-column">
                                        <p class="heading">03. Interface</p>
                                        <ul class="list-unstyled">
                                            <li>- Ice cream marshmallow</li>
                                            <li>- Plum caramels fruitcake</li>
                                            <li>- Chocolate bar carrot cake</li>
                                            <li>- Danish brownie fruitcake tootsie</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="h-100">
                                    <div class="d-flex flex-column">
                                        <p class="heading">04. Conclusion</p>
                                        <ul class="list-unstyled">
                                            <li>- Chocolate bar carrot cake</li>
                                            <li>- Danish brownie fruitcake tootsie</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="h-100">
                                    <div class="d-flex flex-column">
                                        <p class="heading">05. What is Next?</p>
                                        <ul class="list-unstyled">
                                            <li>- Danish brownie fruitcake tootsie</li>
                                            <li>- Fruitcake tart dessert</li>
                                            <li>- Bar carrot cake</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative"></div>
                            </div>
                            <div class="col">
                                <div class="h-100">
                                    <div class="d-flex flex-column justify-content-start">
                                        <div class="d-flex flex-column">
                                            <p class="heading">06. Credits</p>
                                            <ul class="list-unstyled">
                                                <li>- Chocolate bar carrot cake</li>
                                                <li>- Danish brownie fruitcake tootsie</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table of Contents End -->

                <!-- Reviews Start -->
                <h2 class="small-title">Reviews</h2>
                <div class="card">
                    <div class="card-body">
                        <!-- Total Rating Start -->
                        <div class="row mb-5">
                            <div class="col-12 col-sm-auto mb-3 mb-sm-0">
                                <div
                                        class="w-100 sw-sm-19 sw-md-23 border border-separator-light sh-16 rounded-md d-flex flex-column align-items-center justify-content-center">
                                    <div class="cta-1 text-alternate mb-2">4.8</div>
                                    <div>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <span class="text-muted">(22)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="progress mb-1">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <span class="me-3 text-muted text-small">%80</span>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="progress mb-1">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <span class="me-3 text-muted text-small">%10</span>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="4">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="progress mb-1">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <span class="me-3 text-muted text-small">%5</span>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="3">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="progress mb-1">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <span class="me-3 text-muted text-small">%0</span>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="2">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="progress mb-1">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <span class="me-3 text-muted text-small">%5</span>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="1">
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
                        </div>
                        <!-- Total Rating End -->

                        <!-- Comments Start -->
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
                        <div class="d-flex align-items-center mt-3">
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
                        <!-- Comments End -->
                    </div>
                </div>
                <!-- Reviews End -->
            </div>
            <!-- Left Side End -->

            <!-- Right Side Start -->
            <div class="col-12 col-xxl-4 mb-n5">
                <!-- At a Glance Start -->
                <h2 class="small-title">At a Glance</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row g-0 align-items-center mb-3">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="clock" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">Duration</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">14 Hours</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-3">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="presentation" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">Content</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">8 Chapters</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-3">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="diploma" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">Level</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">Beginner</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-3">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="calendar" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">Release</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">05.11.2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-3">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="star" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">Rating</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">4.8 (843)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-0">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <i data-acorn-icon="graduation" class="text-primary"></i>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">Completed By</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">1.522</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- At a Glance End -->

                <!-- Tags Start -->
                <h2 class="small-title">Tags</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-alternate mb-1 me-1" type="button">
                            <span>Food (12)</span>
                        </button>
                        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-alternate mb-1 me-1" type="button">
                            <span>Baking (3)</span>
                        </button>
                        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-alternate mb-1 me-1" type="button">
                            <span>Sweet (1)</span>
                        </button>
                        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-alternate mb-1 me-1" type="button">
                            <span>Molding (3)</span>
                        </button>
                        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-alternate mb-1 me-1" type="button">
                            <span>Pastry (5)</span>
                        </button>
                        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-alternate mb-1 me-1" type="button">
                            <span>Healthy (7)</span>
                        </button>
                        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-alternate mb-1 me-1" type="button">
                            <span>Rye (3)</span>
                        </button>
                        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-alternate mb-1 me-1" type="button">
                            <span>Simple (3)</span>
                        </button>
                    </div>
                </div>
                <!-- Tags End -->

                <!-- Badges Start -->
                <h2 class="small-title">Badges</h2>
                <div class="card mb-2 sh-15">
                    <div class="card-body text-center align-items-center d-flex flex-row">
                        <div class="d-flex sw-6 sh-6 bg-gradient-light align-items-center justify-content-center rounded-xl position-relative ms-1">
                            <i data-acorn-icon="badge" class="text-white"></i>
                            <div class="achievement bg position-absolute">
                                <svg width="75" height="75" viewBox="0 0 75 75" fill="black" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M15.3422 7.24333C21.5482 2.69119 29.2117 0 37.5 0C45.7883 0 53.4518 2.69119 59.6578 7.24333C60.5562 7.90233 60.7431 9.15516 60.0752 10.0416C59.4073 10.9281 58.1375 11.1124 57.2391 10.4534C51.7048 6.39402 44.8833 4 37.5 4C30.1167 4 23.2952 6.39403 17.7609 10.4535C16.8625 11.1124 15.5927 10.9281 14.9248 10.0416C14.2569 9.15516 14.4438 7.90233 15.3422 7.24333ZM65.0942 15.1001C66.006 14.4592 67.2717 14.6688 67.9213 15.5684C72.3763 21.7377 75 29.3164 75 37.5C75 45.6836 72.3763 53.2623 67.9213 59.4316C67.2717 60.3311 66.006 60.5408 65.0942 59.8999C64.1825 59.2589 63.97 58.0101 64.6196 57.1105C68.599 51.5998 70.9459 44.8284 70.9459 37.5C70.9459 30.1716 68.599 23.4002 64.6196 17.8895C63.97 16.9899 64.1825 15.7411 65.0942 15.1001ZM9.90579 15.1001C10.8175 15.7411 11.03 16.9899 10.3804 17.8895C6.40105 23.4002 4.05405 30.1716 4.05405 37.5C4.05405 44.8284 6.40105 51.5998 10.3804 57.1105C11.03 58.0101 10.8175 59.2589 9.90579 59.8999C8.99405 60.5408 7.72832 60.3312 7.07871 59.4316C2.62373 53.2623 0 45.6836 0 37.5C0 29.3164 2.62373 21.7377 7.07871 15.5684C7.72832 14.6689 8.99404 14.4592 9.90579 15.1001ZM14.9248 64.9584C15.5927 64.0719 16.8625 63.8876 17.7609 64.5466C23.2952 68.606 30.1167 71 37.5 71C44.8833 71 51.7048 68.606 57.2391 64.5465C58.1375 63.8876 59.4073 64.0719 60.0752 64.9584C60.7431 65.8448 60.5562 67.0977 59.6578 67.7567C53.4518 72.3088 45.7883 75 37.5 75C29.2117 75 21.5483 72.3088 15.3422 67.7567C14.4438 67.0977 14.2569 65.8448 14.9248 64.9584Z" />
                                </svg>
                            </div>
                            <div class="achievement level position-absolute">
                                <svg width="75" height="75" viewBox="0 0 75 75" fill="black" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M15.3422 7.24333C21.5482 2.69119 29.2117 0 37.5 0C45.7883 0 53.4517 2.69119 59.6578 7.24333C60.5562 7.90233 60.7431 9.15516 60.0752 10.0416C59.4073 10.9281 58.1375 11.1124 57.2391 10.4534C51.7048 6.39402 44.8833 4 37.5 4C30.1167 4 23.2952 6.39403 17.7609 10.4535C16.8625 11.1124 15.5927 10.9281 14.9248 10.0416C14.2569 9.15516 14.4438 7.90233 15.3422 7.24333Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ms-5 text-start">
                            <p class="mb-1">Javascript Novice</p>
                            <p class="mb-0 text-primary">Level 1</p>
                        </div>
                    </div>
                </div>
                <div class="card mb-2 sh-15">
                    <div class="card-body text-center align-items-center d-flex flex-row">
                        <div class="d-flex sw-6 sh-6 bg-gradient-light align-items-center justify-content-center rounded-xl position-relative ms-1">
                            <i data-acorn-icon="medal" class="text-white"></i>
                            <div class="achievement bg position-absolute">
                                <svg width="75" height="75" viewBox="0 0 75 75" fill="black" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M15.3422 7.24333C21.5482 2.69119 29.2117 0 37.5 0C45.7883 0 53.4518 2.69119 59.6578 7.24333C60.5562 7.90233 60.7431 9.15516 60.0752 10.0416C59.4073 10.9281 58.1375 11.1124 57.2391 10.4534C51.7048 6.39402 44.8833 4 37.5 4C30.1167 4 23.2952 6.39403 17.7609 10.4535C16.8625 11.1124 15.5927 10.9281 14.9248 10.0416C14.2569 9.15516 14.4438 7.90233 15.3422 7.24333ZM65.0942 15.1001C66.006 14.4592 67.2717 14.6688 67.9213 15.5684C72.3763 21.7377 75 29.3164 75 37.5C75 45.6836 72.3763 53.2623 67.9213 59.4316C67.2717 60.3311 66.006 60.5408 65.0942 59.8999C64.1825 59.2589 63.97 58.0101 64.6196 57.1105C68.599 51.5998 70.9459 44.8284 70.9459 37.5C70.9459 30.1716 68.599 23.4002 64.6196 17.8895C63.97 16.9899 64.1825 15.7411 65.0942 15.1001ZM9.90579 15.1001C10.8175 15.7411 11.03 16.9899 10.3804 17.8895C6.40105 23.4002 4.05405 30.1716 4.05405 37.5C4.05405 44.8284 6.40105 51.5998 10.3804 57.1105C11.03 58.0101 10.8175 59.2589 9.90579 59.8999C8.99405 60.5408 7.72832 60.3312 7.07871 59.4316C2.62373 53.2623 0 45.6836 0 37.5C0 29.3164 2.62373 21.7377 7.07871 15.5684C7.72832 14.6689 8.99404 14.4592 9.90579 15.1001ZM14.9248 64.9584C15.5927 64.0719 16.8625 63.8876 17.7609 64.5466C23.2952 68.606 30.1167 71 37.5 71C44.8833 71 51.7048 68.606 57.2391 64.5465C58.1375 63.8876 59.4073 64.0719 60.0752 64.9584C60.7431 65.8448 60.5562 67.0977 59.6578 67.7567C53.4518 72.3088 45.7883 75 37.5 75C29.2117 75 21.5483 72.3088 15.3422 67.7567C14.4438 67.0977 14.2569 65.8448 14.9248 64.9584Z" />
                                </svg>
                            </div>
                            <div class="achievement level position-absolute">
                                <svg width="75" height="75" viewBox="0 0 75 75" fill="black" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M15.3422 7.24333C21.5482 2.69119 29.2117 0 37.5 0C45.7883 0 53.4517 2.69119 59.6578 7.24333C60.5562 7.90233 60.7431 9.15516 60.0752 10.0416C59.4073 10.9281 58.1375 11.1124 57.2391 10.4534C51.7048 6.39402 44.8833 4 37.5 4C30.1167 4 23.2952 6.39403 17.7609 10.4535C16.8625 11.1124 15.5927 10.9281 14.9248 10.0416C14.2569 9.15516 14.4438 7.90233 15.3422 7.24333ZM65.0942 15.1001C66.006 14.4592 67.2717 14.6688 67.9213 15.5684C72.3763 21.7377 75 29.3164 75 37.5C75 45.6836 72.3763 53.2623 67.9213 59.4316C67.2717 60.3311 66.006 60.5408 65.0942 59.8999C64.1825 59.2589 63.97 58.0101 64.6196 57.1105C68.599 51.5998 70.9459 44.8284 70.9459 37.5C70.9459 30.1716 68.5989 23.4002 64.6196 17.8895C63.97 16.9899 64.1825 15.7411 65.0942 15.1001Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ms-5 text-start">
                            <p class="mb-1">Frontend Apprentice</p>
                            <p class="mb-0 text-primary">Level 2</p>
                        </div>
                    </div>
                </div>
                <!-- Badges End -->
            </div>
            <!-- Right Side End -->
        </div>
        <!-- Content End -->
    </div>
@endsection
