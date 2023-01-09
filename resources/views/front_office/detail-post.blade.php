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
    <title>Detail Post – Bootstrap 5 Admin & Dashboard Template</title>

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
                                                {{-- <input type="text" class="form-control border-end-0 my-2" placeholder="Search ..." value="{{ request('search') }}" name="search">
                                                <button class="btn input-group-text bg-transparent border-start-0 text-muted my-2" type="submit">
                                                    <i class="fe fe-search text-muted" aria-hidden="true"></i>
                                                </button> --}}
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

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <img class="card-img-top " src="{{ asset('/images/berita/' . $berita->gambar .'') }}" alt="{{ $berita->gambar }}">
                            <div class="card-body">
                                <div class="d-md-flex">
                                    <a href="javascript:void(0);" class="d-flex me-4 mb-2"><i class="fe fe-calendar fs-16 me-1 p-3 bg-secondary-transparent text-secondary bradius"></i>
                                        <div class="mt-0 mt-3 ms-1 text-muted font-weight-semibold">{{ date('d F Y', strtotime($berita->created_at)); }}</div>
                                    </a>
                                    <a href="profile.html" class="d-flex mb-2"><i class="fe fe-user fs-16 me-1 p-3 bg-primary-transparent text-primary bradius"></i>
                                        <div class="mt-0 mt-3 ms-1 text-muted font-weight-semibold">{{ $berita->user->name }}</div>
                                    </a>
                                    {{-- <div class="ms-auto">
                                        <a href="javascript:void(0);" class="d-flex mb-2"><i class="fe fe-message-square fs-16 me-1 p-3 bg-success-transparent text-success bradius"></i>
                                            <div class="mt-0 mt-3 ms-1 text-muted font-weight-semibold">13 Comments</div>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="card-body">
                                <h3>{{ $berita->judul_berita }}</h3>
                                <p class="card-text">{!! $berita->berita !!}</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Kirim Komentar</div>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal  m-t-20" action="{{ route('pesan.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input class="form-control @error('nama_lengkap') is-invalid state-invalid @enderror" required="" type="text" name="nama_lengkap" placeholder="Nama Lengkap*">
                                            @error('nama_lengkap')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input class="form-control @error('no_telp') is-invalid state-invalid @enderror" required="" type="number" name="no_telp" placeholder="Nomor Telepon*">
                                            @error('no_telp')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input class="form-control @error('email') is-invalid state-invalid @enderror" required="" type="email" name="email" placeholder="Email*">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <textarea class="form-control" name="komentar" rows="5" required placeholder="Komentarmu*"></textarea>
                                        </div>
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-primary btn-rounded  waves-effect waves-light">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Recent Posts</div>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    @foreach ($recentPosts as $item)                                        
                                    <div class="d-flex overflow-visible mt-5">
                                        <a href="blog-details.html" class="card-aside-column br-5 cover-image" data-bs-image-src="../assets/images/media/19.jpg" style="background: url(&quot;../assets/images/media/19.jpg&quot;) center center;"></a>
                                        <div class="ps-3 flex-column">
                                            <h4><a href="blog-details.html">{{ $item->judul_berita }}</a></h4>
                                            <div class="text-muted">{{ substr(strip_tags($item->berita), 0, 200) }} @if (strlen(strip_tags($item->berita)) > 50) <a href="{{ route('detail-post', $item->id) }}" class="btn btn-default btn-sm">Read More</a> @endif</div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
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

    <!-- INTERNAL Notifications js -->
    <script src="{{ asset('assets/plugins/notify/js/rainbow.js') }}"></script>
    {{-- <script src="{{ asset('assets/plugins/notify/js/sample.js') }}"></script> --}}
    <script src="{{ asset('assets/plugins/notify/js/jquery.growl.js') }}"></script>
    <script src="{{ asset('assets/plugins/notify/js/notifIt.js') }}"></script>

    <script>
        @if(session()->has('success'))
            notif({
                msg: "{{ session('success') }}",
                type: "success",
            })
        @elseif(session()->has('error'))
            notif({
                msg: "{{ session('error') }}",
                type: "error",
            })
        @endif
    </script>

</body>

</html>