@extends('layouts.main')
@section('title', 'Kategori')
@section('content')
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Tambah @yield('title')</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('kategori.index') }}">@yield('title')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah @yield('title')</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <form action="{{ route('kategori.store') }}" method="POST">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Nama Kategori</label>
                                    <input type="text" name="namakategori" class="form-control @error('namakategori') is-invalid state-invalid @enderror" placeholder="Nama" value="{{ old('namakategori') }}" autofocus>
                                    @error('namakategori')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
                                <a href="{{ route('kategori.index') }}" class="btn btn-default"><i class="fa fa-chevron-left"></i> Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Row -->

        </div>
        <!-- CONTAINER CLOSED -->
    </div>
</div>
@endsection