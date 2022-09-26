@php
    $html_tag_data = [];
    $title = 'Player';
    $description= 'Acorn elearning platform player.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
    <link rel="stylesheet" href="/css/vendor/plyr.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/plyr.min.js"></script>
    <script src="/js/vendor/movecontent.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/misc.player.js"></script>
@endsection

@section('content')
    <div class="container d-flex flex-column">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-sm-6">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="col-12 col-sm-6 d-flex align-items-start justify-content-end">
                    <!-- Contents Button Start -->
                    <button
                            type="button"
                            class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-sm-auto d-inline-block d-xl-none"
                            data-bs-toggle="modal"
                            data-bs-target="#tableOfContentsModal"
                    >
                        <i data-acorn-icon="menu-right"></i>
                        <span>Contents</span>
                    </button>
                    <!-- Contents Button End -->
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->
        <div class="row d-flex flex-grow-1 overflow-hidden pb-2 h-100">
            <!-- Player Start -->
            <div class="col-xl-8 col-xxl-9">
                <div class="card mb-5 h-100 p-3">
                    <h1 class="display-1 fw-bolder d-flex justify-content-center"> 🧠 Berfikir dan Menalar </h1>

                    <span class="lead">
                        <h3 class="fw-bold mt-4"> Definisi Dasar Kemampuan Berfikir dan Menalar 📑 </h3>
                        <p class="fw-light ms-4">
                            &Tab;Kemampuan berfikir dan menalar merupakan salah satu kemampuan yang paling penting dalam kehidupan sehari-hari. Kemampuan ini sangat dibutuhkan dalam berbagai situasi, baik dalam kehidupan pribadi maupun dalam kehidupan sosial. Kemampuan berfikir dan menalar juga sangat dibutuhkan dalam berbagai pekerjaan, baik pekerjaan yang membutuhkan kreativitas maupun pekerjaan yang membutuhkan analisis dan pemecahan masalah.
                        </p>
                        <h3 class="fw-bold mt-4"> Basic Critical Thinking Skills 💭 </h3>
                        <p class="fw-light ms-4">
                            Di suatu sore ibumu bertanya, “apa kamu mau nasi goreng?”. Secara spontan kamu menjawab mau. Dalam hal ini kamu menggunakan kemampuan berfikir untuk menyampaikan keinginanmu, namun ini bukan termasuk ke dalam thinking skills. Lalu apa yang termasuk thinking skills? Secara sederhana, thinking skills atau keterampilan berfikir meliputi kemampuan berfikir derajat tinggi, misalnya :
                            <ul class="ms-5">
                                <li>
                                    <p class="fw-light">
                                        Melakukan analisis
                                    </p>
                                </li>
                                <li>
                                    <p class="fw-light">
                                        Melakukan evaluasi
                                    </p>
                                </li>
                                <li>
                                    <p class="fw-light">
                                        Melakukan penyelesaian masalah
                                    </p>
                                </li>
                            </ul>
                        </p>
                        <p class="fw-light ms-4">
                            Lantas muncul pertanyaan, bagaimana cara membedakan kemampuan berfikir derajat tinggi dengan yang tidak? Cara untuk membedakannya adalah dengan melihat apakah disaat kita berfikir kita telah menerapkan pengetahuan (knowledge) dan penyesuaian (adapt) untuk berbagai keperluan? Jika jawabannya iya, maka pada saat itulah kita sudah menggunakan thinking skill yang kita miliki. Selanjutnya bagaimana cara melatih keterampilan tersebut? Tidak lain dan tidak bukan adalah dengan berlatih dan praktik.
                        </p>
                        <ol class="ms-5" type="A">
                            <li class="h5 fw-bold">Menalar</li>
                            <p>Pernahkah kamu mendengar tentang eksperimen Kohler Apes (Kera Kohler)? Singkatnya penelitian tersebut adalah menguji bagaimana kera di dalam kurungan dapat mengambil pisang yang digantung di ketinggian. Dalam eksperimen tersebut kera melakukan berbagai cara dan melewati trial and error hingga akhirnya bisa mengambil pisang yang ada.
                            </p>
                            <p>Berbeda dengan kera, tentunya manusia sebagai makhluk ciptaan Tuhan yang paling sempurna dibekali dengan kemampuan menalar. Jika ditempatkan pada situasi yang sama, secara spontan manusia akan menyadari bahwa tangannya tidak sampai untuk mengambil pisang yang digantung, sehingga akan langsung mencari alat bantu untuk mengambilnya. Di sinilah dapat kita ketahui bahwa penalaran merupakan proses dimana kita berangkat dari hal yang telah kita ketahui untuk menuju ke pengetahuan dan pemahaman baru.
                            </p>
                            <li class="h5 fw-bold">Berfikir Kreatif</li>
                            <p>
                                Sebelumnya kita telah mengetahui apa itu penalaran. Penalaran bukan satu-satunya kemampuan berfikir derajat tinggi. Ada pula yang namanya creative thinking atau berfikir kreatif. Antara kemampuan menalar dan berfikir kreatif keduanya saling beriringan, yaitu penalaran diperlukan untuk mengaktifkan dan menerapkan pemikiran kreatif, sedangkan pemikiran kreatif diperlukan untuk memberikan percikan pada penalaran. Sejarah mencatat, penemuan-penemuan besar dalam sejarah diperoleh dari riset dan perhitungan tingkat tinggi. Namun terdapat pula penemuan yang berasal dari kreatifitas dan ketidaksengajaan.
                            </p>
                            <li class="h5 fw-bold">Refleksi</li>
                            <p>
                                Satu lagi thinking skills yang ada pada diri manusia adalah kemampuan refleksi. Refleksi berarti memberikan pemikiran mendalam mengenai sesuatu. Atau singkat kata “berfikir bagaimana cara berfikir” thinking how to think. Pada saat kita melakkan refleksi, dalam pengambilan keputusan kita tidak hanya berdasarkan dorongan hati namun disertai dengan pemikiran konsekuensi, penimbangan bukti dan fakta yang ada, pengujian hipotesis, hingga penarikan kesimpulan.
                            </p>
                        </ol>

                        <h3 class="fw-bold mt-4"> Critical Thinking Examples! 💭 </h3>
                        <span class="d-flex justify-content-around" >
                            <span>
                                <img src="{{asset('img/course/detail/demo/1.png')}}" width="478px"></span>
                            <span>
                                <img src="{{asset('img/course/detail/demo/2.png')}}" width="256px" ></span>

                        </span>
                        <p class="mt-4 fw-light ms-4">
                            Dua orang narapidana ditahan di penjara bawah tanah. Suatu hari pengunjung misterius menawarkan mereka cara untuk keluar. Mereka akan diberi 3 buah kotak bertuliskan K1, K2, dan K3 yang hanya bisa dipilih salah satu saja. Di dalam salah satu kotak tersebut terdapat 1 kunci untuk keluar dari penjara. Apabila mereka memilih dengan benar, maka mereka bisa keluar dari penjara. Namun apabila mereka tidak, atau salah memilih, maka mereka tidak akan bisa keluar selamanya.
                        </p>
                        <h6 class="ms-4 fw-bold">Petunjuk : </h6>
                    </span>
                </div>
            </div>
            <!-- Player End -->

            <div class="d-none d-xl-flex col-xl-4 col-xxl-3 h-100 scroll-out table-of-contents-scroll" id="tableOfContentsColumn">
                <!-- Content of this will be moved from #tableOfContentsMoveContent div based on the responsive breakpoint.  -->
            </div>
        </div>

        <div class="modal modal-right fade" id="tableOfContentsModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Content</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <!-- Content of below will be moved to #tableOfContentsColumn or back in here based on the data-move-breakpoint attribute below -->
                        <!-- Content will be here if the screen size is smaller than xl -->
                        <div id="tableOfContentsMoveContent" data-move-target="#tableOfContentsColumn" data-move-breakpoint="xl">
                            <!-- Table of Contents Start -->
                            <div id="courseContent">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div
                                                class="d-flex flex-row align-content-center align-items-center cursor-pointer"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne"
                                                aria-expanded="true"
                                                aria-controls="collapseOne"
                                        >
                                            <div class="sw-4 me-3">
                                                <div class="border border-1 border-primary rounded-xl sw-4 sh-4 text-primary d-flex justify-content-center align-items-center">
                                                    1
                                                </div>
                                            </div>
                                            <div>
                                                <div class="heading mb-0">Dasar Berpikir dan Bernalar</div>
                                            </div>
                                        </div>
                                        <div id="collapseOne" class="accordion-collapse collapse show ms-2 ps-1" data-bs-parent="#courseContent">
                                            <div class="row g-0 mt-4">
                                                <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                                    <div class="w-100 d-flex sh-1"></div>
                                                    <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                                        <div class="bg-primary sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading">1. Candy cake gummi bears</a>
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
                                                        <div class="bg-primary sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading">2. Brownie candy biscuit chupa chups</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">3. Cotton candy caramels icing</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">4. Brownie candy biscuit chupa chups</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">5. Marshmallow liquorice cake liquorice</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">6. Pudding pastry icing</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">7. Biscuit halvah muffin dragée</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative"></div>
                                                </div>
                                                <div class="col mb-0">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">8. Halvah cheesecake tootsie</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div
                                                class="d-flex flex-row align-content-center align-items-center cursor-pointer"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo"
                                                aria-expanded="false"
                                                aria-controls="collapseTwo"
                                        >
                                            <div class="sw-4 me-3">
                                                <div class="border border-1 border-primary rounded-xl sw-4 sh-4 text-primary d-flex justify-content-center align-items-center">
                                                    2
                                                </div>
                                            </div>
                                            <div>
                                                <div class="heading mb-0">Molding Techniques</div>
                                            </div>
                                        </div>
                                        <div id="collapseTwo" class="accordion-collapse collapse ms-2 ps-1" data-bs-parent="#courseContent">
                                            <div class="row g-0 mt-4">
                                                <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                                    <div class="w-100 d-flex sh-1"></div>
                                                    <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">1. Gummi bears dessert muffin pie</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">2. Tiramisu lemon drops tootsie roll macaroon halvah bear claw</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">3. Pie gingerbread marzipan jujubes</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">4. Pudding pastry icing</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">5. Macaroon fruitcake sugar plum</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">6. Sugar plum pudding brownie</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative"></div>
                                                </div>
                                                <div class="col mb-0">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">7. Tart gummies topping biscuit</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div
                                                class="d-flex flex-row align-content-center align-items-center cursor-pointer"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree"
                                                aria-expanded="false"
                                                aria-controls="collapseThree"
                                        >
                                            <div class="sw-4 me-3">
                                                <div class="border border-1 border-primary rounded-xl sw-4 sh-4 text-primary d-flex justify-content-center align-items-center">
                                                    3
                                                </div>
                                            </div>
                                            <div>
                                                <div class="heading mb-0">Baking the Right Way</div>
                                            </div>
                                        </div>
                                        <div id="collapseThree" class="accordion-collapse collapse ms-2 ps-1" data-bs-parent="#courseContent">
                                            <div class="row g-0 mt-4">
                                                <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                                    <div class="w-100 d-flex sh-1"></div>
                                                    <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">1. Gummi bears dessert muffin pie</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">2. Tiramisu lemon drops tootsie roll macaroon halvah bear claw</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">3. Pie gingerbread marzipan jujubes</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">4. Pudding pastry icing</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative"></div>
                                                </div>
                                                <div class="col mb-0">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">5. Macaroon fruitcake sugar plum</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div
                                                class="d-flex flex-row align-content-center align-items-center cursor-pointer"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour"
                                                aria-expanded="false"
                                                aria-controls="collapseFour"
                                        >
                                            <div class="sw-4 me-3">
                                                <div class="border border-1 border-primary rounded-xl sw-4 sh-4 text-primary d-flex justify-content-center align-items-center">
                                                    4
                                                </div>
                                            </div>
                                            <div>
                                                <div class="heading mb-0">Presentation</div>
                                            </div>
                                        </div>
                                        <div id="collapseFour" class="accordion-collapse collapse ms-2 ps-1" data-bs-parent="#courseContent">
                                            <div class="row g-0 mt-4">
                                                <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                                    <div class="w-100 d-flex sh-1"></div>
                                                    <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">1. Lemon drops wafer brownie pastry</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">2. Bonbon candy canes oat cake</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative"></div>
                                                </div>
                                                <div class="col mb-0">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">3. Tart marshmallow macaroon soufflé</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div
                                                class="d-flex flex-row align-content-center align-items-center cursor-pointer"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseFive"
                                                aria-expanded="false"
                                                aria-controls="collapseFive"
                                        >
                                            <div class="sw-4 me-3">
                                                <div class="border border-1 border-primary rounded-xl sw-4 sh-4 text-primary d-flex justify-content-center align-items-center">
                                                    5
                                                </div>
                                            </div>
                                            <div>
                                                <div class="heading mb-0">Conclusion</div>
                                            </div>
                                        </div>
                                        <div id="collapseFive" class="accordion-collapse collapse ms-2 ps-1" data-bs-parent="#courseContent">
                                            <div class="row g-0 mt-4">
                                                <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                                    <div class="w-100 d-flex sh-1"></div>
                                                    <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">1. Danish cake gummies jelly oat cake</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">2. Chocolate bar chocolate bar tart cotton candy</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative"></div>
                                                </div>
                                                <div class="col mb-0">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">3. Lemon drops jelly lemon drops</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div
                                                class="d-flex flex-row align-content-center align-items-center cursor-pointer"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseSix"
                                                aria-expanded="false"
                                                aria-controls="collapseSix"
                                        >
                                            <div class="sw-4 me-3">
                                                <div class="border border-1 border-primary rounded-xl sw-4 sh-4 text-primary d-flex justify-content-center align-items-center">
                                                    6
                                                </div>
                                            </div>
                                            <div>
                                                <div class="heading mb-0">What is Next?</div>
                                            </div>
                                        </div>
                                        <div id="collapseSix" class="accordion-collapse collapse ms-2 ps-1" data-bs-parent="#courseContent">
                                            <div class="row g-0 mt-4">
                                                <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                                    <div class="w-100 d-flex sh-1"></div>
                                                    <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">1. Danish cake gummies jelly oat cake</a>
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
                                                        <div class="bg-muted sw-1 sh-1 rounded-xl position-relative"></div>
                                                    </div>
                                                    <div class="w-100 d-flex h-100 justify-content-center position-relative"></div>
                                                </div>
                                                <div class="col mb-0">
                                                    <div class="h-100">
                                                        <div class="d-flex flex-column justify-content-start">
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="heading muted-link">2. Sweet roll candy muffin chocolate</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table of Contents End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content End -->
    </div>
@endsection
