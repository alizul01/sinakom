@php
    $html_tag_data = [];
    $title = 'Material';
    $description= 'Acorn elearning platform material.';
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
        <div class="row">
            <div class="col">
                <!-- Title Start -->
                <section class="scroll-section" id="title">
                    <div class="page-title-container">
                        <h1 class="mb-0 pb-0 display-4">{{ $title }}</h1>
                        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                            <ul class="breadcrumb pt-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                            </ul>
                        </nav>
                    </div>
                </section>
                <!-- Title End -->

                <!-- Content Start -->
                <div>
                    <!-- Chapter 01 Start -->
                    <section class="scroll-section mb-5" id="chapter1">
                        <h2 class="small-title">1. Introduction to Bread Making</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="heading">Cookie Macaroon</div>
                                <p>
                                    Liquorice caramels apple pie chupa chups bonbon. Jelly-o candy apple pie sugar plum icing chocolate cake lollipop jujubes bear claw.
                                    Pastry sweet roll carrot cake cake macaroon gingerbread cookie.
                                    <strong>Brownie candy cookie</strong>
                                    candy pie sweet roll biscuit marzipan. Chocolate bar candy canes macaroon liquorice danish biscuit biscuit.
                                </p>
                                <div class="heading">Muffin</div>
                                <p>
                                    Tiramisu toffee brownie sweet roll sesame snaps halvah. Icing carrot cake cupcake gummi bears danish. Sesame snaps muffin macaroon
                                    tiramisu ice cream
                                    <u>toffee carrot sesame tootsie roll</u>
                                    .
                                </p>
                                <div class="heading">Liquorice</div>
                                <p>
                                    Snaps muffin macaroon tiramisu ice cream toffee carrot sesame tootsie roll.Brownie ice cream marshmallow topping. Icing liquorice oat
                                    cake caramels. Sugar plum gummi bears jujubes cookie jelly-o tootsie roll chocolate bar. Jujubes candy jelly-o topping lemon drops.
                                    Cupcake gingerbread cookie cookie lemon drops tootsie roll lollipop. Tiramisu toffee brownie sweet roll sesame snaps halvah. Icing
                                    carrot cake cupcake gummi bears danish.
                                </p>
                                <div class="heading">Powder Cake</div>
                                <p>
                                    Sesame snaps brownie gummi bears tootsie roll caramels dragée. Powder cake gummies jelly beans toffee carrot cake bonbon powder muffin.
                                    Jujubes candy jelly-o topping lemon drops. Cupcake gingerbread cookie cookie lemon drops tootsie roll lollipop. Liquorice caramels apple
                                    pie chupa chups bonbon. Jelly-o candy apple pie sugar plum icing chocolate cake lollipop jujubes bear claw. Pastry sweet roll carrot
                                    cake cake macaroon gingerbread cookie.
                                </p>
                                <div class="d-flex flex-row flex-wrap">
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
                    </section>
                    <!-- Chapter 01 End -->

                    <!-- Chapter 02 Start -->
                    <section class="scroll-section mb-5" id="chapter2">
                        <h2 class="small-title">2. Molding Techniques</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="heading">Chocolate Icing</div>
                                <p>
                                    Snaps muffin macaroon tiramisu ice cream toffee carrot sesame tootsie roll.Brownie ice cream marshmallow topping. Icing liquorice oat
                                    cake caramels. Sugar plum gummi bears jujubes cookie jelly-o tootsie roll chocolate bar. Jujubes candy jelly-o topping lemon drops.
                                    Cupcake gingerbread cookie cookie lemon drops tootsie roll lollipop. Tiramisu toffee brownie sweet roll sesame snaps halvah. Icing
                                    carrot cake cupcake gummi bears danish.
                                </p>
                                <div class="heading">Candy Canes</div>
                                <p class="mb-0">
                                    Sesame snaps brownie gummi bears tootsie roll caramels dragée. Powder cake gummies jelly beans toffee carrot cake bonbon powder muffin.
                                    Jujubes candy jelly-o topping lemon drops. Cupcake gingerbread cookie cookie lemon drops tootsie roll lollipop. Liquorice caramels apple
                                    pie chupa chups bonbon. Jelly-o candy apple pie sugar plum icing chocolate cake lollipop jujubes bear claw. Pastry sweet roll carrot
                                    cake cake macaroon gingerbread cookie.
                                </p>
                            </div>
                        </div>
                    </section>
                    <!-- Chapter 02 End -->

                    <!-- Chapter 03 Start -->
                    <section class="scroll-section mb-5" id="chapter3">
                        <h2 class="small-title">3. Baking the Right Way</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="heading">Lemon Drops</div>
                                <p>
                                    Bear claw cake sweet. Cupcake marzipan powder macaroon jelly-o chocolate bonbon liquorice. Marshmallow liquorice cake liquorice jujubes
                                    bear claw. Muffin jelly-o brownie sweet bear claw bear claw. Gummies sugar plum cake pie muffin danish bear claw bear claw jelly-o.
                                    Chocolate icing biscuit. Lollipop chocolate cake jujubes pastry ice cream pie cotton candy cotton candy toffee. Liquorice croissant
                                    cupcake macaroon liquorice. Halvah muffin biscuit caramels ice cream candy macaroon carrot cake. Muffin chocolate croissant gummies
                                    donut pudding candy. Lemon drops wafer brownie pastry marshmallow ice cream jelly-o muffin. Dragée soufflé croissant.
                                </p>
                                <div class="heading">Apple Pie</div>
                                <p>
                                    Snaps muffin macaroon tiramisu ice cream toffee carrot sesame tootsie roll.Brownie ice cream marshmallow topping. Icing liquorice oat
                                    cake caramels. Sugar plum gummi bears jujubes cookie jelly-o tootsie roll chocolate bar. Jujubes candy jelly-o topping lemon drops.
                                    Cupcake gingerbread cookie cookie lemon drops tootsie roll lollipop. Tiramisu toffee brownie sweet roll sesame snaps halvah. Icing
                                    carrot cake cupcake gummi bears danish.
                                </p>
                                <div class="heading">Jelly Beans</div>
                                <p class="mb-0">
                                    Sesame snaps brownie gummi bears tootsie roll caramels dragée. Powder cake gummies jelly beans toffee carrot cake bonbon powder muffin.
                                    Jujubes candy jelly-o topping lemon drops. Cupcake gingerbread cookie cookie lemon drops tootsie roll lollipop. Liquorice caramels apple
                                    pie chupa chups bonbon. Jelly-o candy apple pie sugar plum icing chocolate cake lollipop jujubes bear claw. Pastry sweet roll carrot
                                    cake cake macaroon gingerbread cookie.
                                </p>
                            </div>
                        </div>
                    </section>
                    <!-- Chapter 03 End -->

                    <!-- Chapter 04 Start -->
                    <section class="scroll-section mb-5" id="chapter4">
                        <h2 class="small-title">4. Presentation</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="heading">Cotton Candy</div>
                                <p>
                                    Sesame snaps brownie gummi bears tootsie roll caramels dragée. Powder cake gummies jelly beans toffee carrot cake bonbon powder muffin.
                                    Jujubes candy jelly-o topping lemon drops. Cupcake gingerbread cookie cookie lemon drops tootsie roll lollipop. Liquorice caramels apple
                                    pie chupa chups bonbon. Jelly-o candy apple pie sugar plum icing chocolate cake lollipop jujubes bear claw. Pastry sweet roll carrot
                                    cake cake macaroon gingerbread cookie.
                                </p>
                                <div class="heading">Tiramisu</div>
                                <p>
                                    Tiramisu toffee brownie sweet roll sesame snaps halvah. Icing carrot cake cupcake gummi bears danish. Sesame snaps muffin macaroon
                                    tiramisu ice cream
                                    <u>toffee carrot sesame tootsie roll</u>
                                    .
                                </p>
                                <div class="heading">Tootsie Roll</div>
                                <p class="mb-0">
                                    Snaps muffin macaroon tiramisu ice cream toffee carrot sesame tootsie roll.Brownie ice cream marshmallow topping. Icing liquorice oat
                                    cake caramels. Sugar plum gummi bears jujubes cookie jelly-o tootsie roll chocolate bar. Jujubes candy jelly-o topping lemon drops.
                                    Cupcake gingerbread cookie cookie lemon drops tootsie roll lollipop. Tiramisu toffee brownie sweet roll sesame snaps halvah. Icing
                                    carrot cake cupcake gummi bears danish.
                                </p>
                            </div>
                        </div>
                    </section>
                    <!-- Chapter 04 End -->

                    <!-- Chapter 05 Start -->
                    <section class="scroll-section mb-5" id="chapter5">
                        <h2 class="small-title">5. Conclusion</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="heading">Cookie Macaroon</div>
                                <p>
                                    Liquorice caramels apple pie chupa chups bonbon. Jelly-o candy apple pie sugar plum icing chocolate cake lollipop jujubes bear claw.
                                    Pastry sweet roll carrot cake cake macaroon gingerbread cookie.
                                    <strong>Brownie candy cookie</strong>
                                    candy pie sweet roll biscuit marzipan. Chocolate bar candy canes macaroon liquorice danish biscuit biscuit.
                                </p>
                                <div class="heading">Sesame Snaps</div>
                                <p class="mb-0">
                                    Tiramisu toffee brownie sweet roll sesame snaps halvah. Icing carrot cake cupcake gummi bears danish. Sesame snaps muffin macaroon
                                    tiramisu ice cream
                                    <u>toffee carrot sesame tootsie roll</u>
                                    .
                                </p>
                            </div>
                        </div>
                    </section>
                    <!-- Chapter 05 End -->

                    <!-- Chapter 06 Start -->
                    <section class="scroll-section mb-5" id="chapter6">
                        <h2 class="small-title">6. What is Next?</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="heading">Chocolate Bar</div>
                                <p>
                                    Liquorice caramels apple pie chupa chups bonbon. Jelly-o candy apple pie sugar plum icing chocolate cake lollipop jujubes bear claw.
                                    Pastry sweet roll carrot cake cake macaroon gingerbread cookie.
                                    <strong>Brownie candy cookie</strong>
                                    candy pie sweet roll biscuit marzipan. Chocolate bar candy canes macaroon liquorice danish biscuit biscuit. Liquorice chocolate bar
                                    toffee gummi bears. Muffin sweet tootsie roll tart sugar plum muffin. Danish brownie fruitcake tootsie roll donut bonbon ice cream.
                                    Sweet roll candy muffin chocolate bar carrot cake. Cake oat cake sugar plum caramels fruitcake tart dessert jelly beans pudding.
                                </p>
                                <div class="heading">Gingerbread Cake</div>
                                <p>
                                    Tiramisu lemon drops tootsie roll macaroon halvah bear claw. Bonbon candy canes oat cake. Pudding pastry icing. Sweet sugar plum
                                    liquorice gummies soufflé gingerbread. Halvah cheesecake tootsie roll gingerbread chocolate fruitcake. Sugar plum gummi bears jujubes
                                    cookie jelly-o tootsie roll chocolate bar. Jujubes candy jelly-o topping lemon drops. Cupcake gingerbread cookie cookie lemon drops
                                    tootsie roll lollipop. Tiramisu toffee brownie sweet roll sesame snaps halvah. Icing carrot cake cupcake gummi bears danish.
                                </p>
                                <div class="heading">Lollipop</div>
                                <p class="mb-0">
                                    Sesame snaps brownie gummi bears tootsie roll caramels dragée. Powder cake gummies jelly beans toffee carrot cake bonbon powder muffin.
                                    Jujubes candy jelly-o topping lemon drops. Cupcake gingerbread cookie cookie lemon drops tootsie roll lollipop. Liquorice caramels apple
                                    pie chupa chups bonbon. Jelly-o candy apple pie sugar plum icing chocolate cake lollipop jujubes bear claw. Pastry sweet roll carrot
                                    cake cake macaroon gingerbread cookie.
                                </p>
                            </div>
                        </div>
                    </section>
                    <!-- Chapter 06 End -->
                </div>
                <!-- Content End -->
            </div>

            <!-- Scrollspy Start -->
            <div class="col-md-auto d-none d-lg-block" id="scrollSpyMenu">
                <ul class="nav flex-column">
                    <li>
                        <a class="nav-link" href="#chapter1">
                            <i data-acorn-icon="chevron-right"></i>
                            <span>Chapter 1</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#chapter2">
                            <i data-acorn-icon="chevron-right"></i>
                            <span>Chapter 2</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#chapter3">
                            <i data-acorn-icon="chevron-right"></i>
                            <span>Chapter 3</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#chapter4">
                            <i data-acorn-icon="chevron-right"></i>
                            <span>Chapter 4</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#chapter5">
                            <i data-acorn-icon="chevron-right"></i>
                            <span>Chapter 5</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#chapter6">
                            <i data-acorn-icon="chevron-right"></i>
                            <span>Chapter 6</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection
