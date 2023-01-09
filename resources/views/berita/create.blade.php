@extends('layouts.main')
@section('title', 'Berita')
@section('content')
<!--app-content open-->
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
                        <li class="breadcrumb-item"><a href="{{ route('berita.index') }}">@yield('title')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah @yield('title')</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <div class="row">
                <div class="col-xl-8">
                    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Tambah @yield('title')</div>
                            </div>
                            <div class="card-body">
                                <div class="row mb-4">
                                    <label class="col-md-3 form-label">Judul Berita:</label>
                                    <div class="">
                                        <input type="text" name="judul_berita" class="form-control @error('judul_berita') is-invalid state-invalid @enderror" placeholder="Judul Berita ...">
                                        @error('judul_berita')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-3 form-label">Kategori :</label>
                                    <div class="">
                                        <select name="kategori" class="form-control form-select select2 @error('kategori') is-invalid state-invalid @enderror" data-bs-placeholder="Pilih Kategori">
                                            <option value="" selected disabled>Pilih Kategori</option>
                                            @foreach ($kategori as $item)
                                                <option value="{{ $item->id }}">{{ $item->namakategori }}</option>
                                            @endforeach
                                        </select>
                                        @error('kategori')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Row -->
                                <div class="row">
                                    <label class="col-md-3 form-label mb-4">Berita :</label>
                                    <div class="mb-4">
                                        <textarea class="content" name="berita" required></textarea>
                                    </div>
                                </div>
                                <!--End Row-->

                                <div class="form-group">
                                    <label class="form-label">Foto</label>
                                    <input type="file" class="form-control-file @error('picture') is-invalid state-invalid @enderror" id="picture" name="gambar">
                                    @error('picture')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <img id="image" src="/images/guru/default.jpg" width="200px" height="200px">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Post</button>
                                <a href="{{ route('berita.index') }}" class="btn btn-default float-end">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Recent Posts</div>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="d-flex overflow-visible">
                                    <a href="blog-details.html" class="card-aside-column br-5 cover-image" data-bs-image-src="../assets/images/media/19.jpg" style="background: url(&quot;../assets/images/media/19.jpg&quot;) center top;"></a>
                                    <div class="ps-3 flex-column">
                                        <span class="badge bg-danger me-1 mb-1 mt-1">Lifestyle</span>
                                        <h4><a href="blog-details.html">Generator on the Internet..</a></h4>
                                        <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                    </div>
                                </div>
                                <div class="d-flex overflow-visible mt-5">
                                    <a href="blog-details.html" class="card-aside-column br-5 cover-image" data-bs-image-src="../assets/images/media/22.jpg" style="background: url(&quot;../assets/images/media/19.jpg&quot;) center top;"></a>
                                    <div class="ps-3 flex-column">
                                        <span class="badge bg-primary me-1 mb-1 mt-1">Business</span>
                                        <h4><a href="blog-details.html">Voluptatem quia voluptas...</a></h4>
                                        <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                    </div>
                                </div>
                                <div class="d-flex overflow-visible mt-5">
                                    <a href="blog-details.html" class="card-aside-column br-5 cover-image" data-bs-image-src="../assets/images/media/12.jpg" style="background: url(&quot;../assets/images/media/19.jpg&quot;) center top;"></a>
                                    <div class="ps-3 flex-column">
                                        <span class="badge bg-secondary me-1 mb-1 mt-1">Travel</span>
                                        <h4><a href="blog-details.html">Generator on the Internet..</a></h4>
                                        <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                    </div>
                                </div>
                                <div class="d-flex overflow-visible mt-5">
                                    <a href="blog-details.html" class="card-aside-column br-5 cover-image" data-bs-image-src="../assets/images/media/25.jpg" style="background: url(&quot;../assets/images/media/19.jpg&quot;) center top;"></a>
                                    <div class="ps-3 flex-column">
                                        <span class="badge bg-success me-1 mb-1 mt-1">Meeting</span>
                                        <h4><a href="blog-details.html">Voluptatem quia voluptas...</a></h4>
                                        <div class="text-muted">Excepteur sint occaecat cupidatat non proident, accusantium sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>
</div>
<!--app-content closed-->
@endsection
@push('after-script')
<script>
// Mengambil element input file dan img
  const fileInput = document.getElementById('picture');
  const image = document.getElementById('image');

  // Menambahkan event listener untuk input file
  fileInput.addEventListener('change', function(event) {
    // Mengambil file yang diupload
    const file = event.target.files[0];

    // Membuat objek FileReader
    const reader = new FileReader();

    // Menambahkan event listener untuk objek FileReader
    reader.addEventListener('load', function() {
      // Menetapkan src attribute dari element img ke hasil pembacaan file
      image.src = reader.result;
    });

    // Membaca file sebagai URL
    reader.readAsDataURL(file);
  });
</script>
@endpush