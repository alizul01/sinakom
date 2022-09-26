@php
    $html_tag_data = [];
    $title = 'Quiz Detail';
    $description= 'Acorn elearning platform quiz detail.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
@endsection

@section('js_vendor')
    <script src="/js/vendor/countdown.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/quiz.detail.js"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-sm-6">
                    <h1 class="mb-0 pb-0 display-4" id="title">Advanced React Web Developer Course</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/Quiz/List">Quizes</a></li>
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
            <div class="col-lg-4 col-xxl-3">
                <h2 class="small-title">Quiz Info</h2>
                <div class="card mb-5">
                    <img src="/img/course/small/course-1.webp" class="card-img-top sh-25" alt="card image" />
                    <div class="card-body">
                        <div class="mb-3 text-muted">
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

                <h2 class="small-title">Time</h2>
                <div class="card">
                    <div class="card-body">
                        <div id="timer"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xxl-9">
                <h2 class="small-title">Questions</h2>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex flex-row align-content-center align-items-center mb-5">
                            <div class="sw-5 me-4">
                                <div class="border border-1 border-primary rounded-xl sw-5 sh-5 text-primary d-flex justify-content-center align-items-center">1</div>
                            </div>
                            <div class="heading mb-0">
                                Candy tootsie roll pie chocolate croissant icing macaroon cake sugar chocolate cake jujubes pastry ice cream pie cotton candy cotton plum
                                chocolate drops wafer brownie pastry sugar plum gingerbread?
                            </div>
                        </div>
                        <div class="d-flex flex-row align-content-center align-items-center position-relative mb-3">
                            <div class="sw-5 me-4 d-flex justify-content-center flex-grow-0 flex-shrink-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="radio" class="btn-check" id="answer1_1" name="radioOutline" />
                                    <label
                                            class="btn btn-foreground hover-outline sw-4 sh-4 p-0 rounded-xl d-flex justify-content-center align-items-center stretched-link"
                                            for="answer1_1"
                                    >
                                        A
                                    </label>
                                </div>
                            </div>
                            <div class="mb-0 text-alternate">
                                Chocolate bar sugar plum gingerbread. Gingerbread tiramisu fruitcake icing brownie. Marshmallow carrot cake jelly-o cotton candy danish.
                                Wafer danish cupcake chocolate sesame snaps dessert marzipan.
                            </div>
                        </div>
                        <div class="d-flex flex-row align-content-center align-items-center position-relative mb-3">
                            <div class="sw-5 me-4 d-flex justify-content-center flex-grow-0 flex-shrink-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="radio" class="btn-check" id="answer1_2" name="radioOutline" />
                                    <label
                                            class="btn btn-foreground hover-outline sw-4 sh-4 p-0 rounded-xl d-flex justify-content-center align-items-center stretched-link"
                                            for="answer1_2"
                                    >
                                        B
                                    </label>
                                </div>
                            </div>
                            <div class="mb-0 text-alternate">
                                Liquorice chocolate bar toffee gummi bears. Danish brownie fruitcake tootsie roll donut bonbon ice cream.
                            </div>
                        </div>
                        <div class="d-flex flex-row align-content-center align-items-center position-relative mb-3">
                            <div class="sw-5 me-4 d-flex justify-content-center flex-grow-0 flex-shrink-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="radio" class="btn-check" id="answer1_3" name="radioOutline" />
                                    <label
                                            class="btn btn-foreground hover-outline sw-4 sh-4 p-0 rounded-xl d-flex justify-content-center align-items-center stretched-link"
                                            for="answer1_3"
                                    >
                                        C
                                    </label>
                                </div>
                            </div>
                            <div class="mb-0 text-alternate">
                                Cake oat cake sugar plum caramels fruitcake tart dessert jelly beans pudding. Liquorice chocolate bar pie macaroon.
                            </div>
                        </div>
                        <div class="d-flex flex-row align-content-center align-items-center position-relative mb-3">
                            <div class="sw-5 me-4 d-flex justify-content-center flex-grow-0 flex-shrink-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="radio" class="btn-check" id="answer1_4" name="radioOutline" />
                                    <label
                                            class="btn btn-foreground hover-outline sw-4 sh-4 p-0 rounded-xl d-flex justify-content-center align-items-center stretched-link"
                                            for="answer1_4"
                                    >
                                        D
                                    </label>
                                </div>
                            </div>
                            <div class="mb-0 text-alternate">
                                Fruitcake sweet caramels toffee cupcake carrot cake. Tiramisu lemon drops tootsie roll macaroon halvah bear claw. Bonbon candy canes oat
                                cake. Pudding pastry icing. Sweet sugar plum liquorice gummies soufflé gingerbread. Halvah cheesecake tootsie roll gingerbread chocolate
                                fruitcake.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex flex-row align-content-center align-items-center mb-5">
                            <div class="sw-5 me-4">
                                <div class="border border-1 border-primary rounded-xl sw-5 sh-5 text-primary d-flex justify-content-center align-items-center">2</div>
                            </div>
                            <div class="heading mb-0">
                                Apple pie candy sugar plum caramels soufflé. Bear claw cotton candy powder pastry. Cotton candy caramels icing marshmallow toffee chupa
                                chups tart tart?
                            </div>
                        </div>
                        <div class="d-flex flex-row align-content-center align-items-center position-relative mb-3">
                            <div class="sw-5 me-4 d-flex justify-content-center flex-grow-0 flex-shrink-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="radio" class="btn-check" id="answer2_1" name="radioOutline" />
                                    <label
                                            class="btn btn-foreground hover-outline sw-4 sh-4 p-0 rounded-xl d-flex justify-content-center align-items-center stretched-link"
                                            for="answer2_1"
                                    >
                                        A
                                    </label>
                                </div>
                            </div>
                            <div class="mb-0 text-alternate">Sugar plum pudding brownie jelly brownie macaroon halvah marshmallow jelly beans.</div>
                        </div>
                        <div class="d-flex flex-row align-content-center align-items-center position-relative mb-3">
                            <div class="sw-5 me-4 d-flex justify-content-center flex-grow-0 flex-shrink-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="radio" class="btn-check" id="answer2_2" name="radioOutline" />
                                    <label
                                            class="btn btn-foreground hover-outline sw-4 sh-4 p-0 rounded-xl d-flex justify-content-center align-items-center stretched-link"
                                            for="answer2_2"
                                    >
                                        B
                                    </label>
                                </div>
                            </div>
                            <div class="mb-0 text-alternate">
                                Biscuit halvah muffin dragée gummies sugar plum macaroon donut. Tart marshmallow macaroon soufflé fruitcake jelly beans.
                            </div>
                        </div>
                        <div class="d-flex flex-row align-content-center align-items-center position-relative mb-3">
                            <div class="sw-5 me-4 d-flex justify-content-center flex-grow-0 flex-shrink-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="radio" class="btn-check" id="answer2_3" name="radioOutline" />
                                    <label
                                            class="btn btn-foreground hover-outline sw-4 sh-4 p-0 rounded-xl d-flex justify-content-center align-items-center stretched-link"
                                            for="answer2_3"
                                    >
                                        C
                                    </label>
                                </div>
                            </div>
                            <div class="mb-0 text-alternate">
                                Jelly marzipan jujubes pastry gummi bears. Croissant bonbon topping. Icing pie chocolate bar cupcake jelly bear claw cake pastry chocolate
                                cake.
                            </div>
                        </div>
                        <div class="d-flex flex-row align-content-center align-items-center position-relative mb-3">
                            <div class="sw-5 me-4 d-flex justify-content-center flex-grow-0 flex-shrink-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="radio" class="btn-check" id="answer2_4" name="radioOutline" />
                                    <label
                                            class="btn btn-foreground hover-outline sw-4 sh-4 p-0 rounded-xl d-flex justify-content-center align-items-center stretched-link"
                                            for="answer2_4"
                                    >
                                        D
                                    </label>
                                </div>
                            </div>
                            <div class="mb-0 text-alternate">Cake oat cake sugar plum caramels fruitcake tart dessert jelly beans pudding.</div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex flex-row align-content-center align-items-center mb-5">
                            <div class="sw-5 me-4">
                                <div class="border border-1 border-primary rounded-xl sw-5 sh-5 text-primary d-flex justify-content-center align-items-center">3</div>
                            </div>
                            <div class="heading mb-0">Bear claw cake sweet. Cupcake marzipan powder macaroon jelly-o chocolate bonbon?</div>
                        </div>
                        <div class="d-flex flex-row align-content-center align-items-center position-relative mb-3">
                            <div class="sw-5 me-4 d-flex justify-content-center flex-grow-0 flex-shrink-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="radio" class="btn-check" id="answer3_1" name="radioOutline" />
                                    <label
                                            class="btn btn-foreground hover-outline sw-4 sh-4 p-0 rounded-xl d-flex justify-content-center align-items-center stretched-link"
                                            for="answer3_1"
                                    >
                                        A
                                    </label>
                                </div>
                            </div>
                            <div class="mb-0 text-alternate">
                                Cake oat cake sugar plum caramels fruitcake tart dessert jelly beans pudding. Liquorice chocolate bar pie macaroon. Brownie candy biscuit
                                chupa chups tootsie roll topping brownie croissant tart.
                            </div>
                        </div>
                        <div class="d-flex flex-row align-content-center align-items-center position-relative mb-3">
                            <div class="sw-5 me-4 d-flex justify-content-center flex-grow-0 flex-shrink-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="radio" class="btn-check" id="answer3_2" name="radioOutline" />
                                    <label
                                            class="btn btn-foreground hover-outline sw-4 sh-4 p-0 rounded-xl d-flex justify-content-center align-items-center stretched-link"
                                            for="answer3_2"
                                    >
                                        B
                                    </label>
                                </div>
                            </div>
                            <div class="mb-0 text-alternate">
                                Chocolate cake sugar plum chocolate bar. Pie gingerbread marzipan jujubes cheesecake jelly. Macaroon fruitcake sugar plum lemon drops
                                apple pie powder halvah pie icing. Sesame snaps marzipan macaroon cookie soufflé pie candy jelly beans. Sweet roll gummies topping toffee
                                gingerbread gummies.
                            </div>
                        </div>
                        <div class="d-flex flex-row align-content-center align-items-center position-relative mb-3">
                            <div class="sw-5 me-4 d-flex justify-content-center flex-grow-0 flex-shrink-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="radio" class="btn-check" id="answer3_3" name="radioOutline" />
                                    <label
                                            class="btn btn-foreground hover-outline sw-4 sh-4 p-0 rounded-xl d-flex justify-content-center align-items-center stretched-link"
                                            for="answer3_3"
                                    >
                                        C
                                    </label>
                                </div>
                            </div>
                            <div class="mb-0 text-alternate">
                                Fruitcake sweet caramels toffee cupcake carrot cake. Tiramisu lemon drops tootsie roll macaroon halvah bear claw. Bonbon candy canes oat
                                cake. Pudding pastry icing. Sweet sugar plum liquorice gummies soufflé gingerbread.
                            </div>
                        </div>
                        <div class="d-flex flex-row align-content-center align-items-center position-relative mb-3">
                            <div class="sw-5 me-4 d-flex justify-content-center flex-grow-0 flex-shrink-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="radio" class="btn-check" id="answer3_4" name="radioOutline" />
                                    <label
                                            class="btn btn-foreground hover-outline sw-4 sh-4 p-0 rounded-xl d-flex justify-content-center align-items-center stretched-link"
                                            for="answer3_4"
                                    >
                                        D
                                    </label>
                                </div>
                            </div>
                            <div class="mb-0 text-alternate">
                                Candy canes lemon drops dessert gummies. Pudding marshmallow chocolate gingerbread carrot cake apple pie jelly marzipan macaroon. Tart
                                gummies topping biscuit.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex flex-row align-content-center align-items-center mb-5">
                            <div class="sw-5 me-4">
                                <div class="border border-1 border-primary rounded-xl sw-5 sh-5 text-primary d-flex justify-content-center align-items-center">4</div>
                            </div>
                            <div class="heading mb-0">
                                Lemon drops wafer brownie pastry marshmallow ice cream jelly-o muffin cake sugar plum caramels fruitcake tart dessert jelly beans pudding?
                            </div>
                        </div>
                        <div class="d-flex flex-row align-content-center align-items-center position-relative mb-3">
                            <div class="sw-5 me-4 d-flex justify-content-center flex-grow-0 flex-shrink-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="radio" class="btn-check" id="answer4_1" name="radioOutline" />
                                    <label
                                            class="btn btn-foreground hover-outline sw-4 sh-4 p-0 rounded-xl d-flex justify-content-center align-items-center stretched-link"
                                            for="answer4_1"
                                    >
                                        A
                                    </label>
                                </div>
                            </div>
                            <div class="mb-0 text-alternate">Lemon drops wafer brownie pastry marshmallow ice cream jelly-o muffin. Dragée soufflé croissant.</div>
                        </div>
                        <div class="d-flex flex-row align-content-center align-items-center position-relative mb-3">
                            <div class="sw-5 me-4 d-flex justify-content-center flex-grow-0 flex-shrink-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="radio" class="btn-check" id="answer4_2" name="radioOutline" />
                                    <label
                                            class="btn btn-foreground hover-outline sw-4 sh-4 p-0 rounded-xl d-flex justify-content-center align-items-center stretched-link"
                                            for="answer4_2"
                                    >
                                        B
                                    </label>
                                </div>
                            </div>
                            <div class="mb-0 text-alternate">
                                Macaroon fruitcake sugar plum lemon drops apple pie powder halvah pie icing. Sesame snaps marzipan macaroon cookie soufflé pie candy jelly
                                beans. Sweet roll gummies topping toffee gingerbread gummies.
                            </div>
                        </div>
                        <div class="d-flex flex-row align-content-center align-items-center position-relative mb-3">
                            <div class="sw-5 me-4 d-flex justify-content-center flex-grow-0 flex-shrink-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="radio" class="btn-check" id="answer4_3" name="radioOutline" />
                                    <label
                                            class="btn btn-foreground hover-outline sw-4 sh-4 p-0 rounded-xl d-flex justify-content-center align-items-center stretched-link"
                                            for="answer4_3"
                                    >
                                        C
                                    </label>
                                </div>
                            </div>
                            <div class="mb-0 text-alternate">
                                Candy canes lemon drops dessert gummies. Pudding marshmallow chocolate gingerbread carrot cake apple pie jelly marzipan macaroon. Tart
                                gummies topping biscuit.
                            </div>
                        </div>
                        <div class="d-flex flex-row align-content-center align-items-center position-relative mb-3">
                            <div class="sw-5 me-4 d-flex justify-content-center flex-grow-0 flex-shrink-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="radio" class="btn-check" id="answer4_4" name="radioOutline" />
                                    <label
                                            class="btn btn-foreground hover-outline sw-4 sh-4 p-0 rounded-xl d-flex justify-content-center align-items-center stretched-link"
                                            for="answer4_4"
                                    >
                                        D
                                    </label>
                                </div>
                            </div>
                            <div class="mb-0 text-alternate">Chocolate bar chocolate bar tart cotton candy tart pudding lollipop.</div>
                        </div>
                    </div>
                </div>

                <div class="card mb-7">
                    <div class="card-body">
                        <div class="d-flex flex-row align-content-center align-items-center mb-5">
                            <div class="sw-5 me-4">
                                <div class="border border-1 border-primary rounded-xl sw-5 sh-5 text-primary d-flex justify-content-center align-items-center">5</div>
                            </div>
                            <div class="heading mb-0">
                                Gummies sugar plum cake pie tootsie roll donut bonbon ice cream muffin danish bear claw bear claw jelly chocolate icing croissant cupcake
                                macaroon liquorice biscuit?
                            </div>
                        </div>
                        <div class="d-flex flex-row align-content-center align-items-center position-relative mb-3">
                            <div class="sw-5 me-4 d-flex justify-content-center flex-grow-0 flex-shrink-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="radio" class="btn-check" id="answer5_1" name="radioOutline" />
                                    <label
                                            class="btn btn-foreground hover-outline sw-4 sh-4 p-0 rounded-xl d-flex justify-content-center align-items-center stretched-link"
                                            for="answer4_1"
                                    >
                                        A
                                    </label>
                                </div>
                            </div>
                            <div class="mb-0 text-alternate">Danish brownie fruitcake tootsie roll donut bonbon ice candy muffin chocolate bar carrot cake</div>
                        </div>
                        <div class="d-flex flex-row align-content-center align-items-center position-relative mb-3">
                            <div class="sw-5 me-4 d-flex justify-content-center flex-grow-0 flex-shrink-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="radio" class="btn-check" id="answer5_2" name="radioOutline" />
                                    <label
                                            class="btn btn-foreground hover-outline sw-4 sh-4 p-0 rounded-xl d-flex justify-content-center align-items-center stretched-link"
                                            for="answer4_2"
                                    >
                                        B
                                    </label>
                                </div>
                            </div>
                            <div class="mb-0 text-alternate">Brownie candy biscuit chupa chups tootsie roll topping brownie croissant tart.</div>
                        </div>
                        <div class="d-flex flex-row align-content-center align-items-center position-relative mb-3">
                            <div class="sw-5 me-4 d-flex justify-content-center flex-grow-0 flex-shrink-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="radio" class="btn-check" id="answer5_3" name="radioOutline" />
                                    <label
                                            class="btn btn-foreground hover-outline sw-4 sh-4 p-0 rounded-xl d-flex justify-content-center align-items-center stretched-link"
                                            for="answer4_3"
                                    >
                                        C
                                    </label>
                                </div>
                            </div>
                            <div class="mb-0 text-alternate">Chocolate icing chocolate cake chocolate fruitcake sugar plum lemon drops apple pie.</div>
                        </div>
                        <div class="d-flex flex-row align-content-center align-items-center position-relative mb-3">
                            <div class="sw-5 me-4 d-flex justify-content-center flex-grow-0 flex-shrink-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="radio" class="btn-check" id="answer5_4" name="radioOutline" />
                                    <label
                                            class="btn btn-foreground hover-outline sw-4 sh-4 p-0 rounded-xl d-flex justify-content-center align-items-center stretched-link"
                                            for="answer4_4"
                                    >
                                        D
                                    </label>
                                </div>
                            </div>
                            <div class="mb-0 text-alternate">Chupa chups croissant jujubes chocolate topping pastry pastry.</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <button class="btn btn-outline-primary btn-icon btn-icon-end sw-25">
                            <span>Done</span>
                            <i data-acorn-icon="check"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content End -->
    </div>
@endsection
