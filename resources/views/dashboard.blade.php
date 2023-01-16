@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">@yield('title')</h1>
                <div>
                    <ol class="breadcrumb">
                        {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li> --}}
                        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h6 class="">Total Berita</h6>
                                            <h2 class="mb-0 number-font">{{ $totalBerita }}</h2>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <canvas id="saleschart"
                                                    class="h-8 w-9 chart-dropshadow"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <span class="text-muted fs-12"><span class="text-secondary"><i class="fe fe-arrow-up-circle  text-secondary"></i> 5%</span>Last week</span> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h6 class="">Total Pesan</h6>
                                            <h2 class="mb-0 number-font">{{ $totalPesan }}</h2>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <canvas id="leadschart"
                                                    class="h-8 w-9 chart-dropshadow"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <span class="text-muted fs-12"><span class="text-pink"><i
                                                class="fe fe-arrow-down-circle text-pink"></i> 0.75%</span>
                                        Last 6 days</span> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h6 class="">Total Guru</h6>
                                            <h2 class="mb-0 number-font">{{ $totalGuru }}</h2>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <canvas id="profitchart"
                                                    class="h-8 w-9 chart-dropshadow"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <span class="text-muted fs-12"><span class="text-green"><i
                                                class="fe fe-arrow-up-circle text-green"></i> 0.9%</span>
                                        Last 9 days</span> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h6 class="">Total Kategori</h6>
                                            <h2 class="mb-0 number-font">{{ $totalKategori }}</h2>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <canvas id="costchart"
                                                    class="h-8 w-9 chart-dropshadow"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <span class="text-muted fs-12"><span class="text-warning"><i
                                                class="fe fe-arrow-up-circle text-warning"></i> 0.6%</span>
                                        Last year</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-1 END -->
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
@endsection