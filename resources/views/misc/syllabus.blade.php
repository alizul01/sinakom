@php
    $html_tag_data = [];
    $title = 'Syllabus';
    $description= 'Acorn elearning platform syllabus.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
    <link rel="stylesheet" href="/css/vendor/baguetteBox.min.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/baguetteBox.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/misc.syllabus.js"></script>
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

        <div class="row g-5">
            <!-- Left Side Start -->
            <div class="col-12 col-xl-4 col-xxl-3">
                <!-- Instructor Start -->
                <h2 class="small-title">Instructor</h2>
                <div class="card mb-5">
                    <div class="card-body mb-n5">
                        <div class="d-flex align-items-center flex-column mb-5">
                            <div class="mb-4 d-flex align-items-center flex-column">
                                <div class="sw-13 position-relative mb-3">
                                    <img src="/img/profile/profile-2.webp" class="img-fluid rounded-xl" alt="thumb" />
                                </div>
                                <div class="h5 mb-0">Eulalie Armel</div>
                                <div class="text-muted mb-2">Arts</div>
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
                <!-- Instructor End -->

                <h2 class="small-title">Grading</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="row gx-2 mb-3">
                            <div class="col">A</div>
                            <div class="col-auto">90% - 100%</div>
                        </div>
                        <div class="row gx-2 mb-3">
                            <div class="col">B</div>
                            <div class="col-auto">80% - 89%</div>
                        </div>
                        <div class="row gx-2 mb-3">
                            <div class="col">C</div>
                            <div class="col-auto">70% - 79%</div>
                        </div>
                        <div class="row gx-2 mb-3">
                            <div class="col">D</div>
                            <div class="col-auto">60% - 69%</div>
                        </div>
                        <div class="row gx-2">
                            <div class="col">F</div>
                            <div class="col-auto">59% or less</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left Side End -->

            <!-- Right Side Start -->
            <div class="col-12 col-xl-8 col-xxl-9">
                <!-- Course Start -->
                <h2 class="small-title">Course</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="heading">Description</div>
                            <p>
                                Liquorice caramels apple pie chupa chups bonbon. Jelly-o candy apple pie sugar plum icing chocolate cake lollipop jujubes bear claw.
                                Pastry sweet roll carrot cake cake macaroon gingerbread cookie.
                                <strong>Brownie candy cookie</strong>
                                candy pie sweet roll biscuit marzipan. Chocolate bar candy canes macaroon liquorice danish biscuit biscuit.
                            </p>
                        </div>
                        <div class="mb-4">
                            <div class="heading">Prerequisites</div>
                            <p>
                                Fruitcake sweet caramels toffee cupcake carrot cake. Tiramisu lemon drops tootsie roll macaroon halvah bear claw. Bonbon candy canes oat
                                cake. Pudding pastry icing. Sweet sugar plum liquorice gummies soufflé gingerbread. Halvah cheesecake tootsie roll gingerbread chocolate
                                fruitcake. Candy canes lemon drops dessert gummies. Pudding marshmallow chocolate gingerbread carrot cake apple pie jelly marzipan
                                macaroon. Tart gummies topping biscuit. Chocolate bar chocolate bar tart cotton candy tart pudding lollipop.
                            </p>
                        </div>
                        <div class="mb-4">
                            <div class="heading">Outline</div>
                            <p>
                                Muffin sweet tootsie roll tart sugar plum muffin. Danish brownie fruitcake tootsie roll donut bonbon ice cream. Sweet roll candy muffin
                                chocolate bar carrot cake. Cake oat cake sugar plum caramels fruitcake tart dessert jelly beans pudding. Liquorice caramels apple pie
                                chupa chups bonbon. Jelly-o candy apple pie sugar plum icing chocolate cake lollipop jujubes bear claw.
                            </p>
                        </div>
                        <div class="mb-4">
                            <div class="heading">Sequencing</div>
                            <p>
                                Bear claw cake sweet. Cupcake marzipan powder macaroon jelly-o chocolate bonbon liquorice. Marshmallow liquorice cake liquorice jujubes
                                bear claw. Muffin jelly-o brownie sweet bear claw bear claw. Gummies sugar plum cake pie muffin danish bear claw bear claw jelly-o.
                                Chocolate icing biscuit. Lollipop chocolate cake jujubes pastry ice cream pie cotton candy cotton candy toffee. Liquorice croissant
                                cupcake macaroon liquorice. Halvah muffin biscuit caramels ice cream candy macaroon carrot cake. Muffin chocolate croissant gummies donut
                                pudding candy.Liquorice caramels apple pie chupa chups bonbon. Jelly-o candy apple pie sugar plum icing chocolate cake lollipop jujubes
                                bear claw.
                            </p>
                        </div>
                        <div>
                            <div class="heading">Objectives</div>
                            <ol class="ps-4 mb-0">
                                <li>
                                    Cookie
                                    <p>
                                        Sesame snaps brownie gummi bears tootsie roll caramels dragée. Powder cake gummies jelly beans toffee carrot cake bonbon powder
                                        muffin.
                                    </p>
                                </li>
                                <li>
                                    Macaroon
                                    <p>Fruitcake chocolate chocolate cake. Marzipan wafer macaroon cookie candy canes fruitcake.</p>
                                </li>
                                <li>
                                    Muffin
                                    <p>Jelly-o candy apple pie sugar plum icing chocolate cake lollipop jujubes bear claw.</p>
                                </li>
                                <li>
                                    Brownie
                                    <p>Sugar plum gummi bears jujubes cookie jelly-o tootsie roll chocolate bar.</p>
                                </li>
                                <li>
                                    Lollipop
                                    <p>Liquorice caramels apple pie chupa chups bonbon.</p>
                                </li>
                                <li>
                                    Brownie
                                    <p>Muffin sweet tootsie roll tart sugar plum muffin.</p>
                                </li>
                                <li>
                                    Caramels
                                    <p class="mb-0">Gingerbread pudding chocolate cake cake.</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- Course End -->

                <!-- Timeline Start -->
                <h2 class="small-title">Timeline</h2>
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xxl-4 g-2 mb-5">
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column align-items-lg-center text-center text-md-start text-lg-center">
                                <p class="text-primary heading mb-4">Week 1</p>
                                <div class="d-flex flex-column mb-n4 text-start align-items-start w-100">
                                    <div class="mb-4">
                                        <p class="text-small text-muted mb-2">OBJECTIVES</p>
                                        <ol class="ps-3 mb-0">
                                            <li class="mb-1">Sugar plum gummi bears jujubes.</li>
                                            <li class="mb-1">Liquorice caramels apple pie chupa chups bonbon.</li>
                                            <li class="mb-1">Muffin sweet tootsie roll tart.</li>
                                            <li class="mb-1">Gingerbread pudding chocolate.</li>
                                        </ol>
                                    </div>
                                    <div class="mb-4">
                                        <p class="text-small text-muted mb-2">ACTIVITIES</p>
                                        <p class="mb-0">
                                            Gummies sugar plum cake pie muffin danish bear claw bear claw jelly-o. Chocolate icing biscuit. Lollipop chocolate cake jujubes
                                            pastry ice cream pie cotton candy cotton candy toffee. Liquorice croissant cupcake macaroon liquorice.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <p class="text-small text-muted mb-2">ASSIGNMENTS</p>
                                        <p class="mb-0">
                                            Pudding marshmallow chocolate gingerbread carrot cake apple pie jelly marzipan macaroon. Tart gummies topping biscuit.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column align-items-lg-center text-center text-md-start text-lg-center">
                                <p class="text-primary heading mb-4">Week 2</p>
                                <div class="d-flex flex-column mb-n4 text-start align-items-start w-100">
                                    <div class="mb-4">
                                        <p class="text-small text-muted mb-2">OBJECTIVES</p>
                                        <ol class="ps-3 mb-0">
                                            <li class="mb-1">Donut chocolate cake.</li>
                                            <li class="mb-1">Cotton candy caramels icing.</li>
                                            <li class="mb-1">Gummies sugar plum cake pie.</li>
                                            <li class="mb-1">Muffin jelly-o brownie sweet bear claw bear claw.</li>
                                        </ol>
                                    </div>
                                    <div class="mb-4">
                                        <p class="text-small text-muted mb-2">ACTIVITIES</p>
                                        <p class="mb-0">
                                            Apple pie candy sugar plum caramels soufflé. Bear claw cotton candy powder pastry. Cotton candy caramels icing marshmallow toffee
                                            chupa chups tart tart. Donut chocolate cake croissant sweet cake muffin halvah muffin lemon drops.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <p class="text-small text-muted mb-2">ASSIGNMENTS</p>
                                        <p class="mb-0">
                                            Muffin jelly-o brownie sweet bear claw bear claw. Gummies sugar plum cake pie muffin danish bear claw bear claw jelly-o. Chocolate
                                            icing biscuit. Lollipop chocolate cake jujubes pastry ice cream pie cotton candy cotton candy toffee.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column align-items-lg-center text-center text-md-start text-lg-center">
                                <p class="text-primary heading mb-4">Week 3</p>
                                <div class="d-flex flex-column mb-n4 text-start align-items-start w-100">
                                    <div class="mb-4">
                                        <p class="text-small text-muted mb-2">OBJECTIVES</p>
                                        <ol class="ps-3 mb-0">
                                            <li class="mb-1">Pudding marshmallow chocolate gingerbread.</li>
                                            <li class="mb-1">Cotton candy caramels icing.</li>
                                            <li class="mb-1">Gummies sugar plum cake pie muffin chocolate cake jujubes pastry danish.</li>
                                        </ol>
                                    </div>
                                    <div class="mb-4">
                                        <p class="text-small text-muted mb-2">ACTIVITIES</p>
                                        <p class="mb-0">
                                            Bear claw cake sweet. Cupcake marzipan powder macaroon jelly-o chocolate bonbon liquorice. Marshmallow liquorice cake liquorice
                                            jujubes bear claw. Muffin jelly-o brownie sweet bear claw bear claw. Gummies sugar plum cake pie muffin danish bear claw bear claw
                                            jelly-o.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <p class="text-small text-muted mb-2">ASSIGNMENTS</p>
                                        <p class="mb-0">
                                            Pudding marshmallow chocolate gingerbread carrot cake apple pie jelly marzipan macaroon. Sweet sugar plum liquorice gummies soufflé
                                            gingerbread.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column align-items-lg-center text-center text-md-start text-lg-center">
                                <p class="text-primary heading mb-4">Week 4</p>
                                <div class="d-flex flex-column mb-n4 text-start align-items-start w-100">
                                    <div class="mb-4">
                                        <p class="text-small text-muted mb-2">OBJECTIVES</p>
                                        <ol class="ps-3 mb-0">
                                            <li class="mb-1">Chupa chups croissant jujubes chocolate.</li>
                                            <li class="mb-1">Chocolate icing biscuit.</li>
                                            <li class="mb-1">Liquorice croissant cupcake macaroon liquorice.</li>
                                        </ol>
                                    </div>
                                    <div class="mb-4">
                                        <p class="text-small text-muted mb-2">ACTIVITIES</p>
                                        <p class="mb-0">
                                            Gummies sugar plum cake pie muffin danish bear claw bear claw jelly-o. Chocolate icing biscuit. Lollipop chocolate cake jujubes
                                            pastry ice cream pie cotton candy cotton candy toffee. Liquorice croissant cupcake macaroon liquorice.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <p class="text-small text-muted mb-2">ASSIGNMENTS</p>
                                        <p class="mb-0">
                                            Chocolate bar chocolate bar tart cotton candy tart pudding lollipop. Chupa chups croissant jujubes chocolate topping pastry pastry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Timeline End -->

                <!-- Materials Start -->
                <h2 class="small-title">Materials</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row flex-wrap">
                            <div class="sw-30 me-2 mb-2">
                                <div class="row g-0 rounded-sm sh-8 border">
                                    <div class="col-auto">
                                        <a href="/img/course/large/course-1.webp" data-caption="cake.webp" class="lightbox">
                                            <img src="/img/course/small/course-1.webp" class="card-img card-img-horizontal rounded-sm-start sw-10" alt="product image 1" />
                                        </a>
                                    </div>
                                    <div class="col rounded-sm-end d-flex flex-column justify-content-center px-3">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-0 clamp-line" data-line="1">cake.webp</p>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" data-delay='{"show":"1000", "hide":"0"}'>
                                                <i data-acorn-icon="download" data-acorn-size="17" class="text-alternate"></i>
                                            </a>
                                        </div>
                                        <div class="text-small text-primary">346 KB</div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-30 me-2 mb-2">
                                <div class="row g-0 rounded-sm sh-8 border">
                                    <div class="col-auto">
                                        <a href="/img/course/large/course-1.webp" data-caption="pastry.webp" class="lightbox">
                                            <img src="/img/course/small/course-1.webp" class="card-img card-img-horizontal rounded-sm-start sw-10" alt="product image 2" />
                                        </a>
                                    </div>
                                    <div class="col rounded-sm-end d-flex flex-column justify-content-center px-3">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-0 clamp-line" data-line="1">pastry.webp</p>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" data-delay='{"show":"1000", "hide":"0"}'>
                                                <i data-acorn-icon="download" data-acorn-size="17" class="text-alternate"></i>
                                            </a>
                                        </div>
                                        <div class="text-small text-primary">521 KB</div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-30 me-2 mb-2">
                                <div class="row g-0 rounded-sm sh-8 border">
                                    <div class="col-auto">
                                        <div class="sw-10 d-flex justify-content-center align-items-center h-100">
                                            <i data-acorn-icon="file-text" class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col rounded-sm-end d-flex flex-column justify-content-center pe-3">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-0 clamp-line" data-line="1">nice_recipe.doc</p>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" data-delay='{"show":"1000", "hide":"0"}'>
                                                <i data-acorn-icon="download" data-acorn-size="17" class="text-alternate"></i>
                                            </a>
                                        </div>
                                        <div class="text-small text-primary">521 KB</div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-30 me-2 mb-2">
                                <div class="row g-0 rounded-sm sh-8 border">
                                    <div class="col-auto">
                                        <div class="sw-10 d-flex justify-content-center align-items-center h-100">
                                            <i data-acorn-icon="file-text" class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col rounded-sm-end d-flex flex-column justify-content-center pe-3">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-0 clamp-line" data-line="1">bread_making.doc</p>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" data-delay='{"show":"1000", "hide":"0"}'>
                                                <i data-acorn-icon="download" data-acorn-size="17" class="text-alternate"></i>
                                            </a>
                                        </div>
                                        <div class="text-small text-primary">1.422 KB</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Materials End -->
            </div>
        </div>

        <!-- Content End -->
    </div>
@endsection
