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
                            <h4 class="text-center fw-semibold">Blog Posts </h4>
                            <span class="landing-title"></span>
                            <h2 class="text-center fw-semibold mb-7">Latest from Blog.</h2>
                            @if ($recentPosts->isNotEmpty())
                                @foreach ($recentPosts as $item)
                                    <div class="col-lg-6">
                                        <div class="card bg-transparent reveal">
                                            <div class="card-body px-1">
                                                <div class="d-flex overflow-visible">
                                                    <a href="{{ route('detail-post', $item->id) }}"
                                                        class="card-aside-column br-5 cover-image"
                                                        data-bs-image-src="{{ asset('assets_front/images/media/12.jpg') }}"
                                                        style="background: url(&quot;{{asset('assets_front/images/media/12.jpg') }}&quot;) center center;"></a>
                                                    <div class="ps-3 flex-column">
                                                        <span class="badge bg-primary me-1 mb-1 mt-1">{{ $item->kategori->namakategori }}</span>
                                                        <h3><a href="{{ route('detail-post', $item->id) }}">{{ $item->judul_berita }}</a></h3>
                                                        <div class="">{{ substr(strip_tags($item->berita), 0, 200) }} @if (strlen(strip_tags($item->berita)) > 50) <a href="{{ route('detail-post', $item->id) }}" class="btn btn-default btn-sm">Read More</a> @endif</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="text-center">
                                <a href="{{ route('our-post') }}" target="_blank" class="btn btn-outline-primary pt-2 pb-2">
                                    <i class="fe fe-arrow-right me-2 d-inline-flex"></i>Discover More
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
                            <h4 class="text-center fw-semibold">Our Teacher</h4>
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
                                                                                <img class="img-fluid br-7 w-100" src="{{ asset('images/guru/' . $item->picture) }}" alt="img">
                                                                            </div>
                                                                            <div class="card-body pt-0">
                                                                                <div class="product-content text-center">
                                                                                    <h1 class="title fw-bold fs-20">{{ $item->namaguru }}</h1>
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
                                                                                            <strong>Keahlian Bahasa</strong>
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
                                <a href="{{ route('our-teacher') }}" class="btn btn-primary mb-5"><i class="fe fe-arrow-right mx-2"></i>Check Our Teacher ...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-3 CLOSED -->

            </div>
        </div>
        <!-- CONTAINER CLOSED-->
    </div>
</div>
<!--app-content closed-->
@endsection