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
    <title>@yield('title') – Bootstrap 5 Admin & Dashboard Template</title>

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
                                            <div class="input-group d-flex w-100 float-start">
                                                <input type="text" class="form-control border-end-0 my-2" placeholder="Search ..." value="{{ request('search') }}" name="search">
                                                <button class="btn input-group-text bg-transparent border-start-0 text-muted my-2" type="submit">
                                                    <i class="fe fe-search text-muted" aria-hidden="true"></i>
                                                </button>
                                            </div>
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
                        <h4 class="text-center fw-semibold">Blog Posts</h4>
                        <span class="landing-title"></span>
                        <div class="col-lg-12">
                            <div class="card bg-transparent">
                                <div class="card-body text-dark">
                                    <div class="statistics-info">
                                        <div class="row">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab-11" role="tabpanel">
                                                    <div class="row">
                                                        @if ($berita->isNotEmpty())
                                                            @foreach ($berita as $item)
                                                            <div class="col-md-6 col-xl-4 col-sm-6">
                                                                <div class="card">
                                                                    <div class="product-grid6">
                                                                        <div class="product-image6 p-5">
                                                                            <img class="img-fluid br-7 w-100" src="{{ asset('images/guru/' . $item->gambar) }}" alt="img">
                                                                        </div>
                                                                        <div class="card-body pt-0">
                                                                            <div class="product-content text-center">
                                                                                <h1 class="title fw-bold fs-20">{{ $item->judul_berita }}</h1>
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        {!! $item->berita !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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