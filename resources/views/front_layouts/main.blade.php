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

    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 25px;
            right: 1430px;
            background-color: #0C9;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
        }

        .my-float {
            margin-top: 22px;
        }
    </style>

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

            <!-- app-Header -->
            <div class="hor-header header">
                <div class="container main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                            href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="index.html">
                            <img src="{{ asset('assets_front/images/brand/logo-white.png') }}"
                                class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{ asset('assets_front/images/brand/logo-kumnamu.png') }}"
                                class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <div class="landing-top-header overflow-hidden">
                <div class="top sticky">
                    <!--APP-SIDEBAR-->
                    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                    <div class="app-sidebar horizontal-main">
                        <div class="container">
                            <div class="row">
                                <div class="main-sidemenu navbar px-0">
                                    <a class="navbar-brand ps-0 d-none d-lg-block" href="">
                                        <img alt="" class="logo-2"
                                            src="{{ asset('assets_front/images/brand/logo-kumnamu.png') }}">
                                        <img src="{{ asset('assets_front/images/brand/logo-white.png') }}"
                                            class="logo-3" alt="logo">
                                    </a>
                                    <ul class="side-menu">
                                        <li class="slide">
                                            <a class="side-menu__item active" data-bs-toggle="slide" href="#home">
                                                <span class="side-menu__label">Home</span>
                                            </a>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-bs-toggle="slide" href="#Blog">
                                                <span class="side-menu__label">Berita</span>
                                            </a>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-bs-toggle="slide" href="#About">
                                                <span class="side-menu__label">Guru</span>
                                            </a>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-bs-toggle="slide" href="#Contact">
                                                <span class="side-menu__label">Kontak</span>
                                            </a>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                                <span class="side-menu__label">Tentang</span><i
                                                    class="angle fe fe-chevron-right"></i></a>
                                            <ul class="slide-menu">
                                                <li class="side-menu-label1"><a href="javascript:void(0)">Tentang</a>
                                                </li>
                                                <li><a href="{{ route('visi-misi') }}" class="slide-item">Visi Misi</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-bs-toggle="slide"
                                                href="javascript:void(0)">
                                                <span class="side-menu__label">Kategori</span><i
                                                    class="angle fe fe-chevron-right"></i></a>
                                            <ul class="slide-menu">
                                                <li class="side-menu-label1"><a href="javascript:void(0)">Kategori</a>
                                                </li>
                                                <li>
                                                    <?php $kategori = App\Models\Kategori::whereNotIn('id', [1])->get(); ?>
                                                    @foreach ($kategori as $item)
                                                <li>
                                                    <a href="{{ route('detail.showPage', $item->id) }}"
                                                        class="slide-item">{{ $item->namakategori }}</a>
                                                </li>
                                                @endforeach
                                        </li>
                                    </ul>
                                    </li>
                                    </ul>
                                    <div class="header-nav-right d-none d-lg-flex">
                                        <a href="{{ route('login') }}"
                                            class="btn ripple btn-min w-sm btn-primary me-2 my-auto d-lg-none d-xl-block d-block"
                                            target="_blank">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/APP-SIDEBAR-->
                </div>
                <div id="home">
                    <div class="row">
                        <div id="carousel-captions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php $berita = App\Models\Berita::where('carousel', 1)->get(); ?>
                                @foreach ($berita as $item)
                                    <div class="carousel-item {{ $item->id == 1 ? 'active' : '' }}">
                                        <img class="d-block w-100 br-5" alt=""
                                            src="{{ asset('assets/images/berita/' . $item->gambar) }}"
                                            style="height: 42vw;" data-bs-holder-rendered="true">
                                        <div class="carousel-item-background d-none d-md-block"></div>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>{{ $item->judul }}</h3>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carousel-captions" role="button"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-captions" role="button"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')

        </div>

        @include('front_layouts.footer')

    </div>
    <a type="button" data-bs-toggle="modal" data-bs-target="#input-modal" class="float">
        <i class="fa fa-comments my-float"></i>
    </a>

    <!-- Inout modal -->
    <div class="modal fade" id="input-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Kirim Pesan</h6>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('pesan.store') }}" method="PSOT">
                    <div class="modal-body">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_lengkap" class="col-form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"
                                placeholder="Nama Lengkap" required="">
                        </div>
                        <div class="mb-3">
                            <label for="no_telp" class="col-form-label">No. Telepon</label>
                            <input type="number" class="form-control" name="no_telp" id="no_telp"
                                placeholder="No. Telepon" required="">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Email" required="">
                        </div>
                        <div class="mb-3">
                            <label for="komentar" class="col-form-label">Pesan:</label>
                            <textarea class="form-control" name="komentar" id="komentar" placeholder="Pesan ..." required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn ripple btn-success" type="submit">Kirim</button>
                        <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
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
