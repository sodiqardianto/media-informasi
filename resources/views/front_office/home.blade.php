@extends('front_layouts.main')
@section('title', 'Home')
@section('content')
    <!--app-content open-->
    <div class="main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container">
                <div class="">

                    <!-- ROW-8 OPEN -->
                    <div class="section bg-landing" id="Blog">
                        <div class="container">
                            <div class="row">
                                <h4 class="text-center fw-semibold">Berita</h4>
                                <span class="landing-title"></span>
                                <h2 class="text-center fw-semibold mb-7">Berita Terbaru.</h2>
                                @if ($recentPosts->isNotEmpty())
                                    @foreach ($recentPosts as $item)
                                        <div class="col-lg-6">
                                            <div class="card bg-transparent reveal">
                                                <div class="card-body px-1">
                                                    <div class="d-flex overflow-visible">
                                                        <a href="{{ route('detail-post', $item->id) }}"
                                                            class="card-aside-column br-5 cover-image"
                                                            data-bs-image-src="{{ asset('assets/images/berita/' . $item->gambar) }}"
                                                            style="background: url(&quot;{{ asset('assets/images/berita/' . $item->gambar) }}&quot;) center center;"></a>
                                                        <div class="ps-3 flex-column">
                                                            <span
                                                                class="badge bg-primary me-1 mb-1 mt-1">{{ $item->kategori->namakategori }}</span>
                                                            <h3><a
                                                                    href="{{ route('detail-post', $item->id) }}">{{ $item->judul }}</a>
                                                            </h3>
                                                            <div class="">
                                                                {{ substr(strip_tags($item->berita), 0, 200) }} @if (strlen(strip_tags($item->berita)) > 50)
                                                                    <a href="{{ route('detail-post', $item->id) }}"
                                                                        class="btn btn-default btn-sm">Read More</a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-12">
                                        <h3 class="text-center">Belum ada Berita</h3>
                                    </div>
                                @endif
                                <div class="text-center">
                                    <a href="{{ route('our-post') }}" target="_blank"
                                        class="btn btn-outline-primary pt-2 pb-2">
                                        <i class="fe fe-arrow-right me-2 d-inline-flex"></i> Lihat lebih banyak
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW-8 CLOSED -->

                    <!-- ROW-3 OPEN -->
                    <div class="section bg-landing pb-0 bg-image-style" id="About">
                        <div class="container">
                            <div class="row">
                                <h4 class="text-center fw-semibold">Guru Kami</h4>
                                <span class="landing-title"></span>
                                <div class="col-lg-12">
                                    <div class="card bg-transparent">
                                        <div class="card-body text-dark">
                                            <div class="statistics-info">
                                                <div class="row">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab-11" role="tabpanel">
                                                            <div class="row">
                                                                @if ($recentGuru->isNotEmpty())
                                                                    @foreach ($recentGuru as $item)
                                                                        <div class="col-md-6 col-xl-4 col-sm-6">
                                                                            <div class="card">
                                                                                <div class="product-grid6">
                                                                                    <div class="product-image6 p-5">
                                                                                        <img class="img-fluid br-7 w-100"
                                                                                            src="{{ asset('assets/images/guru/' . $item->picture) }}"
                                                                                            alt="img">
                                                                                    </div>
                                                                                    <div class="card-body pt-0">
                                                                                        <div
                                                                                            class="product-content text-center">
                                                                                            <h1 class="title fw-bold fs-20">
                                                                                                {{ $item->namaguru }}</h1>
                                                                                            <div class="row">
                                                                                                <div class="col-4">
                                                                                                    <strong>NIPN</strong>
                                                                                                </div>
                                                                                                <div class="col-2">
                                                                                                    :
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    {{ $item->nipn }}
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-4">
                                                                                                    <strong>Lulusan</strong>
                                                                                                </div>
                                                                                                <div class="col-2">
                                                                                                    :
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    {{ $item->pendidikanterakhir }}
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-4">
                                                                                                    <strong>Keahlian
                                                                                                        Bahasa</strong>
                                                                                                </div>
                                                                                                <div class="col-2">
                                                                                                    :
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    {{ $item->keahlianbahasa }}
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                @else
                                                                    <div class="col-12">
                                                                        <h3 class="text-center">Belum ada guru</h3>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="{{ route('our-teacher') }}" class="btn btn-primary mb-5"><i
                                            class="fe fe-arrow-right mx-2"></i>Lihat Guru Kami ...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW-3 CLOSED -->

                    <!-- ROW-10 OPEN -->
                    <div class="bg-image-landing section pb-0 mb-2" id="Contact">
                        <div class="container">
                            <div class="">
                                <div class="card card-shadow reveal">
                                    <h4 class="text-center fw-semibold mt-7">Kontak</h4>
                                    <span class="landing-title"></span>
                                    <h2 class="text-center fw-semibold mb-0 px-2">Terhubung dengan <span
                                            class="text-primary">Kita.</span></h2>
                                    <div class="card-body p-5 pb-6 text-dark">
                                        <div class="statistics-info p-4">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-9">
                                                    <div class="mt-3">
                                                        <div class="text-dark">
                                                            <div class="services-statistics reveal my-5">
                                                                <div class="row text-center">
                                                                    <div class="col-xl-3 col-md-6 col-lg-6">
                                                                        <div class="card">
                                                                            <div class="card-body p-0">
                                                                                <div class="counter-status">
                                                                                    <div
                                                                                        class="counter-icon bg-primary-transparent box-shadow-primary">
                                                                                        <i
                                                                                            class="fe fe-map-pin text-primary fs-23"></i>
                                                                                    </div>
                                                                                    <h4 class="mb-2 fw-semibold">Location
                                                                                    </h4>
                                                                                    <p>Jalan Palem Raja 3 No 6, Panunggangan
                                                                                        Barat, Cibodas, Kota Tangerang,
                                                                                        Banten - 15139</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3 col-md-6 col-lg-6">
                                                                        <div class="card">
                                                                            <div class="card-body p-0">
                                                                                <div class="counter-status">
                                                                                    <div
                                                                                        class="counter-icon bg-secondary-transparent box-shadow-secondary">
                                                                                        <i
                                                                                            class="fe fe-headphones text-secondary fs-23"></i>
                                                                                    </div>
                                                                                    <h4 class="mb-2 fw-semibold"> Phone &
                                                                                        Email</h4>
                                                                                    <p class="mb-0">021 55767510</p>
                                                                                    <p>info@kumnamu.sch.id</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3 col-md-6 col-lg-6">
                                                                        <div class="card">
                                                                            <div class="card-body p-0">
                                                                                <div class="counter-statuss">
                                                                                    <div
                                                                                        class="counter-icon bg-success-transparent box-shadow-success">
                                                                                        <i
                                                                                            class="fe fe-mail text-success fs-23"></i>
                                                                                    </div>
                                                                                    <h4 class="mb-2 fw-semibold">
                                                                                        Contact</h4>
                                                                                    <p class="mb-0">
                                                                                        https://kumnamu.sch.id/</p>
                                                                                    <p>info@kumnamu.sch.id</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3 col-md-6 col-lg-6">
                                                                        <div class="card">
                                                                            <div class="card-body p-0">
                                                                                <div class="counter-status">
                                                                                    <div
                                                                                        class="counter-icon bg-danger-transparent box-shadow-danger">
                                                                                        <i
                                                                                            class="fe fe-airplay text-danger fs-23"></i>
                                                                                    </div>
                                                                                    <h4 class="mb-2 fw-semibold">Working
                                                                                        Hours</h4>
                                                                                    <p class="mb-0">Senin - Jumat: 07:00
                                                                                        - 14:00</p>
                                                                                    <p>Sabtu - Minggu: Libur</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-xl-9">
                                                <div class="">
                                                    <form class="form-horizontal reveal revealrotate m-t-20"
                                                        action="index.html">
                                                        <div class="form-group">
                                                            <div class="col-xs-12">
                                                                <input class="form-control" type="text"
                                                                    required="" placeholder="Username*">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-xs-12">
                                                                <input class="form-control" type="email"
                                                                    required="" placeholder="Email*">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-xs-12">
                                                                <textarea class="form-control"
                                                                    rows="5">Your Comment*</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <a href="javascript:void(0)"
                                                                class="btn btn-primary btn-rounded  waves-effect waves-light">Submit</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW-10 CLOSED -->

                </div>
            </div>
            <!-- CONTAINER CLOSED-->
        </div>
    </div>
    <!--app-content closed-->
@endsection
