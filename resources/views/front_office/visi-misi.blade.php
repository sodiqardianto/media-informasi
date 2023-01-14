<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_front/images/brand/favicon.ico') }}">

    <!-- TITLE -->
    <title>Visi dan Misi – Bootstrap 5 Admin & Dashboard Template</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('assets_front/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- STYLE CSS -->
    <link href="{{ asset('assets_front/css/style.css') }}" rel="stylesheet">

	<!-- Plugins CSS -->
    <link href="{{ asset('assets_front/css/plugins.css') }}" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('assets_front/css/icons.css') }}" rel="stylesheet">

    <!-- INTERNAL Switcher css -->
    <link href="{{ asset('assets_front/switcher/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_front/switcher/demo.css') }}" rel="stylesheet">

</head>

<body class="app ltr landing-page horizontal">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('assets_front/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card p-0">
                            <div class="card-body p-4">
                                <form action="/our-teacher">
                                    <div class="row">
                                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12">
                                            {{-- <div class="input-group d-flex w-100 float-start">
                                                <input type="text" class="form-control border-end-0 my-2" placeholder="Search ..." value="{{ request('search') }}" name="search">
                                                <button class="btn input-group-text bg-transparent border-start-0 text-muted my-2" type="submit">
                                                    <i class="fe fe-search text-muted" aria-hidden="true"></i>
                                                </button>
                                            </div> --}}
                                        </div>
                                        <div class="col-xl-3 col-lg-12">
                                            <a href="{{ route('home') }}" class="btn btn-primary btn-block float-end my-2"><i class="fa fa-arrow-left me-2"></i>Kembali</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ROW-3 OPEN -->
            <div class="section bg-landing pb-0 bg-image-style" id="About">
                <div class="container">
                    <div class="row">
                        <section class="sptb demo-screen-demo" id="faqs">
                            <div class="container">
                                <div class="row align-items-center">
                                    <h4 class="text-center fw-semibold">Visi dan Misi</h4>
                                    <span class="landing-title"></span>
                                    <h2 class="text-center fw-semibold">Visi</h2>
                                    <div class="col-lg-12">
                                        <div class="row justify-content-center">
                                            <p class="col-lg-9 text-default sub-text mb-7 fs-20 text-center">
                                                Mengembangkan potensi peserta didik dengan menyelenggarakan pendidikan dan pengajaran berbasis teknologi informasi dan membekali pendidik tentang ilmu pengetahuan, wawasan kebangsaan, dan global, sikap, dan nilai kristenisasi, sebagai bagian dari pemerintah.
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <h2 class="text-center fw-semibold">Misi</h2>
                                    <div class="col-lg-12">
                                        <div class="row justify-content-center">
                                            <p class="col-lg-9 fs-20 text-center">Peserta didik mampu mengembangkan seluruh potensinya berdasarkan semangat iman dan cinta kasih.</p>
                                            <p class="col-lg-9 fs-20 text-center">Meningkatkan pembinaan kerohanian secara intensif melalui pembinaan dan kegiatan kerohanian di sekolah.</p>
                                            <p class="col-lg-9 fs-20 text-center">Menyediakan sarana dan prasarana pembelajaran yang mendukung pembelajaran berbasis Informasi dan Teknologi.</p>
                                            <p class="col-lg-9 fs-20 text-center">Meningkatkan kualitas, dedikasi dan profesionalisme guru, sehingga dapat mengikuti perkembangan ilmu pengetahuan dan teknologi serta berbasis Informasi dan Teknologi.</p>
                                            <p class="col-lg-9 fs-20 text-center">Mewujudkan proses metode pembelajaran yang kreatif, efektif, inovatif dan interaktif, menyenangkan untuk mendorong siswa mencintai belajar sepanjang hayatnya.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!-- ROW-3 CLOSED -->
            
        </div>

        @include('front_layouts.footer')
        
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{ asset('assets_front/js/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('assets_front/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets_front/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- COUNTERS JS-->
    <script src="{{ asset('assets_front/plugins/counters/counterup.min.js') }}"></script>
    <script src="{{ asset('assets_front/plugins/counters/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets_front/plugins/counters/counters-1.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('assets_front/plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets_front/plugins/company-slider/slider.js') }}"></script>

    <!-- Star Rating Js-->
    <script src="{{ asset('assets_front/plugins/rating/jquery-rate-picker.js') }}"></script>
    <script src="{{ asset('assets_front/plugins/rating/rating-picker.js') }}"></script>

    <!-- Star Rating-1 Js-->
    <script src="{{ asset('assets_front/plugins/ratings-2/jquery.star-rating.js') }}"></script>
    <script src="{{ asset('assets_front/plugins/ratings-2/star-rating.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('assets_front/js/sticky.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('assets_front/js/landing.js') }}"></script>

</body>

</html>