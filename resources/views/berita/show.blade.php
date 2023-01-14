@extends('layouts.main')
@section('title', 'Berita')
@section('content')
<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Detail @yield('title')</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('berita.index') }}">@yield('title')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail @yield('title')</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('berita.index') }}" class="btn btn-primary float-end my-2"><i class="fa fa-arrow-left me-2"></i>Kembali</a>
                    </div>
                    <img class="card-img-top " src="{{ asset('assets/images/berita/' . $berita->gambar) }}" alt="{{ $berita->gambar }}">
                    <div class="card-body">
                        <div class="d-md-flex">
                            <a href="javascript:void(0);" class="d-flex me-4 mb-2"><i class="fe fe-calendar fs-16 me-1 p-3 bg-secondary-transparent text-secondary bradius"></i>
                                <div class="mt-0 mt-3 ms-1 text-muted font-weight-semibold">{{ date('d F Y', strtotime($berita->created_at)); }}</div>
                            </a>
                            <a href="profile.html" class="d-flex mb-2"><i class="fe fe-user fs-16 me-1 p-3 bg-primary-transparent text-primary bradius"></i>
                                <div class="mt-0 mt-3 ms-1 text-muted font-weight-semibold">{{ $berita->user->name }}</div>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3><a href="javascript:void(0)"> {{ $berita->judul }}</a></h3>
                        <p class="card-text">{!! $berita->berita !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>
</div>
@endsection